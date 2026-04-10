<?php

class Email
{
	protected static $instance;
	
	protected $to = array();
	protected $cc = array();
	protected $bcc = array();
	protected $reply_to = array();
	protected $body = '';
	protected $subject = '';
	protected $headers = array();
	protected $attachments = array();
	
	protected $config = array(
		'newline'  => "\n",
		'encoding' => '7bit',
		'charset'  => 'ISO-2022-JP',
		'body_charset' => 'ISO-2022-JP-MS',
		'wordwrap' => 76,
	);

	public function __construct() {}
	
	public static function forge()
	{
		if (static::$instance === null) {
			static::$instance = new static;
		}
		return static::$instance;
	}
	
	public function to($email, $name = false)
	{
		static::add_to_list('to', $email, $name);
		return $this;
	}
	
	public function cc($email, $name = false)
	{
		static::add_to_list('cc', $email, $name);
		return $this;
	}
	
	public function bcc($email, $name = false)
	{
		static::add_to_list('bcc', $email, $name);
		return $this;
	}

	public function return_path($email)
	{
		$this->config['return_path'] = (string) $email;

		return $this;
	}

	public function from($email, $name = false)
	{
		$this->config['from']['email'] = (string) $email;
		$this->config['from']['name']  = (is_string($name)) ? $name : false;

		if ($this->config['from']['name'])
		{
			$this->config['from']['name'] = $this->encode_mimeheader((string) $this->config['from']['name']);
		}

		return $this;
	}

	public function subject($subject)
	{
		$subject = $this->encode_mimeheader((string) $subject);
		$this->subject = (string) $subject;

		return $this;
	}

	public function body($body)
	{
		$this->body = (string) $body;
		
		return $this;

	}

	public function clear_addresses()
	{
		static::clear_list(array('to', 'cc', 'bcc'));
		return $this;
	}

	protected function add_to_list($list, $email, $name = false)
	{
		if ( ! is_array($email))
		{
			$email = (is_string($name)) ? array($email => $name) : array($email);
		}

		foreach ($email as $_email => $name)
		{
			if (is_numeric($_email))
			{
				$_email = $name;
				$name = false;
			}

			if ($name)
			{
				$name = $this->encode_mimeheader($name);
			}

			$this->{$list}[$_email] = array(
				'name' => $name,
				'email' => $_email,
			);
		}
	}

	protected function clear_list($list)
	{
		is_array($list) or $list = array($list);

		foreach ($list as $_list)
		{
			$this->{$_list} = array();
		}
	}

	protected function encode_mimeheader($header)
	{
		$transfer_encoding = ($this->config['encoding'] === 'quoted-printable') ? 'Q' : 'B' ;
		return mb_encode_mimeheader($header, $this->config['body_charset'], $transfer_encoding, $this->config['newline']);
	}
	
	protected static function encode_string($string, $encoding, $newline)
	{
		$string = mb_convert_encoding($string, $encoding);
		return static::prep_newlines(rtrim($string, $newline), $newline);
	}
	
	protected static function prep_newlines($string, $newline)
	{
		$replace = array(
			"\r\n"	=> "\n",
			"\n\r"	=> "\n",
			"\r"	=> "\n",
			"\n"	=> $newline,
		);

		foreach ($replace as $from => $to)
		{
			$string = str_replace($from, $to, $string);
		}

		return $string;
	}

	protected static function format_addresses($addresses)
	{
		$return = array();

		foreach ($addresses as $recipient)
		{
			$recipient['name'] and $recipient['email'] = $recipient['name'].' <'.$recipient['email'].'>';
			$return[] = $recipient['email'];
		}

		return join(', ', $return);
	}

	public function attach($name, $path)
	{
		$contents = file_get_contents($path);
		$cid = 'cid:'.md5($path);
		$mime = 'application/octet-stream';

		$this->attachments[] = array(
			'name'     => $name,
			'path'     => $path,
			'contents' => chunk_split(base64_encode($contents), 76, $this->config['newline']),
			'mime'     => $mime,
			'cid'      => $cid,
		);
	}
	
	public function clear_attachments()
	{
		$this->attachments = array();
	}

	public function send($validate = null)
	{
		$this->headers = array();
		$this->set_header('Date', date('r'));

		// Set return path
		$this->set_header('Return-Path', $this->config['return_path']);

		$this->set_header('From', static::format_addresses(array($this->config['from'])));

		foreach (array('cc' => 'Cc', 'bcc' => 'Bcc') as $list => $header)
		{
			if (count($this->{$list}) > 0)
			{
				$this->set_header($header, static::format_addresses($this->{$list}));
			}
		}

		// Set message id
//		$this->set_header('Message-ID', $this->get_message_id());

		// Set mime version
		$this->set_header('MIME-Version', '1.0');

		$newline  = $this->config['newline'];
		$charset  = $this->config['charset'];
		$encoding = $this->config['encoding'];
		$wrapping = $this->config['wordwrap'];

		$this->set_header('Content-Transfer-Encoding', $encoding);
		$this->set_header('Content-Type', 'text/plain; charset="'.$charset.'"');

		// Encode messages
		$this->body = static::encode_string($this->body, $this->config['body_charset'], $newline);

		// Set wordwrapping
		$this->body = static::wrap_text($this->body, $wrapping, $newline);

		// Send
		$this->_send();

		return true;
	}

	protected function set_header($header, $value)
	{
		empty($value) or $this->headers[$header] = $value;
	}
	
	protected static function wrap_text($message, $length, $newline)
	{
		$length = ($length > 76) ? 76 : $length;
		$message = wordwrap($message, $length, $newline, false);

		return $message;
	}

	protected function get_header($header = null, $formatted = true)
	{
		if ($header === null)
		{
			return $this->headers;
		}

		if (array_key_exists($header, $this->headers))
		{
			$prefix = ($formatted) ? $header.': ' : '';
			$suffix = ($formatted) ? $this->config['newline'] : '';
			return $prefix.$this->headers[$header].$suffix;
		}

		return '';
	}

	protected function get_attachment_headers($boundary)
	{
		$return = '';

		$newline = $this->config['newline'];
		
		foreach ($this->attachments as $attachment)
		{
			$return .= '--'.$boundary.$newline;
			$return .= 'Content-Type: '.$attachment['mime'].'; name="'.$this->encode_mimeheader($attachment['name']).'"'.$newline;
			$return .= 'Content-Transfer-Encoding: base64'.$newline;
			$return .= 'Content-Disposition: attachment; filename="'.$this->encode_mimeheader($attachment['name']).'"'.$newline.$newline;
			$return .= $attachment['contents'].$newline.$newline;
		}

		return $return;
	}

	protected function _send()
	{
		$message = $this->build_message();
		$return_path = ($this->config['return_path'] !== false) ? $this->config['return_path'] : $this->config['from']['email'];
		
		if ( ! @mail(static::format_addresses($this->to), $this->subject, $message['body'], $message['header'], '-oi -f '.$return_path))
		{
			throw new Exception('Failed sending email');
		}
		return true;
	}
	
	protected function build_message()
	{
		$newline = $this->config['newline'];
		$charset = $this->config['charset'];
		$encoding = $this->config['encoding'];

		$headers = '';
		$parts = array('Date', 'Return-Path', 'From', 'To', 'Cc', 'Bcc', 'Reply-To', 'Subject', 'Message-ID', 'X-Priority', 'X-Mailer', 'MIME-Version');

		foreach ($parts as $part)
		{
			$headers .= $this->get_header($part);
		}
		
		if (count($this->attachments) == 0)
		{
			$headers .= $this->get_header('Content-Type');
			$body = $this->body;
		}
		else
		{
			$uniq_id = md5(uniqid(microtime(true)));
			$boundary = 'B1_'.$uniq_id;
			
			$headers .= 'Content-Type: multipart/mixed;'.$newline;
			$headers .= "\tboundary=\"".$boundary.'"';
			
			$body .= '--'.$boundary.$newline;
			$body .= 'Content-Type: text/plain; charset="'.$charset.'"'.$newline;
			$body .= 'Content-Transfer-Encoding: '.$encoding.$newline.$newline;
			$body .= $this->body.$newline.$newline;
			$body .= $this->get_attachment_headers($boundary);
			$body .= '--'.$boundary.'--';
		}
		
		$headers .= $newline;

		return array(
			'header' => $headers,
			'body' => $body,
		);
	}

}

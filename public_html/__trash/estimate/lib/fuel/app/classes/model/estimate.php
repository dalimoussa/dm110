<?php

class Model_Estimate extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name' => array(
			'label' => 'お名前',
			'validation' => array('trim', 'required'),
		),
		'kana' => array(
			'label' => 'ふりがな',
			'validation' => array('trim'),
		),
		'company' => array(
			'label' => '会社名',
			'validation' => array('trim', 'required'),
		),
		'section' => array(
			'label' => '部署名',
			'validation' => array('trim'),
		),
		'email' => array(
			'label' => 'メールアドレス',
			'validation' => array('trim', 'required', 'valid_email'),
		),
		'tel' => array(
			'label' => '電話番号',
			'validation' => array('trim', 'required', 'match_pattern' => array('/^[0-9\-]*$/')),
		),
		'zip' => array(
			'label' => '郵便番号',
			'validation' => array('trim', 'required', 'match_pattern' => array('/^\d{3}\-?\d{4}$/')),
		),
		'pref' => array(
			'label' => '住所（都道府県）',
			'validation' => array('required', 'match_collection'),
			'form' => array(
				'type' => 'select',
				'options' => array(
					'北海道'   => '北海道',
					'青森県'   => '青森県',
					'岩手県'   => '岩手県',
					'宮城県'   => '宮城県',
					'秋田県'   => '秋田県',
					'山形県'   => '山形県',
					'福島県'   => '福島県',
					'茨城県'   => '茨城県',
					'栃木県'   => '栃木県',
					'群馬県'   => '群馬県',
					'埼玉県'   => '埼玉県',
					'千葉県'   => '千葉県',
					'東京都'   => '東京都',
					'神奈川県' => '神奈川県',
					'新潟県'   => '新潟県',
					'富山県'   => '富山県',
					'石川県'   => '石川県',
					'福井県'   => '福井県',
					'山梨県'   => '山梨県',
					'長野県'   => '長野県',
					'岐阜県'   => '岐阜県',
					'静岡県'   => '静岡県',
					'愛知県'   => '愛知県',
					'三重県'   => '三重県',
					'滋賀県'   => '滋賀県',
					'京都府'   => '京都府',
					'大阪府'   => '大阪府',
					'兵庫県'   => '兵庫県',
					'奈良県'   => '奈良県',
					'和歌山県' => '和歌山県',
					'鳥取県'   => '鳥取県',
					'島根県'   => '島根県',
					'岡山県'   => '岡山県',
					'広島県'   => '広島県',
					'山口県'   => '山口県',
					'徳島県'   => '徳島県',
					'香川県'   => '香川県',
					'愛媛県'   => '愛媛県',
					'高知県'   => '高知県',
					'福岡県'   => '福岡県',
					'佐賀県'   => '佐賀県',
					'長崎県'   => '長崎県',
					'熊本県'   => '熊本県',
					'大分県'   => '大分県',
					'宮崎県'   => '宮崎県',
					'鹿児島県' => '鹿児島県',
					'沖縄県'   => '沖縄県',
				),
			),
		),
		'address' => array(
			'label' => '住所',
			'validation' => array('trim', 'required'),
		),
		'contact' => array(
			'label' => '連絡必要時の連絡方法',
			'validation' => array('required', 'match_collection'),
			'form' => array(
				'type' => 'radio',
				'options' => array(
					'メールで連絡してほしい' => 'メールで連絡してほしい',
					'電話で連絡してほしい'   => '電話で連絡してほしい',
					'どちらでも構わない'     => 'どちらでも構わない',
				),
			),
		),
		'subtotal' => array(
			'label' => '計',
			'form' => array(
				'type' => false,
			),
		),
		'taxrate' => array(
			'form' => array(
				'type' => false,
			),
		),
		'tax' => array(
			'label' => '消費税',
			'form' => array(
				'type' => false,
			),
		),
		'total' => array(
			'label' => '合計',
			'form' => array(
				'type' => false,
			),
		),
		'created_at' => array(
			'label' => '登録日時',
			'form' => array(
				'type' => false,
			),
		),
		'updated_at' => array(
			'form' => array(
				'type' => false,
			),
		),
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'estimates';

	protected static $_has_many = array(
		'details' => array(
			'key_from'       => 'id',
			'model_to'       => 'Model_Estimate_Detail',
			'key_to'         => 'estimate_id',
			'cascade_save'   => true,
			'cascade_delete' => false,
		),
		'prints' => array(
			'key_from'       => 'id',
			'model_to'       => 'Model_Estimate_Print',
			'key_to'         => 'estimate_id',
			'cascade_save'   => true,
			'cascade_delete' => false,
		),
	);
	
	protected static $_has_one = array(
		'deliv' => array(
			'key_from'       => 'id',
			'model_to'       => 'Model_Estimate_Deliv',
			'key_to'         => 'estimate_id',
			'cascade_save'   => true,
			'cascade_delete' => false,
		)
	);

	public function save($cascade = null, $use_transaction = false)
	{
		$this->details[] = $this->deliv->get_detail_deliv();
		
		$this->details[] = $this->deliv->get_detail_envelope();
		
		foreach($this->prints as $row => $print)
		{
			$this->details[] = $print->set('number', $row + 2)->get_detail();
		}
		
		foreach ($this->details as $detail)
		{
			$this->subtotal += $detail->amount;
		}
		
		$this->taxrate = Config::get('app.taxrate');
		
		$this->tax = round(bcmul($this->subtotal, $this->taxrate, 2), 0);
		
		$this->total = $this->subtotal + $this->tax;
		
		return parent::save($cascade, $use_transaction);
	}
	
	public function csv_header()
	{
		$headers = array();
		
		$headers = array_merge($headers, self::get_csv_header('Model_Estimate'));
		$headers = array_merge($headers, self::get_csv_header('Model_Estimate_Deliv'));
		
		$headers = array_merge($headers, self::get_csv_header('Model_Estimate_Detail', '発送・封入'));
		$headers = array_merge($headers, self::get_csv_header('Model_Estimate_Detail', '封筒'));
		
		for ($i = 0; $i < 5; $i++)
		{
			$headers = array_merge($headers, self::get_csv_header('Model_Estimate_Print', '印刷'.($i + 1)));
			$headers = array_merge($headers, self::get_csv_header('Model_Estimate_Detail', '印刷'.($i + 1)));
		}
		
		return implode(',', $headers);
	}
	
	public function to_csv()
	{
		$data = array();
		
		$data = array_merge($data, self::get_csv($this));
		$data = array_merge($data, self::get_csv($this->deliv));
		
		$_details = $this->details;
		
		foreach ($_details as $_detail)
		{
			$details[$_detail->number] = $_detail;
		}
		
		unset($_details);
		
		$data = array_merge($data, self::get_csv($details[0]));
		$data = array_merge($data, self::get_csv(isset($details[1]) ? $details[1] : Model_Estimate_Detail::forge()));
		
		$_prints = $this->prints;
		
		$i = $j = count($details) - count($_prints);
		foreach ($_prints as $_print)
		{
			$prints[$i] = $_print;
			$i++;
		}
		
		unset($_prints);
		
		for ($i = 0; $i < 5; $i++)
		{
			$data = array_merge($data, self::get_csv(isset($prints[$i + $j]) ? $prints[$i + $j]  : Model_Estimate_Print::forge()));
			$data = array_merge($data, self::get_csv(isset($prints[$i + $j]) ? $details[$i + $j] : Model_Estimate_Detail::forge()));
		}
		
		return implode(',', $data);
	}
	
	public static function get_csv_header($model, $prefix = null)
	{
		$properties = $model::properties();
		
		$headers = array();
		
		foreach ($properties as $property)
		{
			if (isset($property['label']))
			{
				$label = $property['label'];
				
				if ($prefix != null)
				{
					$label = "[{$prefix}]".$label;
				}
				
				if (strpos($label, '"') !== false or strpos($label, ',') !== false)
				{
					$label = '"'.str_replace('"', '""', $label).'"';
				}
				
				$headers[] = $label;
			}
		}
		
		return $headers;
	}
	
	public static function get_csv($model)
	{
		$properties = $model::properties();
		
		$data = array();
		
		foreach ($properties as $field => $property)
		{
			if (isset($property['label']))
			{
				if (preg_match('/^(.*)_id$/', $field, $matches))
				{
					$value = $model->$matches[1];
				}
				else if ($field == 'created_at')
				{
					$value = Date::forge($model->$field)->format('%Y/%m/%d %H:%M:%S');
				}
				else
				{
					$value = $model->$field;
				}
				
				if (strpos($value, '"') !== false or strpos($value, ',') !== false)
				{
					$value = '"'.str_replace('"', '""', $value).'"';
				}
				
				$data[] = $value;
			}
		}
		
		return $data;
	}

}

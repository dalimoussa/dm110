<?php

class Model_Estimate_Deliv extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'estimate_id' => array(
			'form' => array(
				'type' => false,
			),
		),
		'quantity' => array(
			'label' => '発送数',
			'validation' => array('trim', 'required', 'numeric_min' => array(50), 'numeric_max' => array(50000)),
		),
		'enclosure_number' => array(
			'label' => '封筒への封入点数',
			'validation' => array('trim', 'required', 'numeric_min' => array(1), 'numeric_max' => array(10)),
		),
		'enclosure_weight_id' => array(
			'label' => '封入物の重さ',
			'validation' => array('required', 'match_collection'),
			'form' => array(
				'type' => 'select',
				'options' => array(
					'200'  => '200g以下',
					'500'  => '500g以下',
					'1000' => '1kg以下',
				),
			),
		),
		'enclosure_weight' => array(
			'form' => array(
				'type' => false,
			),
		),
		'thickness_id' => array(
			'label' => 'メール便の厚さ',
			'validation' => array('required', 'match_collection'),
			'form' => array(
				'type' => 'select',
				'options' => array(
					'1'  => '1cm以内',
					'2'  => '2cm以内',
				),
			),
		),
		'thickness' => array(
			'form' => array(
				'type' => false,
			),
		),
		'enclosure_types_id' => array(
			'label' => '封入物の種類',
			'validation' => array('required', 'match_collection'),
			'form' => array(
				'type' => 'checkbox',
				'options' => array(
					'1' => '紙',
					'2' => 'ホッチキス止め',
					'3' => '小冊子',
					'4' => 'カタログ',
					'5' => 'その他',
				),
			),
		),
		'enclosure_types' => array(
			'form' => array(
				'type' => false,
			),
		),
		'carrier_id' => array(
			'label' => '発送方法',
			'validation' => array('required', 'match_collection', 'check_enclosure_weight'),
			'form' => array(
				'type' => 'radio',
				'options' => array(
					'1' => 'クロネコDM便/（旧メール便）',
					'2' => '佐川ゆうメール便/',
				),
			),
		),
		'carrier' => array(
			'form' => array(
				'type' => false,
			),
		),
		'envelope_id' => array(
			'label' => '封筒',
			'validation' => array('required', 'match_collection'),
			'form' => array(
				'type' => 'select',
				'options' => array(
					'101' => '当社にて透明封筒用意/当社A4透明封筒/（通常はこれで問題ございません）',
					'102' => '当社にて透明封筒用意/当社破れにくいA4透明封筒/（破れては困るとき冊子、カタログなど入れる場合）',
//					'201' => '当社にて紙封筒用意/角2クラフト封筒のり無し/',
//					'202' => '当社にて紙封筒用意/長3クラフト封筒のり無し/',
					'301' => 'ご自身で封筒支給される場合/角2封筒テープ付き（ワンタッチ糊）/',
					'302' => 'ご自身で封筒支給される場合/長3封筒テープ付き（ワンタッチ糊）//（見積り料金の他に別途折作業料金が必要になります。）',
					'303' => 'ご自身で封筒支給される場合/角2封筒テープなし//（封筒糊付け作業代）',
					'304' => 'ご自身で封筒支給される場合/長3封筒テープなし//（見積り料金の他に別途折作業料金が必要になります。）',
				),
			),
		),
		'envelope' => array(
			'form' => array(
				'type' => false,
			),
		),
	);

	protected static $_table_name = 'estimate_delivs';
	
	protected static $_belongs_to = array(
		'estimate' => array(
			'key_from'       => 'estimate_id',
			'model_to'       => 'Model_Estimate',
			'key_to'         => 'id',
			'cascade_save'   => false,
			'cascade_delete' => false,
		)
	);
	
	public static function _validation_check_enclosure_weight($val)
	{
		if (Validation::active()->input('enclosure_weight_id') > 200 and $val == 2)
		{
			Validation::active()->set_message('check_enclosure_weight', '封入物の重さが「200g以下」の場合のみ、佐川ゆうメール便を選択できます。');
			return false;
		}
		
		return true;
	}
	
	public function save($cascade = null, $use_transaction = false)
	{
		$this->enclosure_types_id = implode('|', $this->enclosure_types_id);
		$this->enclosure_types = implode('、', $this->enclosure_types);
		
		$this->envelope = self::format_envelope_text($this->envelope);
		
		return parent::save($cascade, $use_transaction);
	}
	
	public function get_detail_deliv()
	{
		$deliv_price = Model_Deliv_Price::query()
			->select('price')
			->where('carrier_id', $this->carrier_id)
			->where('weight', $this->enclosure_weight_id)
			->where('quantity', '>=', $this->quantity)
			->order_by('quantity', 'asc')
			->limit(1)
			->get_one();
		
		$unit_price = $deliv_price->price;
		
		// 封入点数１点追加毎に、200g以内の場合は上記単価に1.3円プラス、200g以上の場合は2円プラス
		$add = ($this->enclosure_weight_id <= 200) ? 1.3 : 2;
		$unit_price = bcadd($unit_price, bcmul($this->enclosure_number - 1, $add, 1), 1);
		
		$detail = Model_Estimate_Detail::forge(array(
			'number'        => 0,
			'description1'  => '封入封閉じ、宛名ラベル作成、発送',
			'description2'  => number_format($this->enclosure_number).'点封入、'.$this->enclosure_weight.'、厚さ'.$this->thickness,
			'quantity'      => $this->quantity,
			'unit_price'    => $unit_price,
			'amount'        => round(bcmul($unit_price, $this->quantity, 2), 0),
		));
		
		return $detail;
	}

	public function get_detail_envelope()
	{
		// 封筒単価
		switch ($this->envelope_id)
		{
			case 101:
				$unit_price = 4;
				break;
			case 102:
				$unit_price = 5;
				break;
			case 303:
			case 304:
				$unit_price = 3;
				break;
			default:
				$unit_price = 0;
		}
		
		$detail = Model_Estimate_Detail::forge(array(
			'number'        => 1,
			'description1'  => '封筒料金',
			'description2'  => self::format_envelope_text($this->envelope),
			'quantity'      => $this->quantity,
			'unit_price'    => $unit_price,
			'amount'        => round(bcmul($unit_price, $this->quantity, 2), 0),
		));
		
		return $detail;
	}

	public function csv_headers()
	{
		$properties = self::properties();
		
		$headers = array();
		
		foreach ($properties as $property)
		{
			if (isset($property['label']))
			{
				$label = $property['label'];
				if (strpos($label, '"') !== false or strpos($label, ',') !== false)
				{
					$label = '"'.str_replace('"', '""', $label).'"';
				}
				
				$headers[] = $label;
			}
		}
		
		return implode(',', $headers);
	}
	
	public static function format_envelope_text($str)
	{
		$parts = explode('/', $str);
		
		$note = isset($parts[3]) ? $parts[3] : '';
		
		return implode('/', array_slice($parts, 0, 2))."\n".$note;
	}
}
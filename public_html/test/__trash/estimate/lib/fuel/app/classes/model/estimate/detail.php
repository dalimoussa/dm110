<?php

class Model_Estimate_Detail extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'estimate_id',
		'number',
		'description1',
		'description2',
		'quantity',
		'unit_price' => array(
			'label' => '単価',
		),
		'amount' => array(
			'label' => '小計',
		),
	);


	protected static $_table_name = 'estimate_details';
	
	protected static $_belongs_to = array(
		'estimate' => array(
			'key_from'       => 'estimate_id',
			'model_to'       => 'Model_Estimate',
			'key_to'         => 'id',
			'cascade_save'   => false,
			'cascade_delete' => false,
		)
	);
	

}

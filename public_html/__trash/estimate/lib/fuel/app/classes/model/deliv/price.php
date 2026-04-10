<?php

class Model_Deliv_Price extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'carrier_id',
		'weight',
		'quantity',
		'price',
	);


	protected static $_table_name = 'deliv_prices';

}

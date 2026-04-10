<?php

class Model_Print_Price extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'size',
		'color',
		'duplex',
		'paper_weight',
		'number',
		'price',
	);


	protected static $_table_name = 'print_prices';

}

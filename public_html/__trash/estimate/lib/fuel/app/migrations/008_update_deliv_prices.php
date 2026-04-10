<?php

namespace Fuel\Migrations;

class Update_deliv_prices
{
	public function up()
	{
		include_once '005_create_deliv_prices.php';
		call_user_func(array(new Create_deliv_prices, 'down'));
		
		\DBUtil::create_table('deliv_prices', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'carrier_id' => array('constraint' => 11, 'type' => 'int'),
			'weight' => array('constraint' => 11, 'type' => 'int'),
			'quantity' => array('constraint' => 11, 'type' => 'int'),
			'price' => array('type' => 'float'),
		), array('id'));
		
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' =>    59, 'price' => 208  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' =>    69, 'price' => 182  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' =>    79, 'price' => 164  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' =>    89, 'price' => 150  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' =>    99, 'price' => 139  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' =>   199, 'price' => 130  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' =>   299, 'price' => 105  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' =>   499, 'price' =>  91  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' =>   999, 'price' =>  83  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' =>  1999, 'price' =>  79  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' =>  2999, 'price' =>  76  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' =>  3999, 'price' =>  74  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' =>  4999, 'price' =>  71  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' =>  9999, 'price' =>  68  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' => 19999, 'price' =>  65  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' => 29999, 'price' =>  64  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   200, 'quantity' => 50000, 'price' =>  63  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' =>    59, 'price' => 209  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' =>    69, 'price' => 183  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' =>    79, 'price' => 165  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' =>    89, 'price' => 151  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' =>    99, 'price' => 140  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' =>   199, 'price' => 131  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' =>   299, 'price' => 106  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' =>   499, 'price' =>  92  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' =>   999, 'price' =>  84  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' =>  1999, 'price' =>  80  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' =>  2999, 'price' =>  77  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' =>  3999, 'price' =>  75  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' =>  4999, 'price' =>  72  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' =>  9999, 'price' =>  69  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' => 19999, 'price' =>  66  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' => 29999, 'price' =>  65  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>   500, 'quantity' => 50000, 'price' =>  64  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' =>    59, 'price' => 210  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' =>    69, 'price' => 184  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' =>    79, 'price' => 166  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' =>    89, 'price' => 152  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' =>    99, 'price' => 141  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' =>   199, 'price' => 132  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' =>   299, 'price' => 107  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' =>   499, 'price' =>  93  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' =>   999, 'price' =>  85  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' =>  1999, 'price' =>  81  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' =>  2999, 'price' =>  78  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' =>  3999, 'price' =>  76  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' =>  4999, 'price' =>  73  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' =>  9999, 'price' =>  70  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' => 19999, 'price' =>  67  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' => 29999, 'price' =>  66  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  1000, 'quantity' => 50000, 'price' =>  65  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' =>    59, 'price' => 218  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' =>    69, 'price' => 192  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' =>    79, 'price' => 174  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' =>    89, 'price' => 160  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' =>    99, 'price' => 149  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' =>   199, 'price' => 140  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' =>   299, 'price' => 115  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' =>   499, 'price' => 101  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' =>   999, 'price' =>  93  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' =>  1999, 'price' =>  89  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' =>  2999, 'price' =>  86  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' =>  3999, 'price' =>  84  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' =>  4999, 'price' =>  81  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' =>  9999, 'price' =>  78  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' => 19999, 'price' =>  75  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' => 29999, 'price' =>  74  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>   200, 'quantity' => 50000, 'price' =>  73  ))->execute();

	}

	public function down()
	{
		\DBUtil::drop_table('deliv_prices');
		
		include_once '005_create_deliv_prices.php';
		call_user_func(array(new Create_deliv_prices, 'up'));
	}
}
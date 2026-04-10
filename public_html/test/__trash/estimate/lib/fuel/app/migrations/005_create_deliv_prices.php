<?php

namespace Fuel\Migrations;

class Create_deliv_prices
{
	public function up()
	{
		\DBUtil::create_table('deliv_prices', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'carrier_id' => array('constraint' => 11, 'type' => 'int'),
			'weight' => array('constraint' => 11, 'type' => 'int'),
			'quantity' => array('constraint' => 11, 'type' => 'int'),
			'price' => array('type' => 'float'),

		), array('id'));
		
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  200, 'quantity' =>   100, 'price' => 128  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  200, 'quantity' =>   200, 'price' => 128  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  200, 'quantity' =>   300, 'price' =>  88  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  200, 'quantity' =>   500, 'price' =>  79  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  200, 'quantity' =>  1000, 'price' =>  73  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  200, 'quantity' =>  2000, 'price' =>  72  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  200, 'quantity' =>  3000, 'price' =>  71  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  200, 'quantity' =>  5000, 'price' =>  65  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  200, 'quantity' => 10000, 'price' =>  62  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  200, 'quantity' => 20000, 'price' =>  61  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  200, 'quantity' => 30000, 'price' =>  60  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  200, 'quantity' => 50000, 'price' =>  59  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  500, 'quantity' =>   100, 'price' => 148  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  500, 'quantity' =>   200, 'price' => 148  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  500, 'quantity' =>   300, 'price' =>  98  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  500, 'quantity' =>   500, 'price' =>  90  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  500, 'quantity' =>  1000, 'price' =>  87  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  500, 'quantity' =>  2000, 'price' =>  82  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  500, 'quantity' =>  3000, 'price' =>  78  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  500, 'quantity' =>  5000, 'price' =>  75  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  500, 'quantity' => 10000, 'price' =>  74  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  500, 'quantity' => 20000, 'price' =>  72  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  500, 'quantity' => 30000, 'price' =>  72  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' =>  500, 'quantity' => 50000, 'price' =>  68  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' => 1000, 'quantity' =>   100, 'price' => 150  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' => 1000, 'quantity' =>   200, 'price' => 150  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' => 1000, 'quantity' =>   300, 'price' => 100  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' => 1000, 'quantity' =>   500, 'price' =>  92  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' => 1000, 'quantity' =>  1000, 'price' =>  89  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' => 1000, 'quantity' =>  2000, 'price' =>  84  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' => 1000, 'quantity' =>  3000, 'price' =>  80  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' => 1000, 'quantity' =>  5000, 'price' =>  77  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' => 1000, 'quantity' => 10000, 'price' =>  76  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' => 1000, 'quantity' => 20000, 'price' =>  74  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' => 1000, 'quantity' => 30000, 'price' =>  74  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 1, 'weight' => 1000, 'quantity' => 50000, 'price' =>  70  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>  200, 'quantity' =>   100, 'price' => 138  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>  200, 'quantity' =>   200, 'price' => 113  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>  200, 'quantity' =>   300, 'price' =>  98  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>  200, 'quantity' =>   500, 'price' =>  89  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>  200, 'quantity' =>  1000, 'price' =>  83  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>  200, 'quantity' =>  2000, 'price' =>  82  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>  200, 'quantity' =>  3000, 'price' =>  81  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>  200, 'quantity' =>  5000, 'price' =>  76  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>  200, 'quantity' => 10000, 'price' =>  75.5))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>  200, 'quantity' => 20000, 'price' =>  75  ))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>  200, 'quantity' => 30000, 'price' =>  74.5))->execute();
		\DB::insert('deliv_prices')->set(array('carrier_id' => 2, 'weight' =>  200, 'quantity' => 50000, 'price' =>  74  ))->execute();

	}

	public function down()
	{
		\DBUtil::drop_table('deliv_prices');
	}
}
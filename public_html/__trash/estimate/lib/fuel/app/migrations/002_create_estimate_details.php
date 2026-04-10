<?php

namespace Fuel\Migrations;

class Create_estimate_details
{
	public function up()
	{
		\DBUtil::create_table('estimate_details', array(
			'id'           => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'estimate_id'  => array('constraint' => 11, 'type' => 'int'),
			'number'       => array('constraint' => 11, 'type' => 'int'),
			'description1' => array('type' => 'text'),
			'description2' => array('type' => 'text', 'null' => true),
			'quantity'     => array('constraint' => 11, 'type' => 'int'),
			'unit_price'   => array('type' => 'float'),
			'amount'       => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('estimate_details');
	}
}
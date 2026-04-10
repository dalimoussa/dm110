<?php

namespace Fuel\Migrations;

class Create_estimate_prints
{
	public function up()
	{
		\DBUtil::create_table('estimate_prints', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'estimate_id' => array('constraint' => 11, 'type' => 'int'),
			'number'      => array('constraint' => 11, 'type' => 'int'),
			'size_id'     => array('constraint' => 8, 'type' => 'varchar'),
			'size'        => array('type' => 'text'),
			'quantity'    => array('constraint' => 11, 'type' => 'int'),
			'color_id'    => array('constraint' => 11, 'type' => 'int'),
			'color'       => array('type' => 'text'),
			'paper_id'    => array('constraint' => 11, 'type' => 'int'),
			'paper'       => array('type' => 'text'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('estimate_prints');
	}
}
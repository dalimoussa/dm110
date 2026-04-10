<?php

namespace Fuel\Migrations;

class Create_estimate_delivs
{
	public function up()
	{
		\DBUtil::create_table('estimate_delivs', array(
			'id'                  => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'estimate_id'         => array('constraint' => 11, 'type' => 'int'),
			'quantity'            => array('constraint' => 11, 'type' => 'int'),
			'enclosure_number'    => array('constraint' => 11, 'type' => 'int'),
			'enclosure_weight_id' => array('constraint' => 11, 'type' => 'int'),
			'enclosure_weight'    => array('type' => 'text'),
			'thickness_id'        => array('constraint' => 11, 'type' => 'int'),
			'thickness'           => array('type' => 'text'),
			'enclosure_types_id'  => array('type' => 'text'),
			'enclosure_types'     => array('type' => 'text'),
			'carrier_id'          => array('constraint' => 11, 'type' => 'int'),
			'carrier'             => array('type' => 'text'),
			'envelope_id'         => array('constraint' => 11, 'type' => 'int'),
			'envelope'            => array('type' => 'text'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('estimate_delivs');
	}
}
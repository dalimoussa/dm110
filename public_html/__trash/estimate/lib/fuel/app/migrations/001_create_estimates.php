<?php

namespace Fuel\Migrations;

class Create_estimates
{
	public function up()
	{
		\DBUtil::create_table('estimates', array(
			'id'         => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name'       => array('type' => 'text'),
			'kana'       => array('type' => 'text', 'null' => true),
			'company'    => array('type' => 'text', 'null' => true),
			'section'    => array('type' => 'text', 'null' => true),
			'email'      => array('type' => 'text'),
			'tel'        => array('constraint' => 16, 'type' => 'varchar'),
			'zip'        => array('constraint' => 8, 'type' => 'varchar'),
			'pref'       => array('type' => 'text'),
			'address'    => array('type' => 'text'),
			'contact'    => array('type' => 'text'),
			'subtotal'   => array('constraint' => 11, 'type' => 'int'),
			'taxrate'    => array('constraint' => 10, 'type' => 'varchar'),
			'tax'        => array('constraint' => 11, 'type' => 'int'),
			'total'      => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('estimates');
	}
}
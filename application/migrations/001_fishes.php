<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Migration_001_fishes extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_field(			array(
"id"=>array("type"=>"int",
												  "auto_increment"=>TRUE),
			"name"=>array("type"=>"TEXT"),
			"type"=>array("type"=>"TEXT"),
			"created"=>array("type"=>"TEXT"))
		);
		$this->dbforge->create_table("fishes");
	}
	public function down()
	{
		$this->dbforge->drop_table("fishes");
	}
}
/* End of file 001_fishes*/
/* Location: ./application/migrations/Migration_001_fishes.php */
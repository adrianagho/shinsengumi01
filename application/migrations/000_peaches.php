<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Migration_000_peaches extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_field(			array(
"id"=>array("type"=>"int",
												  "auto_increment"=>TRUE),
			"name"=>array("type"=>"TEXT"),
			"type"=>array("type"=>"TEXT"),
			"created"=>array("type"=>"datetime"))
		);
		$this->dbforge->create_table("peaches");
	}
	public function down()
	{
		$this->dbforge->drop_table("peaches");
	}
}
/* End of file 000_peaches*/
/* Location: ./application/migrations/Migration_000_peaches.php */
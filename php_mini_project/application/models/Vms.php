<?php
class Vms extends CI_Model
{
	function toDayVistors()
	{
		$query = $this->db->query("select ID from tblvisitor where date(EnterDate)=CURDATE()");
		return $query->result();
	}

	function yesterdayVistors()
	{
		$query=$this->db->query("select ID from tblvisitor where date(EnterDate)=CURDATE()-1");
		return $query->result();
	}
	function lastSevenDayVistors()
	{
		$query=$this->db->query("select ID from tblvisitor where date(EnterDate)>=(DATE(NOW()) - INTERVAL 7 DAY)");
		return $query->result();
	}

	function totalVistors()
	{
		$query=$this->db->query("select ID from tblvisitor");
		return $query->result();
	}

}

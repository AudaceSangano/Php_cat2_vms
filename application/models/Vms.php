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
	function in()
	{
		$query=$this->db->query("select ID from tblvisitor where Status='1'");
		return $query->result();
	}

	function saverecords($a,$b,$c,$d,$e,$f,$g)
	{
		$query="insert into tblvisitor(FullName,Email,MobileNumber,Address,WhomtoMeet,Deptartment,ReasontoMeet) value('$a','$b','$c','$d','$e','$f','$g')";
		$this->db->query($query);
	}

	function manageVistor()
	{
		$query=$this->db->query("select *from tblvisitor");
		return $query->result();
	}

	function profile()
	{
		$query=$this->db->query("select *from tbladmin");
		return $query->result();
	}

	function sbt($a,$b)
	{
		$query=$this->db->query("select *from tblvisitor where date(EnterDate) between '$a' and '$b'");
		return $query->result();
	}

	function search($a)
	{
		$query=$this->db->query("select *from tblvisitor where FullName like '%$a%'||MobileNumber like '%$a%'||EnterDate like  '%$a%'||outtime like '%$a%'");
		return $query->result();
	}

	function details($id)
	{
		$query=$this->db->query("select * from  tblvisitor where ID='$id'");
		return $query->result();
	}
	function sel($a){
		$query=$this->db->query("select * from  tbladmin");
		return $query->result();
	}
	function sel1(){
		$query=$this->db->query("select * from  tbladmin");
		return $query->result();
	}

	function upd($a,$b)
	{
		$query="update tblvisitor set remark='$b',Status='0' where  ID='$a'";
		$this->db->query($query);
	}

	function updatte($f,$e,$m){
		$query="update tbladmin set AdminName='$f', MobileNumber ='$e', Email= '$m'";
		$this->db->query($query);
	}
	function uppass($a){
		$query="update tbladmin set Password='$a'";
		$this->db->query($query);
	}
	function pwd($a){
		$query="update tbladmin set Password ='$a'";
		$this->db->query($query);
	}

}

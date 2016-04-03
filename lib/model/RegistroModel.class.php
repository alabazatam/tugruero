<?php

 function validarRifRazonSocial($rif,$razonSocial)
 {
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect('tugruero')->company_validation_ve
			->select("*")
			->where("rif=?",$rif)
			->and("razon_social like ?","%$razonSocial%");
			return $q;
 }
 function addToken($datos)
 {
	$values["date_created"] = date("Y-m-d H:i:s");
	$values["date_updated"] = date("Y-m-d H:i:s");
	$ConnectionORM = new ConnectionORM();
	$q = $ConnectionORM->getConnect('tugruero')->users_token()->insert($datos);
	return $q;
 }
 function validarToken($token)
 {
	 $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect('tugruero')->users_token
			->select("*")
			->where("token=?",$token)
			->and("validate = 0")
			->and("time_expire >=?",date("Y-m-d H:i:s"));
			
			return $q;
 }
 function utilizarToken($token)
 {
	$token = $token;
	$values = array("validate" => 1);
	$ConnectionORM = new ConnectionORM();
	$q = $ConnectionORM->getConnect('tugruero')->users_token('token', $token)->update($values);
	return $q;
 }
function GetCompanyValidation($idCompanyValidation)
 {
	$ConnectionORM = new ConnectionORM();
	$q = $ConnectionORM->getConnect('tugruero')
			->company_validation_ve
			->select("*")
			->where("id=?",$idCompanyValidation);
	return $q;
 } 
 function addCompany($values)
 {
	$values["date_created"] = date("Y-m-d H:i:s");
	$values["date_updated"] = date("Y-m-d H:i:s");
	$ConnectionORM = new ConnectionORM();
	$q = $ConnectionORM->getConnect('tugruero')->company()->insert($values);
	return $q;
 }
 function addUsersCompany($values)
 {
	$values["date_created"] = date("Y-m-d H:i:s");
	$values["date_updated"] = date("Y-m-d H:i:s");
	$ConnectionORM = new ConnectionORM();
	$q = $ConnectionORM->getConnect('tugruero')->users_company()->insert($values);
	return $q;
 }
  function addUser($values)
 {
	$values["date_created"] = date("Y-m-d H:i:s");
	$values["date_updated"] = date("Y-m-d H:i:s");
	$ConnectionORM = new ConnectionORM();
	$q = $ConnectionORM->getConnect('tugruero')->users()->insert($values);
	return $q;
 }
  function addCompanyFiles($values)
 {
	$values["date_created"] = date("Y-m-d H:i:s");
	$values["date_updated"] = date("Y-m-d H:i:s");
	$ConnectionORM = new ConnectionORM();
	$q = $ConnectionORM->getConnect('tugruero')->company_files()->insert($values);
	return $q;
 }
  function addUserData($values)
 {
	$values["date_created"] = date("Y-m-d H:i:s");
	$values["date_updated"] = date("Y-m-d H:i:s");
	$ConnectionORM = new ConnectionORM();
	$q = $ConnectionORM->getConnect('tugruero')->users_data()->insert($values);
	return $q;
 }
  function addUserPerms($values)
 {
	$values["date_created"] = date("Y-m-d H:i:s");
	$values["date_updated"] = date("Y-m-d H:i:s");
	$ConnectionORM = new ConnectionORM();
	$q = $ConnectionORM->getConnect('tugruero')->users_perms()->insert($values);
	return $q;
 }
 
 function updateCompanyValidation($values)
 {
	$id = $values["id"];
	$ConnectionORM = new ConnectionORM();
	$q = $ConnectionORM->getConnect('tugruero')->company_validation_ve('id', $id)->update($values);
	return $q;
	
 }
 function getBankList()
 {
	$ConnectionORM = new ConnectionORM();
	$q = $ConnectionORM->getConnect('tugruero')
			->bank
			->select("*");
	return $q;
 }
function connect($login,$password)
{

		$login = strtoupper($login);
		$password = hash('sha256', $password);
		$valid = true;
		$ConnectionORM = new ConnectionORM();
		$q = $ConnectionORM->getConnect('tugruero')->users
		->select("count(*) as cuenta")
		->where("login =?", $login)
		->and('password=?',$password)
		->and('status=?',1)
		->fetch();

		if($q['cuenta']==0){
			$valid = false;
		}

		return $valid;

}



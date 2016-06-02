<?php

if(isset($_GET["opt"]) && $_GET["opt"]!=""){
	$opt = $_GET["opt"];
	if($opt=="addin"){
		$op = new OperationData();
		$op->concept = $_POST["concept"];
		$op->date_at = $_POST["date_at"];
		$op->description = $_POST["description"];
		$op->amount = $_POST["amount"];
		$op->kind = 1;
		$op->add();
		Core::redir("./?view=ins&opt=all");
	}
	else if($opt=="updatein"){
		$op = OperationData::getById($_POST["id"]);
		$op->concept = $_POST["concept"];
		$op->date_at = $_POST["date_at"];
		$op->description = $_POST["description"];
		$op->amount = $_POST["amount"];
		$op->update();
		Core::redir("./?view=ins&opt=all");
	}
	else if($opt=="delin"){
		$op = OperationData::getById($_GET["id"]);
		$op->del();
		Core::redir("./?view=ins&opt=all");
	}
	else if($opt=="addout"){
		$op = new OperationData();
		$op->concept = $_POST["concept"];
		$op->date_at = $_POST["date_at"];
		$op->description = $_POST["description"];
		$op->amount = $_POST["amount"];
		$op->kind = 2;
		$op->add();
		Core::redir("./?view=outs&opt=all");
	}
	else if($opt=="updateout"){
		$op = OperationData::getById($_POST["id"]);
		$op->concept = $_POST["concept"];
		$op->date_at = $_POST["date_at"];
		$op->description = $_POST["description"];
		$op->amount = $_POST["amount"];
		$op->update();
		Core::redir("./?view=outs&opt=all");
	}
	else if($opt=="delout"){
		$op = OperationData::getById($_GET["id"]);
		$op->del();
		Core::redir("./?view=outs&opt=all");
	}}




?>
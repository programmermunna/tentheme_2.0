<?php include("common/header-sidebar.php")?>
<?php
if(isset($_GET['src'])){
  $src = $_GET['src'];
  $table = $_GET['table'];
  $id = $_GET['id'];

  $deposit = _fetch("$table","id=$id");
  $pid = $deposit['pid'];
  $amount = $deposit['amount'];

  if($amount >= 100000){
    $update_person = _update("person","balance = balance+$amount,investor='before_submit'","id=$pid");

    $update = _update("$table","status='Success'","id='$id'");
  }else{
    $update_person = _update("person","balance = balance+$amount","id=$pid");
    $update = _update("$table","status='Success'","id='$id'");
  }

  if($update && $update_person){
    $msg = "Successfully Updated";
    header("location:deposits.php?msg=$msg");
  }
}


?>
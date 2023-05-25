<?php include "admin/config/functions.php";

if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];
} elseif (isset($_COOKIE['user_id'])) {
    $id = $_COOKIE['user_id'];
} else {
    $id = 0;

    if(isset($_SESSION['ses_cart'])){
      $ses_cart = $_SESSION['ses_cart'];
      // $ses_cart = str_replace("0,","",$ses_cart);
      // header("location:index.php");
      // unset($_SESSION['ses_cart']);
    }else{
      $ses_cart = $_SESSION['ses_cart'] = "";
      
    }
    
    echo $ses_cart;
  }
  
$sell_discount = 0;    
$person = _fetch("person", "id=$id");
$reseller_docs = _fetch("reseller_docs", "id=1");
$investor_docs = _fetch("investor_docs", "id=1");

if ($id > 0) {
    $person_reseller = $person['reseller'];
    $person_investor = $person['investor'];
    if ($person_reseller == 'Accepted' && $person_investor == 'Accepted') {
        $sell_discount = $investor_docs['discount'];
        $user_status = "Reseller + Investor(".$person['investor_order'].")";
      } elseif ($person_reseller == 'Accepted') {
        $sell_discount = $reseller_docs['discount'];
        $user_status = "Reseller";
      } elseif ($person_investor == 'Accepted') {
        $sell_discount = $investor_docs['discount'];
        $user_status = "Investor(".$person['investor_order'].")";
      } else {
        $sell_discount = 0;
        $user_status = "Normal User";
    }
}




$paginations = _fetch("pagination", "id=1");
include("head.php");
?>


<?php ob_start();
    require('database.php');
    // <!-- ===================Sortcut for query=========== -->     
    
    function _fetch($table,$condition){
    global $conn;
    $query = "SELECT * FROM $table WHERE $condition";
    return mysqli_fetch_assoc(mysqli_query($conn,$query));
    }
         
    function _getAll($table){
    global $conn;
    $query = "SELECT * FROM $table ORDER BY id DESC";
    return mysqli_query($conn,$query);
    }
     
    function _get($table,$condition){
    global $conn;
    $query = "SELECT * FROM $table WHERE $condition";
    return mysqli_query($conn,$query);
    }
     
    function _query($table){
    global $conn;
    $query = "$table";
    return mysqli_query($conn,$query);
    }   
         
    function _delete($table,$condition){
    global $conn;
    $query = "DELETE FROM $table WHERE $condition";
    return mysqli_query($conn,$query);
    }

         
    function _update($table,$data,$condition){
    global $conn;
    $query = "UPDATE $table SET $data WHERE $condition";
    return mysqli_query($conn,$query);
    }
         
    function _insert($table,$data,$value){
    global $conn;
    $query = "INSERT INTO $table($data) VALUE($value)";
    return mysqli_query($conn,$query);
    }    

    //============Other code start here========//

    // $query = _getAll("brand");
    // $query = _get("brand","id=8");

    // $query = _delete("brand","id=7");

    // $query = _insert("brand","name","'value'");
    // $query = _update("brand","name='munna'","id=8");

    // $query = _query("DELETE FROM brand WHERE id=15");


    function _login($login,$person){
        if(isset($_SESSION[''.$person.'_id'])){
            $id = $_SESSION[''.$person.'_id'];
            if($id>0){
              header("location:$login.php");
            }
          }
          if(isset($_COOKIE[''.$person.'_id'])){
            $id = $_COOKIE[''.$person.'_id'];
            if($id>0){
              header("location:$login.php");
            }
          }
    }

    function _logout($logout,$person){        
        if(isset($_COOKIE[''.$person.'_id'])){
            setcookie(''.$person.'_id','', time() - 86000);
        }
        if(!session_start()){session_start();}
        if(isset($_SESSION[''.$person.'_id'])){
            unset($_SESSION[''.$person.'_id']);
            session_destroy();
            header("location:$logout.php");
        }
            header("location:$logout.php");
    }

    
    function sort_str($string, $word_count = 10) {
      $string = explode(' ', $string);
      if (empty($string) == false) {
          $string = array_chunk($string, $word_count);
          $string = $string[0];
      }
      $string = implode(' ', $string);
      echo $string;
  }
    require('plugins.php');

    function str_space_remove($url){
     return $urls = str_replace(" ","-","$url");
    }


    

$time = time();
$rand = rand();    
$website = _fetch("website", "id=1");
$payments = _get("payment", "status='Enable'");
$general_setting = _fetch("general_setting", "id=1");
$limit_setting = _fetch("limit_setting", "id=1");
$footer_1_2 = _fetch("footer_1_2", "id=1");

$header_social_link = $general_setting['header_social_link'];
$review_product = $general_setting['review_product'];
$share_product = $general_setting['share_product'];
$related_product = $general_setting['related_product'];
$review_service = $general_setting['review_service'];
$related_service = $general_setting['related_service'];
$ad_show = $general_setting['ad_show'];
$team_social = $general_setting['team_social'];

$cr_url = $_SERVER['SCRIPT_NAME'];
$cr_url = substr($cr_url, strrpos($cr_url, '/') + 1);
?>


<script>
  window.addEventListener("DOMContentLoaded", () => {
  const popup_msg = document.getElementById("popup_msg");
  if (popup_msg) {
    popup_msg.innerHTML = `
  <div id="popup_msg" style="position: fixed; top: 100px; right: 20px; z-index:999; background:#31B0D5; color:white; display:flex; padding:12px; align-items:center; gap:6px; border-radius: 5px; line-height: 0px; ">
  <span style="font-size:18px;">
  <i class="fa-solid fa-check"></i>
  </span>
  <h6 style="background:black;color:white;">
  ${popup_msg?.dataset?.text} </div>
  </h6> `;
    setTimeout(() => {
      popup_msg.innerHTML = "";
    }, popup_msg?.dataset?.time || 2000);
  }

  const error_msg = document.getElementById("error_msg");
  if (error_msg) {
    error_msg.innerHTML = `
    <div id="error_msg" style="position: fixed; top: 100px; right: 20px; z-index:999; background:red; color:white; display:flex; padding:12px; align-items:center; gap:6px; border-radius: 5px; line-height: 0px; ">
    <span style="font-size:18px;">
    <i class="fa-solid fa-triangle-exclamation"></i>
    </span>
    <h6 style="background:black;color:white;">
    ${error_msg?.dataset?.text} </div>
    </h6> `;
    setTimeout(() => {
      error_msg.innerHTML = "";
    }, error_msg?.dataset?.time || 2000);
  }
});
</script>
<?php if (isset($_GET['msg'])) {?><div id="popup_msg" data-text="<?php echo $_GET['msg']; ?>"></div><?php }?>
<?php if (isset($_GET['err'])) {?><div id="error_msg" data-text="<?php echo $_GET['err']; ?>"></div><?php }?>
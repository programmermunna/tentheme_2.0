<!-- Header area -->
<?php include "common/header.php";?>
<!-- Header area -->
<?php 

//============login========//
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $pass = md5($_POST['pass']);
  $row = _fetch("person", "email='$email' AND password='$pass'");
  if ($row > 0) {
      $id = $row['id'];
      $_SESSION['user_id'] = $id;
      setcookie('user_id', $id, time() + 2580000);

      $icon = '<i class="fa-solid fa-arrow-right-to-bracket"></i>';
      $title = 'You are Logged in Successfull';
      $activitie = _insert("activities","pid,icon,title,time","'$id','$icon','$title','$time'");
      header('location:checkout.php?msg=Successfully Logged In');
  } else {
      $err = "Email Or Password is wrong";
  }
}

//============sign in========//
if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $pass = md5($_POST['pass']);
  $cpass = md5($_POST['cpass']);

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $check = _fetch("person", "email='$email'");
      if ($check > 0) {
          $err = "Alrady Have Account. Please Login";
      } else {
          if ($pass == $cpass) {
              $insert = _insert("person", "name, phone, email, password, time", "'$name','$phone', '$email', '$pass', '$time'");
              $row = _fetch("person", "email='$email' AND password='$pass'");
              if ($row > 0) {
                  $user_id = $row['id'];
                  $_SESSION['user_id'] = $user_id;
                  setcookie('user_id', $user_id, time() + 2580000);

                  $icon = '<i class="fa-solid fa-user-check"></i>';
                  $title = 'Congratulations! You are Created new Account';
                  $activitie = _insert("activities","pid,icon,title,time","'$user_id','$icon','$title','$time'");
                  header('location:checkout.php?msg=Congratulations for Signup Account');
              } else {
                  $msg = "Something is worng!";
                  header("location:signup.php?msg=$msg");
              }
          } else {
              $err = "Password and Confirm Password are not match!";
          }
      }
  }
}

if (isset($_POST['submit'])) {
   $method_type = $_POST['method_type'];
   $pmn_amount = $_POST['payment_amount'];
   $order_id = rand(100,10000000);
   $type = 'product';

   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass = md5($_POST['pass']);
   $cpass = md5($_POST['cpass']);
   $address = $_POST['address'];

    if($method_type == 'manual'){
     $pmn_method =  $_POST['payment_method'];
     $pmn_address = $_POST['payment_address']; 
     $pmn_transection = $_POST['payment_transection']; 

     if($id>0){



      $orders = _insert("orders", "pid, order_id, type, pmn_type, pmn_method, pmn_address, pmn_transection, pmn_amount, time", "'$pid', '$order_id', '$type', '$method_type', '$pmn_method', '$pmn_address', '$pmn_transection', '$pmn_amount', '$time'");
      $ses_cart = explode(",",$ses_cart);
      array_pop($ses_cart);
      for($i=0;$i<count($ses_cart);$i++){ 
        $cart_id = $ses_cart[$i];
        $insert_cart = _insert("cart","pid, order_id, cart_id, type, status, time","'$pid','$order_id', '$cart_id', 'product',  'Pending', '$time'");
      }
      unset($_SESSION['ses_cart']);


      $cart = _get("cart","pid=$id AND type='product' AND status=0");
      while($data = mysqli_fetch_assoc($cart)){
      $cart_id = $data['cart_id'];
      $product = _fetch("products","id=$cart_id");                
      $sell_price = $product['sell_price'];
      $product['sell_price'] = $sell_price - ($sell_price*$sell_discount)/100;
      $total_price += $product['sell_price'];

      $update_cart = _update("cart","order_id=$order_id,status=1","cart_id=$cart_id");
      $update_product = _update("products","sell=sell+1","id=$cart_id");
      }
      $orders = _insert("orders", "pid, order_id, type, pmn_type, pmn_method, pmn_address, pmn_transection, pmn_amount, time", "'$id', '$order_id', '$type', '$method_type', '$pmn_method', '$pmn_address', '$pmn_transection', '$pmn_amount', '$time'");

      $icon2 = '<i class="fa-solid fa-user-check"></i>';
      $title2 = 'Congratulations! Order are Pending Now.';
      $activitie2 = _insert("activities","pid,icon,title,time","'$user_id','$icon2','$title2','$time'");
      header('location:dashboard.php?msg=Congratulations Purchase order');
    }else{
          if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if(!empty($_POST['is_login'])){
              $row = _fetch("person", "email='$email' AND password='$pass'");
              if ($row > 0) {
                $user_id = $row['id'];
                $_SESSION['user_id'] = $user_id;
                setcookie('user_id', $user_id, time() + 2580000);
                $pid = $user_id;
                  $orders = _insert("orders", "pid, order_id, type, pmn_type, pmn_method, pmn_address, pmn_transection, pmn_amount, time", "'$pid', '$order_id', '$type', '$method_type', '$pmn_method', '$pmn_address', '$pmn_transection', '$pmn_amount', '$time'");
                  $ses_cart = explode(",",$ses_cart);
                  array_pop($ses_cart);
                  for($i=0;$i<count($ses_cart);$i++){ 
                    $cart_id = $ses_cart[$i];
                    $insert_cart = _insert("cart","pid, order_id, cart_id, type, status, time","'$pid','$order_id', '$cart_id', 'product',  'Pending', '$time'");
                  }
                  unset($_SESSION['ses_cart']);

                  $icon = '<i class="fa-solid fa-user-check"></i>';
                  $title = 'Congratulations! purchuse order successfull';
                  $activitie = _insert("activities","pid,icon,title,time","'$user_id','$icon','$title','$time'");

                  header('location:dashboard.php?msg=Congratulations Purchase order');
                  }
            }else{
            $check = _fetch("person", "email='$email'");
            if ($check > 0) {
            $err = "Alrady Have Account. Please Login";
            header("location:checkout.php?login=true&&msg=$err");
            } else {
            if ($pass == $cpass) {              
              $insert = _insert("person", "name, email, password, address, time", "'$name', '$email', '$pass','$address','$time'");             
              $row = _fetch("person", "email='$email' AND password='$pass'");
              if ($row > 0) {
                $user_id = $row['id'];
                $_SESSION['user_id'] = $user_id;
                setcookie('user_id', $user_id, time() + 2580000);
                $pid = $user_id;
                  $orders = _insert("orders", "pid, order_id, type, pmn_type, pmn_method, pmn_address, pmn_transection, pmn_amount, time", "'$pid', '$order_id', '$type', '$method_type', '$pmn_method', '$pmn_address', '$pmn_transection', '$pmn_amount', '$time'");
                  $ses_cart = explode(",",$ses_cart);
                  array_pop($ses_cart);
                  for($i=0;$i<count($ses_cart);$i++){ 
                    $cart_id = $ses_cart[$i];
                    $insert_cart = _insert("cart","pid, order_id, cart_id, type, status, time","'$pid','$order_id', '$cart_id', 'product',  'Pending', '$time'");
                  }
                  unset($_SESSION['ses_cart']);

                  $icon = '<i class="fa-solid fa-user-check"></i>';
                  $title = 'Congratulations! You are Created new Account';
                  $activitie = _insert("activities","pid,icon,title,time","'$user_id','$icon','$title','$time'");

                  $icon2 = '<i class="fa-solid fa-user-check"></i>';
                  $title2 = 'Congratulations! You are Created new Account';
                  $activitie2 = _insert("activities","pid,icon,title,time","'$user_id','$icon2','$title2','$time'");

                  header('location:dashboard.php?msg=Congratulations Purchase order');
                  }
              } else {
                  $err = "Password and Confirm Password are not match!";
                  header("location:checkout.php?msg=$err");
              }
            }
          }
      }
    }
  }elseif($method_type == 'fund'){
      if($person['balance'] >= $pmn_amount){
        $cart = _get("cart","pid=$id AND type='product' AND status=0");
        while($data = mysqli_fetch_assoc($cart)){
        $cart_id = $data['cart_id'];
        $product = _fetch("products","id=$cart_id");                
        $sell_price = $product['sell_price'];
        $product['sell_price'] = $sell_price - ($sell_price*$sell_discount)/100;
        $total_price += $product['sell_price'];

        $update_cart = _update("cart","order_id=$order_id,status=2","cart_id=$cart_id");
        $update_product = _update("products","sell=sell+1","id=$cart_id");
      }
        $update_person = _update("person","balance=balance-$pmn_amount","id=$id");
        $orders = _insert("orders", "pid, order_id, type, pmn_type, pmn_method, pmn_address, pmn_transection, pmn_amount, time", "'$id', '$order_id', '$type', '$method_type',  '$pmn_method', '$pmn_address', '$pmn_transection', '$pmn_amount', '$time'");

        $icon2 = '<i class="fa-solid fa-user-check"></i>';
        $title2 = 'Congratulations! Order are Pending Now.';
        $activitie2 = _insert("activities","pid,icon,title,time","'$user_id','$icon2','$title2','$time'");
        header('location:dashboard.php?msg=Congratulations Purchase order');
      }else{
        header("location:checkout.php?err=Your balance is low. Please diposit first.");
      }
    }elseif($method_type == 'automation'){
          header('location:checkout.php?err=This method comming soon!');
    }else{}
    
}




if ($person['reseller'] = 'Accepted') {
    $reseller_discount = $reseller_docs['discount'];
}
?>
<!-- Sub Header -->
<div class="container space-y-6 py-24">

  <!-- Item Title -->
  <h3 class="text-4xl font-medium tracking-wide">Checkout</h3>

  <!-- Page Tree Links -->
  <div class="items-center justify-start space-x-2 text-gray-500">

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
      <i class="fa-solid fa-house"></i>
    </a>
    <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="checkout.php"> checkout
    </a>
  </div>

</div>
</header>

<div class="bg-gray-50 w-full py-12">
  <div class="container flex items-start flex-col lg:flex-row justify-between gap-8">

    <div class="w-full space-y-6">
      <?php if($id<1){?>
        <?php if(isset($_GET['login'])){ ?>
          <form action="" method="POST">   
          <div class="p-5 bg-white rounded shadow space-y-6">
            <h2 class="text-2xl font-medium tracking-wide">Login Now</h2>
            <div class="p-6 space-y-6">
              <div class="flex flex-col gap-1">
                <label for="Email">Email</label>
                <input name="email" id="Email" type="email" placeholder="Email"
                  class="p-2.5 rounded border focus:ring-2 focus:ring-blue-600 outline-none">
              </div>
              <div class="flex flex-col gap-1">
                <label for="Password">Password</label>
                <input name="pass" id="Password" type="password" placeholder="Password"
                  class="p-2.5 rounded border focus:ring-2 focus:ring-blue-600 outline-none">
              </div>
              <div class="flex flex-col gap-1">
                <input name="login" id="login" type="submit" class="p-2.5 rounded border bg-blue-500 text-white focus:ring-2 focus:ring-blue-600 outline-none">
              </div>
            </div>
            <p>You have no account? <a href="checkout.php"> Register here</a></p>
          </div>
          </form>
        <?php }else{ ?>
          <form action="" method="POST"> 
          <div class="p-5 bg-white rounded shadow space-y-6">
            <h2 class="text-2xl font-medium tracking-wide">Create Account</h2>
            <div class="p-6 space-y-6">
              <div class="flex flex-col gap-1">
                <label for="name">Name</label>
                <input name="name" id="name" type="text" placeholder="Name"
                  class="p-2.5 rounded border focus:ring-2 focus:ring-blue-600 outline-none">
              </div>
              <div class="flex flex-col gap-1">
                <label for="Phone">Phone</label>
                <input name="phone" id="Phone" type="number" placeholder="Phone"
                  class="p-2.5 rounded border focus:ring-2 focus:ring-blue-600 outline-none">
              </div>
              <div class="flex flex-col gap-1">
                <label for="Email">Email</label>
                <input name="email" id="Email" type="email" placeholder="Email"
                  class="p-2.5 rounded border focus:ring-2 focus:ring-blue-600 outline-none">
              </div>
              <div class="flex flex-col gap-1">
                <label for="Password">Password</label>
                <input name="pass" id="Password" type="password" placeholder="Password"
                  class="p-2.5 rounded border focus:ring-2 focus:ring-blue-600 outline-none">
              </div>
              <div class="flex flex-col gap-1">
                <label for="Password">Confirm Password</label>
                <input name="cpass" id="Password" type="password" placeholder="Confirm Password"
                  class="p-2.5 rounded border focus:ring-2 focus:ring-blue-600 outline-none">
              </div>
              <div class="flex flex-col gap-1">
                <input name="register" id="register" type="submit" class="p-2.5 rounded border bg-blue-500 text-white focus:ring-2 focus:ring-blue-600 outline-none">
              </div>
            </div>
            <p>You have no account? <a href="?login=true"> Login here</a></p>
          </div>
        </form> 
        <?php }?>
      <?php }?>


      <!-- Payment Method -->
      <div class="bg-white rounded shadow">
        <h3 class="p-4 text-lg font-medium text-gray-900">Select Payment Method</h3>
        <div class="flex justify-between">

          <button id="manual_btn" class="select_pay_btn w-full p-4 flex justify-center items-center cursor-pointer"
            style="border:1px solid #e1e8ed; border-right:none; border-left:none; background:#ffffff;border-bottom:none;">
            Manual
          </button>

          <button id="fund_btn"  class="select_pay_btn w-full p-4 flex justify-center items-center cursor-pointer"
            style="border:1px solid #e1e8ed;background:#fafafa;border-right:none;">
            My Funds
          </button>

          <button id="automation_btn" class="select_pay_btn w-full p-4 flex justify-center items-center cursor-pointer"
            style="border:1px solid #e1e8ed;background:#fafafa;border-right:none;">
            Automation
          </button>
        </div>        

          <div>
          <div class="pay_with_car">                  
            <div id="manual_tab" class="p-5 space-y-5">
              <input type="hidden" id="method_type" name="method_type" value="manual">
              <div style="display:flex;flex-wrap:wrap;gap:5px">
                <?php                   
                  while($payment =  mysqli_fetch_assoc($payments)){ ?>
                    <div  style="border:1px solid gray;border-radius:5px;width:20%;">
                    <div style="cursor:pointer" class="manual_pmn_name" data-payment_method_id="<?php echo $payment['id'];?>">
                      <img style="width:50%;height:40px;margin:auto" src="admin/upload/<?php echo $payment['file_name'];?>" alt="<?php echo $payment['pmn_method'];?>">
                      <p style="text-align: center;"><?php echo $payment['pmn_method'];?></p>
                    </div>
                    </div>
                <?php };?>
              </div>

              <div class="flex flex-col gap-1">                
                  <div id="payment_description">
                  
                  </div>
              </div>
               
            </div>
          
            <div id="fund_tab" class="p-5 space-y-5">

              <div class="flex flex-col gap-1">
                <h3 style="text-align: center;font-size:25px">Balance: $<?php if($id<1){echo 0;}else{echo $person['balance'];}?>
              </h3>
              </div>

            </div>


            <div id="automation_tab" class="p-5 space-y-5">
              <div class="flex flex-col gap-1">
                <div class="flex flex-col gap-1">
                <label for="card_number" class="text-sm font-medium">Card Number</label>
                <input id="card_number" type="number" class="px-2 py-1 border outline-none">
              </div>

              <div class="flex items-center justify-between">
                <div class="flex flex-col gap-1">
                  <label class="text-sm font-medium">Expiry Date</label>
                  <div class="flex gap-x-2 items-center">
                    <input type="number" class="w-20 px-2 py-1 border outline-none">
                    /
                    <input type="number" class="w-20 px-2 py-1 border outline-none">
                  </div>
                </div>

                <div class="flex flex-col gap-1">
                  <label class="text-sm font-medium">CVV</label>
                  <input type="number" class="w-28 px-2 py-1 border outline-none">
                </div>
              </div>

              <label for="save_card" class="flex items-center gap-x-2 mt-2">
                <input type="checkbox" id="save_card">
                Save card for next time
              </label>


              </div>
            </div>

            <div class="p-5 flex justify-end gap-8 border-t">
              <b>Total:</b>
              <p class="text-xl">$<?php if($id<1){echo $_SESSION['total_price'];}else{
                 $cart = _get("cart", "pid=$id AND type='product' AND status=0");
                 $total_price = 0;
                 while ($data = mysqli_fetch_assoc($cart)) {
                 $cart_id = $data['cart_id'];
                 $product = _fetch("products", "id=$cart_id");
                 $sell_price = $product['sell_price'];
                 $product['sell_price'] = $sell_price - ($sell_price * $sell_discount) / 100;
                 $total_price += $product['sell_price'];
                 }
                echo $total_price;
                }?></p>
              <input type="hidden" name="payment_amount" value="<?php if($id<1){echo $_SESSION['total_price'];}else{echo $total_price;}?>">
            </div>
            <div class="bg-gray-200 p-4 flex justify-end">
              <button type="submit" id="submit_btn" name="submit" class="px-4 py-2 rounded bg-green-600 text-white focus:ring-2">Pay Securely</button>
            </div>
          </div>
        </div>


      </div>
      <!-- Payment Method -->

    </div>

    <div class="w-full lg:min-w-[450px] lg:w-[450px]">
      <div class="border p-5">
        <div class="py-5 space-y-4">

          <?php 
              if($id<1){
              $total_price = 0;
              if($_SESSION['ses_cart']){
              $ses_cart = explode(",",$ses_cart);
              array_pop($ses_cart);
              for($i=0;$i<count($ses_cart);$i++){ 
                $product = _fetch("products","id=$ses_cart[$i]");
                $total_price += $product['sell_price'];
                ?>             
              <div class="text-lg font-medium tracking-wide text-gray-500 justify-between flex items-center">
                <span class="w-8/12 truncate overflow-hidden"><?php echo $product['title']; ?></span>
                <span class="w-fit">$<?php echo $product['sell_price']; ?></span>
              </div>
              
            <?php 
            }}}else{
            $cart = _get("cart", "pid=$id AND type='product' AND status=0");
            $total_price = 0;
            while ($data = mysqli_fetch_assoc($cart)) {
            $cart_id = $data['cart_id'];
            $product = _fetch("products", "id=$cart_id");
            $sell_price = $product['sell_price'];
            $product['sell_price'] = $sell_price - ($sell_price * $sell_discount) / 100;
            $total_price += $product['sell_price'];
            ?>
              <div class="text-lg font-medium tracking-wide text-gray-500 justify-between flex items-center">
                <span class="w-8/12 truncate overflow-hidden"><?php echo $product['title']; ?></span>
                <span class="w-fit">$<?php echo $product['sell_price']; ?></span>
              </div>
          <?php }}?>

        </div>

        <div class="text-2xl font-semibold text-gray-700 items-center justify-between flex pt-5 border-t">
          <span>Total:</span>
          <span>USD <?php if($id<1){echo $_SESSION['total_price'];}else{echo $total_price;}
           ?></span>
        </div>
      </div>

      <div class="py-5 text-center flex items-center gap-x-2 justify-center text-gray-500">
        <i class="fa-solid fa-lock"></i>
        <p>Secure checkout</p>
      </div>
    </div>


    
  </div>
</from>
</div>

<script>

$("#fund_tab").hide();
$("#automation_tab").hide();


  $(document).on("click","#manual_btn",function(e){
    e.preventDefault();    
    $("#method_type").attr("value","manual");

    $("#manual_tab").show();
    $("#fund_tab").hide();
    $("#automation_tab").hide();
  })

  $(document).on("click","#fund_btn",function(e){
    e.preventDefault();
    $("#method_type").attr("value","fund");
    $("#manual_tab").hide();
    $("#fund_tab").show();
    $("#automation_tab").hide();
  })

  $(document).on("click","#automation_btn",function(e){
    e.preventDefault();
    $("#method_type").attr("value","automation");
    $("#manual_tab").hide();
    $("#fund_tab").hide();
    $("#automation_tab").show();
  })

  $(".manual_pmn_name").on("click",function(){
    $(this).addClass("pmn_block");
    var payment_method_id = $(this).data("payment_method_id");
    var payment_description = $("#payment_description").hide(); 

      $.ajax({
          url:"admin/config/ajax.php",
          type:"POST",
          data:
          {
            reference:"show manual payment method text in checkout page",
            payment_method_id:payment_method_id,
          },         
          success:function(data){
            $("#payment_description").slideDown("fast");
            $("#payment_description").html(data);
            }
          });
      });

</script>

<!-- Header area -->
<?php include "common/footer.php";?>
<!-- Header area -->
<?php include "config/functions.php";
if (isset($_SESSION['person_id'])) {
    $id = $_SESSION['person_id'];
} elseif (isset($_COOKIE['person_id'])) {
    $id = $_COOKIE['person_id'];
} else {
    $id = 0;
}
if ($id < 1) {
    header("location:login.php");
}
$person = _fetch("person", "id=$id");
$pid = $person['id'];
$pagination = _fetch("pagination", "id=1");

$notify_person = mysqli_num_rows(_get("person", "notify='new'"));
$notify_tickets = mysqli_num_rows(_get("tickets", "status='Pending' AND notify='new'"));
$notify_deposit = mysqli_num_rows(_get("deposit", "status='Pending' AND notify='new'"));
$notify_withdraw = mysqli_num_rows(_get("withdraw", "status='Pending' AND notify='new'"));
$notify_order = mysqli_num_rows(_get("cart", "status=1 AND notify='new'"));

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $website['admin_title'];?></title>
  
    <!-- Favicon -->
    <link rel="shortcut icon" href="upload/<?php echo $website['admin_favicon'] ?>" type="image/x-icon" />


  <!--=== Google Font  ===-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!--=== Jquery  ===-->
  <script src="https://code.jquery.com/jquery-3.2.1.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!--=== Font awesome  ===-->
  <script src="https://kit.fontawesome.com/6788eb3be6.js" crossorigin="anonymous"></script>

  <!-- SUMMERNOTE TEXTAREA -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js" crossorigin="anonymous">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet" />

  <!-- Sweet Alert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <!--=== Styles ===-->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/admin.css">
</head>

<body>

  <main class="flex p-0 m-0 justify-between w-full h-screen overflow-hidden">

    <div id="sidebar"
      class="sidebar transition-all w-[0px] min-w-[0px] lg:min-w-[255px] lg:w-[255px] h-screen overflow-auto bg-white border-r shadow sidebar fixed lg:relative inset-y-0 left-0"
      style="z-index: 99;">

      <div
        class="border-b-[1px] border-gray-200 flex items-center justify-between px-4 gap-x-2 h-20 shadow-sm sticky top-0 left-0 z-50 bg-white">
        <a class="flex items-center justify-between gap-x-2 active" href="./">
          <img style="width:200px;height:60px;" src="upload/<?php echo $website['admin_file_name'];?>" alt="logo">
          
        </a>
        <button id="hide_sidebar" class="lg:hidden text-gray-800"> <i class="fa-solid fa-xmark"></i> </button>
      </div>

      <hr class="my-1 border-0">
      <!-- Sidebar Item -> management -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="management">
          <span></span>
          <span class="tracking-wider block">management</span>
          <span class="text-xs transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="management">
          <li>
            <a href="./index.php">
              <i class="fa-solid fa-gauge"></i>
              <span>Dashboard</span>
            </a>
          </li>

          <li>
            <a href="./users.php">
              <i class="fa-solid fa-users"></i>
              <span>Users</span>
            </a>
          </li>

          <li>
            <a href="./deposits.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Deposits</span>
              <?php if ($notify_deposit > 0) {?><span
                style="background:#ff3a10;color:#fff;padding:5px;border-radius:50%">0<?php echo $notify_deposit ?></span><?php }?>
            </a>
          </li>


          <li>
            <a href="./withdraw.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Withdraw</span>
              <?php if ($notify_withdraw > 0) {?><span
                style="background:#ff3a10;color:#fff;padding:5px;border-radius:50%">0<?php echo $notify_withdraw ?></span><?php }?>
            </a>
          </li>

          <li>
            <a href="./payment-method.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Payment Method</span>
            </a>
          </li>

        </ul>
      </div>
      <hr class="my-2 border-0 h-[0.5px] bg-gray-100">

      <!-- Sidebar Item -> Blog & Pages -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="Blog & Pages">
          <span></span>
          <span class="tracking-wider block">Blog & Pages</span>
          <span class="text-xs transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="Blog & Pages">

          <li>
            <a href="./all-posts.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Post</span>
            </a>
          </li>
          <li>
            <a href="./post-category.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Post Categories</span>
            </a>
          </li>

          <li>
            <a href="./pages.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Pages</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-2 border-0 h-[0.5px] bg-gray-100">

      <!-- Sidebar Item -> Order -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="Order">
          <span></span>
          <span class="tracking-wider block">Order</span>
          <span class="text-xs transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="Order">

          <li>
            <a href="./product-category.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Product Categories</span>
            </a>
          </li>
          <li>
            <a href="./products.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Products</span>
            </a>
          </li>

          <li>
            <a href="./service-category.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Service Categories</span>
            </a>
          </li>
          <li>
            <a href="./services.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Services</span>
            </a>
          </li>

          <li>
            <a href="./orders.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Orders</span>
              <?php if ($notify_order > 0) {?>
              <div class="bg-red-500 text-white w-8 h-8 rounded-full shadow flex items-center justify-center ml-8">
                <span>
                  0<?php echo $notify_order ?>
                </span>
              </div>
              <?php }?>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-2 border-0 h-[0.5px] bg-gray-100">

      <!-- Sidebar Item -> Support -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="Support">
          <span></span>
          <span class="tracking-wider block">Support</span>
          <span class="text-xs transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="Support">
          <li>
            <a href="./tickets.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Tickets</span>
              <?php if ($notify_tickets > 0) {?><span
                style="background:#ff3a10;color:#fff;padding:5px;border-radius:50%">0<?php echo $notify_tickets ?></span><?php }?>
            </a>
          </li>

          <li>
            <a href="./all-chat.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Chat</span>
            </a>
          </li>

        </ul>
      </div>
      <hr class="my-2 border-0 h-[0.5px] bg-gray-100">

      <!-- Sidebar Item -> Marketing -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="Marketing">
          <span></span>
          <span class="tracking-wider block">Marketing</span>
          <span class="text-xs transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="Marketing">

          <li>
            <a href="./reseller.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Resellers</span>
            </a>
          </li>
          <li>
            <a href="./investors.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Investor</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-2 border-0 h-[0.5px] bg-gray-100">


      <!-- Sidebar Item -> TenTheme -->
      <div class="sidebar_item overflow-hidden ">
        <button class="ds_title" data-ref="tentheme"><span class="text-xs transition-all text-pink-600">
            <i class="fa-solid fa-briefcase"></i></span><span class="tracking-wider block">Tentheme 2.0</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="tentheme">

          <li>
            <a href="./home-slider.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Home Page Slider</span>
            </a>
          </li>
          <li>
            <a href="./services-slider.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Services Page Slider</span>
            </a>
          </li>

          <li>
            <a href="./deposit-setting.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Theme Setting</span>
            </a>
          </li>
          <li>
            <a href="settings.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Website Settings</span>
            </a>
          </li>
        </ul>
      </div>

      <hr class="my-2 border-0 h-[0.5px] bg-gray-100">
    </div>

    <div class="w-full h-screen overflow-auto">
      <header class="h-20 bg-white z-40 sticky top-0 left-0 right-0 shadow-sm border-b">
        <div class="h-full flex items-center relative justify-between px-5 xl:px-10">
          <div class="text-xl font-semibold tracking-wide capitalize space-x-3">
            <button id="sidebar_toggler">
              <i class="fa-solid fa-bars"></i>
            </button>
            <span class="hidden sm:inline-block capitalize page_title">Dashboard</span>
          </div>

          <div class="flex items-center justify-center gap-x-3 sm:gap-x-4">
            <div class="relative w-fit z-50"><button type="button"
                class="header_options_toggler w-full p-2 rounded bg-gray-100 shadow border flex items-center justify-center gap-x-3">

                <a class="pr-1" target="_blank" href="../index.php">
                  <span class="text-sm font-medium"><i class="fa fa-eye"></i></span></a>
                <span><?php echo $person['name'] ?></span><img class="h-7 w-7 rounded-full"
                  src="upload/<?php echo $person['file_name'] ?>"> <small
                  class="header_options_icon transition-all transform"><i class="fa-solid fa-chevron-right"></i></small>
              </button>
              <div
                class="header_options absolute w-full bg-white rounded shadow top-full right-0 transition-all origin-top transform scale-y-0">

                <a href="../website-setting.php" class="flex items-center gap-x-2 w-full  hover:bg-gray-100 p-3">
                  <i class="fa fa-internet-explorer"></i>
                  <span class="text-sm font-medium">Website Setting</span></a>

                <a href="../profile.php" class="flex items-center gap-x-2 w-full  hover:bg-gray-100 p-3">
                  <i class="fa-solid fa-user-tie"></i>
                  <span class="text-sm font-medium">Profile Setting</span></a>

                <a href="logout.php" class="flex items-center gap-x-2 w-full  hover:bg-gray-100 p-3">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i><span
                    class="text-sm font-medium">Logout</span></a>

              </div>
            </div>
          </div>
        </div>
      </header>


<script>
  function delete_alert(table,del_val){
      swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover data!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
        url:"config/ajax.php",
        method:"POST",
        data:
        {
          reference:'delete single data by id',
          table:table,
          del_val:del_val,
        },
        success:function(data){
          swal("Success","Poof! Your imaginary file has been deleted!","success"),
          location.reload(true)
        }
      });
    }    
    });    
   }
</script>

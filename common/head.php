<!DOCTYPE html>
<html lang="en">

<head>
  <!--
      theme name: tentheme  Software
      version: 1.0
      author: @tentheme
     -->

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="author" content="<?php echo $website['title'] ?>">
  <meta name="keywords" content="<?php echo $website['keyword'] ?>">
  <meta name="description" content="<?php echo $website['description'] ?>">

  <!-- Favicon -->
  <link rel="shortcut icon" href="admin/upload/<?php echo $website['favicon_name'] ?>" type="image/x-icon" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.2.1.js" crossorigin="anonymous"></script>

  <!-- SUMMERNOTE TEXTAREA -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js" crossorigin="anonymous">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet" />

  <!-- FONT-AWESOME -->
  <script src="https://kit.fontawesome.com/6788eb3be6.js" crossorigin="anonymous"></script>

  <!-- CSS Styles -->
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="stylesheet" href="assets/css/custom.css" />
  <link rel="stylesheet" href="assets/css/thumbnail-slider.css" />

  <!-- FancyBox -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

  <title><?php echo $website['title'] ?></title>
</head>

<body>

  <!-- Header -->
  <header class="relative"
    style="background-image: linear-gradient(to right, #CEF3F3, #cef3f3c2), url('https://www.tentheme.com/wp-content/uploads/2019/06/header-bg-copyright.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="container flex justify-between items-center h-28 mb-auto relative z-50">
      <a href="index.php" class="w-fit">
        <?php if (!empty($website['file_name'])) {?>
        <img class="h-10" src="admin/upload/<?php echo $website['file_name'] ?>" />
        <?php } else {?>
        <h2 style="font-size: 25px;font-weight:bold;font-family:'Courier New', Courier, monospace">
          <?php echo $website['title'] ?></h2>
        <?php }?>
      </a>

      <!-- Header UL -->
      <button id="toggle_menu" class="text-lg lg:hidden relative z-50"><i class="fa-solid fa-bars"></i></button>
      <div class="hidden fixed inset-0 m-auto w-full h-full bg-black z-40 bg-opacity-40" id="mobile_header_overlay">
      </div>
      <ul id="menu_ul"
        class="flex lg:items-center fixed lg:static top-20 inset-x-0 mx-auto lg:mx-0 gap-3 flex-col lg:flex-row lg:bg-transparent bg-white w-[90%] lg:w-auto p-6 lg:p-0 rounded shadow-lg lg:border-transparent lg:shadow-none items-start transform scale-y-0 lg:scale-y-100 origin-top z-50 border transition-transform">
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white" href="index.php">Home</a>
        </li>
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white"
            href="services.php">Services</a>
        </li>
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white" href="blogs.php">Blogs</a>
        </li>
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white" href="ticket.php">Ticket</a>
        </li>
        <li class="relative header_sub_parent">
          <a class="header_sub_ul_toggle flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white"
            href="#">Pages</a>
          <div
            class="transition-all transform origin-top scale-y-0 py-2 absolute z-50 top-[100%] inset-x-0 mx-auto w-56 space-y-1">
            <ul class="bg-white p-3 rounded shadow-xl border">
              <li><a href="about.php"
                  class="custom_li_hover hover:text-white rounded shadow-sm px-3 py-2 block w-full">About Us </a></li>
              <li><a href="contact.php"
                  class="custom_li_hover hover:text-white rounded shadow-sm px-3 py-2 block w-full">Contact Us </a></li>
              <li><a href="team.php"
                  class="custom_li_hover hover:text-white rounded shadow-sm px-3 py-2 block w-full">Team </a></li>
              <?php
$pages = _get("pages", "status='Published'");
while ($page = mysqli_fetch_assoc($pages)) {
    $pg_name = $page['pg_name'];
    ?>
              <li><a href="page.php?page=<?php echo $pg_name; ?>"
                  class="custom_li_hover hover:text-white rounded shadow-sm px-3 py-2 block w-full">
                  <?php
$pg_name = str_replace("-", " ", "$pg_name");
    echo ucwords($pg_name);
    ?>
                </a></li>
              <?php }?>
            </ul>
          </div>
        </li>


        
        <form action="search.php" method="GET">
          <label for="default-search"
            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
              <svg aria-hidden="true" class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </div>
            <input type="search" name="src" id="default-search" value="<?php if (isset($_GET['src'])) {echo $src = $_GET['src'];}?>" 
              class="outline-none block w-full py-3 pl-8 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2"
              placeholder="Search Theme, Web App.." required>

          </div>
        </form>


        <?php if ($header_social_link == 'checked') {?>
        <div class="flex space-x-2">
          <a target="_blank" href="<?php echo $website['facebook'] ?>"
            class="bg-[#3d9ae7] hover:bg-black transition-all w-11 h-11 rounded flex items-center justify-center text-white">
            <i class="fa-brands fa-facebook"></i>
            <small></small>
          </a>
          <a target="_blank" href="<?php echo $website['youtube'] ?>"
            class="bg-[#cd201f] hover:bg-black transition-all w-11 h-11 rounded flex items-center justify-center text-white">
            <i class="fa-brands fa-youtube"></i>
            <small></small>
          </a>
        </div>
        <?php }?>

        <?php if ($id < 1) {?>
        <li>
        <li>
          <a class="flex items-center px-3 h-[44px] text-white space-x-2 rounded focus:ring-1 focus:ring-[#11987d] ring-offset-2 shadow"
            style=" background-image: conic-gradient(from 1turn, #0e9479, #16a085);" href="login.php">
            <span class="text-sm">
              <i class="fa-solid fa-lock"></i>
            </span>
            <span>Login/Sign-in</span>
          </a>
        </li>
        <?php } else {?>
        <li class="relative">
          <div class="p-0.5 w-fit h-fit bg-gray-100 rounded-md hover:from-transparent transition-all">
            <button id="dashboard_options_handler"
              class="flex items-center gap-x-2 px-3 h-[44px] rounded bg-white hover:bg-gray-100 transition-all focus:ring-2 ring-offset-2 focus:ring-gray-200"
              href="#">

              <a href="cart.php" class="mr-1 relative flex items-center gap-x-1 text-sm">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="cart_items_wrapper">
                  <?php echo $cart_number = mysqli_num_rows(_get("cart", "pid=$id AND type='product' AND status=0")); ?>
                </span>
              </a>
              <small><?php echo $person['name'] ?></small>
              <img class="w-7 h-7 rounded-full" src="admin/upload/<?php echo $person['file_name'] ?>" />
              <small class="block transition-all transform rotate-180">
                <i class="fa-solid fa-chevron-up"></i>
              </small>
            </button>
          </div>


          <div id="dashboard_options"
            class="absolute w-full rounded h-fit bg-white shadow top-[105%] inset-x-0 mx-auto transition-all transform origin-top scale-y-0 z-50">
            <div class="flex flex-col py-2">

              <?php if ($person['role'] == 'Admin') {?>
              <a target="_blank" href="admin/index.php"
                class="flex items-center gap-x-1 w-full px-3 py-3 hover:bg-gray-100">
                <span class="block min-w-[20px] max-w-[20px]"><i class="fa-solid fa-chart-line"></i></span>
                <span>Admin Panel</span>
              </a>
              <?php }?>

              <a href="dashboard.php" class="flex items-center gap-x-1 w-full px-3 py-3 hover:bg-gray-100">
                <span class="block min-w-[20px] max-w-[20px]"><i class="fa-solid fa-gauge"></i></span>
                <span>Dashboard</span>
              </a>

              <a href="logout.php" class="flex items-center gap-x-1 w-full px-3 py-3 hover:bg-gray-100">
                <span class="block min-w-[20px] max-w-[20px]"><i class="fa-solid fa-sign-out"></i></span>
                <span>Logout</span>
              </a>
            </div>
          </div>
        </li>
        <?php }?>

      </ul>
    </div>
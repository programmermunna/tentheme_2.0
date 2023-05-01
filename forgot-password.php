<?php include "admin/config/functions.php";
_login("index", "user");

$err = "";
if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $pass = $_GET['pass'];

    $row = _fetch("person", "email='$email' AND password='$pass'");
    if ($row > 0) {
        $id = $row['id'];
        $_SESSION['user_id'] = $id;
        setcookie('user_id', $id, time() + 2580000);
        header('location:dashboard.php?msg=Successfully Logged In');
    } else {
        $err = "Email Or Password is wrong";
    }
}

//============login========//
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $row = _fetch("person", "email='$email' AND password='$pass'");
    if ($row > 0) {
        $id = $row['id'];
        $_SESSION['user_id'] = $id;
        setcookie('user_id', $id, time() + 2580000);
        header('location:dashboard.php?msg=Successfully Logged In');
    } else {
        $err = "Email Or Password is wrong";
    }
}


//============sign in========//
if (isset($_POST['sign_in_submit'])) {
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
                  header('location:dashboard.php?msg=Congratulations for Signup Account');
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
?>
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
      <ul id="login_head"
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

      </ul>
    </div>

  <div>


  <div style="min-height: calc(100vh - 80px);" class="w-full py-12 flex items-center justify-center">
    <div
      class="w-[96%] lg:w-[525px] mx-auto text-center bg-white rounded-lg relative overflow-hidden py-16 px-10 sm:px-12 md:px-[60px]">
      <div class="mb-12 text-center">
        <h3 class="text-xl font-semibold tracking-wide">Reset Your Password</h3>
      </div>
      <form action="" method="POST">
        <div class="mb-6"><input required="" name="email" type="email" placeholder="Email Address"
            class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4">
        </div>


        <button type="submit"
          class="flex items-center justify-center px-4 gap-x-4 bg-blue-600 text-white focus:ring rounded w-full h-11 tracking-wider font-medium text-base">
          Reset Password
        </button>
        <a class="mt-5 hover:underline text-blue-500 block" href="login.php">Let's Signin</a>
      </form>

      <br>

      <div><span class="absolute top-1 right-1"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <circle cx="1.39737" cy="38.6026" r="1.39737" transform="rotate(-90 1.39737 38.6026)" fill="#3056D3">
            </circle>
            <circle cx="1.39737" cy="1.99122" r="1.39737" transform="rotate(-90 1.39737 1.99122)" fill="#3056D3">
            </circle>
            <circle cx="13.6943" cy="38.6026" r="1.39737" transform="rotate(-90 13.6943 38.6026)" fill="#3056D3">
            </circle>
            <circle cx="13.6943" cy="1.99122" r="1.39737" transform="rotate(-90 13.6943 1.99122)" fill="#3056D3">
            </circle>
            <circle cx="25.9911" cy="38.6026" r="1.39737" transform="rotate(-90 25.9911 38.6026)" fill="#3056D3">
            </circle>
            <circle cx="25.9911" cy="1.99122" r="1.39737" transform="rotate(-90 25.9911 1.99122)" fill="#3056D3">
            </circle>
            <circle cx="38.288" cy="38.6026" r="1.39737" transform="rotate(-90 38.288 38.6026)" fill="#3056D3"></circle>
            <circle cx="38.288" cy="1.99122" r="1.39737" transform="rotate(-90 38.288 1.99122)" fill="#3056D3"></circle>
            <circle cx="1.39737" cy="26.3057" r="1.39737" transform="rotate(-90 1.39737 26.3057)" fill="#3056D3">
            </circle>
            <circle cx="13.6943" cy="26.3057" r="1.39737" transform="rotate(-90 13.6943 26.3057)" fill="#3056D3">
            </circle>
            <circle cx="25.9911" cy="26.3057" r="1.39737" transform="rotate(-90 25.9911 26.3057)" fill="#3056D3">
            </circle>
            <circle cx="38.288" cy="26.3057" r="1.39737" transform="rotate(-90 38.288 26.3057)" fill="#3056D3"></circle>
            <circle cx="1.39737" cy="14.0086" r="1.39737" transform="rotate(-90 1.39737 14.0086)" fill="#3056D3">
            </circle>
            <circle cx="13.6943" cy="14.0086" r="1.39737" transform="rotate(-90 13.6943 14.0086)" fill="#3056D3">
            </circle>
            <circle cx="25.9911" cy="14.0086" r="1.39737" transform="rotate(-90 25.9911 14.0086)" fill="#3056D3">
            </circle>
            <circle cx="38.288" cy="14.0086" r="1.39737" transform="rotate(-90 38.288 14.0086)" fill="#3056D3"></circle>
          </svg></span><span class="absolute left-1 bottom-1"><svg width="29" height="40" viewBox="0 0 29 40"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="2.288" cy="25.9912" r="1.39737" transform="rotate(-90 2.288 25.9912)" fill="#3056D3"></circle>
            <circle cx="14.5849" cy="25.9911" r="1.39737" transform="rotate(-90 14.5849 25.9911)" fill="#3056D3">
            </circle>
            <circle cx="26.7216" cy="25.9911" r="1.39737" transform="rotate(-90 26.7216 25.9911)" fill="#3056D3">
            </circle>
            <circle cx="2.288" cy="13.6944" r="1.39737" transform="rotate(-90 2.288 13.6944)" fill="#3056D3"></circle>
            <circle cx="14.5849" cy="13.6943" r="1.39737" transform="rotate(-90 14.5849 13.6943)" fill="#3056D3">
            </circle>
            <circle cx="26.7216" cy="13.6943" r="1.39737" transform="rotate(-90 26.7216 13.6943)" fill="#3056D3">
            </circle>
            <circle cx="2.288" cy="38.0087" r="1.39737" transform="rotate(-90 2.288 38.0087)" fill="#3056D3"></circle>
            <circle cx="2.288" cy="1.39739" r="1.39737" transform="rotate(-90 2.288 1.39739)" fill="#3056D3"></circle>
            <circle cx="14.5849" cy="38.0089" r="1.39737" transform="rotate(-90 14.5849 38.0089)" fill="#3056D3">
            </circle>
            <circle cx="26.7216" cy="38.0089" r="1.39737" transform="rotate(-90 26.7216 38.0089)" fill="#3056D3">
            </circle>
            <circle cx="14.5849" cy="1.39761" r="1.39737" transform="rotate(-90 14.5849 1.39761)" fill="#3056D3">
            </circle>
            <circle cx="26.7216" cy="1.39761" r="1.39737" transform="rotate(-90 26.7216 1.39761)" fill="#3056D3">
            </circle>
          </svg></span>
      </div>
    </div>
  </div>

   <?php include("common/footer.php");?>
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

        $icon = '<i class="fa-solid fa-arrow-right-to-bracket"></i>';
        $title = 'You are Logged in Successfull';
        $activitie = _insert("activities","pid,icon,title,time","'$id','$icon','$title','$time'");
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

                  $icon = '<i class="fa-solid fa-user-check"></i>';
                  $title = 'Congratulations! You are Created new Account';
                  $activitie = _insert("activities","pid,icon,title,time","'$user_id','$icon','$title','$time'");
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
$id = 0;
include("common/head.php");
?>


  <div>
    <div class="py-20 flex justify-center container">


      <div class="w-full text-center bg-white rounded-lg relative overflow-hidden py-16 px-10 sm:px-12 md:px-[60px]">
        <div class="mb-12 text-center">
          <h3 class="text-xl font-semibold w-full text-left tracking-wide">Login</h3>
        </div>
        <form action="" method="POST">
          <div class="mb-6"><input required="" name="email" type="email" placeholder="Email Address"
              class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4">
          </div>
          <div class="mb-6"><input required="" name="pass" type="password" placeholder="Password"
              class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4">
          </div>

          <button type="submit" name="submit"
            class="flex items-center justify-center px-4 gap-x-4 bg-blue-600 text-white focus:ring rounded w-full h-11 tracking-wider font-medium text-base">Sign
            in</button>
          <a class="my-5 hover:underline text-blue-500 block" href="forgot-password.php">Forgot password</a>
        </form>
      </div>

      <div class="w-full text-center bg-white rounded-lg relative overflow-hidden py-16 px-10 sm:px-12 md:px-[60px]">
        <div class="mb-12 text-center">
          <h3 class="text-xl font-semibold tracking-wide w-full text-left">Create New Account</h3>
        </div>

        <form action="" method="POST">
          <div class="mb-6"><input required="" name="name" type="text" placeholder="Your Name"
              class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4">
          </div>

          <div class="mb-6"><input required="" name="phone" type="text" placeholder="Phone Number"
              class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4">
          </div>


          <div class="mb-6"><input required="" name="email" type="email" placeholder="Email Address"
              class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4">
          </div>
          <div class="mb-6"><input required="" name="pass" type="password" placeholder="Password"
              class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4">
          </div>
          <div class="mb-6"><input required="" name="cpass" type="password" placeholder="Confirm Password"
              class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4">
          </div>

          <div class="mb-10"><button type="submit" name="sign_in_submit"
              class="flex items-center justify-center px-4 gap-x-4 bg-blue-600 text-white focus:ring rounded w-full h-11 tracking-wider font-medium text-base">Register</button>
          </div>
        </form>
      </div>
    </div>

   <?php include("common/footer.php");?>
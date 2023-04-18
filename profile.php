<!-- Header area -->
<?php include "common/header.php";?>
<!-- Header area -->

<!-- Sub Header -->
<div class="container space-y-6 pt-6 pb-12 lg:py-24">

  <!-- Page Name Title -->
  <h3 class="text-4xl font-medium tracking-wide">
    Profile
  </h3>

  <!-- Page Tree Links -->
  <div class="items-center justify-start space-x-2 text-gray-500">

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
      <i class="fa-solid fa-house"></i>
    </a>

    <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="profile.php"> profile
    </a>

  </div>

</div>
</header>

<main style="min-height: calc(100vh - 80px)">
  <div class="flex items-start py-16">
    <div class="container flex flex-col lg:flex-row gap-y-5 lg:gap-y-0 lg:gap-x-5">

      <!-- Dashboard Sidebar -->
      <?php include "common/dashboad_sidebar.php";?>
      <!-- Dashboard Sidebar -->

      <!-- Body Content -->
      <div class="w-full bg-white shadow rounded-sm">

        <div class="px-5 py-4 text-blue-600 border-b flex justify-between items-center">
          <span class="text-2xl font-medium tracking-wide">Profile</span>
        </div>
        <?php

        
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $pass = md5($_POST['pass']);
    $npass = md5($_POST['npass']);
    $cpass = md5($_POST['cpass']);

    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp,"admin/upload/$file_name");
    
    if(empty($file_name)){
      $file_name = $person['file_name'];
    }  
    
    if($person['password'] == $pass){
      if($npass == $cpass){              
        $person_update = _update("person"," name='$name',phone='$phone',email='$email',address='$address',password='$npass',file_name='$file_name'","id=$id");
      }
    }else{
      $person_update = _update("person"," name='$name',phone='$phone',email='$email',address='$address',file_name='$file_name'","id=$id");
    }

    if($person_update){
      $msg = "Successfully Updated";
      header("location:profile.php?msg=$msg");
    }else{
      echo "error";
    }












    if (empty($file_name)) {
        $insert = _update("person", "name='$name',phone='$phone',email='$email',address='$address'", "id=$id");
    } else {
        $insert = _update("person", "name='$name',phone='$phone',email='$email',address='$address',file_name='$file_name'", "id=$id");
    }

    if ($insert) {
        $msg = "Successfully Updated";
        header("location:profile.php?msg=$msg");
    }
}

?>
        <form action="" method="POST" enctype="multipart/form-data" class="grid grid-cols-12 gap-y-6 p-5">
          <div class="col-span-12"><label class="mb-2 block" for="name">Name</label><input name="name" required=""
              type="text" placeholder="Your Name"
              class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4"
              value="<?php echo $person['name'] ?>"></div>
          <div class="col-span-12"><label class="mb-2 block" for="phone">Phone</label><input name="phone" type="text"
              placeholder="Phone Number"
              class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4"
              value="<?php echo $person['phone'] ?>"></div>
          <div class="col-span-12"><label class="mb-2 block" for="email">Email</label><input name="email" required=""
              type="email" placeholder="Emaill Address"
              class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4"
              value="<?php echo $person['email'] ?>"></div>
          <div class="col-span-12"><label class="mb-2 block" for="email">Address</label><input name="address"
              required="" type="text" placeholder="Emaill Address"
              class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4"
              value="<?php echo $person['address'] ?>"></div>

          <div class="col-span-12">
            <label class="mb-2 block" for="pass">Password</label>
            <input name="pass" type="password" placeholder="******"
              class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4" >
          </div>

          <div class="col-span-12">
            <label class="mb-2 block" for="pass">New Password</label>
            <input name="npass" type="password" placeholder="******"
              class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4" >
          </div>

          <div class="col-span-12">
            <label class="mb-2 block" for="cpass">Confirm Password</label>
            <input name="pass" type="password" placeholder="******"
              class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4" >
          </div>

          <div class="col-span-12"><label class="mb-2 block" for="photo">Change Photo</label><input name="file"
              class="w-full flex items-center rounded bg-white outline-none ring-2 ring-gray-200 focus:ring-blue-600 text-gray-800 px-4 py-2 disabled:bg-gray-200 disabled:cursor-not-allowed"
              id="photo" type="file">
          </div>
          
          <div class="col-span-12"><label class="mb-2 block" for="photo">Photo</label>
            <img style="width: 150px;" src="admin/upload/<?php echo $person['file_name'] ?>" alt="">
          </div>

          <div class="col-span-12">
            <div class="w-fit"><button type="submit" name="submit"
                class="flex items-center justify-center px-4 gap-x-4 bg-blue-600 text-white focus:ring rounded w-full h-11 tracking-wider font-medium text-base"><span>Save
                  Changes</span></button></div>
          </div>
        </form>

      </div>

    </div>
  </div>
</main>

<!-- Header area -->
<?php include "common/footer.php";?>
<!-- Header area -->
<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->

    <!-- Sub Header -->
    <div class="container space-y-6 pt-6 pb-12 lg:py-24">

      <!-- Page Name Title -->
      <h3 class="text-4xl font-medium tracking-wide">
        Close Account
      </h3>

      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="security.php"> Close Account
        </a>

      </div>

    </div>
  </header>

  <main style="min-height: calc(100vh - 80px)">
    <div class="flex items-start py-16">
      <div class="container flex flex-col lg:flex-row gap-y-5 lg:gap-y-0 lg:gap-x-5">

        <!-- Dashboard Sidebar -->
        <?php include("common/dashboad_sidebar.php");?>
        <!-- Dashboard Sidebar -->

        <!-- Body Content -->
        <div class="w-full bg-white shadow rounded-sm">

          <div class="px-5 py-4 text-blue-600 border-b flex justify-between items-center">
            <span class="text-2xl font-medium tracking-wide">Close Account</span>
          </div>
          <?php
            if(isset($_POST['submit'])){
              $password = md5($_POST['password']);
              $confirm_password = md5($_POST['confirm_password']);
              $person_id = $person['id'];

              if($password == $confirm_password){
                  if($person['password'] == $password){
                    $delete_person = _delete("person","id=$person_id");
                    $delete_ticket = _delete("tickets","pid=$person_id");
                    $delete_reviews = _delete("reviews","pid=$person_id");
                    $delete_deposit = _delete("deposit","pid=$person_id");
                    $delete_withdraw = _delete("withdraw","pid=$person_id");
                    $delete_cart = _delete("cart","pid=$person_id");
                  if( $delete_person && $delete_ticket && $delete_reviews && $delete_deposit && $delete_withdraw && $delete_cart){
                    header("location:logout.php");
                  }
                }else{
                  $err = "Your Old Password are not Currect";
                  header("location:close-account.php?err=$err");
                }
              }else{
                $err = "Password and Confirm Password are not Match";
                header("location:close-account.php?err=$err");
              }
            }

          ?>
          <form action="" method="POST" class="grid grid-cols-12 gap-y-6 p-5">
            <div class="col-span-12"><label class="mb-2 block" for="new_password">Current Password</label><input
                required="" name="password" type="password" placeholder="Password"
                class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4"></div>
            <div class="col-span-12"><label class="mb-2 block" for="confirm_password">Confirm Password</label><input
                required="" name="confirm_password" type="password" placeholder="Confirm Password"
                class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4"></div>
            <div class="col-span-12">
              <div class="w-fit">
                <button type="submit" name="submit"
                  class="flex items-center justify-center px-4 gap-x-4 bg-blue-600 text-white focus:ring rounded w-full h-11 tracking-wider font-medium text-base">
                  <span>Delete Account</span>
                </button>
                </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </main>


  <!-- Header area -->
  <?php include("common/footer.php");?>
<!-- Header area -->
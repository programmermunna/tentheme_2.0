<?php include "common/header-sidebar.php"?>
<?php
//users
$day_users = mysqli_num_rows(_get("person", "role!='Admin' AND time>$time-8400"));
$month_users = mysqli_num_rows(_get("person", "role!='Admin' AND time>$time-(252000)"));
$year_users = mysqli_num_rows(_get("person", "role!='Admin' AND time>$time-(3024000)"));
$all_users = mysqli_num_rows(_get("person", "role!='Admin'"));

//product
$pending_products = mysqli_num_rows(_get("products", "status='Pending'"));
$success_products = mysqli_num_rows(_get("products", "status='Publish'"));
$total_products = mysqli_num_rows(_getAll("products"));

//service
$pending_service = mysqli_num_rows(_get("service", "status='Pending'"));
$success_service = mysqli_num_rows(_get("service", "status='Publish'"));
$total_service = mysqli_num_rows(_getAll("service"));

//post
$pending_post = mysqli_num_rows(_get("post", "status='Pending'"));
$success_post = mysqli_num_rows(_get("post", "status='Publish'"));
$total_post = mysqli_num_rows(_getAll("post"));

//cart
$pending_cart = mysqli_num_rows(_get("cart", "status=0"));
$success_cart = mysqli_num_rows(_get("cart", "status=1"));
$total_cart = mysqli_num_rows(_getAll("cart"));

//deposit
$pending_deposit = mysqli_fetch_assoc(_query("SELECT SUM(amount) FROM deposit WHERE status='Pending'"));
$pending_deposit = $pending_deposit['SUM(amount)'];

$success_deposit = mysqli_fetch_assoc(_query("SELECT SUM(amount) FROM deposit WHERE status='Success'"));
$success_deposit = $success_deposit['SUM(amount)'];

//withdraw
$pending_withdraw = mysqli_fetch_assoc(_query("SELECT SUM(amount) FROM withdraw WHERE status='Pending'"));
$pending_withdraw = $pending_withdraw['SUM(amount)'];

$success_withdraw = mysqli_fetch_assoc(_query("SELECT SUM(amount) FROM withdraw WHERE status='Success'"));
$success_withdraw = $success_withdraw['SUM(amount)'];
?>
<div class="x_container space-y-10 py-10">

  <!-- Money Stats -->
  <div class="shadow bg-white rounded w-fulls overflow-hidden">
    <h3 class="p-4 gap-x-3 flex border-b border-gray-100 items-center font-semibold text-cyan-900">
      <i class="fa-solid fa-briefcase"></i>
      <span>Balance Status</span>
    </h3>

    <div class="grid grid-cols-1 gap-4 p-6 mb-6 w-full sm:grid-cols-2 2xl:grid-cols-3">

      <div class="rounded overflow-hidden">
        <div class="bg-fuchsia-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">12218</h2>
            <h2 class="text-base">All Users</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all">
            <i class="fa-solid fa-folder "></i>
          </h1>
        </div><a href="./users.php">
          <div class="bg-fuchsia-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span>
            <span>
              <i class="fa-solid fa-circle-right"></i>
            </span>
          </div>
        </a>
      </div>

      <div class="rounded overflow-hidden">
        <div class="bg-fuchsia-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">12218</h2>
            <h2 class="text-base">All Moderator</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all">
            <i class="fa-solid fa-folder "></i>
          </h1>
        </div><a href="./users.php">
          <div class="bg-fuchsia-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span>
            <span>
              <i class="fa-solid fa-circle-right"></i>
            </span>
          </div>
        </a>
      </div>

      <div class="rounded overflow-hidden">
        <div class="bg-fuchsia-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">12218</h2>
            <h2 class="text-base">All Admin</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all">
            <i class="fa-solid fa-folder "></i>
          </h1>
        </div><a href="./users.php">
          <div class="bg-fuchsia-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span>
            <span>
              <i class="fa-solid fa-circle-right"></i>
            </span>
          </div>
        </a>
      </div>









      <div class="rounded overflow-hidden">
        <div class="bg-orange-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">$221.98</h2>
            <h2 class="text-base">Success Deposit</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all">
            <i class="fa-solid fa-folder "></i>
          </h1>
        </div><a href="./deposits.php">
          <div class="bg-orange-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span>
            <span>
              <i class="fa-solid fa-circle-right"></i>
            </span>
          </div>
        </a>
      </div>

      <div class="rounded overflow-hidden">
        <div class="bg-pink-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">$10</h2>
            <h2 class="text-base">Pending Deposit</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
              class="fa-solid fa-folder "></i></h1>
        </div><a href="./deposits.php">
          <div class="bg-pink-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
          </div>
        </a>
      </div>


      <div class="rounded overflow-hidden">
        <div class="bg-pink-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">$10</h2>
            <h2 class="text-base">Total Deposit</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
              class="fa-solid fa-folder "></i></h1>
        </div><a href="./deposits.php">
          <div class="bg-pink-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
          </div>
        </a>
      </div>





      <div class="rounded overflow-hidden">
        <div class="bg-yellow-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">$0</h2>
            <h2 class="text-base">Success Withdraw</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
              class="fa-solid fa-folder "></i></h1>
        </div><a href="./withdraw.php">
          <div class="bg-yellow-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
          </div>
        </a>
      </div>

      <div class="rounded overflow-hidden">
        <div class="bg-rose-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">$0</h2>
            <h2 class="text-base">Pending Withdraw</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
              class="fa-solid fa-folder "></i></h1>
        </div><a href="./withdraw.php">
          <div class="bg-rose-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
          </div>
        </a>
      </div>





      <div class="rounded overflow-hidden">
        <div class="bg-pink-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">8510</h2>
            <h2 class="text-base">Total Withdraw</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
              class="fa-solid fa-folder "></i></h1>
        </div><a href="./users.php">
          <div class="bg-pink-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
          </div>
        </a>
      </div>

      <div class="rounded overflow-hidden">
        <div class="bg-yellow-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">1124</h2>
            <h2 class="text-base">This Payment Methods</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
              class="fa-solid fa-folder "></i></h1>
        </div><a href="./users.php">
          <div class="bg-yellow-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
          </div>
        </a>
      </div>








    </div>
  </div>

  <!-- Blog & Pages -->
  <div class="shadow bg-white rounded w-fulls overflow-hidden">
    <h3 class="p-4 gap-x-3 flex border-b border-gray-100 items-center font-semibold text-cyan-900">
      <i class="fa-solid fa-users"></i>
      <span>Blog & Pages</span>
    </h3>

    <div class="grid grid-cols-1 gap-4 p-6 mb-6 w-full sm:grid-cols-2 2xl:grid-cols-3">
      <div class="rounded overflow-hidden">
        <div class="bg-fuchsia-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">12218</h2>
            <h2 class="text-base">All Posts</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all">
            <i class="fa-solid fa-folder "></i>
          </h1>
        </div><a href="./users.php">
          <div class="bg-fuchsia-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span>
            <span>
              <i class="fa-solid fa-circle-right"></i>
            </span>
          </div>
        </a>
      </div>

      <div class="rounded overflow-hidden">
        <div class="bg-pink-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">8510</h2>
            <h2 class="text-base">All Category</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
              class="fa-solid fa-folder "></i></h1>
        </div><a href="./users.php">
          <div class="bg-pink-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
          </div>
        </a>
      </div>

      <div class="rounded overflow-hidden">
        <div class="bg-yellow-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">1124</h2>
            <h2 class="text-base">All Pages</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
              class="fa-solid fa-folder "></i></h1>
        </div><a href="./users.php">
          <div class="bg-yellow-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
          </div>
        </a>
      </div>

    </div>
  </div>

  <!-- order Stats -->
  <div class="shadow bg-white rounded w-fulls overflow-hidden">
    <h3 class="p-4 gap-x-3 flex border-b border-gray-100 items-center font-semibold text-cyan-900">
      <i class="fa-solid fa-briefcase"></i>
      <span>Orders</span>
    </h3>


    <div class="grid grid-cols-1 gap-4 p-6 mb-6 w-full sm:grid-cols-2 2xl:grid-cols-3">
      <div class="rounded overflow-hidden">
        <div class="bg-sky-600 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">3218</h2>
            <h2 class="text-base">All Products Category</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all">
            <i class="fa-solid fa-folder "></i>
          </h1>
        </div><a href="./products.php">
          <div class="bg-sky-600 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span>
            <span>
              <i class="fa-solid fa-circle-right"></i>
            </span>
          </div>
        </a>
      </div>

      <div class="rounded overflow-hidden">
        <div class="bg-pink-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">510</h2>
            <h2 class="text-base">All Products</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
              class="fa-solid fa-folder "></i></h1>
        </div><a href="./products.php">
          <div class="bg-pink-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
          </div>
        </a>
      </div>

      <div class="rounded overflow-hidden">
        <div class="bg-yellow-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">1124</h2>
            <h2 class="text-base">All Service Category</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
              class="fa-solid fa-folder "></i></h1>
        </div><a href="./products.php">
          <div class="bg-yellow-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
          </div>
        </a>
      </div>

      <div class="rounded overflow-hidden">
        <div class="bg-rose-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">11</h2>
            <h2 class="text-base">All Services</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
              class="fa-solid fa-folder "></i></h1>
        </div><a href="./products.php">
          <div class="bg-rose-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
          </div>
        </a>
      </div>




      <div class="rounded overflow-hidden">
        <div class="bg-rose-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">11</h2>
            <h2 class="text-base">All Order</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
              class="fa-solid fa-folder "></i></h1>
        </div><a href="./products.php">
          <div class="bg-rose-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
          </div>
        </a>
      </div>



    </div>
  </div>

  <!-- support Stats -->
  <div class="shadow bg-white rounded w-fulls overflow-hidden">
    <h3 class="p-4 gap-x-3 flex border-b border-gray-100 items-center font-semibold text-cyan-900">
      <i class="fa-solid fa-briefcase"></i>
      <span>Support Stats</span>
    </h3>

    <div class="grid grid-cols-1 gap-4 p-6 mb-6 w-full sm:grid-cols-2 2xl:grid-cols-3">
      <div class="rounded overflow-hidden">
        <div class="bg-lime-600 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">218</h2>
            <h2 class="text-base">All Tickets</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all">
            <i class="fa-solid fa-folder "></i>
          </h1>
        </div><a href="./services.php">
          <div class="bg-lime-600 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span>
            <span>
              <i class="fa-solid fa-circle-right"></i>
            </span>
          </div>
        </a>
      </div>

      <div class="rounded overflow-hidden">
        <div class="bg-pink-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">510</h2>
            <h2 class="text-base">All Pending Tickets</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
              class="fa-solid fa-folder "></i></h1>
        </div><a href="./services.php">
          <div class="bg-pink-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
          </div>
        </a>
      </div>

      <div class="rounded overflow-hidden">
        <div class="bg-yellow-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">14</h2>
            <h2 class="text-base">All Solved Tickets</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
              class="fa-solid fa-folder "></i></h1>
        </div><a href="./services.php">
          <div class="bg-yellow-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
          </div>
        </a>
      </div>

    </div>
  </div>

  <!-- Marketing Stats -->
  <div class="shadow bg-white rounded w-fulls overflow-hidden">
    <h3 class="p-4 gap-x-3 flex border-b border-gray-100 items-center font-semibold text-cyan-900">
      <i class="fa-solid fa-briefcase"></i>
      <span>Marketing Stats</span>
    </h3>

    <div class="grid grid-cols-1 gap-4 p-6 mb-6 w-full sm:grid-cols-2 2xl:grid-cols-3">
      <div class="rounded overflow-hidden">
        <div class="bg-fuchsia-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">218</h2>
            <h2 class="text-base">All Resel↔ </h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all">
            <i class="fa-solid fa-folder "></i>
          </h1>
        </div><a href="./orders.php">
          <div class="bg-fuchsia-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span>
            <span>
              <i class="fa-solid fa-circle-right"></i>
            </span>
          </div>
        </a>
      </div>

      <div class="rounded overflow-hidden">
        <div class="bg-pink-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">510</h2>
            <h2 class="text-base">All Investor</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
              class="fa-solid fa-folder "></i></h1>
        </div><a href="./orders.php">
          <div class="bg-pink-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
          </div>
        </a>
      </div>

      <div class="rounded overflow-hidden">
        <div class="bg-yellow-500 text-white group p-5 flex items-center justify-between">
          <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">14</h2>
            <h2 class="text-base">All Investor Deposit Money</h2>
          </div>
          <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
              class="fa-solid fa-folder "></i></h1>
        </div><a href="./orders.php">
          <div class="bg-yellow-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
            <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
          </div>
        </a>
      </div>

    </div>
  </div>


</div>
</div>
</main>

<script src="js/app.js"></script>

</body>

</html>
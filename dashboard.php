<!-- Header area -->
<?php include "common/header.php";?>
<!-- Header area -->
<?php
if ($id < 1) {
    header("location:index.php");
}
?>
<!-- Sub Header -->
<div class="container space-y-6 pt-6 pb-12 lg:py-24">

  <!-- Page Name Title -->
  <h3 class="text-4xl font-medium tracking-wide">
    Dashboard
  </h3>

  <!-- Page Tree Links -->
  <div class="items-center justify-start space-x-2 text-gray-500">

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
      <i class="fa-solid fa-house"></i>
    </a>

    <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="dashboard.php"> dashboard </a>

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

        <div class="px-5 py-4 text-blue-600 text-2xl font-medium tracking-wide border-b">Dashboard</div>

        <!-- Dashboard Card Details -->
        <div class="grid grid-cols-1 gap-4 p-6 mb-6 w-full sm:grid-cols-2">
          <div class="rounded overflow-hidden">
            <div class="bg-blue-500 text-white group p-5 flex items-center justify-between">
              <div class="flex flex-col gap-4">
                <h2 class="text-3xl font-semibold">32</h2>
                <h2 class="text-base">Total Downloads</h2>
              </div>
              <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all">
                <i class="fa-solid fa-money-bill"></i>
              </h1>
            </div><a href="./download.php">
              <div class="bg-blue-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
                <span>More Info</span>
                <span>
                  <i class="fa-solid fa-circle-right"></i>
                </span>
              </div>
            </a>
          </div>

          <div class="rounded overflow-hidden">
            <div class="bg-green-600 text-white group p-5 flex items-center justify-between">
              <div class="flex flex-col gap-4">
                <h2 class="text-3xl font-semibold">10</h2>
                <h2 class="text-base">Total Service Purchase</h2>
              </div>
              <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
                  class="fa-solid fa-money-bill"></i></h1>
            </div><a href="./my-services.php">
              <div class="bg-green-600 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
                <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
              </div>
            </a>
          </div>

          <div class="rounded overflow-hidden">
            <div class="bg-yellow-500 text-white group p-5 flex items-center justify-between">
              <div class="flex flex-col gap-4">
                <h2 class="text-3xl font-semibold">$2340</h2>
                <h2 class="text-base">Total Product Purchase</h2>
              </div>
              <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
                  class="fa-solid fa-money-bill"></i></h1>
            </div><a href="./download.php">
              <div class="bg-yellow-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
                <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
              </div>
            </a>
          </div>

          <div class="rounded overflow-hidden">
            <div class="bg-pink-500 text-white group p-5 flex items-center justify-between">
              <div class="flex flex-col gap-4">
                <h2 class="text-3xl font-semibold">9</h2>
                <h2 class="text-base">Total Support Tickets</h2>
              </div>
              <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
                  class="fa-solid fa-money-bill"></i></h1>
            </div><a href="./ticket.php">
              <div class="bg-pink-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
                <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
              </div>
            </a>
          </div>

          <div class="rounded overflow-hidden">
            <div class="bg-cyan-500 text-white group p-5 flex items-center justify-between">
              <div class="flex flex-col gap-4">
                <h2 class="text-3xl font-semibold">$4340</h2>
                <h2 class="text-base">Total Deposits</h2>
              </div>
              <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
                  class="fa-solid fa-money-bill"></i></h1>
            </div><a href="./deposit.php">
              <div class="bg-cyan-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
                <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
              </div>
            </a>
          </div>

          <div class="rounded overflow-hidden">
            <div class="bg-rose-500 text-white group p-5 flex items-center justify-between">
              <div class="flex flex-col gap-4">
                <h2 class="text-3xl font-semibold">$1320</h2>
                <h2 class="text-base">Total Withdraw</h2>
              </div>
              <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
                  class="fa-solid fa-money-bill"></i></h1>
            </div><a href="./withdraw-now.php">
              <div class="bg-rose-500 text-white bg-opacity-70 p-1 flex text-sm items-center justify-center gap-x-2">
                <span>More Info</span><span><i class="fa-solid fa-circle-right"></i></span>
              </div>
            </a>
          </div>


          <div class="rounded overflow-hidden col-span-full">
            <div class="bg-orange-500 text-white group p-5 flex items-center justify-between">
              <div class="flex flex-col gap-4">
                <h2 class="text-3xl font-semibold">$1320</h2>
                <h2 class="text-base">Total Reseller Profit</h2>
              </div>
              <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
                  class="fa-solid fa-money-bill"></i></h1>
            </div>
          </div>
          <div class="rounded overflow-hidden col-span-full">
            <div class="bg-purple-500 text-white group p-5 flex items-center justify-between">
              <div class="flex flex-col gap-4">
                <h2 class="text-3xl font-semibold">$1320</h2>
                <h2 class="text-base">Investor Profit</h2>
              </div>
              <h1 class="text-4xl opacity-30 group-hover:scale-110 transform transition-all"><i
                  class="fa-solid fa-money-bill"></i></h1>
            </div>
          </div>
        </div>
        <!-- Dashboard Card Details -->


      </div>

    </div>
  </div>
</main>


<<!-- Header area -->
<?php include "common/footer.php";?>
<!-- Header area -->
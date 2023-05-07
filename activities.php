<!-- Header area -->
<?php include "common/header.php";?>
<!-- Header area -->

<!-- Sub Header -->
<div class="container space-y-6 pt-6 pb-12 lg:py-24">

  <!-- Page Name Title -->
  <h3 class="text-4xl font-medium tracking-wide">
    Activities
  </h3>

  <!-- Page Tree Links -->
  <div class="items-center justify-start space-x-2 text-gray-500">

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
      <i class="fa-solid fa-house"></i>
    </a>

    <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="activities.php"> Activities
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
          <span class="text-2xl font-medium tracking-wide">Activities Log</span>
        </div>

        <?php 
        $activities = _get("activities","pid=$id ORDER BY id DESC LIMIT 20");
        while($activitie = mysqli_fetch_assoc($activities)){ ?>
        <div class="p-5 activities">
          <div><i> --- <?php echo $activitie['icon'];?> <?php echo $activitie['title'];?></i></div>
          <div><?php $times = $activitie['time'];echo time_elapsed_string($times, true);?></div>          
        </div>
       <?php }?>

      </div>

    </div>
  </div>
</main>


<!-- Header area -->
<?php include "common/footer.php";?>
<!-- Header area -->
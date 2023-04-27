<!-- Header area -->
<?php include "common/header.php";?>
<!-- Header area -->
<!-- Sub Header -->
<div class="container space-y-6 pt-6 pb-12 lg:py-24">

  <!-- Page Name Title -->
  <h3 class="text-4xl font-medium tracking-wide">
    Investor
  </h3>

  <!-- Page Tree Links -->
  <div class="items-center justify-start space-x-2 text-gray-500">

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
      <i class="fa-solid fa-house"></i>
    </a>

    <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="investor.php"> Investor
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

        <div class="px-5 py-4 w-full text-blue-600 text-2xl font-medium tracking-wide border-b">Investor</div>
        <div class="p-6 flex w-full items-start text-left justify-start flex-col gap-y-5">


          <?php
if ($person['investor'] == '') {
    echo $investor_docs['unablable'];
} elseif ($person['investor'] == 'before_submit') {?>
          <h2 class="text-2xl font-medium  text-left w-full tracking-wide">Do you want to Earning with US ? </h2>
          <?php
if (isset($_POST['submit'])) {
    $checkbox = $_POST['checkbox'];
    if (empty($checkbox)) {
        header("location:investor.php?err=Please Fill-up Checkbox");
    } else {
        $update = _update("person", "investor='Submitted'", "id=$id");
        if ($update) {
            header("location:investor.php?msg=Successfully Submitted. Please Wait for Aprove");
        }
    }
}
    ?>
          <form action="" method="POST">
            <div class="reseller_note">
              <?php echo $investor_docs['before_submit'] ?>
            </div>

            <input type="checkbox" name="checkbox" class="checkbox">
            <span style="font-size:20px;font-weight:700">Are Your Agree With This Terms? </span>
            <br>
            <button id="investor_btn" name="submit" type="submit"
              class="mr-auto bg-blue-600 text-white px-6 py-2 rounded focus:ring-2 focus:ring-offset-2 ring-blue-600 shadow">Apply
              Now</button>
          </form>
          <?php } elseif ($person['investor'] == 'Submitted') {
              echo $investor_docs['after_submit'];
          } elseif ($person['investor'] == 'Accepted') {
              echo $investor_docs['accept_submit'];
          } elseif ($person['investor'] == 'Rejected') {
              echo $investor_docs['reject_submit'];
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</main>


<!-- Header area -->
<?php include "common/footer.php";?>
<!-- Header area -->
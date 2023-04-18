<!-- Header area -->
<?php include "common/header.php";?>
<!-- Header area -->

<!-- Sub Header -->
<div class="container space-y-6 pt-6 pb-12 lg:py-24">

  <!-- Page Name Title -->
  <h3 class="text-4xl font-medium tracking-wide">
    Download
  </h3>

  <!-- Page Tree Links -->
  <div class="items-center justify-start space-x-2 text-gray-500">

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
      <i class="fa-solid fa-house"></i>
    </a>

    <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="download.php"> download
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
      <div class="w-full bg-white shadow rounded-sm overflow-hidden">

        <div class="px-5 py-4 text-blue-600 text-2xl font-medium tracking-wide border-b">Dashboard</div>

        <div class="flex flex-col">
          <div class="overflow-x-auto">
            <div class="py-2 inline-block min-w-full">
              <div class="max-w-full overflow-x-auto">
                <table>
                  <thead class="border-b">
                    <tr>
                      <th scope="col" class="text-base font-semibold text-gray-900  px-6 py-4 text-left">Image</th>
                      <th scope="col" class="text-base font-semibold text-gray-900  px-6 py-4 text-left">Title</th>
                      <th scope="col" class="text-base font-semibold text-gray-900  px-6 py-4 text-left">Date</th>
                      <th scope="col" class="text-base font-semibold text-gray-900  px-6 py-4 text-left">Price</th>
                      <th scope="col" class="text-base font-semibold text-gray-900  px-6 py-4 text-left">Download</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$pagination = "ON";
if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
    $page_no = $_GET['page_no'];} else { $page_no = 1;}
$total_records_per_page = 10;
$offset = ($page_no - 1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";
$cart = _get("cart", "pid=$id AND type='product' AND status=1 ORDER BY id DESC LIMIT $offset, $total_records_per_page");
$total_records = mysqli_num_rows(_get("cart", "pid=$id AND type='product' AND status=1"));
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1;

while ($data = mysqli_fetch_assoc($cart)) {
    $cart_id = $data['cart_id'];
    $product = _fetch("products", "id=$cart_id");
    ?>
                    <tr class="border-b">
                      <td class="text-sm text-gray-900 font-light px-6 py-4">
                        <img src="admin/upload/<?php echo $product['file_name1'] ?>">
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4">
                        <div class="break-words w-[320px] overflow-hidden"><a target="_blank"
                            href="item.php?product_id=<?php echo $product['id'] ?>">
                            <div class="w-[200px] truncate hover:text-blue-500">

                              <?php echo $product['title'] ?>
                            </div>

                          </a></div>
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php $time = $data['time'];
    echo date("d-M-y", $time);?></td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">$
                        <?php echo $product['sell_price'] ?></td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><a
                          href="download-security.php?file_id=<?php echo $product['id'] ?>"
                          class="block bg-[#f75389] text-white px-4 py-2 rounded shadow focus:ring-2 ring-[#f75389] ring-offset-1">Download</a>
                      </td>
                    </tr>
                    <?php }?>
                </table>


              </div>
            </div>
          </div>
        </div>

        <?php if (isset($pagination)) {?>
        <style>
        .active>a {
          background: #4ade80 !important;
          color: #fff !important;
        }

        .page_of {
          padding-top: 10px;
        }

        @media only screen and (max-width: 850px) {
          .page_of {
            display: none;
          }
        }
        </style>
        <div class="paginations">
          <ul>
            <?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>

            <li <?php if ($page_no <= 1) {echo "class=''";}?>>
              <a <?php if ($page_no > 1) {echo "href='?page_no=$previous_page'";}?>>

                <i class="fa-solid fa-arrow-left"></i>
              </a>
            </li>

            <?php
if ($total_no_of_pages <= 10) {
    for ($counter = 1; $counter <= $total_no_of_pages; $counter++) {
        if ($counter == $page_no) {
            echo "<li class=''><a>$counter</a></li>";
        } else {
            echo "<li><a href='?page_no=$counter'>$counter</a></li>";
        }
    }
} elseif ($total_no_of_pages > 10) {

    if ($page_no <= 4) {
        for ($counter = 1; $counter < 8; $counter++) {
            if ($counter == $page_no) {
                echo "<li class='active'><a>$counter</a></li>";
            } else {
                echo "<li><a href='?page_no=$counter'>$counter</a></li>";
            }
        }
        echo "<li><a>...</a></li>";
        echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
        echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
    } elseif ($page_no > 4 && $page_no < $total_no_of_pages - 4) {
        echo "<li><a href='?page_no=1'>1</a></li>";
        echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
            if ($counter == $page_no) {
                echo "<li class='active'><a>$counter</a></li>";
            } else {
                echo "<li><a href='?page_no=$counter'>$counter</a></li>";
            }
        }
        echo "<li><a>...</a></li>";
        echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
        echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
    } else {
        echo "<li><a href='?page_no=1'>1</a></li>";
        echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
            if ($counter == $page_no) {
                echo "<li class='active'><a>$counter</a></li>";
            } else {
                echo "<li><a href='?page_no=$counter'>$counter</a></li>";
            }
        }
    }
}
    ?>

            <li <?php if ($page_no >= $total_no_of_pages) {echo "class='disabled'";}?>>
              <a <?php if ($page_no < $total_no_of_pages) {echo "href='?page_no=$next_page'";}?>>
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </a>
            </li>
            <?php if ($page_no < $total_no_of_pages) {
        echo "<li><a href='?page_no=$total_no_of_pages'>Last</a></li>";
    }?>
          </ul>
        </div>
        <?php }?>
        <!-- Paginations -->

      </div>

    </div>
  </div>
</main>


<!-- Footer -->
<footer class="bg-white pt-[74px]">
  <div class="container grid sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-12">

    <div class="space-y-6">
      <img class="w-36" src="assets/images/logo.png" alt="">
      <div class="flex space-x-5">
        <a href="https://www.facebook.com/tentheme"
          class="bg-blue-600 text-white px-4 py-1 rounded shadow-sm">
          <i class="fa-brands fa-facebook"></i>
          <small>Facebook</small>
        </a>
        <a href="https://www.facebook.com/tentheme"
          class="bg-red-600 text-white px-4 py-1 rounded shadow-sm">
          <i class="fa-brands fa-youtube"></i>
          <small>Youtube</small>
        </a>
      </div>
    </div>

    <div>
      <p>tentheme  Software is the biggest Software Company In Bangladesh. We provide any Desktop & Android
        Software.
        We Provide 100 Percent Customer Satisfaction Copyright © by SHAMIMLEM.</p>
    </div>

    <div class="2xl:pl-20">
      <ul class="w-fit 2xl:mx-auto space-y-4">
        <li class="space-x-2 text-sm font-medium hover:text-gray-600">
          <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
          <a href="dmca.php">DMCA</a>
        </li>

        <li class="space-x-2 text-sm font-medium hover:text-gray-600">
          <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
          <a href="contact.php">Contact US</a>
        </li>
        <li class="space-x-2 text-sm font-medium hover:text-gray-600">
          <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
          <a href="cookies-policy.php">Cookies Policy</a>
        </li>
        <li class="space-x-2 text-sm font-medium hover:text-gray-600">
          <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
          <a href="privacy-policy.php">Privacy Policy</a>
        </li>

      </ul>
    </div>

    <div class="2xl:pl-20">
      <ul class="w-fit 2xl:mx-auto space-y-4">
        <li class="space-x-2 text-sm font-medium hover:text-gray-600">
          <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
          <a href="investor.php">Join Investor</a>
        </li>


        <li class="space-x-2 text-sm font-medium hover:text-gray-600">
          <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
          <a href="reseller.php">Join Reseller</a>
        </li>

        <li class="space-x-2 text-sm font-medium hover:text-gray-600">
          <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
          <a href="mailto:shamimlem@yahoo.com">shamimlem@yahoo.com</a>
        </li>

        <li class="space-x-2 text-sm font-medium hover:text-gray-600">
          <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
          <a href="tel:+08801719182586">+08801719182586</a>
        </li>

      </ul>
    </div>
  </div>


  <div class="container flex flex-col xl:flex-row w-full justify-between items-center gap-y-4 xl:gap-y-0 py-12">
    <ul class="flex items-center justify-start w-full xl:w-[400px] gap-x-4 flex-wrap">
      <li> <a href="index.php" class="hover:text-blue-600 hover:underline">Products</a> </li>
      <li> <a href="services.php" class="hover:text-blue-600 hover:underline">Services</a> </li>
      <li> <a href="investor.php" class="hover:text-blue-600 hover:underline">Investor</a> </li>
      <li> <a href="reseller.php" class="hover:text-blue-600 hover:underline">Reseller</a> </li>
    </ul>

    <p class="w-full xl:text-right">
      <span class="text-gray-700 text-base"> All Rights Reserved © tentheme  Software 2022 <span>SHAMIMLEM.</span>
    </p>
  </div>

</footer>
<!-- Footer -->


<script src="assets/js/app.js"></script>
</body>

</html>
<!-- Header area -->
<?php include "common/header.php";?>
<!-- Header area -->
<?php
if (isset($_GET['cart_id'])) {
    $cart_id = $_GET['cart_id'];
    $tickets = _fetch("tickets", "item_id=$cart_id");
    $ticket_id = $tickets['ticket_id'];
    
    header("location:chat.php?ticket_id=$ticket_id");
}
?>
<!-- Sub Header -->
<div class="container space-y-6 pt-6 pb-12 lg:py-24">
  <!-- Page Name Title -->
  <h3 class="text-4xl font-medium tracking-wide">
    Order
  </h3>

  <!-- Page Tree Links -->
  <div class="items-center justify-start space-x-2 text-gray-500">

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
      <i class="fa-solid fa-house"></i>
    </a>

    <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="contact.php"> order
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
      <div class="w-full overflow-hidden bg-white shadow rounded-sm">

        <div class="px-5 py-4 text-blue-600 text-2xl font-medium tracking-wide border-b">Orders</div>


        <div class="flex flex-col">
          <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
              <div class="overflow-hidden">
                <table class="min-w-full">
                  <thead class="border-b">
                    <tr>
                      <th scope="" class="text-base font-semibold text-gray-900  px-6 py-4 text-left">
                        Image
                      </th>
                      <th scope="col" class="text-base font-semibold text-gray-900  px-6 py-4 text-left">
                        Service Name
                      </th>
                      <th scope="col" class="text-base font-semibold text-gray-900  px-6 py-4 text-left">
                        Date
                      </th>
                      <th scope="col" class="text-base font-semibold text-gray-900  px-6 py-4 text-left">
                        Total
                      </th>
                      <th scope="col" class="text-base font-semibold text-gray-900  px-6 py-4 text-left">
                        Actions
                      </th>
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
                      $cart = _get("cart", "pid=$id AND type='service' AND status=2 ORDER BY id DESC LIMIT $offset, $total_records_per_page");
                      $total_records = mysqli_num_rows(_get("cart", "pid=$id AND type='service' AND status=2"));
                      $total_no_of_pages = ceil($total_records / $total_records_per_page);
                      $second_last = $total_no_of_pages - 1;

                      while ($data = mysqli_fetch_assoc($cart)) {
                        $cart_id = $data['cart_id'];
                        $service = _fetch("service", "id=$cart_id");
                      ?>
                    <tr class="border-b">
                      
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#f75389]">                        
                        <img src="https://cdn.tailgrids.com/1.0/assets/images/services/image-1.jpg" alt="image"
                          style="width: 80px;height:40px;object-fit:cover"/>
                      </td>

                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#f75389]">
                        <div class="w-[200px] truncate hover:text-blue-500">
                        <a href="service.php?service_id=<?php echo $data['cart_id']; ?>">
                          <?php echo $service['title']; ?>
                        </a>
                        </div>
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <?php $service_time = $data['time'];echo date("d-M-y", $service_time);?>
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        $ <?php echo $service['sell_price'] ?>
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">

                        <div class="flex itmes-center justify-start gap-x-1">
                          <a class="block text-sm font-semibold tracking-wide text-[#f75389]" href="service.php?service_id=<?php echo $data['cart_id'] ?>">View</a>
                          <span>|</span>
                          <a class="block text-sm font-semibold tracking-wide text-[#f75389]"
                            href="?cart_id=<?php echo $data['cart_id'] ?>">Chat</a>
                        </div>
                      </td>
                    </tr>
                    <?php }?>
                </table>
                <br>

                <!-- Paginations -->
                <?php if (isset($pagination)) {?>
                <style>
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

                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
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
        </div>

      </div>

    </div>
  </div>
</main>

<!-- Header area -->
<?php include "common/footer.php";?>
<!-- Header area -->

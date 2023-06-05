<!-- Header area -->
<?php include "common/header.php";?>
<!-- Header area -->
<?php 
  if(isset($_GET['order_id'])){
  $order_id = $_GET['order_id'];
  }
  ?>
<!-- Sub Header -->
<div class="container space-y-6 pt-6 pb-12 lg:py-24">

  <!-- Page Name Title -->
  <h3 class="text-4xl font-medium tracking-wide">
    Order View
  </h3>

  <!-- Page Tree Links -->
  <div class="items-center justify-start space-x-2 text-gray-500">

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
      <i class="fa-solid fa-house"></i>
    </a>

    <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="my-orders.php">Order View
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

        <div class="px-5 py-4 text-blue-600 text-2xl font-medium tracking-wide border-b">Order: #<?php echo $order_id;?></div>

        <div class="flex flex-col">
          <div class="overflow-x-auto">
            <div class="py-2 inline-block min-w-full">
              <div class="max-w-full overflow-x-auto">
                <table>
                  <thead class="border-b">
                    <tr>
                      <th scope="col" class="text-base font-semibold text-gray-900  px-6 py-4 text-left">Thumbnail</th>
                      <th scope="col" class="text-base font-semibold text-gray-900  px-6 py-4 text-left">Title</th>
                      <th scope="col" class="text-base font-semibold text-gray-900  px-6 py-4 text-left">Type</th>
                      <th scope="col" class="text-base font-semibold text-gray-900  px-6 py-4 text-left">Price</th>
                      <th scope="col" class="text-base font-semibold text-gray-900  px-6 py-4 text-left">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $cart = _get("cart","order_id=$order_id");                   
                    while($data = mysqli_fetch_assoc($cart)){
                      $type = $data['type'];
                      $cart_id = $data['cart_id'];
                      if($type == 'product'){
                        $item = _fetch("products","id=$cart_id");
                      }else{
                        $item = _fetch("service","id=$cart_id");
                      }
                    ?>
                    <tr class="border-b">
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      <img src="admin/upload/<?php echo $item['file_name']?>" alt="<?php echo $item['file_name']?>">
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4">
                        <div class="break-words w-[320px] overflow-hidden"><a target="_blank"
                            href="item.php?product_id=<?php echo $data2['id'] ?>">
                            <div class="w-[200px] truncate hover:text-blue-500">
                              <?php echo $item['title'] ?>
                            </div>
                          </a>
                        </div>
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php
                        echo strtoupper($data['type']);?></td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">$
                        <?php echo $item['sell_price'] ?></td>
                        <?php 
                        if($type == 'product'){ ?>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><a
                          target="" href="item.php?product_id=<?php echo $item['id'] ?>"
                          class="block bg-[#f75389] text-white px-4 py-2 rounded shadow focus:ring-2 ring-[#f75389] ring-offset-1">View</a>
                        </td>
                       <?php }else{?>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><a
                          target="" href="service.php?service_id=<?php echo $item['id'] ?>"
                          class="block bg-[#f75389] text-white px-4 py-2 rounded shadow focus:ring-2 ring-[#f75389] ring-offset-1">View</a>
                        </td>
                       <?php }?>
                      
                    </tr>
                    <?php }?>
                </table>


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
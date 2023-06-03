<?php include "common/header-sidebar.php"?>

<?php

if(isset($_GET['id'])){
 $id = $_GET['id'];
 $order = _fetch("orders","id=$id");
 $order_id = $order['order_id'];
}


if (isset($_POST['submit'])) {
    $status = $_POST['status'];

    if($status == 'Success'){

    if($order['type'] == "product"){
        $item = "products";
    }else{
        $item = "service";
    }
    
    $cart = _get("cart","order_id=$order_id");
    while($items = mysqli_fetch_assoc($cart)){
        $cart_id = $items['cart_id'];
        $update_item = _update("$item","sell = sell+1","id=$cart_id");
    }

    $update_cart = _update("cart","status=2","order_id=$order_id");
    $update_order = _update("orders","status='Success',notify='Old'","order_id=$order_id");
    }else {
      $err = "Something is wrong!";
      header("Location:add-product.php?err=$err");
    }
  }

?>
<div class="x_container space-y-10 py-10">
  <form action="" method="POST" enctype="multipart/form-data">

    <div class="pb-6">
      <h2 class="text-xl font-semibold text-cyan-800">Edit Order</h2>
    </div>

    <div class="grid grid-cols-3 gap-8">


      <div class="col-span-2 space-y-6">

        <div class="flex flex-col gap-y-1">
        <table class="min-w-full divide-y divide-gray-200 table-fixed">
              <thead class="bg-white">
                <tr>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Image</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Type</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Title</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Price</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <?php
                    $order = _fetch("orders","id=$id");
                    $order_id = $order['order_id'];
                    $type =  $order['type'];
                    $carts = _get("cart", "order_id=$order_id");
                  $total_price = 0;
                  while ($data = mysqli_fetch_assoc($carts)) {
                    $cart_id = $data['cart_id'];
                    if($type == 'product'){
                        $item = _fetch("products","id=$cart_id");
                    }else{
                        $item = _fetch("service","id=$cart_id");
                    }
                    $total_price +=  $item['sell_price'];
                ?>
                <tr class="hover:bg-gray-100">
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <img style="width: 70px;" src="upload/<?php echo $item['file_name']?>" alt="">
                  </td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo $data['type']; ?>
                  </td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo sort_str($item['title'],2)."...";?>
                  </td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    $<?php echo $item['sell_price'] ?>
                  </td>
                </tr>
                <?php }?>

                <tr class="hover:bg-gray-100">
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                  </td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                  </td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                  </td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                   /= $<?php echo $total_price ?>
                  </td>
                </tr>

              </tbody>
            </table>
        </div>
      </div>

      <div class="space-y-6 bg-white shadow-xl p-6 rounded-sm">

        <div class="flex flex-col gap-y-1">
          <label for="regular_price Coin">Payment Type</label>
          <input disabled name="regular_price" class="input" type="text" id="Regular Price" value="<?php echo  $order['pmn_type']?>"
          required >
        </div>

        <?php if($order['pmn_type'] == "manual"){?>
        <div class="flex flex-col gap-y-1">
          <label for="regular_price Coin">Payment Method</label>
          <input disabled name="regular_price" class="input" type="text" id="Regular Price" value="<?php echo  $order['pmn_method']?>"
          required >
        </div>
        <div class="flex flex-col gap-y-1">
          <label for="regular_price Coin">Payment Address</label>
          <input disabled name="regular_price" class="input" type="text" id="Regular Price" value="<?php echo  $order['pmn_address']?>"
          required >
        </div>
        <div class="flex flex-col gap-y-1">
          <label for="regular_price Coin">Transection Id</label>
          <input disabled name="regular_price" class="input" type="text" id="Regular Price" value="<?php echo  $order['pmn_transection']?>"
          required >
        </div>

        <div class="flex flex-col gap-y-1">
          <label for="regular_price Coin">Payment Amount</label>
          <input disabled name="regular_price" class="input" type="text" id="Regular Price" value="$<?php echo  $order['pmn_amount']?>"
          required >
        </div>    
        <?php }?>
        
        <div>
            <label for="status">Status</label>
            <select name="status" class="input">
              <?php if($order['status'] == 'Pending'){ ?>
                <option selected value="Pending">Pending</option>
                <option value="Success">Success</option>
               <?php }else{ ?>
                <option selected value="Success">Success</option>
                <option value="Pending">Pending</option>
                <?php } ?>
            </select>
        </div>

        <br>
        <div class="col-span-2 flex justify-start">
          <div class="w-fit">
            <button name="submit" type="submit" class="button">Submit</button>
          </div>
        </div>
      </div>


    </div>


  </form>
</div>
</div>
</main>

<script>
$('.summernote').summernote({
  placeholder: 'Write Something About Product',
  tabsize: 2,
  height: 100,
  toolbar: [
    ['style', ['style']],
    ['font', ['bold', 'underline', 'clear']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['table', ['table']],
    ['insert', ['link', 'picture', 'video']],
    ['view', ['fullscreen', 'codeview', 'help']]
  ]
});
</script>
<script src="js/app.js"></script>
</body>

</html>
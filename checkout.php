<!-- Header area -->
<?php include "common/header.php";?>
<!-- Header area -->
<?php

if ($person['reseller'] = 'Accepted') {
    $reseller_discount = $reseller_docs['discount'];
}

// if ($id < 1) {
//     $err = "Please Login First";
//     header("location:index.php?err=$err");
//     exit;
// }
?>
<!-- Sub Header -->
<div class="container space-y-6 py-24">

  <!-- Item Title -->
  <h3 class="text-4xl font-medium tracking-wide">Checkout</h3>

  <!-- Page Tree Links -->
  <div class="items-center justify-start space-x-2 text-gray-500">

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
      <i class="fa-solid fa-house"></i>
    </a>
    <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="checkout.php"> checkout
    </a>
  </div>

</div>
</header>

<div class="bg-gray-50 w-full py-12">
  <div class="container flex items-start flex-col lg:flex-row justify-between gap-8">

    <div class="w-full space-y-6">
      <div class="p-5 bg-white rounded shadow space-y-6">
        <h2 class="text-2xl font-medium tracking-wide">Billing details</h2>

        <div class="p-6 space-y-6">
          <div class="flex flex-col gap-1">
            <label for="Email">Email</label>
            <input id="Email" type="email" placeholder="Email"
              class="p-2.5 rounded border focus:ring-2 focus:ring-blue-600 outline-none">
          </div>

          <div class="flex flex-col gap-1">
            <label for="Password">Password</label>
            <input id="Password" type="password" placeholder="Password"
              class="p-2.5 rounded border focus:ring-2 focus:ring-blue-600 outline-none">
          </div>


          <div class="flex flex-col gap-1">
            <label for="name">Name</label>
            <input id="name" type="text" placeholder="Name"
              class="p-2.5 rounded border focus:ring-2 focus:ring-blue-600 outline-none">
          </div>
          <div class="flex flex-col gap-1">
            <label for="Address">Address</label>
            <input id="Address" type="text" placeholder="Address"
              class="p-2.5 rounded border focus:ring-2 focus:ring-blue-600 outline-none">
          </div>
        </div>

        <div class="w-full">
          <?php
$cart = _get("cart", "pid=$id AND type='product' AND status=0");
$total_price = 0;
while ($data = mysqli_fetch_assoc($cart)) {
    $cart_id = $data['cart_id'];
    $product = _fetch("products", "id=$cart_id");

    $sell_price = $product['sell_price'];
    $product['sell_price'] = $sell_price - ($sell_price * $sell_discount) / 100;
    $total_price += $product['sell_price'];
    ?>
          <div class="flex items-center justify-between gap-x-8 px-5 py-10 border-t relative">
            <a href="?cart=<?php echo $data['id']; ?>" class="text-gray-500 absolute w-fit h-fit top-2 right-2 text-xl">
              <i class="fa-solid fa-times"></i>
            </a>
            <a target="_blank" href="item.php?product_id=<?php echo $product['id']; ?>"><img
                style="width:150px;border-radius:5px" src="admin/upload/<?php echo $product['file_name']; ?>"
                alt=""></a>
            <div class="space-y-2">
              <a target="_blank" href="item.php?product_id=<?php echo $product['id']; ?>"
                class="text-xl tracking-wide font-semibold text-blue-500">
                <?php echo $product['title']; ?>
              </a>
              <div class="flex gap-x-6 text-gray-600">
                <p>
                  <b>License:</b>
                  <span> Regular License </span>
                </p>
                <p>
                  <b>Support:</b>
                  <span> 6 months support </span>
                </p>
              </div>
            </div>

            <h3 class="flex items-start gap-x-0.5">
              <span>$</span>
              <span class="text-4xl font-semibold"><?php echo $product['sell_price']; ?></span>
            </h3>
          </div>
          <?php }?>
        </div>


      </div>

      <!-- Payment Method -->
      <div class="bg-white rounded shadow">
        <h3 class="p-4 text-lg font-medium text-gray-900">Select Payment Method</h3>
        <div class="flex justify-between">

          <butto data-target="card" class="select_pay_btn w-full p-4 flex justify-center items-center cursor-pointer"
            style="border:1px solid #e1e8ed; border-right:none; border-left:none; background:#ffffff;border-bottom:none;">
            <img class="w-12" src="./assets/images/visa.svg" alt="">
            <img class="w-12" src="./assets/images/mastercard.svg" alt="">
          </butto n>
          <button data-target="paypal" class="select_pay_btn w-full p-4 flex justify-center items-center cursor-pointer"
            style="border:1px solid #e1e8ed;background:#fafafa;border-right:none;">
            <img class="w-28" src="./assets/images/paypal.svg" alt="">
          </button>


        </div>
        <br>
        <div>
          <div class="pay_with_car">
            <div class="p-5 md:w-96 space-y-5">
              <div class="flex flex-col gap-1">
                <label for="card_number" class="text-sm font-medium">Card Number</label>
                <input id="card_number" type="number" class="px-2 py-1 border outline-none">
              </div>

              <div class="flex items-center justify-between">
                <div class="flex flex-col gap-1">
                  <label class="text-sm font-medium">Expiry Date</label>
                  <div class="flex gap-x-2 items-center">
                    <input type="number" class="w-20 px-2 py-1 border outline-none">
                    /
                    <input type="number" class="w-20 px-2 py-1 border outline-none">
                  </div>
                </div>

                <div class="flex flex-col gap-1">
                  <label class="text-sm font-medium">CVV</label>
                  <input type="number" class="w-28 px-2 py-1 border outline-none">
                </div>
              </div>

              <label for="save_card" class="flex items-center gap-x-2 mt-2">
                <input type="checkbox" id="save_card">
                Save card for next time
              </label>
            </div>

            <div class="p-5 flex justify-end gap-8 border-t">
              <b>Total:</b>
              <p class="text-xl">$890</p>
            </div>
            <div class="bg-gray-200 p-4 flex justify-end">
              <button class="px-4 py-2 rounded bg-green-600 text-white focus:ring-2">Pay Securely</button>
            </div>

          </div>
        </div>


      </div>
      <!-- Payment Method -->

    </div>

    <div class="w-full lg:min-w-[450px] lg:w-[450px]">
      <div class="border p-5">
        <h2 class="text-2xl text-center font-semibold text-gray-700 pb-4 border-b">Your Balance: <b
            style="color:#000;">$<?php echo $person['balance'] ?></b></h2>
        <div class="py-5 space-y-4">

          <?php
          $cart = _get("cart", "pid=$id AND type='product' AND status=0");
          $total_price = 0;
          while ($data = mysqli_fetch_assoc($cart)) {
          $cart_id = $data['cart_id'];
          $product = _fetch("products", "id=$cart_id");

          $sell_price = $product['sell_price'];
          $product['sell_price'] = $sell_price - ($sell_price * $sell_discount) / 100;
          $total_price += $product['sell_price'];
          ?>
          <div class="text-lg font-medium tracking-wide text-gray-500 justify-between flex items-center">
            <span class="w-8/12 truncate overflow-hidden"><?php echo $product['title']; ?></span>
            <span class="w-fit">$<?php echo $product['sell_price']; ?></span>
          </div>
          <?php }?>

        </div>

        <div class="text-2xl font-semibold text-gray-700 items-center justify-between flex pt-5 border-t">
          <span>Total:</span>
          <span>USD <?php echo $total_price; ?></span>
        </div>
      </div>

      <?php
        if (isset($_POST['submit'])) {
        $total_amount = $_POST['total_amount'];
        $old_balance = $person['balance'];
        if ($old_balance > $total_amount) {

        $icon = '<i class="fa-solid fa-box"></i>';
        $title = 'Successfully Purchase a new products';
        $activitie = _insert("activities","pid,icon,title,time","'$id','$icon','$title','$time'");

        $balance = _update("person", "balance=balance-$total_amount", "id=$id");
        $carts = _get("cart", "status=0", "pid=$id");
        while ($cart = mysqli_fetch_assoc($carts)) {
            $product_id = $cart['cart_id'];
            $update_product = _update("products", "sell=sell+1", "id=$product_id");
            $total_order = _update("person", "total_order=total_order+1", "id=$id");

            if ($person['investor_order'] > 0) {
                $investor_order = _update("person", "investor_order=investor_order-1", "id=$id");
            }
        }
        $update_cart = _update("cart", "status=1", "pid=$id AND type='product'");
        if ($update_cart && $balance) {
            $msg = "Congratulations for Purchase.";
            header("location:dashboard.php?msg=$msg");
        }} else {
            $err = "Please Deposit First";
            header("location:checkout.php?err=$err");
        }
    }
    ?>
      <form action="" method="POST">
        <input type="hidden" name="total_amount" value="<?php echo $total_price; ?>">
        <button type="submit" name="submit"
          class="w-full py-3 shadow-lg rounded bg-blue-600 text-white focus:ring-2 ring-blue-600 ring-offset-1">Pay
          Now</button>
      </form>


      <div class="py-5 text-center flex items-center gap-x-2 justify-center text-gray-500">
        <i class="fa-solid fa-lock"></i>
        <p>Secure checkout</p>
      </div>
    </div>
  </div>
</div>


<!-- Header area -->
<?php include "common/footer.php";?>
<!-- Header area -->
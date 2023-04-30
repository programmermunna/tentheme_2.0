<!-- Header area -->
<?php include "common/header.php";?>
<!-- Header area -->
</header>

<main style="min-height: calc(100vh - 80px)">
  <div class="flex items-start">
    <div class="container flex flex-col lg:flex-row gap-y-5 py-6 xl:py-12 lg:gap-y-0 lg:gap-x-6 sm:items-start">
      <!-- Body Content -->
      <div class="w-full">
        <div class="btn">
          <h2>Releted Products</h2>
        </div>
        <div class="items list_view">

          <?php
if (isset($_GET['src'])) {
    $src = $_GET['src'];
    $products = _query("SELECT products.*,person.* FROM products INNER JOIN person ON products.pid=person.id WHERE products.status='Publish' AND (person.name='$src' OR products.title LIKE '%$src%' OR category LIKE '%$src%' OR sell_price LIKE '%$src%')");

while ($data = mysqli_fetch_assoc($products)) {
    $investor_discount = $investor_docs['discount'];
    $sell_price = $data['sell_price'];
    $data['sell_price'] = $sell_price - ($sell_price * $sell_discount) / 100;

    $author_id = $data['pid'];
    $author = _fetch("person", "id=$author_id");
    ?>
          <div class="item">
            <a href="item.php?product_id=<?php echo $data['id'] ?>" class="item_link"></a>
            <div>
              <img class="w-full h-auto rounded" src="admin/upload/<?php echo $data['file_name1'] ?>" />
            </div>

            <div>
              <h3 style="padding-left:13px"><?php echo $data['title'] ?></h3>
              <p style="padding-left:13px"><small> <i>by</i> <a
                    href="index.php?author=<?php echo $author['name'] ?>"><?php echo $author['name'] ?></a></small></p>
              <ul class="list_icon">
                <?php echo $data['mini_content'] ?>
              </ul>
            </div>

            <div>
              <div></div>

              <div>
                <div>
                  <span class="font-medium">USD</span>
                  <span><?php echo $data['sell_price'] ?>$</span>
                </div>
                <p><?php echo $data['sell'] ?> Sales</p>

                <?php if ($review_product == 'checked') {?>
                <div>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <div style="width:70%">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
                <?php }?>

              </div>

              <div>
                <a id="show_added_popup" href="?cart=<?php echo $data['id'] ?>"><i
                    class="fa-solid fa-cart-shopping cart_btn"></i></a>
                <a target="_blank" href="<?php echo $data['link'] ?>"><span>Live</span><span>Preview</span>
                </a>
              </div>
            </div>

          </div>
          <?php }}?>

        </div>

      </div>

      <div class="w-full">
      <div class="btn">
          <h2>Releted Services</h2>
        </div>
        <?php
if (isset($_GET['src'])) {
    $src = $_GET['src'];
    $service = _query("SELECT service.*,person.* FROM service INNER JOIN person ON service.pid=person.id WHERE service.status='Publish' AND (person.name='$src' OR service.title LIKE '%$src%' OR category LIKE '%$src%' OR sell_price LIKE '%$src%')");

while ($data = mysqli_fetch_assoc($service)) {
    $author_id = $data['pid'];
    $author = _fetch("person", "id=$author_id");
    ?>
        <div class="grid grid-cols-12 gap-x-6 mb-5 p-6 bg-white item_shadow">
          <div class="col-span-5">
            <div>
              <a href="service.php?service_id=<?php echo $data['id'] ?>">
                <img style="height:150px;" class="rounded" src="admin/upload/<?php echo $data['file_name1'] ?>">
              </a>
            </div>
          </div>

          <div class="col-span-7 w-full">
            <div class="flex flex-col gap-y-2">
              <a href="service.php?service_id=<?php echo $data['id'] ?>">
                <h3 class="text-xl font-semibold tracking-wide mb-2"><?php echo $data['title'] ?></h3>
              </a>
              <div class="w-full flex gap-x-6">
                <ul class="list_icon space-y-2 pl-2 text-gray-700 w-[420px]">
                  <a href="service.php?service_id=<?php echo $data['id'] ?>">
                    <?php echo $data['mini_content'] ?>
                  </a>
                </ul>
                <div class="w-full flex border-l flex-col items-center justify-between">
                  <div></div>
                  <div class="flex flex-col items-center justify-center">
                    <h3 class="text-semibold text-xl font-semibold tracking-wide"> USD <?php echo $data['sell_price'] ?>$
                    </h3>
                    <p><?php echo $data['sell'] ?> Sales</p>
                  </div>
                  <a href="service.php?service_id=<?php echo $data['id'] ?>"
                    class="w-fit px-6 border shadow-sm py-2 border-cyan-700 hover:bg-cyan-900 rounded hover:text-white text-cyan-900 text-sm focus:ring-2 focus:border-transparent flex items-center gap-x-2">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>Buy Now</span>
                  </a>
                </div>
              </div>
            </div>

          </div>

        </div>
        <?php }}?>



      </div>
    </div>
  </div>
</main>

<!-- Header area -->
<?php include "common/footer.php";?>
<!-- Header area -->
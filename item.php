<!-- Header area -->
<?php include "common/header.php";?>
<!-- Header area -->
<?php
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $data = _fetch("products", "id=$product_id");
}
if (isset($_GET['cart'])) {
    if ($id < 1) {
        $err = "Please Login or SignIn First";
        header("location:item.php?product_id=$product_id&&err=$err");
    } else {
        $cart_id = $_GET['cart'];
        $check = _fetch("cart", "pid=$id AND type='product' AND cart_id=$cart_id AND status=0");
        if ($check) {
            $err = "Already Added. Please Add New.";
            header("location:cart.php?err=$err");
        } else {
            $insert = _insert("cart", "pid,cart_id,type,time", "$id,$cart_id,'product',$time");
            if ($insert) {
                $msg = "Successfully Added in Cart. Please Checkout";
                header("location:cart.php?msg=$msg");
            }
        }
    }
}
?>












<!-- Sub Header -->
<div class="container space-y-6 pt-12">
  <!-- Page name Title -->
  <h3 class="text-4xl font-medium tracking-wide"><?php echo $data['title'] ?></h3>

  <!-- Page Tree Links -->
  <div class="items-center justify-start space-x-2 text-gray-500">

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
      <i class="fa-solid fa-house"></i>
    </a>

    <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
      class="text-white px-4 py-1.5 rounded shadow-sm" href="item.php"><?php echo $data['title'] ?></a>

  </div>
  <br>
  <!-- Basic Info -->
  <div class="flex items-center flex-wrap gap-x-6 gap-y-3 text-xs sm:text-base mt-12 ">
    <p class="text-gray-500 flex items-center gap-x-1">
      <i class="fa-solid fa-cart-shopping"></i>
      <span><?php echo $data['sell'] ?> sales</span>
    </p>
    <p class="text-green-600 flex items-center gap-x-1">
      <span>Recently Updated</span>
      <i class="fa-solid fa-circle-check"></i>
    </p>
    <p class="text-green-600 flex items-center gap-x-1">
      <span>Well Documented</span>
      <i class="fa-solid fa-circle-check"></i>
    </p>
  </div>

  <!-- Reviews&Comments -->
  <div class="flex items-center justify-start pt-6 overflow-auto" style="margin-bottom:-2px;">

    <a href="#" data-item="item_details" class="item_content_toggler active flex items-center gap-x-1 px-6 py-3">
      <span class="font-normal tracking-wide">Item</span>
      <span class="font-normal tracking-wide">Details</span>
    </a>

    <?php if ($review_product == "checked") {?>
    <a href="#" data-item="item_reviews" class="item_content_toggler flex items-center gap-x-2 px-6 py-3">
      <span class="font-normal tracking-wide">Reviews</span>
      <p class="relative text-sm h-fit w-fit flex items-center justify-center text-gray-200">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <span style="width:88%" class="absolute text-sm left-0 inset-y-0 my-auto flex overflow-hidden text-yellow-500">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </span>
      </p>
      <span>4.3</span>
      <span class="px-2 text-xs py-1 rounded bg-cyan-700 text-white shadow block"><?php echo $data['review'] ?></span>
    </a>
    <?php }?>

    <a href="#" data-item="item_comments" class="item_content_toggler flex items-center gap-x-2 px-6 py-3">
      <span class="font-normal tracking-wide">Comments</span>
      <span class="px-2 text-xs py-1 rounded bg-cyan-700 text-white shadow block"><?php echo $data['comment'] ?></span>
    </a>

  </div>
</div>
</header>

<main class="min-h-screen bg-[#f5f7f7]">
  <div class="flex items-start">
    <div class="container flex flex-col lg:flex-row gap-y-6 lg:gap-y-0 gap-x-12 relative">

      <!-- Theme Content -->
      <div class="w-full pt-16">
        <!-- Item Details -->
        <div data-item="item_details" class="item_content w-full space-y-6">


          <!-- Theme Thumbnail -->
          <div style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
            rgba(0, 0, 0, 0.06) 0px 0px 0px 1px !important;" class="border rounded overflow-hidden">

            <!-- Thumbnail Slider -->
            <div class="slides">
             <div class="slider">
              
             <?php if($data['video_preview_link'] != ""){ ?>
              <div class="slide">
                <iframe width="100%" height="100%" src="<?php echo $data['video_preview_link'] ?>"></iframe>
              </div>
              <?php }?>

              <div class="slide">
                <a data-fancybox="gallery" data-caption="Photo1" href="admin/upload/<?php echo $data['file_name'] ?>">
                  <img src="admin/upload/<?php echo $data['file_name'] ?>" alt="Image" />
                </a>
              </div>   

              <?php 
              $item_id = $data['item_id'];
              $images = _get("screenshots","item_id=$item_id");
              while($image = mysqli_fetch_assoc($images)){ ?>
              <div class="slide">
                <a data-fancybox="gallery" data-caption="Photo" href="admin/upload/<?php echo $data['file_name'] ?>">
                  <img src="admin/upload/<?php echo $image['title'];?>" alt="Photo" />
                </a>
              </div>
              <?php }?>

              <button class="btn-slide prev"><i class="fas fa-3x fa-chevron-circle-left"></i></button>
              <button class="btn-slide next"><i class="fas fa-3x fa-chevron-circle-right"></i></button>
            </div>
            
            <div class="dots-container">
              <span class="dot active" data-slide="0"></span>
              <span class="dot" data-slide="1"></span>
              <?php 
              $item_id = $data['item_id'];
              $images_count = mysqli_num_rows(_get("screenshots","item_id=$item_id"));
              for($i = 2;$i<=$images_count;$i++){ ?>
              <span class="dot" data-slide="<?php echo $i;?>"></span>
              <?php }?>
              <?php if($data['video_preview_link'] != ""){ ?>
              <span class="dot" data-slide="<?php echo $images_count+1;?>"></span>
              <?php } ?>

            </div>            
            </div>
            <!---Thumbnail Slider -->

            

            <div class="pt-4 pb-6 gap-3 flex-wrap flex justify-center">
              <a target="_blank" href="<?php echo $data['theme_preview_link'] ?>"
                class="px-3 py-2 rounded bg-blue-500 hover:bg-blue-600 focus:ring-2 ring-blue-500 focus:ring-offset-2 w-fit text-white tracking-wide space-x-1 flex items-center gap-x-1 ">
                <i class="fa-regular fa-eye"></i>
                <span>Live Preview</span>
              </a>

              <!-- <a target="_blank"
                class="px-3 py-2 rounded bg-purple-500 hover:bg-purple-600 focus:ring-2 ring-blue-500 focus:ring-offset-2 w-fit  text-white tracking-wide space-x-1 flex items-center gap-x-1 ">
                <i class="fa-regular fa-circle-play"></i>
                <span class="popup-btn">Video Preview</span>
              </a>

              <button id="slid_button"
                class="px-3 py-2 rounded bg-pink-500 hover:bg-pink-600 focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 w-fit text-white tracking-wide space-x-1 flex items-center gap-x-1 ">
                <i class="fa-solid fa-image"></i>
                <span>Screenshots</span>
              </button> -->

              <a target="_blank" href="#"
                class="px-3 py-2 rounded bg-gray-700 hover:bg-gray-600 focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 w-fit text-white tracking-wide space-x-1 flex items-center gap-x-1 "><i
                  class="fa-solid fa-book"></i>
                <span>Documentation</span>
              </a>

            </div>
          </div>



          <!-- Others Theme Content -->
          <div><?php echo $data['description'] ?></div>
        </div>

        <!-- Item Reviews -->
        <?php if ($review_product == 'checked') {?>
        <div data-item="item_reviews" class="item_content">
          <div class="flex justify-between items-center">
            <h3 class="flex items-center gap-x-3 text-xl font-medium"> <span><?php echo $data['review'] ?>
                Reviews</span>
              <p class="relative text-sm h-fit w-fit flex items-center justify-center text-gray-200">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span style="width:88%"
                  class="absolute text-sm left-0 inset-y-0 my-auto flex overflow-hidden text-yellow-500">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </span>
              </p>
            </h3>
          </div>

          <div class="pt-6 space-y-4">
            <!-- review -->
            <div class="rounded border overflow-hidden">
              <div class="flex items-center justify-between bg-gray-100 p-4">
                <p class="relative text-sm h-fit w-fit flex items-center justify-center text-gray-200">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <span style="width:100%"
                    class="absolute text-sm left-0 inset-y-0 my-auto flex overflow-hidden text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </span>
                </p>

                <p> by <a href="#" class="hover:underline text-blue-800">stacksagar</a> 1 month ago </p>
              </div>
              <p class="p-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae fugiat consequuntur
                natus? Molestiae</p>
            </div>

            <!-- review -->
            <div class="rounded border overflow-hidden">
              <div class="flex items-center justify-between bg-gray-100 p-4">
                <p class="relative text-sm h-fit w-fit flex items-center justify-center text-gray-200">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <span style="width:80%"
                    class="absolute text-sm left-0 inset-y-0 my-auto flex overflow-hidden text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </span>
                </p>

                <p> by <a href="#" class="hover:underline text-blue-800">munna</a> 10 days ago </p>
              </div>
              <p class="p-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae fugiat consequuntur
                natus? Molestiae
                quos assumenda totam non magnam alias odio illo perspiciatis, soluta maxime hic accusantium, optio
                vitae. Quasi, voluptates!</p>
            </div>

            <!-- Write Review Box -->
            <div class="p-5 space-y-3 border bg-white shadow rounded">
              <div class="flex items-center">
                <img class="w-12 h-12 rounded-full overflow-hidden" src="https://randomuser.me/api/portraits/men/78.jpg"
                  alt="">
                <div class="flex flex-col justify-start items-center ml-4 gap-1">
                  <p class="leading-3 tracking-tight text-left"><b>Name Here</b></p>
                  <p class="leading-3 tracking-tight text-left"><small>Postin publicly!</small></p>
                </div>
              </div>

              <div class="flex gap-x-2 items-center pt-4">
                <b>ADD YOUR RATING:</b>
                <div class="flex text-xl gap-x-1 items-center text-gray-200">
                  <button class="review-start" data-value="1"> <i class="fa-regular fa-star"></i> </button>
                  <button class="review-start" data-value="2"> <i class="fa-regular fa-star"></i> </button>
                  <button class="review-start" data-value="3"> <i class="fa-regular fa-star"></i> </button>
                  <button class="review-start" data-value="4"> <i class="fa-regular fa-star"></i> </button>
                  <button class="review-start" data-value="5"> <i class="fa-regular fa-star"></i> </button>
                </div>
              </div>
              <textarea class="p-3 w-full min-h-[130px] rounded border outline-none focus:ring-2 focus:ring-yellow-500"
                placeholder="Share details of your own experience at this place..."></textarea>

              <div class="flex justify-end gap-x-2">
                <button
                  class="px-4 py-2 rounded text-blue-600 hover:bg-red-500 hover:text-white transition-all bg-gray-100 focus:ring font-medium">Cancel</button>
                <button class="px-4 py-2 rounded bg-blue-600 text-white focus:ring font-medium">Post</button>
              </div>

            </div>

          </div>
        </div>
        <?php }?>
        <!-- reiviews -->



        <!-- Item Comments -->
        <div data-item="item_comments" class="item_content hidden">
          <div class="flex justify-between items-center">
            <h3 class="flex items-center gap-x-3 text-xl font-medium"> <span><?php echo $data['comment'] ?> Comments
                found.</span>
            </h3>
          </div>
          <div class="pt-6 space-y-3">

            <div class="border rounded overflow-hidden  mb-6">
              <?php $comments = _get("comment", "post_id=$product_id AND type='product' ORDER BY id DESC LIMIT 10");
while ($comment = mysqli_fetch_assoc($comments)) {?>
              <div class="p-4 border-b bg-gray-50">
                <div class="overflow-hidden flex items-center justify-between">
                  <a href="#!" class="flex items-center gap-x-3 text-blue-500 font-medium">
                    <img class="w-10 h-10 object-contain rounded-full" src="admin/upload/<?php echo $comment['img'] ?>">
                    <span><?php echo $comment['name'] ?></span>
                  </a>
                  <small><?php $time = $comment['time'];
    echo time_elapsed_string($time, true);?></small>
                </div>
                <p class="mt-3"><?php echo $comment['content'] ?></p>
              </div>
              <?PHP }?>
            </div>

            <?php
if (isset($_POST['send_message'])) {
    $user_id = $_SESSION['user_id'];
    if ($user_id < 1) {
        header("location:login.php?id=$product_id&&err=Please login first");
    } else {
        if (isset($_GET['comment'])) {
            $parent_id = $_GET['comment'];
        } else {
            $parent_id = $_POST['parent_id'];
        }
        $user_info = _fetch("person", "id=$user_id");
        $name = $user_info['name'];
        $email = $user_info['email'];
        $img = $user_info['file_name'];
        $message = $_POST['message'];
        $type = "product";
        $update = _update("products", "comment = comment+1", "id=$product_id");
        $insert = _insert("comment", "post_id,parent_id,type, name, email, content, img, time", "'$product_id','$parent_id','$type', '$name', '$email', '$message', '$img', '$time'");
        if ($insert) {
            $msg = 'Message Sent Successfull';
            header("location:item.php?product_id=$product_id&&msg=$msg");
        } else {
            echo "errro";
        }
    }}
?>
            <div class="border mb-3">
              <div class="section-title mb-0">
                <h4 class="m-0 text-uppercase font-weight-bold p-3 bg-white">Leave a comment</h4>
              </div>
              <div class="bg-white p-4">
                <form action="" method="POST">
                  <div class="form-group">
                    <input name="parent_id" type="hidden" value="0">
                    <textarea style="width:100%;border:1px solid #ddd;padding:20px;outline:none;border:1px solid #ddd;"
                      name="message" cols="30" rows="5" class="form-control"></textarea>
                  </div>
                  <div class="form-group mt-2">
                    <input name="send_message" type="submit" value="Leave a comment"
                      class="bg-blue-500 text-white hover:bg-blue-600 cursor-pointer focus:ring transition-all font-weight-semi-bold py-2 px-3">
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
        <!-- Item Comments -->

      </div>



      <!-- RightBar Info -->
      <div class="w-full lg:min-w-[350px] lg:w-[350px]">

        <div class="w-full sticky top-0 pt-12">
          <!-- Price&Cart-Button area -->
          <div style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
          rgba(0, 0, 0, 0.06) 0px 0px 0px 1px !important;" class="w-full border p-6 space-y-5">
            <div class="flex justify-between items-center relative">
              <button class="toggle_license" class="font-medium text-lg">
                <span class="item_title">Sell Price</span>
                <small class="text-gray-500"><i class="fa-solid fa-caret-right"></i></small>
              </button>
              <div class="relative">
                <div class="flex items-start text-gray-800 absolute right-0 -top-5">
                  <span class="text-sm">$.</span>
                  <del
                    class="text-base font-medium tracking-wide items_del_price"><?php echo $data['regular_price'] ?></del>
                </div>
                <div class="flex items-start text-green-600">
                  <span class="text-sm">$.</span>
                  <h4 class="text-xl font-semibold tracking-wide items_price">
                    <?php
                      $sell_price = $data['sell_price'];
                      $data['sell_price'] = $sell_price - ($sell_price * $sell_discount) / 100;
                      echo $data['sell_price'];
                      ?>
                  </h4>
                </div>
              </div>

              <!-- <div
                  class="hidden item_licenses absolute top-[115%] inset-x-0 z-40 max-w-[350px] border shadow bg-white rounded">
                  <div data-title="Regular License" data-price="33" data-oldprice="44"
                    class="item_license p-5 border-b cursor-pointer hover:bg-gray-100 group">
                    <div class="flex justify-between items-center">
                      <h4 class="text-base font-semibold">Regular License</h4>
                      <h2 class="flex items-start">
                        <small>$</small>
                        <span class="text-xl font-semibold text-gray-900">33</span>
                      </h2>
                    </div>
                    <p class="text-gray-600 py-1 text-sm font-normal">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum reiciendis beatae, nulla maxime
                      animi accusamus.
                    </p>

                    <div
                      class="absolute -top-2 -z-10 rounded left-4 w-4 h-4 bg-white group-hover:bg-gray-100 border-l border-t transform rotate-45">
                    </div>
                  </div>

                  <div data-title="Regular License" data-price="250" data-oldprice="400"
                    class="item_license p-5 border-b cursor-pointer hover:bg-gray-100">
                    <div class="flex justify-between items-center">
                      <h4 class="text-base font-semibold">Extended License</h4>
                      <h2 class="flex items-start">
                        <small>$</small>
                        <span class="text-xl font-semibold text-gray-900">300</span>
                      </h2>
                    </div>
                    <p class="text-gray-600 py-1 text-sm font-normal">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum reiciendis beatae, nulla maxime
                      animi accusamus.
                    </p>
                  </div>

                  <div class="px-5 py-3">
                    <a href="#" class="text-blue-500 hover:underline text-center block text-sm">View license details</a>
                  </div>
                </div> -->

            </div>


            <div class="w-full border-b"> </div>


            <ul class="space-y-2 text-sm">
              <?php echo $data['mini_content'] ?>
            </ul>

            <a href="?product_id=<?php echo $data['id'] ?>&&cart=<?php echo $data['id'] ?>"
              class="w-full h-11 flex items-center justify-center rounded focus:ring-2 ring-green-600 ring-offset-2 bg-green-600 text-white gap-x-2">
              <i class="fa-solid fa-cart-shopping"></i>
              <span>Buy Now</span>
            </a>

          </div>

          <br>

          <!-- Necessary Information -->
          <div style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
          rgba(0, 0, 0, 0.06) 0px 0px 0px 1px !important;" class="border bg-white p-4 space-y-4">

            <?php echo $data['content'] ?>

          </div>

          <br>

          <?php if ($related_product == "checked") {?>
          <div>
            <h3 class="bg-green-600 text-white p-3 rounded-t">Recommended Products</h3>
            <div class="bg-[#f3f3f3] pb-6">

              <?php
$category = $data['category'];
    $similars = _get("products", "category='$category' LIMIT 3");
    while ($similar = mysqli_fetch_assoc($similars)) {
        ?>
              <a href="item.php?id=<?php echo $similar['id'] ?>" class="block px-4 py-6 pb-0 hover:bg-green-100">
                <div class="flex items-start gap-x-4">
                  <h2 class="text-base font-semibold text-gray-700 text-left w-7/12"><?php echo $similar['title'] ?>
                  </h2>
                  <img class="w-5/12" src="admin/upload/<?php echo $similar['file_name'] ?>">
                </div>
              </a>
              <?php }?>
            </div>
          </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</main>


<script>

//slider and video show/hide
  // $(".vid_slider").show();
  // $(".slides").hide();

  // $("#vid_button").on("click",function(){
  //   $(".slides").hide();
  //   $(".vid_slider").show();
  // });

  // $("#slid_button").on("click",function(){
  //   $(".vid_slider").hide();
  //   $(".slides").show();
  // });
</script>


<!-- Header area -->
<?php include "common/footer.php";?>
<!-- Header area -->
<!-- Header area -->
<?php include "common/header.php";?>
<!-- Header area -->
<?php
if (isset($_GET['service_id'])) {
    $service_id = $_GET['service_id'];
    $data = _fetch("service", "id=$service_id");
    
    //star avarage value
    $star_count = mysqli_num_rows(_get("reviews", "product_id='$service_id' AND type='service'"));
    if($star_count>0){
      $total_star = mysqli_fetch_assoc(_query("SELECT SUM(star) FROM reviews WHERE product_id='$service_id' AND type='service'"));
      $star = $total_star['SUM(star)'];
      $star_avg = $star/$star_count;
      $star_avg = bcdiv($star_avg, 1, 1); 
    }else{
      $star_avg = "N/A";
    }
}else{
  header("location:services.php");
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

    <?php if ($review_service == "checked") {?>
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
      <span><?php echo $star_avg;?></span>
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
      <div class="w-full pt-12">

        <!-- Item Details -->
        <div data-item="item_details" class="item_content w-full space-y-6">
          <!-- Theme Thumbnail -->
          <div style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
            rgba(0, 0, 0, 0.06) 0px 0px 0px 1px !important;" class="bg-white border p-4">
            <a href="#" class="block w-full">
              <img class="w-full" src="admin/upload/<?php echo $data['file_name'] ?>">
            </a>
          </div>



          <!-- Share Buttons -->
          <div id="share_buttons" class="inset-0 top-[150px] left-[50px] z-[200] w-fit">
            <div class="flex flex-row lg:flex-col gap-2 justify-center">
              <a href="#"
                class="bg-[#5dcaca] hover:bg-black w-11 h-11 text-sm flex items-center justify-center rounded-full transition-all text-white">
                <i class="fa-brands fa-twitter"></i>
              </a>

              <a href="#"
                class="bg-blue-500 hover:bg-black w-11 h-11 text-sm flex items-center justify-center rounded-full transition-all text-white">
                <i class="fa-brands fa-facebook-f"></i>
              </a>

              <a href="#"
                class="bg-[#3d9ae7] hover:bg-black w-11 h-11 text-sm flex items-center justify-center rounded-full transition-all text-white">
                <i class="fa-brands fa-linkedin-in"></i>
              </a>
            </div>


          </div>
          <!-- Share Buttons -->

          <!-- <div class="bg-white p-4 rounded">
            <h2 class="mb-4 text-xl font-medium text-gray-700">Demo Preview Details:</h2>

            <div class="flex items-center gap-x-2">
              <b>User Login:</b>
              <a class="text-blue-500 hover:text-blue-600 hover:underline"
                href="https://joblessbd.com">https://joblessbd.com/</a>
            </div>

            <div class="flex items-center gap-x-2">
              <b>Email:</b>
              <span>admin@gmail.com</span>
            </div>
            <div class="flex items-center gap-x-2">
              <b>password:</b>
              <span>1234</span>
            </div>
            <br>
            <div class="flex items-center gap-x-2">
              <b>Admin Login:</b>
              <a class="text-blue-500 hover:text-blue-600 hover:underline"
                href="https://joblessbd.com">https://joblessbd.com/admin</a>
            </div>

            <div class="flex items-center gap-x-2">
              <b>Email:</b>
              <span>admin@gmail.com</span>
            </div>
            <div class="flex items-center gap-x-2">
              <b>password:</b>
              <span>admin@gmail.com</span>
            </div>
          </div> -->

          <div class="bg-white p-5"><?php echo $data['description'] ?></div>
        </div>


        <!-- Item Reviews -->
        <?php if ($review_service == "checked") {?>
        <div data-item="item_reviews" class="item_content hidden">

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

          <!-- reiviews -->
          <div class="pt-6 space-y-4">

            <!-- review -->
            <?php 
              $reviews = _get("reviews","product_id=$service_id AND type='service' ORDER BY id DESC LIMIT 10");
              while($review = mysqli_fetch_assoc($reviews)){
                $pid = $review['pid'];               
                $reting_person = _fetch("person","id=$pid");
                ?>
            <div class="rounded border overflow-hidden">
              <div class="flex items-center justify-between bg-gray-100">
                
                <div class="flex items-left justify-between p-4">
                  <img class="round_img_small" src="admin/upload/<?php echo $reting_person['file_name'];?>" alt="image">

                  <div class="pl-2">
                    <h2><?php echo $person['name'];?></h2>                    
                      <div class="flex text-xl gap-x-1 items-center text-gray-200">
                        <?php 
                          $star = $review['star'];
                          echo "<h2 style='color:orange'>(".$star.")</h2>";
                          for($i=0;$i<5;$i++){ ?>
                          <?php
                          if($i == $star){
                              break;
                          }
                          ?>
                          <button class="review_color"> <i class="fa-regular fa-star"></i> </button>
                        <?php  }?>
                      </div>
                  </div>
                </div>

                <p style="padding:5px;"><?php $times = $review['time']; echo time_elapsed_string($times)?></p>
              </div>
              <p class="p-5"><?php echo $review['text'];?></p>
            </div>
            <?php  }?>          



            <!-- Write Review Box -->
            <div class="p-5 space-y-3 border bg-white shadow rounded">
              <div class="flex items-center">
                <img class="w-12 h-12 rounded-full overflow-hidden" src="admin/upload/<?php echo $person['file_name'];?>"
                  alt="">
                <div class="flex flex-col justify-start ml-4 gap-1">
                  <p class="leading-3 tracking-tight text-left"><b><?php echo $person['name'];?></b></p>
                  <p class="leading-3 tracking-tight text-left"><small><?php echo $person['role'];?></small></p>
                </div>
              </div>

              <div class="flex gap-x-2 items-center pt-4">
                <b>ADD YOUR RATING:</b>
                <div class="flex text-xl gap-x-1 items-center text-gray-200">
                  <button id="star_1" class="review-start" data-value="1"> <i class="fa-regular fa-star"></i> </button>
                  <button id="star_2" class="review-start" data-value="2"> <i class="fa-regular fa-star"></i> </button>
                  <button id="star_3" class="review-start" data-value="3"> <i class="fa-regular fa-star"></i> </button>
                  <button id="star_4" class="review-start" data-value="4"> <i class="fa-regular fa-star"></i> </button>
                  <button id="star_5" class="review-start" data-value="5"> <i class="fa-regular fa-star"></i> </button>
                </div>
              </div>
              <textarea id="text_area" class="p-3 w-full min-h-[130px] rounded border outline-none focus:ring-2 focus:ring-yellow-500"
                placeholder="Share details of your own experience at this place..."></textarea>

              <div class="flex justify-end gap-x-2">
                <button
                  class="px-4 py-2 rounded text-blue-600 hover:bg-red-500 hover:text-white transition-all bg-gray-100 focus:ring font-medium">Cancel</button>
                <button class="post_btn px-4 py-2 rounded bg-blue-600 text-white focus:ring font-medium">Post</button>
              </div>

            </div>

          </div>
        </div>
        <?php }?>
        <!-- review -->




        <!-- Item Comments -->
        <div data-item="item_comments" class="item_content hidden">
          <div class="flex justify-between items-center">
            <h3 class="flex items-center gap-x-3 text-xl font-medium"> <span><?php echo $data['comment'] ?> Comments
                found.</span>
            </h3>
          </div>
          <div class="pt-6 space-y-3">
            <div class="rounded overflow-hidden space-y-5 mb-6">

              <?php $comments = _get("comment", "post_id=$service_id AND type='service' ORDER BY id DESC LIMIT 10");
while ($comment = mysqli_fetch_assoc($comments)) {?>
              <div class="p-4 border-b bg-gray-50">
                <div class="overflow-hidden flex items-center justify-between">
                  <a href="#!" class="flex items-center gap-x-3 text-blue-500 font-medium">
                    <img class="w-10 h-10 object-contain rounded-full" src="admin/upload/<?php echo $comment['img']; ?>"
                      alt="">
                    <span><?php echo $comment['name'] ?></span>
                  </a>
                  <small><?php $times = $comment['time'];echo time_elapsed_string($times);?></small>
                </div>
                <?php echo $comment['content'] ?>
              </div>
              <?php }?>

              <?php
if (isset($_POST['send_message'])) {
    $user_id = $_SESSION['user_id'];
    if ($user_id < 1) {
        header("location:login.php?id=$service_id&&err=Please login first");
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
        $type = "service";

        $update = _update("service", "comment = comment+1", "id=$service_id");
        $insert = _insert("comment", "post_id,parent_id,type, name, email, content, img, time", "'$service_id','$parent_id', '$type', '$name', '$email', '$message', '$img', '$time'");
        if ($insert) {
            $msg = 'Message Sent Successfull';
            header("location:service.php?service_id=$service_id&&msg=$msg");
        } else {
            echo "errro";
        }
    }}
?>
              <div class="border">
                <div class="section-title mb-0">
                  <h4 class="m-0 text-uppercase font-weight-bold p-3 bg-white">Leave a comment</h4>
                </div>
                <div class="bg-white p-4">
                  <form action="" method="POST">
                    <div class="form-group">
                      <input name="parent_id" type="hidden" value="0">
                      <textarea
                        style="width:100%;border:1px solid #ddd;padding:20px;outline:none;border:1px solid #ddd;"
                        name="message" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-0 mt-2">
                      <input name="send_message" type="submit" value="Leave a comment"
                        class="bg-blue-500 text-white hover:bg-blue-600 cursor-pointer focus:ring transition-all font-weight-semi-bold py-2 px-3">
                    </div>
                  </form>
                </div>
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
          <form action="service-checkout.php" method="POST">
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
                    <h4 class="text-xl font-semibold tracking-wide items_price"><?php echo $data['sell_price'] ?></h4>
                  </div>
                </div>
              </div>
              <div class="w-full border-b"> </div>
              <ul class="space-y-2 text-sm">
                <?php echo $data['mini_content'] ?>
              </ul>
              <input type="hidden" name="service_id" value="<?php echo $data['id'] ?>">
              <button type="submit"
                class="w-full h-11 flex items-center justify-center rounded focus:ring-2 ring-green-600 ring-offset-2 bg-green-600 text-white gap-x-2"><i
                  class="fa-solid fa-cart-shopping"></i><span>Buy Now</span></button>
            </div>
          </form>
          <br>
          <!-- Necessary Information -->
          <div style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
          rgba(0, 0, 0, 0.06) 0px 0px 0px 1px !important;" class="border bg-white p-4 space-y-4">
            <?php echo $data['content'] ?>
          </div>

          <br>

          <?php if ($related_service == "checked") {?>
          <div>
            <h3 class="bg-green-600 text-white p-3 rounded-t">Recommended Services</h3>
            <div class="bg-white p-3 rounded">

              <?php
                $category = $data['category'];
                $similars = _get("service", "category='$category' LIMIT 3");
                while ($similar = mysqli_fetch_assoc($similars)) {
               ?>
              <a href="service.php?service_id=<?php echo $similar['id'] ?>"
                class="block px-4 py-2 pb-0 hover:bg-green-100">
                <div class="flex items-between ">
                  <h2 class="text-base font-semibold text-gray-700 text-left w-7/12"><?php echo $similar['title'] ?>
                  </h2>
                  <img style="width: 50px;" class="w-5/12" src="admin/upload/<?php echo $similar['file_name'] ?>">
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

 var star = 1;
    $("#star_1").on("click",function(){
      star = 1;
    })
    $("#star_2").on("click",function(){
      star = 2;
    })
    $("#star_3").on("click",function(){
      star = 3;
    })
    $("#star_4").on("click",function(){
      star = 4;
    })
    $("#star_5").on("click",function(){
      star = 5;
    })  


$("#text_area").on("change",function(){
    var  text = $("#text_area").val();   

    function send_review(){
      $(".post_btn").on("click",function(){
      $.ajax({
        url:"admin/config/ajax.php",
        method:"POST",
        data:{
          reference:"send review in itme page",
          pid: <?php echo $id;?>,
          star: star,
          text: text,
          type: "service",
          product_id:<?php echo $service_id;?>
        },
        success:function(data){
          console.log(data);
          location.reload(true);
        }
      });

    })
    }
    send_review();
    
  })
  
</script>

<!-- Header area -->
<?php include "common/footer.php";?>
<!-- Header area -->
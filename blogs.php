<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->
 
<!-- Sub Header -->
<div class="container space-y-6 pt-6 pb-12 lg:py-24">

    <!-- Page Name Title -->
    <h3 class="text-4xl font-medium tracking-wide">
        Blogs
    </h3>

    <!-- Page Tree Links -->
    <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
            class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
            <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>
        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
            class="text-white px-4 py-1.5 rounded shadow-sm" href="blogs.php"> Blogs
        </a>

    </div>
 
</div>
</header>


<main class="min-h-screen py-12">
    <div class="flex items-start">
        <div class="container flex gap-12 flex-col lg:flex-row items-start">


            <div class="div">
                <div class="w-full grid grid-cols-2 gap-6">
                <?php 
                if(isset($_GET['category'])){
                    $category = $_GET['category'];
                    $post = _get("post", "status='Publish' AND category='$category' ORDER BY id DESC");
                }else{              
                $pagination = "ON";
                if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
                $page_no = $_GET['page_no'];} else { $page_no = 1;}
                $total_records_per_page = $paginations['blog_page'];
                $offset = ($page_no - 1) * $total_records_per_page;
                $previous_page = $page_no - 1;
                $next_page = $page_no + 1;
                $adjacents = "2";
                $post = _get("post", "status='Publish' ORDER BY id DESC LIMIT $offset, $total_records_per_page");
                $total_records = mysqli_num_rows(_get("post", "status='Publish'"));
                $total_no_of_pages = ceil($total_records / $total_records_per_page);
                $second_last = $total_no_of_pages - 1;

                }                
                while($data = mysqli_fetch_assoc($post)){
                $author_id = $data['pid'];
                $author = _fetch("person","id=$author_id"); 
                ?>
                    <div class="p-5 bg-white shadow rounded relative">
                        <a href="blog.php?id=<?php echo $data['id']?>" class="absolute inset-0 m-auto z-40"></a>
                        <img style="height:200px" class="w-full" src="admin/upload/<?php echo $data['file_name']?>">
                        <h3 class="text-lg font-semibold tracking-wide my-4"><?php echo $data['title']?></h3>
                        <div class="flex items-center gap-2 relative z-50 truncate flex-wrap w-full"
                            style="justify-content: space-between;">
                            <a href="#!"
                                class="px-2 py-1 bg-[#f75389] text-white rounded-sm shadow-sm focus:ring-1 focus:ring-offset-1"><?php echo $data['category']?></a>
                            <a href="#!"
                                class="px-2 py-1 rounded-sm "><?php echo $author['name']." ". date("d-M-y",$data['time']);?></a>
                        </div>
                    </div>
                    <?php }?>

                </div>

                <br>
                <br>

        <!-- Paginations -->
        <?php if (isset($pagination)) {?>
        <style>
        .paginations {
          width: 100%;
          padding: 20px 0px
        }

        .paginations>ul {

          display: flex;
          align-items: center;
        }

        .paginations>ul>li {
          list-style: none;
          display: inline-block;
        }

        .paginations>ul>li>a {
          width: 40px;
          height: 40px;
          display: flex;
          align-items: center;
          justify-content: center;
          margin: 5px;
          background: rgb(209 213 219);
          cursor: pointer;
        }

        .paginations>ul>li>a:hover {
          background: rgb(247 83 137);
          color: #fff;
        }

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
              <a <?php if ($page_no < $total_no_of_pages) {echo "href='?page_no=$next_page'";}?>><i
                  class="fa-solid fa-arrow-right"></i></a>
            </li>
            <?php if ($page_no < $total_no_of_pages) {
        echo "<li><a href='?page_no=$total_no_of_pages'>Last</a></li>";
    }?>
          </ul>
        </div>
        <?php }?>
        <!-- Paginations -->
            </div>



            <?php include("common/blog_sidebar.php")?>




        </div>

    </div>

</main>

<!-- Header area -->
<?php include("common/footer.php");?>
<!-- Header area -->

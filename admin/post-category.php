<?php include "common/header-sidebar.php";?>
<?php
$all_item = mysqli_num_rows(_get("category", "type='Post'"));
?>
<div class="x_container space-y-10 py-10">
  <div class="flex flex-col rounded-lg shadow-md border border-[
        ] shadow-gray-200 bg-white">
    <div class="overflow-x-auto rounded-lg">
      <div class="inline-block min-w-full align-middle">
        <div class="overflow-auto bg-white">
          <div style="display:flex;justify-content:space-between">
            <div style="display:flex">
              <a style="margin:15px;display:block;text-align:center;padding-top:12px;" class="input"
                href="post-category.php">Refresh <i class="fa-solid fa-rotate-right"></i></a>
            </div>

            <div>
              <?php
if (isset($_POST['submit'])) {
    $category = $_POST['category'];
    if (!empty($category)) {
        $insert = _insert("category", "category,type,time", "'$category','Post',$time");
        if ($insert) {
            $msg = "Successfully Insert Category";
            header("location:post-category.php?msg=$msg");
        }
    } else {
        $err = "Please Write Category Name";
        header("location:post-category.php?err=$err");
    }
}
?>
              <form action="" method="POST">
                <div style="text-align: right;margin: 5px;padding-top: 10px;">
                  <input required name="category" type="text" id="srcvalue" placeholder="Add Category"
                    style="padding: 8px;border: 2px solid #ddd;border-radius:5px;">
                  <button type="submit" name="submit"
                    style="padding: 9px 15px;margin-right: 12px;background: #0e33f7;color:#fff;box-sizing: border-box;border-radius: 2px;">Add
                    new category</button>
                </div>
              </form>
            </div>
          </div>



          <!-- Table -->
          <?php
if (isset($_POST['check'])) {
    if (isset($_POST['check_list'])) {
        $check_list = $_POST['check_list'];
        for ($i = 0; $i < count($check_list); $i++) {
            $delete = _delete("category", "id=$check_list[$i]");
        }
        $msg = "Delete Successfully";
        header("location:post-category.php?msg=$msg");
    }
}
?>
          <form action="" method="POST">
            <!-- Table -->
            <div class="top_link">
              <a href="post-category.php">All (<?php echo $all_item ?>)</a>
              <input type="submit" onclick="return confirm('Are you sure! Want to delte?')"  name="check" value="Delete">
            </div>
            <table class="min-w-full divide-y divide-gray-200 table-fixed">
              <thead class="bg-white">
                <tr>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                    <input id="select_all" style="background:red;padding:5px 10px;color:#fff;border-radius:2px;"
                      type="checkbox">
                  </th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Sl.</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Category Name
                  </th>
                  <th scope="col" class="text-center p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                    Actions</th>

                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <?php
$pagination = "ON";
if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
    $page_no = $_GET['page_no'];} else { $page_no = 1;}
$total_records_per_page = 10;
$offset = ($page_no - 1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";

$category = _query("SELECT * FROM category WHERE type='Post' ORDER BY id DESC LIMIT $offset, $total_records_per_page");
$total_records = mysqli_num_rows(_get("category", "type='Post'"));

$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1;
$i = 0;
while ($data = mysqli_fetch_assoc($category)) {$i++
    ?>
                <tr class="hover:bg-gray-100">
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <input name="check_list[]" class="checkbox" type="checkbox" value="<?php echo $data['id'] ?>">
                  </td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"><?php echo $i; ?></td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo $data['category'] ?></td>
                  <td class="text-center p-4 space-x-2 whitespace-nowrap lg:p-5">
                  <button type="button" class="btn bg-red-500 w-fit text-white" onclick="delete_alert('category',<?php echo $data['id'];?>)">Delete</button>
                  </td>
                </tr>
                <?php }?>

              </tbody>
            </table>
          </form>

          <?php if (isset($pagination)) {?>
          <div style="padding:20px 10px;">
            <!-- /* ----------paginations----------- */ -->
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

            <div style="display:flex;justify-content:space-between;padding:10px 20px;">
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
                      <i class="fa-solid fa-arrow-right"></i>
                    </a>
                  </li>
                  <?php if ($page_no < $total_no_of_pages) {
        echo "<li><a href='?page_no=$total_no_of_pages'>Last</a></li>";
    }?>
                </ul>
              </div>
              <div class="page_of">
                <div><strong>Page <?php echo $page_no . " of " . $total_no_of_pages; ?></strong></div>
              </div>
            </div>
            <!-- /* ----------paginations----------- */ -->
            <?php }?>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
</main>

<!-- All Popup -->
<!-- Approve product -->
<div data-target="approve_product"
  class="popup_wrapper overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 sm:h-full flex"
  id="delete-product-modal" style="z-index: 111; display: none;">
  <div data-target="approve_product"
    class="popup_remove w-full h-screen bg-black bg-opacity-50 z-40 fixed inset-0 m-auto">
  </div>
  <div class="relative px-4 w-full max-w-md h-full md:h-auto z-50">
    <div class="relative bg-white rounded-2xl shadow-lg">
      <div class="flex justify-end p-2"><button type="button" data-target="approve_product"
          class="popup_remove text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm w-8 h-8 flex items-center justify-center ml-auto"
          data-modal-toggle="delete-product-modal"> <i class="fa-solid fa-xmark"></i> </button></div>
      <div class="p-6 pt-0 text-center text-5xl text-green-500"> <i class="fa-solid fa-circle-exclamation"></i>
        <h3 class="my-9 text-base font-normal text-gray-500">Want to approve this product?
        </h3>
        <div class="w-full flex justify-between items-center gap-x-2"><a href="#" data-target="approve_product"
            class="popup_remove text-white bg-red-400 border border-gray-200 font-medium inline-flex items-center rounded-lg text-sm px-3 py-2.5 text-center hover:scale-[1.02] transition-transform"
            data-modal-toggle="delete-product-modal">No, cancel</a>

          <button id="apv"
            class="disabled:opacity-70 disabled:cursor-not-allowed text-white bg-gradient-to-br from-green-600 to-green-500 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2.5 text-center mr-2 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform"><span>Yes,
              Confirm</span></button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Reject product -->
<div data-target="reject_product"
  class="popup_wrapper overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 sm:h-full flex"
  id="delete-product-modal" style="z-index: 111; display: none;">
  <div data-target="reject_product"
    class="popup_remove w-full h-screen bg-black bg-opacity-50 z-40 fixed inset-0 m-auto">
  </div>
  <div class="relative px-4 w-full max-w-md h-full md:h-auto z-50">
    <div class="relative bg-white rounded-2xl shadow-lg">
      <div class="flex justify-end p-2"><button type="button" data-target="reject_product"
          class="popup_remove text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm w-8 h-8 flex items-center justify-center ml-auto"
          data-modal-toggle="delete-product-modal"> <i class="fa-solid fa-xmark"></i> </button></div>
      <div class="p-6 pt-0 text-center text-5xl text-red-500"> <i class="fa-solid fa-circle-exclamation"></i>
        <h3 class="my-9 text-base font-normal text-gray-500">Want to reject this product?
        </h3>
        <div class="w-full flex justify-between items-center gap-x-2"><a href="#" data-target="reject_product"
            class="popup_remove text-white bg-red-400 border border-gray-200 font-medium inline-flex items-center rounded-lg text-sm px-3 py-2.5 text-center hover:scale-[1.02] transition-transform"
            data-modal-toggle="delete-product-modal">No, cancel</a>

          <button id="rej"
            class="disabled:opacity-70 disabled:cursor-not-allowed text-white bg-gradient-to-br from-red-600 to-red-500 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2.5 text-center mr-2 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform"><span>Yes,
              Reject</span></button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
  $('#select_all').on('click', function() {
    if (this.checked) {
      $('.checkbox').each(function() {
        this.checked = true;
      });
    } else {
      $('.checkbox').each(function() {
        this.checked = false;
      });
    }
  });

  $('.checkbox').on('click', function() {
    if ($('.checkbox:checked').length == $('.checkbox').length) {
      $('#select_all').prop('checked', true);
    } else {
      $('#select_all').prop('checked', false);
    }
  });
});
</script>
<script src="js/app.js"></script>

</body>

</html>
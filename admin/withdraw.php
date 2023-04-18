<?php include "common/header-sidebar.php";?>
<?php
$notify_check = mysqli_num_rows(_get("withdraw", "status='Pending' AND notify='New'"));
if ($notify_check > 0) {
    $update_notify = _update("withdraw", "notify='Old'", "notify='New'");
    header("location:pending-withdraw.php");
}
?>
<?php
$all_item = mysqli_num_rows(_getAll("withdraw"));
$published_item = mysqli_num_rows(_get("withdraw", "status='Success'"));
$pending_item = mysqli_num_rows(_get("withdraw", "status='Pending'"));
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
                href="withdraw.php">Refresh <i class="fa-solid fa-rotate-right"></i></a>
            </div>

            <div>
              <form action="" method="GET">
                <div style="text-align: right;margin: 5px;padding-top: 10px;">
                  <?php
if (isset($_GET['src'])) {?>
                  <input name="src" type="search" id="srcvalue" placeholder="Search Here..."
                    style="padding: 8px;border: 2px solid #ddd;border-radius:5px;" value="<?php echo $_GET['src']; ?>">
                  <?php } else {?>
                  <input name="src" type="search" id="srcvalue" placeholder="Search Here..."
                    style="padding: 8px;border: 2px solid #ddd;border-radius:5px;">
                  <?php }?>
                  <button type="submit"
                    style="padding: 9px 15px;margin-right: 12px;background: #0e33f7;color:#fff;box-sizing: border-box;border-radius: 2px;">Search</button>
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
            $delete = _delete("withdraw", "id=$check_list[$i]");
        }
        $msg = "Delete Successfully";
        header("location:withdraw.php?msg=$msg");
    }
}
?>
          <form action="" method="POST">
            <div class="top_link">
              <a href="withdraw.php">All (<?php echo $all_item ?>)</a>
              <a href="withdraw.php?status=Success">Success (<?php echo $published_item ?>)</a>
              <a href="withdraw.php?status=Pending">Pending (<?php echo $pending_item ?>)</a>
              <input type="submit" name="check" value="Delete">
            </div>
            <!-- Table -->
            <table class="min-w-full divide-y divide-gray-200 table-fixed">
              <thead class="bg-white">
                <tr>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                    <input id="select_all" style="background:red;padding:5px 10px;color:#fff;border-radius:2px;"
                      type="checkbox">
                  </th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Image</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Name</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Phone</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Method</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Payment
                    Address</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Amount</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Status</th>
                  <th scope="col" class="text-center p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                    Actions</th>

                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <?php
if (isset($_GET['src'])) {
    $src = trim($_GET['src']);
    $withdraw = _query("SELECT * FROM withdraw INNER JOIN person ON withdraw.pid=person.id WHERE (person.name='$src' OR person.phone='$src' OR withdraw.method='$src' OR withdraw.pmn_address='$src' OR withdraw.amount='$src')");
} elseif (isset($_GET['status'])) {
    if ($_GET['status'] == 'Pending') {
        $withdraw = _get("withdraw", "status='Pending'");
    } else {
        $withdraw = _get("withdraw", "status='Success'");
    }} else {
    $pagination = "ON";
    if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
        $page_no = $_GET['page_no'];} else { $page_no = 1;}
    $total_records_per_page = 10;
    $offset = ($page_no - 1) * $total_records_per_page;
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;
    $adjacents = "2";

    $withdraw = _query("SELECT * FROM withdraw WHERE id!='' ORDER BY id DESC LIMIT $offset, $total_records_per_page");
    $total_records = mysqli_num_rows(_getAll("withdraw"));

    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1;
}
$i = 0;
while ($data = mysqli_fetch_assoc($withdraw)) {$i++;
    $person_id = $data['pid'];
    $person_info = _fetch("person", "id=$person_id");
    ?>
                <tr class="hover:bg-gray-100">
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <input name="check_list[]" class="checkbox" type="checkbox" value="<?php echo $data['id'] ?>">
                  </td>
                  <td><img style="margin:0 auto;width:100;height:50px;object-fit:cover"
                      src="upload/<?php echo $person_info['file_name'] ?>"></td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo $person_info['name'] ?></td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo $person_info['phone'] ?></td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo $data['method'] ?></td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo $data['pmn_address'] ?></td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">$
                    <?php echo $data['amount'] ?></td>
                  <?php if ($data['status'] == 'Pending') {?>
                  <td class="p-4 text-sm font-normal text-red-500 whitespace-nowrap lg:p-5">
                    <?php echo $data['status'] ?></td>
                  <?php } else {?>
                  <td class="p-4 text-sm font-normal text-green-500 whitespace-nowrap lg:p-5">
                    <?php echo $data['status'] ?></td>
                  <?php }?>
                  <td class="text-center p-4 space-x-2 whitespace-nowrap lg:p-5">
                    <a id="add_bank"
                      href="approve-withdraw.php?src=pending-withdraw&&table=withdraw&&id=<?php echo $data['id'] ?>"
                      class="popup_show btn bg-red-500 w-fit text-white" style="background:#4ade80;">Approve</a>
                    <a href="delete.php?src=pending-withdraw&&table=withdraw&&id=<?php echo $data['id'] ?>"
                      class="popup_show btn bg-red-500 w-fit text-white">Delete</a>
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
                <div class="page_no_status"><strong>Page <?php echo $page_no . " of " . $total_no_of_pages; ?></strong>
                </div>
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
<!-- Add New Pack Popup -->
<div data-target="add_bank"
  class="popup_wrapper overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 sm:h-full flex"
  id="delete-product-modal" style="z-index: 111; display: none;">
  <div data-target="add_bank" class="popup_remove w-full h-screen bg-black bg-opacity-50 z-40 fixed inset-0 m-auto">
  </div>
  <div class="relative p-4 w-full max-w-md h-full md:h-auto z-50">
    <div class="relative bg-white rounded-2xl shadow-lg p-6 pt-4">
      <div class="flex justify-end">
        <button type="button" data-target="add_bank"
          class="popup_remove text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm w-8 h-8 flex items-center justify-center ml-auto"
          data-modal-toggle="delete-product-modal"> <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <form class="flex flex-col gap-y-6">
        <h2 class="text-lg font-semibold text-cyan-900">New Bank</h2>
        <div class="flex flex-col gap-y-1">
          <label for="Bank Name">Bank Name</label>
          <input type="text" id="Bank Name" placeholder="Bank Name" class="input" required>
        </div>

        <div class="flex flex-col gap-y-1">
          <label for="Currency Symble">Currency Symble</label>
          <input type="text" id="Currency Symble" placeholder="Currency Symble" class="input" required>
        </div>

        <div class="flex flex-col gap-y-1">
          <label for="Bank Info">Bank Info</label>
          <input type="text" id="Bank Info" placeholder="Bank Info" class="input" required>
        </div>

        <div class="flex justify-end">
          <button class="button">Submit</button>
        </div>
      </form>

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
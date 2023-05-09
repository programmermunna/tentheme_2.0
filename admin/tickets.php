<?php include "common/header-sidebar.php";?>
<?php
$notify_check = mysqli_num_rows(_get("tickets", "status='Pending' AND notify='New'"));
if ($notify_check > 0) {
    $update_notify = _update("tickets", "notify='Old'", "notify='New'");
    header("location:tickets.php");
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $ticket_id = $_GET['ticket_id'];
    if ($action == 'solved') {
        $update = _update("tickets", "status='Solved'", "ticket_id=$ticket_id");
        if ($ticket_id) {
            $msg = "Successfully Solved Ticket";
            header("location:tickets.php?msg=$msg");
        }
    } elseif ($action == 'delete') {
        $delete = _delete("tickets", "ticket_id=$ticket_id");
        if ($delete) {
            $msg = "Successfully Deleted Ticket";
            header("location:tickets.php?msg=$msg");
        }
    } else {
        header("location:tickets.php");
    }
}

?>

<?php
$all_item = mysqli_num_rows(_get("tickets","subject !=''"));
$pending_item = mysqli_num_rows(_get("tickets", "status='Pending' AND subject !=''"));
$open_item = mysqli_num_rows(_get("tickets", "status='Open' AND subject !=''"));
$solved_item = mysqli_num_rows(_get("tickets", "status='Solved' AND subject !=''"));
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
                href="tickets.php">Refresh <i class="fa-solid fa-rotate-right"></i></a>
            </div>

            <div>
              <form action="" method="GET">
                <div style="text-align: right;margin: 5px;padding-top: 10px;">
                  <input name="src" type="search" id="srcvalue" placeholder="Search Here..."
                    style="padding: 8px;border: 2px solid #ddd;border-radius:5px;"  value="<?php if(isset($_GET['src'])){echo $_GET['src'];}?>">
                  <button type="submit" name="search"
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
                          $delete = _delete("tickets", "id=$check_list[$i]");
                      }
                      $msg = "Delete Successfully";
                      header("location:tickets.php?msg=$msg");
                  }
              }
              ?>
          <form action="" method="POST">
            <!-- Table -->
            <div class="top_link">
              <a href="tickets.php">All (<?php echo $all_item ?>)</a>
              <a href="tickets.php?status=Pending">Pending (<?php echo $pending_item ?>)</a>
              <a href="tickets.php?status=Open">Open (<?php echo $open_item ?>)</a>
              <a href="tickets.php?status=Solved">Solved (<?php echo $solved_item ?>)</a>
              <input type="submit" onclick="return confirm('Are you sure! Want to delte?')"  name="check" value="Delete">
            </div>
            <table class="min-w-full divide-y divide-gray-200 table-fixed">
              <thead class="bg-white">
                <tr>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                    <input id="select_all" style="background:red;padding:5px 10px;color:#fff;border-radius:2px;"
                      type="checkbox">
                  </th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Ticket Id
                  </th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Image</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Name</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Type</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Subject</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Date</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Status</th>
                  <th scope="col" class="text-center p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                    Actions</th>

                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <?php
                  if (isset($_GET['src'])) {
                      $src = trim($_GET['src']);
                      $tickets = _get("tickets", "subject !=''  AND (subject = '%$src%' OR ticket_id='$src' OR type='$src')");
                  } elseif (isset($_GET['status'])) {
                      $status = $_GET['status'];
                      $tickets = _get("tickets", "status='$status' AND subject !=''");
                  } else {
                      $pagination = "ON";
                      if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
                      $page_no = $_GET['page_no'];} else { $page_no = 1;}
                      $total_records_per_page = 10;
                      $offset = ($page_no - 1) * $total_records_per_page;
                      $previous_page = $page_no - 1;
                      $next_page = $page_no + 1;
                      $adjacents = "2";

                      $tickets = _query("SELECT * FROM tickets WHERE subject !='' ORDER BY id DESC LIMIT $offset, $total_records_per_page");
                      $total_records = mysqli_num_rows(_get("tickets", "subject !=''"));

                      $total_no_of_pages = ceil($total_records / $total_records_per_page);
                      $second_last = $total_no_of_pages - 1;
                  }
                  $i = 0;
                  while ($data = mysqli_fetch_assoc($tickets)) {$i++;
                      $person_id = $data['pid'];
                      $person_info = _fetch("person", "id=$person_id");

                      $item_id = $data['item_id'];
                      $service = _fetch("service", "id=$item_id");
                      ?>
                <tr class="hover:bg-gray-100">
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <input name="check_list[]" class="checkbox" type="checkbox" value="<?php echo $data['id'] ?>">
                  </td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo $data['ticket_id'] ?></td>
                  <td><img style="margin:0 auto;width:100;height:50px;object-fit:cover"
                      src="upload/<?php echo $person_info['file_name'] ?>"></td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo $person_info['name'] ?></td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo ucwords($data['type']) ?></td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo ucwords($data['subject'])?></td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"><?php $time = $data['time']; echo date("d/M/y", $time)?></td>
                  <?php if ($data['status'] == 'Pending') {?>
                  <td class="p-4 text-sm font-normal text-red-500 whitespace-nowrap lg:p-5">
                    <?php echo $data['status'] ?></td>
                  <?php } elseif ($data['status'] == 'Open') {?>
                  <td class="p-4 text-sm font-normal text-Black-500 whitespace-nowrap lg:p-5">
                    <?php echo $data['status'] ?></td>
                  <?php } else {?>
                  <td class="p-4 text-sm font-normal text-green-500 whitespace-nowrap lg:p-5">
                    <?php echo $data['status'] ?></td>
                  <?php }?>
                  <td class="text-center p-4 space-x-2 whitespace-nowrap lg:p-5">
                    <a href="view-ticket.php?ticket_id=<?php echo $data['ticket_id'] ?>"
                      class="popup_show btn bg-red-500 w-fit text-white" style="background:#4ade80;">View</a>
                    <a href="tickets.php?action=delete&&ticket_id=<?php echo $data['ticket_id'] ?>"
                      class="popup_show btn bg-red-500 w-fit text-white">Delete</a>
                    <a href="tickets.php?action=solved&&ticket_id=<?php echo $data['ticket_id'] ?>"
                      class="popup_show btn bg-red-500 w-fit text-white" style="background:#4ade80;">Solved</a>
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
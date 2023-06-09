<?php include "common/header-sidebar.php";?>
<?php

$notify_check = mysqli_num_rows(_get("cart", "status=1 AND notify='New'"));
if ($notify_check > 0) {
    $update_notify = _update("cart", "notify='Old'", "notify='New'");
    header("location:orders.php");
}

$all_item = mysqli_num_rows(_getAll("orders"));
$published_item = mysqli_num_rows(_get("orders", "status='Success'"));
$pending_item = mysqli_num_rows(_get("orders", "status='Pending'"));
?>
<div class="x_container space-y-10 py-10">
  <div class="flex flex-col rounded-lg shadow-md border border-[] shadow-gray-200 bg-white">
    <div class="overflow-x-auto rounded-lg">
      <div class="inline-block min-w-full align-middle">
        <div class="overflow-auto bg-white">
          <div style="display:flex;justify-content:space-between">
            <div style="display:flex">
              <a style="margin:15px;display:block;text-align:center;padding-top:12px;" class="input" href="orders.php">
                <i class="fa-solid fa-rotate-right"></i> Refresh</a>
            </div>

            <div>
              <form action="" method="GET">
                <div style="text-align: right;margin: 5px;padding-top: 10px;">
                  <input name="src" type="search" id="srcvalue" placeholder="Search Here..."
                    style="padding: 8px;border: 2px solid #ddd;border-radius:5px;"  value="<?php if(isset($_GET['src'])){echo $_GET['src'];}?>">
                  <button type="submit"
                    style="padding: 9px 15px;margin-right: 12px;background: #0e33f7;color:#fff;box-sizing: border-box;border-radius: 2px;">Search</button>
                </div>
              </form>
            </div>
          </div>

          <?php
            if (isset($_POST['check'])) {
                if (isset($_POST['check_list'])) {
                    $check_list = $_POST['check_list'];
                    for ($i = 0; $i < count($check_list); $i++) {
                        $delete = _delete("cart", "order_id=$check_list[$i]");
                        $delete = _delete("orders", "order_id=$check_list[$i]");
                    }
                    $msg = "Delete Successfully";
                    header("location:orders.php?msg=$msg");
                }
            }
            ?>
          <form action="" method="POST">
            <!-- Table -->
            <div class="top_link">
              <a href="orders.php">All (<?php echo $all_item ?>)</a>
              <a href="orders.php?status=Success">Success (<?php echo $published_item ?>)</a>
              <a href="orders.php?status=Pending">Pending (<?php echo $pending_item ?>)</a>
              <input type="submit" onclick="return confirm('Are you sure! Want to delte?')"  name="check" value="Delete">
            </div>
            <table class="min-w-full divide-y divide-gray-200 table-fixed">
              <thead class="bg-white">
                <tr>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                    <input id="select_all" style="background:red;padding:5px 10px;color:#fff;border-radius:2px;"
                      type="checkbox">
                  </th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Order Id</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Name</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Type</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Payment Type</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Payment Method</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Transection Id</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Amount</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Time</th>
                  <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Status</th>
                  <th scope="col" class="text-center p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                    Actions</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <?php
                  if (isset($_GET['src'])) {
                      $src = trim($_GET['src']);
                      $orders = _query("SELECT cart.*,person.*,products.* FROM cart JOIN person ON cart.pid=person.id JOIN products ON cart.cart_id = products.id
                      WHERE (
                          person.name='$src'
                      OR person.email='$src'
                      OR products.title='$src'
                      OR products.sell_price='$src'
                      )
                      ");
                  } elseif (isset($_GET['status'])) {
                      if ($_GET['status'] == 'Pending') {
                          $orders = _get("orders", "status='Pending'");
                      } else {
                          $orders = _get("orders", "status='Success'");
                      }
                  } else {
                      $pagination = "ON";
                      if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
                      $page_no = $_GET['page_no'];} else { $page_no = 1;}
                      $total_records_per_page = 10;
                      $offset = ($page_no - 1) * $total_records_per_page;
                      $previous_page = $page_no - 1;
                      $next_page = $page_no + 1;
                      $adjacents = "2";

                      $orders = _get("orders", "id !='' ORDER BY id DESC LIMIT $offset, $total_records_per_page");
                      $total_records = mysqli_num_rows(_getAll("orders", "id !=''"));

                      $total_no_of_pages = ceil($total_records / $total_records_per_page);
                      $second_last = $total_no_of_pages - 1;
                  }
                  while ($data = mysqli_fetch_assoc($orders)) {
                      $person_id = $data['pid'];
                      $person = _fetch("person", "id=$person_id");
                      ?>
                <tr class="hover:bg-gray-100">
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <input name="check_list[]" class="checkbox" type="checkbox" value="<?php echo $data['order_id'] ?>">
                  </td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo $data['order_id'] ?></td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo $person['name'] ?></td>                 
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo ucfirst($data['type']) ?></td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo strtoupper($data['pmn_type'])?></td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo $data['pmn_method'] ?></td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <?php echo $data['pmn_transection'] ?></td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    <b>$<?php echo $data['pmn_amount'] ?></b></td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                      <?php echo date("d-M-y h:ma", $data['time']); ?></td>
                  <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                    
                  <?php
                  if ($data['status'] == 'Success') {?>
                  <td class="p-4 text-sm font-normal text-green-500 whitespace-nowrap lg:p-5">
                    <?php echo $data['status'] ?></td>
                  <?php } else {?>
                  <td class="p-4 text-sm font-normal text-red-500 whitespace-nowrap lg:p-5">
                  <?php echo $data['status'] ?></td>
                  </td>
                  <?php }?>
                    
                  <td class="text-center p-4 space-x-2 whitespace-nowrap lg:p-5">
                  <a class="btn bg-blue-500 w-fit text-white" href="order-edit.php?id=<?php echo $data['id'];?>">Edit</a>
                  <button type="button" class="btn bg-red-500 w-fit text-white" onclick="delete_orders('orders','cart',<?php echo $data['order_id'];?>)">Delete</button>
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
  function delete_orders(table,table2,del_val){
      swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover data!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
        url:"config/ajax.php",
        method:"POST",
        data:
        {
          table:table,
          table2:table2,
          del_val:del_val,
        },
        success:function(data){
          swal("Success","Poof! Your imaginary file has been deleted!","success"),
          location.reload(true)
        }
      });
    }    
    });    
   }
</script>



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
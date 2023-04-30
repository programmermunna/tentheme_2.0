<?php include("common/sub-sidebar.php")?>
  <!-- Setting Content -->
  <div class="p-6 w-full">
  <?php 
      if(isset($_POST['submit'])){
        $service_page = $_POST['service_page'];
        $update = _update("pagination","service_page=$service_page","id=1");
        if($update){
          $msg = "Successfully saved";
          header("location:service-setting.php?msg=$msg");
        }
      }
      ?>
    <form class="grid grid-cols-2 gap-y-6 gap-x-12" action="" method="POST">
      <div class="col-span-2">
        <h2 class="text-xl font-semibold text-cyan-800">Service Page</h2>
      </div>
      
        <div class="flex flex-col gap-y-1">
          <label>Show Posts</label>
          <input name="service_page" type="text" class="input" value="<?php echo $pagination['service_page']?>">
          <br>
          <button name="submit" type="Submit" class="button">Update</button>
        </div>

    </form>
  </div>

</div>
<?php include("common/sub-footer.php")?>
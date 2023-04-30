<?php include("common/sub-sidebar.php")?>
  <!-- Setting Content -->
  <div class="p-6 w-full">
  <?php 
      if(isset($_POST['submit'])){
        $product_page = $_POST['product_page'];
        $update = _update("pagination","product_page=$product_page","id=1");
        if($update){
          $msg = "Successfully saved";
          header("location:product-setting.php?msg=$msg");
        }
      }
      ?>
    <form class="grid grid-cols-2 gap-y-6 gap-x-12" action="" method="POST">
      <div class="col-span-2">
        <h2 class="text-xl font-semibold text-cyan-800">Product Page</h2>
      </div>
      
        <div class="flex flex-col gap-y-1">
          <label>Show Posts</label>
          <input name="product_page" type="text" class="input" value="<?php echo $pagination['product_page']?>">
          <br>
          <button name="submit" type="Submit" class="button">Update</button>
        </div>

    </form>
  </div>

</div>
<?php include("common/sub-footer.php")?>
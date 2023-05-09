<?php include("common/sub-sidebar.php")?>
  <!-- Setting Content -->
  <div class="p-6 w-full">
  <?php 
      if(isset($_POST['submit'])){
        $blog_category = $_POST['blog_category'];
        $update = _update("pagination","blog_category=$blog_category","id=1");
        if($update){
          $msg = "Successfully saved";
          header("location:category-setting.php?msg=$msg");
        }
      }
      ?>
    <form class="grid grid-cols-2 gap-y-6 gap-x-12" action="" method="POST">
      <div class="col-span-2">
        <h2 class="text-xl font-semibold text-cyan-800">Category Page</h2>
      </div>
      
        <div class="flex flex-col gap-y-1">
          <label>Show Posts</label>
          <input name="blog_category" type="text" class="input" value="<?php echo $paginations['blog_category']?>">
          <br>
          <button name="submit" type="Submit" class="button">Update</button>
        </div>

    </form>
  </div>

</div>
<?php include("common/sub-footer.php")?>
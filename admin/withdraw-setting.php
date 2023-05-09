<?php include("common/sub-sidebar.php")?>

  <!-- Setting Content -->
  <div class="p-6 w-full">

  <?php
    if(isset($_POST['submit'])){
      $min_withdraw = $_POST['min_withdraw'];
      $max_withdraw = $_POST['max_withdraw'];

      $update = _update("limit_setting","min_withdraw = '$min_withdraw',max_withdraw = '$max_withdraw'","id=1");
      if($update){
        $msg = "Saved Successfully";
        header("location:withdraw-setting.php?msg=$msg");
      }
    }
    ?>
    <form class="grid grid-cols-2 gap-y-6 gap-x-12" action="" method="POST">
      <div class="col-span-2">
        <h2 class="text-xl font-semibold text-cyan-800">Withdraw Limit</h2>
      </div>

      <div class="flex flex-col gap-y-1">
        <label for="Minimum Withdraw">Minimum Withdraw</label>
        <input name="min_withdraw" class="input" id="Minimum Withdraw" type="number" placeholder="Minimum Withdraw"
          value="<?php echo $limit_setting['min_withdraw'] ?>" required>
      </div>

      <div class="flex flex-col gap-y-1">
        <label for="Minimum Withdraw">Maximum Withdraw</label>
        <input name="max_withdraw" class="input" id="Maximum Withdraw" type="number" placeholder="Maximum Withdraw"
          value="<?php echo $limit_setting['max_withdraw'] ?>" required>
      </div>

      <div class="col-span-2 flex justify-start">
        <div class="w-fit">
          <button name="submit" type="submit" class="button">Submit</button>
        </div>
      </div>
    </form>
  </div>

</div>
<?php include("common/sub-footer.php")?>
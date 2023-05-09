<?php include("common/sub-sidebar.php")?>
<!-- Setting Content -->
  <div class="p-6 w-full">
  <?php
    if(isset($_POST['submit'])){
      $min_deposit = $_POST['min_deposit'];
      $max_deposit = $_POST['max_deposit'];

      $update = _update("limit_setting","min_deposit = '$min_deposit',max_deposit = '$max_deposit'","id=1");
      if($update){
        $msg = "Saved Successfully";
        header("location:deposit-setting.php?msg=$msg");
      }
    }
    ?>
    <form class="grid grid-cols-2 gap-y-6 gap-x-12" action="" method="POST">
      <div class="col-span-2">
        <h2 class="text-xl font-semibold text-cyan-800">Deposit Limit</h2>
      </div>

      <div class="flex flex-col gap-y-1">
        <label for="Minimum Deposit">Minimum Deposit</label>
        <input name="min_deposit" class="input" id="Minimum Deposit" type="number" placeholder="Minimum Deposit"
          value="<?php echo $limit_setting['min_deposit'] ?>" required>
      </div>

      <div class="flex flex-col gap-y-1">
        <label for="Maximum Deposit">Maximum Deposit</label>
        <input name="max_deposit" class="input" id="Maximum Deposit" type="number" placeholder="Maximum Deposit"
          value="<?php echo $limit_setting['max_deposit'] ?>" required>
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
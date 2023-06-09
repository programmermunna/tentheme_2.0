<?php include "common/header-sidebar.php"?>
<?php include "common/setting-sidebar.php"?>

<?php
$data = _fetch("website", "id=1");

if (isset($_POST['save_logo'])) {
    $admin_logo_text = $_POST['admin_logo_text'];
    $update = _update("website", "admin_title='$admin_logo_text'", "id=1");
    if ($update) {
        $msg = "Update Successfully";
        header("location:settings.php?msg=$msg");
    } else {
        echo $err = "Something is wrong";
    }
}

?>
<div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">

  <div style="display:flex;justify-content:space-around">


    <?php
if (isset($_POST['add_logo'])) {
    $admin_file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, "upload/$admin_file_name");
    if (empty($admin_file_name)) {
        $msg = "Please Select File";
        header("location:settings.php?msg=$msg");
    } else {
        $update = _update("website", "admin_file_name='$admin_file_name'", "id=1");
        if ($update) {
            $msg = "Successfully Updated";
            header("location:settings.php?msg=$msg");
        } else {
            $err = "Something is wrong";
        }
    }
} elseif (isset($_POST['remove_logo'])) {
    $update = _update("website", "admin_file_name=''", "id=1");
    if ($update) {
        $msg = "Successfully Removed";
        header("location:settings.php?msg=$msg");
    }
}
?>
    <div>
      <form class="flex flex-col gap-6" action="" method="POST" enctype="multipart/form-data">

        <div class="flex flex-col gap-y-1">
          <label for="admin_panel_title">
            Admin Site Title/Logo
          </label>
          <input name="admin_logo_text" id="admin_panel_title" class="p-2.5 border rounded focus:ring" type="text"
            placeholder="Admin Title..." value="<?php echo $data['admin_title'] ?>">
            <button type="submit" name="save_logo" class="button">Save</button>
        </div>

        <div class="flex flex-col gap-y-1">
          <label for="logo_image">Admin Logo Image</label>
          <?php if (empty($data['admin_file_name'])) {} else {?>
          <img style="width:300px;height:100px;margin:10px auto;border-radius:10px;"
            src="upload/<?php echo $data['admin_file_name'] ?>">
          <?php }?>
          <input style="padding-top:10px" name="file" class="input" type="file" id="logo_file">
        </div>

        <div class="flex flex-col gap-y-1">
          <div class="w-fit" style="display:flex;gap:10px;padding:20px 0">
            <button type="submit" name="add_logo" class="button">Add</button>
            <button type="submit" name="remove_logo" class="button">Remove</button>
          </div>
        </div>
      </form>
    </div>

    <?php
if (isset($_POST['add_favicon'])) {
    $admin_favicon = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, "upload/$admin_favicon");
    if (empty($admin_favicon)) {
        $msg = "Please Select File";
        header("location:settings.php?msg=$msg");
    } else {
        $update = _update("website", "admin_favicon='$admin_favicon'", "id=1");
        if ($update) {
            $msg = "Successfully Updated";
            header("location:settings.php?msg=$msg");
        } else {
            $err = "Something is wrong";
        }
    }
} elseif (isset($_POST['remove_favicon'])) {
    $update = _update("website", "admin_favicon=''", "id=1");
    if ($update) {
        $msg = "Successfully Removed";
        header("location:settings.php?msg=$msg");
    }
}
?>
    <div>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
          <label for="description">Admin Favicon Icon</label>
          <?php if (empty($data['admin_favicon'])) {} else {?>
          <img style="width:300px;height:100px;margin:10px auto;border-radius:10px;"
            src="upload/<?php echo $data['admin_favicon'] ?>">
          <?php }?>
          <input style="padding-top:10px" name="file" class="input" type="file" id="logo_file">
        </div>

        <div class="col-span-2 flex justify-start">
          <div class="w-fit" style="display:flex;gap:10px;padding:20px 0">
            <button type="submit" name="add_favicon" class="button">Add</button>
            <button type="submit" name="remove_favicon" class="button">Remove</button>
          </div>
        </div>
      </form>
    </div>
  </div>





</div>
</div>
</div>
</main>

<script src="js/app.js"></script>
</body>

</html>
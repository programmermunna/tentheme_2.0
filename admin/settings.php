<?php include "common/header-sidebar.php"?>
<?php include "common/setting-sidebar.php"?>

<?php
$data = _fetch("website", "id=1");

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $logo = $_POST['logo'];
    $description = $_POST['description'];
    $keyword = $_POST['keyword'];
    $url = $_POST['url'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $footer_text = $_POST['footer_text'];
    $facebook = $_POST['facebook'];
    $youtube = $_POST['youtube'];
    $linkedin = $_POST['linkedin'];
    $update = _update("website", "title='$title',logo='$logo',description='$description',keyword='$keyword',url='$url',phone='$phone',mail='$mail',address='$address',footer_text='$footer_text',facebook='$facebook',youtube='$youtube',linkedin='$linkedin'", "id=1");

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
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, "upload/$file_name");
    if (empty($file_name)) {
        $msg = "Please Select File";
        header("location:settings.php?msg=$msg");
    } else {
        $update = _update("website", "file_name='$file_name'", "id=1");
        if ($update) {
            $msg = "Successfully Updated";
            header("location:settings.php?msg=$msg");
        } else {
            $err = "Something is wrong";
        }
    }
} elseif (isset($_POST['remove_logo'])) {
    $update = _update("website", "file_name=''", "id=1");
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
          <input id="admin_panel_title" class="p-2.5 border rounded focus:ring" type="text"
            placeholder="Admin Title...">
        </div>

        <div class="flex flex-col gap-y-1">
          <label for="logo_image">Admin Logo Image</label>
          <?php if (empty($data['file_name'])) {} else {?>
          <img style="width:300px;height:100px;margin:10px auto;border-radius:10px;"
            src="upload/<?php echo $data['file_name'] ?>">
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
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, "upload/$file_name");
    if (empty($file_name)) {
        $msg = "Please Select File";
        header("location:settings.php?msg=$msg");
    } else {
        $update = _update("website", "favicon_name='$file_name'", "id=1");
        if ($update) {
            $msg = "Successfully Updated";
            header("location:settings.php?msg=$msg");
        } else {
            $err = "Something is wrong";
        }
    }
} elseif (isset($_POST['remove_favicon'])) {
    $update = _update("website", "favicon_name=''", "id=1");
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
          <?php if (empty($data['favicon_name'])) {} else {?>
          <img style="width:300px;height:100px;margin:10px auto;border-radius:10px;"
            src="upload/<?php echo $data['favicon_name'] ?>">
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
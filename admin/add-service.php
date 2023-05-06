<?php include "common/header-sidebar.php"?>

<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $regular_price = $_POST['regular_price'];
    $sell_price = $_POST['sell_price'];
    $category = $_POST['category'];
    $mini_content = $_POST['mini_content'];
    $content = $_POST['content'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, "upload/$file_name");
    if(empty($file_name)){
      $file_name = $data['file_name'];
    }    

    $update = _update("service","pid= '$pid',title= '$title',regular_price= '$regular_price',sell_price= '$sell_price',category= '$category',mini_content= '$mini_content',content= '$content',description= '$description',status= '$status',file_name='$file_name'","id=$id");


    $insert = _insert("service", "pid, title, regular_price, sell_price, category, mini_content, content, description,status, file_name, time", "'$pid', '$title','$regular_price', '$sell_price', '$category', '$mini_content', '$content', '$description','$status','$file_name','$time'");
    if ($insert) {
      $msg = "Successfully Inserted";
      header("Location:add-service.php?msg=$msg");
  } else {
    $err = "Something is wrong!";
    header("Location:add-service.php?err=$err");
  }

}




?>
<div class="x_container space-y-10 py-10">
  <form action="" method="POST" enctype="multipart/form-data">

    <div class="pb-6">
      <h2 class="text-xl font-semibold text-cyan-800">Add Items</h2>
    </div>

    <div class="grid grid-cols-3 gap-8">


      <div class="col-span-2 space-y-6">

        <div class="flex flex-col gap-y-1">
          <label for="title">Title</label>
          <input name="title" class="input" type="text" id="Title" placeholder="Title" required>
        </div>


        <div class="flex flex-col gap-y-1">
          <label for="mini_content">Mini Content</label>
          <textarea name="mini_content" class="input p-3 min-h-[100px] summernote" type="text" id="summernote"
            placeholder="Mini Content"  required></textarea>
        </div>

        <div class="flex flex-col gap-y-1">
          <label for="content">Content</label>
          <textarea name="content" class="input p-3 min-h-[100px] summernote" type="text" id="summernote"
            placeholder="Content" required ></textarea>
        </div>

        <div>
          <label for="description">Description</label>
          <textarea name="description" class="input summernote" type="text" id="summernote" placeholder="Description"
          required ></textarea>
        </div>
      </div>

      <div class="space-y-6 bg-white shadow-xl p-6 rounded-sm">


        <div class="flex flex-col gap-y-1">
          <label for="regular_price Coin">Regular Price</label>
          <input name="regular_price" class="input" type="number" id="Regular Price" placeholder="Regular Price" required>
        </div>

        <div class="flex flex-col gap-y-1">
          <label for="sell_price">Sell Price</label>
          <input name="sell_price" class="input" type="number" id="Visitor" placeholder="Sell Price" required>
        </div>

        <div class="flex flex-col gap-y-1">
          <label for="category">Category</label>
          <select name="category" class="input" required>
            <?php $category_all = _getAll("category");
            while ($ctg = mysqli_fetch_assoc($category_all)) {?>
            <option value="<?php echo $ctg['category'] ?>"><?php echo $ctg['category'] ?></option>
            <?php }?>
          </select>
        </div>
        
        <div class="flex flex-col gap-y-1">
          <label for="product">Upload Featured Image</label>
          <input name="file" style="padding-top:10px;" class="input" type="file" required>
        </div>

        <div class="flex flex-col gap-y-1">
          <label for="status">Status</label>
            <select name="status" class="input" required>
                <option value="Pending">Pending</option>
                <option selected value="Publish">Publish</option>
            </select>
        </div>
        <br>
        <div class="col-span-2 flex justify-start">
          <div class="w-fit">
            <button name="submit" type="submit" class="button">Submit</button>
          </div>
        </div>
      </div>


    </div>


  </form>
</div>
</div>
</main>

<script>
$('.summernote').summernote({
  placeholder: 'Write Something About Product',
  tabsize: 2,
  height: 100,
  toolbar: [
    ['style', ['style']],
    ['font', ['bold', 'underline', 'clear']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['table', ['table']],
    ['insert', ['link', 'picture', 'video']],
    ['view', ['fullscreen', 'codeview', 'help']]
  ]
});
</script>
<script src="js/app.js"></script>
</body>

</html>
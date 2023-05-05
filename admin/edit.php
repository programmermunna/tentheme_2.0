<?php include "common/header-sidebar.php"?>

<?php
if(isset($_GET['src'])){
  $src = $_GET['src'];
  $table = $_GET['table'];
  $id = $_GET['id'];
  
  $data = _fetch("$table","id=$id");
  $item_id = $data['item_id'];
}else{
  header("location:index.php");
}


if (isset($_POST['submit'])) {
    $title = $_POST['title'];

    $theme_preview_link = $_POST['theme_preview_link'];
    $video_preview_link = $_POST['video_preview_link'];
    $doc_preview_link = $_POST['doc_preview_link'];

    $regular_price = $_POST['regular_price'];
    $sell_price = $_POST['sell_price'];
    $category = $_POST['category'];
    $mini_content = $_POST['mini_content'];
    $content = $_POST['content'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $pid = $person['id'];
    $rand = rand(1000,99999999);
    $time = time();
 

    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, "upload/$file_name");


    $img_count = count($_FILES['files']['name']);
    for($i=0;$i<$img_count;$i++){
    $file_name2 = $_FILES['files']['name'][$i];
    $file_tmp2 = $_FILES['files']['tmp_name'][$i];
    $file_name2 = date("d-m-Y").$file_name2;
    move_uploaded_file($file_tmp2, "upload/$file_name2");
    _insert("screenshots","item_id,title,type,time","'$rand','$file_name2','product','$time'");
    }

    $insert = _insert("products", "pid, item_id, title, regular_price, sell_price, category, mini_content, content, description,status, file_name,theme_preview_link,video_preview_link,doc_preview_link, time", "'$pid', '$rand', '$title','$regular_price', '$sell_price', '$category', '$mini_content', '$content', '$description','$status','$file_name','$theme_preview_link','$video_preview_link','$doc_preview_link', '$time'");
    if ($insert) {
        $msg = "Successfully Inserted";
        header("Location:add-product.php?msg=$msg");
    } else {
        $err = "Something is error.";
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
          <input name="title" class="input" type="text" id="Title" placeholder="Title" value="<?php echo $data['title']?>">
        </div>


        <div class="flex flex-col gap-y-1">
          <label for="mini_content">Mini Content</label>
          <textarea name="mini_content" class="input p-3 min-h-[100px] summernote" type="text" id="summernote"
            placeholder="Mini Content" ><?php echo $data['mini_content']?></textarea>
        </div>

        <div class="flex flex-col gap-y-1">
          <label for="content">Content</label>
          <textarea name="content" class="input p-3 min-h-[100px] summernote" type="text" id="summernote"
            placeholder="Content" ><?php echo $data['content']?></textarea>
        </div>

        <div>
          <label for="description">Description</label>
          <textarea name="description" class="input summernote" type="text" id="summernote" placeholder="Description"
            ><?php echo $data['description']?></textarea>
        </div>
      </div>

      <div class="space-y-6 bg-white shadow-xl p-6 rounded-sm">


        <div class="flex flex-col gap-y-1">
          <label for="regular_price Coin">Regular Price</label>
          <input name="regular_price" class="input" type="number" id="Regular Price" placeholder="Regular Price"
          value="<?php echo $data['regular_price']?>">
        </div>

        <div class="flex flex-col gap-y-1">
          <label for="sell_price">Sell Price</label>
          <input name="sell_price" class="input" type="number" id="Visitor" placeholder="Sell Price"  value="<?php echo $data['sell_price']?>">
        </div>


        <div class="flex flex-col gap-y-1">
          <label for="theme_preview_link">Live Preview Link</label>
          <input name="theme_preview_link" class="input" type="url" id="Link" placeholder="Live Preview Link"  value="<?php echo $data['theme_preview_link']?>">
        </div>

        <div class="flex flex-col gap-y-1">
          <label for="view_p_link">Video Preview Link</label>
          <input name="video_preview_link" class="input" type="url" id="Link" placeholder="Video Preview Link"  value="<?php echo $data['video_preview_link']?>">
        </div>


        <div class="flex flex-col gap-y-1">
          <label for="Documentation Link">Documentation Link</label>
          <input name="doc_preview_link" class="input" type="url" id="Link" placeholder="Documentation Link"  value="<?php echo $data['doc_preview_link']?>">
        </div>



        <div class="flex flex-col gap-y-1">
          <label for="category">Category</label>
          <select name="category" class="input">
            <?php $category_all = _getAll("category");
            while ($ctg = mysqli_fetch_assoc($category_all)) {?>
            <option value="PHP"><?php echo $ctg['category'] ?></option>
            <?php }?>
          </select>
        </div>

        <label for="product Description" id="pu">Upload Some Screenshot</label>
        <div class="flex items-center gap-4">
          <input style="padding:20px 10px;" type="file" name="files[]" multiple class="input flex h-fit py-2 items-center w-full">
        </div>
        <div class="edit_image">
        
          
        </div>
        <div style="text-align: center;opacity:.5;margin:0;">Press Double-click for Remove</div>

        <div class="flex flex-col gap-y-1">
          <label for="product">Upload Product</label>
          <input name="file" style="padding-top:10px;" class="input" type="file">
          <img style="object-fit:contain" src="upload/05-05-202317772566435.png" alt="">
        </div>

        <div class="flex flex-col gap-y-1">
          <label for="status">Status</label>
          <select name="status" class="input">
            <option value="Pending">Pending</option>
            <option value="Publish">Publish</option>
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
  function load(){
        $.ajax({
          url:"config/ajax.php",
          type:"POST",
          data:
          {
            reference:'load screenshot in admin/edit page',
            item_id:<?php echo $item_id;?>,
          },
          success:function(data){
              $(".edit_image").html(data);
          }
        });
    }
    load(); 
 
  $(document).on("dblclick",".s_img",function(e){
      e.preventDefault();
      var cr_url = e.target.src;
      cr_url = cr_url.replace("http://localhost/tentheme/admin/upload/","");
      $.ajax({
        url:"config/ajax.php",
        method:"POST",
        data:{
          reference:'remove image for product/service in admin/edit page',
          src:cr_url,
        },
        success:function(data){
          load();
        }
      });
    });


  </script>




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
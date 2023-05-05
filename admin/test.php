<?php

<?php 
          $images = _get("screenshots","item_id=$item_id");
          while($iamge = mysqli_fetch_assoc($images)){ ?>
            <img class="s_img" src="upload/<?php echo $iamge['title']?>" alt="images" >  
        <?php }?>




  
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
    





?>
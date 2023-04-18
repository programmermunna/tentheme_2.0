<?php include("common/header-sidebar.php")?>
<?php include("common/setting-sidebar.php")?>

<div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">

          <?php
          $data = _fetch("mail","id=1");

          if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = md5($_POST['pass']);
            $npass = md5($_POST['npass']);
            $cpass = md5($_POST['cpass']);

            $file_name = $_FILES['file']['name'];
            $file_tmp = $_FILES['file']['tmp_name'];
            move_uploaded_file($file_tmp,"upload/$file_name");
            
            if(empty($file_name)){
              $file_name = $person['file_name'];
            }  
            
            if($person['password'] == $pass){
              if($npass == $cpass){
                $person_update = _update("person"," name='$name', email='$email', password='$npass',file_name='$file_name'","id=$id");                
              }
            }else{
              $person_update = _update("person"," name='$name', email='$email',file_name='$file_name'","id=$id");
            }
            
            if($person_update){
              $msg = "Successfully Updated";
              header("location:profile.php?msg=$msg");
            }else{
              echo "error";
            }
          }
          ?>
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="grid grid-cols-2 gap-y-8 gap-x-12">
              <div class="col-span-2">
                <h2 class="text-xl font-semibold text-cyan-800">Profile Information</h2>
              </div>
            </div>
            <br>

            <div>        
              <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
                <label for="name">Name</label>
                <input name="name" class="input" type="text" id="name" placeholder="Enter Your Name" required value="<?php echo $person['name']?>">
              </div>
              <br>
              <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
                <label for="email">Email</label>
                <input name="email" class="input" type="email" id="email" placeholder="Enter Your Name" required value="<?php echo $person['email']?>">
              </div>
              <br>
              <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
                <label for="password">Old Password</label>
                <input name="pass" class="input" type="password" id="password" placeholder="*****" >
              </div>
              <br>
              <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
                <label for="npass">New Password</label>
                <input name="npass" class="input" type="password" id="npass" placeholder="*****" >
              </div>
              <br>
              <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
                <label for="cpass">Confirm Password</label>
                <input name="cpass" class="input" type="password" id="cpass" placeholder="*****" >
              </div>
              <br>
              <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
                <label for="name">Upload Image</label>
                <input name="file" class="input" type="file" id="file" >
              </div>
              <br>
              <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
                <label for="name">Upload Image</label>
                <img style="width: 100px;" src="upload/<?php echo $person['file_name']?>" alt="image">
              </div>
              <br>

              <div class="col-span-2 flex justify-start">
                <div class="w-fit">
                  <button name="submit" type="submit" class="button">Submit</button>
                </div>
              </div>     
            </div>
        </form>


        </div>
      </div>
    </div>
  </main>

  <script src="js/app.js"></script>
</body>

</html>
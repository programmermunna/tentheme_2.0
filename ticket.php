<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->

    <!-- Sub Header -->
    <div class="container space-y-6 pt-6 pb-12 lg:py-24">

      <!-- Page Name Title -->
      <h3 class="text-4xl font-medium tracking-wide">
        Ticket
      </h3>

      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="ticket.php"> ticket
        </a>

      </div>

    </div>
  </header>

  <main style="min-height: calc(100vh - 80px)">
    <div class="flex items-start py-16">
      <div class="container flex flex-col lg:flex-row gap-y-5 lg:gap-y-0 lg:gap-x-5">

        <!-- Dashboard Sidebar -->
        <?php include("common/dashboad_sidebar.php");?>
        <!-- Dashboard Sidebar -->

        <!-- Body Content -->
        <div class="w-full bg-white shadow rounded-sm">

          <div class="px-5 py-4 text-blue-600 border-b flex justify-between items-center">
            <span class="text-2xl font-medium tracking-wide">Add new ticket!</span>
          </div>

          <?php
          if(isset($_POST['submit'])){
            $subject = $_POST['subject'];
            $type = $_POST['type'];
            $item_id = $_POST['item'];
            $message = $_POST['textarea'];
            $ticket_id = rand(1000,10000000);

            if(!empty($item_id)){

              $icon = '<i class="fa-solid fa-ticket"></i>';
              $title = 'Created a new Ticket';
              $activitie = _insert("activities","pid,icon,title,time","'$id','$icon','$title','$time'");

              $insert = _insert("tickets","ticket_id,uid,pid,item_id,subject,type,message,time","'$ticket_id','$id','$id','$item_id','$subject','$type','$message','$time'");
              if($insert){
                $msg = "Successfully Created a new Ticket";
                header("location:tickets.php?msg=$msg");
              }
            }else{
              $err = "Please Purchase First";
              header("location:tickets.php?err=$err");
            }

          }
          ?>
          <form class="grid grid-cols-12 gap-y-6 p-5" action="" method="POST" enctype="multipart/form-data">
            <div class="col-span-12"><label class="mb-2 block" for="subject">Subject</label>
              <input name="subject" required="" type="text" placeholder="Subject..."
                class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4"
                id="subject">
            </div>


            <div class="col-span-12"><label class="mb-2 block" for="subject">Select Item</label>
              <select name="type" id="select" required
                class="border-8 border-white bg-white ring-2 ring-gray-200 focus:ring-blue-600 w-full h-11 rounded outline-none">
                <option selected style="display:none;">Select</option>
                <option value="product">Product</option>
                <option value="service">Service</option>
              </select>
            </div>


            <div class="col-span-12">
              <select name="item" id="item" required
                class="border-8 border-white bg-white ring-2 ring-gray-200 focus:ring-blue-600 w-full h-11 rounded outline-none">
                
              </select>
            </div>


            <div class="col-span-12"><label class="mb-2 block" for="message">Your Message</label>
              <textarea name="textarea" required="" type="text" placeholder="Message..."
                class="w-full min-h-[100px] p-3 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4 summernote"
                value="" id="message"></textarea>
            </div>

            <div class="col-span-12">
              <div class="w-fit">
                <button type="submit" name="submit"
                  class="flex items-center justify-center px-4 gap-x-4 bg-blue-600 text-white focus:ring rounded w-full h-11 tracking-wider font-medium text-base">
                  Submit
                </button>
              </div>
            </div>
          </form>

        </div>

      </div>
    </div>
  </main>
  <script>
    $(document).ready(function(){  
      $("#item").hide();

      $("#select").on("change",function(){
        var item_name = $(this).val();
        $.ajax({
            url:"admin/config/ajax.php",
            type:"POST",
            data:
            {
              reference:"show product or service in ticket page",
              item_name:item_name,
              pid:<?php echo $id?>,
            },         
            success:function(data){
              $("#item").slideDown();
              $("#item").html(data);
              }
            });
        })

    })
</script>




  <script>
  $('.summernote').summernote({
        placeholder: 'Write Something About Service',
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


  <!-- Header area -->
  <?php include("common/footer.php");?>
<!-- Header area -->


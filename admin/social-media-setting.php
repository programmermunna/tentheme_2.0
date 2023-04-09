<?php include "common/header-sidebar.php"?>

<?php
$data = _fetch("website", "id=1");

if (isset($_POST['submit'])) {

    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $facebook = $_POST['facebook'];
    $youtube = $_POST['youtube'];
    $linkedin = $_POST['linkedin'];
    $update = _update("website", "phone='$phone',mail='$mail',address='$address',facebook='$facebook',youtube='$youtube',linkedin='$linkedin'", "id=1");

    if ($update) {
        $msg = "Update Successfully";
        header("location:social-settings.php?msg=$msg");
    } else {
        echo $err = "Something is wrong";
    }
}

?>



<div class="flex flex-col lg:flex-row p-12">

  <div class="bg-white px-5 rounded-sm shadow w-full lg:w-[350px] py-6">
    <div class="sidebar_item overflow-hidden">
      <button class="ds_title ds_title2  text-base font-normal w-full flex justify-between pb-1.5"
        data-ref="management">
        <span class="block text-base font-2">management</span>
        <span class="text-xs opacity-50 transition-all">
          <i class="fa-solid fa-chevron-down"></i>
        </span>
      </button>
      <ul class="ds_div ds_div2  transition-all" data-ref="management">
        <li>
          <a href="./deposit-setting.php"
            class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
            <span class="text-xs"><i class="fa-solid fa-folder"></i>
            </span>
            <span>Deposit </span>
          </a>
        </li>
        <li>
          <a href="./withdraw-setting.php"
            class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
            <span class="text-xs"><i class="fa-solid fa-folder"></i>
            </span>
            <span>Withdraw</span>
          </a>
        </li>

      </ul>
    </div>
    <hr class="my-2" />


    <div class="sidebar_item overflow-hidden">
      <button class="ds_title ds_title2 text-base font-normal w-full flex justify-between pb-1.5"
        data-ref="blog & pages">
        <span class="block text-base font-2">blog & pages</span>
        <span class="text-xs opacity-50 transition-all">
          <i class="fa-solid fa-chevron-down"></i>
        </span>
      </button>
      <ul class="ds_div ds_div2  transition-all" data-ref="blog & pages">


        <li>
          <a href="post-page-setting.php"
            class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
            <span class="text-xs"><i class="fa-solid fa-folder"></i>
            </span>
            <span>Post Page</span>
          </a>
        </li>

        <li>
          <a href="./category-setting.php"
            class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
            <span class="text-xs"><i class="fa-solid fa-folder"></i>
            </span>
            <span>Category</span>
          </a>
        </li>

        <li>
          <a href="./search-setting.php"
            class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
            <span class="text-xs"><i class="fa-solid fa-folder"></i>
            </span>
            <span>Search</span>
          </a>
        </li>

        <li>
          <a href="./single-post-setting.php"
            class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
            <span class="text-xs"><i class="fa-solid fa-folder"></i>
            </span>
            <span>Single Post</span>
          </a>
        </li>


      </ul>
    </div>

    <hr class="my-2" />
    <div class="sidebar_item overflow-hidden">
      <button class="ds_title ds_title2 text-base font-normal w-full flex justify-between pb-1.5"
        data-ref="product & service">
        <span class="block text-base font-2">Shop</span>
        <span class="text-xs opacity-50 transition-all">
          <i class="fa-solid fa-chevron-down"></i>
        </span>
      </button>
      <ul class="ds_div ds_div2  transition-all" data-ref="product & service">

        <li>
          <a href="./product-setting.php"
            class="ext-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
            <span class="text-xs"><i class="fa-solid fa-folder"></i>
            </span>
            <span>Product</span>
          </a>
        </li>
        <li>
          <a href="./service-setting.php"
            class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
            <span class="text-xs"><i class="fa-solid fa-folder"></i>
            </span>
            <span>Service</span>
          </a>
        </li>

      </ul>
    </div>

    <hr class="my-2" />
    <div class="sidebar_item overflow-hidden">
      <button class="ds_title ds_title2 text-base font-normal w-full flex justify-between pb-1.5"
        data-ref="theme setting">
        <span class="block text-base font-2">theme setting</span>
        <span class="text-xs opacity-50 transition-all">
          <i class="fa-solid fa-chevron-down"></i>
        </span>
      </button>
      <ul class="ds_div ds_div2  transition-all" data-ref="theme setting">

        <li>
          <a href="./site-and-identity-setting.php"
            class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
            <span class="text-xs"><i class="fa-solid fa-folder"></i>
            </span>
            <span>Logo & Site Identity</span>
          </a>
        </li>
        <li>
          <a href="./general-setting.php"
            class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
            <span class="text-xs"><i class="fa-solid fa-folder"></i>
            </span>
            <span>Other Settings</span>
          </a>
        </li>
        <li>
          <a href="./header-settings.php"
            class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
            <span class="text-xs"><i class="fa-solid fa-folder"></i>
            </span>
            <span>Header</span>
          </a>
        </li>
        <li>
          <a href="./footer-settings.php"
            class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
            <span class="text-xs"><i class="fa-solid fa-folder"></i>
            </span>
            <span>Footer</span>
          </a>
        </li>
        <li>
          <a href="./social-media-setting.php"
            class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
            <span class="text-xs"><i class="fa-solid fa-folder"></i>
            </span>
            <span>Social Media Setting</span>
          </a>
        </li>


        <li>
          <a href="./seo-setting.php"
            class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
            <span class="text-xs"><i class="fa-solid fa-folder"></i>
            </span>
            <span>SEO</span>
          </a>
        </li>
      </ul>
    </div>

    <hr class="my-2" />

    <div class="sidebar_item overflow-hidden">
      <button class="ds_title ds_title2  text-base font-normal w-full flex justify-between pb-1.5" data-ref="marketing">
        <span class="block text-base font-2">marketing</span>
        <span class="text-xs opacity-50 transition-all">
          <i class="fa-solid fa-chevron-down"></i>
        </span>
      </button>
      <ul class="ds_div ds_div2  transition-all" data-ref="marketing">


        <li>
          <a href="./reseller-setting.php"
            class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
            <span class="text-xs"><i class="fa-solid fa-folder"></i>
            </span>
            <span> Reseller Setting </span>
          </a>
        </li>
        <li>
          <a href="./investor-setting.php"
            class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
            <span class="text-xs"><i class="fa-solid fa-folder"></i>
            </span>
            <span>Investor Setting</span>
          </a>
        </li>

      </ul>
    </div>

  </div>

  <!-- Setting Content -->



  <div class="px-6 w-full">

    <div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">
      <form action="" method="POST" class="grid grid-cols-2 gap-y-6 gap-x-12">
        <div class="col-span-2">
          <h2 class="text-xl font-semibold text-cyan-800">Social Setting</h2>
        </div>


        <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
          <label for="phone">Phone</label>
          <input name="phone" class="input" type="text" id="phone" placeholder="Phone number" required
            value="<?php echo $data['phone'] ?>">
        </div>


        <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
          <label for="mail">Mail</label>
          <input name="mail" class="input" type="text" id="mail" placeholder="Mail" required
            value="<?php echo $data['mail'] ?>">
        </div>


        <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
          <label for="address">Address</label>
          <input name="address" class="input" type="text" id="address" placeholder="Address" required
            value="<?php echo $data['address'] ?>">
        </div>


        <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
          <label for="footer_text">Fotter Text</label>
          <input name="footer_text" class="input" type="text" id="footer_text" placeholder="Footer Text" required
            value="<?php echo $data['footer_text'] ?>">
        </div>


        <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
          <label for="facebook">Facebook</label>
          <input name="facebook" class="input" type="text" id="facebook" placeholder="Facebook Page" required
            value="<?php echo $data['facebook'] ?>">
        </div>


        <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
          <label for="youtube">Youtube</label>
          <input name="youtube" class="input" type="text" id="youtube" placeholder="Youtube Channel" required
            value="<?php echo $data['youtube'] ?>">
        </div>

        <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
          <label for="linkedin">Linkedin</label>
          <input name="linkedin" class="input" type="text" id="linkedin" placeholder="Linkedin Page" required
            value="<?php echo $data['linkedin'] ?>">
        </div>

        <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
          <label for="linkedin">Twitter</label>
          <input name="twitter" class="input" type="text" id="twitter" placeholder="Twitter" required value="twitter">
        </div>

        <div class="col-span-2 flex justify-start">
          <div class="w-fit">
            <button type="submit" name="submit" class="button">Save</button>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>



</div>





</main>

<script src="js/app.js"></script>
</body>

</html>
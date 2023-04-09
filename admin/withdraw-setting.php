<?php include "common/header-sidebar.php"?>

<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['header_social_link'])) {$header_social_link = "checked";} else { $header_social_link = "unchecked";}
    if (isset($_POST['review_product'])) {$review_product = "checked";} else { $review_product = "unchecked";}
    if (isset($_POST['share_product'])) {$share_product = "checked";} else { $share_product = "unchecked";}
    if (isset($_POST['related_product'])) {$related_product = "checked";} else { $related_product = "unchecked";}
    if (isset($_POST['review_service'])) {$review_service = "checked";} else { $review_service = "unchecked";}
    if (isset($_POST['share_service'])) {$share_service = "checked";} else { $share_service = "unchecked";}
    if (isset($_POST['related_service'])) {$related_service = "checked";} else { $related_service = "unchecked";}
    if (isset($_POST['ad_show'])) {$ad_show = "checked";} else { $ad_show = "unchecked";}
    if (isset($_POST['team_social'])) {$team_social = "checked";} else { $team_social = "unchecked";}

    $update = _update("general_setting", "header_social_link='$header_social_link',review_product='$review_product',share_product='$share_product',related_product='$related_product',review_service='$review_service',share_service='$share_service',related_service='$related_service',ad_show='$ad_show',team_social='$team_social'", "id=1");

    if ($update) {
        $msg = " Seved Successfully";
        header("location:general-settings.php?msg=$msg");
    } else {
        echo $err = "erorr";
    }
}

$general_setting = _fetch("general_setting", "id=1");
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
  <div class="p-6 w-full">

    <form class="grid grid-cols-2 gap-y-6 gap-x-12" action="" method="POST">
      <div class="col-span-2">
        <h2 class="text-xl font-semibold text-cyan-800">Withdraw Limit</h2>
      </div>

      <div class="flex flex-col gap-y-1">
        <label for="Minimum Withdraw">Minimum Withdraw</label>
        <input name="Withdraw" class="input" id="Minimum Withdraw" type="number" placeholder="Minimum Withdraw"
          value="<?php echo $limit['deposit'] ?>" required>
      </div>

      <div class="flex flex-col gap-y-1">
        <label for="Minimum Withdraw">Minimum Withdraw</label>
        <input name="withdraw" class="input" id="Minimum Withdraw" type="number" placeholder="Minimum Withdraw"
          value="<?php echo $limit['withdraw'] ?>" required>
      </div>

      <div class="col-span-2 flex justify-start">
        <div class="w-fit">
          <button name="submit" type="submit" class="button">Submit</button>
        </div>
      </div>
    </form>
  </div>

</div>


</main>

<script src="js/app.js"></script>
</body>

</html>
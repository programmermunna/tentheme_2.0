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
  <div class="px-6 w-full">
    <div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">
      <form action="" method="POST">

        <div><b>Header Settings</b></div>
        <div class="general_setting">
          <ul>
            <li>
              <h3><b>Visible or Invisible Your <span style="color:green">Header Social Link </span></b></h3>
              <label>
                <input name="header_social_link"
                  <?php if (isset($general_setting['header_social_link'])) {echo $general_setting['header_social_link'];}?>
                  type="checkbox">
                <span class="toggle_background">
                  <div class="circle-icon"></div>
                  <div class="vertical_line"></div>
                </span>
              </label>
            </li>
          </ul>
        </div>
        <br>

        <div><b>Products Settings</b></div>
        <div class="general_setting">
          <ul>
            <li>
              <h3><b>Visible or Invisible Your Riveiw System For <span style="color:green">Product</span></b></h3>
              <label>
                <input name="review_product"
                  <?php if (isset($general_setting['review_product'])) {echo $general_setting['review_product'];}?>
                  type="checkbox">
                <span class="toggle_background">
                  <div class="circle-icon"></div>
                  <div class="vertical_line"></div>
                </span>
              </label>
            </li>
          </ul>
        </div>


        <div class="general_setting">
          <ul>
            <li>
              <h3><b>Visible or Invisible <span style="color:green">Product Share Link </span></b></h3>
              <label>
                <input name="share_product"
                  <?php if (isset($general_setting['share_product'])) {echo $general_setting['share_product'];}?>
                  type="checkbox">
                <span class="toggle_background">
                  <div class="circle-icon"></div>
                  <div class="vertical_line"></div>
                </span>
              </label>
            </li>
          </ul>
        </div>


        <div class="general_setting">
          <ul>
            <li>
              <h3><b>Visible or Invisible <span style="color:green">Related Product</span> IN The Single Product</b>
              </h3>
              <label>
                <input name="related_product"
                  <?php if (isset($general_setting['related_product'])) {echo $general_setting['related_product'];}?>
                  type="checkbox">
                <span class="toggle_background">
                  <div class="circle-icon"></div>
                  <div class="vertical_line"></div>
                </span>
              </label>
            </li>
          </ul>
        </div>
        <br>

        <div><b>Services Settings</b></div>
        <div class="general_setting">
          <ul>
            <li>
              <h3><b>Visible or Invisible Your Riveiw System For <span style="color:green">Service</span></b></h3>
              <label>
                <input name="review_service"
                  <?php if (isset($general_setting['review_service'])) {echo $general_setting['review_service'];}?>
                  type="checkbox">
                <span class="toggle_background">
                  <div class="circle-icon"></div>
                  <div class="vertical_line"></div>
                </span>
              </label>
            </li>
          </ul>
        </div>

        <div class="general_setting">
          <ul>
            <li>
              <h3><b>Visible or Invisible <span style="color:green">Service Share Link </span></b></h3>
              <label>
                <input name="share_service"
                  <?php if (isset($general_setting['share_service'])) {echo $general_setting['share_service'];}?>
                  type="checkbox">
                <span class="toggle_background">
                  <div class="circle-icon"></div>
                  <div class="vertical_line"></div>
                </span>
              </label>
            </li>
          </ul>
        </div>

        <div class="general_setting">
          <ul>
            <li>
              <h3><b>Visible or Invisible <span style="color:green">Related Service</span> IN The Single Service</b>
              </h3>
              <label>
                <input name="related_service"
                  <?php if (isset($general_setting['related_service'])) {echo $general_setting['related_service'];}?>
                  type="checkbox">
                <span class="toggle_background">
                  <div class="circle-icon"></div>
                  <div class="vertical_line"></div>
                </span>
              </label>
            </li>
          </ul>
        </div>
        <br>


        <div><b>Ad Settings</b></div>
        <div class="general_setting">
          <ul>
            <li>
              <h3><b>Visible or Invisible <span style="color:green">Ads In Website </span></b></h3>
              <label>
                <input name="ad_show"
                  <?php if (isset($general_setting['ad_show'])) {echo $general_setting['ad_show'];}?> type="checkbox">
                <span class="toggle_background">
                  <div class="circle-icon"></div>
                  <div class="vertical_line"></div>
                </span>
              </label>
            </li>
          </ul>
        </div>
        <br>

        <div><b>Team Social Setting</b></div>
        <div class="general_setting">
          <ul>
            <li>
              <h3><b>Visible or Invisible <span style="color:green">Social Icons</span></b></h3>
              <label>
                <input name="team_social"
                  <?php if (isset($general_setting['team_social'])) {echo $general_setting['team_social'];}?>
                  type="checkbox">
                <span class="toggle_background">
                  <div class="circle-icon"></div>
                  <div class="vertical_line"></div>
                </span>
              </label>
            </li>
          </ul>
        </div>
        <br>
        <div class="col-span-2 flex justify-start">
          <div class="w-fit">
            <button type="submit" name="submit" class="button">Save</button>
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
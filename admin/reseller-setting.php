<?php include "common/header-sidebar.php"?>
<?php $reseller_docs = _fetch("reseller_docs", "id=1");?>



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
      <?php if (isset($_POST['discount_btn'])) {
    $discount = $_POST['discount'];
    $update = _update("reseller_docs", "discount='$discount'", "id=1");
    if ($update) {
        header("location:reseller-setting.php?msg=Successfully Updated");
    }
}
?>
      <form class="space-y-6" action="" method="POST">
        <div class="flex flex-col gap-y-1">
          <label for="reseller_discount">Reseller Discount (As %)</label>
          <input type="number" name="discount" class="input" placeholder="10"
            value="<?php echo $reseller_docs['discount'] ?>">
        </div>

        <div class="col-span-2 flex justify-start">
          <div class="w-fit">
            <button type="submit" name="discount_btn" class="button">Submit</button>
          </div>
        </div>
      </form>

      <hr class="my-6" />

      <?php if (isset($_POST['before_btn'])) {
    $textarea = $_POST['textarea'];
    $update = _update("reseller_docs", "before_submit='$textarea'", "id=1");
    if ($update) {
        header("location:reseller-setting.php?msg=Successfully Updated");
    }
}
?>
      <form class="space-y-6" action="" method="POST">
        <div class="flex flex-col gap-y-1">
          <label for="reseller_terms">Before Submit Text (Reseller Terms)</label>
          <textarea class="summernote" name="textarea" required><?php echo $reseller_docs['before_submit'] ?></textarea>
        </div>

        <div class="col-span-2 flex justify-start">
          <div class="w-fit">
            <button type="submit" name="before_btn" class="button">Submit</button>
          </div>
        </div>
      </form>

      <hr class="my-6" />

      <?php if (isset($_POST['after_btn'])) {
    $textarea = $_POST['textarea'];
    $update = _update("reseller_docs", "after_submit='$textarea'", "id=1");
    if ($update) {
        header("location:reseller-setting.php?msg=Successfully Updated");
    }
}
?>
      <form class="space-y-6" action="" method="POST">
        <div class="flex flex-col gap-y-1">
          <label for="after_submit">After Submit Text</label>
          <textarea class="summernote" name="textarea" required><?php echo $reseller_docs['after_submit'] ?></textarea>
        </div>

        <div class="col-span-2 flex justify-start">
          <div class="w-fit">
            <button type="submit" name="after_btn" class="button">Submit</button>
          </div>
        </div>
      </form>

      <hr class="my-6" />

      <?php if (isset($_POST['accept_btn'])) {
    $textarea = $_POST['textarea'];
    $update = _update("reseller_docs", "accept_submit='$textarea'", "id=1");
    if ($update) {
        header("location:reseller-setting.php?msg=Successfully Updated");
    }
}
?>
      <form class="space-y-6" action="" method="POST">
        <div class="flex flex-col gap-y-1">
          <label for="accept_submit">Aprove Text</label>
          <textarea class="summernote" name="textarea" required><?php echo $reseller_docs['accept_submit'] ?></textarea>
        </div>

        <div class="col-span-2 flex justify-start">
          <div class="w-fit">
            <button type="submit" name="accept_btn" class="button">Submit</button>
          </div>
        </div>
      </form>

      <hr class="my-6" />

      <?php if (isset($_POST['reject_btn'])) {
    $textarea = $_POST['textarea'];
    $update = _update("reseller_docs", "reject_submit='$textarea'", "id=1");
    if ($update) {
        header("location:reseller-setting.php?msg=Successfully Updated");
    }
}
?>
      <form class="space-y-6" action="" method="POST">
        <div class="flex flex-col gap-y-1">
          <label for="reject_submit">Before Submit Text (Reseller Terms)</label>
          <textarea class="summernote" name="textarea" required><?php echo $reseller_docs['reject_submit'] ?></textarea>
        </div>

        <div class="col-span-2 flex justify-start">
          <div class="w-fit">
            <button type="submit" name="reject_btn" class="button">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</main>

<script>
$('.summernote').summernote({
  placeholder: 'Write Something About Service',
  tabsize: 2,
  height: 200,
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
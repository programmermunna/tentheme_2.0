<?php include("common/sub-sidebar.php")?>

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


  <!-- Setting Content -->
  <div class="p-6 w-full">


    <h1 class="text-xl font-semibold">Header Setting</h1>
    <br>




    <div style="display:flex;justify-content:space-between;" class="py-12 flex gap-4">
      <input id="f4_title" type="text" class="input" placeholder="Enter Title">
      <input id="f4_url" type="text" class="input" placeholder="Enter URL">
      <button id="f4_btn" class="button">Add Now</button>
    </div>


    <table class="min-w-full divide-y divide-gray-200 table-fixed" style="width:80%;padding:50px 100px">
      <thead class="bg-white">
        <tr>
          <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Title</th>
          <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">URL</th>
          <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Status</th>
          <th scope="col" class="text-center p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
            Actions
          </th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200 f4_load">
        <tr class="hover:bg-gray-100 f4_load">
          <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">Join Investor</td>
          <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">Join Investor</td>
          <td class="p-4 text-sm font-bold text-green-500 whitespace-nowrap lg:p-5">Publish</td>
          <td class="text-center p-4 space-x-2 whitespace-nowrap lg:p-5">
            <a href="footer-edit.php?f_id=38" class="popup_show btn bg-red-500 w-fit text-white"
              style="background:#4ade80;">Edit</a>
              <button type="button" class="btn bg-red-500 w-fit text-white" onclick="delete_alert('deposit',<?php echo $data['id'];?>)">Delete</button>
          </td>
        </tr>
        <tr class="hover:bg-gray-100 f4_load">
          <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">Join Reseller</td>
          <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">Join Reseller</td>
          <td class="p-4 text-sm font-bold text-green-500 whitespace-nowrap lg:p-5">Publish</td>
          <td class="text-center p-4 space-x-2 whitespace-nowrap lg:p-5">
            <a href="footer-edit.php?f_id=39" class="popup_show btn bg-red-500 w-fit text-white"
              style="background:#4ade80;">Edit</a>
            <a href="delete.php?src=footer-settings&amp;&amp;table=footer_3_4_5&amp;&amp;id=39"
              class="popup_show btn bg-red-500 w-fit text-white">Delete</a>
          </td>
        </tr>
        <tr class="hover:bg-gray-100 f4_load">
          <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">shamimlem@yahoo.com</td>
          <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">shamimlem@yahoo.com</td>
          <td class="p-4 text-sm font-bold text-green-500 whitespace-nowrap lg:p-5">Publish</td>
          <td class="text-center p-4 space-x-2 whitespace-nowrap lg:p-5">
            <a href="footer-edit.php?f_id=40" class="popup_show btn bg-red-500 w-fit text-white"
              style="background:#4ade80;">Edit</a>
            <a href="delete.php?src=footer-settings&amp;&amp;table=footer_3_4_5&amp;&amp;id=40"
              class="popup_show btn bg-red-500 w-fit text-white">Delete</a>
          </td>
        </tr>
        <tr class="hover:bg-gray-100 f4_load">
          <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">+880 1719-182586</td>
          <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">+880 1719-182586</td>
          <td class="p-4 text-sm font-bold text-green-500 whitespace-nowrap lg:p-5">Publish</td>
          <td class="text-center p-4 space-x-2 whitespace-nowrap lg:p-5">
            <a href="footer-edit.php?f_id=41" class="popup_show btn bg-red-500 w-fit text-white"
              style="background:#4ade80;">Edit</a>
            <a href="delete.php?src=footer-settings&amp;&amp;table=footer_3_4_5&amp;&amp;id=41"
              class="popup_show btn bg-red-500 w-fit text-white">Delete</a>
          </td>
        </tr>


      </tbody>
    </table>


  </div>

</div>
<?php include("common/sub-footer.php")?>
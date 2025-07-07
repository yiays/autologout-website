<?php
$title = "AutoLogout Manager";
include('../includes/header.php');
?>
<p class="lead">
  AutoLogout Manager is an app that enables you to link to and remotely manage any accounts that
  have AutoLogout installed.
</p>

<div class="autohide-panel" id="android">
  <div class="panel-header">
    <span class="autohide-show">&gt;</span>
    <a href="#" class="autohide-hide">&darr;</a>
    <a class="autohide-button" href="#android">
      Install on Android
    </a>
  </div>
  <div class="panel-content">
    <p>
      The app is currently in the review process and is not yet available to download. Check back here
      later!
    </p>
    <!--<p>You can install AutoLogout manager using any of the following methods;</p>
    <ul>
      <li><a href="https://play.google.com/store/apps/details?id=com.yiays.autologoutmanager">Google Play Store</a></li>
      <li><a href="https://f-droid.org/en/packages/com.yiays.autologoutmanager">F-Droid</a></li>
    </ul>-->
  </div>
</div>

<div class="autohide-panel" id="ios">
  <div class="panel-header">
    <span class="autohide-show">&gt;</span>
    <a href="#" class="autohide-hide">&darr;</a>
    <a class="autohide-button" href="#ios">
      Install on iOS / iPadOS
    </a>
  </div>
  <div class="panel-content">
    <p>
      The costs associated are currently too high to release an App Store version. Consider
      <a href="https://patreon.com/yiays" target="_blank">supporting me on Patreon</a> if you would
      like to see this.
    </p>
  </div>
</div>

<h3>Screenshots</h3>
<div class="carousel">
  <img src="/img/app_screenshot_1.jpg" alt="Screenshot of landing page of AutoLogout Manager app" width="530" height="1080">
  <img src="/img/app_screenshot_2.jpg" alt="Screenshot of list of connected computers in the app" width="530" height="1080">
  <img src="/img/app_screenshot_3.jpg" alt="Screenshot of computer properties you can control within the app" width="530" height="1080">
  <img src="/img/app_screenshot_4.jpg" alt="Screenshot of instructions on how to add computers to the app" width="530" height="1080">
</div>

<script type="text/javascript">
  // If the url is extended at all, attempt to redirect to the AutoLogout Manager app
  if (window.location.pathname.length > 5 || window.location.search) {
    // Construct the deep link URL
    const deepLinkUrl = `autologoutmanager://${window.location.pathname.slice(5)}${window.location.search}`;
    // Redirect to the deep link
    window.location.href = deepLinkUrl;
  }
</script>
<?php
include('../includes/footer.php')
?>
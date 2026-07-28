<?php
$title = "AutoLogout Manager";
include('../includes/header.php');
?>
<p class="lead">
  AutoLogout Manager is an app that enables you to link to and remotely manage any accounts that
  have AutoLogout installed.
</p>
<p class="show-win show-mac show-linux">
  Looking for the PC app?&nbsp;<a href="/download/#stable">Click here</a>.
</p>

<div class="autohide-panel" id="android">
  <a href="#android" class="panel-header autohide-show">
    <span>&gt;</span>
    Install on Android
  </a>
  <a href="#" class="panel-header autohide-hide">
    <span>&darr;</span>
    Install on Android
  </a>
  <div class="panel-content">
    <strong>Google Play Store <span class="rec">recommended</span></strong>
    <p>
      AutoLogout Manager has launched on the Google Play store! Download it from there for the best experience.
    </p>
    <a class="btn" href="https://play.google.com/store/apps/details?id=com.yiays.autologoutmanager" target="_blank">
      Install with Google Play Store
    </a>
    <hr>

    <!--
    <strong>F-Droid</strong>
    <a class="btn" href="https://f-droid.org/en/packages/com.yiays.autologoutmanager" target="_blank">
      Install with F-Droid
    </a>
    <hr>
    -->

    <strong><i>Sideload <span class="rec">advanced</span></i></strong>
    <p>
      If you are comfortable with sideloading and manually checking for updates, you can install
      the app via sideloading.
    </p>
    <a class="btn secondary" href="https://github.com/yiays/AutoLogout-Manager/releases/latest/download/AutoLogout-Manager.apk" target="_blank">
      Download APK from GitHub
    </a>
    <hr>

    <strong>AutoLogout is open source</strong>
    <p>
      Feel free to browse the source code and build from scratch.
    </p>
    <a class="btn secondary" href="https://github.com/yiays/AutoLogout-Manager" target="_blank">
      View source code
    </a>
  </div>
</div>

<div class="autohide-panel" id="ios">
  <a href="#ios" class="panel-header autohide-show">
    <span>&gt;</span>
    Install on iOS / iPadOS
  </a>
  <a href="#" class="panel-header autohide-hide">
    <span>&darr;</span>
    Install on iOS / iPadOS
  </a>
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
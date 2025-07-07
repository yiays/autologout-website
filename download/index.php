<?php
$title = "Download";
include('../includes/header.php');
?>
<p class="lead">
  AutoLogout adds simple parental controls to a Windows account.
</p>

<div class="autohide-panel" id="stable">
  <a href="#stable" class="panel-header autohide-show">
    <span>&gt;</span>
    Install AutoLogout Preview
  </a>
  <a href="#" class="panel-header autohide-hide">
    <span>&darr;</span>
    Install AutoLogout Preview
  </a>
  <div class="panel-content">
    <strong>Portable</strong>
    <p>
      With a portable installation, you will need to find a place to keep the application. You will
      also need to add a startup shortcut yourself.
    </p>
    <a class="btn" href="https://github.com/yiays/AutoLogout/releases/latest" target="_blank">
      Download from GitHub
    </a>
    <br>
    <a class="btn secondary" href="https://github.com/yiays/AutoLogout" target="_blank">
      View source code
    </a>
  </div>
</div>

<h3>Screenshots</h3>
<div class="carousel">
  <img
    src="/img/client.png" width="509" height="364"
    alt="Screenshot of AutoLogout with a 2 hour time limit"
    style="box-shadow: none"
  >
  <img
    src="/img/client-controlpanel.png" width="632" height="563"
    alt="Screenshot of AutoLogout settings, shows usage, time limits, downtime controls."
    style="box-shadow: none"
  >
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
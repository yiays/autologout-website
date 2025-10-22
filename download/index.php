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
    Install AutoLogout Stable
  </a>
  <a href="#" class="panel-header autohide-hide">
    <span>&darr;</span>
    Install AutoLogout
  </a>
  <div class="panel-content">
    <strong>Installer</strong>
    <p>
      Use the guided installer to easily install AutoLogout. You only need to install AutoLogout once
      per computer. To set it up in each account, open AutoLogout from the start menu and enter a
      supervisor password.
    </p>
    <a class="btn" href="https://github.com/yiays/AutoLogout/releases/latest/download/AutoLogoutSetup.exe" target="_blank">
      Download from GitHub
    </a>
    <br>
    <strong>Install from the command line</strong>
    <p>
      Download or update AutoLogout anytime using your terminal.
    </p>
    <code>
      winget install Yiays.AutoLogout
      <span class="copy" title="Copy to clipboard" onclick="navigator.clipboard.writeText(`winget install Yiays.AutoLogout`)">&#x2398;</span>
    </code>
    <br/>
    <strong>Portable</strong>
    <p>
      With a portable installation, you will need to find a place to keep the application. You might
      also want to change file permissions to prevent tampering.
    </p>
    <a class="btn" href="https://github.com/yiays/AutoLogout/releases/latest/download/AutoLogout-Portable.zip" target="_blank">
      Download from GitHub
    </a>
    <br>
    <a class="btn secondary" href="https://github.com/yiays/AutoLogout" target="_blank">
      View source code
    </a>
  </div>
</div>

<div class="autohide-panel" id="preview">
  <a href="#preview" class="panel-header autohide-show">
    <span>&gt;</span>
    Install AutoLogout Preview
  </a>
  <a href="#" class="panel-header autohide-hide">
    <span>&darr;</span>
    Install AutoLogout Preview
  </a>
  <div class="panel-content">
    <strong>Pre-release</strong>
    <p>
      Browse the GitHub releases tab for information about the latest releases and pre-releases.
    </p>
    <a class="btn" href="https://github.com/yiays/AutoLogout/releases" target="_blank">
      GitHub Releases
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
<?php
include('../includes/footer.php')
?>
<?php
$title = "Download";
include('../includes/header.php');
?>
<p class="lead">
  AutoLogout adds simple parental controls to an account on PC.
</p>
<p class="show-android show-ios">
  Looking for the mobile app?&nbsp;<a href="/app/">Click here</a>.
</p>
<p>
  AutoLogout will be installed system-wide. Open AutoLogout on the accounts that you would like to supervise/monitor.
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
    <div class="show-win show-android show-ios show-unknown">
      <strong>Install from the command line <span class="rec">recommended, Windows only</span></strong>
      <p>
        Download or update AutoLogout anytime using your terminal. The best binary for your machine will be automatically selected, and dependencies will be installed for you.
      </p>
      <code>
        winget install Yiays.AutoLogout
        <span class="copy" title="Copy to clipboard" onclick="navigator.clipboard.writeText(`winget install Yiays.AutoLogout`)">&#x2398;</span>
      </code>
      <hr/>
    </div>

    <strong>Installer</strong>
    <p>
      Use the guided installer to easily install AutoLogout. You only need to install AutoLogout once
      per computer.
    </p>
    <p>
      <em>You will need .Net Desktop Runtime 10.0.</em>
      You can download it <a href="https://dotnet.microsoft.com/en-us/download/dotnet/10.0/runtime" target="_blank">here</a>.
    </p>
    <div class="smartdl"
         data-urltemplate="https://github.com/yiays/AutoLogout/releases/latest/download/AutoLogoutSetup-{arch}.{ext}"
         data-platforms="win/x64/exe,win/arm64/exe">
      <a class="bestdl">Loading...</a>
      <label for="setupdl" title="More options"></label>
      <input type="checkbox" id="setupdl">
      <div class="overflow"></div>
    </div>
    <noscript>
      <a class="btn secondary" href="https://github.com/yiays/AutoLogout/releases/latest/download/AutoLogoutSetup-x64.exe" target="_blank">
        &#11015; AutoLogoutSetup-x64.exe
      </a>
      <a class="btn secondary" href="https://github.com/yiays/AutoLogout/releases/latest/download/AutoLogoutSetup-arm64.exe" target="_blank">
        &#11015; AutoLogoutSetup-arm64.exe
      </a>
    </noscript>
    <hr>

    <strong>Portable <span class="rec">advanced</span></strong>
    <p>
      With a portable installation, you will need to find a place to keep the application. You might
      also want to change file permissions to prevent tampering.
    </p>
    <div class="smartdl"
         data-urltemplate="https://github.com/yiays/AutoLogout/releases/latest/download/AutoLogout-Portable-{arch}.{ext}"
         data-platforms="win/x64/zip,win/arm64/zip">
      <a class="bestdl">Loading...</a>
      <label for="portabledl" title="More options"></label>
      <input type="checkbox" id="portabledl">
      <div class="overflow"></div>
    </div>
    <noscript>
      <a class="btn" href="https://github.com/yiays/AutoLogout/releases/latest/download/AutoLogout-Portable-x64.zip" target="_blank">
        &#11015; AutoLogout-Portable-x64.zip
      </a>
      <a class="btn" href="https://github.com/yiays/AutoLogout/releases/latest/download/AutoLogout-Portable-arm64.zip" target="_blank">
        &#11015; AutoLogout-Portable-arm64.zip
      </a>
    </noscript>
    <hr>

    <strong>AutoLogout is open source</strong>
    <p>
      Feel free to browse the source code and build from scratch.
    </p>
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
    src="/img/newclient.png" width="480" height="328"
    alt="Screenshot of AutoLogout with a 2 hour time limit"
    style="transform: scale(50%);"
  />
  <img
    src="/img/newclient-controlpanel.png" width="848" height="862"
    alt="Screenshot of AutoLogout settings, shows usage, time limits, downtime controls."
  />
  <img
    src="/img/newclient-sync.png" width="844" height="734"
    alt="Screenshot of AutoLogout sync, shows options to connect AutoLogout to your phone."
  />
</div>
<?php
include('../includes/footer.php')
?>
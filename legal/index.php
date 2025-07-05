<?php
$title = "Legal";
include('../includes/header.php');
?>
<h3>Privacy Policy</h3>
<p>Select a product to read the relevant privacy policy.</p>

<div class="autohide-panel" id="autologout-for-windows">
  <div class="panel-header">
    <span class="autohide-show">&gt;</span>
    <a href="#" class="autohide-hide">&darr;</a>
    <a class="autohide-button" href="#autologout-for-windows">
      AutoLogout for Windows
    </a>
  </div>
  <div class="panel-content">
    <strong>What data does AutoLogout for Windows store?</strong>
    <ul>
      <li>A unique identifier for the device.</li>
      <li>Screen time for the current account, stored for 24 hours.</li>
      <li>Preferences set by the supervisor; time limits, downtime.</li>
      <li>
        A "parent password", provided by the supervisor, which restricts access to the control panel.
      </li>
    </ul>
    <br>
    <strong>When is this data shared over the internet?</strong>
    <p>
      Collected data is only shared if the supervisor presses "Connect to my phone" in the control
      panel.
    </p>
    <p>
      Once mobile syncing is enabled, the collected data is synced once every ten seconds as long as
      AutoLogout is open.
    </p>
    <br>
    <strong>Where is my data stored online?</strong>
    <p>
      Your data is stored in a database online. Your data is protected behind a security key
      generated upon first sync and stored within the application. More security keys can be
      generated using the "parent password" - this is how AutoLogout Manager is configured.
    </p>
    <br>
    <strong>How long is my data stored online?</strong>
    <p>
      Your data is stored indefinitely until a deletion is requested (either through the application
      or by contacting the developer - instructions are in the next section). At some point in the
      future, data expiration may be implemented.
    </p>
    <br>
    <strong>How can I delete my data?</strong>
    <p>
      Deleting your data online is simple. Open the control panel, then click "Sign out of all
      devices". If you are unable to access the control panel, you will need to contact the developer
      at deleteme@yiays.com.
    </p>
    <i>
      Note: if the "Sign out of all devices" button is greyed out, no further action is needed for
      this account.
    </i>
  </div>
</div>

<div class="autohide-panel" id="autologout-manager">
  <div class="panel-header">
    <span class="autohide-show">&gt;</span>
    <a href="#" class="autohide-hide">&darr;</a>
    <a class="autohide-button" href="#autologout-manager">
      AutoLogout Manager (Mobile)
    </a>
  </div>
  <div class="panel-content">
    <strong>What data does AutoLogout Manager store?</strong>
    <ul>
      <li>An offline copy of all settings belonging to any AutoLogout instances you control.</li>
    </ul>
    <br>
    <strong>When is this data shared over the internet?</strong>
    <p>
      Syncing is performed when you open the app, otherwise, only when you press "Push new settings
      to device" or swipe down to refresh.
    </p>
    <p>
      No communication happens unless you have scanned a device QR code and completed setup.
    </p>
    <br>
    <strong>Where is my data stored online?</strong>
    <p>
      Your data is stored in a database online for the devices you manage to occasionally check.
      Only authorized devices can retrieve this data.
    </p>
    <br>
    <strong>How long is my data stored online?</strong>
    <p>
      Your data is stored indefinitely until a deletion is requested (either through AutoLogout for
      Windows or by contacting the developer - instructions are in the next section). At some point
      in the future, data expiration may be implemented.
    </p>
    <br>
    <strong>How can I delete my data?</strong>
    <p>
      You can delete all online data on the managed device by opening the control panel, then
      clicking "Sign out of all devices". If you are unable to access a device's control panel,
      you will need to contact the developer at deleteme@yiays.com.
    </p>
    <i>
      Note: if the "Sign out of all devices" button is greyed out, no further action is needed for
      this account.
    </i>
  </div>
</div>
<?php
include('../includes/footer.php');
?>
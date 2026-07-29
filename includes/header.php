<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($title)? "$title - ": "" ?>AutoLogout</title>

  <link rel="shortcut icon" href="/img/favicon.svg" type="image/svg+xml">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" as="style" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" crossorigin="anonymous">

  <link rel="preload" href="https://fonts.gstatic.com/s/roboto/v32/KFOkCnqEu92Fr1Mu51xIIzI.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  <link rel="preload" href="https://fonts.gstatic.com/s/roboto/v32/KFOjCnqEu92Fr1Mu51TzBic6CsQ.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  <link rel="preload" href="https://fonts.gstatic.com/s/roboto/v32/KFOmCnqEu92Fr1Mu4mxK.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  <link rel="preload" href="https://fonts.gstatic.com/s/roboto/v32/KFOlCnqEu92Fr1MmWUlfBBc4.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  <link rel="preload" href="https://fonts.gstatic.com/s/roboto/v32/KFOlCnqEu92Fr1MmSU5fBBc4.woff2" as="font" type="font/woff2" crossorigin="anonymous">

  <style>
    a:link, a:visited, a:link:active {
      color: #0275ac;
      text-decoration: none;
    }
    a:hover {
      color: rgb(25, 156, 216);
    }

    .show-win, .show-mac, .show-android, .show-ios, .show-linux, .show-cros, .show-unknown {
      display: none;
    }
    body.os-win .show-win {
      display: inherit;
    }
    body.os-mac .show-mac {
      display: inherit;
    }
    body.os-android .show-android {
      display: inherit;
    }
    body.os-ios .show-ios {
      display: inherit;
    }
    body.os-linux .show-linux {
      display: inherit;
    }
    body.os-cros .show-cros {
      display: inherit;
    }
    body.os-unknown .show-unknown {
      display: inherit;
    }

    code {
      position: relative;
      display: inline-block;
      background: black;
      color: white;
      padding: 1em;
      padding-right: 4em;
      margin-bottom: 1em;
    }

    code .copy {
      position: absolute;
      top: 0.2em;
      right: 0.5em;
    }

    .copy {
      font-size: 2em;
      color: rgb(25, 156, 216);
      cursor: pointer;
    }
    .copy:hover {
      color: rgb(106, 190, 229);
    }

    .rec {
      margin-left: 0.5em;
      font-weight: 400;
      font-style: italic;
    }

    .btn {
      font-size: 1.1rem;
      display: inline-block;
      background: #0275ac;
      padding: 0.5rem 1rem;
      color: white!important;
      box-shadow: rgba(0, 0, 0, 0.5) 0 0.1rem 0.3rem;
    }
    .btn:not(:last-child) {
      margin-bottom: 0.5rem;
      margin-right: 0.5rem;
    }
    .btn:hover {
      background: rgb(25, 156, 216);
    }
    .btn.secondary {
      color: black!important;
      background: #eee;
    }
    .btn.secondary:hover {
      background: #fff;
    }

    .smartdl {
      font-size: 1.1rem;
      display: inline-grid;
      grid-template:
        "a b" auto
        "c c" auto / max-content min-content;
      background: #0275ac;
      padding: 0;
      box-shadow: rgba(0, 0, 0, 0.5) 0 0.1rem 0.3rem;
    }
    .smartdl a {
      padding: 1rem;
      line-height: 0.8;
      margin: 0;
    }
    .smartdl > a, .smartdl > label {
      display: block;
      padding: 1rem;
      color: white;
      pointer-events: auto;
      cursor: pointer;
    }
    .smartdl sub {
      font-size: 0.7em;
      line-height: 0;
    }
    .smartdl > input {
      position: absolute;
      opacity: 0;
      pointer-events: none;
    }
    .smartdl > label::after {
      content: '↓';
    }
    .smartdl:has(input:checked) > label::after {
      content: '↑';
    }
    .smartdl > a:hover, label:hover {
      color: white;
      background: rgb(25, 156, 216);
    }
    .smartdl > .bestdl {
      border-right: 1px solid rgba(255, 255, 255, 0.25);
    }
    .smartdl > .bestdl:not(:link) {
      cursor: default;
    }
    .smartdl > .bestdl:not(:link):hover {
      background: none;
    }
    .smartdl > input:checked + .overflow {
      display: flex;
    }
    .smartdl > .overflow {
      grid-area: c;
      display: none;
      flex-direction: column;
    }
    .smartdl > .overflow > .btn {
      margin: 0;
      box-shadow: none;
    }

    body {
      position: relative;
      display: flex;
      flex-direction: column;
      font-family: 'Roboto';
      margin: 0;
      min-height: 100vh;
      overflow-x: clip;
    }
    header {
      position: sticky;
      color: white;
      background: #E0D8E2;
      background: radial-gradient(circle, #e0d8e2 0%, #9296d2 100%);
      padding: 1rem;
      top: 0;
      min-height: 3rem;
      z-index: 1000;
    }
    header > .logo {
      position: absolute;
      top: 1em;
      left: 1em;
      width: 3em;
      height: 3em;
    }
    .logo > img {
      width: inherit;
      height: inherit;
    }
    header > h1 {
      margin-top: 0.3rem;
      margin-left: 4rem;
      margin-bottom: 0.3rem;
    }
    header a {
      color: white !important;
      text-shadow: rgba(0, 0, 0, 0.5) 0 0 0.5em;
    }
    header > nav {
      position: absolute;
      top: 0.9rem;
      right: 0;
    }
    nav > a {
      border-color: white !important;
    }
    header > h2 {
      display: inline-block;
      background: #0275ac;
      padding: 0.5rem;
      padding-left: 3rem;
      margin-left: -1rem;
      margin-bottom: -1rem;
    }

    main {
      display: flex;
      flex-direction: column;
      align-items: center;
      max-width: min(100ch, 90vw);
      margin: 0 auto;
      padding-bottom: 1rem;
    }

    section {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: calc(100vh - 6rem);
    }

    footer {
      margin-top: auto;
      background: #eee;
    }

    .links {
      display: flex;
      flex-direction: row;
      justify-content: center;
      text-align: center;
      padding: 1rem;
    }
    .links > a {
      display: inline-block;
      padding: 0 1em;
    }
    .links > a:not(:last-of-type) {
      border-right: 1px solid black;
    }

    .autohide-panel {
      margin-bottom: 1rem;
      scroll-margin-top: 15rem;
    }
    .autohide-panel:target {
      width: 100%;
    }
    .panel-header {
      display: block;
      font-size: 1.25em;
      padding: 1rem 2rem 1rem 1rem;
      background: #eee;
    }
    .panel-header > span {
      color: black;
      width: 1em;
      height: 1em;
      text-align: center;
      margin-inline: 0.5rem;
    }
    .autohide-panel:not(:target) .autohide-hide {
      display: none;
    }
    .autohide-panel:target .autohide-show {
      display: none;
    }
    .autohide-panel > .panel-content {
      padding: 0;
      height: 0;
      box-sizing: border-box;
      display: none;
      border: 1px solid #aaa;
    }
    .autohide-panel:target > .panel-content {
      padding: 1rem;
      height: auto;
      display: block;
    }

    .carousel {
      display: flex;
      align-items: center;
      box-sizing: border-box;
      max-width: 100vw;
      overflow-x: auto;
      gap: 1em;
      padding: 1em 2em;
    }
    .carousel > img {
      width: 25em;
      height: fit-content;
      max-width: 90vw;
      filter: drop-shadow(rgba(0,0,0,0.25) 0 0 0.5em);
    }

    .shadow-screenshot {
      width: auto;
      height: 30rem;
      z-index: -10;
      pointer-events: none;
      filter: drop-shadow(rgba(0,0,0,0.25) 0 0 1em);
    }
    .shadow-screenshot.small {
      height: 20rem;
      transform: scale(75%);
    }
    .shadow-screenshot.vertical {
      height: 45rem;
      transform: scale(75%);
    }

    .lead {
      font-size: 1.3em;
    }

    @media screen and (max-width: 40em) {
      .links {
        flex-direction: column;
        padding: 0 1rem;
      }
      .links > a {
        padding: 0.5em 0;
      }
      .links > a:not(:last-of-type) {
        border-right: none;
        border-bottom: 1px solid;
      }

      nav {
        top: 0;
        margin-top: -0.5rem;
      }

      .shadow-screenshot {
        height: auto!important;
        max-width: 90vw;
      }
    }

    @media screen and (max-width: 26rem) {
      header > h1 {
        font-size: 1rem;
        margin-top: 1rem;
      }
    }
  </style>
  <noscript>
    <style>
      .smartdl {
        display:none;
      }
    </style>
  </noscript>
</head>
<body>
  <header>
    <a href="/" class="logo">
      <img src="/img/AutoLogout.svg" alt="Logo" width="256" height="256"/>
    </a>
    <h1><a href="/">AutoLogout</a></h1>
    <nav class="links">
      <a href="/download/#stable">Download</a>
      <a href="/app/">AutoLogout Manager</a>
    </nav>
    <?php echo isset($title)? "<h2>$title</h2>": "" ?>
  </header>

  <main>
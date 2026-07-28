  </main>

  <footer class="links">
    <a href="/legal/">Legal</a>
    <a href="mailto:yiays@yiays.com">Contact</a>
  </footer>

  <script>
    const platformsShorthand = {
      unknown: "Unknown",
      win: "Windows",
      mac: "Mac OS",
      android: "Android",
      ios: "iOS / iPadOS",
      cros: "Chrome OS",
      linux: "Linux"
    };
    const platformResolver = {
      win: /windows/i,
      mac: /mac os/i,
      android: /android/i,
      ios: /i(pad)?os/i,
      cros: /cros/i,
      linux: /linux/i
    }
    const archResolver = {
      x64: /(x|amd)(86|64)/i,
      arm64: /arm/i
    }

    let preferedOS = 'unknown';
    let preferedArch = '';
    for(const [os, uaTest] of Object.entries(platformResolver)) {
      if(uaTest.test(navigator.userAgent)) {
        preferedOS = os;
        document.body.classList.add(`os-${os}`);
        break;
      }
    }

    function populate_smartdl(smartdl) {
      const bestdl = smartdl.querySelector('.bestdl');
      const overflowToggle = smartdl.querySelector('input');
      const overflow = smartdl.querySelector('.overflow');
      const urlTemplate = smartdl.dataset.urltemplate;
      const platforms = smartdl.dataset.platforms;
      
      let bestfound = false;
      platforms.split(',').forEach(platform => {
        const [os, arch, ext] = platform.split('/');
        const dlUrl = urlTemplate
          .replace('{os}', os)
          .replace('{arch}', arch)
          .replace('{ext}', ext);
        const fileName = dlUrl.split('/').at(-1);
        
        if (os == preferedOS && arch == preferedArch) {
          bestfound = true;
          bestdl.setAttribute('href', dlUrl);
          bestdl.innerHTML = `
            &#11015; Download ${fileName}<br>
            <sub>for ${platformsShorthand[os]} ${arch}</sub>
          `;
        } else {
          overflow.innerHTML += `
            <a class="btn secondary" href="${dlUrl}" target="_blank">
              &#11015; ${fileName}<br>
              <sub>for ${platformsShorthand[os]} ${arch}</sub>
            </a>
          `;
        }
      });

      if(!bestfound) {
        bestdl.innerHTML = `
          Choose from below<br>
          <sub>Your device is ${platformsShorthand[preferedOS]} ${preferedArch}</sub>
        `;
        overflowToggle.checked = true;
      }
    }

    if(navigator.userAgentData && navigator.userAgentData.getHighEntropyValues)
      navigator.userAgentData.getHighEntropyValues(["architecture"])
        .then(uaData => {
          for(const [arch, archTest] of Object.entries(archResolver)) {
            if(archTest.test(uaData.architecture)) {
              preferedArch = arch;
              break;
            }
          }
        })
        .finally(() => {
          var smartdls = document.querySelectorAll('.smartdl');
          smartdls.forEach(populate_smartdl);
        });
    else {
      var smartdls = document.querySelectorAll('.smartdl');
      smartdls.forEach(populate_smartdl);
    }
  </script>
</body>
</html>
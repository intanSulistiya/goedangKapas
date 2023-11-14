<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./lokasi.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Acme:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cormorant Upright:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Alata:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bubblegum Sans:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Chela One:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="lokasi11">
      <div class="lokasi-child"></div>
      <img
        class="lokasi-item"
        alt=""
        src="logo/Logo GKa.png"
        id="rectangleIcon"
      />

      <div class="lokasi12">Lokasi</div>
      <div class="lokasi-inner"></div>
      <div class="jl-pelita-empoang">
        <a href="https://maps.app.goo.gl/JjqjkU6JA3SJWEob7" target="_blank">Jl. Pelita, Empoang, Kec. Binamu, Kabupaten Jeneponto, Sulawesi Selatan
        92311</a>
        
      </div>
      <img
        class="basemap-image-icon"
        alt=""
        src="./public/basemap-image@2x.png"
      />

      <img
        class="vector-icon26"
        alt=""
        src="logo/arrow-left.svg"
        id="vectorIcon"
      />
    </div>

    <script>
      // var rectangleIcon = document.getElementById("rectangleIcon");
      // if (rectangleIcon) {
      //   rectangleIcon.addEventListener("click", function (e) {
      //     window.location.href = "./tampilan-awal.php";
      //   });
      // }
      
      var vectorIcon = document.getElementById("vectorIcon");
      if (vectorIcon) {
        vectorIcon.addEventListener("click", function (e) {
          window.location.href = "./tampilan-awal.php";
        });
      }
      </script>
  </body>
</html>

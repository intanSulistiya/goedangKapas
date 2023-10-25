<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./menu-makanan.css" />
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
    <div class="tampilan-menu-khusus-makanan">
      <div class="tampilan-menu-khusus-makanan-child"></div>
      <img
        class="tampilan-menu-khusus-makanan-item"
        alt=""
        src="./public/rectangle-16@2x.png"
        id="rectangleIcon"
      />

      <img
        class="tampilan-menu-khusus-makanan-inner"
        alt=""
        src="./public/rectangle-24@2x.png"
      />

      <div class="tampilan-menu-khusus-makanan-child1"></div>
      <img class="daeng-2-icon2" alt="" src="./public/daeng-2@2x.png" />

      <div class="daeng-food-n2">DAENG Food N Coffee</div>
      <div class="semua-produk2" id="semuaProdukText">Semua produk</div>
      <div class="snack2" id="snackText">Snack</div>
      <div class="minuman2" id="minumanText">Minuman</div>
      <div class="makanan2">Makanan</div>
      <div class="tampilan-menu-khusus-makanan-child2"></div>
      <div class="tampilan-menu-khusus-makanan-child3"></div>
      <div class="tampilan-menu-khusus-makanan-child4"></div>
      <img
        class="tampilan-menu-khusus-makanan-child5"
        alt=""
        src="./public/rectangle-32.svg"
      />

      <img
        class="tampilan-menu-khusus-makanan-child6"
        alt=""
        src="./public/rectangle-32.svg"
      />

      <img
        class="tampilan-menu-khusus-makanan-child7"
        alt=""
        src="./public/rectangle-35@2x.png"
      />

      <img
        class="tampilan-menu-khusus-makanan-child8"
        alt=""
        src="./public/rectangle-361@2x.png"
      />

      <img
        class="tampilan-menu-khusus-makanan-child9"
        alt=""
        src="./public/rectangle-49@2x.png"
      />

      <div class="nasi-goreng1">Nasi Goreng</div>
      <div class="chiken-katsu">Chiken Katsu</div>
      <div class="rice-bowl">Rice Bowl</div>
      <div class="mie-goreng-seafood">Mie Goreng Seafood</div>
      <div class="ayam-geprek">Ayam Geprek</div>
      <img
        class="tampilan-menu-khusus-makanan-child10"
        alt=""
        src="./public/rectangle-461@2x.png"
      />

      <img
        class="icround-arrow-back-icon2"
        alt=""
        src="./public/icroundarrowback.svg"
        id="icroundArrowBackIcon"
      />

      <img
        class="tampilan-menu-khusus-makanan-child11"
        alt=""
        src="./public/rectangle-48@2x.png"
      />

      <div class="rp-1500010">Rp 15.000</div>
      <div class="rp-1500011">Rp 15.000</div>
      <div class="rp-1500012">Rp 15.000</div>
      <div class="rp-1500013">Rp 15.000</div>
      <div class="rp-1500014">Rp 15.000</div>
      <div class="tampilan-menu-khusus-makanan-child12"></div>
      <div class="tampilan-menu-khusus-makanan-child13"></div>
      <div class="tampilan-menu-khusus-makanan-child14"></div>
      <div class="tampilan-menu-khusus-makanan-child15"></div>
      <div class="tampilan-menu-khusus-makanan-child16"></div>
    </div>

    <script>
      var rectangleIcon = document.getElementById("rectangleIcon");
      if (rectangleIcon) {
        rectangleIcon.addEventListener("click", function (e) {
          window.location.href = "./tampilan-awal.php";
        });
      }
      
      var semuaProdukText = document.getElementById("semuaProdukText");
      if (semuaProdukText) {
        semuaProdukText.addEventListener("click", function (e) {
          window.location.href = "./semua-menu.php";
        });
      }
      
      var snackText = document.getElementById("snackText");
      if (snackText) {
        snackText.addEventListener("click", function (e) {
          window.location.href = "./menu-snak.php";
        });
      }
      
      var minumanText = document.getElementById("minumanText");
      if (minumanText) {
        minumanText.addEventListener("click", function (e) {
          window.location.href = "./menu-minuman.php";
        });
      }
      
      var icroundArrowBackIcon = document.getElementById("icroundArrowBackIcon");
      if (icroundArrowBackIcon) {
        icroundArrowBackIcon.addEventListener("click", function (e) {
          window.location.href = "./semua-menu.php";
        });
      }
      </script>
  </body>
</html>


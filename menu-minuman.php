<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./menu-minuman.css" />
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
    <div class="tampilan-menu-minuman">
      <div class="tampilan-menu-minuman-child"></div>
      <img class="vector-icon20" alt="" src="./public/vector3.svg" />

      <img
        class="tampilan-menu-minuman-item"
        alt=""
        src="./public/rectangle-16@2x.png"
        id="rectangleIcon"
      />

      <img
        class="tampilan-menu-minuman-inner"
        alt=""
        src="./public/rectangle-24@2x.png"
      />

      <div class="tampilan-menu-minuman-child1"></div>
      <img class="daeng-2-icon3" alt="" src="./public/daeng-2@2x.png" />

      <div class="daeng-food-n3">DAENG Food N Coffee</div>
      <div class="semua-produk3" id="semuaProdukText">Semua produk</div>
      <div class="snack3" id="snackText">Snack</div>
      <div class="minuman3">Minuman</div>
      <div class="makanan3" id="makananText">Makanan</div>
      <div class="tampilan-menu-minuman-child2"></div>
      <div class="tampilan-menu-minuman-child3"></div>
      <div class="tampilan-menu-minuman-child4"></div>
      <img
        class="tampilan-menu-minuman-child5"
        alt=""
        src="./public/rectangle-32.svg"
      />

      <img
        class="tampilan-menu-minuman-child6"
        alt=""
        src="./public/rectangle-32.svg"
      />

      <div class="strawberry-smoothies">Strawberry Smoothies</div>
      <img
        class="tampilan-menu-minuman-child7"
        alt=""
        src="./public/rectangle-27@2x.png"
      />

      <img
        class="tampilan-menu-minuman-child8"
        alt=""
        src="./public/rectangle-29@2x.png"
      />

      <img
        class="tampilan-menu-minuman-child9"
        alt=""
        src="./public/rectangle-31@2x.png"
      />

      <img
        class="tampilan-menu-minuman-child10"
        alt=""
        src="./public/rectangle-37@2x.png"
      />

      <img
        class="tampilan-menu-minuman-child11"
        alt=""
        src="./public/rectangle-38@2x.png"
      />

      <img
        class="icround-arrow-back-icon3"
        alt=""
        src="./public/icroundarrowback.svg"
        id="icroundArrowBackIcon"
      />

      <div class="tampilan-menu-minuman-child12"></div>
      <div class="tampilan-menu-minuman-child13"></div>
      <div class="tampilan-menu-minuman-child14"></div>
      <div class="tampilan-menu-minuman-child15"></div>
      <div class="tampilan-menu-minuman-child16"></div>
      <div class="lemon-tea1">Lemon Tea</div>
      <div class="rp-1500015">Rp 15.000</div>
      <div class="rp-1500016">Rp 15.000</div>
      <div class="rp-1500017">Rp 15.000</div>
      <div class="rp-1500018">Rp 15.000</div>
      <div class="rp-1500019">Rp 15.000</div>
      <div class="coffe">Coffe</div>
      <div class="greean-tea1">Greean Tea</div>
      <div class="manggo-smoothies">Manggo Smoothies</div>
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
          window.location.href = "./menu-snack.php";
        });
      }
      
      var makananText = document.getElementById("makananText");
      if (makananText) {
        makananText.addEventListener("click", function (e) {
          window.location.href = "./menu-makanan.php";
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

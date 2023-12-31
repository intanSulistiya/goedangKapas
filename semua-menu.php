<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./semua-menu.css" />
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
    <div class="tampilan-menu-semua-produk">
      <div class="tampilan-menu-semua-produk-child"></div>
      <img
        class="tampilan-menu-semua-produk-item"
        alt=""
        src="logo/Logo GKa.png"
        id="rectangleIcon"
      />

      <img
        class="tampilan-menu-semua-produk-inner"
        alt=""
        src="logo/croissant cafe.jpeg"
      />

      <div class="tampilan-menu-semua-produk-child1"></div>
      <img class="daeng-2-icon1" alt="" src="logo/daeng.png" />

      <div class="daeng-food-n1">DAENG Food N Coffee</div>
      <div class="semua-produk1">Semua produk</div>
      <div class="snack1" id="snackText">Snack</div>
      <div class="minuman1" id="minumanText">Minuman</div>
      <div class="makanan1" id="makananText">Makanan</div>
      
      <div class="menu">
      <div class="tampilan-menu-semua-produk-child2"></div>
      <div class="tampilan-menu-semua-produk-child3"></div>
      <div class="tampilan-menu-semua-produk-child4"></div>
      
      <img class="tampilan-menu-semua-produk-child5" alt="" />
      <img class="tampilan-menu-semua-produk-child6" alt="" />
      
      <div class="greean-tea">Greean Tea</div>
      <div class="pisang-nugget">Pisang Nugget</div>
      <div class="lemon-tea">Lemon Tea</div>
      
      <img class="tampilan-menu-semua-produk-child7" alt="" src="logo/nasi_goreng.png" />
      <img class="tampilan-menu-semua-produk-child8" alt="" src="logo/Biscoff_Stuffed.png" />
      
      <div class="roti-bakar1">Roti Bakar</div>
      <div class="nasi-goreng">Nasi Goreng</div>
      
      <img class="icround-arrow-back-icon1" alt="" src="logo/arrow-left-short.svg" id="icroundArrowBackIcon" />
      
      <img class="tampilan-menu-semua-produk-child9" alt="" src="logo/Pisang_Owol.png" />
      <img class="tampilan-menu-semua-produk-child10" alt="" src="logo/esteh.png" />
      <img class="tampilan-menu-semua-produk-child11" alt="" src="logo/Greean Tea.png" />
      
      <div class="rp-150005">Rp 15.000</div>
      <div class="rp-150006">Rp 15.000</div>
      <div class="rp-150007">Rp 15.000</div>
      <div class="rp-150008">Rp 15.000</div>
      <div class="rp-150009">Rp 15.000</div>
      
      <div class="tampilan-menu-semua-produk-child12"></div>
      <div class="tampilan-menu-semua-produk-child13"></div>
      <div class="tampilan-menu-semua-produk-child14"></div>
      <div class="tampilan-menu-semua-produk-child15"></div>
      <div class="tampilan-menu-semua-produk-child16"></div>
    </div>
    </div>

    <script>
      var rectangleIcon = document.getElementById("rectangleIcon");
      if (rectangleIcon) {
        rectangleIcon.addEventListener("click", function (e) {
          window.location.href = "./tampilan-awal.php";
        });
      }
      
      var snackText = document.getElementById("snackText");
      if (snackText) {
        snackText.addEventListener("click", function (e) {
          window.location.href = "./menu-snack.php";
        });
      }
      
      var minumanText = document.getElementById("minumanText");
      if (minumanText) {
        minumanText.addEventListener("click", function (e) {
          window.location.href = "./menu-minuman.php";
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
          window.location.href = "./tampilan-awal.php";
        });
      }
      </script>
  </body>
</html>

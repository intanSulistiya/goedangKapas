<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./menu-snack.css" />
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
    <div class="tampilan-menu-khusus-snack">
      <div class="tampilan-menu-khusus-snack-child"></div>
      <img
        class="tampilan-menu-khusus-snack-item"
        alt=""
        src="logo/Logo GKa.png"
        id="rectangleIcon"
      />

      <img
        class="tampilan-menu-khusus-snack-inner"
        alt=""
        src="logo/croissant cafe.jpeg"
      />

      <div class="rectangle-div"></div>
      <img class="daeng-2-icon" alt="" src="logo/daeng.png" />

      <div class="daeng-food-n">DAENG Food N Coffee</div>
      <div class="semua-produk" id="semuaProdukText">Semua produk</div>
      <div class="snack">Snack</div>
      <div class="minuman" id="minumanText">Minuman</div>
      <div class="makanan" id="makananText">Makanan</div>
      <div class="tampilan-menu-khusus-snack-child1"></div>
      <div class="tampilan-menu-khusus-snack-child2"></div>
      <div class="tampilan-menu-khusus-snack-child3"></div>
      <div class="line-div"></div>
      <img class="rectangle-icon" alt="" />

      <div class="tampilan-menu-khusus-snack-child4"></div>
      <img
        class="tampilan-menu-khusus-snack-child5"
        alt=""
      />

      <div class="tampilan-menu-khusus-snack-child6"></div>
      <img
        class="tampilan-menu-khusus-snack-child7"
        alt=""
        src="logo/kentang goreng.png"
      />

      <img
        class="tampilan-menu-khusus-snack-child8"
        alt=""
        src="logo/banana-rol.png"
      />

      <img
        class="tampilan-menu-khusus-snack-child9"
        alt=""
        src="logo/burger.png"
      />

      <img
        class="tampilan-menu-khusus-snack-child10"
        alt=""
        src="logo/roti-bakar.png"
      />

      <img
        class="tampilan-menu-khusus-snack-child11"
        alt=""
        src="logo/bakso bakar.png"
      />

      <div class="banana-roll">Banana Roll</div>
      <div class="kentang-goreng">Kentang Goreng</div>
      <div class="burger">Burger</div>
      <div class="roti-bakar">Roti Bakar</div>
      <div class="bakso-bakar">Bakso Bakar</div>
      <img
        class="icround-arrow-back-icon"
        alt=""
        src="logo/arrow-left-short.svg"
        id="icroundArrowBackIcon"
      />

      <div class="rp-15000">Rp 15.000</div>
      <div class="rp-150001">Rp 15.000</div>
      <div class="rp-150002">Rp 15.000</div>
      <div class="rp-150003">Rp 15.000</div>
      <div class="rp-150004">Rp 15.000</div>
      <div class="tampilan-menu-khusus-snack-child12"></div>
      <div class="tampilan-menu-khusus-snack-child13"></div>
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
          window.location.href = "./semua-menu.php";
        });
      }
      </script>
  </body>
</html>

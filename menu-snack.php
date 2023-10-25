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
        src="./public/rectangle-16@2x.png"
      />

      <img
        class="tampilan-menu-khusus-snack-inner"
        alt=""
        src="./public/rectangle-24@2x.png"
      />

      <div class="rectangle-div"></div>
      <img class="daeng-2-icon" alt="" src="./public/daeng-2@2x.png" />

      <div class="daeng-food-n">DAENG Food N Coffee</div>
      <div class="semua-produk" id="semuaProdukText">Semua produk</div>
      <div class="snack">Snack</div>
      <div class="minuman" id="minumanText">Minuman</div>
      <div class="makanan" id="makananText">Makanan</div>
      <div class="tampilan-menu-khusus-snack-child1"></div>
      <div class="tampilan-menu-khusus-snack-child2"></div>
      <div class="tampilan-menu-khusus-snack-child3"></div>
      <div class="line-div"></div>
      <img class="rectangle-icon" alt="" src="./public/rectangle-32.svg" />

      <div class="tampilan-menu-khusus-snack-child4"></div>
      <img
        class="tampilan-menu-khusus-snack-child5"
        alt=""
        src="./public/rectangle-32.svg"
      />

      <div class="tampilan-menu-khusus-snack-child6"></div>
      <img
        class="tampilan-menu-khusus-snack-child7"
        alt=""
        src="./public/rectangle-42@2x.png"
      />

      <img
        class="tampilan-menu-khusus-snack-child8"
        alt=""
        src="./public/rectangle-41@2x.png"
      />

      <img
        class="tampilan-menu-khusus-snack-child9"
        alt=""
        src="./public/rectangle-43@2x.png"
      />

      <img
        class="tampilan-menu-khusus-snack-child10"
        alt=""
        src="./public/rectangle-44@2x.png"
      />

      <img
        class="tampilan-menu-khusus-snack-child11"
        alt=""
        src="./public/rectangle-45@2x.png"
      />

      <div class="banana-roll">Banana Roll</div>
      <div class="kentang-goreng">Kentang Goreng</div>
      <div class="burger">Burger</div>
      <div class="roti-bakar">Roti Bakar</div>
      <div class="bakso-bakar">Bakso Bakar</div>
      <img
        class="icround-arrow-back-icon"
        alt=""
        src="./public/icroundarrowback.svg"
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
          window.location.href = "./tampilan-menu-semua-produk.html";
        });
      }
      </script>
  </body>
</html>

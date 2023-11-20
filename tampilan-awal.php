<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="./global.css" />
  <link rel="stylesheet" href="./tampilan-awal.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Acme:wght@400&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant Upright:wght@400&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alata:wght@400&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bubblegum Sans:wght@400&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chela One:wght@400&display=swap" />
</head>

<body>
  <div class="fen">
    <div class="fen-child"></div>
    <!-- logoo GK -->
    <img class="logo-gk" alt="" src="./logo/Logo GKa.png" />

    <!-- <img class="logo-inner" alt="" src="./public/rectangle-10@2x.png" /> -->
    <!-- about -->
    <!-- <div class="about-goedang-kapas">About Goedang Kapas</div>
    <div class="about-frame"></div>
    <div class="goedang-kapas-kjsdindjfrukjdni">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, r
      epudiandae cupiditate? Recusandae porro adipisci incidunt quas facere, 
      facilis nam a alias temporibus explicabo deleniti, blanditiis repellat est. Qui, perferendis officia.
    </div> -->
    <!-- fasilitas -->
    <div class="fasilitas">Fasilitas</div>
    <div class="fasilitas-frame">
      <div class="rectangle-parent2">
        <img class="fasilitas-1" alt="" src="logo/biliar.jpg" id="rectangleImage2" />
        <img class="fasilitas-2" alt="" src="logo/self-foto.jpg" id="rectangleImage1" />
        <img class="fasilitas-3" alt="" src="logo/play-groun.jpg" id="rectangleImage3" />
      </div>
    </div>
    <!-- tenant -->
    <div class="tenant">Kategori Menu</div>
    <div class="tampilan-menu-semua-produk-child2" id="menumakanan"></div>
      <div class="tampilan-menu-semua-produk-child3"></div>
      <div class="tampilan-menu-semua-produk-child4"></div>
      <img class="tampilan-menu-semua-produk-child5" alt="" />
      <div class="makanan-berat">Makanan Berat</div>
      <div class="japanese-food">Japanese Food</div>
      <div class="dessert">Dessert</div>
      <div class="minuman">Minuman</div>

      <img class="tampilan-menu-semua-produk-child7" alt="" src="logo/nasi_goreng.png" />
      <img class="tampilan-menu-semua-produk-child8" alt="" src="logo/Biscoff_Stuffed.png" /> 
    <!-- <img class="kosuke-2-icon" alt="" src="logo/Kosuke.png" />

    <img class="cimcim-2-icon" alt="" src="logo/Cimcim.png" />

    <img class="sista-2-icon" alt="" src="logo/sista.png" />

    <img class="daeng-1-icon" alt="" src="logo/daeng.png" id="daeng1Image" />

    <img class="icon" alt="" src="logo/1010.png" />

    <img class="yakasa-1-icon" alt="" src="logo/yakasa.png" />

    <div class="div">01</div>
    <div class="div1">02</div>
    <div class="div2">03</div>
    <div class="div3">06</div>
    <div class="div4">05</div>
    <div class="div5">04</div> -->

    <!-- 
      <img
        class="img-20230920-wa0020-removebg-p-icon"
        alt=""
        src="./public/img20230920wa0020removebgpreview-1@2x.png"
      />

      <img
        class="img-20230920-wa0019-removebg-p-icon"
        alt=""
        src="./public/img20230920wa0019removebgpreview-1@2x.png"
      /> -->
    <!-- profile -->
    <div class="frame-profile">
      <img class="profile1" alt="" src="logo/gk.JPG" />

      <img class="profile2" alt="" src="logo/gk 2 (1).jpg" />

      <img class="profile3" alt="" src="logo/gk 3.jpg" />
    </div>

    <!-- menu -->
    <div class="component-22">
        <img class="material-symbolsmenu-icon11" alt="" src="./logo/menu.png" id="burgerIcon" />
      <div id="burgerMenu" class="burger-menu">
        <ul>
          <li><a href="about-us.php">About us</a></li>
          <li><a href="lokasi.php">Lokasi</a></li>
          <li><a href="contac.php">Kontak</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="frame-parent9">
    <div class="material-symbolsmenu-parent18">
      <div class="material-symbolsmenu33" id="materialSymbolsmenuContainer">
        <div class="about-as11">About us</div>
      </div>
      <img class="vector-icon27" alt="" src="./public/vector.svg" />
    </div>
    <div class="material-symbolsmenu-wrapper22">
      <div class="material-symbolsmenu33" id="materialSymbolsmenuContainer1">
        <div class="about-as11">Lokasi</div>
      </div>
    </div>
    <div class="material-symbolsmenu-wrapper23" id="frameContainer6">
      <div class="material-symbolsmenu35">
        <div class="about-as11">Hubungi Kami</div>
      </div>
    </div>
  </div>
  </div>

  <!-- Menambahkan elemen dengan ID yang sesuai
    <div id="rectangleImage1">Elemen 1</div>
    <div id="rectangleImage2">Elemen 2</div>
    <div id="rectangleImage3">Elemen 3</div>
    <div id="daeng1Image">Elemen Daeng1</div> -->

  <script>
    var rectangleImage1 = document.getElementById("rectangleImage1");
    if (rectangleImage1) {
      rectangleImage1.addEventListener("click", function(e) {
        window.location.href = "./photostudio.php";
      });
    }

    var rectangleImage2 = document.getElementById("rectangleImage2");
    if (rectangleImage2) {
      rectangleImage2.addEventListener("click", function(e) {
        window.location.href = "./biliard.php";
      });
    }

    var rectangleImage3 = document.getElementById("rectangleImage3");
    if (rectangleImage3) {
      rectangleImage3.addEventListener("click", function(e) {
        window.location.href = "./playground.php";
      });
    }

    var materialSymbolsmenuContainer = document.getElementById("materialSymbolsmenuContainer");
    if (materialSymbolsmenuContainer) {
      materialSymbolsmenuContainer.addEventListener("click", function(e) {
        window.location.href = "about-us.php";
      });
    }

    // var materialSymbolsmenuContainer1 = document.getElementById("materialSymbolsmenuContainer1");
    // if (materialSymbolsmenuContainer1) {
    //     materialSymbolsmenuContainer1.addEventListener("click", function (e) {
    //         window.location.href = "lokasi.php";
    //     });
    // }

    // var frameContainer6 = document.getElementById("frameContainer6");
    // if (frameContainer6) {
    //     frameContainer6.addEventListener("click", function (e) {
    //         window.location.href = "contac.php";
    //     });
    // }

    var daeng1Image = document.getElementById("menumakanan");
    if (menumakanan) {
      menumakanan.addEventListener("click", function(e) {
        window.location.href = "./semua-menu.php";
      });
    }
    var burgerIcon = document.getElementById("burgerIcon");
    var burgerMenu = document.getElementById("burgerMenu");

    burgerIcon.addEventListener("click", function() {
      if (burgerMenu.style.display === "block") {
        burgerMenu.style.display = "none";
      } else {
        burgerMenu.style.display = "block";
      }
    });

    // Tambahkan tindakan klik untuk menutup dropdown saat tautan dalam dropdown diklik
    var dropdownLinks = document.querySelectorAll(".burger-menu a");

    dropdownLinks.forEach(function(link) {
      link.addEventListener("click", function() {
        burgerMenu.style.display = "none";
      });
    });
  </script>
</body>

</html>
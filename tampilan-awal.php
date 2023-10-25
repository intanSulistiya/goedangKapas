<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./tampilan-awal.css" />
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
    <div class="fen">
      <div class="fen-child"></div>
<!-- logoo GK -->
      <img class="logo-gk" alt="" src="./logo/Logo GKa.png" />

      <!-- <img class="logo-inner" alt="" src="./public/rectangle-10@2x.png" /> -->
<!-- about -->
<div class="about-goedang-kapas">About Goedang Kapas</div>
      <div class="about-frame"></div>
      <div class="goedang-kapas-kjsdindjfrukjdni">
        Goedang Kapas kjsdindjfrukjdniseuh jsdfbiuwehfn cjsefhgu jbdwuye
        shbduwygr jdbuwyr kjehf84yrwbd wejbduwyrg jhebdw4r jhebduwyreg jwewbu4y
      </div>
<!-- fasilitas -->
      <div class="fasilitas">Fasilitas</div>
      <div class="fasilitas-frame">
        <div class="rectangle-parent2">
        <img
            class="fasilitas-1"
            alt=""
            src="./public/rectangle-174@2x.png"
            id="rectangleImage2"
          />
          <img
            class="fasilitas-2"
            alt=""
            src="./public/rectangle-154@2x.png"
            id="rectangleImage1"
          />
          <img
            class="fasilitas-3"
            alt=""
            src="./public/rectangle-165@2x.png"
            id="rectangleImage3"
          />
        </div>
      </div>
<!-- tenant -->
      <div class="tenant">Tenant</div>
      <img class="kosuke-2-icon" alt="" src="./public/kosuke-2@2x.png" />

      <img class="cimcim-2-icon" alt="" src="./public/cimcim-2@2x.png" />

      <img class="sista-2-icon" alt="" src="./public/sista-2@2x.png" />

      <img class="daeng-1-icon" alt="" src="./public/daeng-1@2x.png" id="daeng1Image"/>

      <img class="icon" alt="" src="./public/1010-1@2x.png" />

      <img class="yakasa-1-icon" alt="" src="./public/yakasa-1@2x.png" />

      <div class="div">01</div>
      <div class="div1">02</div>
      <div class="div2">03</div>
      <div class="div3">06</div>
      <div class="div4">05</div>
      <div class="div5">04</div>
      
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
        <img class="profile1" alt="" src="./public/rectangle-21@2x.png" />

        <img class="profile2" alt="" src="./public/rectangle-22@2x.png" />

        <img class="profile3" alt="" src="./public/rectangle-23@2x.png" />
      </div>
      
<!-- menu -->
      <div class="component-22">
        <div class="material-symbolsmenu-wrapper21">
          <img
            class="material-symbolsmenu-icon11"
            alt=""
            src="./logo/menu.png"
          />
        </div>
        <div class="frame-parent9">
          <div class="material-symbolsmenu-parent18">
            <div
              class="material-symbolsmenu33"
              id="materialSymbolsmenuContainer"
            >
              <div class="about-as11">About as</div>
            </div>
            <img class="vector-icon27" alt="" src="./public/vector.svg" />
          </div>
          <div class="material-symbolsmenu-wrapper22">
            <div
              class="material-symbolsmenu33"
              id="materialSymbolsmenuContainer1"
            >
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
      
    </div>

    <script>
      var rectangleImage1 = document.getElementById("rectangleImage1");
      if (rectangleImage1) {
        rectangleImage1.addEventListener("click", function (e) {
          window.location.href = "./photostudio.php";
        });
      }
      
      var rectangleImage2 = document.getElementById("rectangleImage2");
      if (rectangleImage2) {
        rectangleImage2.addEventListener("click", function (e) {
          window.location.href = "./biliard.php";
        });
      }
      
      var rectangleImage3 = document.getElementById("rectangleImage3");
      if (rectangleImage3) {
        rectangleImage3.addEventListener("click", function (e) {
          window.location.href = "./playground.php";
        });
      }
      
      var materialSymbolsmenuContainer = document.getElementById(
        "materialSymbolsmenuContainer"
      );
      if (materialSymbolsmenuContainer) {
        materialSymbolsmenuContainer.addEventListener("click", function (e) {
          window.location.href = "./about-us.php";
        });
      }
      
      var materialSymbolsmenuContainer1 = document.getElementById(
        "materialSymbolsmenuContainer1"
      );
      if (materialSymbolsmenuContainer1) {
        materialSymbolsmenuContainer1.addEventListener("click", function (e) {
          window.location.href = "./lokasi.php";
        });
      }
      
      var frameContainer6 = document.getElementById("frameContainer6");
      if (frameContainer6) {
        frameContainer6.addEventListener("click", function (e) {
          window.location.href = "./contac.php";
        });
      }
      
      var daeng1Image = document.getElementById("daeng1Image");
      if (daeng1Image) {
        daeng1Image.addEventListener("click", function (e) {
          window.location.href = "./semua-menu.php";
        });
      }
      </script>
  </body>
</html>

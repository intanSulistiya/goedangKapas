<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./contac.css" />
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
    <div class="contac-us">
      <div class="contac-us-child"></div>
      <img
        class="contac-us-item"
        alt=""
        src="logo/Logo GKa.png"
        id="rectangleIcon"
      />

      <div class="contac-us1">Contac Us</div>
      <div class="contac-us-inner"></div>
      <div class="nomor-whatsapp">
        <a href="https://wa.link/qez0zx" target="_blank">082219752803</a>
      </div>
        <img
          class="whatsapp-logo-1-removebg-previ-icon"
          alt=""
          src="logo/whatsapp.svg" 
        />

      <div class="user-instagram">
        <a href="https://www.instagram.com/goedangkapas.kuliner/" target="_blank">goedangkapas.kuliner</a>
      </div>
        <img
          class="instagram-logo-2-removebg-previ-icon"
          alt=""
          src="logo/instagram.svg" 
        />

      <div class="akun-facebook">
        <a href="https://www.facebook.com/profile.php?id=100090297552609" target="_blank">Goedang Kapas Culinary Station</a>
      </div>
        <img 
          class="facebook-logo-3-removebg-previ-icon"
          src="logo/facebook.svg" 
          alt="">
        />

      <img
        class="vector-icon21"
        alt=""
        src="logo/arrow-left.svg"
        id="vectorIcon"
      />
    </div>

    <script>
      var rectangleIcon = document.getElementById("rectangleIcon");
      if (rectangleIcon) {
        rectangleIcon.addEventListener("click", function (e) {
          window.location.href = "./tampilan-awal.php";
        });
      }
      
      var vectorIcon = document.getElementById("vectorIcon");
      if (vectorIcon) {
        vectorIcon.addEventListener("click", function (e) {
          window.location.href = "./tampilan-awal.php";
        });
      }
      </script>
  </body>
</html>

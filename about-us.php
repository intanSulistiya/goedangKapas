<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./about-us.css" />
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
    <div class="about-us">
      <div class="about-us-child"></div>
      <img
        class="about-us-item"
        alt=""
        src="./public/rectangle-3@2x.png"
        id="rectangleIcon"
      />

      <div class="about-us1">About Us</div>
      <div class="about-us-inner"></div>
      <div class="goedang-kapas1">Goedang Kapas</div>
      <img
        class="vector-icon25"
        alt=""
        src="./public/vector4.svg"
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
          window.location.href = "./tamplan-awal.php";
        });
      }
      </script>
  </body>
</html>

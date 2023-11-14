<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./biliard.css" />
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
    <div class="biliard">
      <div class="biliard-child" id="rectangle"></div>
      <img
        class="biliard-item"
        alt=""
        src="logo/Logo GKa.png"
        id="rectangleIcon"
      />

      <div class="billiard">Billiard</div>
      <div class="goedang-kapas">Goedang Kapas</div>
      <img
        class="vector-icon24"
        alt=""
        src="logo/arrow-left-short.svg"
        id="vectorIcon"
      />

      <div class="biliard-inner">
        <div class="rectangle-parent1">
          <img
            class="frame-child10"
            alt=""
            src="logo/biliar.jpg"
          />

          <img
            class="frame-child11"
            alt=""
            src="./public/rectangle-173@2x.png"
          />

          <img
            class="frame-child12"
            alt=""
            src="./public/rectangle-164@2x.png"
          />
        </div>
      </div>
    </div>

    <script>
      var rectangle = document.getElementById("rectangle");
      if (rectangle) {
        rectangle.addEventListener("click", function (e) {
          window.location.href = "./tampilan-awal.php";
        });
      }
      
      var rectangleIcon = document.getElementById("rectangleIcon");
      if (rectangleIcon) {
        rectangleIcon.addEventListener("click", function (e) {
          window.location.href = "./tamplan-awal.php";
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

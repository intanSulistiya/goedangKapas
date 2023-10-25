<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./playground.css" />
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
    <div class="playground">
      <div class="playground-child"></div>
      <img
        class="playground-item"
        alt=""
        src="./public/rectangle-3@2x.png"
        id="rectangleIcon"
      />

      <div class="playground1">Playground</div>
      <img
        class="vector-icon22"
        alt=""
        src="./public/vector4.svg"
        id="vectorIcon"
      />

      <div class="playground-inner">
        <div class="rectangle-parent">
          <img class="frame-child" alt="" src="./public/rectangle-15@2x.png" />

          <img class="frame-item" alt="" src="./public/rectangle-17@2x.png" />

          <img class="frame-inner" alt="" src="./public/rectangle-161@2x.png" />
        </div>
      </div>
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

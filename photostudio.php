<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./photostudio.css" />
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
    <div class="studio">
      <div class="studio-child"></div>
      <img
        class="studio-item"
        alt=""
        src="./public/rectangle-3@2x.png"
        id="rectangleIcon"
      />

      <div class="studio-foto">Studio Foto</div>
      <img
        class="vector-icon23"
        alt=""
        src="./public/vector4.svg"
        id="vectorIcon"
      />

      <div class="studio-inner">
        <div class="rectangle-group">
          <img
            class="frame-child1"
            alt=""
            src="./public/rectangle-151@2x.png"
          />

          <img
            class="frame-child2"
            alt=""
            src="./public/rectangle-171@2x.png"
          />

          <img
            class="frame-child3"
            alt=""
            src="./public/rectangle-162@2x.png"
          />
        </div>
      </div>
      <div class="studio-inner1">
        <div class="rectangle-container">
          <img
            class="frame-child4"
            alt=""
            src="./public/rectangle-152@2x.png"
          />

          <img
            class="frame-child5"
            alt=""
            src="./public/rectangle-172@2x.png"
          />

          <img
            class="frame-child6"
            alt=""
            src="./public/rectangle-163@2x.png"
          />

          <img class="frame-child7" alt="" src="./public/rectangle-18@2x.png" />

          <img class="frame-child8" alt="" src="./public/rectangle-19@2x.png" />

          <img class="frame-child9" alt="" src="./public/rectangle-20@2x.png" />
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

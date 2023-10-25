<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./icround-arrow-back.css" />
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
    <div class="icround-arrow-back" id="icroundArrowBack"></div>

    <script>
      var icroundArrowBack = document.getElementById("icroundArrowBack");
      if (icroundArrowBack) {
        icroundArrowBack.addEventListener("click", function (e) {
          window.location.href = "./semua-produk.php";
        });
      }
      </script>
  </body>
</html>

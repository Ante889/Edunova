<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix spiral</title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/custom.css">
  </head>
<body>


  <div class="callout">
    
    <div class="grid-x">
      <div class="cell small-4 custom-left-div">
        
        <form action="" method="post">
          <label for="BrojRedaka">Broj redaka</label>
          <input class="custom-form" type="text" name="BrojRedaka" id="BrojRedaka">

          <label for="BrojStupaca">Broj stupaca</label>
          <input class="custom-form" type="text" name="BrojStupaca" id="BrojStupaca">

          <input class="success button" type="submit" name="submit" value="KREIRAJ TABLICU">
        </form>

      </div>
      <div class="cell small-8">
      <?php 
      include 'php.php';
      ?>
      </div>

      </div>
    </div>

  </div>
  


<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>

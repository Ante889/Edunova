<?php include 'function.php'?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix spiral</title>
    <link rel="stylesheet" href="assets/css/custom.css">
  </head>
<body>

<div class="flex-container">
  <div class="flex-item-left">
        <form action="" method="post">
          <label for="BrojRedaka">Broj redaka</label>
          <input class="custom-form" type="text" name="BrojRedaka" id="BrojRedaka" value="<?php ShowInInput('BrojRedaka')?>">
          <br>
          <label for="BrojStupaca">Broj stupaca</label>
          <input class="custom-form" type="text" name="BrojStupaca" id="BrojStupaca" value="<?php ShowInInput('BrojStupaca')?>">
          <br>
          <label for="StranaKretanja">Strana kretanja</label>
          <select name="StranaKretanja" id="StranaKretanja">
          <option value="">odaberi opciju</option>
            <option value="gore-desno">gore-desno</option>
            <option value="dolje-desno">dolje-desno</option>
            <option value="dolje-lijevo">dolje-lijevo</option>
            <option value="gore-lijevo">gore-lijevo</option>
          </select>
          <br>
          <label for="KreniOdSredine">Kreni od sredine</label>
          <input type="checkbox" name="Kreniodsredine" id="Kreniodsredine">
          <br>
          <label for="Obrnuto">Obrnuto</label>
          <input type="checkbox" name="Obrnuto" id="Obrnuto" <?php ShowInInputChecked('Obrnuto')?>>
          <br>
          <input type="submit" name="submit" value="KREIRAJ TABLICU">
        </form>

    </div>
    <div class="flex-item-right">
      <?php 

      include 'php.php';
      ?>
</div>
</div>


<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>

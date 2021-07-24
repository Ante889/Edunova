<?php include "header.php";?>
<body>

<!-- Start Top Bar -->

<?php include "navigation.php";?>

<!-- End Top Bar -->

<?php

if(isset($_GET["product"])){
  include "product.php";
}elseif(isset($_GET["cart"])){
  include "cart.php";
}else{
  include "product.php";
}

?>


<?php include "footer.php";?>
<?php include "js.php";?>

</body>
</html>




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
}elseif(isset($_GET["login"])){
  include "login.php";
}elseif(isset($_GET["register"])){
  include "register.php";
}elseif(isset($_GET["logout"])){
  include "resources/userLogin.php";
  $login->logoutUser();
}elseif(isset($_GET["item"])){
  include "product_page.php";
}elseif(isset($_GET["admin"]) && $_SESSION['role']=='admin'){
  include "Admin/show_product.php";
}elseif(isset($_GET["productAdd"]) && $_SESSION['role']=='admin'){
  include "Admin/create_product.php";
}elseif(isset($_GET["productChange"]) && $_SESSION['role']=='admin'){
  include "Admin/update_product.php";
}else{
  include "product.php";
}

?>


<?php include "footer.php";?>
<?php include "js.php";?>

</body>
</html>




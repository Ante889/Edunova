<?php

if(isset($_GET['color'])){
    $Color =$_GET['color'];
}

?>


<?php 
  include "Include/Head.php";
?>
<body>

<!--Top bar(Navigation)-->

<?php 
  include "Include/Navigation.php";
?>

<!--End top bar(Navigation)-->


<h1 style="color:<?php echo $Color;?>">TEXT</h1>

<a href="exercising.php?color=blue">BLUE</a>
<a href="exercising.php?color=red">RED</a>
<a href="exercising.php?color=green">GREEN</a>
<a href="exercising.php?color=white">WHITE</a>


<hr>


<br>

<?php

include "Include/Footer.php";

?>


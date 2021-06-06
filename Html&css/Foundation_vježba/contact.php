<?php 
  include "Include/Head.php";
?>
<body>

<!--Top bar(Navigation)-->

<?php 
  include "Include/Navigation.php";
?>
<div class="space"></div>
<!--End top bar(Navigation)-->


<form class="log-in-form max-width-700 align-center-middle">
<h4 class="text-center">Contact</h4>
<div class="grid-x grid-margin-x">
  <div class="cell large-6">
  
        <label>Name
        <input type="email" name="email" placeholder="Input name">
        </label>
  
  </div>
  <div class="cell large-6">
  
        <label>Email
        <input type="email" name="email" placeholder="Input email">
        </label>

  </div>
</div>
<label>Message
<textarea id="w3review" name="w3review" rows="4" cols="50" placeholder="Your message"></textarea>
</label>
<input class="button expanded" type="submit" name="Submit" value="Send">

</form>

<br>
<div class="space"></div>
<?php

include "Include/Footer.php";

?>


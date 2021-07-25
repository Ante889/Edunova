
<?php

if(isset($_POST['submit-login'])){
  include 'resources/userLogin.php';
  $Msg = $login->checkErrors();
  print_r($Msg);
}

?>

<br>
<div class="login">
<div class="translucent-form-overlay text-center centered">
  <form action="" method="POST">
    <h3>Login</h3>
    <br>
    <div class="row columns text-center">
        <input type="text" name="email-login" placeholder="Email">
    </div>
    <div class="row columns text-center">
        <input type="Password" name="password-login" placeholder="Password">
    </div>
    <br>
    <input type="submit" name="submit-login" class="primary button expanded search-button" value="Login">
    <h4>You do not have an account? </h4><a href="?register"><h4>Create acount</h4></a>
 </form>
</div>
</div>
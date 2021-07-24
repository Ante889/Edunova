<br>
<div class="login">
    <div class="translucent-form-overlay text-center centered">
    <form action="" method="POST">
        <h3>Create account</h3>
        <br>
        <div class="row columns text-center">
            <input type="text" name="Firstname" placeholder="Firstname">
        </div>
        <div class="row columns text-center">
            <input type="text" name="Lastname" placeholder="Lastname">
        </div>
        <div class="row columns text-center">
            <input type="text" name="Email" placeholder="Email">
        </div>
        <div class="row columns text-center">
            <input type="Password" name="Password" placeholder="Password">
        </div>
        <div class="row columns text-center">
            <input type="Password" name="Confirm-Password" placeholder="Confirm password">
        </div>
        <br>
        <input type="submit" name="submit" class="primary button expanded search-button" value="Register">

        <a href="?login">Login</a>
    </form>
    </div>
</div>

<?php

if(isset($_POST['submit'])){
    include 'resources/userRegister.php';
}

?>
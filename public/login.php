<?php
    require_once('partials/header.phtml');
?>
<div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">
            <form action="index.php" method="POST">
                <input name="user" type="text" placeholder="username">
                <input name="pass" type="password" placeholder="password">
                <button class="btn btn-info btn-block login" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>

<?php
    require_once('partials/footer.phtml');
?>


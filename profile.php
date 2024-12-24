
<?php include "inc/header.php"  ?>
<?php include "inc/navbar.php"  ?>

<?php 

if (!isset($_SESSION['auth'])) {
    rederection("login.php");
}

?>

<div class="container">
    <div class="row">
        <div class="col-8 max-auto">
            <h2 class="boder my-2 bg-success p-2">Name: <?php echo $_SESSION['auth'][0] ?> </h2>
            <h2 class="boder my-2 bg-primary p-2">Email: <?php echo $_SESSION['auth'][1] ?> </h2>
        </div>
    </div>
</div>

<?php include "inc/footer.php"  ?>
<h2> profile page </h2>
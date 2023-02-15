<?php
include "../header.html";
?>

<div id="topbar"><h1>Subly</h1><span><a href="#">FAQ</a></span><span><a href="#">Discord</a></span></div>
<div id="newcard">
    <form action="" method="POST">
        <input type="text" name="subname" id="subname" placeholder="Subscription Name">
        <input type="number" name='subprice' id='subname' placeholder="Subscription price">
        <input type="submit" id="addsub-submitbutton" value="Add subscription">
    </form>
</div>

<div id="subscriptions">
    <div id="addedsub -1">
        <?php
        if (isset($_POST['subprice']) && (isset($_POST['subname']))) {
        echo '<p>Subscription name: "' . $_POST['subname'] . '"</p><br><p>Subscription price: ' . $_POST['subprice'] . "€</p><br>";
        }
        ?>
    </div>
</div>
<h4>Total price: <span id="totalPrice">0</span></h4>

<?php
include "../footer.html";
?>

<?php
    $title = "Profile"; 
    include_once "MyHeader.php";

    if(!isset($_SESSION['userId']) || $user['isBusiness'] == true)
    {
        header("Location: login.php");
    }
    ?>

<html id="addPet-body">

<li style="list-style-type: none;"><a href="addPet.php">Add a Pet</a></li>

<h2 id="petHeader">Pets</h2>

<!-- Grabs Pet data from sql pet table -->
<?php
    DisplayOnlyPets();
?>
</html>

<?php
    include_once "MyFooter.php";
?>
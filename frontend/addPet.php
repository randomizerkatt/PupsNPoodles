<?php
    $title = "Add Pet"; 
    include_once "MyHeader.php";

    if(!isset($_SESSION['userId']) || $_SESSION['isBusiness'] == true)
    {
        header("Location: login.php");
    }
    ?>

<?php
echo '<html id="addPet-body">';
    if(isset($_POST['Upload']))
    {
        $petName = $_POST['petName'];
        $species = $_POST['species'];

        UploadPet($petName, $species);
        header("Location: profile.php");
        echo '<h2>Your pet has been saved!</h2>';
    }
?>
<!-- The form to add a pet to a user -->

<form method="post" action="" enctype='multipart/form-data'>
    <label class="appt">Image</label>
    <input class="appt" type='file' name='file' id="petFile"/>
    <br>
    <label class="appt">Name</label>
    <input class="appt" type="text" name="petName"/>
    <br>
    <label class="appt">Species</label>
    <input class="appt" type="text" name="species"/>
    <br>
    <button class="appt" type='submit' name='Upload'>Save</button>
</form>

<?php
    include_once "MyFooter.php";
?>
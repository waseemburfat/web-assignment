<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "cruddbcustom";

$cn = mysqli_connect($server, $user, $password, $db);
if (isset($_POST['snd'])) {
    $name1 = mysqli_real_escape_string($cn, $_POST['name']);
    $email1 = mysqli_real_escape_string($cn, $_POST['email']);
    $citystart1 = mysqli_real_escape_string($cn, $_POST['cityname']);
    $cityend1 = mysqli_real_escape_string($cn, $_POST['vehicletypy']);
    $mobile1 = mysqli_real_escape_string($cn, $_POST['mobilenumber']);
    $vehicle1 = mysqli_real_escape_string($cn, $_POST['vehicle']);
    $text1 = mysqli_real_escape_string($cn, $_POST['text']);
    // registration


    // $isertquery = "INSERT INTO driver_registration(name, email, cityname, vehicletypy, mobilenumber, vehicle,text) VALUES ('$name1', '$email1', '$citystart1','$cityend1', '$mobile1', '$vehicle1', '$text1')";
    $isertquery = "INSERT INTO driver_registration(name, email, cityname, mobilenumber, vehicle, text, vehicletypy) VALUES ('$name1','$email1', '$citystart1','$mobile1','$vehicle1', '$text1','$cityend1')";
    $qery = mysqli_query($cn, $isertquery);

    if ($qery) {
?>
        <script>
            alert('Inserted successfull');
        </script>
    <?php
    header('Location: selectd.php');
    } else {

    ?>
        <script>
            alert("No Inserted <?= addslashes(mysqli_error($cn)) ?>");
        </script>
<?php
    }
}

?>
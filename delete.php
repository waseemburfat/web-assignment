<?php

  include 'dbcon.php';

  $id = $_GET['ids'];

  $deletequery = "delete from registration where id=$id";

  $query = mysqli_query($con, $deletequer);

  if($query){
    ?>
<script>
    alert('deleted successfull');
</script>
    <?php

          header('location:select.php');

}else{
    ?>
    <script>
        alert('Not deleted ');
    </script>
        <?php
}

?>
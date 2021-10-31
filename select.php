<?php

?>

<html>
    <head>
        <link rel="stylesheet" href="./style.css">
        <title></title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        
      <div class="main-div">
          <h1>List of user for web to want Clint</h1>
          <div class="center-div">
              <div class="table-responsive">
                  <table>
                      <thead>
                          
                      <th>id</th>
                      <th>name</th>
                      <th>email</th>
                      <th>mobilenumber</th>
                      <th>citystart</th>
                      <th>cityend</th>
                      <th>vehicle</th>
                      <th>text</th>
                      <th colspan="2">Operation</th>
                      </thead>
                      <tbody>

                      <?php
                           include 'dbcon.php';

                           $selectquery = "SELECT * FROM `registration`";

                           $query = mysqli_query($con,$selectquery);

                        //    $result = mysqli_fetch_assoc($query);

                          while($result=mysqli_fetch_assoc($query)){

                      ?>
                          <tr>
                              <td> <?php  echo $result['id']; ?> </td>
                              <td><?php  echo $result['name']; ?></td>
                              <td><?php  echo $result['email']; ?></td>
                              <td><?php  echo $result['mobilenumber']; ?></td>
                              <td><?php  echo $result['cityend']; ?></td>
                              <td><?php  echo $result['citystart']; ?></td>
                              <td><?php  echo $result['vehicle']; ?></td>
                              <td><?php  echo $result['text']; ?></td>
                              <td><a href="update.php?id=<?php  echo $result['id']; ?>"><i class="fas fa-trash "></i></a></td>
                              <td><a href="delete.php?ids=<?php  echo $result['id']; ?>"> <i class="fas fa-edit"></i> </a></td>
                              
                          </tr>
                       <?php
                        }
                        ?>     
                      </tbody>
                  </table>
              </div>
          </div>
      </div>

    </body>
</html>
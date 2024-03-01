<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    padding: 0px;
    margin: 0px;
    text-decoration: none;
    list-style: none;
}

body{
    background-color: rgb(175, 146, 146);
}

.table1{
    background-color:white;
    width: 100%;
    animation: borde 3s infinite;
}
@keyframes borde {
  0%{
    border:solid red;
  }
  50%
  {
    border: solid blue;
  }
  100%{
    border:solid green;
  }
}
.table1 td{
    background-color: grey;
    padding:10px;
    text-align:center;
}
.container{
    margin-top:-50px;
}

#hero{
    animation: borde 3s infinite;
}

    </style>
</head>
<body>
    

<section style="margin: 50px 0;">
        <div class="container">
            <table class="table1" border="1">
                <thead>
                  <tr>
                    <th scope="col" style="background-color:darkgray; color:white; padding:10px;">Id</th>
                    <th scope="col" style="background-color:darkgray; color:white; padding:10px;">Full Name</th>
                    <th scope="col" style="background-color:darkgray; color:white; padding:10px;">Phone</th>
                    <th scope="col" style="background-color:darkgray; color:white; padding:10px;">Username</th>
                    <th scope="col" style="background-color:darkgray; color:white; padding:10px;">Password</th>
                    <th scope="col" style="background-color:green;">Edit</th>
                    <th scope="col" style="background-color:green;">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "connection.php";
                        mysqli_select_db($conn, "grouphdb");
                        $sql_query = "SELECT * FROM grouph";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $Id = $row['id'];
                                $fullname = $row['fullname'];
                                $phone = $row['phone'];
                                $username = $row['username'];
                                $password = $row['password'];
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $Id; ?></td>
                        <td><?php echo $fullname; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $password; ?></td>

                        <td><a href="edit.php?id=<?php echo $Id;?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                        
                    <?php
                        } 
                        } 
                    ?>
                    
                </tbody>
              </table>
              <center>
              <a href="add.php"><button id="hero" style="cursor:pointer; padding:10px;
              width:80px;border-radius:150px;font-size:20px; margin-top:60px;background-color:darkgray;color:white;
              ">Add</button></a>
              </center>
        </div>
    </section>
    
</body>
</html>
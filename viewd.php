<!DOCTYPE html>
<html lang="en">
    <head>
    <script src="https://kit.fontawesome.com/8550a0dc22.js" crossorigin="anonymous"></script>
    
    
    <title>Record of Donors</title>
    <link rel="stylesheet" href="donor.css">
    </head>
    <body>
        <div class=container>
        <div class="title">
            Record of Donors
          </div>
        <table  allign="center" Border="1px" style="width:300px;line-height:30px;">
        
            <thead>
                <tr>
                <th>Donor ID</th>
                <th>Supervisor ID</th>
                <th>Donor Name</th>
                <th>Blood ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername="localhost";
                $username="blood";
                $password="blood";
                $database="bloodbank";
                $connection=new mysqli(  $servername, $username, $password,$database);
                if($connection->connect_error){
                    die("connection failed:".$connection->connect_error);
                }
                $sql="SELECT *FROM donor";
                $result=$connection->query($sql);
                if(!$result){
                    die("invalid query:".$connection->error);
                }
                while($row=$result->fetch_assoc()){
                    echo "<tr>
                        <td>" . $row["did"] . "</td>
                        <td>" . $row["sid"] . "</td>
                        <td>" . $row["dname"] . "</td>
                        <td>" . $row["bid"] . "</td>
                   <\tr>";
                }
                ?>

                <!-- <button class="btn"  ><a href="welcome.html">Home</a></button> -->
            </tbody>
           
        </table>
        </div>
        <button class="btn" ><a href="welcome.html">Home</a></button>
    </body>
</html>
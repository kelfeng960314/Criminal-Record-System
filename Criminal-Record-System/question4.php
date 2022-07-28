<?php include 'topbar.php'; ?>

<DOCTYPE html>
    <html>
    <Head>
        <title>Question 4</title>
    </Head>
<body>
    <form method='post'>
    Name: <input type='text' name='owner' ><br/>
    Driving Licence Number: <input type=text name='driverno'><br/>
    Please register here if the name is not exist: <a href = "./peopleadd.php" >HERE</a> <br/>
    Make & Model: <input type ='text' name='make' ><br/>  
    Licence Number: <input type ='text' name='licencenumber' ><br/> 
    Colour: <input type ='text' name='colour' ><br/> 
    <input type = 'submit' name ='submit'>

<?php
include 'style.css';
include 'dbh.inc.php';



if (@$_POST['driverno']!="" AND $_POST['make']!="" AND $_POST['colour']!="" AND $_POST['licencenumber']!="" AND $_POST['owner']!="")
    {
        $sql = "SELECT * FROM People WHERE People_name = '{$_POST['owner']}' AND People_licence = '{$_POST['driverno']}';";
    
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) != 0)
        {
            $sql = "INSERT INTO Vehicle(Vehicle_type,Vehicle_colour,Vehicle_licence) VALUES
            ('{$type}','{$_POST['colour']}','{$_POST['licencenumber']}');";

            $result = mysqli_query($conn, $sql);

            $sql = "INSERT INTO Ownership(People_ID, Vehicle_ID) VALUES
            ((SELECT People_ID FROM People WHERE People_licence = '{$_POST['driverno']}'),
            (SELECT Vehicle_ID FROM Vehicle WHERE Vehicle_licence = '{$_POST['licencenumber']}'));";

            $result = mysqli_query($conn, $sql);
                
        }
        else{
        echo "No Result";
        }
    }

    


?>


</form>
<hr/>

<h2> Current Data of People and Vehicle </h2>


<?php
include 'dbh.inc.php';
include 'style.css';
$sql = 'Select People.People_ID, People.People_name, People.People_address, People.People_licence, Vehicle.Vehicle_ID, Vehicle.Vehicle_type, Vehicle.Vehicle_colour, Vehicle.Vehicle_licence from People, Vehicle, Ownership where (People.People_ID = Ownership.People_ID) AND (Ownership.Vehicle_ID = Vehicle.Vehicle_ID);';
$result = mysqli_query($conn, $sql);
echo mysqli_num_rows($result)." rows<br/>";
if(mysqli_num_rows($result) > 0)
{
    echo "<table>";
    echo "<tr><th>People ID</th><th>Name</th><th>Address</th><th>Licence Number</th><th>Vehicle ID</th><th>Vehicle Type</th><th>Vehicle Color</th><th>Vehicle Number</th>";
while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
 echo "<td>".$row["People_ID"]."</td>";
 echo "<td>".$row["People_name"]."</td>";
 echo "<td>".$row["People_address"]."</td>";
 echo "<td>".$row["People_licence"]."</td>";
 echo "<td>".$row["Vehicle_ID"]."</td>";
 echo "<td>".$row["Vehicle_type"]."</td>";
 echo "<td>".$row["Vehicle_colour"]."</td>";
 echo "<td>".$row["Vehicle_licence"]."</td>";
 echo "<tr/>";
} 
echo"</table>";
}else{
    echo "Database is empty";
}
?>

</body>
</html>

<?php

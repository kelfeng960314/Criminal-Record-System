<?php include 'topbar.php'; ?>

<DOCTYPE html>
    <html>
    <Head>
        <title>Question 2</title>
    </Head>

    <form method='post'>
    <input type ='text' name='Search' placeholder='Please enter vehicle licence here.'>
    <input type = 'submit' name ='submit'>

    <?php include 'style.css';?>
</form>

</body>
</html>

<?php
include 'dbh.inc.php';

if(@isset($_POST['submit'])){

    $keyword = $_POST['Search'];
    $sql=  "SELECT People.People_name, People.People_licence, Vehicle.Vehicle_ID, Vehicle_type, Vehicle_colour,Vehicle_licence 
    FROM People
    RIGHT JOIN Ownership 
    ON People.People_ID = Ownership.People_ID
    RIGHT JOIN Vehicle
    ON Vehicle.Vehicle_ID = Ownership.Vehicle_ID
    WHERE Vehicle_licence = '$keyword'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){

        echo "<table>";
        echo "<tr><th>Name</th><th>Licence£</th><th>Vehicle ID</th><th>Vehicle Type</th><th>Vehicle Colour</th><th>Vehicle Licence</th>";
    
    echo mysqli_num_rows($result)." rows<br/>"; 

    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$row['People_name']."</td>";
        echo "<td>". $row['People_licence']."</td>";
        echo "<td>". $row['Vehicle_ID']."</td>";
        echo "<td>". $row['Vehicle_type']."</td>";
        echo "<td>". $row['Vehicle_colour']."</td>";
        echo "<td>". $row['Vehicle_licence']."</td>";

        echo "</tr>";

    }
        echo "</table>";

}else{
        echo 'There is no result found in the system.';
    }








    mysqli_close($conn);
}
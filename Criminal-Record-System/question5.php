<?php include 'topbar.php'; ?>

<DOCTYPE html>
    <html>
    <Head>
        <title>Question 5</title>

      <?php include 'style.css' ;?>


    </Head>
<body>
   <p> Please type in information required in the following rows to create an incident profile. </p><br>
  <p> Please sign up Person Information  <a href = './peopleadd.php'>here</a>.<br>
  <p> Please signup Vehicle Information <a href = './question4.php'>here</a>.<br><br><br>
    <form method='post'>
    Person's ID: <input type = 'text' name = 'id' placeholder='Input id here'>
    Vehicle ID:<input type = 'text' name ='vehicleid' placeholder ='Input vehicle id here'>
    Date:<input type ='date' name='date' placeholder='YYYY-MM-DD'><br>
    Report:<input type ='text' name='report' placeholder='Write down your report here...'><br>
    Select Description of Offence:<br>
    
        <input type = 'radio' name ='desc' value ='1'>Speeding
        <input type = 'radio' name ='desc' value ='2'>Speeding on a mororway
        <input type = 'radio' name ='desc' value ='3'>Illegal Parking
        <input type = 'radio' name ='desc' value ='4'>Drink Driving
        <input type = 'radio' name ='desc' value ='5'>Driving Without a Licence
        <input type = 'radio' name ='desc' value ='7'>Traffic light offences
        <input type = 'radio' name ='desc' value ='8'>Cycling on pavement
        <input type = 'radio' name ='desc' value ='9'>Failure to have control of vehicle
        <input type = 'radio' name ='desc' value ='10'>Dangerous Driving
        <input type = 'radio' name ='desc' value ='11'>Careless Driving
        <input type = 'radio' name ='desc' value ='12'>Dangerous Cycling
        

</br>

    <input type ='submit' name='submit'>
</form>


    <?php
    include 'dbh.inc.php';
    @$sql = "SELECT * FROM People WHERE People_ID = {$_POST['id']} ;";
    $peoplecheck = mysqli_query($conn, $sql);


    @$sql = "SELECT * FROM Vehicle WHERE Vehicle_ID = {$_POST['vehicleid']} ;";
    $vehiclecheck = mysqli_query($conn, $sql);


    if (@$_POST['id']!="" && mysqli_num_rows($peoplecheck)!=0 && mysqli_num_rows($vehiclecheck)!=0)
    {
    @$sql = "INSERT INTO Incident(Vehicle_ID, People_ID, Incident_Date, Incident_Report,Offence_ID)
    VALUES (".$_POST['vehicleid'].",".$_POST['id'].",'".$_POST['date']."','".$_POST['report']."','".$_POST['desc']."');";
    @$result = mysqli_query($conn, $sql);



}
else{
echo "Unable to create a incident profile here. Please create People or Vehicle information first";

}



?>

</hr>

<h1> Glossary </h1>

<?php

include 'dbh.inc.php';
@$sql = "Select People_ID, People_name from People where People_name IS NOT NULL;";
@$result = mysqli_query($conn, $sql);

echo mysqli_num_rows($result)." rows<br/>"; 
if (mysqli_num_rows($result) > 0) 
{
  
          echo "<table>";  
           echo "<tr><th>Name</th><th>ID</th></tr>";
           while($row = mysqli_fetch_assoc($result)) 
           {
            
             echo "<tr>";
             echo "<td>".$row["People_name"]."</td>"; 
             echo "<td>".$row["People_ID"]."</td>";
             echo "</tr>";
           }}
           
            
            mysqli_close($conn);
            ?>

<?php

include 'dbh.inc.php';
@$sql = "Select * from Vehicle where Vehicle_licence IS NOT NULL;";
@$result = mysqli_query($conn, $sql);
echo mysqli_num_rows($result)." rows<br/>"; 
if (mysqli_num_rows($result) > 0) 
{
           echo "<table>";  
           echo "<tr><th>ID</th><th>Type</th><th>Colour</th><th>Licence</th></tr>";
           while($row = mysqli_fetch_assoc($result)) 
           {
             
             echo "<tr>";
             echo "<td>".$row["Vehicle_ID"]."</td>"; 
             echo "<td>".$row["Vehicle_type"]."</td>";
             echo "<td>".$row["Vehicle_colour"]."</td>";
             echo "<td>".$row["Vehicle_licence"]."</td>";
             echo "</tr>";
           }}
           
            
            mysqli_close($conn);
            ?>



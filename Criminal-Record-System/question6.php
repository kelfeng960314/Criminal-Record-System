<?php include 'admintopbar.php'; ?>

<h1>Assign Penalties to a Choosen Incident<h2>

<form method='post'>
    Incident ID: <input type='text' name='id' ><br/>
    Fine Amount: <input type=text name='fine'><br/> 
    Fine Point(s): <input type ='text' name='pts' ><br/>   
    <input type = 'submit' name ='submit'>

    <?php
    include 'dbh.inc.php';
    if (@$_POST['id']!="" AND $_POST['fine']!="" AND $_POST['pts']!="")
    {
        $sql = "INSERT INTO Fines(Fine_Amount, Fine_Points, Incident_ID) VALUES ('".$_POST['fine']."','".$_POST['pts']."','".$_POST['id']."');";

            $result = mysqli_query($conn, $sql);
            echo "Data Added Successfully!";
                
        }
        else{
        echo "No Result";
        }
    

    


?>


<h1> Glossary: Incident and Fines </h1>

<?php
include 'style.css';
include 'dbh.inc.php';
@$sql = "SELECT Incident.Incident_ID, Incident.Incident_Report, Offence.Offence_maxFine, Offence.Offence_maxPoints FROM Incident, Offence 
where Incident.Offence_ID = Offence.Offence_ID;";
$result = mysqli_query($conn, $sql);
echo mysqli_num_rows($result)." rows<br/>"; 
if (mysqli_num_rows($result) > 0) 
{
           echo "<table>";  
           echo "<tr><th>Incident ID</th><th>Report</th><th>Maximum Fine</th><th>Maximum Points</th></tr>";
           while($row = mysqli_fetch_assoc($result)) 
           {
             // output name and phone number as table row
             echo "<tr>";
             echo "<td>".$row["Incident_ID"]."</td>"; 
             echo "<td>".$row["Incident_Report"]."</td>";
             echo "<td>".$row["Offence_maxFine"]."</td>";
             echo "<td>".$row["Offence_maxPoints"]."</td>";
             echo "</tr>";
           }}
           
            
            mysqli_close($conn);
            ?>
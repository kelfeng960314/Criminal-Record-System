<?php include 'topbar.php'; ?>
<DOCTYPE html>
    <html>
    <Head>
        <title>Question 2</title>

      <?php include 'style.css' ;?>

    </Head>

    <form method='post'>
    <input type ='text' name='Search' placeholder='Please enter any Name or Licence Number'>
    <input type = 'submit' name ='submit'>
</form>

</body>
</html>

<?php
include 'dbh.inc.php';

if(isset($_POST['submit'])){

    $keyword = $_POST['Search'];
    $sql=  "SELECT * FROM People WHERE (People_name LIKE '%$keyword%') OR (People_Licence LIKE '%$keyword%')";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
    
        echo "<table>";
        echo "<tr><th>People ID</th><th>Name</th><th>Address</th><th>Licence</th>";
    echo mysqli_num_rows($result)." rows<br/>"; 

    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>". $row['People_ID']."</td>";
        echo "<td>". $row['People_name']."</td>";
        echo "<td>". $row['People_address']."</td>";
        echo "<td> ". $row['People_licence']."</td>";
        echo"</tr>";

    }
    echo"</table>";

}else{
        echo 'There is no result found in the system.';
    }








    mysqli_close($conn);
}
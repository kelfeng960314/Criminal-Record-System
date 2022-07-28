<?php include 'topbar.php';
include 'style.css';?>


<DOCTYPE html>
    <html>
    <Head>
        <title>People Registration Form</title>
    </Head>
<body>
    <form method='post'>
    Name: <input type m= 'text' name='name' ><br/>
    Address: <input type ='text' name='address' ><br/>  
    Licence Number: <input type ='text' name='licencenumber' ><br/>  
    <input type = 'submit' name ='submit'>

<?php
include 'dbh.inc.php';
$name = $_POST['name'];
$address = $_POST['address'];
$licence = $_POST['licencenumber'];



    $sql = "INSERT INTO People (People_name, People_address, People_licence)
    VALUES ('$name', '$address', '$licence');"; 

    $result = mysqli_query($conn, $sql);

?>

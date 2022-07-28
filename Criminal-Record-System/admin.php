<!DOCTYPE html>
<html>
    <head>
        <title>Admin Homepage</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            h1 {
                text-align: center}
                </style>
    </head>

    <body>
        
        <h1>This is the homepage of Coursework 2!</h1>
        <p1>Please click on the following contents to view the system!</p1>
        <a href = './changepassword.php'>Change Password</a>
<hr>
        <div class = "register">
        <a href='./signup.php'>Register New User Here</a>
</div>
<hr>
        <div class= 'w3-container'>
        <h2> Question 2 </h2> <a href= './question2.php'>Click here to look up People</a>
        <p> The police officer should be able to look up people by their names or their
driving licence number (by typing either of these in to the system). If the
person is not in the system it should give an appropriate message. This
search should not be case sensitive and it should work on partial names (e.g.,
“John”, “Smith” and “John Smith” would all find John Smith. If there are
several people with the same name they should all be listed. </p>  
</div>
<hr>
    <div class ='w3-container'>
        <h2> Question 3 </h2> <a href= './question3.php'>Click here to look up vehicles</a>
        <p> The police officer should be able to look up vehicle licence plate. The system
will then show details of the car (e.g., type, colour etc.), the owner’s name and
license number. Allow for missing data in the system (e.g., the vehicle might
not be in the system, or the vehicle might be in the system but the owner
might be unknown).</>
</div>
<hr>
    <div class ='w3-container'>
        <h2> Question 4 </h2> <a href= './question4.php'>Click here to enter details of new vehicles</a>
        <p>The police officer should be able to enter details for a new vehicle. This will
include the licence number, make, model and colour of the vehicle, as well as
its owner. If the owner is already in the database, then it should be a matter of
selecting that person and assigning them to the new vehicle. If the owner is
not in the database they should be added (along with personal information
including the license number).</p>
</div>
<hr>
    <div class ='w3-container'>
        <h2> Question 5 </h2> <a href= './question5.php'>Click here to file reports</a>
        <p> The police officer should be able to file a report for an incident and retrieve
existing reports. Filing new ones will involve submitting a textual statement,
recording the time of the incident and the vehicle and person involved. If
either the person or the vehicle are new to the system, then appropriate new
entry/entries to the database should be added. The officer should be able to
record the offence from a list of offences contained in the database. NOTE: a
fine is not stored at this stage, because the fine will be issued by a court at a
later time, and added by an administrator. The officer should be able to
retrieve and edit the report. </p>
</div>

<div class ='w3-container'>
<h2> Question 6 </h2> <a href= './question6.php'>Click here to assign penalties</a>
<p> add fines to the database </p>
    </body>


</html>
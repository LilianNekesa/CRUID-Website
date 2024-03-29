<?php 
require 'db.php';

if(isset($_POST['submit'])){

    $name = $_POST["name"];
    $email= $_POST["email"];

    $query = "INSERT INTO details VALUES('$name','$email')";

    mysqli_query($con, $query);

    echo "<script> alert('Saved successfully')</script>";

}

?>
<html>
<body>
    <form action="" method="post">
        <div>
            <label>Full Name</label><br>
            <input type="text" name="name" placeholder="Full Name"><br>
       </div>
        <div>    
            <label>Email</label><br>
            <input type="text" name="email" placeholder="e.g abc@gmail.com"><br>
        </div>

        <button type="submit", name="submit">Submit</button>

    </form>
</html>
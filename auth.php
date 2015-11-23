<?php    
    $conn = new mysqli('localhost', 'root', '', 'servemoredata');
    if ($conn->connect_error) die($conn->connect_error);
    
    $e = $_POST['email'];
    $query = "SELECT id,password FROM users WHERE email='$e'";
    $result = $conn->query($query);
    if (!$result) die($conn->error);
    elseif ($result->num_rows)
    {
        $row = $result->fetch_array(MYSQLI_NUM);
        $result->close();
        
        if ($_POST['pass'] == $row[1])
        {
            session_start();
            $_SESSION['user'] = $row[0];
            header('Location: profile.php');
        }
        else die("Invalid username/password combination");        
    }
    else die("Invalid username/password combination");
        
    
    $conn->close();
    //echo $_POST['email']."<br>".$_POST['pass'];    
?>
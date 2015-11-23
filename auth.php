<?php    
    $conn = new mysqli('localhost', 'root', '', 'servemoredata');
    if ($conn->connect_error) die($conn->connect_error);
    
    $e = $_POST['email'];
    $query = "SELECT id,password,firstname FROM users WHERE email='$e'";
    $result = $conn->query($query);
    if (!$result) die($conn->error);
    elseif ($result->num_rows)
    {
        $row = $result->fetch_array(MYSQLI_NUM);
        $result->close();
        
        if ($_POST['pass'] == $row[1])
        {
            session_start();
            $_SESSION['userID'] = $row[0];
            $_SESSION['userName'] = $row[2];
            header('Location: index.php');
        }
        else die("Invalid username/password combination");        
    }
    else die("Invalid username/password combination");        
    $conn->close();
?>
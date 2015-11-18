<?php 
    require_once 'tools.php';
    $conn = new mysqli('localhost', 'root', '', 'servemoredata');
    if ($conn->connect_error) die($conn->connect_error);
    
    $name = sanitize($conn, $_POST['title']);
    $promoter = 1; //$_SESSION['user']; - should be set to currently logged in user
    $loc = sanitize($conn, $_POST['location']);
    $descrip = sanitize($conn, $_POST['description']);
    $goals = sanitize($conn, $_POST['goals']);
    
    $query = "INSERT INTO opportunities" . 
        "(name, promoter, description, location, goals) VALUES" . 
        "('$name', $promoter, '$descrip', '$loc', '$goals')";
    $result = $conn->query($query);
    if (!$result) echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
    
    $conn->close();
    header('Location: promotenow.html'); // should send to opp page
?>
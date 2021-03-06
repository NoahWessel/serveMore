<?php 
    require_once 'tools.php';
    $conn = new mysqli('localhost', 'root', '', 'servemoredata');
    if ($conn->connect_error) die($conn->connect_error);
    
    session_start();
    if (isset($_SESSION['userID']))
    {
        $name = sanitize($conn, $_POST['title']);
        $promoter = $_SESSION['userID'];        
        $descrip = sanitize($conn, $_POST['description']);
        $loc = sanitize($conn, $_POST['location']);
        $goals = sanitize($conn, $_POST['goals']);        
        $date = $_POST['oppDate'];
        $time = $_POST['oppTime'].":00";
        $type = $_POST['oppType'];                
        
        $query = "INSERT INTO opportunities" . 
            "(name, promoter, description, location, goals, date, time, type) VALUES". 
            "('$name', $promoter, '$descrip', '$loc', '$goals', '$date', '$time', '$type')";
        $result = $conn->query($query);                
        if (!$result) echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";            
        $id = $conn->insert_id;        
        
        if (isset($_FILES['picture']))
        {
            $target_dir = "oppPics/$id/";
            mkdir("oppPics/$id", 0777, true);
            $temp_target = $target_dir.$_FILES['picture']['name'];
            $ext = pathinfo($temp_target, PATHINFO_EXTENSION);
            $target_file = $target_dir."0".".$ext";            
            move_uploaded_file($_FILES['picture']['tmp_name'], $target_file);
            
            $query = "UPDATE opportunities SET ext='$ext' WHERE id=$id;";
            $conn->query($query);
        }    
        
        $_SESSION['promoOpp'] = $id;
        header('Location: opportunity.php');
    }
    else
        die("No User Logged In");
    $conn->close();
?>
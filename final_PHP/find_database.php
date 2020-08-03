<?PHP
    
    $conn = mysqli_connect("localhost","root","123456789","hospital_final");
    $result = mysqli_query($conn, "SELECT * FROM hospital_dataset ORDER BY data_id DESC LIMIT 1" );

    $last_data = array();
    while($row = mysqli_fetch_assoc($result)){
        $last_data[] = $row;
    }
    echo json_encode($last_data);

    mysqli_close($conn);
    // exit();
?>


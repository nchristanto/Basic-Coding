<?php
    require_once 'setting_server.php';
    $query = "Select = from user_review";
    $sql = mysqli_query($con, $query);
    $ray = array();
    while ($row = mysqli_fetch_array($sql)){
        array_push($ray, array(
            "id_user_review" => $row ['id']
            ));
    }

    echo json_encode($ray);

    mysqli_close($con);
?>

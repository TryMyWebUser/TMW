<?php

include "libs/load.php";

// Secure delete operation
if (isset($_GET['delete_id'])) {
    $conn = Database::getConnect();
    
    $delete_id = intval($_GET['delete_id']); // Convert to integer to prevent SQL injection
    $qry = $conn->query("SELECT * FROM `training` WHERE `id` = '$delete_id' ")->fetch_array();
    $sql = "DELETE FROM `training` WHERE `id` = '$delete_id'";
    $result = $conn->query($sql);
    if ($result) {
        if(!empty($qry['frame'])){
            if(is_file($qry['frame'])) {
                unlink($qry['frame']);
                header("Location: viewTrainings.php");
            }
        }
    } else {
        header("Location: viewTrainings.php?error=Failed to delete image");
    }
} 

?>
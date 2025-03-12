<?php

include "libs/load.php";

// Secure delete operation
if (isset($_GET['delete_id'])) {
    $conn = Database::getConnect();
    
    $delete_id = intval($_GET['delete_id']); // Convert to integer to prevent SQL injection
    $qry = $conn->query("SELECT * FROM `promo` where `id` = '$delete_id' ")->fetch_array();
    $sql = "DELETE FROM `promo` WHERE `id` = '$delete_id'";
    $result = $conn->query($sql);
    if ($result) {
        if(!empty($qry['img'])){
            if(is_file($qry['img'])) {
                unlink($qry['img']);
                header("Location: viewPromotions.php");
            }
        }
    } else {
        header("Location: viewPromotions.php?error=Failed to delete image");
    }
} 

?>
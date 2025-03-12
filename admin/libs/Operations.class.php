<?php

class Operations
{
    public static function setProjectImages($title, $link, $img)
    {
        $conn = Database::getConnect();
        $targetDir = "uploads/pro/"; // Define your upload directory
        
        if (!is_dir($targetDir)) {
            // Create directory with proper permissions
            mkdir($targetDir, 0777, true);
        }

        $allowTypes = ['jpg', 'png', 'jpeg', 'gif'];

        // Required file uploads
        $requiredFiles = [
            'img' => $_FILES["img"]
        ];

        foreach ($requiredFiles as $key => $file)
        {
            $fileName = basename($file["name"]);
            $filePath = $targetDir . $fileName;
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            if (!in_array($fileType, $allowTypes) || !move_uploaded_file($file["tmp_name"], $filePath))
            {
                return "Error uploading required file: $key.";
            }
            $$key = $filePath; // Dynamically assign variable with directory
        }

        // Insert data into database
        $sql = "INSERT INTO `project` (`title`, `img`, `created_at`, `links`) 
                VALUES ('$title', '$img', now(), '$link')";

        if ($conn->query($sql))
        {
            header("Location: viewProjects.php");
            exit;
        }
        else
        {
            return "Error occurred while saving data: " . $conn->error;
        }
    }
    public static function setPromoImages($img)
    {
        $conn = Database::getConnect();
        $targetDir = "uploads/promo/"; // Define your upload directory
        
        if (!is_dir($targetDir)) {
            // Create directory with proper permissions
            mkdir($targetDir, 0777, true);
        }

        $allowTypes = ['jpg', 'png', 'jpeg', 'gif'];

        // Required file uploads
        $requiredFiles = [
            'img' => $_FILES["img"]
        ];

        foreach ($requiredFiles as $key => $file)
        {
            $fileName = basename($file["name"]);
            $filePath = $targetDir . $fileName;
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            if (!in_array($fileType, $allowTypes) || !move_uploaded_file($file["tmp_name"], $filePath))
            {
                return "Error uploading required file: $key.";
            }
            $$key = $filePath; // Dynamically assign variable with directory
        }

        // Insert data into database
        $sql = "INSERT INTO `promo` (`img`, `created_at`) 
                VALUES ('$img', now())";

        if ($conn->query($sql))
        {
            header("Location: viewPromotions.php");
            exit;
        }
        else
        {
            return "Error occurred while saving data: " . $conn->error;
        }
    }
    public static function headLine($headline)
    {
        try
        {
            $conn = Database::getConnect();
            $sql = "INSERT INTO `headline` (`header`, `created_at`) VALUES ('$headline', now())";
            if ($conn->query($sql))
            {
                header("Location: addTrainings.php");
            }
        }
        catch (Exception $e) {
            return "Error occurred while inserting headline: " . $e->getMessage();
        }
    }
    public static function setTrainingImages($title, $img2, $dec, $cate, $point)
    {
        $conn = Database::getConnect();
        $targetDir = "uploads/training/"; // Define your upload directory
    
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
    
        $allowTypes = ['jpg', 'png', 'jpeg', 'gif'];
        $imagePaths = [];
    
        // Handling multiple file uploads
        foreach ($_FILES['img2']['name'] as $key => $fileName) {
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            $fileTmp = $_FILES['img2']['tmp_name'][$key];
            $fileError = $_FILES['img2']['error'][$key];
    
            if ($fileError === UPLOAD_ERR_OK && in_array($fileType, $allowTypes)) {
                $uniqueName = time() . "_" . basename($fileName);
                $filePath = $targetDir . $uniqueName;
    
                if (move_uploaded_file($fileTmp, $filePath)) {
                    $imagePaths[] = $filePath; // Store file path
                } else {
                    return "Error uploading file: $fileName.";
                }
            } else {
                return "Invalid file type or upload error for $fileName.";
            }
        }
    
        // Convert image paths array to a comma-separated string
        $imagesString = implode(',', $imagePaths);

        // SQL Query: Use prepared statements to avoid SQL injection
        $sql = "INSERT INTO `training` (`title`, `frame`, `dec`, `created_at`, `category`, `points`) 
                VALUES ('$title', '$imagesString', '$dec', NOW(), '$cate', '$point')";

        // Prepare statement
        if ($conn->query($sql)) {
            header("Location: viewTrainings.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $conn->error;
        }
    }
    public static function setTeamMembers($name, $role, $img)
    {
        $conn = Database::getConnect();
        $targetDir = "uploads/team/"; // Define your upload directory
        
        if (!is_dir($targetDir)) {
            // Create directory with proper permissions
            mkdir($targetDir, 0777, true);
        }

        $allowTypes = ['jpg', 'png', 'jpeg', 'gif'];

        // Required file uploads
        $requiredFiles = [
            'img' => $_FILES["img"]
        ];

        foreach ($requiredFiles as $key => $file)
        {
            $fileName = basename($file["name"]);
            $filePath = $targetDir . $fileName;
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            if (!in_array($fileType, $allowTypes) || !move_uploaded_file($file["tmp_name"], $filePath))
            {
                return "Error uploading required file: $key.";
            }
            $$key = $filePath; // Dynamically assign variable with directory
        }

        // Insert data into database
        $sql = "INSERT INTO `team` (`name`, `role`, `img`, `created_at`) 
                VALUES ('$name', '$role', '$img', now())";

        if ($conn->query($sql))
        {
            header("Location: viewTeam.php");
            exit;
        }
        else
        {
            return "Error occurred while saving data: " . $conn->error;
        }
    }

    public static function getProImage()
    {
        $getID = $_GET['edit_id'];
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `project` WHERE `id` = '$getID'";
        // die(var_dump($sql));
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
    public static function getPromoImage()
    {
        $getID = $_GET['edit_id'];
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `promo` WHERE `id` = '$getID'";
        // die(var_dump($sql));
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
    public static function getTrainingImage($conn)
    {
        $getID = $_GET['edit_id'];
        // $db = Database::getConnect();
        // die(var_dump($db));
        $sql = "SELECT * FROM `training` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
    public static function getTeamMember()
    {
        $getID = $_GET['edit_id'];
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `team` WHERE `id` = '$getID'";
        // die(var_dump($sql));
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }

    public static function getProImages()
    {
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `project` ORDER BY `created_at` DESC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getPromoImages()
    {
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `promo` ORDER BY `created_at` DESC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getHeader()
    {
        $conn = Database::getConnect();
        $sql = "SELECT `header` FROM `headline` ORDER BY `created_at` DESC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getTrainingImages()
    {
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `training` ORDER BY `created_at` DESC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getTeamMembers()
    {
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `team` ORDER BY `created_at` DESC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
}

?>
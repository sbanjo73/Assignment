<?php
include 'config/db.php';

class Review {
    public static function getAll() {
        global $conn;
        $query = "SELECT * FROM reviews";
        $result = $conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>

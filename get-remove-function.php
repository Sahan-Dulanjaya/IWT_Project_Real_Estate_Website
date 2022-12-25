<?php
class Common
{
    public function getAllRecords($connection) {
        $query = "SELECT * FROM considerationlist";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }

    public function deleteRecordById($connection,$recordId) {
        $query = "DELETE FROM considerationlist WHERE p_ID='$recordId'";
        $result = $connection->query($query) or die("Error in query2".$connection->error);
        return $result;
    }
}
?>
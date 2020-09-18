<?php

class Activities extends Dbh{


    protected function setActivity($activity, $evidence){
        $dateofactivity = date('y-m-d');
        $sql = "INSERT INTO small_wins(activity, evidence, dateofactivity) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$activity, $evidence, $dateofactivity]);

        return $result;
    }

    protected function getActivitiesFromDb(){
        $sql = "SELECT * FROM small_wins";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getOneActivityFromDb(){
        $id = $_GET['id'];

        $sql = "SELECT * FROM small_wins WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([':id' => $id]);
        $activityRecord = $stmt->fetch(PDO::FETCH_OBJ);
        
        return $activityRecord;
    }

    protected function editActivity($activity, $evidence){
        $id = $_GET['id'];

        $sql = "UPDATE small_wins SET activity=?, evidence=? WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$activity, $evidence, $id]);
    
        return $result;
       
    }

    protected function deleteActivity($id){
        $id = $_GET['id'];

        $sql = "DELETE FROM small_wins WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        if($stmt->execute($id)){
            header('Location: index.php');
        } else{
            echo 'Record not removed';
        }

    }
}
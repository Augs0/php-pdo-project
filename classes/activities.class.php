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
}
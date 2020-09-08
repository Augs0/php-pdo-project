<?php

class Activities extends Dbh{
    
    protected function getActivity($activity){
        $sql = "SELECT * FROM small_wins WHERE activity = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$activity]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setActivity($activity, $evidence, $dateofactivity){
        $sql = "INSERT INTO small_wins(activity, evidence, dateofactivity) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$activity, $evidence, $dateofactivity]);
    }
}
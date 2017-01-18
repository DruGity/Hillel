<?php

namespace answers;

class OrmForVoting
{
   
    private $pdo;

    public function __construct($dsn, $username = "", $password = "")
    {
        try {
            $this->pdo = new \PDO($dsn, $username, $password);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $ex) {
            echo "<b>Database connection error</b>: " . $ex->getMessage();
        }
    }

public function saveWindows(OS $golos1) 
    {
        $a = "true";
        $sql = "insert into answers (windows) value (:true)";
        
        $sth = $this->pdo->prepare($sql);

        $windows = $golos1->getGolosForWindows(); 
        $sth->bindParam(":true", $a);

        $sth->execute();

    }

    public function saveLinux(OS $golos2) 
    {
        $a = "true";
        $sql = "insert into answers (linux) value (:true)";
        
        $sth = $this->pdo->prepare($sql);

        $linux = $golos2->getGolosForLinux(); 
        $sth->bindParam(":true", $a);

        $sth->execute();

    }


    public function saveMac(OS $golos3) 
    {
        $a = "true";
        $sql = "insert into answers (mac) value (:true)";
        
        $sth = $this->pdo->prepare($sql);

        $mac = $golos3->getGolosForMac(); 
        $sth->bindParam(":true", $a);

        $sth->execute();

    }



     public function getAnswerAll()
    {   
       $a = "true";
       $sql[0] = "select * from answers where windows = :true ";
       $sql[1] = "select * from answers where linux = :true" ;
       $sql[2] = "select * from answers where mac = :true" ;

       for($i=0;$i<3;$i++){

       $sth = $this->pdo->prepare($sql[$i]);
       $sth->bindParam(":true", $a);
       $sth->execute();

       $count[$i] = $sth->rowCount();
       }
      
       
       return $count;
        
    }

}

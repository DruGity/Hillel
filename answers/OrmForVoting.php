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
        
        $sql = "insert into windows (golos) value (:golos)";
        
        $sth = $this->pdo->prepare($sql);

        $windows = $golos1->getGolosForWindows(); 
        $sth->bindParam(":golos", $windows);

        $sth->execute();

    }

    public function saveLinux(OS $golos2) 
    {
        
        $sql = "insert into linux (golos) value (:golos)";
        
        $sth = $this->pdo->prepare($sql);

        $linux = $golos2->getGolosForLinux(); 
        $sth->bindParam(":golos", $linux);

        $sth->execute();

    }


    public function saveMac(OS $golos3) 
    {
        
        $sql = "insert into mac (golos) value (:golos)";
        
        $sth = $this->pdo->prepare($sql);

        $mac = $golos3->getGolosForMac(); 
        $sth->bindParam(":golos", $mac);

        $sth->execute();

    }



     public function getAnswerAll()
    {   
        $sql[0] = "select * from windows";
       $sql[1] = "select * from linux";
       $sql[2] = "select * from mac";

       for($i=0;$i<3;$i++){

       $sth = $this->pdo->prepare($sql[$i]);
       $sth->execute();

       $count[$i] = $sth->rowCount();
       }
      
       
       return $count;
        
    }

}

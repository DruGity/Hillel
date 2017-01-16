<?php

namespace classes;

class ORM
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

    public function saveProduct(Product $product) 
    {
        
        $sql = "insert into product (type, name, price, descr, manuf, color) values (:type, :name, :price, :descr, :manuf, :color)";

        $sth = $this->pdo->prepare($sql);

        $prodType = $product->getType(); 
        $sth->bindParam(":type", $prodType);

        $prodName = $product->getName();  
        $sth->bindParam(":name", $prodName);

        $prodPrice = $product->getPrice();  
        $sth->bindParam(":price", $prodPrice);

        $prodDescription = $product->getDescription();  
        $sth->bindParam(":descr", $prodDescription);

        $prodManufacturer = $product->getManufacturer();  
        $sth->bindParam(":manuf", $prodManufacturer);

        $prodColor = $product->getColor();  
        $sth->bindParam(":color", $prodColor);

        $sth->execute();
    }


     public function saveModel(Model $model) 
    {
        
        $sql = "insert into model (type, name, price, descr, manuf, color, special) values (:type, :name, :price, :descr, :manuf, :color, :special)";


        $sth = $this->pdo->prepare($sql);

        $prodType = $model->getType();  // сделать геттер
        $sth->bindParam(":type", $prodType);

        $prodName = $model->getName();  // сделать геттер 
        $sth->bindParam(":name", $prodName);

        $prodPrice = $model->getPrice();  // сделать геттер
        $sth->bindParam(":price", $prodPrice);

        $prodDescription = $model->getDescription();  
        $sth->bindParam(":descr", $prodDescription);

        $prodManufacturer = $model->getManufacturer();  
        $sth->bindParam(":manuf", $prodManufacturer);

        $prodColor = $model->getColor();  // сделать геттер
        $sth->bindParam(":color", $prodColor);

        $prodColor = $model->getColor();  // сделать геттер
        $sth->bindParam(":color", $prodColor);

        $specialOffer = $model->getSpecial();  // сделать геттер
        $sth->bindParam(":special", $specialOffer);

        $sth->execute();
    }

    public function saveGood(Good $good) 
    {
        
        $sql = "insert into good (type, name, price, descr, manuf, color, special2) values (:type, :name, :price, :descr, :manuf, :color, :special2)";


        $sth = $this->pdo->prepare($sql);

        $prodType = $good->getType();  // сделать геттер
        $sth->bindParam(":type", $prodType);

        $prodName = $good->getName();  // сделать геттер 
        $sth->bindParam(":name", $prodName);

        $prodPrice = $good->getPrice();  // сделать геттер
        $sth->bindParam(":price", $prodPrice);

        $prodDescription = $good->getDescription();  
        $sth->bindParam(":descr", $prodDescription);

        $prodManufacturer = $good->getManufacturer();  
        $sth->bindParam(":manuf", $prodManufacturer);

        $prodColor = $good->getColor();  // сделать геттер
        $sth->bindParam(":color", $prodColor);

         $specialOffer2 = $good->getSpecialOf();  // сделать геттер
        $sth->bindParam(":special2", $specialOffer2);

        $sth->execute();
    }



    public function getProductById($id)   // сделать для каждого класса 
    {
        $sql = "select * from product where id = :id";

        $sth = $this->pdo->prepare($sql);
        $sth->bindParam(":id", $id, \PDO::PARAM_INT);
        $sth->execute();

        $data = $sth->fetchAll(\PDO::FETCH_ASSOC);

        $product = new Product($data[0]["type"], $data[0]["name"], $data[0]["price"], $data[0]["descr"],$data[0]["manuf"],$data[0]["color"]);  // тут не ругается

        return $product;
    }

    public function getModelById($id)   // сделать для каждого класса 
    {
        $sql = "select * from model where id = :id";

        $sth = $this->pdo->prepare($sql);
        $sth->bindParam(":id", $id, \PDO::PARAM_INT);
        $sth->execute();

        $data = $sth->fetchAll(\PDO::FETCH_ASSOC);
        $model = new Model($data[0]["type"], $data[0]["name"], $data[0]["price"], $data[0]["descr"],$data[0]["manuf"],$data[0]["color"],$data[0]["special"]);
        //$model = new Model("Tablet", "Ipad mini", "599", "Pretty nice product", "Apple", "Black", "-100$ till " . " " . Model::TIME_FOR_OFFER2);

        

        // Ругается на $data[1]  new Model($data[1]["type"], $data[1]["name"], $data[1]["price"], $data[1]["descr"],$data[1]["manuf"],$data[1]["color"],$data[1]["special"]);

        return $model;
    }

    public function getGoodById($id)   // сделать для каждого класса 
    {
        $sql = "select * from good where id = :id";

        $sth = $this->pdo->prepare($sql);
        $sth->bindParam(":id", $id, \PDO::PARAM_INT);
        $sth->execute();

        $data = $sth->fetchAll(\PDO::FETCH_ASSOC);

        $good = new Good($data[0]["type"], $data[0]["name"], $data[0]["price"], $data[0]["descr"],$data[0]["manuf"],$data[0]["color"],$data[0]["special2"]);

        //$good = new Good("Headphones", "CX300II", "50", " Its comfortable headphones ", "sennheiser ", "yellow", "-10$ till" . " " . Good::TIME_FOR_OFFER); // тут тоже ругается

        return $good;
    }

    
}
<?php

namespace Narut\ClassicModel\Entity;

class ProductLine 
{  
    private \PDO $connector;

    public string $productLine = "hello";

    public function __construct(\PDO $connector) 
    {
        $this->connector = $connector;
    }

    // public function f(int $y): int {
    //     return $x;
    // }

    public function getProductLines(): array {

        $sql = "SELECT * FROM productLines";
        $statement = $this->connector->prepare($sql);
        $statement->execute([]);
        
        return $statement->fetchAll();
    }
}
?>
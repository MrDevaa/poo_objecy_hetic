<?php

    namespace Narut\ClassicModel\Entity;

class Offices
{
    private \PDO $connector;

    public string $offices = "Bureaux";

    public function __construct(\PDO $connector)
    {
        $this->connector = $connector;
    }

    // public function f(int $y): int {
    //     return $x;
    // }

    public function getOffices() : array {
        $sql = "SELECT * FROM offices";
        $statement = $this->connector->prepare($sql);
        $statement->execute([]);

        return $statement->fetchALl();
    }
}

?>
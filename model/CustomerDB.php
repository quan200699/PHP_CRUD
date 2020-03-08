<?php


namespace Model;


class CustomerDB
{
    public $connection;

    public function _construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($customer)
    {
        $sql = "Insert into 'customer' ('name','address','phone','country') VALUES (?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->name);
        $statement->bindParam(2, $customer->address);
        $statement->bindParam(3, $customer->phone);
        $statement->bindParam(4, $customer->country);
        return $statement->execute();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM customer";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $customers = [];
        foreach ($result as $row) {
            $customer = new Customer($row['name'], $row['address'], $row['phone'], $row['country']);
            $customer->id = $row['id'];
            $customers[] = $customer;
        }
        return $customers;
    }
}
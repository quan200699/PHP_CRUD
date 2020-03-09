<?php


namespace Controller;


use Model\Customer;
use Model\CustomerDB;
use Model\DBConnection;

class CustomerController
{
    public $customerDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=customer_management", "root", "123456");
        $this->customerDB = new CustomerDB($connection->connect());
    }

    public function index(){
        $customers = $this->customerDB->getAll();
        include 'view/list.php';
    }


    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $country = $_POST['country'];
            $customer = new Customer($name, $address, $phone, $country);
            $this->customerDB->create($customer);
            $message = 'Customer created';
            include 'view/add.php';
        }
    }
}
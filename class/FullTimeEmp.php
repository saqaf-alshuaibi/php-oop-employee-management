<?php
require_once("Employee.php");
class FullTimeEmp extends Employee
{
    private $id;
    private $salary;
    private static $fullTimeEmpNumbers = 0;

    public function __construct($name, $email, $salary)
    {
        parent::__construct($name, $email);
        $this->setSalary($salary);
        $this->id = ++self::$fullTimeEmpNumbers;
    }

    public function getId()
    {
        return $this->id;
    }


    /**
     * Set salary of full time employee. ex: 250
     * @param mixed $salary Is number and salary > 0.
     * @return void
     */
    public function  setSalary($salary)
    {
        if (is_numeric($salary) && $salary > 0) {
            $this->salary = $salary;
            return;
        }
        echo "The salary data is not valid <pre>";
    }


    public function getSalary()
    {
        return $this->salary;
    }
    // End get salary






    public function Details()
    {
        echo "<pre>ID:  " . $this->getId();
        echo "<pre>Name:  " . $this->getName();
        echo "<pre>Email:  " . $this->getEmail();
        echo "<pre>Salary:  " . $this->getSalary();
        echo "<pre>Employee Type:  Full Time";
         $this->sendWelcomeMessage();
        echo "<pre>--------------------------";
    }

    public function sendWelcomeMessage()
    {
        echo "<pre> emp: " . $this->getName() . " from full time employee section welcome in our company";
    }

    public  static function getFullTimeEmpNumbers(){
        return self::$fullTimeEmpNumbers;
    }
}

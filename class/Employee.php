<?php

require_once("employee_interface/EmployeeInterface.php");
require_once("employee_interface/detailsInterface.php");
abstract class  Employee implements EmployeeInterface, DetailsInterface
{
    private $name;
    private $email;
    private static $employeeNumbers = 0; //Numbers of all employee.

    public function __construct($name, $email)
    {
        $this->setName($name);
        $this->setEmail($email);
        ++self::$employeeNumbers;
    }
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name of employee.
     * @param mixed $name is string  Ex:Saqaf
     * @return void
     */
    public function setName($name)
    {
        if (is_string($name) && !empty($name)) {
            $this->name = $name;
            return;
        }
        echo "The name is not valid <pre>";
    }
    // End set name


  

    public function getEmail()
    {
        return $this->email;
    }
    // End get email


    /**
     * Set email of employee.
     * @param mixed $email Is string and not null. Ex:saq@gmail.com
     * @return void
     */
    public function setEmail($email)
    {
        if (is_string($email) && !empty($email)) {
            $this->email = $email;
            return;
        }
        echo "The email is not valid <pre>";
    }
    // End set email





    /**
     * Get numbers od employee.
     */
    public static function getEmployeeNumbers()
    {
        return self::$employeeNumbers;
    }
}

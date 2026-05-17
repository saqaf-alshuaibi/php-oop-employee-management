<?php
require_once("Employee.php");
class PartTimeEmp extends Employee
{
    private $id;
    private $hoursWorked = 0;
    private $salary;
    private static $partTimeEmpNumbers = 0;

    public function __construct($name, $email, $salary, $hoursWorked)
    {
        parent::__construct($name, $email);
        $this->setSalary($salary, $hoursWorked);
        $this->id = ++self::$partTimeEmpNumbers;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Summary of get hours worked of part time class
     */
    public function getHoursWorked()
    {
        return $this->hoursWorked;
    }

    /**
     * Summary of set hours worked of part time class
     * @param mixed $hoursWorked is number and hoursWorked > 0
     * @return void
     */
    public function setHoursWorked($hoursWorked)
    {
        if (is_numeric($hoursWorked) && $hoursWorked > 0) {
            $this->hoursWorked = $hoursWorked;
            return;
        }
        echo "The hours worked is not valid <pre>";
    }

    /**
     * The function is used instead of the setSalary().
     * @param mixed $salary Price one hour.
     * @param mixed $hoursWorked numbers of hour worked.
     * @return void
     */
    public function setSalary($salary, $hoursWorked)
    {
        $this->setHoursWorked($hoursWorked);
        
        if ($this->salaryIsValid($salary)) {
            $this->salary = $salary * $hoursWorked;
            return;
        }
        echo "The salary data is not valid <pre>";
    }

    // check salary is valid or not
    private function  salaryIsValid($salary)
    {
        return (is_numeric($salary) && $salary > 0);
    }


    /**
     * Display all information of part time object.
     * @return void
     */
    public function Details()
    {
        echo "<pre>ID:  " . $this->getId();
        echo "<pre>Name:  " . $this->getName();
        echo "<pre>Email:  " . $this->getEmail();
        echo "<pre>Hours Worked:  " . $this->getHoursWorked();
        echo "<pre>Salary:  " . $this->getSalary();
        echo "<pre>Employee Type:  Part Time";
        $this->sendWelcomeMessage();
        echo "<pre>--------------------------";
    }

    public function sendWelcomeMessage()
    {
        echo "<pre> emp: " . $this->getName() . " from part time employee section welcome in our company";
    }

  /**
   * get Part Time Emp Numbers
   */
  public  static function getPartTimeEmpNumbers(){
        return self::$partTimeEmpNumbers;
    }

}

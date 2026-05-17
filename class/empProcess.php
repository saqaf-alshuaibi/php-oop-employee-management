<?php
// require_once("employee_interface/");
class empProcess
{

    private function calculateTotalSalary(EmployeeInterface $opEmp)
    {
        return $opEmp->getSalary();
    }


    private function displayDetails(detailsInterface $opEmp)
    {
        $opEmp->details();
    }

    public function getCalculateTotalSalary($list = [])
    {
        $total_salary = 0;
        foreach ($list as $item)
            $total_salary += $this->calculateTotalSalary($item);

        return  $total_salary;
    }

    /**
     * Diplay information of all objects
     * @param mixed $list array of objects from all type employee
     * @return void
     */
    public function getDisplayDetails($list = [])
    {
        foreach ($list as $item)
            $this->displayDetails($item);
    }
}

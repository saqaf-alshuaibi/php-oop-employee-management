<?php

require_once("class/FullTimeEmp.php");
require_once("class/PartTimeEmp.php");
require_once("class/ContractEmp.php");
require_once("class/empProcess.php");

$opFulTime1 = new FullTimeEmp("Saqaf", "sa@gmail.com", 1000);
$opFulTime2 = new FullTimeEmp("Hadil", "ha@gmail.com", 400);
// $opFulTime3 = new FullTimeEmp("Nora", "nora@gmail.com", 200);




$opPartTime1 = new PartTimeEmp("Ali", "ali@gmail.com", 50, 5);
$opPartTime2 = new PartTimeEmp("Rahaf", "rahaf@gmail.com", 1500, 4);
// $opPartTime3 = new PartTimeEmp("Mokhtar", "mokh@gmail.com", 130, 8);


$opContractEmp1 = new ContractEmp("Mohammed", "moha@gmail.com", 2000);
$opContractEmp2 = new ContractEmp("Bashar", "bashar@gmail.com", 6000);
// $opContractEmp3 = new ContractEmp("Hanaa", "han@gmail.com", 200);


//Display information of numbers employee
echo "<pre>All numbers of employee is: " . employee::getEmployeeNumbers() . " , numbers of full time employees is "
    . FullTimeEmp::getFullTimeEmpNumbers() . " , numbers of part time employees is " . PartTimeEmp::getPartTimeEmpNumbers()
    . " and numbers of Contract employees is " . ContractEmp::getContractEmpNumbers();
echo "<pre>******************************";


// array contain of all objects.
$opList = [
    $opFulTime1,
    $opFulTime2,
    $opPartTime1,
    $opPartTime2,
    $opContractEmp1,
    $opContractEmp2,
];

$opEmpProcess1 = new empProcess();
$opEmpProcess1->getDisplayDetails($opList);

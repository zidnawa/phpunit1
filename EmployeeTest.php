<?php

/*use App\Employee;*/
use PHPUnit\Framework\TestCase;
require_once "./Employee.php";

class EmployeeTest extends TestCase
{
    /** @test */
    public function shouldCreateObject()
    {
        $id = 1;
        $name = 'John Smith';
        $basicSalary = 1000000;

        $obj = new Employee(
            $id,
            $name,
            $basicSalary
        );

        $this->assertEquals($id, $obj->getId());
        $this->assertEquals($name, $obj->getName());
        $this->assertEquals($basicSalary, $obj->getBasicSalary());
    }
}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPS</title>
</head>

<body>
    <?php

    class Employee
    {
        private $first_name;
        private $last_name;
        private $age;

        public function __construct($first_name, $last_name, $age)
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->age = $age;
        }
        public function getFirstName()
        {
            return $this->first_name;
        }
        public function getLastName()
        {
            return $this->last_name;
        }
        public function getAge()
        {
            return $this->age;
        }
    }

    $objEmployee = new Employee('Bob', 'Smith', 30);
    echo $objEmployee->getFirstName(); // print 'Bob' 
    echo $objEmployee->getLastName(); // prints 'Smith' 
    echo $objEmployee->getAge(); // prints '30'
    

    $objEmployeeOne = new Employee('Bob', 'Smith', 30);
    echo $objEmployeeOne->getFirstName(); // prints 'Bob' 
    echo $objEmployeeOne->getLastName(); // prints 'Smith' 
    echo $objEmployeeOne->getAge(); // prints '30' 
    $objEmployeeTwo = new Employee('John', 'Smith', 34);
    echo $objEmployeeTwo->getFirstName(); // prints 'John' 
    echo $objEmployeeTwo->getLastName(); // prints 'Smith' 
    echo $objEmployeeTwo->getAge(); // prints '34'
    

    class Person
    {
        public $name;
        public function getName()
        {
            return $this->name;
        }
    }
    $person = new Person();
    $person->name = 'Bob Smith';
    echo $person->getName(); // prints 'Bob Smith' 


    ?>


</body>

</html>
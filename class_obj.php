<?php 

class Wappnet {


    public $emp_name;
    public $emp_salary;
    public $emp_position;

    public function Wappnet($emp_name,$emp_position,$emp_salary){

        $this->emp_name = $emp_name;
        $this->emp_salary = $emp_salary;
        $this->emp_position = $emp_position;

        echo $emp_name;


        // echo " Value for insant on data";
    }

    public function Deposit(){

        echo "Are You Deposit on 2000";
    }

    public function Withdraw(){
        echo "Are You Withdraw on Atm";
    }


}

$Arpit = new Wappnet("Arpit Dholariya","Software Decelopment Engineer",45000);
echo "<pre>";

// echo $Arpit->$emp_name();

// echo $Arpit->emp_name();


  print_r($Arpit);

 // var_dump($Arpit);

// var_dump($Arpit->Deposit());

?>
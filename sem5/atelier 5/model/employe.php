<?php
class Employe{
    private $lastName;
    private $firstName;
    private $password;
    private $phone;
    private $email;
    private $dOB;
    

    /*public function __construct()//constructeur par default
    {
        $this->firstName="";
        $this->lastName="";
        $this->password="";
        $this->phone="";
        $this->email="";
        $this->dOB="";
    }*/
    public function __construct($a,$b,$c,$d,$e,$f)//constructeur parametré
    {
        $this->firstName=$a;
        $this->lastName=$b;
        $this->password=$c;
        $this->phone=$d;
        $this->email=$e;
        $this->dOB=$f;
    }
    public function afficher()
    {
        echo "nom:".$this->firstName;
        echo "prenom:".$this->lastName;
        echo "password:".$this->password;
        echo "phone:".$this->phone;
        echo "email:".$this->email;
        echo "date of birth :".$this->dOB;

    }
    public function getLastName()   {return $this->LastName; }
    public function setLastNAme($a) {$this->lastName=$a;}
    public function getFirstName() {return $this->FirstName;}
    public function setFirstNAme($a) {$this->FirstName=$a;}
    public function getPassword()   {return $this->password; }
    public function setPassword($a) {$this->lpassword=$a;}
    public function getPhone()   {return $this->phone; }
    public function setPhone($a) {$this->phone=$a;}
    public function getEmail()   {return $this->email; }
    public function setEmail($a) {$this->email=$a;}
    public function getdOB()   {return $this->dOB; }
    public function setDOB($a) {$this->dOB=$a;}
    
}
$personne1= new Employe("flen","ben foulen","1234","2222","testmp@gmail.com","12-07-2023");
$personne1->afficher();
?>
<?php

class dataBaseClass {
    private $dbhost;
    private $dbname;
    private $user;
    private $pass;
    private $dbh;
    
    public function __construct($dbhost, $dbname, $user, $pass) {
        $this->dbhost=$dbhost;
        $this->dbname=$dbname;
        $this->pass=$pass;
        $this->user=$user;
    }
    
    public function connect(){
        try {  
            $dsn = "mysql:host=$this->dbhost; dbname=$this->dbname";
            $this->dbh = new PDO($dsn, $this->user, $this->pass);
            }  
        catch(PDOException $e) {  
            echo $e->getMessage();  
        }
    }
    
    public function insertUser($name, $pass, $email, $code){   
        $query = $this->dbh->prepare("select count(*) from `users` where nick = :name");
        $query->bindParam(":name", $name);
        $query->execute();
        $res = $query->fetch() ;
        if($res[0] == 0){
            $query = $this->dbh->prepare("insert into users(nick, password, email, code, active) values (:name,:pass, :email, :code, 0)");;
            $query->bindParam(":name", $name);
            $query->bindParam(":pass", $pass);
            $query->bindParam(":email", $email);
            $query->bindParam(":code", $code);
            $query->execute();
            return true;
        }
        return false;
    }
    
    public function  checkPassword($user_name, $password){
        $query = $this->dbh->prepare("select password from users where nick = :user_name");
        $query->bindParam(":user_name", $user_name);
        $query->execute() ;
        $pass = $query->fetch();
        
        if($pass[0] == $password)
            return true;
        else
            return false;
    }

    public function  getCodeActivate($user_name){
        $query = $this->dbh->prepare("select code from users where nick = :user_name");
        $query->bindParam(":user_name", $user_name);
        $query->execute() or die("die");
        $code =  $query->fetch();

        return $code[0];
    }

    public function setActiveteFlag($user_name){
        $query = $this->dbh->prepare("update users set active = TRUE where nick = :user_name");
        $query->bindParam(":user_name", $user_name);
        $query->execute() or die("die");
    }

    public function getUserData($user_name){
        $query = $this->dbh->prepare("select * from users where nick=:user_name");
        $query->bindParam(":user_name", $user_name);
        $query->execute();
        $res = $query->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    
    public function updateData($nick, $firstName, $lastName, $email){
        $qury = $this->dbh->prepare("update users set firstname=:fName, lastname=:lName, email=:email where nick=:nick")or die("die");
        $qury->bindParam(":nick", $nick)or die("die");
        $qury->bindParam(":fName", $firstName);
        $qury->bindParam(":lName", $lastName);
        $qury->bindParam(":email", $email);
        $qury->execute() or die("die");
    }
}



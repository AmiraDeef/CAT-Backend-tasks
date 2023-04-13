<?php


//class person{
//    public $name;
//    public $age;
//
//    public function Breathe(){
//        echo $this->name. " is Breathing";
//    }
//}
//
//$person =new person();
//$person->name ='Amira';
//$person-> age=20;
//
//($person->Breathe());


//connect to our MYSQL DataBase and execute a query
class Database{

    public $connection;

    public function __construct($config, $username = 'root', $password ='12345678')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement;
    }
}

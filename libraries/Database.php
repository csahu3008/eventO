<?php include '../config/config.php'; ?>
<?php

    // class Database{
     $host = DB_HOST;
     $username = DB_USER;
     $password = DB_PASS;
     $db_name = DB_NAME;

        $con = mysqli_connect('$host' , '$username' , '$password' , '$db_name');

    //     public $link;                  //Represent mysqli object
    //     public $error;                 //For reporting errors
        
    //     public function __construct()
    //     {
    //         //Call Conect function
    //         $this->connect();
    //     }

    //     //Connector

    //     private function connect()
    //     {
    //         $this->link = new mysqli($this->host , $this->username , $this->password , $this->db_name);

    //         if(!$this->link)
    //         {
    //             $this->error = "Connection Error : ".$this->link->connect_error;
    //             return false;
    //         }
    //     }

    //     //SELECT

    //     public function select($query)
    //     {
    //         $rs = $this->link->query($query) or die($this->link->error.__LINE__);
    //         if($rs->num_rows > 0)
    //         {
    //             return $rs;
    //         }
    //         else{
    //             return false;
    //         }
    //     }

    //     //INSERT

    //     public function insert($query)
    //     {
    //         $insert_rows = $this->link->query($query)  or die($this->link->error.__LINE__);

    //         //Validating Insert

    //         if($insert_rows)
    //         {
    //             header("Location: index.php?msg=".urlencode("Record Added"));
    //             exit();
    //         }
    //         else{
    //             die('Error'.$this->link->errorno.')'. $this->link->error);
    //         }
    //     }
    //     //UPDATE

    //     public function update($query)
    //     {
    //         $update_rows = $this->link->query($query)  or die($this->link->error.__LINE__);

    //         //Validating Update

    //         if($update_rows)
    //         {
    //             header("Location: index.php?msg=".urlencode("Record Updated"));
    //             exit();
    //         }
    //         else{
    //             die('Error'.$this->link->errorno.')'. $this->link->error);
    //         }
    //     }

    //     //DELETE

    //     public function delete($query)
    //     {
    //         $delete_rows = $this->link->query($query)  or die($this->link->error.__LINE__);

    //         //Validating Update

    //         if($delete_rows)
    //         {
    //             header("Location: index.php?msg=".urlencode("Record Deleted"));
    //             exit();
    //         }
    //         else{
    //             die('Error'.$this->link->errorno.')'. $this->link->error);
    //         }
    //     }


        
    // }


?>
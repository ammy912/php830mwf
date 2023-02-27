<?php
$dele_id=(isset($_GET['id']));

// include 'model.php';

class model 
{
    public $connection="";
    public function __construct()
    {
        try 
        {
            $this->connection=new mysqli("localhost","root","","task1");
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->connection,$e));
        }
    }


    // delete a data nd create member function
    public function deletedata($table)
    {
        $delete="DELETE FROM 'model_table'.'id'=1";
        $exe=mysqli_query($this->connection,$delete);
        header("location: http://localhost/php/mvc%20task/");
        mysqli_close($connection);
    } 
   
}
?>
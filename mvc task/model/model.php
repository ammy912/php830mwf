<?php 
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

     // create a member function for insert all data
     public function insertalldata($table,$data)
     {
         $column=array_keys($data);
         $column1=implode(",",$column);
 
         $values=array_values($data);
         $values1=implode("','",$values);
 
        //  echo $insert="insert into $table($column1) values('$values1')"; exit();
        $insert="insert into $table($column1) values('$values1')";
         // exexute the query nd its defined a $query nd $exe
         $query=mysqli_query($this->connection,$insert);
         return $query;
     }


      // fetch all data create a member function
    public function showalldata($table)
    {
        $select="select * from $table";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    } 
}
?>

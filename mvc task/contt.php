<?php
require_once("model/model.php");

if(isset($_POST['model']))
{
    $name=$_POST['name'];
    $price=$_POST['price'];
    $category=$_POST['category'];

    $sql="insert into `model_table`(name,price,category)
    values('$name','$price','$category')";
    $result=mysqli_query($connection,$sql);
    if($result)
    {
        echo "data inserted successfully"
    }
    else
    {
        die(mysqli_error($connection));
    }
}
?>

<!-- model.php -->

<?php
$connection=new mysqli("localhost","root","","task");
if(!$connection){
    die(mysqli_error($connection));
}
?>


<!-- model222.php -->
<?php
class model
{
    public $connection;
    public function __construct()
    {
        try
        {
            $this->connection=new mysqli("localhost","root","","task");
            // echo "connection is succesfully";
        }
        catch(Exception $e)
        {
            // echo "connection is not stablished";
        }
    }

    // create a member function for insert all data
    public function insertalldata($table,$data)
    {
        $column=array_keys($data);
        $column1=implode(",",$column);

        $values=array_values($data);
        $values1=implode("','",$values);

        $insert="insert into $table($column1) values('$values1')";
        // exexute the query nd its defined a $query nd $exe
        $query=mysqli_query($this->connection,$insert);
        return $query;
    }
}
?> 

<!-- controller -->
<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent:: __construct();

        // insert or store data in feedback
        if(isset($_POST["model_table"]))
        {
            $name=$_POST["name"];
            $price=$_POST["price"];
            $category=$_POST["Category"];
        
            $data=array("name"=>$name,"price"=>$price,"category"=>$category);
            $chk=$this->insertdata('model_table',$data);
            if($chk)
            {
                echo "<script>
                alert('thanks for created youe record with us')
                window.location='task';
                </script>";
            }
            else
            {
                echo "<script>
                alert('something want wrong pleace try again')
                model.location='task';
                </script>";
            }
        }

         // load view or controller
         if(isset($_SERVER["PATH_INFO"]))
         {
         switch($_SERVER["PATH_INFO"])
         {
             case '/task':
                 require_once("inddex.php");
                 require_once("task.php");
                 break;

                 default:
                 require_once("inddex.php");
                 break;
             }
            }
    }
}
$obj=new controller;
?>



<!-- delete.php -->
<?php
// require_once("model/model.php");
if(isset($_Get['deleteid']))
{
    $id=$_GET['deleteid'];

    $sql="delete from 'model_table' where id=$id";
    $query=mysqli_query($connection,$id);

    if($query)
    {
       echo "deleted successfully";
    }
    else
    {
       die(mysqli_error($this->connection,$e));
    }
}

?>


// delete query

if(isset($_POST['delete_rec']))
    {
        $fetch_id=mysqli_real_escape_string($connection, $_POST['delete_rec']);

        $query = "DELETE FROM model_table WHERE id='$fetch_id' ";
        $query_run=mysqli_query($connection,$query);

        if($query_run)
        {
            echo "<script>
            confirm('your data deleted successfully')
            </script>";     
        }
        else
        {
            echo "<script>
            confirm('your data is not deteted successfully')
            </script>";   
        }
    }


    // delete query
if(isset($_GET['delete_rec']))
{
    $id=$_GET["delete_rec"];
    $id=array("id"=>$id);
    $chk=$this->deletedata('model_table',$id);
    if($chk)
    {
        unset($_SESSION["id"]);
        unset($_SESSION["name"]);
        unset($_SESSION["price"]);
        unset($_SESSION["category"]);
        session_destroy();

        echo "<script>
        alert('deleted recoed')
        window.location='';
        </script>"
    }
}

// delete data
  if(isset($_GET["delete_rec"]))
  {
      $id=$_GET["delete_rec"];
      $id=array("id"=>$id);
      $chk=$this->deletedata('model_table',$id);
      if($chk)
      {
          unset($_SESSION["id"]);
          unset($_SESSION["name"]);
          unset($_SESSION["price"]);
          unset($_SESSION["category"]);
          session_destroy();
          echo "<script>
          alert('Your Profile successfuly deleted')
          window.location='./';
          </script>";
      }
  }

  //  create a member function for delete data
    public function deletedata($table,$id)
    {
        $column=array_keys($id);
        $column1=implode(",",$column);

        $values=array_values($id);
        $values1=implode("','",$values);
        
        $del="delete from $table where $column1='$values1'";
        $exe=mysqli_query($this->connection,$del);
        return $exe;

    }


    // create a member function for insert all data
    public function deletedata($table,$data)

    {
        // $column=array_keys($data);
        // $column1=implode(",",$column);

        // $values=array_values($data);
        // $values1=implode("','",$values);

        // DELETE FROM `model_table` WHERE `model_table`.`id` = 2

       //  echo $insert="insert into $table($column1) values('$values1')"; exit();
       $delete="DELETE FROM 'model_table' WHER 'model_table'.'id' = {$dele_id};
        // exexute the query nd its defined a $query nd $exe
        $query=mysqli_query($this->connection,$delete);
        return $query;
    }
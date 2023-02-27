<?php
require_once("model/model.php");

class controller extends model 
{
   public function __construct()
   {
    parent:: __construct();

//    logic
if(isset($_POST["sub"]))
{
    $name=$_POST['name'];
    $price=$_POST['price'];
    $category=$_POST['category'];

    // $sql="insert into `model_table`(name,price,category)
    // values('$name','$price','$category')";
    // $result = mysqli_query($connection,$sql);

$data=array("name"=>$name,"price"=>$price,"category"=>$category);
$chk=$this->insertalldata('model_table',$data);
    if ($chk)
    
    {
        echo "<script>
        confirm('you are registretion successfully')
        window.location='./';
        </script>";
    }
}

// show all product
// $showprod=$this->showalldata('model_task');

if(isset($_SERVER["PATH_INFO"]))
{
   switch($_SERVER["PATH_INFO"])

   {

    case '/':
        require_once("index.php");
        require_once("task.php");
        //require_once("inddex.php");    
        break;

        default:
        require_once("inddex.php");
        require_once("404.php");
        //require_once("inddex.php");    
        break;


   }
 }
}
}
$obj=new controller;
?>

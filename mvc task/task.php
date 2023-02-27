
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="container col-md-6">
  
  <h2>Search product: shirt</h2>   
  <div class="card-header">
    <div class="row col-md-12"  style="margin-bottom: 3%;">
      <div class="col-md-6">
        <div class="input-group">
            <div class="input-group-text" id="btnGroupAddon"></div>
            <input type="text" class="form-control bi-bi-search" style="margin-right: 100px;" placeholder="Shirt" aria-label="Input group example" aria-describedby="btnGroupAddon">
          </div>
    </div>        
<div class="col-md-6">
<button type="button" style="margin-left: 235px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Create Product</button>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-md-10">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">modal-header</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="container col-md-10">
        <form method="post" >
          <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" name="name" autocomplete="off" placeholder="Enter your name *" required="">
          </div>

          <div class="mb-3">
            <label>Price</label>
            <input type="number" class="form-control" name="price" autocomplete="off" placeholder="Enter your price *" required="">
          </div>

          <div class="mb-3">
            <label>Category</label>
            <input type="text" class="form-control" name="category" autocomplete="off" placeholder="Enter your Category *" required="">
          </div>
         
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <div class="mb-3">
          <button type="submit" name="sub"  style="margin-bottom: 3%;" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
 </div>
 <div class="row ">
 <div class="card-body col-md-12">
  <table border="1" class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    <!-- //   // fetch all data create a member function
    // public function selectalldata($table)
    // {
    //     $select="select * from $table";
    //     $exe=mysqli_query($this->connection,$select);
    //     while($fetch=mysqli_fetch_array($exe))
    //     {
    //         $arr[]=$fetch;
    //     }
    //     return $arr;
    // }  -->


      <?php
      // error_reporting(0);
       $select="select * from model_table";
       $exe=mysqli_query($this->connection,$select);
       if($exe)
       {
       while($fetch=mysqli_fetch_array($exe))
       {
        $arr[]=$fetch;
        $id=$fetch['id'];
        $name=$fetch['name'];
        $price=$fetch['price'];
        $categoery=$fetch['category'];
      
        echo '<tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$price.'</td>
        <td>'.$categoery.'</td>
        <td>       
         <form method="post">
         
         <button type="button" class="btn btn-primary">Insert</button>
         
         <button type="button" class="btn btn-info">Update</button>

         <button type="submit" class="btn btn-info btn btn-danger" style="text-decoration-color: aliceblue;">Delete</button>
        </form>
      </td>
      </tr>';
       }
      }
      
      ?>
      <!-- <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td><button type="button" class="btn btn-primary">Insert</button>
        <button type="button" class="btn btn-info">Update</button>
        <button type="button" class="btn btn-danger">Delete</button></td>
      </tr> -->
    
    </tbody>
  </table>
  </div>
  </div>

</div>
</body>
</html>

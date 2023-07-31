<?php
include_once('includes/config.php');

if(isset($_POST['save'])){
  $id = $_POST['id'];
  $title = $_POST['title'];
  $author = $_POST['author'];
  $price = $_POST['price'];

  $sql = "UPDATE book SET id = $id, title= '$title', author = '$author', price = $price WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if($result>0){
    echo "<script>alert('Recod Update Sucessfully!!');</script>";
    echo "<script>window.location.href = 'book_list.php';</script>";
  }else{
  echo "<script>alert('Recod not update');</script>";
};
};

if(isset($_GET['action']) && isset($_GET['id'])){
$action = $_GET['action'];
$id = $_GET['id'];
  if($action == 'update'){
      $sql = "select * from book where id = $id";
      $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)){
          $row = mysqli_fetch_assoc($result);
      };
}else if($action == 'delete'){
  $sql = "DELETE FROM book WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  if($result>0){
    echo "<script>alert('Recod Delete Sucessfully!!');</script>";
    echo "<script>window.location.href = 'book_list.php';</script>";
  }else{
    echo "<script>alert('Recod not delete');</script>";
};
};
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Book Edit</title>
  </head>
  <body>

    <div class="container my-4">
    <h1>Book Edit</h1>

    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Book Title" value="<?php echo $row['title']; ?>">
  </div>
  <div class="mb-3">
    <label for="author" class="form-label">Author</label>
    <input type="text" class="form-control" id="author" name="author" placeholder="Enter Book author" value="<?php echo $row['author']; ?>">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Book price" value="<?php echo $row['price']; ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="save">Save</button>
</form>


</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php include 'include.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Credential</title>
  </head>
  <body>
    <div class="container">
    <form action="sheet.php" method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Enter Credential To Check</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Credential" name="credd">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
<?php
if( isset( $_POST['submit'] )){
  $credd = $_POST["credd"];
if (empty($values)) {
   echo "No Data Found";
} else {
   //$mask = "%10 %-10s %s\n";
    $b = 0;
   foreach ($values as $row) {
      $name = $row[0]; $ncs_id = $row[1]; $grade = $row[2]; $ws_name = $row[3]; $ws_date = $row[4];
      $cred = $row[2]; $url = $row[6];
      if(strcmp($credd, $cred) == 0){
        $b = 1;
        echo "";
        echo "<tr><td>Name ".$name."<br></td></tr>";
        echo "<tr><td>Age ".$ncs_id."<br></td></tr>";
        echo "<tr><td>Grade ".$grade."<br></td></tr>";
      }
   }
   if($b == 0){
     echo "<tr><td>No Record Found</td></tr>";
   }
}
}
 ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

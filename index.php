<?php include_once 'header.php'; ?>
<div class="container">
  <div class="row">
        <h2>Check Credential</h2>
  </div>
  <div class="row justify-content-md-center">
    <div class="col-8"><br>
          <form action="index.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Enter Credential</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Credential" name="credd">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
    </div>
  </div>
  <div class="row justify-content-md-center">
    <div class="col-10"><br>
<?php
if (isset($_POST['submit'])) {
    $credd = $_POST["credd"];
    if (empty($values)) {
        echo "No Data Found";
    } elseif (empty($credd)) {
        $b = 2;
    } else {
        //$mask = "%10 %-10s %s\n";
        $b = 0;
        echo "<ul class='list-group'>";
        foreach ($values as $row) {
          if(!empty($row[1]) && !empty($row[2]) && !empty($row[3]) && !empty($row[4]) && !empty($row[5]) && !empty($row[6]) && !empty($row[8])){
            if (strcmp($credd, $row[3]) == 0) {
            $name = $row[2];
            $mail = $row[1];
            $ncs_id = $row[3];
            $grade = $row[4];
            $ws_name = $row[5];
            $ws_date = $row[6];
            $link = $row[8];
                $b = 1;
                echo "<li class='list-group-item'><strong style ='font-size: 25px;'>$name</strong>";
                echo "<br /><strong>Email: </strong>$mail";
                echo "<br /><strong>NCS ID: </strong>".$ncs_id;
                echo "<br /><strong>Grade: </strong>".$grade;
                echo "<br /><strong>Workshop Name: </strong>".$ws_name."<br /><strong>Date: </strong>".$ws_date;
                //echo "<li class='list-group-item'><small>Workshop Date:".$ws_date."</small></li>";
                echo "<br /><a href= '$link'>$link</a></li>";
              }
            }
        }
        if ($b == 0) {
            echo "<li class='list-group-item'>No Record Found</li>";
        } else {
            echo "";
        }
        echo "</ul>";
    }
}
 ?>
    </div>
  </div>
</div>
<?php include_once 'footer.php'; ?>

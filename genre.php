<?php
require_once("inc/conn.php"); 
include("inc/header.php");
$id1=$_GET['categoryid'];
 ?>
<div class="container-fluid">
  <div class="row">
    <div style="border-bottom:4px solid #C63D5D;width: 100%">
    </div>
          <?php 
    $sql="SELECT * FROM product WHERE categoryid = '{$id1}'";
    $rs= pg_query($dbconn,$sql);
    if (pg_num_rows($rs)>0) 
    {
      while ($row=pg_fetch_assoc($rs)) 
      {
    ?>
            <div class="card" style="background-color: white;margin-top: 20px;margin-left: 35px;overflow: auto;width: 270px; 
          border: 2px solid #F8ABAB;border-radius: 1px;border-bottom: 6px solid #FCA5A5; float: left;">
            <a href="single.php?id=<?php echo $row['productid']?>" style=" text-decoration: none; 
            text-align: center;">
            <div style="height:80px">
              <h2><?php echo $row['productname'] ?></h2>
              </div>
              <div><img src="img/<?php echo $row['productimg']?>" style="width: 247px;height: 200px;padding: 7px"></div>
              <p style="color: red"><?php echo $row['productprice']." $"; ?></p>
              <p><button class="card-button">Detail</button></p>
            </a>
          </div>
              <?php
      }
  }
    ?>
    </div>
    </div>
  <?php
  include("inc/footer.php"); 
   ?>
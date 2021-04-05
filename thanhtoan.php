 <?php 
 session_start();
require_once("inc/conn.php");
include("inc/header.php");
 ?>
 <?php 
  if($_SERVER['REQUEST_METHOD']=='POST'){
  $total=$_POST['total'];
  $date=$_POST['date'];
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $add=$_POST['add'];
  $sql="INSERT INTO invoices(create_date,total,shipping_address,order_status,cusname,cusphone,cusemail) 
  VALUES ('$date','$total','$add','Chờ xác nhận','$name','$phone','$email')";
if(pg_query($dbconn,$sql)){
  header("Location: thanhtoan.php");
  ?>
  <?php
}
else{
  echo "Error: ";
}
}
 ?>
 <h3 style="text-align: center;">Bạn đã thanh toán thành công đơn hàng của bạn sẽ được xác nhận nhanh nhất</h3>
  </div>  
 <?php
 include("inc/footer.php"); 
  ?>
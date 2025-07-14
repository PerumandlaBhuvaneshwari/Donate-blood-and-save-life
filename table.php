<?php
include("developers.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead>

         <th>Firstname</th>
         <th>Lastname</th>
         <th>DateofBirth</th>
         <th>Gender</th>
         <th>Mobileno</th>
         <th>Emailid</th>
         <th>location</th>
		 <th>Bloodgroups</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $data['Firstname']??''; ?></td>
      <td><?php echo $data['Lastname']??''; ?></td>
      <td><?php echo $data['DateofBirth']??''; ?></td>
      <td><?php echo $data['Gender']??''; ?></td>
      <td><?php echo $data['Mobileno']??''; ?></td>
      <td><?php echo $data['Emailid']??''; ?></td>
      <td><?php echo $data['location']??''; ?></td>
      <td><?php echo $data['Bloodgroups']??''; ?></td>	   
     </tr>
     <?php
      $Firstname++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>
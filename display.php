<?php
include 'con.php'


?>
<!doctype html>
<html lang="eng">
<head>
    <title> Display</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<div class="container my-5">
    <a href="Index1.php" class= "btn btn-warning text-dark"><i class='fas fa-address-card'> <b>Add details</b></i></a>
    <a href="select1.php" class="btn btn-info text-dark"><i class="fa fa-backward"><b> Back</b></i></a>
    <a href="login1.php" class="btn btn bg-danger text-white"><i class="fa fa-sign-out"> <b>Logout</b></i></a>
    <table class="table table-bordered my-4" >
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Reg</th>
            <th scope="col">Name</th>
            <th scope="col">colour</th>
            <th scope="col">mileage</th>
            <th scope="col">MobileNumber</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
        </tr>
        <?php
        $obj=new configure();
        /*Display  Records*/
        $data= $obj->displayRecord();
        foreach ($data as $value){
            ?>
        <tr class="text-center">
            <td><?php echo $value['Id'];?></td>
            <td><?php echo $value['Reg'];?></td>
            <td><?php echo $value['Name'];?></td>
            <td><?php echo $value['colour'];?></td>
            <td><?php echo $value['mileage'];?></td>
            <td><?php echo $value['Mobile'];?></td>
            <td><?php echo $value['Address'];?></td>
           <td> <a href="view1.php?view1id=<?php echo $value['Id'];?> "class="text-white btn btn bg-warning"><i class="fas fa-eye"></i></a>
            <a href="update1.php?editid=<?php echo $value['Id'];?> " class=" text-white btn btn bg-info"  > <i class="fas fa-edit"></i> </a>
            <a href="delete1.php?deleteid=<?php echo $value['Id'];?>" class="text-white btn btn bg-danger"><i class="fas fa-trash-alt"></i> </a>
            </td>
        </tr>
        <?php

        }//foreach close



        ?>
        </thead>
        <tbody>



    </table>
</div>
</body>
</html>


 <?php
include 'con.php';
$obj= new configure();

/* update record*/
if(isset($_POST['update'])){
    echo $obj->update($_POST);
}


 if (isset($_GET['editid'])) {
     $editid = $_GET['editid'];
     $myrecord = $obj->displayRecordByID($editid);
 }

 ?>



<!doctype html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Update</title>
</head>
<body>
<div>
    <div class="container my-4">

        <div class="row">
            <div class="col-sm-5">

                <div class="card bg-white">
                    <div class="card-body">
                        <div class="bg-warning text-white text-center">
                            <h3>Vehicles</h3>
                        </div><br>
                        <!---update from-->
                        <form method="post">



                            <div class="mb-3">
                                <label for="Reg no" class="form-label">Register number</label>
                                <input type="number" class="form-control" id="Reg no"  name="Reg" autocomplete="off" value=<?php echo $myrecord['Reg'];?>>

                                <div class="mb-3">
                                    <label for="Name" class="form-label">vehicle Name</label>
                                    <input type="text" class="form-control" id="Name" autocomplete="off" name="Name"  value=<?php echo $myrecord['Name'];?>>
                                </div>

                                <div class="mb-3">
                                    <label for="mileage" class="form-label">Mileage</label>
                                    <input type="number" class="form-control" id="mileage" autocomplete="off" name="mileage"  value=<?php echo $myrecord['mileage'];?>>
                                </div>
                                <div class="mb-3">
                                    <label for="colour" class="form-label">Colour</label>
                                    <input type="text" class="form-control" id="colour" autocomplete="off" name="colour"  value=<?php echo $myrecord['colour'];?>>
                                </div>
                                <div class="mb-3">
                                    <label for="ph no" class="form-label">Mobile number</label>
                                    <input type="number" class="form-control" id="ph no" autocomplete="off" name="mobile"  value=<?php echo $myrecord['Mobile'];?>>
                                </div>
                                <div class="mb-3">
                                    <label for="Address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="Address" autocomplete="off" name="Address" value=<?php echo $myrecord['Address']?>>
                                </div>


                                <input type="hidden" name="hid" value="<?php echo $myrecord['Id'];?>">
                                <button type="submit" class="btn btn-danger" name="update" value="update">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
 </html>
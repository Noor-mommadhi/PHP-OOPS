<?php
class configure
{
    public $con;

    public function __construct()
    {
        $this->con = mysqli_connect("localhost", "root", "noor@123", "noor");
        if(!$this->con) {
            echo 'not connected';
        }
    }
    public function insert($post)
    {
        $Reg = $post['Reg'];
        $Name = $post['Name'];
        $colour = $post['colour'];
        $mileage = $post['mileage'];
        $Mobile = $post['mobile'];
        $Address = $post['Address'];
        $sql = "INSERT INTO oops(Reg,Name,colour,mileage,Mobile,Address)
values('$Reg','$Name','$colour','$mileage','$Mobile','$Address')";
        $result = $this->con->query($sql);


        if ($result) {

           // echo "data inserted successfully";
           header("location:display.php");
        } else {
            die(mysqli_error($con));
        }
    }// insert close

    public function update($post)
    {
        $Reg = $post['Reg'];
        $Name = $post['Name'];
        $colour = $post['colour'];
        $mileage = $post['mileage'];
        $Mobile = $post['mobile'];
        $Address = $post['Address'];
        $editid=$post['hid'];
        $sql = "update oops set  Reg='$Reg',Name='$Name',colour='$colour', mileage='$mileage',mobile='$Mobile',Address='$Address' where id='$editid'";
        $result = $this->con->query($sql);
        if ($result) {
          // echo "updated successfully";
            header("location:display.php");
        } else {
            die(mysqli_error($con));
        }
    }//update close


    public function deleteRecord($deleteid){
        $sql="delete from oops where id='$deleteid'";
            $result=$this->con->query($sql);
            if ($result){
                header('location:display.php');
            }else{
                die(mysqli_error($con));
            }

    }

        public function displayRecord()
        {
            $sql = "select * from oops";
            $result = $this->con->query($sql);//execute query method
            if ($result->num_rows>0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;

            }//if close

        } //display close



    public function displayRecordByID($editid){
        $sql="select * from oops where id='$editid'";
        $result=$this->con->query($sql);
        if ($result->num_rows==1){
            $row=$result->fetch_assoc();
            return $row;
        }
    }
}
$obj=new configure();
?>
<form action="" method ="post">
    <label for="">MaSV</label>
    <input type="text" name="id" value=""><br>
    <label for="">Họ và Tên</label>
    <input type="text" name="name" value=""><br>
    <label for="">Giới Tính</label>
    <input type="text" name="sex" value=""><br>
    <label for="">Quê Quán</label>
    <input type="text" name="year" value=""><br>
    <label for="">Năm Sinh</label>
    <input type="text" name="sex" value=""><br>
    <label for="">Ngành Học</label>
    <input type="text" name="nhoc" value=""><br>
    <button name="submit">Add</button>
</form>

<?php
    error_reporting(0);
    session_start();
    if(!isset($_SESSION['students']))
    $_SESSION['students']=[];

    if(!isset($_POST['submit'])){
        $MaSV=$_POST['id'];
        $Name=$_POST['name'];
        $Gioi_tinh=$_POST['sex'];
        $Que_quan=$_POST['qquan'];
        $Nam_sinh=$_POST['year'];
        $Nganh_hoc=$_POST['nhoc'];
        if($MaSV!="" && $Name!=""&&$Gioi_tinh!=""&&$Que_quan!=""&&$Nam_sinh!=""&&$Nganh_hoc!="")
        {
            $arr_student=[$MaSV,$Name,$Gioi_tinh,$Que_quan,$Nam_sinh,$Nganh_hoc];
            $_SESSION['students'][]=$arr_student;
            header("location:show_student.php");
        }
        else{
            echo"<script> alert('Vui lòng điền đầy đủ thông tin ')</script>";
        }
    }
?>
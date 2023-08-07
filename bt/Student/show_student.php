<?php 
session_start();
function Show_table()
{
    if (isset($_SESSION['students']) && (is_array($_SESSION['students']))){
        for ($i = 0; $i < sizeof($_SESSION['students']);$i++) {
            ?>  
                <tr>
                    <td><?php echo ($i + 1) ?></td>
                    <td><?php echo $_SESSION['students'][$i][0] ?></td>
                    <td><?php echo $_SESSION['students'][$i][1] ?></td>
                    <td><?php echo $_SESSION['students'][$i][2] ?></td>
                    <td><?php echo $_SESSION['students'][$i][3] ?></td>
                    <td><?php echo $_SESSION['students'][$i][4] ?></td>
                    <td><?php echo $_SESSION['students'][$i][5] ?></td>
                 </tr>   
<?php
        }
    }
}

if(isset($_GET['delete']) && ($_GET['delete'] >= 0)) {
    array_splice($_SESSION['students'],$_GET['delete'], 1);
}
?>
<table style="border:1px solid black; border-collapse:collapse;">
    <tr>
        <th>STT<th>
        <th>MaSV<th>
        <th>Họ và Tên<th>
        <th>Giới Tính<th>
        <th>Quê Quán<th>
        <th>Năm Sinh<th>
        <th>Chuyên Ngành<th>
        <th>Hàng Động<th>
</tr>
<?php Show_table(); ?>
<p><a href="push.php">Add</a></p>
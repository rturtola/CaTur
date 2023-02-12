
<?php
include 'get_all_user.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, th, td{
        border: 1px solid;
    }
</style>
<body>
    <table>
        <thread>
            <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Yr.Level</th>
                <th>Section</th>
                <th>ID</th>
            </tr>
            </thread>
            <tbody>
            <?php while ($row= mysqli_fetch_assoc($sqlExec)) { ?>
            <tr>
                <td>
                    <?php echo $row['F_NAME']; ?> <?php echo $row['M_NAME']; ?> <?php echo $row['L_NAME'];?> 
            </td>
            <td>
                <?php echo $row['DEPT'];?>
            </td>
            <td>
                <?php echo $row['YEAR_LVL'];?>
            </td>
            <td>
                <?php echo $row['SECTION'];?>
            </td>
            <td>
                <?php echo $row['ID'];?>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>   
</body>
</html>
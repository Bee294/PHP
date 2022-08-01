<?php
include_once ("config.php");

//Tra ve true neu nguoi dung nhan submit(update)
if (isset($_POST['update']))
{
    $id = $_POST['id'];

    $name = $_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];

    $result= mysqli_query($mysqli,"UPDATE student SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
    //Quay ve trang chu neu cap nhat xong
    header("Location: index.php");
}
?>
<?php
//Lay id tu URL
$id = $_GET['id'];
//Fetech du lieu theo id
$result = mysqli_query($mysqli,"SELECT * FROM student WHERE id=$id");
while ($users_data = mysqli_fetch_array($result))
{
    $name = $users_data['name'];
    $email = $users_data['email'];
    $mobile=$users_data['mobile'];

}
?>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    <form name="update_studen" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>

            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name="moblie" value=<?php echo $mobile;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<html>

<head>

<title>感谢提交 - 氧化垃圾表单后端</title>

</head>
<?php
$scores = 0;
$answers = array("a"); //答案们
$wcheck = count($answers);
for ($i=1; $i <= $wcheck; $i++){
	
		if ($_POST{"T".strval($i)}== $answers[$i - 1]) {
				$scores++;
		}
	}
?>

<body>

<h1>服务器已验证您刚才提交的的表单。</h1>

<p><?php echo $_POST["fname"]; ?>，您本次的得分是<?php echo $scores; ?>分。</p>

<?php
echo "服务器现在将保存数据到数据库...<br />";
$servername = "localhost"; //Your DB Server
$username = ""; //Your Username
$password = ""; //Your Password
$dbname = ""; //Your DB name
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("与数据库建立连接时错误: " . $conn->connect_error);
} 
echo "成功连接数据库！现在登录表插入数据...<br />";

$sql = "INSERT INTO exam14 (name, scores) VALUES ('".$_POST['fname']."', ".$scores.")"; //Set 'exam14' what U want
 
if (mysqli_query($conn, $sql)) {
    echo "成功保存数据！现在你可以催氧化某人给你FA积分了！";
} else {
    echo "发送错误: " . $sql . "<br>" . mysqli_error($conn);
}
?>

<div id="UisSB" style="left: 0; position: fixed; bottom: 0; width: 100%;">全自动WA垃圾PHP验证——制作：氧化某人</div>

</body>
</html>
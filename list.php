<?php
$conn = mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conn,"user");
$result = mysqli_query($conn,"select * from user where delflag='0'");
while($row = mysqli_fetch_row($result))
{
	$array[] = $row;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
	<HEAD>
		<title> New Document </title>
		<meta NAME="Generator" CONTENT="EditPlus">
		<meta NAME="Author" CONTENT="">
		<meta NAME="Keywords" CONTENT="">
		<meta NAME="Description" CONTENT="">
	</HEAD>
	<BODY>
		<font color="red">用户信息</font>
		<table border='1' width="75%">
			<tr>
				<td width="8%" align="center">ID</td>
				<td width="15%" align="center">姓名</td>
				<td width="8%" align="center">性别</td>
				<td width="8%" align="center">年龄</td>
				<td width="20%" align="center">学校</td>
				<td width="16%" align="center">创建时间</td>
			</tr>
			<?php
			for($i=0; $i<count($array); $i++){
				echo "<tr>
				<td align=\"center\">";
					echo $array[$i][0];
					echo "
				</td>
				<td align=\"center\">"; 
					echo $array[$i][1];
					echo "
				</td>";
				if("男"==$array[$i][5]){
					echo "
					<td align=\"center\">男</td>";
				}else{
					echo "
					<td align=\"center\">女</td>";
				}	
				echo "
				<td align=\"center\">"; 
					echo $array[$i][7];
					echo "
				</td>
				<td align=\"center\">";
					echo $array[$i][6];
					echo "
				</td>
				<td align=\"center\">";
					echo $array[$i][4];
					echo "
				</td>
			</tr>";
		}
		?>
	</table>
</BODY>
</HTML>
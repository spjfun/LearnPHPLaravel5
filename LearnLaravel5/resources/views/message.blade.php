<!DOCTYPE html>
<html>
<head>
	<title>信息輸入</title>
	<style>
		table{
		margin: 10% 30% auto;
		}
	</style>
</head>
<body>
	<form action="./insert" method="post">
		<table>
			<thead>
				<tr>
				<th><h2>留言板</h2></th>
				</tr>
			</thead>
			<tr>
				<td>title<input type="text" name="title" size="50"></td>
			</tr>
			<tr>
				<td>content<textarea name="content" rows="30" cols="50"></textarea></td>
			</tr>
			<tr>
				<td><input type="reset" value="清除"><input type="submit" value="送出"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<html>
<head>
<title>บันทึกข้อมูล</title>
</head>
<body>
<form action="phpMySQLAddSave.php" name="frmAdd" method="post">
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">CustomerID </div></th>
    <th width="160"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">Email </div></th>

  </tr>
  <tr>
    <td><div align="center"><input type="text" name="id_acc" size="5"></div></td>
    <td><input type="text" name="num_acc" size="20"></td>
    <td><input type="text" name="name_acc" size="20"></td>

  </tr>
  </table>
  <input type="submit" name="submit" value="submit">
  </form>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Police Emergency System</title>
</head>

<body>
<fieldset>
<legend>Log Call</legend>
<form name="frmLogCall" method="post" action="dispatch.php" onSubmit="return romeo();">
  <table width="40%"  border="1" align="center" cellpadding="4" cellspacing="4">
  <tr>
  <td width="50%">Caller's Name :</td>
  <td width="50%"><input type="text" name="callerName" id="callerName"></td>
  </tr>
  <tr>
  <td width="50%">Contact No :</td>
  <td width="50%"><input type="text" name="ContactNo" id="contactNo"></td>
  </tr>
  <tr>
    <td width="50%">Location :</td>
    <td width="50%"><input type="text" name="location" id="location"></td>
  </tr>
  <tr>
  <td width="50%">Incident Type :</td>
    <td width="50%"><select name="incidentType" id="incidentType"></td>
    <?php foreach($incidentType as $key =>$value) {?>
    <option value="<?php echo $key ?> " >
      <?php echo $value ?> </option>
    <?php } ?>
      </select>
      </td>
  </tr>
       <tr>
  <td width="50%">Description:</td>
  <td width="50%"><textarea name="incidentDesc" id="incidentDesc" cols="45" rows="5"></textarea></td>
  </tr>
       <tr>
    <td> <input type="reset" name="cancelProcess" id="cancelProcess" value="Reset"></td>
       <td> <input type="submit" name="btnProcessCall" id="btnProcessCall" value="Process Call"></td>
  </tr>
  </table>
</form>
</fieldset>
</body>
</html>
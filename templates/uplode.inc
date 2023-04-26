<?php include_once("../shares/db/mydatabase.inc");?>
<?php
if(isset($POST['submit']))
{
$fldr="../packageupload";
$allowedExts=array("jpg","gif","jpeg");
$extension=pathinfo($_FILES['files']['name'],PATHINFO_EXTENSION);
$f=$_FILES["files"]["name"];
$size=$_FILES["file"]["size"]>5000000)
{
die("File Size is".($size/1000000)."MB,Maximum allowed size is 5mb");
}
if((($_FILES["file"]["type"]=="images/jpg")
||($_FILES["file"]["type"]=="images/jpeg")
||($_FILES["file"]["type"]=="images/gif")
||($_FILES["file"]["type"]=="images/tif")
&&($$_FILES["file"]["size"]<=50000000)
&&in_array($extension,$allowedExts))
{
if($_FILES["file"]["error"]>0)
{
echo"Return code:".$FILES["files"]["error"]."<br/>;
{
else
}
if(file_exist("$fldr/".$_FILES["file"]["name"]))
{
echo $FILES["file"]["name"]."already exists.";
}
else
{
move_uploaded_file($_FILES["file"]["tmp_name"].$fldr/".$_FILES["file"]["name"]);
$mv_name=$_FILES["file"]["type"];
sfname=sfldr."/".$mv_name;
$mv_size=$_FILES["file"]["size"];
spname=$_POST['pname'];
$sql="insert into package(packagename,packagetype,path)values('$pname,'$ptype','$fname')";
setDatas($sql);
echo"saved".$fname;
$msg=mysql_error();
}
}
}
?>
<form method="post" enctype="multipart/form-data">
<table cellpadding="10"cellspacing="10">
<tr>
<td>Package photo</td><td><input type="file"name="file"/></td>
</tr>
<tr>
<td>Package Name</td><td><input type="text"name="pname"/></td>
</tr>
<tr>
<td>Package Type</td><td><input type="text"name="ptype"/></td>
</tr>
<tr>
<td colspan="2"align="center">
<input type="submit"value="Submit"name="submit"/>
</td>
</tr>
</table>
</form>
</div>
<!--Ends-->
</div>



<!doctype html>
<?php
$conn=mysql_connect("localhost","phpuser","phppass") or die(mysql_error());
$sdb=mysql_select_db("db_name",$conn) or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  move_uploaded_file($temp,"files/".$name);
$insert=mysql_query("insert into upload(name)values('$name')");
if($insert){
header("location:index.php");
}
else{
die(mysql_error());
}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AIHT IT B</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

</head>
<body>
<div id="container">
    <header>
	<div class="width">

<h1 align="center">	
  <img src="logon.PNG" width="211" height="100" style="height:131px; width:308px" align="bottom"></img></h1>
  <h1 align="center"><a href="/">aiht<span> it b</span></a></h1>
        	<h2 align="center">IT B ROCKERZZZ</h2> 
	</div>
    </header>
    <nav>
	<div class="width">
    		<ul>
        		<li class="start selected"><a href="index.php">Home</a></li>
        	    	<li class=""></li>
         	   	<li><a href="dbms.php">dbms</a></li>
          	  	<li><a href="mpmc.php">mpmc</a></li>
          	 	<li><a href="os.php">os</a></li>
          	 	<li class="end"><a href="other.php">other</a></li>
        	</ul>
	</div>
    </nav>


    <div id="body" class="width">

		

			<form enctype="multipart/form-data" action="" name="form" method="post">
              <h3 align="center" font="bold" >DOWNLOAD </h3>
         <!--     <table border="0" cellspacing="0" cellpadding="5" id="table">
                <tbody>
                  <tr>
                    <th>Choose File</th>
                    <td><label for="photo"></label>
                      <input type="file" name="photo" id="photo"></td>
                  </tr>
                  <tr>
                    <th colspan="2" scope="row"><input class="button" type="submit" name="submit" id="submit" value="Submit"></th>
                  </tr>
                </tbody>
              </table>-->
      </form>
            
          <table border="1" align="center" id="table1" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td align="center"><h5 align="center" font="bold"><strong><a href="dbms.php">DBMS</a></strong></h5></td>
                </tr>
                <?php
$select=mysql_query("select * from dbms order by id desc");
while($row1=mysql_fetch_array($select)){
	$name=$row1['name'];
?>
<tr>
<td width="475">
<img src="tick.png" width="14" height="14"><a href="download.php?filename=<?php echo $name;?>">  <?php echo $name;?></a>
</td>
</tr>
<?php }?>
              </tbody>
            </table>
            <br>
      <table border="1" align="center" id="table1" cellpadding="0" cellspacing="0">
        <tbody>
                <tr>
                  <td align="center"><h5 align="center" font="bold"><strong><a href="mpmc.php">MPMC</a></strong></h5></td>
                </tr>
                <?php
$select=mysql_query("select * from mpmc order by id desc");
while($row1=mysql_fetch_array($select)){
	$name=$row1['name'];
?>
<tr>
<td width="475">
<img src="tick.png" width="14" height="14"><a href="download.php?filename=<?php echo $name;?>"><?php echo $name;?></a>
</td>
</tr>
<?php }?>
              </tbody>
      </table>
            <br>
            
             <table border="1" align="center" id="table1" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td align="center"><h5 align="center" font="bold"><a href="os.php">OS</a></h5></td>
                </tr>
                <?php
$select=mysql_query("select * from os order by id desc");
while($row1=mysql_fetch_array($select)){
	$name=$row1['name'];
?>
<tr>
<td width="475">
<img src="tick.png" width="14" height="14"><a href="download.php?filename=<?php echo $name;?>"><?php echo $name;?></a>
</td>
</tr>
<?php }?>
              </tbody>
            </table>
            <br>
            
             <table border="1" align="center" id="table1" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td align="center"><h5 align="center" font="bold"><a href="other.php">OTHER</a></h5></td>
                </tr>
                <?php
$select=mysql_query("select * from other order by id desc");
while($row1=mysql_fetch_array($select)){
	$name=$row1['name'];
?>
<tr>
<td width="475">
<img src="tick.png" width="14" height="14"><a href="download.php?filename=<?php echo $name;?>"><?php echo $name;?></a>
</td>
</tr>
<?php }?>
              </tbody>
            </table>
            <br>

      
        <div class="clear"></div>
    </div>
    <footer>
        <div class="footer-content width">
        
            <ul align="right">
              <li >Total Page views :  
                <img  src="http://hitwebcounter.com/counter/counter.php?page=5285405&style=0006&nbdigits=6&type=page&initCount=0" title="useful counter" Alt="useful counter"   border="0" >
                <br/>
                Total Unique Views :
                
                <img src="http://hitwebcounter.com/counter/counter.php?page=5285409&style=0006&nbdigits=6&type=ip&initCount=0" title="useful counter" Alt="useful counter"   border="0" >
              </li>
            </ul>
            
            <div class="clear"></div>
        </div>
        <div class="footer-bottom">
            <p>&copy; aiht.in 2014. Site Created by C.Saravanan</p>
         </div>
    </footer>
</div>
</body>
</html>

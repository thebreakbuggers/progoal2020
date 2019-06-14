<?php
$con=mysqli_connect("localhost","root","","college");
if(!$con)
{
	die("could not connect to mysql");
	
}

if($_POST)
{
	$sname=$_POST['stname'];
	$phone=$_POST['phone'];
	$course=$_POST['course'];
	$branch=$_POST['branch'];
	$userid=$_POST['userid'];
	$password=$_POST['password'];
	$sql="insert into registration (student_name,phone,course,branch,userid,password) values('$sname','$phone','$course','$branch','$userid','$password')";
	if(mysqli_query($con,$sql))
		echo "record saved";
	else
		echo "Something went wrong".mysqli_error($con);
}
?>


<html>
<head>

<title>form</title>



<style type="text/css">

#second-section{
background-color:#1D80E3;
height:200%;
font-size:200%;

}
#header{
height:120px;

background-color:#7FB3D5;



}
body{
margin:0;
padding:0;

}
#fill{
color:#1D80E3;
padding:20px;
font-size:55px;


}
body{
margin:0;
padding:25;
color:white;

}
input {

                padding: 5px 5px 12px 5px;
                font-size: 25px;
                border-radius: 5px;
                border: 1px solid grey;
                width:620px;

                }
#size{
width:200px;


}
#submit{

width:200px;
height:80px;

}
#mar{
margin:0 auto;
font-size:50px;


}

</style>



</head>
<body>

<div id="header">

		<h1 id="fill">FILL THIS FORM FOR FURTHER DETAILS </h1>
		</div>
<div id="second-section">
		
		<div id="mar">
		<form method="post" action="">
		<p><b>Type student name:<b><input type="text" name="stname" placeholder="your name"></p>
		<p>phone number:<input type="text" name="phone" placeholder="your no."></p>
		
		<h4>select courses: </h4><select name="course"> 
		<option>B.Tech</option>
		<option>B.Pharma</option>
		<option>BBA</option>
		<option>B.arch</option>
		<option>MBA</option>
		<option>BCA</option>
		<option>MCA</option>
		<option>M.Tech</option>
		</select>
		
		
		
		<p>branch :- </p><select  id="branch1" name="branch"> 
		<option>computer science</option>
		<option>electrical engineering</option>
		<option>mechanical engineering</option>
		<option>civil engineering</option>
		<option>electronice engineering</option>
		<option>chemical engineering</option>
		
		</select>
		<p> user id : <input type="text" name="userid" placeholder ="create your user id" ></p>
		<p>password  :<input type="password" name="password" ></p>
		
		
		<p>click here to     :<input id="submit" type="submit" name="submit"></p>
		
		
		
		
		</form>
		</div>
		</div>
		
		
		
		</body>
		</html>
		
		


































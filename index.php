<?php
	include("Login.php");
	include("signup/signup.php");
	include("signup/regval.js")
?>
<html>
<head>
	<title> Simi </title>
	<LINK REL="SHORTCUT ICON" HREF= "simi.png"/>
</head>
<script>
	function time_get()
	{
		d = new Date();
		mon = d.getMonth()+1;
		time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
		Reg.join_time.value=time;
	}
</script>
<body>
	<!--login form-->
	<form  method="post" class="container">
		<div style="position:absolute; left:17.7%; top:40.2%; font-size:26px; color:#000000;">  <b> Email </b></div> 
		<div style="position:absolute; left:17.7%; top:46.18%; font-size:18px; "> <input type="text" name="username" style="width:149.5;"/> </div>
		<div style="position:absolute; left:17.7%; top:49.8%; font-size:18; color:#000000;">  <input type="checkbox" checked="checked">   Keep me logged in </div>
		<div style="position:absolute;left:17.7%; top:54.2%; font-size:26px; color:#000000"> <b>Password</b> </div>
		<div style="position:absolute;left:17.7%; top:59.18%; font-size:18px; "> <input type="password" name="password" style="width:149.5;"> </div>
		<div style="position:absolute;left:17.7%; top:67.2%; font-size:18px; color:#000000;"> <a href="Forgot_Password.php" style="color:#000000; text-decoration:none;"> Forgot your password? </a> </div>   
		<div style="position:absolute;left:17.7%;top:63.2%; ">   <input type="submit" name="Login" value="Log In" id="login_button" />  </div>
	</form>
	
	<div style="position:absolute;left:45%; top:28%; height:400; width:1; background-color:#CCCCCC;"> </div>
	<!-- Faceback left part -->
	
		<!--Left part-->
		<!--Mobile Image-->
	
	<!-- Registration -->
	<form  method="post" onSubmit="return check();" name="Reg">
		<div style="position:absolute; right:0%; top:0%;"> 
		 </div>
		<div style="position:absolute;left:58%; top:16.5%; color:#000066; font-size:29"> <h5> Sign Up </h5> </div>
		<div style="position:absolute;left:54%; top:20.1%; height:1; width:410; background-color:#CCCCCC;"> </div>
        
		<div style="position:absolute;left:59.4%; top:34%; font-size:16px; color:#000000">  Your Name: </div>
		<div style="position:absolute;left:65.2%; top:34%; "> <input type="text" name="your_name" class="inputbox" maxlength="10"/> </div>
		<div style="position:absolute;left:59.4%; top:41%; font-size:16px; color:#000000">  Email: </div>
		<div style="position:absolute;left:65.2%; top:41%; "> <input type="text" name="email"  size="25" class="inputbox" /> </div>
		<div style="position:absolute;left:59.4%; top:48%; font-size:16px; color:#000000"> Password:  </div>
		<div style="position:absolute;left:65.2%; top:48%; "> <input type="password" name="password" size="25" class="inputbox" /> </div>
		<div style="position:absolute;left:59.4%; top:55%; font-size:16px; color:#000000"> Gender:  </div>
		<div style="position:absolute;left:65.2% ;top:55%;">		  
		<select name="sex" style="width:130;height:35;font-size:18px;padding:3;">
			<option value="Select Sex:"> Select Sex: </option>
			<option value="Female"> Female </option>
			<option value="Male"> Male </option>
			<option value="Male"> None of the above </option>
		</select>
		</div>
		
<?php	
include("bkgrnd/indexbg.php");
?>		
<div style="position:absolute;left:59.4%; top:62%; font-size:16px; color:#000000">  Birthday:  </div>

	
	<div style="position:absolute;left:65.2%; top:62%;">
	<select name="month" style="width:80;font-size:18px;height:32;padding:3;">
	<option value="Month:"> Month: </option>
	
	<script type="text/javascript">
	
		var m=new Array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		for(i=1;i<=m.length-1;i++)
		{
			document.write("<option value='"+i+"'>" + m[i] + "</option>");
		}	
	</script>
	
	</select>
	</div>



	<div style="position:absolute; left:72%; top:62%;">
	<select name="day" style="width:63;font-size:18px;height:32;padding:3;">
	<option value="Day:"> Day: </option>
	
	<script type="text/javascript">
	
		for(i=1;i<=31;i++)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
		
	</script>
	
	</select>
	</div>	

	<div style='position:absolute;left:77.5%;top:62%;'>
	<select name="year" style="width:70; font-size:18px; height:32; padding:3;">
	<option value="Year:"> Year: </option>
	
	<script type="text/javascript">
	
		for(i=1996;i>=1960;i--)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
	
	</script>
	
	</select>
	</div>		
		<input type="hidden" name="join_time">
		<div style="position:absolute;left:65.2%; top:69%; ">  <input type="submit" name="signup" value="Sign Up" id="sign_button" / onClick="time_get()"> </div>
		</form>
		
		<div style="position:absolute;left:54%; top:93%; height:1; width:410; background-color:#CCCCCC; "> </div> 
        
 <!--my_details -->  
    <div style="display:none;" id="my_details">
    <div style="position:absolute;left:12%;top:73%; height:30%; width:30%; z-index:2; background:#000; opacity:0.6; box-shadow:10px 0px 10px 1px rgb(0,0,0);">   </div>
    <div style="position:absolute;left:13%;top:75%; z-index:3;"> <img src="bkgrnd/my.jpg" height="165" width="150" style="box-shadow:0px 0px 10px 5px rgb(0,0,0);"> </div>
    <div style="position:absolute;left:26%;top:75%; z-index:3; color:#FFF;"> <h2> <?php echo base64_decode("dmFpYmhhdiBrdW1hcg=="); ?> </h2> </div>
    <div style="position:absolute;left:26%;top:83%; z-index:3; color:#FFF;">  <h3><?php echo base64_decode("a3ZhaWJoYXZzMDc3QGdtYWlsLmNvbQ=="); ?> </h3> </div>
    <div style="position:absolute;left:26%;top:90%; z-index:3; color:#FFF;"> <h3> <?php echo base64_decode("OTk3MTgwMjAyNw=="); ?>  </h3> </div>
	</div>
    
							
</body>
</html>
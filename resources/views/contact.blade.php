<!DOCTYPE html>
<html>
<head>
	<title></title>

  
    <style type="text/css">
	
	html {
		position: relative;
		min-height: 100%;
	}
	p  {
		line-height: 220%;
		margin-top: 40px;
		margin-bottom: 40px;
		float: center;
		}

		img
		{
			margin-right: 25px;
		}
html,body{
  margin:0;
  padding:0;
}

 .pageContentWrapper{
  margin-bottom:100px;/* Height of footer*/
   width: 100%;
} 
	body {
		background-color: black;
		background-repeat: no-repeat;
		background-position: 50% 12%;
		background-color: white;
		background-position: center-top;
		background-size: cover; 
		color:black;
		
		background-attachment: fixed;
		margin: 0

	}
 
.navbar{
    list-style-type: none;
    margin: 0;
    
    overflow: hidden;
    background-color: #333;
    width: 100;

}

.insta {
    height: 16px;
    width: 16px;
}

.insta:hover {
    content: url(igb.png);
    height: 16px;
    width: 16px;
}
.twitt {
    height: 16px;
    width: 16px;
}

.twitt:hover {
    content: url(tb.png);
    height: 16px;
    width: 16px;
}
.face {
    height: 16px;
    width: 16px;
}

.face:hover {
    content: url(fbb.png);
    height: 16px;
    width: 16px;
}

@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}


li {
    float: left;
}

.right
{
	float: right !important;
}
.nav {
    display: block;
    color: white;
    text-align: center;
    padding: 16px 18px;
    text-decoration: none;

}

.nav:hover {
    color: #30C7BE;
}

.footbar{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    width: 100%;

}
.foot {
   line-height: 220%;
		margin-top: 40px;
		margin-bottom: 40px;
		float: center;

}


.isi
{
	 background-color: #333;
}


.pbar
{
	background-color: 

}
 .footer{
    position: absolute;
	width: 100%;
    bottom: 0;
    left: 0;
    right: 0;
    height:100px;
    text-indent: 15px;
    
}
th, td {
    padding: 10px;
}
th
{
	text-align: left;
}

hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.long select {
    width: 100%;
    padding: 20px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
}



input[type=submit] {
    width: 100%;
    background-color: #33ccff;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #00ace6;
}

form {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    margin-top: 10px;
    margin-left: 10%;
    margin-right: 10%;
   
}

.contained {
    
   
     width: 70%;
   
    margin: 10px auto;
    position: relative;
    display:flex;
    flex-wrap:wrap;
    justify-content:center;

}



	</style>

</head>
<body>
<div class="pageContentWrapper">
	@include('menubar')
    @yield('menubar')
<p class="tit">
<font class="tit" face="arial" size="10"><center>CONTACT</center></font>
</p>


<div class="contained">
	
  <form>
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Email Address</label>
    <input type="text" id="lname" name="email" placeholder="Your email..">

     <label for="jname">Questions</label>
    <input class="long" type="text" id="lname" name="complaint" placeholder="What do you want to talk about?">
  
    <input type="submit" value="Submit">
  </form>




</div>

</div>

</div>











<div class="footer">
		<footer >
		<ul class="footbar">
	  	<table style="width:100%">
	  	<tr>
	    <th width="10%" ><font color="white" size="3" face="">Contact Us</font></th>
	    
	  </tr>
	  <tr>
	    <td width="10%" ><font color="white" size="3" face="">Email:</font></td>
	    <td><font color="white" size="3" face="">Trav-A-Long@gmail.com:</font></td> 
	    
	  </tr>
	  <tr>
	    <td width="10%" ><font color="white" size="3" face="">Phone:</font></td>
	    <td><font color="white" size="3" face="">081394312989</font></td> 
	    
	  </tr>
	</table>

	</ul>
	</footer>
</div>


</body>
</html>
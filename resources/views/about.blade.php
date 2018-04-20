<!DOCTYPE html>
<html>
<head>
	<title>About Us - Trav-A-Long</title>
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

		img {
			margin-right: 25px;
		}
		text html,body{
			margin:0;
			padding:0;
		}

		.pageContentWrapper{
			margin-bottom:100px;/* Height of footer*/
			width: 100%;
		} 
		body {
			background-color: #E5E5E5;
			background-repeat: no-repeat;
			background-position: 50% 12%;
			
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

		.isi {
			 background-color: #333;
		}

		.pbar {
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
		.contain {
		    width: 60%;
		   	background-color: white;
		    margin: 40px auto;
		    position: relative;
		    display:flex;
		    flex-wrap:wrap;
		    justify-content:center;
		    padding-top: 20px;
		    margin-bottom: 0;

		}
		th, td {
		    padding: 10px;
		}
		th {
			text-align: left;
		}
		.tit {
			margin-top: 20px;
			margin-bottom: 20px;
		}
		.m-top {
			margin-top: 10px;
			margin-right: 10%;
			margin-left: 10%;
			margin-bottom: 10px;
		}
		.team {

			float: left;
			width: 25%;
		}
		.contained {
		    width: 60%;
		   background-color: white;
		    margin: 10px auto;
		    margin-bottom: 0;
		    margin-top: 0;
		    position: relative;
		    display:flex;
		    flex-wrap:wrap;
		    justify-content:center;
		}
		.contained img {
			margin-top: 20px;
		}
		.prof {
			margin: auto;

		}

		.prof img {
			border-radius: 50%;
			-webkit-animation: fadein 2s; 
		       -moz-animation: fadein 2s;
		        -ms-animation: fadein 2s;
		         -o-animation: fadein 2s;
		            animation: fadein 2s;
		}

		.prof p {
			text-align: center;
			font-weight: bold;
			-webkit-animation: fadein 2s; 
		       -moz-animation: fadein 2s;
		        -ms-animation: fadein 2s;
		         -o-animation: fadein 2s;
		            animation: fadein 2s;
		}
	</style>

</head>
<body>
	<div class="pageContentWrapper">
		@include('menubar')
        @yield('menubar')

		<p class="contain">

		<font class="tit" size="20" face="arial"> About Us</font> <br>

		<font size="4" class="m-top" face="arial">Trav-A-Long was founded by a group of friends who loved to travel. But they couldn't plan well and couldn't handle their budget by themselves. So they thought "Why don't we make something that helps us plan?", so they did!
		<br>
		</font>

		<font size="4" face="arial" class="m-top">We aim to help ease the process of travelling by helping them plan out what they need and give advice on where to go, with that we hope they can save more money and have more fun while travelling
		<br>
		</font>

		</p>

		<p class="contain">
		<font class="tit" size="20" face="arial"> Our Team</font> <br>
		<div class="contained">

		<div class="prof" >
		<img src="{{ url('/public/images/prof.jpg') }}" height="200" width="200">
		<p>Avner Kristofer</p>
		</div>

		<div class="prof" >
		<img src="{{ url('/public/images/dejprof.jpg') }}" height="200" width="200">
		<p>Giovanni Dejan</p>
		</div>
		<div class="prof" >
		<img src="{{ url('/public/images/gregprof.png') }}" height="200" width="200">
		<p>Gregory Kevin</p>
		</div>

		<div class="prof" >
		<img src="{{ url('/public/images/prof.jpg') }}" height="200" width="200">
		<p>Nathaniel Putra</p>
		</div>
		</div>
		<div class="contained">
		<div class="prof" >
		<img src="{{ url('/public/images/auprrof.png') }}" height="200" width="200">
		<p>Laudwika Ambardi</p>
		</div>
		</div>
		</p>

		<p class="contain">
		</p>

	</div>

	<div class="footer">
	<footer >
		<ul class="footbar">
			<table style="width:100%">
				<tr>
					<th width="10%" >
						<font color="white" size="3" face="">Contact Us</font>
					</th>
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
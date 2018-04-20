<!DOCTYPE html>
<html>
<head>
	<title>Trav-A-Long</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
		
        html,body{
          margin:0;
          padding:0;
        }

        .contain img{
			margin-right: 25px;
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


        .centerUL {
        	list-style-type: none;
            margin: 0;
            padding: 25;
            overflow: hidden;
            background-color: #333;
            width: 100;
        }

        .center {
            display:inline-block;
            margin-right:10px;
        }

        li {
            float: left;
        }

        .right {
        	float: right !important;
        }
        .center {
        	float: center !important;
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

        .container {
            position: relative;
            text-align: center;
            color: white;
        }

        .bottom-left {
            position: absolute;
            bottom: 8px;
            left: 16px;
        }

        .top-left {
            position: absolute;
            top: 8px;
            left: 16px;
        }

        .top-right {
            position: absolute;
            top: 8px;
            right: 16px;
        }

        .bottom-right {
            position: absolute;
            bottom: 8px;
            right: 16px;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .center-top {
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .center-top-bot {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }


        .contain {
            width: 70%;
           
            margin: 10px auto;
            position: relative;
            display:flex;
            flex-wrap:wrap;
            justify-content:center;

        }

        .contained {
            margin-right: 0;
            margin-left: 0;
            position: relative;
            display:flex;
            flex-wrap:wrap;
            justify-content:center;

        }

        .block {
            height: 100px;
            width: 100px;
            margin: 10px;
        }
        .inim {
        	display: block;
            color: #30C7BE;
            text-align: center;
            padding: 16px 18px;
            text-decoration: none;
            background-color: white;
            font: arial;
        }
        .inim:hover {
            background-color: #FFFFFF;
          
            font-weight: bold;

        }
        .top {
            margin-top: 25vh;
            font-size: 7vh;
            font-size: 4vw;
            text-align: center;
            font-weight: bold;

            -webkit-animation: fadein 2s; 
               -moz-animation: fadein 2s;
                -ms-animation: fadein 2s;
                 -o-animation: fadein 2s;
                    animation: fadein 2s;
        }
        .top-bot {
            margin-top: 25px;
            font-size: 2vh;
            font-size: 1vw;

            text-align: center;
        	

            -webkit-animation: fadein 2s; 
               -moz-animation: fadein 2s;
                -ms-animation: fadein 2s;
                 -o-animation: fadein 2s;
                    animation: fadein 2s;
        }


        @-webkit-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
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
            


        .footbar{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            width: 100%;

        }
        .foot{
    		line-height: 220%;
    		margin-top: 40px;
    		
    		float: center;

        }


        .isi {
        	 background-color: #333;
        }


        th, td {
            padding: 10px;
        }
        th {
        	text-align: left;
        }

        .spon{
        	margin-top: 50px;
        	text-align: center;
        	background-color: #A0A0A0;
        	padding-top:15px;
        	padding-bottom:15px;
        	width: 100%;
        	
        	border-spacing: 2px;
        }
        .spons {
        	word-spacing: 20px;
        }
    </style>
</head>
<body >
    <div class="pageContentWrapper">
        @include('menubar')
        @yield('menubar')

        <div class="container">
            <img src="{{ url('public/images/bannernw.png') }}" width="100%" >
            <div class="center-top"><font class="top" face="arial" color="white" size="90">Trav-A-Long</font></div>
            <div class="center-top-bot"><font class="top-bot" face="arial" color="white" size="40" >Work hard, Travel harder</font></div>
        </div>

        <p>
            <center><font size="5" color="#889393">We'll help you plan from start too finish! <br> 
            Choose one from below if you want our full advice, activity recommendations, or if you just want some reccomendations of places!
            </font> </center>
        </p>

        <div class="contain">
            <div class="container">
                <img src="{{ url('public/images/map.png') }}" height="250" width="300">
                <div class="centered"><a class="inim" href="Advice.html"><font size="5">Advice</font></a></div>
            </div>
            <div class="container">
                <img src="{{ url('public/images/camping.png') }}" height="250" width="300">
                <div class="centered"><a class="inim" href="Activites.html"><font size="5">Activites</font></a></div>
            </div>
            <div class="container">
                <img src="{{ url('public/images/col.png') }}" height="250" width="300">
                <div class="centered"><a class="inim" href="Locations.html"><font size="5">Locations</font></a></div>
            </div>	
            <br>
        </div>

        <p class="spon">	
        <th>
            <font size="5" face="arial">Partnered with</font>
            <font class="spons" size="5" face="arial"> |Traveloka AirBnB Hyatt</font>
        </th>
        </p>

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
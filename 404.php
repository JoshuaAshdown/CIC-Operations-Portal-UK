<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
		<!-- Bootstrap CSS/Scripts -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>	
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">		
			
		<!-- Styles CSS -->
		<style>
			body {
				padding-top: 50px;
				overflow: hidden;
			}
			#wrapper {
				min-height: 100%;
				height: 100%;
				width: 100%;
				position: absolute;
				top: 0px;
				left: 0px;
				display: inline-block;
			}
			#main-wrapper {
				position: relative;
				height: 100%;
				overflow-y: auto;
				padding: 50px 0 0px 0;
			}
			#main {
				position: relative;
				height: 100%;
				overflow-y: auto;
				padding: 0 55px;
				top: 20px;
				left: 0px;
				
			}
			#sidebar-wrapper {
				height: 100%;
				padding: 50px 0 0px 0;
				position: fixed;
				border-right: 0px solid gray;
			}
			#sidebar {
				position: relative;
				height: 100%;
				overflow:hidden;
			}
			#sidebar .list-group-item {
					border-radius: 0;
					border-left: 0;
					border-right: 0;
					border-top: 0;
			}
			@media (max-width: 992px) {
				body {
					padding-top: 0px;
				}
			}
			@media (min-width: 992px) {
				#main-wrapper {
					float:right;
					padding-left: 35px;
				}
			}
			@media (max-width: 992px) {
				#main-wrapper {
					padding-top: 0px;
				}
			}
			@media (max-width: 992px) {
				#sidebar-wrapper {
					position: static;
					height:auto;
					/*max-height: 300px;*/
					border-right:0;
				}
			}

			.coll-button {
				padding: 10px 10px;
				align-content: right;
				
			}​

		</style>
		
		<!-- Side Menu CSS -->
		<style>
			/* http://bootsnipp.com/snippets/featured/responsive-navigation-menu */

			.nav-side-menu {
			  overflow: auto;
			  font-family: verdana;
			  font-size: 12px;
			  font-weight: 200;
			  background-color: #2e353d;
			  position: fixed;
			  top: 0px;
			  width: 275px;
			  height: 100%;
			  color: #e1ffff;
			  padding-top: 60px;
			}
			.nav-side-menu .brand {
			  background-color: #23282e;
			  line-height: 50px;
			  display: block;
			  text-align: center;
			  font-size: 14px;
			}
			.nav-side-menu .toggle-btn {
			  display: none;
			}
			.nav-side-menu ul,
			.nav-side-menu li {
			  list-style: none;
			  padding: 0px;
			  margin: 0px;
			  line-height: 35px;
			  cursor: pointer;
			}
			.nav-side-menu ul :not(collapsed) .arrow:before,
			.nav-side-menu li :not(collapsed) .arrow:before {
			  /*font-family: FontAwesome;
			  content: "\f078";
			  display: inline-block;
			  padding-left: 10px;
			  padding-right: 10px;
			  vertical-align: middle;
			  float: right;*/
			}
			.nav-side-menu ul .active,
			.nav-side-menu li .active {
			  border-left: 3px solid #d19b3d;
			  background-color: #4f5b69;
			}
			.nav-side-menu ul .sub-menu li.active,
			.nav-side-menu li .sub-menu li.active {
			  color: #d19b3d;
			}
			.nav-side-menu ul .sub-menu li.active a,
			.nav-side-menu li .sub-menu li.active a {
			  color: #d19b3d;
			}
			.nav-side-menu ul .sub-menu li,
			.nav-side-menu li .sub-menu li {
			  background-color: #181c20;
			  border: none;
			  line-height: 28px;
			  border-bottom: 1px solid #23282e;
			  margin-left: 0px;
			}
			.nav-side-menu ul .sub-menu li:hover,
			.nav-side-menu li .sub-menu li:hover {
			  background-color: #020203;
			}
			.nav-side-menu ul .sub-menu li:before,
			.nav-side-menu li .sub-menu li:before {
			  /*font-family: FontAwesome;
			  content: "\f105";
			  display: inline-block;
			  padding-left: 10px;
			  padding-right: 10px;
			  vertical-align: middle;*/
			}
			.nav-side-menu li {
			  padding-left: 0px;
			  border-left: 3px solid #2e353d;
			  border-bottom: 1px solid #23282e;
			}
			.nav-side-menu li a {
			  text-decoration: none;
			  color: #e1ffff;
			}
			.nav-side-menu li a i {
			  padding-left: 10px;
			  width: 20px;
			  padding-right: 20px;
			}
			.nav-side-menu li:hover {
			  border-left: 3px solid #d19b3d;
			  background-color: #4f5b69;
			  -webkit-transition: all 1s ease;
			  -moz-transition: all 1s ease;
			  -o-transition: all 1s ease;
			  -ms-transition: all 1s ease;
			  transition: all 1s ease;
			}
			@media (max-width: 767px) {
			  .nav-side-menu {
				position: relative;
				width: 100%;
				margin-bottom: 10px;
			  }
			  .nav-side-menu .toggle-btn {
				display: block;
				cursor: pointer;
				position: absolute;
				right: 10px;
				top: 10px;
				z-index: 10 !important;
				padding: 3px;
				background-color: #ffffff;
				color: #000;
				width: 40px;
				text-align: center;
			  }
			  .brand {
				text-align: left !important;
				font-size: 22px;
				padding-left: 20px;
				line-height: 50px !important;
			  }
			}

			@media (min-width: 767px) {
			  .nav-side-menu .menu-list .menu-content {
				display: block;
			  }
			}

			body {
			  margin: 0px;
			  padding: 0px;
			}

			p.modifiedFont {
				font-family: TimesNewRoman;
				font-size: 16px;
			}
		</style>
		
		<!-- NavBar CSS -->
		<style>
			 /* 
			  * NavBar CSS Styles
			  * http://stackoverflow.com/questions/24127521/change-bootstrap-navbar-background-color-and-font-color 
			 */
			 
			 .navbar-inverse {
				background-color: #006699;
				border-color: #030033;
			}

			.navbar-default {
				background-color: #006699;
				border-color: #E7E7E7;
			}

			.navbar-default .navbar-brand {
				color: #FFFFFF;
			}

			/* Stops text disaapearing under the navbar */
			body { 
				padding-top: 40px; 
				
			}

			/* Allows the iframe to be full height of screen */
			html, body {
				height: 100%;
			}

			table, th, td { 
				/*width:12.5%;*/
				font-family: verdana;
				font-size: 15px;
				font-weight: 200;
				padding-top:5px;
				padding: 2px;
				color: #FFFFFF;
			} 
			navTextColor {
				text-color: #FFFFFF;
			}
		</style>
		
		<script language="JavaScript">
			function start(){
				getData();
				document.getElementById('link1').click();
			}
			function getData() {
			var url = "http://query.yahooapis.com/v1/public/yql";
			var symbol = $("#symbol").val();
			symbol = "IBM";
			var change = 0;
			var data = encodeURIComponent("select * from yahoo.finance.quotes where symbol in ('" + symbol + "')");

			$.getJSON(url, 'q=' + data + "&format=json&diagnostics=true&env=http://datatables.org/alltables.env")
				.done(function (data) {

					 $("#name").text(data.query.results.quote.Symbol);
					 $("#date").text("Bid Price: " + data.query.results.quote.Date);
					 $("#time").text("Bid Price: " + data.query.results.quote.LastTradeTime);
					 $("#result").text(data.query.results.quote.LastTradePriceOnly);
					 change = data.query.results.quote.PercentChange;
					 if (change === null){
						change = "0%";
					 }
					 $("#chg").text("("+change+")");
					 //change = change.substring(0, change.length - 1);
					 change = parseFloat(change);
					 //$("#chg").text("Bid Price: " + data.query.results.quote.Change);
					 $("#bid").text("Bid Price: " + data.query.results.quote.LastTradePriceOnly);
					 $("#ask").text("Bid Price: " + data.query.results.quote.Ask);
					 $("#volume").text("Bid Price: " + data.query.results.quote.Volume);
					 $("#high").text("Bid Price: " + data.query.results.quote.HighLimit);
					 $("#low").text("Bid Price: " + data.query.results.quote.LowLimit);
					 
					 
					 if (change > 0.0){
						$('#img').html('<img src=\"images/up.png\" height=\"100%\">');
					 }
					 else if (change < 0.0){
						$('#img').html('<img src=\"images/down.png\" height=\"100%\">');
					 }
					 else{
						$('#img').html('<img src=\"images/flat.png\" height=\"100%\">');
					 }

					
					 
					 
					 if(data.query.results.quote.PercentChange.indexOf("+") != -1){

						document.getElementById("chg").className = "greenText";
					}
					 else{
						//alert(data.query.results.quote.PercentChange);

						document.getElementById("chg").className = "redText";
					}
					
			}).fail(function (jqxhr, textStatus, error) {
				var err = textStatus + ", " + error;
					$("#result").text('Request failed: ' + err);
			});
			}      

		</script>		
		
	</head>
	<body onload="start();">
		<!-- Top Navigation Bar -->
		<div id="header" class="navbar navbar-default navbar-fixed-top">
			
			<div class="navbar-header">
				<button class="navbar-toggle collapsed coll-button" type="button" data-toggle="collapse" data-target=".navbar-collapse">
					<i class="icon-reorder"></i>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-brand">
					<a href="index.html" ><img src="images/IBMWHITE.png" class="pull-left" height="100%"></a>
					
				</div> 
			</div>
			<nav class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a class="navTextColor">Leicester CIC Operations Portal</a>
					</li>
					<!--
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Navbar Item 2<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Navbar Item2 - Sub Item 1</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Navbar Item 3</a>
					</li>-->
				</ul>
				<ul class="nav navbar-nav pull-right">
					<li>
						<a  id="nbAcctDD" ></i>
						<table class="pull-right" >
							<tr>
							<td id="name">LOADING</td>
							<td id="result">STOCK</td>
							<td id="chg">INFORMATION</td>
							<td><div id="img"></div></td>
							</tr>
						</table>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<!-- Side Navigation Bar -->
		<div id="wrapper">
			<div id="sidebar-wrapper" class="col-xs-0 col-sm-6 col-md-3 col-lg-2"> 
			 
				<div id="sidebar">
					<div class="nav-side-menu">
		
						<!-- Code that should collapse the responsive menu -->
						
						<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
					  
							<div class="menu-list">
					  
								<ul id="menu-content" class="menu-content collapse out">
								
									<li>
									  <a href="index.html">
									  <i ><span class="glyphicon glyphicon-home" aria-hidden="true"></i> Home
									  </a>
									</li>
									
									<li data-toggle="collapse" data-target="#news" class="collapsed">
									  <a href="#"><i ><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></i> News</a>
									</li>  
									<ul class="sub-menu collapse" id="news">
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Newsletter 1</li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Newsletter 2</li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Newsletter 3</li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Newsletter 4</li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Newsletter 5</li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Newsletter 6</li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Newsletter 7</li>
									</ul>

									<li  data-toggle="collapse" data-target="#NewStarters" class="collapsed active">
									  <a href="#"><i ><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></i> New Starters</a></span>
									</li>
									<ul class="sub-menu collapse" id="NewStarters">
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="files/NewStart/InductionChecklist_CICLeicester.pdf" > Induction Checklist</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="files/NewStart/How to search in Lotus Notes.pptx.part" > How to search in Lotus Notes</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="files/NewStart/How to install SUT.odt" > How to install SUT</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="files/NewStart/How to backup your laptop.odt" > How to backup your laptop</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="files/NewStart/IBM UKI IGA Technical Powerpoint.odp" > IBM UKI IGA Technical Powerpoint</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="https://w3-03.ibm.com/tools/cm/iram/faces/home.jsp" target="_blank" > IBM Rational Asset Manager</a></li>
									</ul>


									<li data-toggle="collapse" data-target="#EmpVac" class="collapsed">
									  <a href="#"><i ><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></i> Employee Vacation & Time Off</a>
									</li>  
									
									<ul class="sub-menu collapse" id="EmpVac">
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes:///80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/3A74C29D8B05112280257EB5002E3874"> Employee Vacation and Time Off</a></li>
									</ul>
									
									<li data-toggle="collapse" data-target="#HowTo" class="collapsed">
									  <a href="#"><i ><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></i> How To Documents</a>
									</li>  
									<ul class="sub-menu collapse" id="HowTo">
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/06B09B4221D2813380257EEE0035E85C "> Car hire booking instructions</a></li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/DF56398A9FD1F6A880257EE70052D466 "> ILC - Timesheets</a></li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/57545520774AAE8980257EE70060437B"> Email signature setup</a></li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/4204F0BA760A355F80257EC4006784AE " > How to autostart AT&T and Notes client</a></li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/65B666B0B50D431F80257EB3003A755B " > How to request and install Sametime Unified Telephony (SUT)</a></li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/E8B6FD5C20A9E6CB80257ED1005094A9 "> Email signature setup</a></li>

									</ul>

									<li data-toggle="collapse" data-target="#PolDoc" class="collapsed">
									  <a href="#"><i ><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></i> Policy Documents</span></a>
									</li>  
									<ul class="sub-menu collapse" id="PolDoc">
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="http://w3.ibm.com/ibm/values/" target="_blank"> IBM Values at Work</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="https://w3-connections.ibm.com/wikis/home?lang=en#/wiki/GBS%20Delivery%20Center%20Operating%20Guidelines%20%26%20Attachments" target="_blank"> Partnership Attachments Wiki</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="http://w3-01.ibm.com/hr/web/uk/health/IBMUKHealthandSafetyPolicyMar2015.pdf " target="_blank"> Health and Safety Policy</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="http://w3-01.ibm.com/hr/web/uk/health/IBMUKHealthandSafetyPolicyMar2015.pdf" target="_blank"> BCG Business Conduct Guidelines</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/AF0524A8C994AB3B80257ED00069D5DE "> ITCS300 Security Policy</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="http://w3-01.ibm.com/hr/web/uk/expenses/expenses.html " target="_blank"> Expenses Policies</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="http://w3-01.ibm.com/hr/web/travel/" target="_blank"> OTR Travel Policies</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/ABBD29AED8237FEF80257ECD0044C28F " > Emergency Contact Information</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/F0B4F8B25ED0258680257ECB0053318C " > Employee Handbook</a></li>
										<li>F<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/8C7F9FF221251A7D80257EC5007C8B9C " > Ways of Working (Employee Guide)</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/8E0349F535A5814680257EBA004E61B8 " > CIC UK Leicester, Best Practice</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="http://w3-01.ibm.com/hr/web/uk/expenses/per_diem.html# " target="_blank"> Per Diem Rates and Meal Limits for Trips</a></li>
									</ul>


									<li data-toggle="collapse" data-target="#TimeUtil" class="collapsed">
									  <a href="#"><i ><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></i> Timesheeting/Utilisation <span class="arrow"></span></a>
									</li>
									<ul class="sub-menu collapse" id="TimeUtil">
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/94610B79005A08A480257ECB00689B8B"> Comms- articles etc</a></li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/F31EB7631402CBCD80257EB500574931"> Intranet Labor Claiming - Claim codes</a></li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/EF94F3AA0301B2CF80257EB5004BA809"> How to claim hours using Intranet Labor claiming (ILC)</a></li>
									</ul>
									
									<li data-toggle="collapse" data-target="#openSeat" class="collapsed">
									  <a href="#"><i ><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></i> Open Seats</a>
									</li>  
									<ul class="sub-menu collapse" id="openSeat">
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="#" target="_blank"> Currently Empty</a></li>
									</ul>

									<li data-toggle="collapse" data-target="#notCat" class="collapsed">
									  <a href="#"><i ><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></i> (Not Categorized)</a>
									</li>  
									<ul class="sub-menu collapse" id="notCat">
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/ADB25B6B18935BDC80257EE700614198  " target="_blank"> Induction Checklist</a></li>
									</ul>
									
								</ul>
						 </div>
					</div>
				</div>
			</div>
			<!-- Main Page Content -->
			<div id="main-wrapper" class="col-xs-12 col-sm-8 col-md-9 col-lg-10 pull-right" frameBorder="0" >
					<div id="main">
					  <div class="page-header">
						<h3>Admin</h3>
					  </div>
					  <p>404 TESTER</p>
					</div>
				  
				  
				</div>
		</div>
	</body>
</html>
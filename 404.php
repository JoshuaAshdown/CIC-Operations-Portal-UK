<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
		<!-- Bootstrap CSS/Scripts -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>	
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">	
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/navbar.css">
		<link rel="stylesheet" href="css/sidemenu.css">
			
				
		<!-- JS for stock widget-->
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
		<!--JS for text replacement-->
		<script languages="JavaScript">
		function loadLink(input) {
		  	  document.getElementById("demo").innerHTML = "The link should have opened in a new tab, if it hasn't please use the link below</p> <a href='"+input+"' target='_blank' >"+input+"</a></p>"
		}
		function loadNote(input) {
		  	  document.getElementById("demo").innerHTML = "The link should have opened in your notes application, if it hasn't please use the link below</p><p> <a href='"+input+"'>"+input+"</a></p>"
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
						<a id="title">Leicester CIC Operations Portal</a>
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
			<div id="sidebar-wrapper" class="col-xs-0 col-sm-5 col-md-3 col-lg-2"> 
			 
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
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> <a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/A0F4BC0AF621EA9280257EF2005BBD17 " onClick="loadNote('Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/A0F4BC0AF621EA9280257EF2005BBD17 ')">Newsletter 1</a></li>
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
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="https://w3-03.ibm.com/tools/cm/iram/faces/home.jsp" onclick="loadLink('https://w3-03.ibm.com/tools/cm/iram/faces/home.jsp')" target="_blank" >IBM Rational Asset Manager</a></li>
									</ul>


									<li data-toggle="collapse" data-target="#EmpVac" class="collapsed">
									  <a href="#"><i ><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></i> Employee Vacation & Time Off</a>
									</li>  
									
									<ul class="sub-menu collapse" id="EmpVac">
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes:///80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/3A74C29D8B05112280257EB5002E3874" onclick="loadNote('Notes:///80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/3A74C29D8B05112280257EB5002E3874')"> Employee Vacation and Time Off</a></li>
									</ul>
									
									<li data-toggle="collapse" data-target="#HowTo" class="collapsed">
									  <a href="#"><i ><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></i> How To Documents</a>
									</li>  
									<ul class="sub-menu collapse" id="HowTo">
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/06B09B4221D2813380257EEE0035E85C "onclick="loadNote('Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/06B09B4221D2813380257EEE0035E85C')"> Car hire booking instructions</a></li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/DF56398A9FD1F6A880257EE70052D466 "onclick="loadNote('Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/DF56398A9FD1F6A880257EE70052D466')"> ILC - Timesheets</a></li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/57545520774AAE8980257EE70060437B"onclick="loadNote('Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/57545520774AAE8980257EE70060437B')"> Email signature setup</a></li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/4204F0BA760A355F80257EC4006784AE "onclick="loadNote('Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/4204F0BA760A355F80257EC4006784AE')" > How to autostart AT&T and Notes client</a></li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/65B666B0B50D431F80257EB3003A755B " onclick="loadNote('Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/65B666B0B50D431F80257EB3003A755B')"> How to request and install Sametime Unified Telephony (SUT)</a></li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/E8B6FD5C20A9E6CB80257ED1005094A9 "onclick="loadNote('Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/E8B6FD5C20A9E6CB80257ED1005094A9')"> Email signature setup</a></li>

									</ul>

									<li data-toggle="collapse" data-target="#PolDoc" class="collapsed">
									  <a href="#"><i ><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></i> Policy Documents</span></a>
									</li>  
									<ul class="sub-menu collapse" id="PolDoc">
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="http://w3.ibm.com/ibm/values/"  onclick="loadLink('http://w3.ibm.com/ibm/values/')"  target="_blank"> IBM Values at Work</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="https://w3-connections.ibm.com/wikis/home?lang=en#/wiki/GBS%20Delivery%20Center%20Operating%20Guidelines%20%26%20Attachments" onclick="loadLink('HTTP://LINK')"  target="_blank"> Partnership Attachments Wiki</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="http://w3-01.ibm.com/hr/web/uk/health/IBMUKHealthandSafetyPolicyMar2015.pdf " onclick="loadLink('https://w3-connections.ibm.com/wikis/home?lang=en#/wiki/GBS%20Delivery%20Center%20Operating%20Guidelines%20%26%20Attachments')"  target="_blank"> Health and Safety Policy</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="http://w3-01.ibm.com/hr/web/uk/health/IBMUKHealthandSafetyPolicyMar2015.pdf" onclick="loadLink('http://w3-01.ibm.com/hr/web/uk/health/IBMUKHealthandSafetyPolicyMar2015.pdf')"  target="_blank"> BCG Business Conduct Guidelines</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/AF0524A8C994AB3B80257ED00069D5DE "onclick="loadNote('Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/AF0524A8C994AB3B80257ED00069D5DE')"> ITCS300 Security Policy</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="http://w3-01.ibm.com/hr/web/uk/expenses/expenses.html " onclick="loadLink('ttp://w3-01.ibm.com/hr/web/uk/expenses/expenses.html')"  target="_blank"> Expenses Policies</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="http://w3-01.ibm.com/hr/web/travel/" onclick="loadLink('http://w3-01.ibm.com/hr/web/travel/')"  target="_blank"> OTR Travel Policies</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/ABBD29AED8237FEF80257ECD0044C28F " onclick="loadNote('Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/ABBD29AED8237FEF80257ECD0044C28F')"> Emergency Contact Information</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/F0B4F8B25ED0258680257ECB0053318C " onclick="loadNote('Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/F0B4F8B25ED0258680257ECB0053318C')"> Employee Handbook</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/8C7F9FF221251A7D80257EC5007C8B9C " onclick="loadNote('Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/8C7F9FF221251A7D80257EC5007C8B9C')"> Ways of Working (Employee Guide)</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/8E0349F535A5814680257EBA004E61B8 " onclick="loadNote('Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/8E0349F535A5814680257EBA004E61B8')"> CIC UK Leicester, Best Practice</a></li>
										<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="http://w3-01.ibm.com/hr/web/uk/expenses/per_diem.html# " onclick="loadLink('http://w3-01.ibm.com/hr/web/uk/expenses/per_diem.html#')"  target="_blank"> Per Diem Rates and Meal Limits for Trips</a></li>
									</ul>


									<li data-toggle="collapse" data-target="#TimeUtil" class="collapsed">
									  <a href="#"><i ><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></i> Timesheeting/Utilisation <span class="arrow"></span></a>
									</li>
									<ul class="sub-menu collapse" id="TimeUtil">
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/94610B79005A08A480257ECB00689B8B"onclick="loadNote('Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/94610B79005A08A480257ECB00689B8B')"> Comms- articles etc</a></li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/F31EB7631402CBCD80257EB500574931"onclick="loadNote('Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/F31EB7631402CBCD80257EB500574931')"> Intranet Labor Claiming - Claim codes</a></li>
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/EF94F3AA0301B2CF80257EB5004BA809"onclick="loadNote('Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/EF94F3AA0301B2CF80257EB5004BA809')"> How to claim hours using Intranet Labor claiming (ILC)</a></li>
									</ul>
									
									<li data-toggle="collapse" data-target="#openSeat" class="collapsed">
									  <a href="#"><i ><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></i> Open Seats</a>
									</li>  
									<ul class="sub-menu collapse" id="openSeat">
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="#" > Currently Empty</a></li>
									</ul>

									<li data-toggle="collapse" data-target="#notCat" class="collapsed">
									  <a href="#"><i ><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></i> (Not Categorized)</a>
									</li>  
									<ul class="sub-menu collapse" id="notCat">
									  <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/ADB25B6B18935BDC80257EE700614198  " onclick="loadNote('Notes://D06DBL014/80257EAF0051C680/0A4E99592BC2F648802577C2003DF44B/ADB25B6B18935BDC80257EE700614198')" > Induction Checklist</a></li>
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
					<h3>Operations Portal Home Page</h3>
				  </div>
				  <p id = "demo">
					404 IMPLEMENTATION TESTER PAGE!
				  </p>
				</div>
			</div>
			
		</div>
	</body>
</html>
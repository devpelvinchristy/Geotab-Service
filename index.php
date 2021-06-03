<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>Geotab Service</title>
    <meta name="author" content="Adtile">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://drive.google.com/uc?id=1Xb4MUQphm9NeafJZRmUD5E2VfnF_ZR0X"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/odo-themes/odometer-theme-car.css"/>
    <style>

.nav-collapse ul {
  margin: 0;
  padding: 0;
  width: 100%;
  display: block;
  list-style: none;
}

.nav-collapse li {
  width: 100%;
  display: block;
}

.js .nav-collapse {
  clip: rect(0 0 0 0);
  max-height: 0;
  position: absolute;
  display: block;
  overflow: hidden;
  zoom: 1;
}

.nav-collapse.opened {
  max-height: 9999px;
}

.disable-pointer-events {
  pointer-events: none !important;
}

.nav-toggle {
  -webkit-tap-highlight-color: rgba(0,0,0,0);
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}

@media screen and (min-width: 40em) {
  .js .nav-collapse {
    position: relative;
  }
  .js .nav-collapse.closed {
    max-height: none;
  }
  .nav-toggle {
    display: none;
  }
}


/* ------------------------------------------
  DEMO STYLES
--------------------------------------------- */

body {
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  text-size-adjust: 100%;
  color: #37302a;
  background: #fff;
  font: normal 100%/1.4 sans-serif;
margin:0;
}

section {
  border-bottom: 1px solid #999;
  text-align: center;
  padding: 100px 0 0;
  height: 800px;
  width: 100%;
}

h1 {
  margin-bottom: .5em;
}

p {
  width: 90%;
  margin: 0 auto;
}


/* ------------------------------------------
  FIXED HEADER
--------------------------------------------- */

header {
  background:#1070a9;
  position: fixed;
  z-index: 3;
  height:40px;
  left: 0;
  top: 0;
  width: 100%;
  background-image: linear-gradient(to right,#0b4b77,#1179b6 50%, #0b4b77);
  overflow-x: hidden;
}

.logo {
  -webkit-tap-highlight-color: rgba(0,0,0,0);
  text-decoration: none;
  font-weight: bold;
  line-height: 55px;
  padding: 0 20px;
  float: left;
  width:100px;
  height:30px;
  margin-top: 10px;
}


/* ------------------------------------------
  MASK
--------------------------------------------- */

.mask {
  -webkit-transition: opacity 300ms;
  -moz-transition: opacity 300ms;
  transition: opacity 300ms;
  background: rgba(0,0,0, .5);
  visibility: hidden;
  position: fixed;
  opacity: 0;
  z-index: 2;
  bottom: 0;
  right: 0;
  left: 0;
  top: 0;
}

.android .mask {
  -webkit-transition: none;
  transition: none;
}

.js-nav-active .mask {
  visibility: visible;
  opacity: 1;
}

@media screen and (min-width: 40em) {
  .mask {
    display: none !important;
    opacity: 0 !important;
  }
}


/* ------------------------------------------
  NAVIGATION STYLES
--------------------------------------------- */

.fixed {
  position: fixed;
  width: 100%;
  left: 0;
  top: 0;
}

.nav-collapse,
.nav-collapse * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.nav-collapse,
.nav-collapse ul {
  list-style: none;
  width: 100%;
  float: left;
}

@media screen and (min-width: 40em) {
  .nav-collapse {
    float: right;
    width: auto;
  }
}

.nav-collapse li {
  float: left;
  width: 100%;
}

@media screen and (min-width: 40em) {
  .nav-collapse li {
    width: auto;
  }
}

.nav-collapse a {
  -webkit-tap-highlight-color: rgba(0,0,0,0);
  border-top: 1px solid white;
  text-decoration: none;
  background:black;
  padding: 0.7em 1em;
  color: #fff;
  width: 100%;
  float: left;
}

.nav-collapse a:active,
.nav-collapse .active a {
  background: black;
}

@media screen and (min-width: 40em) {
  .nav-collapse a {
    border-left: 1px solid white;
    padding: 1.02em 2em;
    text-align: center;
    border-top: 0;
    float: left;
    margin: 0;
  }
}

.nav-collapse ul ul a {
  background: #ca3716;
  padding-left: 2em;
}

@media screen and (min-width: 40em) {
  .nav-collapse ul ul a {
    display: none;
  }
}


/* ------------------------------------------
  NAV TOGGLE STYLES
--------------------------------------------- */

@font-face {
  font-family: "responsivenav";
  src:url("../icons/responsivenav.eot");
  src:url("../icons/responsivenav.eot?#iefix") format("embedded-opentype"),
    url("../icons/responsivenav.ttf") format("truetype"),
    url("../icons/responsivenav.woff") format("woff"),
    url("../icons/responsivenav.svg#responsivenav") format("svg");
  font-weight: normal;
  font-style: normal;
}

.nav-toggle {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-decoration: none;
  text-indent: -300px;
  position: relative;
  overflow: hidden;
  width: 60px;
  height: 55px;
  float: right;
}

.nav-toggle:before {
  color: #fff; /* Edit this to change the icon color */
  font: normal 28px/55px "responsivenav"; /* Edit font-size (28px) to change the icon size */
  text-transform: none;
  text-align: center;
  position: absolute;
  content: "\2261"; /* Hamburger icon */
  text-indent: 0;
  width: 100%;
  left: 0;
  top: 0;
}

.nav-toggle.active:before {
  font-size: 24px;
  content: "\78"; /* Close icon */
}

#taskForm {
    margin-top: 50px;
}


.search-bar{
  margin-top:30px;
  margin-left: initial;
  width: 400px;
  height: 200px;
  font-size: 13px;
  font-weight: lighter;
}

#name-rego{
  width:270px;
  height: 30px;
  border-radius: 10px;
  margin-left: 40px;
}

.group-fleet{
  margin-top:-158px;
  margin-left: initial;
  width: 400px;
  height: 200px;
  font-size: 13px;
  font-weight: lighter;
}

#fleetlist{
  width:270px;
  height: 30px;
  border-radius: 5px;
}

.odo-img{
  margin-left: 350px;
  margin-top: 1px;
  right:100px;
  width:30px;
  height: 37px;
}

.service-header{
  font-size: 20px;
  margin-top: 30px;
  font-weight: bold;
}

.odo{
  margin-left: 1000px;
  margin-right: 10px;
margin-top: -50px;
}

.status{
  margin-top: -236px;
  margin-left: 380px;
  width: 500px;
  height: 200px;
  font-size: 13px;
  font-weight: lighter;
}

#status-list{
  width:200px;
  border-radius: 5px;
  margin-left: 16px;
}

.type{
  margin-top: -156px;
  margin-left: 380px;
  width: 500px;
  height: 200px;
  font-size: 13px;
  font-weight: lighter;
}

#type-list{
  width:200px;
  border-radius: 5px;
  margin-left: 28px;
}

.form-content{
  width: 690px;
    max-width: 1100px;
height: 200px;
    margin: 0 auto;
    padding: 15px;
    box-shadow: 0px 0px 20px #5c5c5c;
    background-color: white;
    border-radius: 8px;
    margin-left: initial;
    position: absolute;
}

.rego{

  margin-left: 800px;
  font-size: 15px;
  font-weight: lighter;

}

/* Dropdown Button */
.dropbtn {
  background-color: transparent;
  color: black;
  font-size: 13px;
  padding: 2.5px;
  cursor: pointer;
  border-radius: 8px;
  margin-bottom: 6px;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #E5E5E5;  
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position:absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left: 590px;
}

/* Links inside the dropdown */
.dropdown-content a {
  color:lightskyblue;
  padding: 10px 12px;
  text-decoration: none;
  display: block;
  font-weight: bold;
  font-size: 10px;

}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}

.tools-bar{
  margin-left: 590px;
  margin-top: -35px;

}

.tools{
  border: none;
  display: inline-block;
  color: #000000;

}



/* Style the tab */
.tab {
  overflow: hidden;
  background-color: white;
}

/* Style the buttons inside the tab */
.tab button {
  width:100px;
  height:27px;
  background-color: inherit;
  float: left;
  outline: none;
  cursor: pointer;
  transition: 0.3s;
  font-size: 12px;
  border-radius: 10px;
  border-bottom: none;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  width: 77%;
  height:720px;
  border: 2px solid #0B4B77;
  border-radius: 10px;
  padding: 6px 12px;
}

.tabcontent p {
  margin-top: 20px;
  margin-left: 10px;
}


.schedule-task{
  margin-left: 750px;
  margin-top: 80px;
  width:80%;
  position: fixed;

}

fieldset{
  position: fixed;
  border-radius: 20px;
  margin-left: -20px;
  margin-top: 100px;
}

.completed-dropdown{
  margin-top: 20px;
}

 #completed-list{
  margin-left: 60px;
  float:left;
  width:150px;

}

.table-container{
  width:651px;
  margin-left: 20px;
  margin-top:80px;
  
}

.table-bordered {
  border: 1px solid #ccc;
  background-color: #fff;
  -webkit-box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
}

.table-spaced {
  margin-top: 20px;
}


.main-table{
  margin-top: 250px;
  margin-left: initial;
}

table {
  border-radius: 10px;

  width: 650px;
}

table th {
  font-size: 12px;
  padding: 8px;
  border-radius: 1px;
  border: 1px solid #ccc;
}
table td {
  font-size: 10px;
  padding: 8px;
  border-radius: 5px;
  border: none;

}

table th {
  background-color: lightslategray;
  border-top: 5px;
}


table tbody tr:nth-child(even) {
  background-color: #f7f7f7;
  cursor: pointer;
}

tbody{
  cursor:pointer;
}

tr:nth-child(even):hover {background-color:lightgray}
tr:nth-child(odd):hover {background-color:lightgray}

#scheduled-content{
  display:none;
}

.schedulenewbutton{
font-size:15px ;
  margin-left: initial;
  margin-top: 15px;
  background-color:transparent;
  cursor: pointer;
}

.dropbtnspec{
  background-color: transparent;
  color: black;
  font-size: 13px;
  padding: 2.5px;
  cursor: pointer;
  border-radius: 8px;
  margin-top: 10px;
  margin-left: 480px;
}

.dropdown-content-spec{
display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left: 1000px;
}

.dropdown-content-spec a {
  color:lightskyblue;
  padding: 10px 12px;
  text-decoration: none;
  display: block;
  font-weight: bold;
}

.schedule-main-table{
  margin-top: 30px;
  background-color:burlywood;
}

.scheduled-table-container{
  width:500px;
  margin-top:80px;
  
}
.scheduled-table{
  background-color:lightslategray;
width:100%;
  margin-left: initial;
  padding: 8px;
  border-radius: 1px;
}

.scheduled-table th{
  width: 1000px;
  background-color:lightslategray;
  font-size: 10px;
  padding: 8px;

  border: 1px solid black;
  }

  .scheduled-table td {
    font-size: 10px;
    padding: 8px;
    border: 3px solid #ccc;
  }
  
  .scheduled-table th {
    background-color:lightslategray;
  }
  
  .scheduled-table th:first-child, .scheduled-table td:first-child {
    border-left: none;
  }
  
  .scheduled-table th:last-child, .scheduled-table td:last-child {
    border-right: none;
  }
  
  .scheduled-table tbody tr:nth-child {
    background-color: #f7f7f7;
  }
  
  .scheduled-table tbody{
    cursor:pointer;
  }

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0);;
  background-color: rgba(0,0,0,0.6); /* Fallback color */ /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: absolute;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 800px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s;
  height: 300px;
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {

  padding: 2px 16px;
  background-color: #0B4B77;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  position: relative;
  padding: 2px 16px;
  background-color: #0B4B77;
  color: white;
  margin-top: 35px;
}

.modal-backdrop{
  z-index: -1;
  opacity: 0.5;
}


.modal-type{
  margin-top: -20px;
  margin-left: 200px;
  width: 300px;
  height: 200px;
  font-size: 13px;
  font-weight: lighter;
}
 

.modal-supplier{
  margin-top: -170px;
  margin-left: 180px;
  width: 300px;
  height: 200px;
  font-size: 13px;
  font-weight: lighter;
}
 
#supplier-list{
width:200px;
border-radius: 5px;
margin-left: 25px;
}

#scheduledItemTableWrapper {
  position: absolute;
  padding: 5px 5px 10px 5px;
  margin: 6px 4px 0 0;
  border-top: solid 1px #BEB7AC;
  border-bottom: solid 1px #BEB7AC;
  background-color: #EEE;
  height: 210px;
  width: 798px;
  margin-top: -170px;
}

#scheduledItemTable{
width:790px;
}

.service-maincontainer{
  width: 720px;
height: 93%;
  margin: 0 auto;
  padding: 15px;
  box-shadow: 0px 0px 20px #5c5c5c;
  background-color: #ccc;
  border-radius: 8px;
  margin-left: initial;
  margin-top: 50px;
  position: absolute;
}

.rego{
  position: fixed;
  margin-left: 735px;
  margin-top: 140px;
  font-size: 15px;
  display: none;
}

.make-model{
  position: fixed;
  margin-left: 1448px;
  margin-top: 60px;
  font-size: 15px;
  display: none;
}

.year{
  position: fixed;
  margin-left: 1500px;
  margin-top: 97px;
  font-size: 15px;
  display: none;
}


.vin{
  position: fixed;
  margin-left: 1506px;
  margin-top: 130px;
  font-size: 15px;
  display: none;
}

.vehicle-odometer {
  position: fixed;
  margin-left: 1820px;
  margin-top: 60px;
  font-size: 15px;
  display: none;

}

#veh-rego{
  border: none;
}

#vin-number{
  border:none;
}

#vehicle-year{
  border:none;
}

#vehicle-makemodel{
  border:none;
}

#modal-veh-name{
  border: none;
  margin-left: initial;
  font-size: 15px;
}
    </style>
  </head>

<body>

    <header class="header">
        <img src="https://drive.google.com/uc?id=1vMmaP6iIVII1jw4gBsbGfsFJmgktY4jZ" class="logo" data-scroll>
    </header>



    <div class="service-maincontainer">
        <h1 class="service-header">Service Vehicles</h1>
        <div class="tools-bar">
         
            <button onclick="dropdownFunction()" class="dropbtn"><i  class="fa fa-wrench fa-spin fa-1.8x"></i> Tools<i style="font-size: 10px;" class="material-icons">arrow_drop_down</i></button>
        </div>
            <div id="myDropdown" class="dropdown-content">
              <a href="#"><i class="fa fa-question-circle"></i> Service Help</a>
              <a href="#"><i class="fa fa-file-excel-o"></i> Export CSV Schedules</a>
              <a href="#"><i class="fa fa-file-pdf-o"></i> Export PDF Schedules</a>
              <a href="#"><i class="fa fa-envelope"></i> Schedule this Report</a>
    
            </div>
    


        <div class="dropdown">

          <script>
            /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function dropdownFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')('material-icons')) {
    var dropdownsfunction = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdownsfunction.length; i++) {
      var openDropdown = dropdownsfunction[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
        <form class="form-content">
        <div class="search-bar">
            <label> Search:</label>
            <input onkeyup="searchMachineFunction()" type="text" name="name-rego" id="name-rego" placeholder="Name or Rego.">
        </div>
      <script>
          function searchMachineFunction() {
            var machineInput, filter, machineTable, vehtr, vehtd, i, txtValue;
            machineInput = document.getElementById("name-rego");
            filter = machineInput.value.toUpperCase();
            table = document.getElementById("feed");
            vehtr = table.getElementsByTagName("tr");
            for (i = 0; i < vehtr.length; i++) {
              td = vehtr[i].getElementsByTagName("td")[0];
              if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  vehtr[i].style.display = "";
                } else {
                  vehtr[i].style.display = "none";
                }
              }       
            }
          }
          </script>
            <div class="group-fleet">
            <label> Group (Fleet): </label>
            <select id="fleetlist">
                
                    <option value="1">All Group(Fleets)</option>
                
            </select>
        </div>
        <div class="status">
            <label> Status:</label>
            <select id="status-list">
                <option value="1">All</option>
                <option value="1">Due</option>
                <option value="2">Overdue by total</option>
                <option value="2">Overdue by date</option>
                <option value="2">Overdue by distance</option>
                <option value="2">Overdue by engine hour</option>
            </select>
        </div>

        <div class="type">
            <label> Type:</label>
            <select id="type-list">
                <option value="1">All service types</option>
                <option value="2">REGO</option>
                <option value="3">WOF</option>
                <option value="4">COF</option>
                <option value="5">5000 KM Service</option>
                <option value="6">60000 kms or 48 month service</option>
                <option value="7">6 Monthly Service</option>
                <option value="8">Air Con</option>
                <option value="9">AA service</option>
                <option value="10">Battery</option>
                <option value="11">Battery Check</option>
                <option value="12">Brake Due</option>
                <option value="13">Brake Service</option>
                <option value="14">CCTV 6 Months Inspection</option>
                <option value="15">Oil Change</option>
                <option value="16">Tyre Replacement</option>

            </select>
        </div>
       
      </form>
    </div>
    <div class="main-table">
      <div id="feed-container" class="table-container table-bordered table-spaced">
        <table>
            <thead>
            <tr class="table-header">
                <th id="vehicleName">Fleet Name</th>
                <th id="licensePlate">Plate</th>
                <th id="nextService">Next Service Item</th>
            </tr>
            </thead>
            <tbody onclick="openTableContent(event, 'scheduled-content', 'veh-rego', 'veh-make-model', 'veh-year', 'veh-vin', 'veh-odo')" class="feed-body" id="feed"></tbody>
        </table>
      </div>
      </div>
      <script>
        function openTableContent(evts, tabLi, identifier) {
              var i, tabcont, tablin, vehdetails, makemodel, vehyear, vehvin, vehodo;
              tabcont = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcont.length; i++) {
                tabcont[i].style.display = "none";
              }
              vehdetails = document.getElementsByClassName("rego");
              for (i = 0; i < vehdetails.length; i++) {
                vehdetails[i].style.display = "block";
                evts.currentTarget.className += "active";
              }
              makemodel = document.getElementsByClassName("make-model");
              for (i = 0; i < makemodel.length; i++) {
                makemodel[i].style.display = "block";
                evts.currentTarget.className += "active";
              }
              vehyear = document.getElementsByClassName("year");
              for (i = 0; i < vehyear.length; i++) {
                vehyear[i].style.display = "block";
                evts.currentTarget.className += "active";
              }
              vehvin = document.getElementsByClassName("vin");
              for (i = 0; i < vehvin.length; i++) {
                vehvin[i].style.display = "block";
                evts.currentTarget.className += "active";
              }
              vehodo = document.getElementsByClassName("vehicle-odometer");
              for (i = 0; i < vehodo.length; i++) {
                vehodo[i].style.display = "block";
                evts.currentTarget.className += "active";

              }
              tablin = document.getElementsByClassName("feed-body");
              for (i = 0; i < tablin.length; i++) {
                tablin[i].className = tablin[i].className.replace(" active", "");
              }
              document.getElementById(tabLi).style.display = "block";
              evts.currentTarget.className += " active";


              $("tr").click(function(event) {
      var tr = $(this).closest("tr");
      var odo = tr.attr("odo");
      var vin = tr.attr("vin"); 
      var licPlate = tr.attr("licPlate");
      var vehname = tr.attr("vehname");
      document.getElementById("vin-number").value = vin + " ";
      document.getElementById("veh-rego").value = licPlate + " ";
      document.getElementById("nextServiceOdometer").value = odo + " ";
      document.getElementById("modal-veh-name").value = vehname + " ";
    });
          }

          
      </script>
      
      <script src="./js/service.js"></script>
      <script type="text/javascript">
      
      var api = GeotabApi(function (authenticateCallback) {
          authenticateCallback('my.geotab.com', 'directtrack', 'pelvin@directt.co.nz', 'Pelvindirecttrack$3', function(err) {
              console.error(err);
          });
      });
      
      var table;
      
      document.addEventListener("DOMContentLoaded", function() {
      
      table = document.getElementById("feed");
      
      
      populateInterface();
      
    
          pollForData(); // This ensures it starts right away
                          
      
      table.innerHTML = "";
      document.getElementById("feed-container").setAttribute("style", "display:block;");
      
       });
      
       
      
       function pollForData(){
      
        var group = {
              id: "GroupCompanyId" // Populated with the desired group id.
          },
          results = [];
      
          var apiCalls = [];
      
      api.call("Get",{
          typeName : "Device",                          
          search : {
              "groups" : [group]
          },
          resultsLimit: 200
      }, function (devices) {
          var now = new Date().toISOString(),
              calls = [],
              diagnostic = {
                  id: "DiagnosticOdometerAdjustmentId"
              };
      
          devices.forEach(function (device) {
              results.push({
                  name : device.name,
                  licensePlate : device.licensePlate,
                  vehicleIdentificationNumber : device.vehicleIdentificationNumber
              });
              calls.push({
                  method : "Get",
                  params : {
                      typeName : "StatusData",
                      search : {
                          fromDate : now,
                          toDate : now,
                          diagnosticSearch : diagnostic,
                          deviceSearch : device
                      }
                  }
              });
          });
          api.call("ExecuteMultiCall", {
              calls : calls
          }, function (callResults) {
              var statusData, i;
              for (i = 0; i < callResults.length; i++) {
                  statusData = callResults[i][0];
                  if (statusData) {
                      results[i].odometer = statusData.data;
                  }
                  table.appendChild(createTableRow(results[i]));
              }
              console.log(results);
          });
      });
                  }
      
      function createTableRow(feedItem) {
        var row = document.createElement("tr");
        row.appendChild(createCell(feedItem.name));
        row.appendChild(createCell(feedItem.licensePlate));

  row.setAttribute("odo", feedItem.odometer);
  row.setAttribute("vin", feedItem.vehicleIdentificationNumber);
  row.setAttribute("licPlate", feedItem.licensePlate);
  row.setAttribute("vehname", feedItem.name)

       
        return row;
      }
      
      function createCell(text) {
        var cell = document.createElement("td");
        var textNode = document.createTextNode(text);
        cell.appendChild(textNode);
        cell.setAttribute("id", "spec");
        return cell;
      }
       
      function populateInterface() {
      var group = {
              id: "GroupCompanyId", // Populated with the desired group id.
          },
          results = [];
      
      api.call("Get", {
          typeName : "Group",
          resultsLimit: 1000
      }, function (groups) {
       
              if (groups !== undefined && groups.length > 0) {
                          var select = document.getElementById("fleetlist");
                          for (var i = 0; i < groups.length; i++) {
                                  var option = new Option();
                                  option.text = groups[i].name; 
                                  option.setAttribute("data-id", groups[i].id);
                                  fleetlist.add(option);
                          }
              }
              
      
          groups.forEach(function (groupTree) {
             calls = [];
              results.push({
                  name : groupTree.name
              });
              calls.push({
                  method : "Get",
                  params : {
                      typeName : "StatusData",
                      search : {
                          fromDate : now,
                          toDate : now,
                          Group : groupTree
                      }
                  }
              });
          });
          api.call("ExecuteMultiCall", {
              calls : calls
          }, function (callResults) {
              var statusData, i;
              for (i = 0; i < callResults.length; i++) {
                  statusData = callResults[i][0];
              }
              console.log(results);
          });
      });
      /*opt nomin*/
      
      }    
                 
             
      </script>
      </div>
      
<div class="rego"> 
  Rego:<input id="veh-rego" type="text">
</div>



<div class="make-model" id="veh-make-model">
  Make/Model:<input id="vehicle-makemodel" type="text">
</div>

<div class="year" id="veh-year">
  Year:<input id="vehicle-year" type="text">
</div>

<div class="vin" id="veh-vin">
  VIN:<input  id="vin-number" type="text">
</div>


<script>
  window.odometerOptions = {
    format: '(ddd).dd'
  }; 
  </script>
  
  <script src="./odometer.js"></script>
  <div class="vehicle-odometer" >
  <div class="odometer" id="veh-odo">0000</div>
  
  <script>
    setTimeout(function(){
      $('.odometer').html();
    }, 1000);
  </script>
   </div>

<fieldset>
<div class="schedule-task">
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'scheduled')" id="defaultOpen">Scheduled</button>
        <button class="tablinks" onclick="openTab(event, 'completed')">Completed</button>
        <button class="tablinks" onclick="openTab(event, 'task')">Tasks</button>
      </div>
      
      <div id="scheduled" class="tabcontent">
        <p>Click on a vehicle to the left to manage its Service, Maintenance and Compliance Schedule.
<br>
            Read the Service and Maintenance help files to get you started. </p>
      </div>
      
      <div id="completed" class="tabcontent">
        <div class="completed-dropdown">
            <select id="completed-list">
                <option value="1">The Last 12 months</option>
                <option value="2">This Month</option>
                <option value="2">Last Month</option>
                <option value="2">This Year </option>
                 <option value="2">Last Year</option>
                <option value="2">A Date Range</option>
            </select>
        </div>
        <br>
        <br>
        <p>Click on a vehicle to the left to see its completed service items.</p> 
      </div>
      
      <div id="task" class="tabcontent">
        <p>Click on a vehicle to the left to see its service tasks.</p>
      </div>
      
      <script>
      function openTab(evt, tabList) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabList).style.display = "block";
        evt.currentTarget.className += " active";
      }
      
      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
      </script>


<div id="scheduled-content" class="tabcontent">
  <button type="button" class="schedulenewbutton" id="schBtn" data-toggle="modal" data-target="#myModal">Schedule New Service</button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <form action="./database_service.php" method="POST">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Schedule Service Item</h4>
        </div>
        <div class="modal-body">

          <div class="modal-vehicle-name"> 
            <input id="modal-veh-name" type="text">
          </div>
          <div class="modal-type">
            <label> Type:</label>
            <select id="type-list" name="type-list">
                <option value="1">All service types</option>
                <option value="2">REGO</option>
                <option value="3">WOF</option>
                <option value="4">COF</option>
                <option value="5">5000 KM Service</option>
                <option value="6">60000 kms or 48 month service</option>
                <option value="7">6 Monthly Service</option>
                <option value="8">Air Con</option>
                <option value="9">AA service</option>
                <option value="10">Battery</option>
                <option value="11">Battery Check</option>
                <option value="12">Brake Due</option>
                <option value="13">Brake Service</option>
                <option value="14">CCTV 6 Months Inspection</option>
                <option value="15">Oil Change</option>
                <option value="16">Tyre Replacement</option>
  
            </select>
        </div>
        <div class="modal-supplier">
          <label> Supplier:</label>
       
          <select id="supplier-list" name="supplier-list">
            <option value="">No supplier yet</option>
              <option value="361">A1 Auto Restorations</option>
              <option value="2863">AA</option>
              <option value="500">Apex Total tyres </option>
              <option value="16125">Auckland Vehicles </option>
              <option value="636">Auto Servicing Ltd </option>
              <option value="6929">Bayswater Vehicles </option>
              <option value="18644">Beck TEST </option>
              <option value="5553">Bill Thornley </option>
              <option value="4122">Birkdale Motors </option>
              <option value="16059">bla </option>
              <option value="2279">Blackwells Mazda </option>
              <option value="19400">Blackwells Mazda - CHCH </option>
              <option value="7976">Blackwoods </option>
              <option value="5146">Bridgestone </option>
              <option value="1141">Cambridge Tyre and Alignment </option>
              <option value="3892">Carters Tyres Highbrook </option>
              <option value="1900">Carters Tyres Mt Maunagnui </option>
              <option value="182">Clean Cars co </option>
              <option value="501">Clutch Services Ltd </option>
              <option value="180">Coast Autos </option>
              <option value="7965">Courtesy Ford </option>
              <option value="11110">CRMC In House Workshop </option>
              <option value="13066">Daves Panel Beaters </option>
              <option value="4567">David Storey Motors </option>
              <option value="10867">Dunedin City Mazda </option>
              <option value="1770">Ebbett Holden Tga </option>
              <option value="5142">Ebbett Skoda Hamilton </option>
              <option value="364">Euromarque </option>
              <option value="8324">Fairview Mazda </option>
              <option value="499">Federal Motors </option>
              <option value="4777">Fil oils </option>
              <option value="7377">Giltrap Skoda </option>
              <option value="199">Gluyas Motors </option>
              <option value="5137">Hannah Motor Service Chch </option>
              <option value="1428">HB Tyres </option>
              <option value="451">Honda Newmarket </option>
              <option value="14646">Hyundai North Shore </option>
              <option value="22013">Inghams Hyundai  Hamilton </option>
              <option value="18795">Jim Wright Nissan </option>
              <option value="1913">John Andrews Mazda </option>
              <option value="2195">Keith Andrew Trucks </option>
              <option value="4757">Lattimore Motors </option>
              <option value="1244">Macaulay Motors </option>
              <option value="503">Macaulys Ltd </option>
              <option value="5631">Markos oil </option>
              <option value="2105">Max Upholstry </option>
              <option value="1524">MazdaCare </option>
              <option value="363">Mecano Motors </option>
              <option value="21404">Mega Mitre10 Albany </option>
              <option value="9402">Metro Glass Te Rapa </option>
              <option value="365">Midas </option>
              <option value="15480">Mikes Servicing </option>
              <option value="427">Miles </option>
              <option value="6839">Mobile </option>
              <option value="3207">Moyes Panmure </option>
              <option value="366">Mufflerman </option>
              <option value="10763">North Harbour Mazda </option>
              <option value="15342">North Harbour Vehicles </option>
              <option value="21305">Novus Glass </option>
              <option value="15222">NZTA </option>
              <option value="7">Oil </option>
              <option value="19399">Olsen Alternators </option>
              <option value="2486">Online </option>
              <option value="5141">Paeroa Super Tyre Man </option>
              <option value="8234">Rangiora Mazda </option>
              <option value="416">Riverside Autos </option>
              <option value="1659">Robs Incredible Workshop </option>
              <option value="10455">Rogers Truck Services </option>
              <option value="181">The spit and polish co </option>
              <option value="15061">Tonys Tyre Service </option>
              <option value="8475">Toyota Guy </option>
              <option value="504">Transport Ltd </option>
              <option value="15108">Tristram European </option>
              <option value="4810">Truck Stops Invercargill </option>
              <option value="8023">Truck Stops Napier </option>
              <option value="7849">Tyre General Christchurch </option>
              <option value="11395">Tyre Power - Te Aroha </option>
              <option value="1707">Ultimate Motor Group </option>
              <option value="3971">universal diesel   </option>
              <option value="502">Vehicle Restorations </option>
              <option value="15220">VINZ </option>
              <option value="4193">VTNZ </option>
              <option value="993">waterman </option>
              <option value="493">West Coast Autos </option>
              <option value="20748">WFA  </option>
              <option value="14897">Winger Motors Ltd </option>
              <option value="19952">Woodys Auto </option>
              <option value="20269">Workshop </option>
              <option value="">-----------------------------------</option>
              <option value="sup_manage">Manage Suppliers</option>
          </select>
      </div>
        <div class="v1"></div>

        </div>

        <div id="scheduledItemTableWrapper">

          <table id="scheduledItemTable">

              <tbody><tr>
                  <td></td>
                  <td class="schColtitle">
                      Date:
                  </td>
                  <td class="schColtitle">

                  </td>
                  <td class="schColtitle">
                      Odometer  Reading:
                  </td>
                  <td class="schColtitle">

                  </td>
                  <td class="schColtitle">
                      Engine Hours:
                  </td>
              </tr>


              <tr>
                  <td align="right" class="vmiddle"><div class="schRowtitle">Next occurrence:</div></td>
                  <td><div class="schRowPicker panelactive" id="panelNextServiceDate">


                    <input type="checkbox" id="myCheck" onclick="myFunction()">

                    <div id="instructionNextServiceDate">On a date</div>
                    
                    <input name="input" type="date" id="input" style="display:none"></input>
                    </div>
                    <script>
                    function myFunction() {
                      var checkBox = document.getElementById("myCheck");
                      var input = document.getElementById("input");
                      var text = document.getElementById("instructionNextServiceDate");
                      var byDate = document.getElementById("actionReminderDateInterval");
                      var textbyDate = document.getElementById("instructionReminderDateInterval");
                      var actionDateInterval = document.getElementById("actionRepeatDateInterval");
                      var textdateInterval = document.getElementById("instructionRepeatDateInterval")
                      if (checkBox.checked == true){
                        document.getElementById("checkboxRepeatDateInterval").checked = true;
                        input.style.display = "block";
                        text.style.display = "none";
                        byDate.style.display = "block";
                        textbyDate.style.display ="none";
                        actionDateInterval.style.display = "block";
                        textdateInterval.style.display = "none";
                      } else {
                     document.getElementById("checkboxRepeatDateInterval").checked = false;
                         input.style.display = "none";
                           text.style.display = "block";
                           byDate.style.display = "none";
                           textbyDate.style.display = "block";
                           actionDateInterval.style.display = "none";
                           textdateInterval.style.display = "block";

                      }
                    }
                    </script>
                  </td>


                  <td class="vmiddle">or</td>
                  <td>

                      <div class="schRowPicker panelactive" id="panelNextServiceOdometer">
                          
                              <input type="checkbox" id="checkboxNextServiceOdometer" onclick="myOdoFunction()">
                              <div id="instructionNextServiceOdometer">At an Odometer reading</div>
                              <div id="actionNextServiceOdometer" style="display:none">
                                  <input id="nextServiceOdometer" name="nextServiceOdometer"  class="schReading" type="text" value="" >
                                  km
                              </div>
                          
                              <script>
                                function myOdoFunction() {
                                  var checkBox = document.getElementById("checkboxNextServiceOdometer");
                                  var input = document.getElementById("actionNextServiceOdometer");
                                  var text = document.getElementById("instructionNextServiceOdometer");
                                  var byDistanceText = document.getElementById("instructionReminderOdometer");
                                  var reminderOdo = document.getElementById("actionReminderOdometer");
                                  var repeatOdo = document.getElementById("actionRepeatOdometer");
                                  var textRepeatOdo = document.getElementById("instructionRepeatOdometer");
                                  if (checkBox.checked == true){
                                    document.getElementById("checkboxRepeatOdometer").checked = true;
                                    input.style.display = "block";
                                    text.style.display = "none";
                                    byDistanceText.style.display = "none";
                                    reminderOdo.style.display = "block";
                                    repeatOdo.style.display = "block";
                                    textRepeatOdo.style.display = "none";

                                  } else {
                                    document.getElementById("checkboxRepeatOdometer").checked = false;
                                     input.style.display = "none";
                                       text.style.display = "block";
                                       byDistanceText.style.display = "block";
                                       reminderOdo.style.display = "none";
                                       repeatOdo.style.display = "none";
                                       textRepeatOdo.style.display = "block";
                                  }
                                }
                                </script>
                      </div>


                  </td>

                  <td class="vmiddle">or</td>
                  <td><div class="schRowPicker panelactive" id="panelNextServiceHours">
                          
                              <input type="checkbox" value="1" name="" id="checkboxNextServiceHours" onclick="myHoursFunction()">
                              <div id="instructionNextServiceHours" >At hours of</div>
                              <div id="actionNextServiceHours" style="display:none">
                                  <input  id="nextServiceHours" name="nextServiceHours" class="schReading" type="text">
                                  hrs
                              </div>
                          
                              <script>
                                function myHoursFunction() {
                                  var checkBox = document.getElementById("checkboxNextServiceHours");
                                  var input = document.getElementById("actionNextServiceHours");
                                  var text = document.getElementById("instructionNextServiceHours");
                                  var reminderHours = document.getElementById("actionReminderHours");
                                  var textHours = document.getElementById("instructionReminderHours");
                                  var repeatHours = document.getElementById("actionRepeatHours");
                                  var textByHours = document.getElementById("instructionRepeatHours");
                                  if (checkBox.checked == true){
                                    document.getElementById("checkboxRepeatHours").checked = true;
                                    input.style.display = "block";
                                    text.style.display = "none";
                                    reminderHours.style.display = "block";
                                    textHours.style.display = "none";
                                    repeatHours.style.display = "block";
                                    textByHours.style.display = "none";
                                  } else {
                                    document.getElementById("checkboxRepeatHours").checked = false;
                                     input.style.display = "none";
                                       text.style.display = "block";
                                       reminderHours.style.display = "none";
                                       textHours.style.display = "block";
                                       repeatHours.style.display = "none";
                                       textByHours.style.display = "block";
                                  }
                                }
                                </script>
                      </div></td>

              </tr>
              <tr class="divider">
                  <td align="right" class="vmiddle"><div class="schRowtitle">Reminder (before Service):</div></td>
                  <td><div class="schRowPicker panelactive" id="panelReminderDateInterval">
                          <input type="checkbox" class="hidden" value="1" name="" id="checkboxReminderDateInterval" >
                          <div id="instructionReminderDateInterval" class="noCheckboxPadding" >By date</div>
                          <div id="actionReminderDateInterval" class="noCheckboxPadding" style="display:none">
                              <input name="reminderDateInterval" id="reminderDateInterval" class="schRepeatInt" type="text" value="2" maxlength="2">
                              <select name="reminderDateIntervalUnit" id="reminderDateIntervalUnit" class="modalServicetype">
                                  <option value="DAY">Days</option>
                                  <option value="WEEK" selected="selected">Weeks</option>
                                  <option value="MONTH">Months</option>
                              </select>
                          </div>

                      </div>
                  </td>

                  <td class="vmiddle">or</td>
                  <td><div class="schRowPicker panelactive" id="panelReminderOdometer">
                          

                              <input type="checkbox" class="hidden" value="1" name="" id="checkboxReminderOdometer" >
                              <div id="instructionReminderOdometer" class="noCheckboxPadding">By distance</div>
                              <div id="actionReminderOdometer" class="noCheckboxPadding" style="display: none;">
                                  <input id="reminderOdometer" name="reminderOdometer" class="schReading" type="text" value="1,000" maxlength="9">
                                  km
                              </div>


                          
                          
                      </div>
                  </td>
                  
                  <td class="vmiddle">or</td>
                  <td>

                      <div class="schRowPicker panelactive" id="panelReminderHours">
                          
                              <input type="checkbox" value="1" class="hidden" name="" id="checkboxReminderHours">
                              <div id="instructionReminderHours" class="noCheckboxPadding" >By hours</div>
                              <div id="actionReminderHours" class="noCheckboxPadding" style="display: none;">
                                  <input id="reminderHours" name="reminderHours" class="schReading" type="text" value="100" maxlength="9"> hrs</div>
                              
                              
                      </div>

                  </td>
              </tr>
              <tr>
                  <td align="right" class="vmiddle"><div class="schRowtitle">Repeat every:</div></td>
                  <td><div class="schRowPicker panelactive" id="panelRepeatDateInterval">
                          <input type="checkbox" value="1" name="" id="checkboxRepeatDateInterval" onclick="myRepeatFunction()">
                          <div id="instructionRepeatDateInterval" >By date</div>
                          <div id="actionRepeatDateInterval" style="display:none">
                              <input id="repeatDateInterval" name="repeatDateInterval" class="schRepeatInt" type="text" >

                              <select id="repeatDateIntervalUnit" name="repeatDateIntervalUnit" class="modalServicetype">
                                  <option value="WEEK">Weeks</option>
                                  <option value="MONTH" selected="selected">Months</option>
                                  <option value="YEAR">Years</option>
                              </select>
                              <script>
                                function myRepeatFunction() {
                                  var checkBox = document.getElementById("checkboxRepeatDateInterval");
                                  var input = document.getElementById("actionRepeatDateInterval");
                                  var text = document.getElementById("instructionRepeatDateInterval");
                                  if (checkBox.checked == true){
                                    input.style.display = "block";
                                    text.style.display = "none";
                                  } else {
                                     input.style.display = "none";
                                       text.style.display = "block";
                                  }
                                }
                                </script>
                          </div>
                      </div>
                  </td>

                  <td class="vmiddle">or</td>
                  <td><div class="schRowPicker panelactive" id="panelRepeatOdometer">
                          
                              <input type="checkbox" value="1" name="" id="checkboxRepeatOdometer" onclick="myRepeatOdo()">

                              <div id="instructionRepeatOdometer" >By distance</div>
                              <div id="actionRepeatOdometer" style="display: none;">

                                  <input id="repeatOdometer" name="repeatOdometer" class="schReading" type="text" value="10,000" maxlength="9">
                                  km
                              </div>
                              <script>
                                function myRepeatOdo() {
                                  var checkBox = document.getElementById("checkboxRepeatOdometer");
                                  var input = document.getElementById("actionRepeatOdometer");
                                  var text = document.getElementById("instructionRepeatOdometer");
                                  if (checkBox.checked == true){
                                    input.style.display = "block";
                                    text.style.display = "none";
                                  } else {
                                     input.style.display = "none";
                                       text.style.display = "block";
                                  }
                                }
                                </script>
                          
                          
                      </div>

                  </td>

                  <td class="vmiddle">or</td>
                  <td>

                      <div class="schRowPicker panelactive" id="panelRepeatHours">
                          
                              <input type="checkbox" value="1" name="" id="checkboxRepeatHours" onclick="myRepeatHours()">

                              <div id="instructionRepeatHours" >By hours</div>
                              <div id="actionRepeatHours" style="display: none;">

                                  <input id="repeatHours" name="repeatHours" class="schReading" type="text" value="1000" maxlength="9">
                                  hrs
                              </div>
                              <script>
                                function myRepeatHours() {
                                  var checkBox = document.getElementById("checkboxRepeatHours");
                                  var input = document.getElementById("actionRepeatHours");
                                  var text = document.getElementById("instructionRepeatHours");
                                  if (checkBox.checked == true){
                                    input.style.display = "block";
                                    text.style.display = "none";
                                  } else {
                                     input.style.display = "none";
                                       text.style.display = "block";
                                  }
                                }
                                </script>
                          
                      </div>


                  </td>
              </tr>


          </tbody></table>
      </div>
        <div class="modal-footer">
          <button name="sch_saveButton" id="sch_saveButton" type="button" class="btn btn-default">Create</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>

        
      </div>
    </form>
 
    <?php
$server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "service_vehicle";


 $conn = mysqli_connect($server , $username, $password, $dbname);

 if(isset($_POST['sch_saveButton'])){

    if(!empty($_POST['modal-veh-name']) && !empty($_POST['type-list']) && !empty($_POST['supplier-list']) && !empty($_POST['input']) && !empty($_POST['nextServiceOdometer']) && !empty($_POST['nextServiceHours']) && !empty($_POST['reminderDateInterval, reminderDateIntervalUnit']) && !empty($_POST['reminderOdometer']) && !empty($_POST['reminderHours']) && !empty($_POST['repeatDateInterval, repeatDateIntervalUnit']) && !empty($_POST['repeatOdometer']) && !empty($_POST['repeatHours'])){

        $vehname = $_POST['modal-veh-name'];
        $typelist = $_POST['type-list'];
        $supplierlist = $_POST['supplier-list'];
        $bydate = $_POST['input'];
        $nextServiceOdo = $_POST['nextServiceOdometer'];
        $nextServiceHours = $_POST['nextServiceHours'];
        $reminderDate = $_POST['reminderDateInterval, reminderDateIntervalUnit'];
        $reminderOdo = $_POST['reminderOdometer'];
        $reminderHrs = $_POST['reminderHours'];
        $repeatDate = $_POST['repeatDateInterval, repeatDateIntervalUnit'];
        $repeat0d0 = $_POST['repeatOdometer'];
        $repeatHrs = $_POST['repeatHours'];

        $query = "insert into form(scheduled_service_item,supplier,by_date,reminder_date,odo_next_occurance,reminder_odo,repeat_odo,engine_hrs_next_occurance,reminder_hours,repeat_hours,repeat_date) values('$typelist', '$supplierlist', '$bydate', '$reminderDate', '$nextServiceOdo', '$reminderOdo' , '$repeat0d0', '$nextServiceHours', '$reminderHrs', '$repeatHrs', '$repeatDate')" ;
    
        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            echo "Successfully Scheduled" ;
        }
        else {

            echo "Error in Scheduling, Please Try Again" ;
        }
    
    }
    else {
        echo "Atleast One Next Occurance field is required" ;
    }
 }

?> 
    </div>
  </div>
  <script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("schBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>

    <div class="tools-bar">
         
        <button onclick="myNewFunction()" class="dropbtnspec"><i  class="fa fa-wrench fa-spin fa-1.8x"></i> Tools<i style="font-size: 12px;" class="material-icons">arrow_drop_down</i></button>

    </div>
        <div id="myDropdownspec" class="dropdown-content-spec">
          <a href="#"><i class="fa fa-question-circle"></i> Service Help</a>
          <a href="#"><i class="fa fa-file-excel-o"></i> Export CSV Schedules</a>
          <a href="#"><i class="fa fa-file-pdf-o"></i> Export PDF Schedules</a>
          <a href="#"><i class="fa fa-envelope"></i> Schedule this Report</a>
        </div>
        <script>
            /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myNewFunction() {
  document.getElementById("myDropdownspec").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtnspec')('.material-icons')) {
    var dropdowns = document.getElementsByClassName("dropdown-content-spec");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<div class="schedule-main-table">
    <div id="schedule-feed-container" class="schedule-table-container table-bordered table-spaced">
      <table class="scheduled-table">
          <thead>
          <tr class="schedule-table-header">
              <th >Scheduled Service item </th>
              <th >Next Due</th>
              <th >Frequency</th>
              <th >Supplier</th>
              <th ></th>
              <th >Action</th>
          </tr>
          </thead>
          <tbody  class="scheduled-feed-body" id="scheduled-feed"></tbody>
      </table>
    </div>
    </div>


 </div>

</div>
</fieldset>

</body>



</html>
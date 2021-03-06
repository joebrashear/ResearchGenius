﻿<!DOCTYPE html>
<style>
         .font-style {
             font-family: D-DIN;
             color: white;
         }

         .padding {
             padding-top: 50px;
         }

         .footer {
             position: absolute;
             left: 350px;
             bottom: 5px;
         }

         h1 {
             position: relative;
             text-align: center;
             font-size: 75px;
             top: 10px;
         }

         body {
             background-image: url("https://wallpaperaccess.com/full/662684.jpg");
         }

         img {
             position: relative;
             width: 110px;
             height:75px;
             top: 0px;
         }

         .textbox{
             position: absolute;
             left: 600px;
             top: 100px;
             text-align: center;
         }

         #datepicker{
             right: 45px;
             width: 200px;
             margin: 0px 20px 20px 20px;

         }

         .h21 {
             left: 125px;
             position: relative;

         }

         .h22 {
           left: 123px;
           position: relative;
         }


    </style>
<html>
    <head>
        <h1 class="font-style">ResearchGenius<img src="https://cdn.arstechnica.net/wp-content/uploads/2015/03/atom-light-640x360.jpg" alt="logo" /></h1>

        <title>ResearchGenius - Home</title>
	    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     </head>
    <body>
    <!-- Actual Form -->
        <form method="post" action = "userinput.php">
          	<h2 class="font-style h22">Choose a Date for the Event</h2>
            <div class="container">
		<div class="row">
	        <div class='col-sm-6'>

		            <div class="form-group">
		                <div class='input-group date' id='datepicker'>
		                    <input type='text' class="form-control" name="date" id="dateevent"/>
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
		            </div>

	        </div>
	    </div>
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

<script >
	    $(function () {
	        $('#datepicker').datepicker({
	            format: "mm/dd/yyyy",
	            autoclose: true,
	            todayHighlight: true,
		        showOtherMonths: true,
		        selectOtherMonths: true,
		        autoclose: true,
		        changeMonth: true,
		        changeYear: true,
		        orientation: "button"
	        });
	    });
	</script>
            <input class="textbox" value="New Event Name" name="eventname"/>
        <h2 class="font-style h21">What times might work?
        </h2>
        <p class="font-style h21">No earlier than:
            <select style="color: black;" id="Earliest" name="Earliest">
              <option value = "12:00am">12:00am</option>
              <option value = "1:00am">1:00am</option>
              <option value = "2:00am">2:00am</option>
              <option value = "3:00am">3:00am</option>
              <option value = "4:00am">4:00am</option>
              <option value = "5:00am">5:00am</option>
              <option value = "6:00am">6:00am</option>
              <option value = "7:00am">7:00am</option>
              <option value = "8:00am">8:00am</option>
              <option selected value = "9:00am">9:00am</option>
              <option value = "10:00am">10:00am</option>
              <option value = "11:00am">11:00am</option>
              <option value = "12:00pm">12:00pm</option>
              <option value = "1:00pm">1:00pm</option>
              <option value = "2:00pm">2:00pm</option>
              <option value = "3:00pm">3:00pm</option>
              <option value = "4:00pm">4:00pm</option>
              <option value = "5:00pm">5:00pm</option>
              <option value = "6:00pm">6:00pm</option>
              <option value = "7:00pm">7:00pm</option>
              <option value = "8:00pm">8:00pm</option>
              <option value = "9:00pm">9:00pm</option>
              <option value = "10:00pm">10:00pm</option>
              <option value = "11:00pm">11:00pm</option>
            </select>
        </p>
        <p class="font-style h21">No later than:
            <select style="color: black;" id="Latest" name="Latest">
              <option value = "12:00am">12:00am</option>
              <option value = "1:00am">1:00am</option>
              <option value = "2:00am">2:00am</option>
              <option value = "3:00am">3:00am</option>
              <option value = "4:00am">4:00am</option>
              <option value = "5:00am">5:00am</option>
              <option value = "6:00am">6:00am</option>
              <option value = "7:00am">7:00am</option>
              <option value = "8:00am">8:00am</option>
              <option value = "9:00am">9:00am</option>
              <option value = "10:00am">10:00am</option>
              <option value = "11:00am">11:00am</option>
              <option value = "12:00pm">12:00pm</option>
              <option value = "1:00pm">1:00pm</option>
              <option value = "2:00pm">2:00pm</option>
              <option value = "3:00pm">3:00pm</option>
              <option value = "4:00pm">4:00pm</option>
              <option selected value = "5:00pm">5:00pm</option>
              <option value = "6:00pm">6:00pm</option>
              <option value = "7:00pm">7:00pm</option>
              <option value = "8:00pm">8:00pm</option>
              <option value = "9:00pm">9:00pm</option>
              <option value = "10:00pm">10:00pm</option>
              <option value = "11:00pm">11:00pm</option>
            </select>
        </p>
        <p class="font-style h21">In <select style="color:black;"name="TimeZone" id="TimeZone"><option value="America/New_York" selected>America/New_York</option><option value="America/Nipigon">America/Nipigon</option><option value="America/Nome">America/Nome</option><option value="America/Noronha">America/Noronha</option><option value="America/North_Dakota/Beulah">America/North_Dakota/Beulah</option><option value="America/North_Dakota/Center">America/North_Dakota/Center</option><option value="America/North_Dakota/New_Salem">America/North_Dakota/New_Salem</option><option value="America/Ojinaga">America/Ojinaga</option><option value="America/Panama">America/Panama</option><option value="America/Pangnirtung">America/Pangnirtung</option><option value="America/Paramaribo">America/Paramaribo</option><option value="America/Phoenix">America/Phoenix</option><option value="America/Port-au-Prince">America/Port-au-Prince</option><option value="America/Port_of_Spain">America/Port_of_Spain</option><option value="America/Porto_Acre">America/Porto_Acre</option><option value="America/Porto_Velho">America/Porto_Velho</option><option value="America/Puerto_Rico">America/Puerto_Rico</option><option value="America/Punta_Arenas">America/Punta_Arenas</option><option value="America/Rainy_River">America/Rainy_River</option><option value="America/Rankin_Inlet">America/Rankin_Inlet</option><option value="America/Recife">America/Recife</option><option value="America/Regina">America/Regina</option><option value="America/Resolute">America/Resolute</option><option value="America/Rio_Branco">America/Rio_Branco</option><option value="America/Rosario">America/Rosario</option><option value="America/Santa_Isabel">America/Santa_Isabel</option><option value="America/Santarem">America/Santarem</option><option value="America/Santiago">America/Santiago</option><option value="America/Santo_Domingo">America/Santo_Domingo</option><option value="America/Sao_Paulo">America/Sao_Paulo</option><option value="America/Scoresbysund">America/Scoresbysund</option><option value="America/Shiprock">America/Shiprock</option><option value="America/Sitka">America/Sitka</option><option value="America/St_Barthelemy">America/St_Barthelemy</option><option value="America/St_Johns">America/St_Johns</option><option value="America/St_Kitts">America/St_Kitts</option><option value="America/St_Lucia">America/St_Lucia</option><option value="America/St_Thomas">America/St_Thomas</option><option value="America/St_Vincent">America/St_Vincent</option><option value="America/Swift_Current">America/Swift_Current</option><option value="America/Tegucigalpa">America/Tegucigalpa</option><option value="America/Thule">America/Thule</option><option value="America/Thunder_Bay">America/Thunder_Bay</option><option value="America/Tijuana">America/Tijuana</option><option value="America/Toronto">America/Toronto</option><option value="America/Tortola">America/Tortola</option><option value="America/Vancouver">America/Vancouver</option><option value="America/Virgin">America/Virgin</option><option value="America/Whitehorse">America/Whitehorse</option><option value="America/Winnipeg">America/Winnipeg</option><option value="America/Yakutat">America/Yakutat</option><option value="America/Yellowknife">America/Yellowknife</option><option value="Antarctica/Casey">Antarctica/Casey</option><option value="Antarctica/Davis">Antarctica/Davis</option><option value="Antarctica/DumontDUrville">Antarctica/DumontDUrville</option><option value="Antarctica/Macquarie">Antarctica/Macquarie</option><option value="Antarctica/Mawson">Antarctica/Mawson</option><option value="Antarctica/McMurdo">Antarctica/McMurdo</option><option value="Antarctica/Palmer">Antarctica/Palmer</option><option value="Antarctica/Rothera">Antarctica/Rothera</option><option value="Antarctica/South_Pole">Antarctica/South_Pole</option><option value="Antarctica/Syowa">Antarctica/Syowa</option><option value="Antarctica/Troll">Antarctica/Troll</option><option value="Antarctica/Vostok">Antarctica/Vostok</option><option value="Arctic/Longyearbyen">Arctic/Longyearbyen</option><option value="Asia/Aden">Asia/Aden</option><option value="Asia/Almaty">Asia/Almaty</option><option value="Asia/Amman">Asia/Amman</option><option value="Asia/Anadyr">Asia/Anadyr</option><option value="Asia/Aqtau">Asia/Aqtau</option><option value="Asia/Aqtobe">Asia/Aqtobe</option><option value="Asia/Ashgabat">Asia/Ashgabat</option><option value="Asia/Ashkhabad">Asia/Ashkhabad</option><option value="Asia/Atyrau">Asia/Atyrau</option><option value="Asia/Baghdad">Asia/Baghdad</option><option value="Asia/Bahrain">Asia/Bahrain</option><option value="Asia/Baku">Asia/Baku</option><option value="Asia/Bangkok">Asia/Bangkok</option><option value="Asia/Barnaul">Asia/Barnaul</option><option value="Asia/Beirut">Asia/Beirut</option><option value="Asia/Bishkek">Asia/Bishkek</option><option value="Asia/Brunei">Asia/Brunei</option><option value="Asia/Calcutta">Asia/Calcutta</option><option value="Asia/Chita">Asia/Chita</option><option value="Asia/Choibalsan">Asia/Choibalsan</option><option value="Asia/Chongqing">Asia/Chongqing</option><option value="Asia/Chungking">Asia/Chungking</option><option value="Asia/Colombo">Asia/Colombo</option><option value="Asia/Dacca">Asia/Dacca</option><option value="Asia/Damascus">Asia/Damascus</option><option value="Asia/Dhaka">Asia/Dhaka</option><option value="Asia/Dili">Asia/Dili</option><option value="Asia/Dubai">Asia/Dubai</option><option value="Asia/Dushanbe">Asia/Dushanbe</option><option value="Asia/Famagusta">Asia/Famagusta</option><option value="Asia/Gaza">Asia/Gaza</option><option value="Asia/Harbin">Asia/Harbin</option><option value="Asia/Hebron">Asia/Hebron</option><option value="Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option><option value="Asia/Hong_Kong">Asia/Hong_Kong</option><option value="Asia/Hovd">Asia/Hovd</option><option value="Asia/Irkutsk">Asia/Irkutsk</option><option value="Asia/Istanbul">Asia/Istanbul</option><option value="Asia/Jakarta">Asia/Jakarta</option><option value="Asia/Jayapura">Asia/Jayapura</option><option value="Asia/Jerusalem">Asia/Jerusalem</option><option value="Asia/Kabul">Asia/Kabul</option><option value="Asia/Kamchatka">Asia/Kamchatka</option><option value="Asia/Karachi">Asia/Karachi</option><option value="Asia/Kashgar">Asia/Kashgar</option><option value="Asia/Kathmandu">Asia/Kathmandu</option><option value="Asia/Katmandu">Asia/Katmandu</option><option value="Asia/Khandyga">Asia/Khandyga</option><option value="Asia/Kolkata">Asia/Kolkata</option><option value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option><option value="Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option><option value="Asia/Kuching">Asia/Kuching</option><option value="Asia/Kuwait">Asia/Kuwait</option><option value="Asia/Macao">Asia/Macao</option><option value="Asia/Macau">Asia/Macau</option><option value="Asia/Magadan">Asia/Magadan</option><option value="Asia/Makassar">Asia/Makassar</option><option value="Asia/Manila">Asia/Manila</option><option value="Asia/Muscat">Asia/Muscat</option><option value="Asia/Nicosia">Asia/Nicosia</option><option value="Asia/Novokuznetsk">Asia/Novokuznetsk</option><option value="Asia/Novosibirsk">Asia/Novosibirsk</option><option value="Asia/Omsk">Asia/Omsk</option><option value="Asia/Oral">Asia/Oral</option><option value="Asia/Phnom_Penh">Asia/Phnom_Penh</option><option value="Asia/Pontianak">Asia/Pontianak</option><option value="Asia/Pyongyang">Asia/Pyongyang</option><option value="Asia/Qatar">Asia/Qatar</option><option value="Asia/Qyzylorda">Asia/Qyzylorda</option><option value="Asia/Rangoon">Asia/Rangoon</option><option value="Asia/Riyadh">Asia/Riyadh</option><option value="Asia/Saigon">Asia/Saigon</option><option value="Asia/Sakhalin">Asia/Sakhalin</option><option value="Asia/Samarkand">Asia/Samarkand</option><option value="Asia/Seoul">Asia/Seoul</option><option value="Asia/Shanghai">Asia/Shanghai</option><option value="Asia/Singapore">Asia/Singapore</option><option value="Asia/Srednekolymsk">Asia/Srednekolymsk</option><option value="Asia/Taipei">Asia/Taipei</option><option value="Asia/Tashkent">Asia/Tashkent</option><option value="Asia/Tbilisi">Asia/Tbilisi</option><option value="Asia/Tehran">Asia/Tehran</option><option value="Asia/Tel_Aviv">Asia/Tel_Aviv</option><option value="Asia/Thimbu">Asia/Thimbu</option><option value="Asia/Thimphu">Asia/Thimphu</option><option value="Asia/Tokyo">Asia/Tokyo</option><option value="Asia/Tomsk">Asia/Tomsk</option><option value="Asia/Ujung_Pandang">Asia/Ujung_Pandang</option><option value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option><option value="Asia/Ulan_Bator">Asia/Ulan_Bator</option><option value="Asia/Urumqi">Asia/Urumqi</option><option value="Asia/Ust-Nera">Asia/Ust-Nera</option><option value="Asia/Vientiane">Asia/Vientiane</option><option value="Asia/Vladivostok">Asia/Vladivostok</option><option value="Asia/Yakutsk">Asia/Yakutsk</option><option value="Asia/Yangon">Asia/Yangon</option><option value="Asia/Yekaterinburg">Asia/Yekaterinburg</option><option value="Asia/Yerevan">Asia/Yerevan</option><option value="Atlantic/Azores">Atlantic/Azores</option><option value="Atlantic/Bermuda">Atlantic/Bermuda</option><option value="Atlantic/Canary">Atlantic/Canary</option><option value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option><option value="Atlantic/Faeroe">Atlantic/Faeroe</option><option value="Atlantic/Faroe">Atlantic/Faroe</option><option value="Atlantic/Jan_Mayen">Atlantic/Jan_Mayen</option><option value="Atlantic/Madeira">Atlantic/Madeira</option><option value="Atlantic/Reykjavik">Atlantic/Reykjavik</option><option value="Atlantic/South_Georgia">Atlantic/South_Georgia</option><option value="Atlantic/St_Helena">Atlantic/St_Helena</option><option value="Atlantic/Stanley">Atlantic/Stanley</option><option value="Australia/ACT">Australia/ACT</option><option value="Australia/Adelaide">Australia/Adelaide</option><option value="Australia/Brisbane">Australia/Brisbane</option><option value="Australia/Broken_Hill">Australia/Broken_Hill</option><option value="Australia/Canberra">Australia/Canberra</option><option value="Australia/Currie">Australia/Currie</option><option value="Australia/Darwin">Australia/Darwin</option><option value="Australia/Eucla">Australia/Eucla</option><option value="Australia/Hobart">Australia/Hobart</option><option value="Australia/LHI">Australia/LHI</option><option value="Australia/Lindeman">Australia/Lindeman</option><option value="Australia/Lord_Howe">Australia/Lord_Howe</option><option value="Australia/Melbourne">Australia/Melbourne</option><option value="Australia/NSW">Australia/NSW</option><option value="Australia/North">Australia/North</option><option value="Australia/Perth">Australia/Perth</option><option value="Australia/Queensland">Australia/Queensland</option><option value="Australia/South">Australia/South</option><option value="Australia/Sydney">Australia/Sydney</option><option value="Australia/Tasmania">Australia/Tasmania</option><option value="Australia/Victoria">Australia/Victoria</option><option value="Australia/West">Australia/West</option><option value="Australia/Yancowinna">Australia/Yancowinna</option><option value="Brazil/Acre">Brazil/Acre</option><option value="Brazil/DeNoronha">Brazil/DeNoronha</option><option value="Brazil/East">Brazil/East</option><option value="Brazil/West">Brazil/West</option><option value="CET">CET</option><option value="CST6CDT">CST6CDT</option><option value="Canada/Atlantic">Canada/Atlantic</option><option value="Canada/Central">Canada/Central</option><option value="Canada/Eastern">Canada/Eastern</option><option value="Canada/Mountain">Canada/Mountain</option><option value="Canada/Newfoundland">Canada/Newfoundland</option><option value="Canada/Pacific">Canada/Pacific</option><option value="Canada/Saskatchewan">Canada/Saskatchewan</option><option value="Canada/Yukon">Canada/Yukon</option><option value="Chile/Continental">Chile/Continental</option><option value="Chile/EasterIsland">Chile/EasterIsland</option><option value="Cuba">Cuba</option><option value="EET">EET</option><option value="EST">EST</option><option value="EST5EDT">EST5EDT</option><option value="Egypt">Egypt</option><option value="Eire">Eire</option><option value="Etc/GMT">Etc/GMT</option><option value="Etc/GMT+0">Etc/GMT+0</option><option value="Etc/GMT+1">Etc/GMT+1</option><option value="Etc/GMT+10">Etc/GMT+10</option><option value="Etc/GMT+11">Etc/GMT+11</option><option value="Etc/GMT+12">Etc/GMT+12</option><option value="Etc/GMT+2">Etc/GMT+2</option><option value="Etc/GMT+3">Etc/GMT+3</option><option value="Etc/GMT+4">Etc/GMT+4</option><option value="Etc/GMT+5">Etc/GMT+5</option><option value="Etc/GMT+6">Etc/GMT+6</option><option value="Etc/GMT+7">Etc/GMT+7</option><option value="Etc/GMT+8">Etc/GMT+8</option><option value="Etc/GMT+9">Etc/GMT+9</option><option value="Etc/GMT-0">Etc/GMT-0</option><option value="Etc/GMT-1">Etc/GMT-1</option><option value="Etc/GMT-10">Etc/GMT-10</option><option value="Etc/GMT-11">Etc/GMT-11</option><option value="Etc/GMT-12">Etc/GMT-12</option><option value="Etc/GMT-13">Etc/GMT-13</option><option value="Etc/GMT-14">Etc/GMT-14</option><option value="Etc/GMT-2">Etc/GMT-2</option><option value="Etc/GMT-3">Etc/GMT-3</option><option value="Etc/GMT-4">Etc/GMT-4</option><option value="Etc/GMT-5">Etc/GMT-5</option><option value="Etc/GMT-6">Etc/GMT-6</option><option value="Etc/GMT-7">Etc/GMT-7</option><option value="Etc/GMT-8">Etc/GMT-8</option><option value="Etc/GMT-9">Etc/GMT-9</option><option value="Etc/GMT0">Etc/GMT0</option><option value="Etc/Greenwich">Etc/Greenwich</option><option value="Etc/UCT">Etc/UCT</option><option value="Etc/UTC">Etc/UTC</option><option value="Etc/Universal">Etc/Universal</option><option value="Etc/Zulu">Etc/Zulu</option><option value="Europe/Amsterdam">Europe/Amsterdam</option><option value="Europe/Andorra">Europe/Andorra</option><option value="Europe/Astrakhan">Europe/Astrakhan</option><option value="Europe/Athens">Europe/Athens</option><option value="Europe/Belfast">Europe/Belfast</option><option value="Europe/Belgrade">Europe/Belgrade</option><option value="Europe/Berlin">Europe/Berlin</option><option value="Europe/Bratislava">Europe/Bratislava</option><option value="Europe/Brussels">Europe/Brussels</option><option value="Europe/Bucharest">Europe/Bucharest</option><option value="Europe/Budapest">Europe/Budapest</option><option value="Europe/Busingen">Europe/Busingen</option><option value="Europe/Chisinau">Europe/Chisinau</option><option value="Europe/Copenhagen">Europe/Copenhagen</option><option value="Europe/Dublin">Europe/Dublin</option><option value="Europe/Gibraltar">Europe/Gibraltar</option><option value="Europe/Guernsey">Europe/Guernsey</option><option value="Europe/Helsinki">Europe/Helsinki</option><option value="Europe/Isle_of_Man">Europe/Isle_of_Man</option><option value="Europe/Istanbul">Europe/Istanbul</option><option value="Europe/Jersey">Europe/Jersey</option><option value="Europe/Kaliningrad">Europe/Kaliningrad</option><option value="Europe/Kiev">Europe/Kiev</option><option value="Europe/Kirov">Europe/Kirov</option><option value="Europe/Lisbon">Europe/Lisbon</option><option value="Europe/Ljubljana">Europe/Ljubljana</option><option value="Europe/London">Europe/London</option><option value="Europe/Luxembourg">Europe/Luxembourg</option><option value="Europe/Madrid">Europe/Madrid</option><option value="Europe/Malta">Europe/Malta</option><option value="Europe/Mariehamn">Europe/Mariehamn</option><option value="Europe/Minsk">Europe/Minsk</option><option value="Europe/Monaco">Europe/Monaco</option><option value="Europe/Moscow">Europe/Moscow</option><option value="Europe/Nicosia">Europe/Nicosia</option><option value="Europe/Oslo">Europe/Oslo</option><option value="Europe/Paris">Europe/Paris</option><option value="Europe/Podgorica">Europe/Podgorica</option><option value="Europe/Prague">Europe/Prague</option><option value="Europe/Riga">Europe/Riga</option><option value="Europe/Rome">Europe/Rome</option><option value="Europe/Samara">Europe/Samara</option><option value="Europe/San_Marino">Europe/San_Marino</option><option value="Europe/Sarajevo">Europe/Sarajevo</option><option value="Europe/Saratov">Europe/Saratov</option><option value="Europe/Simferopol">Europe/Simferopol</option><option value="Europe/Skopje">Europe/Skopje</option><option value="Europe/Sofia">Europe/Sofia</option><option value="Europe/Stockholm">Europe/Stockholm</option><option value="Europe/Tallinn">Europe/Tallinn</option><option value="Europe/Tirane">Europe/Tirane</option><option value="Europe/Tiraspol">Europe/Tiraspol</option><option value="Europe/Ulyanovsk">Europe/Ulyanovsk</option><option value="Europe/Uzhgorod">Europe/Uzhgorod</option><option value="Europe/Vaduz">Europe/Vaduz</option><option value="Europe/Vatican">Europe/Vatican</option><option value="Europe/Vienna">Europe/Vienna</option><option value="Europe/Vilnius">Europe/Vilnius</option><option value="Europe/Volgograd">Europe/Volgograd</option><option value="Europe/Warsaw">Europe/Warsaw</option><option value="Europe/Zagreb">Europe/Zagreb</option><option value="Europe/Zaporozhye">Europe/Zaporozhye</option><option value="Europe/Zurich">Europe/Zurich</option><option value="GB">GB</option><option value="GB-Eire">GB-Eire</option><option value="GMT">GMT</option><option value="GMT+0">GMT+0</option><option value="GMT-0">GMT-0</option><option value="GMT0">GMT0</option><option value="Greenwich">Greenwich</option><option value="HST">HST</option><option value="Hongkong">Hongkong</option><option value="Iceland">Iceland</option><option value="Indian/Antananarivo">Indian/Antananarivo</option><option value="Indian/Chagos">Indian/Chagos</option><option value="Indian/Christmas">Indian/Christmas</option><option value="Indian/Cocos">Indian/Cocos</option><option value="Indian/Comoro">Indian/Comoro</option><option value="Indian/Kerguelen">Indian/Kerguelen</option><option value="Indian/Mahe">Indian/Mahe</option><option value="Indian/Maldives">Indian/Maldives</option><option value="Indian/Mauritius">Indian/Mauritius</option><option value="Indian/Mayotte">Indian/Mayotte</option><option value="Indian/Reunion">Indian/Reunion</option><option value="Iran">Iran</option><option value="Israel">Israel</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Kwajalein">Kwajalein</option><option value="Libya">Libya</option><option value="MET">MET</option><option value="MST">MST</option><option value="MST7MDT">MST7MDT</option><option value="Mexico/BajaNorte">Mexico/BajaNorte</option><option value="Mexico/BajaSur">Mexico/BajaSur</option><option value="Mexico/General">Mexico/General</option><option value="NZ">NZ</option><option value="NZ-CHAT">NZ-CHAT</option><option value="Navajo">Navajo</option><option value="PRC">PRC</option><option value="PST8PDT">PST8PDT</option><option value="Pacific/Apia">Pacific/Apia</option><option value="Pacific/Auckland">Pacific/Auckland</option><option value="Pacific/Bougainville">Pacific/Bougainville</option><option value="Pacific/Chatham">Pacific/Chatham</option><option value="Pacific/Chuuk">Pacific/Chuuk</option><option value="Pacific/Easter">Pacific/Easter</option><option value="Pacific/Efate">Pacific/Efate</option><option value="Pacific/Enderbury">Pacific/Enderbury</option><option value="Pacific/Fakaofo">Pacific/Fakaofo</option><option value="Pacific/Fiji">Pacific/Fiji</option><option value="Pacific/Funafuti">Pacific/Funafuti</option><option value="Pacific/Galapagos">Pacific/Galapagos</option><option value="Pacific/Gambier">Pacific/Gambier</option><option value="Pacific/Guadalcanal">Pacific/Guadalcanal</option><option value="Pacific/Guam">Pacific/Guam</option><option value="Pacific/Honolulu">Pacific/Honolulu</option><option value="Pacific/Johnston">Pacific/Johnston</option><option value="Pacific/Kiritimati">Pacific/Kiritimati</option><option value="Pacific/Kosrae">Pacific/Kosrae</option><option value="Pacific/Kwajalein">Pacific/Kwajalein</option><option value="Pacific/Majuro">Pacific/Majuro</option><option value="Pacific/Marquesas">Pacific/Marquesas</option><option value="Pacific/Midway">Pacific/Midway</option><option value="Pacific/Nauru">Pacific/Nauru</option><option value="Pacific/Niue">Pacific/Niue</option><option value="Pacific/Norfolk">Pacific/Norfolk</option><option value="Pacific/Noumea">Pacific/Noumea</option><option value="Pacific/Pago_Pago">Pacific/Pago_Pago</option><option value="Pacific/Palau">Pacific/Palau</option><option value="Pacific/Pitcairn">Pacific/Pitcairn</option><option value="Pacific/Pohnpei">Pacific/Pohnpei</option><option value="Pacific/Ponape">Pacific/Ponape</option><option value="Pacific/Port_Moresby">Pacific/Port_Moresby</option><option value="Pacific/Rarotonga">Pacific/Rarotonga</option><option value="Pacific/Saipan">Pacific/Saipan</option><option value="Pacific/Samoa">Pacific/Samoa</option><option value="Pacific/Tahiti">Pacific/Tahiti</option><option value="Pacific/Tarawa">Pacific/Tarawa</option><option value="Pacific/Tongatapu">Pacific/Tongatapu</option><option value="Pacific/Truk">Pacific/Truk</option><option value="Pacific/Wake">Pacific/Wake</option><option value="Pacific/Wallis">Pacific/Wallis</option><option value="Pacific/Yap">Pacific/Yap</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="ROC">ROC</option><option value="ROK">ROK</option><option value="Singapore">Singapore</option><option value="Turkey">Turkey</option><option value="UCT">UCT</option><option value="US/Alaska">US/Alaska</option><option value="US/Aleutian">US/Aleutian</option><option value="US/Arizona">US/Arizona</option><option value="US/Central">US/Central</option><option value="US/East-Indiana">US/East-Indiana</option><option value="US/Eastern">US/Eastern</option><option value="US/Hawaii">US/Hawaii</option><option value="US/Indiana-Starke">US/Indiana-Starke</option><option value="US/Michigan">US/Michigan</option><option value="US/Mountain">US/Mountain</option><option value="US/Pacific">US/Pacific</option><option value="US/Pacific-New">US/Pacific-New</option><option value="US/Samoa">US/Samoa</option><option value="UTC">UTC</option><option value="Universal">Universal</option><option value="W-SU">W-SU</option><option value="WET">WET</option><option value="Zulu">Zulu</option></select>
        </p>
            <p class="font-style h21" style="font-size:20px;">Ready?</p>
            <input class="font-style h21" style="color: black;" value="Create Event" type="submit" name="created"/>
          </form>
        <!-- footer -->
        <p class="font-style footer". align="Center">
        Welcome to <strong>ResearchGenius</strong>! This webpage has been created by <a href="https://www.linkedin.com/in/william-brashear/">Joe</a>. Special thanks to <a href="http://www.eecs.ucf.edu/~jjl/">Dr. Laviola</a> for this opportunity!
    </p>
    </body>
</html>


<!DOCTYPE html>
<style>
         .font-style {
             font-family: D-DIN;
             color: white;
         }

         .padding {
             padding-top: 50px;
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

         .h22 {
           left: 200px;
         }




    </style>
<html>
    <head>
        <h1 class="font-style">ResearchGenius<img src="https://cdn.arstechnica.net/wp-content/uploads/2015/03/atom-light-640x360.jpg" alt="logo" /></h1>
        <title>ResearchGenius - Sign Up</title>
        <meta charset='utf-8'>
      	<title>Timepicker for jQuery &ndash; Demos and Documentation</title>
      	<meta name="description" content="A lightweight, customizable jQuery timepicker plugin inspired by Google Calendar. Add a user-friendly javascript timepicker dropdown to your app in minutes." />
      	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      	<script type="text/javascript" src="jquery.timepicker.js"></script>
      	<link rel="stylesheet" type="text/css" href="jquery.timepicker.css" />
      	<script type="text/javascript" src="lib/bootstrap-datepicker.js"></script>
      	<link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker.css" />
      	<script type="text/javascript" src="lib/site.js"></script>
</head>
    <body>
        <h2 class="font-style"><?php echo $_POST['eventname']?></h2>
        <h3 class="font-style"><?php echo $_POST['date']?></h2>
        <form>
          <h3 class = "font-style" id="first question" style="position: relative; top: 25px;">Enter your Name</h3>
          <input name = "Name" type = "textbox" style="position: relative; top: 25px;">
          <h3 class = "font-style" id="first question" style="position: relative; top: 25px;">Enter your Email</h3>
          <input name = "Email" type = "textbox" style="position: relative; top: 25px;">
          <h3 class = "font-style" style="position: relative; top: 25px;">Enter the time you can come in</h3>
      		<input id="durationExample" type="text" class="time" style="position: relative; top: 25px;"/>
      			<script>
      			$(function() {
      				$('#durationExample').timepicker({
      					'minTime': '<?php echo $_POST['Earliest']?>',
      					'maxTime': '<?php echo $_POST['Latest']?>'
      				});
      			});
      			</script>
            <input class="font-style h21" style="color: black;" value="Submit" type="submit" name="created"/>
        </form>
<!-- footer -->

        <p class="font-style". align="center" style="position: relative; bottom: 5px;">
        Welcome to <strong>ResearchGenius</strong>! This webpage has been created by <a href="https://www.linkedin.com/in/william-brashear/">Joe</a>. Special thanks to <a href="http://www.eecs.ucf.edu/~jjl/">Dr. Laviola</a> for this opportunity!
    </p>
    </body>
</html>

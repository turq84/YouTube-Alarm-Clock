<!-- Created by Kayla Gordon -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<audio id="get_your_love" src="Come And Get Your Love.mp3" preload="auto"></audio>

	<link rel="stylesheet" href="css/datepicker.css">
	<script src="js/bootstrap-datepicker.js"></script>
	
	<script>
		$(function(){
			$('.datepicker').datepicker();
		});
		
		$(document).ready(function() {
			setInterval(timestamp, 1000);
		});

		function timestamp() {
			$.ajax({
				url: 'timestamp.php',
				success: function(data) {
					$('#time').html(data);
				},
			});
		}
	</script>
	
	<script>
		function ajax_post(){
			
			// Create our XMLHttpRequest object
			var hr = new XMLHttpRequest();
			
			// Create some variables we need to send to our PHP file
			var url = "search.php";
			var q = document.getElementById("q").value;
			hr.open("POST", url, true);
			
			// Set content type header information for sending url encoded variables in the request
			hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			
			// Access the onreadystatechange event for the XMLHttpRequest object
			hr.onreadystatechange = function() {
				if(hr.readyState == 4 && hr.status == 200) {
					//var return_data = hr.responseText;
					//document.getElementById("layout").innerHTML = return_data;
					window.location.replace("search.php?q="+q);
				}
			}
			// Send the data to PHP now... and wait for response to update the status div
			hr.send(q); // Actually execute the request
			document.getElementById("status").innerHTML = "Processing...";
		}
	</script>
	
	
	
	<style>
		.clock{
			width: 200px;
			display: inline-block;
			margin-bottom: 3%;
		}
		
		.countdown{
			font-size: 25px;
			display: inline-block;
			//margin-bottom: 5%; 
		}
		
		#time{
			font-size: 55px;
			display: inline-block;
			//margin-bottom: 5%; 
		}
		
		.labels{
			display: inline-block;
		}
	</style>
	
	<title>YouTube Alarm Clock</title>
</head>
<body>
	<div id="layout" class="container">
	<h1>YouTube Alarm Clock</h1>
		<p>This solution was developed using PHP and ajax.</p>
		<br />
	
	<center>
		<div id="time"><!-- LIVE CLOCK GOES HERE --></div> &nbsp; &nbsp;
		
		<br />
		<span><h3 id="left_label" class="labels">(Current Time)</h3></span> &nbsp; &nbsp; 
		<br /><br />
		<select class="clock form-control" id="hour" onclick="">
				<option value="">Hour</option>
				<option value="00">00</option>
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			</select>
			
			<select class="clock form-control" id="minute" onclick="">
				<option value="">Minute</option>
				<option value="00">00</option>
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				<option value="32">32</option>
				<option value="33">33</option>
				<option value="34">34</option>
				<option value="35">35</option>
				<option value="36">36</option>
				<option value="37">37</option>
				<option value="38">38</option>
				<option value="39">39</option>
				<option value="40">40</option>
				<option value="41">41</option>
				<option value="42">42</option>
				<option value="43">43</option>
				<option value="44">44</option>
				<option value="45">45</option>
				<option value="46">46</option>
				<option value="47">47</option>
				<option value="48">48</option>
				<option value="49">49</option>
				<option value="50">50</option>
				<option value="51">51</option>
				<option value="52">52</option>
				<option value="53">53</option>
				<option value="54">54</option>
				<option value="55">55</option>
				<option value="56">56</option>
				<option value="57">57</option>
				<option value="58">58</option>
				<option value="59">59</option>
			</select>
			
			<select class="clock form-control" id="second" onclick="">
				<option value="">Second</option>
				<option value="00">00</option>
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				<option value="32">32</option>
				<option value="33">33</option>
				<option value="34">34</option>
				<option value="35">35</option>
				<option value="36">36</option>
				<option value="37">37</option>
				<option value="38">38</option>
				<option value="39">39</option>
				<option value="40">40</option>
				<option value="41">41</option>
				<option value="42">42</option>
				<option value="43">43</option>
				<option value="44">44</option>
				<option value="45">45</option>
				<option value="46">46</option>
				<option value="47">47</option>
				<option value="48">48</option>
				<option value="49">49</option>
				<option value="50">50</option>
				<option value="51">51</option>
				<option value="52">52</option>
				<option value="53">53</option>
				<option value="54">54</option>
				<option value="55">55</option>
				<option value="56">56</option>
				<option value="57">57</option>
				<option value="58">58</option>
				<option value="59">59</option>
			</select>
			
			<select class="clock form-control" id="am_pm" onclick="">
				<option value="">AM/PM</option>
				<option value="AM">AM</option>
				<option value="PM">PM</option>
			</select>
			
				
		<input class="datepicker form-control clock" type="text" name="date" id="day_of_week" placeholder="Date for alert">
		<br />
		<div>
			Wake-up Video: <input class="form-control clock" type="search" id="q" name="q" placeholder="Search..." value="screaming frog">
		</div>
		<br />
		<div class="countdown" id="status">
			<span class="" id="days">00</span>
			<span class="" id="hours">00</span>
			<span class="" id="minutes">00</span>
			<span class="" id="seconds">00</span>	
		</div><br />
		<h3 id="status" class="labels">(Remaining Time Until Alarm) </h3>
		<br /><br />
		
		<button type="button" class="btn btn-info btn-lg" onclick="timer()">Set Alarm</button>
	</center>
	</div>
	
	<script src="js/countdown.js"></script>
	<script>		
		function timer(){
			var hour = document.getElementById("hour").value;
			var minute = document.getElementById("minute").value;
			var second = document.getElementById("second").value;
			var am_pm = document.getElementById("am_pm").value;		
			var date = document.getElementById("day_of_week").value;
			var space = " ";
			var date_total = date + space + hour + ":" + minute + ":" + second + space + am_pm;
			
			if(hour =="" || minute == "" || second == "" || am_pm == ""|| date == ""){
				alert("Please complete the time fields...");
				return;
			}
			
			countdown();
			
			countdown(date_total, ['days', 'hours', 'minutes', 'seconds'], function(){
				//document.getElementById('get_your_love').play();
				//alert("BUZZ!");
				ajax_post();
			})
		}
	</script>	
	
</body>
</html>
















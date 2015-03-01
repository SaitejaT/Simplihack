<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>

<title>chat</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="/home/saiteja/Documents/ws_files/theme-style.min.css" rel="stylesheet">
<link href="/home/saiteja/Downloads/A.bootstrap.min.css+font-awesome.min.css,Mcc.AmMPG_S180.css.pagespeed.cf.7e32uWeYkR.css" rel="stylesheet">
<link href="/home/saiteja/Downloads/A.colour-blue.min.css.pagespeed.cf.glzEHLcqmJ.css" rel="stylesheet">
<link href="/home/saiteja/Documents/ws_files/custom-style.min.css" rel="stylesheet">
<script src="/var/www/app/webroot/js/jquery.min.js"></script>
<script src="/home/saiteja/Downloads/jquery-migrate-1.2.1.min.js"></script>
<script src="/home/saiteja/Downloads/jquery-ui.min.js"></script>
<script src="/home/saiteja/Downloads/h1.js"></script>
<link href="/home/saiteja/Downloads/h1.css" rel="stylesheet">
</body>
<div id="emptyDiv"></div>
<div id="description"></div>
<!--container start-->
<div id="container">
  <div id="container_body">
    <div>
      <h2 class="form_title">User Registration Form</h2>
    </div>
    <!--Form  start-->
    <div id="form_name">
      <div class="firstnameorlastname">
       <form action="/chats/index" name="form" method="post">
       <div id="errorBox"></div>
        <input type="text" name="Name" value="" placeholder="First Name"  class="input_name" >
        <input type="text" name="LastName" value="" placeholder="Last Name" class="input_name" >
         
      </div>
      <div id="email_form">
        <input type="text" name="Email" value=""  placeholder="Your Email" class="input_email">
      </div>
	        <div id="password_form">
        <input type="password" name="Password" value=""  placeholder="New Password" class="input_password">
      </div>
      <div id="Re_email_form">
        <input type="password" name="enterEmail" value=""  placeholder="Re-enter password" class="input_Re_email">
      </div>
      <!--birthday details start-->
      <div>
        <h3 class="birthday_title">Birthday</h3>
      </div>
      <div>
        <select name="birthday_month" >
          <option value="" selected >Month</option>
          <option value="1">Jan</option>
          <option value="2">Feb</option>
          <option value="3">Mar</option>
          <option value="4">Apr</option>
          <option value="5">May</option>
		  <option value="5">june</option>
		  <option value="5">july</option>
		  <option value="5">aug</option>
		  <option value="5">sept</option>
		  <option value="5">oct</option>
		  <option value="5">nov</option>
		  <option value="5">dec</option>
        </select>
        &nbsp;&nbsp;
        <select name="birthday_day" >
          <option value="" selected>Day</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
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
        </select>
        &nbsp;&nbsp;
        <select name="birthday_year">
          <option value="" selected>Year</option>
          <option value="1991">1991</option>
          <option value="1992">1992</option>
          <option value="1993">1993</option>
          <option value="1994">1994</option>
          <option value="1995">1995</option>
		  <option value="1996">1996</option>
		  <option value="1997">1997</option>
	       <option value="1998">1998</option>
          <option value="1999">1999</option>
          <option value="2000">2000</option>
          <option value="2001">2001</option>
          <option value="2002">2002</option>
          <option value="2003">2003</option>
          <option value="2004">2004</option>		  
					
        </select>
      </div> 
      <!--birthday details ends-->
     <div id="radio_button">
        <input type="radio" name="radiobutton" value="Female">
        <label >Female</label>
        &nbsp;&nbsp;&nbsp;
        <input type="radio" name="radiobutton" value="Male">
        <label >Male</label>
      </div>
       <div>
        <button id="sign_user">Sign Up</button>
       </p>
      </div>
     </form>
    </div>
    <!--form ends-->
  </div>
</div>
</body>
</head>
</html>

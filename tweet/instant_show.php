<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Zakiya's website</title>

    <link rel="stylesheet" href="tweet/Poststyle2.css"/>
</head>

<body>
  <div class="topbar" id="topbar">
          <div class="container">

  			<ul class="nav">
  								  <li class="dropdown">
      <a href="#" class="dropdown-toggle">New</a>
      <ul class="dropdown-menu">
  		<li>
  <a href='?p=2&outletID=1'>Barter Letter</a>
  </li>
  <li>
  <a href='?p=2&outletID=4'>Donation Letter</a>
  </li>
  <li>
  <a href='?p=2&outletID=2'>Guest Letter</a>
  </li>
  <li>
  <a href='?p=2&outletID=3'>Promo Letter</a>
  </li>
  <li>
  <a href='?p=2&outletID=5'>Costco Letter</a>
  </li>
      </ul>
    </li>
<div id="whole">

    <div id="showcontainer">
      <div id="show">
      </div>
    </div>

<div id="form">
<form id="myForm" action="tweet/update.php" method="post">
<h3>Zakiya's Gift Card App</h3>
  <p>
		<label>Location</label><br/>
				<select name='card_location' id='card_location' class='drop' title=' ' size='1' enabled>
					<option value='1' selected='selected'selected='selected'>North York</option>
					<option value='2' >Cosmopolitan</option>
					<option value='3' >Oshawa</option>
					<option value='4' >Waterloo</option>
				</select>
		</p>

    <p>
		<label>Guest / Organization Name</label><br/>
			<input type="text" name="card_name" id="card_name" class="width-150" title=' ' minlength="1"/>
		</p>
		<p>
		<label>Type</label><br/>
				<select name='card_type' id='card_type' class='drop' title=' ' size='1' enabled>
					<option value='1' selected='selected'selected='selected'>Barter Letter</option>
					<option value='4' >Donation Letter</option>
					<option value='2' >Guest Letter</option>
					<option value='3' >Promo Letter</option>
          <option value='3' >Costco Letter</option>
				</select>
		</p>
		<p>
		<label>Amount</label><br/>
			<input type="text" name="card_amount" id="card_amount" class="required number width-150" title=' ' minlength="1"/>
		</p>

    <p>
		<label>Notes</label><br/>
			<textarea name="card_notes" id="card_notes"></textarea>
		</p>
		<p>
		<label>Author</label><br/>
		<input type="text" name="author_readonly" disabled="disabled" value="Zakiya Jafrin"/><input type="hidden" name="card_booker_name" value="Zakiya Jafrin"/>
    </p>
				<br>


<!-- Name:<br><input type="text" name="name" maxlength="25"><br><br>
Email(will not be displayed):<br><input type="text" name="email" maxlength="255"><br><br>
Message:<br>
<textarea name="message" rows="6" cols="35" maxlength="350"></textarea><br> -->
<!--observe that we did npt create any post processing through php rather calling a java script
also we gave id value instead of name-->
<button id="sub">Save</button>
</br><span id="feedback"></span>
</form>

</div>

</div>

<script type="text/javascript" src="jQuery.js"></script>
<script type="text/javascript" src="tweet/instant_show.js"></script>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="header.css" rel="stylesheet">
</head>
<body>
<div class="bg"></div>
	
<table>
<td class="bg2">
	<ul id="drop-nav">
<li class="ulleft"><a href="index.php">Home</a></li>
  <li><a href="about.php">About Us</a>
    <ul>
      <li><a href="about.php#Overview">Overview</a></li>
      <li><a href="about.php#organizationchart">Organization Chart</a></li>
      <li><a href="about.php#process">Process of Alumni Memberships</a></li>
    </ul>
  </li>
  
  <li><a href="contactus.php">Contact Us</a>
  </li>
  <li style="float:right" class="ulright"><a href="login.php">Login</a></li>
  <li style="float:right"><a href="alumni_registerform.php">Register</a></li>
</ul>
</td>
</table>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	
<script type="text/javascript" charset="utf-8">
	for (var i = 0; i < document.links.length; i++)
	{
		if (document.links[i].href == document.URL) {
        document.links[i].className = 'active';
    }
	}
	
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } 
	else {
        document.getElementById("myBtn").style.display = "none";
		}
	}

// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>	
  
</body>
</html>


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
<li class="ulleft"><a href="view_alumni.php">Alumni</a></li>
  <li><a href="payment_record.php">Membership fee</a>
    <ul>
      <li><a href="managepayment.php">Payment</a></li>
      <li><a href="payment_record.php">Payment Record</a></li>
    </ul>
  </li>
  <li><a href="financial_record.php">Financial</a>
    <ul>
      <li><a href="add_financial.php">Financial</a></li>
      <li><a href="financial_record.php">Financial Record</a></li>
    </ul>
  <li><a href="admin_announcement.php">Announcement Board</a></li>
  <li><a href="forum_display_and_reply.php">E-Forum</a></li>
  <li><a href="admin_event.php">Event</a></li>
  
  </li>
  <li style="float:right" ><a href="index.php">Log Out</a></li>

  </li>
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


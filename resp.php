<!doctype html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
         function Redirect() {
            location.href="index.html";
         }
      </script>
</head>
<body>
	<?php
	if(isset($_POST['Subscribe_to_monthly_newsletter']))
	{
		$email= $_POST['Email'];
	
	?>
	<div class="contain">

		<img src="icon-success.svg"><div>
		<header><h1> Thanks for subscribing! </h1> </header></div>
		<div><article>
			A confrimation email has been sent to <?php echo $email; ?>. please open it and click the button inside to confirm your subscription.
		</article></div>
		<div>
		<input type="button" value="Dismiss message" onclick="Redirect();" />
			

			</div>
			<?php
			}
			?>
</body>
</html>
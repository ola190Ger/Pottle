<!DOCTYPE html>
<html lang="ru" >
<head>
    <meta charset="utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<form id="myform">
	<label>Введите текст сообщения</label>
	<input type="text" name="text">
	<br>
	<label>Введите E-mail</label>
	<input type="text" name="email">
	<input type="submit" name="submit">
</form>

<script>
	$("#myform").submit(function(e) {
		e.preventDefault();
	    $.ajax({
	    	   type: "POST",
	           url: "send.php",
	           data: $("#myform").serialize(),
	           success: function(data) {
					$('.results').html(data);
			   }
	         });

	});
</script>

<div class="results"></div>

</body>
</html>
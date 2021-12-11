<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </head>
<body>

<form action="" method="get">
    <input id="value" type="text" name="data" id="subject" value="14">
</form>
<button id="button" >OK</button>

<table>
  <tr>
    <th>3</th>
    <th>6</th>
    <th>12</th>
  </tr>
  <tr>
    <td id="3" >0</td>
    <td id="6" >0</td>
    <td id= "12" >0</td>
  </tr>
</table>

<script type="text/javascript">
    $("#button").click(function() {
        $.ajax({
                type: "GET",
                url: "main.php?value=" + $('#value').val(),
            }).done(function( data) {
		var value = JSON.parse(data);
                $('#3').text(value[3]);
		$('#6').text(value[6]);
		$('#12').text(value[12]);
            })
    });
            
</script> 

</body>
</html>
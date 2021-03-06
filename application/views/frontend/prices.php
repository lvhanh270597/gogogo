<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php  echo base_url().'/themes/SA.png'; ?>" />
    <title>User control</title>

    <link href="assets/beauty/profile/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->    
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  </head>
  <body>

<div class="container">
	<h3 class="mt-4 mb-3">Bảng giá </h3>
	<table class="table table-hover">
    <thead>
      <tr>
        <th>Địa điểm</th>
        <th>Giá mỗi chuyến</th>
      </tr>
    </thead>
    <tbody>    
	    <?php
            $fee = 0.5;
			foreach ($prices as $address => $price) {				
				echo '<tr>';								
				echo '<td> '.$address.' </td>';
				echo '<td> '.(($price + $fee) * 1000).' </td>';			
				echo '</tr>';
			}
		?>       
    </tbody>
  </table>
</div>
</body>
</html>
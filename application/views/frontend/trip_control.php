
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php  echo base_url().'/themes/SA.png'; ?>" />
    <title>Trip control</title>

    <link href="assets/beauty/profile/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->    
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  </head>
  <body>

<div class="container">
	<h3 class="mt-4 mb-3">Trips management </h3>
	<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>From</th>
        <th>To</th>
        <th>Occupation</th>
        <th>Owner</th>
        <th>Delete</th>        
      </tr>
    </thead>
    <tbody>    
	    <?php
			foreach ($trips as $trip) {
				$id = $trip['id'];
				$from = $trip['_from'];
                $to = $trip['_to'];                
                $occupa = $trip['_empty'];
                if ($occupa == 0) $occupa = 'No';
                else $occupa = 'Yes';
				$owner = $trip['id_boss'];
				echo '<tr>';				
				echo '<td> <a href="'.site_url('detail/'.$id).'"> '.$id.' </a> </td>';
				echo '<td> '.$from.' </td>';
				echo '<td> '.$to.' </td>';
				echo '<td> '.$occupa.' </td>';
				echo '<td> '.$owner.' </td>';
				echo '<td> <a href="'.site_url('trip_control/remove_trip/'.$id).'"> Delete </a> </td>';				
				echo '</tr>';
			}
		?>       
    </tbody>
  </table>
</div>
</body>
</html>
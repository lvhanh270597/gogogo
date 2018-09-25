
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php  echo base_url().'/themes/SA.png'; ?>" />
    <title>Matched control</title>

    <link href="assets/beauty/profile/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->    
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  </head>
  <body>

<div class="container">
	<h3 class="mt-4 mb-3">Matches management </h3>
	<table class="table table-hover">
    <thead>
      <tr>        
        <th>Boss</th>
        <th>Guess</th>
        <th>Trip</th>        
        <th>Delete</th>        
      </tr>
    </thead>
    <tbody>    
	    <?php
			foreach ($matches as $match) {
                $id = $match['id'];
				$boss = $match['id_boss'];
                $guess = $match['id_guess'];                
                $trip = $match['trip_id'];             				
				echo '<tr>';								
				echo '<td> '.$boss.' </td>';
				echo '<td> '.$guess.' </td>';
				echo '<td> '.$trip.' </td>';
				echo '<td> <a href="'.site_url('matched_control/remove_matched/'.$id).'"> Delete </a> </td>';				
				echo '</tr>';
			}
		?>       
    </tbody>
  </table>
</div>
</body>
</html>
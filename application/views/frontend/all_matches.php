
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
	<h3 class="mt-4 mb-3">All of Matches</h3>
	<table class="table table-hover">
    <thead>
      <tr>
        <th> ID </th>
        <th>User A</th>
        <th>User B</th>        
      </tr>
    </thead>
    <tbody>    
	    <?php
            $id = 0;
			foreach ($matches as $match) {
                $id += 1;
				$A = $match['id_boss'];
                $B = $match['id_guess'];		
                $full_nameA = $this->user_model->get_by_id($A);		
                $full_nameB = $this->user_model->get_by_id($B);
                $full_nameA = $full_nameA['full_name'];
                $full_nameB = $full_nameB['full_name'];
                echo '<tr>';				
                echo '<id>'.$id.'</td>';
                echo '<td> <a href="'.site_url('user/'.$username).'"> '.$full_nameA.' </a> </td>';				
                echo '<td> <a href="'.site_url('user/'.$username).'"> '.$full_nameB.' </a> </td>';
				echo '</tr>';
			}
		?>       
    </tbody>
  </table>
</div>
</body>
</html>
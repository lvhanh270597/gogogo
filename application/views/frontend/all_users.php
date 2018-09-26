
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
	<h3 class="mt-4 mb-3">All of Users</h3>
	<table class="table table-hover">
    <thead>
      <tr>
        <th>Username</th>
        <th>Name</th>
        <th>Phone</th>
		<th>Facebook</th>        
      </tr>
    </thead>
    <tbody>    
	    <?php
			foreach ($users as $user) {
				$username = $user['username'];
				$name = $user['full_name'];
				$phone = $user['phone_num'];
				$facebook = $user['facebook'];
				$balance = $user['balance'];
				echo '<tr>';				
				echo '<td> <a href="'.site_url('user/'.$username).'"> '.$username.' </a> </td>';
				echo '<td> '.$name.' </td>';
				echo '<td> '.$phone.' </td>';
				echo '<td> '.$facebook.' </td>';								
				echo '</tr>';
			}
		?>       
    </tbody>
  </table>
</div>
</body>
</html>
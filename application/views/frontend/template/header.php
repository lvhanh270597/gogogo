<html lang="en"><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<title>Easy Here</title>

<?php 
    $fat = "";
    $n = substr_count($this->uri->uri_string(), '/'); 
    for ($i=1; $i<=$n; $i++){
    	$fat .= "../";
    }
?>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Bootstrap core CSS -->
<link href=<?php echo '"'.$fat.'assets/beauty/type1/css/bootstrap.min.css"'; ?> rel="stylesheet">

<!-- Material Design Bootstrap -->
<link href=<?php echo '"'.$fat.'assets/beauty/type1/css/mdb.min.css"'?> rel="stylesheet">


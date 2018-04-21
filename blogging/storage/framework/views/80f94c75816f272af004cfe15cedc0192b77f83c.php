<!DOCTYPE html>
<html>
	<head>
		<title>Admin Page</title>
		<meta charset="utf-8" />
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href ="adminStyle.css">
	</head>
	
	<body>
	
		<div class ="container">
			<div class="jumbotron">
				<h2>Administrator!</h2>
				
				<form action = "posting.php" method = "post" class = "form">
					<div class="row">
						<div class="form-group col-xs-5 col-sm-8">
							<label>Title</label>
							<input type = "text" class = "form-control" name = "title"></textarea>
						</div>
					</div>
						  
					<div class="row">
						<div class="form-group col-xs-6 col-sm-10">
							<label>Article</label>
							<textarea type = "text" class = "form-control" name = "article" rows="10" cols="50"></textarea>
						</div>
					</div>
					  
					<button type="submit" class="btn btn-primary btn-lg">Publish</button>
					
				</form>
								
			</div>
		</div>
	
	</body>
</html>
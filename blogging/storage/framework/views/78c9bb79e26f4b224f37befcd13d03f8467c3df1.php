<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSRF Token -->
		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

		<!--Css -->
		<link href="<?php echo e(asset('/css/app.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('/css/style.css')); ?>" rel="stylesheet">


    </head>
    <body>
			<div class="blog-masthead">
				<nav class="blog-nav">
					<a class="blog-nav-item " href="#">Kiran Nepali</a>
					<a class="blog-nav-item active" href="#">Article</a>
					<a class="blog-nav-item" href="#">Contact me</a>
					<a class="blog-nav-item" href="#">About me</a>
					<a class="blog-nav-item" href="/auth/login">Admin Page</a>
					<a class="blog-nav-item" href="/dashboard">Dashboard</a>
				</nav>
			</div>
			
			<!--container containing contents-->
			<div class="container">
				<div class="row">
					<div class="col-md-3 leftColumn box"><!--leftcolumn box -->
						<aside>
							<img src="<?php echo e(asset('/image/mypic.jpg')); ?>" width ="90px" height="120px" class="img-circle"  />

						</aside>
						<h4>Kiran Nepali</h4>
						<p>Student @Royal  Holloway</p>
						<p>BSc. Computer Science</p>
						<p>In final year</p>
						<hr/>
						<p>Share this page on:</p>
						<ul class="list-inline">
							<li><img src="<?php echo e(asset('image/twitter.png')); ?>" /></li>
							<li><img src="image/facebook.png" /></li>
							<li><img src="image/googleplus.png" /></li>
							<li><img src="image/linkedin.png" /></li>
							<li><img src="image/email.png" /></li>
						</ul>
					</div>
					
					<div class="col-md-8 rightColumn box"><!--rightcolumn box-->
						<!--<article>
						<header><h2></h2></header>
							<footer><small>Posted on 18 Oct 2016</small></footer>
							<script type = "text/javascript" src ="more.js"></script>
							<p class ="lead text-justify">My name is Jonny Duncan. I grew up an only child. 
							I was also an only grandchild on both sides. The youngest of all my cousins and
							the only child in a small neighborhood that consisted of a bunch of adults, I never
							really learned what it meant to just be a kid. And I certainly never learned how to
							relate to other children.
	 
							Accustomed to being around primarily adults, I was always mature for my age. Even my 
							own friends often annoyed me during my adolescent years. I had a lot of people who 
							invested in me, and I excelled at most of my many and varied hobbies. I did well in
							school, often knowing how to do complex math problems before the concept had even been
							introduced to our class. Looking back, I am sure I was quite smug, although I did not 
							realize it at the time. Unfortunately, self-awareness was not something I learned until many years later. 
							</p>
							
						</article> -->
						<article>
							
							<?php if(count($post)>0): ?>
								<?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class = "row">
										<div class="col-md-12">
											<h3 class="text-center"><?php echo e($article->title); ?></h2>
											</div>
										</div>
									<div class="row">
										<div class="col-md-12">
											<li class="list-group-item"><p><?php echo $article->article; ?></p></li>
										</div>
									</div>
									<hr>
									<!-- Comment section -->
									<div class = "comment">
										<ul class="list-group">
										<strong>Comments</strong>
										<?php $__currentLoopData = $article->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<li class="list-group-item"><?php echo e($comment->comment); ?>

												<br>
												<p><em><small>written by </small></em> : <strong><small><?php echo e($comment->name); ?>&nbsp;<?php echo e($comment->created_at->diffForHumans()); ?></small></h6></strong>
												</p>
											</li>
											<?php echo $__env->make('messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</ul>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
								
							
								<hr>
									<!--Form allows user to insert comments-->
								<form action = "/posts/<?php echo e($article->id); ?>/comments" method = "post" class = "form">
								<div class="row">
									<div class="form-group col-xs-5">
										<label>Name</label>
										<input type="text" class="form-control" name ="name" placeholder="Name">
									</div>
								</div>
								  
								<div class="row">
									<div class="form-group col-xs-5">
										<label>Email address</label>
										<input type="email" class="form-control" name ="email" placeholder="Email">
									</div>
								</div>
								  
								<div class="row">
									<div class="form-group col-xs-5">
										<label>Comment</label>
										<textarea type = "text" class = "form-control" name = "comment"></textarea>
									</div>
								</div>
								<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 

								<button type="submit" class="btn btn-default">Submit</button>
							</form>
								
								<?php echo e($post->links()); ?>

							
						</article>
						
						
						
						<hr/>
						
						
						
						
					</div>
				</div>	
			</div>
		    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
	
		</body>
</html>

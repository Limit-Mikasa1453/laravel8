<?php $__env->startSection('container'); ?>

	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-8">
				<h1 class="mb-3"> <?php echo e($post->title); ?> </h1>
				<p>
					By. <a href="/authors/<?php echo e($post->author->username); ?>" class="text-decoration-none"> <?php echo e($post->author->name); ?> </a> 
					in 	<a href="/categories/<?php echo e($post->category->slug); ?>" class="text-decoration-none"> <?php echo e($post->category->name); ?> </a>
				</p>
				<img src="https://source.unsplash.com/1200x400?<?php echo e($post->category->slug); ?>" alt="<?php echo e($post->category->name); ?>" class="img-fluid">
				<article class="my-3 fs-5"> 
					<p>	<?php echo $post->body; ?> </p>
				</article>
				<a href="/posts" class="d-block mt-3">Back to Posts</a>
			</div>
		</div>
	</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mikasa/php-htdocs/laravel/resources/views/post.blade.php ENDPATH**/ ?>
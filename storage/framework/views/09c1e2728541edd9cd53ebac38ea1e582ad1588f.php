<?php $__env->startSection('container'); ?>
	<article>
		<h2> 	<?php echo e($post->title); ?> </h2>

		<p>By. <a href="/authors/<?php echo e($post->author->username); ?>" class="text-decoration-none"> <?php echo e($post->author->name); ?> </a> in <a href="/categories/<?php echo e($post->category->slug); ?>" class="text-decoration-none"> <?php echo e($post->category->name); ?> </a></p>

		
		<p>		<?php echo $post->body; ?> </p>
	</article>
	<a href="/posts" class="d-block mt-3">Back to Posts</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel8/resources/views/post.blade.php ENDPATH**/ ?>
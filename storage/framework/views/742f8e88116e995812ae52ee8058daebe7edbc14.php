<?php $__env->startSection('container'); ?>
	

	<h1 class="mb-5">Post Categories</h1>

	<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<ul>
			<li>
				<a href="/categories/<?php echo e($category->slug); ?>">
					<?php echo e($category->name); ?> 
				</a>
			</li>
		</ul>
			
				
			
		
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel8/resources/views/categories.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2><?php echo e($post->title); ?></h2>
        <p><?php echo e($post->content); ?></p>
        <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-primary">Quay lại</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/macos/Desktop/baoPhp/demoCRUD/resources/views/posts/show.blade.php ENDPATH**/ ?>
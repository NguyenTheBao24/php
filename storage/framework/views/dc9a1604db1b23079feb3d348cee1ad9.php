<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Danh sách bài viết</h1>
        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success">Thêm bài viết</a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="row">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($post->title); ?></h5>
                        <p class="card-text"><?php echo e(Str::limit($post->content, 100)); ?></p>
                        <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="btn btn-primary btn-sm">Xem</a>
                        <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/macos/Desktop/baoPhp/demoCRUD/resources/views/posts/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <div class="card shadow p-4">
        <h2 class="mb-4 text-primary">Chỉnh sửa bài viết</h2>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="POST">
            <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label class="form-label">Tiêu đề</label>
                <input type="text" name="title" class="form-control" value="<?php echo e($post->title); ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nội dung</label>
                <textarea name="content" class="form-control" rows="4" required><?php echo e($post->content); ?></textarea>
            </div>

            <button type="submit" class="btn btn-warning">Cập nhật</button>
            <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/macos/Desktop/baoPhp/demoCRUD/resources/views/posts/edit.blade.php ENDPATH**/ ?>
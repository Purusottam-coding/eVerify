<?php $__env->startSection('title', 'पासवर्ड पुष्टि गर्नुहोस् | ई-भेरिफाइ'); ?>

<?php $__env->startSection('content'); ?>

    <h4>पासवर्ड पुष्टि गर्नुहोस्</h4>
    <p class="auth-subtitle">यो एक सुरक्षित क्षेत्र हो। अगाडि बढ्नु अघि कृपया आफ्नो पासवर्ड पुष्टि गर्नुहोस्।</p>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0 ps-3">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('password.confirm')); ?>">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="password" class="form-label">पासवर्ड</label>
            <input id="password" type="password" name="password"
                   class="form-control" placeholder="*****" required autofocus autocomplete="current-password">
        </div>

        <button type="submit" class="btn btn-gov-primary w-100">
            <i class="bi bi-shield-lock"></i> पुष्टि गर्नुहोस्
        </button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Laravel\everify\resources\views\auth\confirm-password.blade.php ENDPATH**/ ?>
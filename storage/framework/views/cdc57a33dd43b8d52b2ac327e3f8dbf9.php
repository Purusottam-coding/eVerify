<?php $__env->startSection('title', 'पासवर्ड बिर्सनुभयो | ई-भेरिफाइ'); ?>

<?php $__env->startSection('content'); ?>

    <h4>पासवर्ड बिर्सनुभयो?</h4>
    <p class="auth-subtitle">कुनै समस्या छैन। आफ्नो इमेल ठेगाना दिनुहोस्, हामी पासवर्ड रिसेट लिङ्क पठाउनेछौं।</p>

    <?php if(session('status')): ?>
        <div class="status-alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0 ps-3">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('password.email')); ?>">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="email" class="form-label">इमेल ठेगाना</label>
            <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>"
                   class="form-control" placeholder="example@email.com" required autofocus>
        </div>

        <button type="submit" class="btn btn-gov-primary w-100 mb-3">
            <i class="bi bi-envelope-arrow-up"></i> रिसेट लिङ्क पठाउनुहोस्
        </button>

        <div class="auth-links text-center">
            <a href="<?php echo e(route('login')); ?>">लगइन पृष्ठमा फर्कनुहोस्</a>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Laravel\everify\resources\views\auth\forgot-password.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'पासवर्ड रिसेट गर्नुहोस् | ई-भेरिफाइ'); ?>

<?php $__env->startSection('content'); ?>

    <h4>नयाँ पासवर्ड सेट गर्नुहोस्</h4>
    <p class="auth-subtitle">आफ्नो खाताको लागि नयाँ पासवर्ड बनाउनुहोस्</p>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0 ps-3">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('password.store')); ?>">
        <?php echo csrf_field(); ?>

        <input type="hidden" name="token" value="<?php echo e($request->route('token')); ?>">

        <div class="mb-3">
            <label for="email" class="form-label">इमेल ठेगाना</label>
            <input id="email" type="email" name="email" value="<?php echo e(old('email', $request->email)); ?>"
                   class="form-control" required autofocus autocomplete="username">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">नयाँ पासवर्ड</label>
            <input id="password" type="password" name="password"
                   class="form-control" placeholder="••••••••" required autocomplete="new-password">
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">पासवर्ड पुष्टि गर्नुहोस्</label>
            <input id="password_confirmation" type="password" name="password_confirmation"
                   class="form-control" placeholder="••••••••" required autocomplete="new-password">
        </div>

        <button type="submit" class="btn btn-gov-primary w-100">
            <i class="bi bi-key-fill"></i> पासवर्ड रिसेट गर्नुहोस्
        </button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Laravel\everify\resources\views\auth\reset-password.blade.php ENDPATH**/ ?>
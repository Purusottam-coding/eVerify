<?php $__env->startSection('title', 'दर्ता गर्नुहोस् | बाह्रदशी गाउँपालिका '); ?>

<?php $__env->startSection('content'); ?>

    <h4>नयाँ खाता दर्ता गर्नुहोस्</h4>
    <p class="auth-subtitle">बाह्रदशी गाउँपालिकाको ई-भेरिफाइ प्रयोग गर्न आफ्नो विवरण भर्नुहोस्</p>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0 ps-3">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">पूरा नाम</label>
            <input id="name" type="text" name="name" value="<?php echo e(old('name')); ?>"
                   class="form-control" placeholder="तपाईंको पूरा नाम" required autofocus autocomplete="name">
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">इमेल ठेगाना</label>
            <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>"
                   class="form-control" placeholder="example@email.com" required autocomplete="username">
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">पासवर्ड</label>
            <input id="password" type="password" name="password"
                   class="form-control" placeholder="••••••••" required autocomplete="new-password">
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">पासवर्ड पुष्टि गर्नुहोस्</label>
            <input id="password_confirmation" type="password" name="password_confirmation"
                   class="form-control" placeholder="••••••••" required autocomplete="new-password">
        </div>

        <!-- Role -->
        <div class="mb-3">
            <label for="role" class="form-label">भूमिका (Role)</label>
            <select id="role" name="role" class="form-select" required>
                <option value="" disabled <?php echo e(old('role') ? '' : 'selected'); ?>>भूमिका छान्नुहोस्</option>
                <option value="superadmin" <?php echo e(old('role') === 'superadmin' ? 'selected' : ''); ?>>सुपर एडमिन</option>
                <option value="admin" <?php echo e(old('role') === 'admin' ? 'selected' : ''); ?>>एडमिन</option>
                <option value="staff" <?php echo e(old('role') === 'staff' ? 'selected' : ''); ?>>स्टाफ</option>
            </select>
        </div>

        <button type="submit" class="btn btn-gov-primary w-100 mb-3">
            <i class="bi bi-person-plus-fill"></i> दर्ता गर्नुहोस्
        </button>

        <div class="auth-links text-center">
            पहिले नै खाता छ? <a href="<?php echo e(route('login')); ?>">लगइन गर्नुहोस्</a>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Laravel\everify\resources\views\auth\register.blade.php ENDPATH**/ ?>
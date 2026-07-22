<?php $__env->startSection('title', 'लगइन | बाह्रदशी गाउँपालिका '); ?>

<?php $__env->startSection('content'); ?>

    <h4>लगइन गर्नुहोस्</h4>
    <p class="auth-subtitle">आफ्नो खातामा पहुँच गर्न विवरण भर्नुहोस्</p>

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

    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">इमेल ठेगाना</label>
            <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>"
                   class="form-control" placeholder="example@email.com" required autofocus autocomplete="username">
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">पासवर्ड</label>
            <input id="password" type="password" name="password"
                   class="form-control" placeholder="*****" required autocomplete="current-password">
        </div>

        <!-- Remember Me -->
        <div class="mb-3 form-check">
            <input type="checkbox" name="remember" id="remember" class="form-check-input">
            <label for="remember" class="form-check-label">मलाई सम्झनुहोस्</label>
        </div>

        <button type="submit" class="btn btn-gov-primary w-100 mb-3">
            <i class="bi bi-box-arrow-in-right"></i> लगइन गर्नुहोस्
        </button>

        <div class="auth-links text-center">
            <?php if(Route::has('password.request')): ?>
                <a href="<?php echo e(route('password.request')); ?>">पासवर्ड बिर्सनुभयो?</a>
                
            <div class="mt-2">
                <a href="<?php echo e(route('verify.index')); ?>">
                    कागजात प्रमाणीकरण यहाँ जाँच्नुहोस्
                </a>
            </div>
        </div>
            <?php endif; ?>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Laravel\everify\resources\views/auth/login.blade.php ENDPATH**/ ?>
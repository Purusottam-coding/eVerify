<?php $__env->startSection('title', 'इमेल प्रमाणीकरण | बाह्रदशी गाउँपालिका, ई-भेरिफाइ'); ?>

<?php $__env->startSection('content'); ?>

    <h4>इमेल प्रमाणीकरण गर्नुहोस्</h4>
    <p class="auth-subtitle">दर्ता गर्नुभएकोमा धन्यवाद! सुरु गर्नुअघि, हामीले तपाईंलाई पठाएको लिङ्कमा क्लिक गरेर आफ्नो इमेल ठेगाना प्रमाणित गर्नुहोस्। लिङ्क प्राप्त हुनुभएन भने, हामी अर्को पठाइदिन्छौं।</p>

    <?php if(session('status') == 'verification-link-sent'): ?>
        <div class="status-alert">
            तपाईंले दर्ता गर्दा दिनुभएको इमेल ठेगानामा नयाँ प्रमाणीकरण लिङ्क पठाइएको छ।
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('verification.send')); ?>">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-gov-primary w-100 mb-3">
            <i class="bi bi-envelope-check"></i> प्रमाणीकरण इमेल फेरि पठाउनुहोस्
        </button>
    </form>

    <form method="POST" action="<?php echo e(route('logout')); ?>">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-outline-secondary w-100">
            <i class="bi bi-box-arrow-right"></i> लगआउट गर्नुहोस्
        </button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Laravel\everify\resources\views\auth\verify-email.blade.php ENDPATH**/ ?>
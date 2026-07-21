<?php $__env->startSection('title', 'एडमिन ड्यासबोर्ड | ई-भेरिफाइ'); ?>

<?php $__env->startSection('content'); ?>

    <section class="py-5" style="background-color: var(--gov-gray); min-height: 70vh;">
        <div class="container">

            <div class="mb-4">
                <h2 class="fw-bold mb-1" style="color: var(--gov-blue-dark);">एडमिन ड्यासबोर्ड</h2>
                <p class="text-muted mb-0">स्वागत छ, <?php echo e(auth()->user()->name); ?>!</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-patch-check"></i></div>
                <h5 class="fw-bold mb-2">कागजात प्रमाणीकरण / स्वीकृति</h5>
                <p class="text-muted mb-0">Staff ले upload गरेका कागजातहरू यहाँ verify/approve गर्ने सुविधा</p>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Laravel\everify\resources\views/dashboard/admin.blade.php ENDPATH**/ ?>
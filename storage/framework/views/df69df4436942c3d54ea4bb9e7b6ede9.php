<?php $__env->startSection('title', 'प्रयोगकर्ता व्यवस्थापन | ई-भेरिफाइ'); ?>

<?php $__env->startSection('content'); ?>

    <section class="py-5" style="background-color: var(--gov-gray); min-height: 70vh;">
        <div class="container">

            <div class="mb-4">
                <h2 class="fw-bold mb-1" style="color: var(--gov-blue-dark);">प्रयोगकर्ता व्यवस्थापन</h2>
                <p class="text-muted mb-0">Admin र Staff खाताहरू यहाँबाट मात्र सिर्जना गर्न सकिन्छ।</p>
            </div>

            <?php if(session('status')): ?>
                <div class="alert alert-success"><?php echo e(session('status')); ?></div>
            <?php endif; ?>

            <div class="row g-4">

                <!-- Create User Form -->
                <div class="col-lg-5">
                    <div class="feature-card">
                        <h5 class="fw-bold mb-3"><i class="bi bi-person-plus"></i> नयाँ प्रयोगकर्ता थप्नुहोस्</h5>

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul class="mb-0 ps-3">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(route('users.store')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="mb-3">
                                <label class="form-label">पूरा नाम</label>
                                <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">इमेल ठेगाना</label>
                                <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">भूमिका (Role)</label>
                                <select name="role" class="form-select" required>
                                    <option value="">-- छान्नुहोस् --</option>
                                    <option value="admin" <?php echo e(old('role') == 'admin' ? 'selected' : ''); ?>>एडमिन (Admin)</option>
                                    <option value="staff" <?php echo e(old('role') == 'staff' ? 'selected' : ''); ?>>कर्मचारी (Staff)</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">पासवर्ड</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">पासवर्ड पुष्टि गर्नुहोस्</label>
                                <input type="password" name="password_confirmation" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-gov-primary w-100">
                                <i class="bi bi-check-circle"></i> प्रयोगकर्ता सिर्जना गर्नुहोस्
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Existing Users List -->
                <div class="col-lg-7">
                    <div class="feature-card">
                        <h5 class="fw-bold mb-3"><i class="bi bi-people"></i> हालका प्रयोगकर्ताहरू</h5>

                        <?php if($users->isEmpty()): ?>
                            <p class="text-muted mb-0">अहिलेसम्म कुनै Admin/Staff खाता थपिएको छैन।</p>
                        <?php else: ?>
                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th>नाम</th>
                                            <th>इमेल</th>
                                            <th>भूमिका</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($user->name); ?></td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td><span class="badge" style="background-color: var(--gov-blue);"><?php echo e($user->roleLabel()); ?></span></td>
                                                <td class="text-end">
                                                    <form method="POST" action="<?php echo e(route('users.destroy', $user)); ?>"
                                                          onsubmit="return confirm('पक्का हटाउने हो?');">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Laravel\everify\resources\views\superadmin\create-user.blade.php ENDPATH**/ ?>
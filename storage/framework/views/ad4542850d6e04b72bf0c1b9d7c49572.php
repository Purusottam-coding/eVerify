

<?php $__env->startSection('title', 'कागजात प्रमाणीकरण | ई-भेरिफाइ'); ?>

<?php $__env->startSection('content'); ?>

    <section class="py-5" style="background-color: var(--gov-gray); min-height: 70vh;">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7">

                    <div class="text-center mb-4">
                        <h2 class="fw-bold mb-1" style="color: var(--gov-blue-dark);">कागजात प्रमाणीकरण</h2>
                        <p class="text-muted mb-0">Document Number राखेर आफ्नो कागजात प्रमाणित भएको छ कि छैन जाँच गर्नुहोस्।</p>
                    </div>

                    <div class="feature-card mb-4">
                        <form method="GET" action="<?php echo e(route('verify.index')); ?>">
                            <div class="input-group">
                                <input type="text" name="document_number"
                                       value="<?php echo e(request('document_number')); ?>"
                                       class="form-control" placeholder="जस्तै: DOC-2026-00123" required>
                                <button type="submit" class="btn btn-gov-primary px-4">
                                    <i class="bi bi-search"></i> जाँच गर्नुहोस्
                                </button>
                            </div>
                        </form>
                    </div>

                    <?php if($searched): ?>
                        <?php if($document): ?>
                            <div class="feature-card">
                                <?php if($document->isVerified()): ?>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-patch-check-fill" style="font-size:1.8rem; color:#198754;"></i>
                                        <h5 class="fw-bold mb-0 text-success">Approved</h5>
                                    </div>
                                <?php elseif($document->status === 'rejected'): ?>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-x-circle-fill" style="font-size:1.8rem; color:#dc3545;"></i>
                                        <h5 class="fw-bold mb-0 text-danger">Rejected</h5>
                                    </div>
                                <?php else: ?>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-hourglass-split" style="font-size:1.8rem; color:#997404;"></i>
                                        <h5 class="fw-bold mb-0" style="color:#997404;">Pending</h5>
                                    </div>
                                <?php endif; ?>

                                <table class="table mb-0">
                                    <tr>
                                        <th style="width:40%;">Document Number</th>
                                        <td><?php echo e($document->document_number); ?></td>
                                    </tr>
                                    <tr>
                                        <th>शीर्षक</th>
                                        <td><?php echo e($document->title); ?></td>
                                    </tr>
                                    <tr>
                                        <th>धारकको नाम</th>
                                        <td><?php echo e($document->holder_name); ?></td>
                                    </tr>
                                    <tr>
                                        <th>स्थिति</th>
                                        <td><?php echo e($document->statusLabel()); ?></td>
                                    </tr>
                                    <?php if($document->verified_at): ?>
                                        <tr>
                                            <th>प्रमाणित मिति</th>
                                            <td><?php echo e($document->verified_at->format('Y-m-d')); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                </table>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-warning mb-0">
                                <i class="bi bi-exclamation-triangle"></i>
                                यो Document Number सँग मिल्दो कुनै कागजात फेला परेन। कृपया number पुनः जाँच्नुहोस्।
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Laravel\everify\resources\views\verify.blade.php ENDPATH**/ ?>
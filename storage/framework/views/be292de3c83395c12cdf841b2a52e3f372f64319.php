<?php if(!empty($userBadges) and count($userBadges)): ?>

    <div class="user-reward-badges badges-lg row align-items-center mt-10 mt-lg-20">

        <?php $__currentLoopData = $userBadges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userBadge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-6 col-lg-3 mt-20 mt-lg-0">
                <div class="rounded-lg badges-item py-20 py-lg-40 shadow-sm px-10 px-lg-25 d-flex flex-column align-items-center">
                    <img src="<?php echo e(!empty($userBadge->badge_id) ? $userBadge->badge->image : $userBadge->image); ?>" class="rounded-circle" alt="<?php echo e(!empty($userBadge->badge_id) ? $userBadge->badge->title : $userBadge->title); ?>">

                    <span class="font-16 font-weight-bold text-dark-blue mt-15 mt-lg-25"><?php echo e(!empty($userBadge->badge_id) ? $userBadge->badge->title : $userBadge->title); ?></span>
                    <span class="font-14 text-gray mt-5 mt-lg-10 text-center"><?php echo (!empty($userBadge->badge_id) ? nl2br($userBadge->badge->description) : nl2br($userBadge->description)); ?></span>
                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

<?php else: ?>
    <?php echo $__env->make(getTemplate() . '.includes.no-result',[
        'file_name' => 'badge.png',
        'title' => trans('site.instructor_not_have_badge'),
        'hint' => '',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>
<?php /**PATH /var/www/html/unicuc/resources/views/web/default/user/profile_tabs/badges.blade.php ENDPATH**/ ?>
<section class="mt-30">
    <div class="d-flex justify-content-between align-items-center mb-10">
        <h2 class="section-title after-line"><?php echo e(trans('site.education')); ?></h2>
        <button id="userAddEducations" type="button" class="btn btn-primary btn-sm"><?php echo e(trans('site.add_education')); ?></button>
    </div>

    <div id="userListEducations">

        <?php if(!empty($educations) and !$educations->isEmpty()): ?>
            <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row mt-20">
                    <div class="col-12">
                        <div class="education-card py-15 py-lg-30 px-10 px-lg-25 rounded-sm panel-shadow bg-white d-flex align-items-center justify-content-between">
                            <div class="col-8 text-secondary text-left font-weight-500 education-value"><?php echo e($education->value); ?></div>
                            <div class="col-2 text-right">
                                <div class="btn-group dropdown table-actions">
                                    <button type="button" class="btn-transparent dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="more-vertical" height="20"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <button type="button" data-education-id="<?php echo e($education->id); ?>" data-user-id="<?php echo e((!empty($user) and empty($new_user)) ? $user->id : ''); ?>" class="d-block btn-transparent edit-education"><?php echo e(trans('public.edit')); ?></button>
                                        <a href="/panel/setting/metas/<?php echo e($education->id); ?>/delete?user_id=<?php echo e((!empty($user) and empty($new_user)) ? $user->id : ''); ?>" class="delete-action d-block mt-10 btn-transparent"><?php echo e(trans('public.delete')); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>

            <?php echo $__env->make(getTemplate() . '.includes.no-result',[
                'file_name' => 'edu.png',
                'title' => trans('auth.education_no_result'),
                'hint' => trans('auth.education_no_result_hint'),
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>

</section>

<div class="d-none" id="newEducationModal">
    <h3 class="section-title after-line"><?php echo e(trans('site.new_education')); ?></h3>
    <div class="mt-20 text-center">
        <img src="/assets/default/img/info.png" width="108" height="96" class="rounded-circle" alt="">
        <h4 class="font-16 mt-20 text-dark-blue font-weight-bold"><?php echo e(trans('site.new_education_hint')); ?></h4>
        <span class="d-block mt-10 text-gray font-14"><?php echo e(trans('site.new_education_exam')); ?></span>
        <div class="form-group mt-15 px-50">
            <input type="text" id="new_education_val" class="form-control">
            <div class="invalid-feedback"><?php echo e(trans('validation.required',['attribute' => 'value'])); ?></div>
        </div>
    </div>

    <div class="mt-30 d-flex align-items-center justify-content-end">
        <button type="button" id="saveEducation" class="btn btn-sm btn-primary"><?php echo e(trans('public.save')); ?></button>
        <button type="button" class="btn btn-sm btn-danger ml-10 close-swl"><?php echo e(trans('public.close')); ?></button>
    </div>
</div>
<?php /**PATH /home/hhaseso1/unicuc.emagine.solutions/resources/views/web/default/panel/setting/setting_includes/education.blade.php ENDPATH**/ ?>
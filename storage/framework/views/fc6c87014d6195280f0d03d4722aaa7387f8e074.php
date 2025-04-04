<?php
    if (!empty($itemValue) and !is_array($itemValue)) {
        $itemValue = json_decode($itemValue, true);
    }
?>


<div class="tab-pane mt-3 fade <?php if(empty(request()->get('tab'))): ?> active show <?php endif; ?>" id="basic" role="tabpanel" aria-labelledby="basic-tab">
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="<?php echo e(getAdminPanelUrl()); ?>/settings/main" method="post">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="page" value="financial">
                <input type="hidden" name="name" value="financial">


                <div class="form-group">
                    <label><?php echo e(trans('admin/main.tax')); ?></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-percentage"></i>
                            </div>
                        </div>
                        <input type="number" name="value[tax]" value="<?php echo e((!empty($itemValue) and !empty($itemValue['tax'])) ? $itemValue['tax'] : old('tax')); ?>" class="form-control text-center" maxlength="3" min="0" max="100"/>
                    </div>
                </div>


                <div class="form-group">
                    <label><?php echo e(trans('admin/main.minimum_payout_amount')); ?></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                        </div>
                        <input type="number" name="value[minimum_payout]" value="<?php echo e((!empty($itemValue) and !empty($itemValue['minimum_payout'])) ? $itemValue['minimum_payout'] : old('minimum_payout')); ?>" class="form-control text-center" min="0"/>
                    </div>
                    <div class="text-muted text-small mt-1"><?php echo e(trans('admin/main.minimum_payout_amount_hint')); ?></div>
                </div>

                <div class="form-group">
                    <label class="input-label d-block"><?php echo e(trans('update.price_display')); ?></label>
                    <select name="value[price_display]" class="form-control">
                        <option value="only_price" <?php if((!empty($itemValue) and !empty($itemValue['price_display'])) and $itemValue['price_display'] == 'only_price'): ?> selected <?php endif; ?> ><?php echo e(trans('update.display_only_price')); ?></option>
                        <option value="total_price" <?php if((!empty($itemValue) and !empty($itemValue['price_display'])) and $itemValue['price_display'] == 'total_price'): ?> selected <?php endif; ?> ><?php echo e(trans('update.display_total_price')); ?></option>
                        <option value="price_and_tax" <?php if((!empty($itemValue) and !empty($itemValue['price_display'])) and $itemValue['price_display'] == 'price_and_tax'): ?> selected <?php endif; ?> ><?php echo e(trans('update.display_price_and_tax')); ?></option>
                    </select>
                </div>

                <div class="form-group custom-switches-stacked">
                    <label class="custom-switch pl-0 d-flex align-items-center">
                        <input type="hidden" name="value[hide_disabled_payment_gateways]" value="0">
                        <input type="checkbox" name="value[hide_disabled_payment_gateways]" id="hide_disabled_payment_gatewaysSwitch" value="1" <?php echo e((!empty($itemValue) and !empty($itemValue['hide_disabled_payment_gateways']) and $itemValue['hide_disabled_payment_gateways']) ? 'checked="checked"' : ''); ?> class="custom-switch-input"/>
                        <span class="custom-switch-indicator"></span>
                        <label class="custom-switch-description mb-0 cursor-pointer" for="hide_disabled_payment_gatewaysSwitch"><?php echo e(trans('update.hide_disabled_payment_gateways')); ?></label>
                    </label>
                </div>

                <button type="submit" class="btn btn-success"><?php echo e(trans('admin/main.save_change')); ?></button>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /home/hhaseso1/unicuc.emagine.solutions/resources/views/admin/settings/financial/basic.blade.php ENDPATH**/ ?>
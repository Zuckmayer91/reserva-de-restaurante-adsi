<?php
    $fieldOptions = $field->value;
    $weekdays = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
    $index = 0;
?>
<div class="field-flexible-hours">
    <div class="row">
        <div class="col-sm-7">
            <div class="table-responsive">
                <table class="table table-stripped">
                    <thead>
                    <tr>
                        <th></th>
                        <th><?php echo app('translator')->get('thoughtco.mealtimes::default.start_time'); ?></th>
                        <th><?php echo app('translator')->get('thoughtco.mealtimes::default.end_time'); ?></th>
                        <th><?php echo app('translator')->get('thoughtco.mealtimes::default.available'); ?>></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $weekdays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $hour = (isset($fieldOptions[$key])) ? $fieldOptions[$key] : ['day' => $key, 'open' => '00:00', 'close' => '23:59', 'status' => 1]
                        ?>
                        <tr>
                            <td>
                                <span><?php echo e($day); ?></span>
                                <input
                                    type="hidden"
                                    name="<?php echo e($field->getName()); ?>[<?php echo e($index); ?>][day]"
                                    value="<?php echo e($hour['day']); ?>"/>
                            </td>
                            <td>
                                <div class="input-group" data-control="clockpicker" data-autoclose="true">
                                    <input
                                        type="text"
                                        name="<?php echo e($field->getName()); ?>[<?php echo e($index); ?>][open]"
                                        class="form-control"
                                        autocomplete="off"
                                        value="<?php echo e($hour['open']); ?>"
                                        <?php echo e($field->getAttributes()); ?>

                                    <span class="input-group-prepend">
                                <span class="input-group-icon"><i class="fa fa-clock-o"></i></span>
                            </span>
                                </div>
                            </td>
                            <td>
                                <div class="input-group" data-control="clockpicker" data-autoclose="true">
                                    <input
                                        type="text"
                                        name="<?php echo e($field->getName()); ?>[<?php echo e($index); ?>][close]"
                                        class="form-control"
                                        autocomplete="off"
                                        value="<?php echo e($hour['close']); ?>"
                                        <?php echo e($field->getAttributes()); ?>

                                    <span class="input-group-prepend">
                                <span class="input-group-icon"><i class="fa fa-clock-o"></i></span>
                            </span>
                                </div>
                            </td>
                            <td>
                                <div
                                    class="form-group switch-field"
                                    data-control="switch"
                                >
	                                <div class="field-custom-container">
	                                	<div class="custom-control custom-switch">
		                                    <input
		                                        type="checkbox"
                                                name="<?php echo e($field->getName()); ?>[<?php echo e($index); ?>][status]"
		                                        id="<?php echo e($field->getId($index.'status')); ?>"
		                                        class="custom-control-input"
		                                        value="1"
		                                        <?php echo $this->previewMode ? 'disabled="disabled"' : ''; ?>

		                                        <?php echo isset($hour['status']) && $hour['status'] == 1 ? 'checked="checked"' : ''; ?>

		                                        <?php echo $field->getAttributes(); ?>

		                                    >
		                                    <label
		                                        class="custom-control-label"
		                                        for="<?php echo e($field->getId($index.'status')); ?>"
		                                    >
		                                    	<?php echo app('translator')->get('thoughtco.mealtimes::default.available_yes_no'); ?>
		                                    </label>
	                                	</div>
	                                </div>
                                </div>
                            </td>
                        </tr>
                        <?php
                        $index++;
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php /**PATH extensions/thoughtco/mealtimes/partials/flexible.blade.php ENDPATH**/ ?>
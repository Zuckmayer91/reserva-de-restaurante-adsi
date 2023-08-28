<div
    class="filter-scope py-2"
    data-scope-name="<?php echo e($scope->scopeName); ?>">
    <div class="form-check">
        <input
            type="checkbox"
            id="<?php echo e($scope->getId()); ?>"
            class="form-check-input"
            name="<?php echo e($this->getScopeName($scope)); ?>"
            value="1"
            <?php echo $scope->value ? 'checked' : ''; ?>

            <?php echo $scope->disabled ? 'disabled="disabled"' : ''; ?>

        >
        <label
            class="form-check-label justify-content-start"
            for="<?php echo e($scope->getId()); ?>"
        ><?php echo app('translator')->get($scope->label); ?></label>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\torta/app/admin/widgets/filter/scope_checkbox.blade.php ENDPATH**/ ?>
<?php echo $this->makePartial('lists/list_button', ['record' => $theme, 'column' => $this->getColumn('source')]); ?>


<?php if($theme->getTheme()->isActive() && $theme->getTheme()->hasCustomData()): ?>
    <?php echo $this->makePartial('lists/list_button', ['record' => $theme, 'column' => $this->getColumn('edit')]); ?>

<?php endif; ?>

<?php echo $this->makePartial('lists/list_button', ['record' => $theme, 'column' => $this->getColumn('default')]); ?>


<?php echo $this->makePartial('lists/list_button', ['record' => $theme, 'column' => $this->getColumn('delete')]); ?>

<?php /**PATH C:\xampp\htdocs\torta/app/system/views/themes/lists/list_buttons.blade.php ENDPATH**/ ?>
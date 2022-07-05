<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="<?php echo e(backpack_url('dashboard')); ?>"><i class="la la-home nav-icon"></i> <?php echo e(trans('backpack::base.dashboard')); ?></a></li>
<?php if(backpack_user()->admin == true): ?>
    <li class='nav-item'><a class='nav-link' href='<?php echo e(backpack_url('user')); ?>'><i class='nav-icon la la-question'></i> Users</a></li>
<?php endif; ?>
<li class='nav-item'><a class='nav-link' href='<?php echo e(backpack_url('book')); ?>'><i class='nav-icon la la-question'></i> Books</a></li>
<li class='nav-item'><a class='nav-link' href='<?php echo e(backpack_url('category')); ?>'><i class='nav-icon la la-question'></i> Categories</a></li>
<li class='nav-item'><a class='nav-link' href='<?php echo e(backpack_url('book-borrowing')); ?>'><i class='nav-icon la la-question'></i> Book borrowings</a></li>
<li class='nav-item'><a class='nav-link' href='<?php echo e(backpack_url('borrower')); ?>'><i class='nav-icon la la-question'></i> Borrowers</a></li><?php /**PATH G:\project\Library\resources\views/vendor/backpack/base/inc/sidebar_content.blade.php ENDPATH**/ ?>
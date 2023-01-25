<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>" >
<style>
    .invalid-feedback {
    display: block !important;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #dc3545;
}
</style>
<div style="padding: 40px;">
<?php if(\Session::has('error')): ?>
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">
        x
    </button>
    <strong><?php echo e(\Session::get('error')); ?></strong>
</div>
<?php endif; ?>
<?php if(\Session::has('success')): ?>
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">
        x
    </button>
    <strong><?php echo e(\Session::get('success')); ?></strong>
</div>
<?php endif; ?>
<form method="POST" action="<?php echo e(route('booking.store')); ?>" enctype="multipart/form-data" id="manage-user-form">

<?php echo e(csrf_field()); ?>


    <div class="grid custom-row">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" value="<?php echo e(old('customer_name', '')); ?>" name="customer_name" class="form-control" id="customer_name" placeholder="Enter name">
            <span class="invalid-feedback" role="alert">
            <?php $__errorArgs = ['customer_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <strong><?php echo e($message); ?></strong>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </span>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" value="<?php echo e(old('email', '')); ?>" class="form-control" id="email" placeholder="Enter email">
       <span class="invalid-feedback" role="alert">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <strong><?php echo e($message); ?></strong>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </span>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" name="phone" value="<?php echo e(old('phone', '')); ?>" class="form-control" id="phone" placeholder="Enter phone">
        <span class="invalid-feedback" role="alert">
            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <strong><?php echo e($message); ?></strong>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </span>
        </div>
        <div class="form-group">
            <label for="vehicle_id">Vehicle</label>
            <select class="form-control" name="vehicle_id" id="vehicle_id">
            <option value="">Select</option>
            <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($k); ?>"><?php echo e(htmlentities($v)); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <span class="invalid-feedback" role="alert">
            <?php $__errorArgs = ['vehicle_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <strong><?php echo e($message); ?></strong>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </span>
        </div>

        <label for="">Booking Type: </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="booking_type" id="inlineRadio1" value="full-day">
            <label class="form-check-label" for="inlineRadio1">Full Day</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="booking_type" id="inlineRadio2" value="half-day">
            <label class="form-check-label" for="inlineRadio2">Half Day</label>
        </div>
        <span class="invalid-feedback" role="alert">
            <?php $__errorArgs = ['booking_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <strong><?php echo e($message); ?></strong>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </span>


        <div class="form-group">
            <label for="exampleInputEmail1">Booking Date</label>
            <input type="date" id="booking_date" name="booking_date" value="<?php echo e(old('booking_date', '')); ?>">
        <span class="invalid-feedback" role="alert">
            <?php $__errorArgs = ['booking_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <strong><?php echo e($message); ?></strong>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </span>
        </div>

        <label for="">Booking Shift: </label>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="booking_shift" id="inlineRadio11" value="morning">
            <label class="form-check-label" for="inlineRadio11">Morning</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="booking_shift" id="inlineRadio21" value="evening">
            <label class="form-check-label" for="inlineRadio21">Evening</label>
        </div>
        <span class="invalid-feedback" role="alert">
            <?php $__errorArgs = ['booking_shift'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <strong><?php echo e($message); ?></strong>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </span>

        <div class="form-col form-col-full">
            <div class="user-screen-btn-wrapper">
                <button type="submit" class="login-btn btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</form>
</div>
<?php /**PATH C:\wamp64\www\example-app\resources\views/booking/create.blade.php ENDPATH**/ ?>
<?php $__env->startSection('dashboardcontent'); ?>
<!-- ================================ links Causes Content Start ========================================================================= -->
<!-- / .main-navbar -->
  <?php if($message = Session::get('success')): ?>
  <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Success!</strong> <?php echo e($message); ?></div>
  <?php endif; ?>
  <!-- ================================ dashboard Causes  ========================================================================= -->
  <?php if($message = Session::get('Delete')): ?>
  <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Delete!</strong> <?php echo e($message); ?> </div>
  <?php endif; ?>
  <!-- ================================ dashboard Causes  ========================================================================= -->
    <div class="main-content-container container-fluid px-4">
      <!-- Page Header -->
      <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
          <span class="text-uppercase page-subtitle">Overview</span>
          <h3 class="page-title"><i class="icon-material-outline-assignment"></i> Causes 
            <a href="<?php echo e(route('dashboardCauses.create')); ?>" class="mb-2 btn btn-success mr-2">
              <i class="icon-material-outline-add-circle-outline"></i> Add New</a>
          </h3>  
          </div>
        </div>
        <!-- ================================ dashboard Causes  ========================================================================= -->
        <div class="row">
          <div class="col-lg-12 mb-4">
            <div class="card card-small lo-stats h-100">
              <div class="card-header border-bottom">
                <h6 class="m-0">Latest Causes</h6>
                <div class="block-handle"></div>
              </div>
              <div class="card-body p-0">
                <div class="container-fluid px-0">
                  <table class="table mb-0">
                    <thead class="py-2 bg-light text-semibold border-bottom">
                      <tr>
                        <th>Details</th>
                        <th>Details</th>
                        <th class="text-center">Category</th>
                        <th class="text-center">Raised</th>
                        <th class="text-center">Goal</th>
                        <th class="text-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- ================================ dashboard Causes  ========================================================================= -->
                      <?php $__currentLoopData = $Causes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Cause): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td class="lo-stats__image">
                          <img class="border rounded" src="<?php echo asset($Cause->image); ?>">
                        </td>
                        <td class="lo-stats__order-details">
                          <span><?php echo substr($Cause->Title_en, 0, 190); ?></span>
                          <span><?php echo e(date('M j, Y', strtotime($Cause->created_at))); ?></span>
                        </td>
                        <!-- ================================ dashboard Causes  ========================================================================= -->
                        <td class="lo-stats__status">
                          <div class="d-table mx-auto">
                          <?php if(isset($Cause->Category->title)): ?>
                           <span class="badge badge-pill badge-success"><?php echo e($Cause->Category->title); ?></span>
                          <?php else: ?>
                           <span class="badge badge-pill badge-danger">No Category</span>
                          <?php endif; ?>
                          </div>
                        </td>
                        <!-- ================================ dashboard Causes  ========================================================================= -->
                        <td class="lo-stats__items text-center"><?php echo e($Cause->Raised); ?></td>
                        <td class="lo-stats__total text-center text-success"><?php echo e($Cause->Goal); ?></td>
                        <td class="lo-stats__actions">
                          <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
                          <a href="<?php echo e(URL::to('dashboard/dashboardCauses')); ?>/<?php echo e($Cause->slug); ?>/edit" class="mb-2 btn btn-sm btn-primary">
                          <i class="icon-feather-edit-2"></i> Edit</a>
                          <form action="<?php echo e(route('dashboardCauses.destroy',$Cause->id)); ?>" method="POST" files="true" style="display: inline-block;">
                          <?php echo csrf_field(); ?>
                          <!-- ================================ dashboard Causes  ========================================================================= -->
                          <?php echo method_field('DELETE'); ?>
                            <button class="mb-2 btn btn-sm btn-danger" type="submit"><i class="icon-material-outline-delete"></i> Delete</button>
                          </form>

                          </div>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <!-- ================================ dashboard Causes  ========================================================================= -->
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer border-top">
                <div class="row">
                  <div class="col">
                     <!-- ================================ dashboard Causes  ========================================================================= -->
                     <?php echo $Causes->links(); ?>

                     <!-- ================================ dashboard Causes  ========================================================================= -->
                  </div>
                  <div class="col text-right view-report">
                    <!-- ================================ dashboard Causes  ========================================================================= -->
                    <?php if(COUNT($Causes) != NULL): ?>
                    <a>Showing 10 to <?php echo e(COUNT($Causes)); ?> of <?php echo e(COUNT($Causes)); ?> Causes</a>
                    <?php else: ?>
                    <a>Showing 10 to 0 of 0 Causes</a>
                    <?php endif; ?>
                    <!-- ================================ dashboard Causes  ========================================================================= -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Default Light Table -->
        <!-- Default Dark Table -->
        
        <!-- End Default Dark Table -->
      </div>
      <!-- ================================ links Causes Content Start ========================================================================= -->
      <?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/insanberbagi/insanberbagi/Charity/resources/views/dashboard/dashboardCauses/index.blade.php ENDPATH**/ ?>
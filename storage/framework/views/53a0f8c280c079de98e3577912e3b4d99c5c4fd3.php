 
<?php $__env->startSection('title', 'Add Questions'); ?>
<?php $__env->startSection('content'); ?>

  <div class="row">
    <section class="content">
      <div class="col-md-8 col-md-offset-2">
	  
	    <?php if(count($errors) > 0): ?>
          <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>

			<ul>
			  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <li><?php echo e($error); ?></li>
			  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>

	    <?php endif; ?>

	    <?php if(Session::has('success')): ?>
          <div class="alert alert-info">
		    <?php echo e(Session::get('success')); ?>

		  </div>
		<?php endif; ?>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Add a Question</h3>
		  </div>
		<div class="panel-body">
		  <div class="table-container">
		    <form method="POST" action="<?php echo e(route('question.store')); ?>"  role="form">
    		<?php echo e(csrf_field()); ?>

			  <div class="row">
			    <div class="col-sm-12 ">
			      <div class="form-group">
			        <textarea name="question" class="form-control input-sm" placeholder="Description">
			      	</textarea>
			      </div>
			    </div>
			    
			    <div class="col-xs-6 col-sm-6 col-md-6">
			      <div class="form-group">
			        <input type="text" name="correct_answer" id="correct_answer" class="form-control input-sm" placeholder="Correct Answer">
			      </div>
			    </div>

			    <div class="col-xs-6 col-sm-6 col-md-6">
			      <div class="form-group">
			        <input type="text" name="wrong_option1" id="wrong_option1" class="form-control input-sm" placeholder="Wrong Option1">
			      </div>
			    </div>

			    <div class="col-xs-6 col-sm-6 col-md-6">
			      <div class="form-group">
			        <input type="text" name="wrong_option2" id="wrong_option1" class="form-control input-sm" placeholder="Wrong Option2">
			      </div>
			    </div>

			    <div class="col-xs-6 col-sm-6 col-md-6">
			      <div class="form-group">
			        <input type="text" name="wrong_option3" id="wrong_option1" class="form-control input-sm" placeholder="Wrong Option3">
			      </div>
			    </div>
			  </div>

			
    		  <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
			      <div class="col-xs-2 col-sm-2 col-md-2">
				    <a href="<?php echo e(route('question.index')); ?>" class="btn btn-info btn-block" >Back</a>
				   </div>
                  <div class="col-xs-2 col-sm-2 col-md-2">
			        <input type="submit"  value="Save" class="btn btn-success btn-block">
			      </div>
			  </div>	
							
		      </div>
		    </form>
		  </div>
		</div>

	  </div>
	</div>
  </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
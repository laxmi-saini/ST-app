<?php $__env->startSection('title', 'Questions'); ?>
<?php $__env->startSection('content'); ?>
	<div class="row">
    <section class="content">
		  <div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
					<div class="pull-left"><h3>List Questions</h3></div>

					<div class="pull-right">
					  <div class="btn-group">
						  <a href="<?php echo e(route('question.create')); ?>" class="btn btn-info" >Add New</a>
						</div>
					</div>

					<div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">                   
              <thead>                   
                <th><input type="checkbox" id="checkall" /></th>
                <th>Question</th>
                <th>Correct Answer</th>
                <th>Option 2</th>
                <th>Option 3</th>
                <th>Option 4</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
              </thead>

              <tbody>
              <?php if($questions->count()): ?>  
                <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                  <tr>
                    <td><input type="checkbox" class="checkthis" /></td>
                    <td><?php echo e($question->question); ?></td>
                    <td><?php echo e($question->correct_answer); ?></td>
                    <td><?php echo e($question->wrong_option1); ?></td>
                    <td><?php echo e($question->wrong_option2); ?></td>
                    <td><?php echo e($question->wrong_option3); ?></td>
                    <td>
                      <span class="label label-<?php echo e(($question->status) ? 'success' : 'danger'); ?>"> 
                      <?php echo e(($question->status) ? ' Active ' : 'Inactive'); ?>

                      </span>
                    </td>
                    <td>
                      <a class="btn btn-primary btn-xs" href="<?php echo e(action('QuestionController@show', $question->id)); ?>" >
                        <span class="glyphicon glyphicon-eye-open"></span>
                      </a>
                    </td>
                    <td>
                      <a class="btn btn-primary btn-xs" href="<?php echo e(action('QuestionController@edit', $question->id)); ?>" >
                        <span class="glyphicon glyphicon-pencil"></span>
                      </a>
                    </td>
                    <td>
                      <form action="<?php echo e(action('QuestionController@destroy', $question->id)); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input name="_method" type="hidden" value="DELETE">
   
                        <button class="btn btn-danger btn-xs" type="submit">
                          <span class="glyphicon glyphicon-trash"></span>
                        </button>
                    </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              <?php else: ?>
                <tr>
                  <td colspan="7">No Records found !!</td>
                </tr>
              <?php endif; ?>
              </tbody>
            </table>
          </div>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
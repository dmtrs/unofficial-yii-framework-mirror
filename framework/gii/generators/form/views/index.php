<h1>Form Generator</h1>

<p>This generator generates a view script file that displays a form to collect input for the specified model class.</p>

<div class="form gii">

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php $form=$this->beginWidget('CActiveForm'); ?>

		<div class="row">
			<?php echo $form->labelEx($model,'model'); ?>
			<?php echo $form->textField($model,'model', array('size'=>65)); ?>
			<div class="tooltip">
				Model class is case-sensitive. It can be either a class name (e.g. "Post")
			    or the path alias of the class file (e.g. "application.models.LoginForm").
			    Note that if the former, the class must be auto-loadable.
			</div>
			<?php echo $form->error($model,'model'); ?>
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'view'); ?>
			<?php echo $form->textField($model,'view', array('size'=>65)); ?>
			<div class="tooltip">
				This refers to the name of the view script to be generated. It should be
				specified in  the form of a path alias, e.g., 'application.views.site.contact',
				'mymodule.views.default.search'.
			</div>
			<?php echo $form->error($model,'view'); ?>
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'scenario'); ?>
			<?php echo $form->textField($model,'scenario', array('size'=>65)); ?>
			<div class="tooltip">
				This refers to the scenario in which the model should be used to collect user input.
				For example, a 'User' model can be used in both 'login' and 'register' scenarios.
				To create a form for the login purpose, the scenario should be specified as 'login'.
				Leave this empty if the model does not need to differentiate scenarios.
			</div>
			<?php echo $form->error($model,'scenario'); ?>
		</div>

		<?php $this->renderGenerator($model, $form); ?>

	<?php $this->endWidget(); ?>
</div>

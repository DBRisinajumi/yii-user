<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(
	UserModule::t("Login"),
);
?>

<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

<div class="alert alert-success">
	<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
</div>

<?php endif; ?>

<p><?php echo UserModule::t("Please fill out the following form with your login credentials:"); ?></p>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
	'enableAjaxValidation'=>true,
        'htmlOptions'=>array('class' => 'well',),
)); ?>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row-fluid">
		<?php echo $form->textFieldRow($model,'username') ?>
	</div>
	
	<div class="row-fluid">
		<?php echo $form->passwordFieldRow($model,'password') ?>
	</div>
	
	<div class="row-fluid">
		<p class="help-block">
		<?php echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl); ?> | <?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>
		</p>
	</div>
	
	<div class="row-fluid rememberMe">
		<?php echo $form->checkBoxRow($model,'rememberMe'); ?>
	</div>

	<div class="row-fluid submit">
            <?php 
                $this->widget('bootstrap.widgets.TbButton',array(
                    'label' => UserModule::t("Login"),
                    'type' => 'primary',
                    'buttonType' => 'submit',
                    'size' => 'medium'
                ));
            ?>
	</div>
	
<?php $this->endWidget(); ?>


<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>
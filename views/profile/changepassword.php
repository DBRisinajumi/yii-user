<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Change password");
$this->breadcrumbs=array(
	UserModule::t("Profile") => array('/user/profile'),
	UserModule::t("Change password"),
);
$this->menu=array(
	((UserModule::isAdmin())
		?array('label'=>UserModule::t('Manage Users'), 'url'=>array('/user/admin'))
		:array()),
	((UserModule::isAdmin())
                ?array('label'=>UserModule::t('List User'), 'url'=>array('/user'))
		:array()),
    array('label'=>UserModule::t('Profile'), 'url'=>array('/user/profile')),
    array('label'=>UserModule::t('Edit'), 'url'=>array('edit')),
    array('label'=>UserModule::t('Logout'), 'url'=>array('/user/logout')),
);
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'changepassword-form',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row-fluid">
	<?php echo $form->passwordFieldRow($model,'oldPassword'); ?>
	</div>
	
	<div class="row-fluid">
	<?php echo $form->passwordFieldRow($model,'password'); ?>
	<p class="help-block">
	<?php echo UserModule::t("Minimal password length 4 symbols."); ?>
	</p>
	</div>
	
	<div class="row-fluid">
	<?php echo $form->passwordFieldRow($model,'verifyPassword'); ?>
	</div>
	
	
	<div class="row-fluid submit">
          <?php 
                $this->widget('bootstrap.widgets.TbButton',array(
                    'label' => UserModule::t("Save"),
                    'type' => 'primary',
                    'buttonType' => 'submit',
                    'size' => 'medium'
                ));
            ?>
	</div>

<?php $this->endWidget(); ?>

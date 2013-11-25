<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Change password");
$this->breadcrumbs=array(
	UserModule::t("Login") => array('/user/login'),
	UserModule::t("Change password"),
);
?>

<h1><?php echo UserModule::t("Change password"); ?></h1>


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm'); ?>

	<?php echo $form->errorSummary($model); ?>
	
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

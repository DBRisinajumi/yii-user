<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Restore");
$this->breadcrumbs=array(
	UserModule::t("Login") => array('/user/login'),
	UserModule::t("Restore"),
);
?>

<h1><?php echo UserModule::t("Restore"); ?></h1>

<?php if(Yii::app()->user->hasFlash('recoveryMessage')): ?>
<div class="alert alert-success">
<?php echo Yii::app()->user->getFlash('recoveryMessage'); ?>
</div>
<?php else: ?>

<?php $model = $form; $form=$this->beginWidget('bootstrap.widgets.TbActiveForm'); ?>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row-fluid">
		<?php echo $form->textField($model,'login_or_email') ?>
		<p class="help-block"><?php echo UserModule::t("Please enter your login or email addres."); ?></p>
	</div>
	
	<div class="row-fluid submit">
            <?php
                $this->widget('bootstrap.widgets.TbButton',array(
                    'label' => UserModule::t("Restore"),
                    'type' => 'primary',
                    'buttonType' => 'submit',
                    'size' => 'medium'
                ));
            ?>
	</div>

<?php $this->endWidget(); ?>
<?php endif; ?>
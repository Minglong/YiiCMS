<?php
$this->pageTitle = Yii::app()->name.' - '.Yii::t('page', 'Update Page');

$this->menu=array(
	array('label'=>Yii::t('page', 'Create Page'), 'url'=>array('create')),
	array('label'=>Yii::t('page', 'Manage Pages'), 'url'=>array('admin')),
	//array('label'=>Yii::t('page', 'Preview'), 'url'=>array('/blog/page/view', 'id'=>$model->id)),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

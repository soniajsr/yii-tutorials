<?php
$this->breadcrumbs=array(
	'Ciudads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ciudad', 'url'=>array('index')),
	array('label'=>'Manage Ciudad', 'url'=>array('admin')),
);
?>

<h1>Create Ciudad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
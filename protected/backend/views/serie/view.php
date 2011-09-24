<?php
$this->breadcrumbs=array(
	'Series'=>array('index'),
	$model->cod_serie,
);
?>

<h2>Visualizar serie</h2>

<?php $this->widget('backend.extensions.widgets.CDetailViewUI', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_serie',
		'desc_serie',
	),
)); ?>

<h2 class="ui-widget-header">Descricao</h2>
<div class="perfil ui-widget-content">
 </div>
<br />
<br />

<?php echo CHtml::link('<span class="ui-icon ui-icon-pencil"></span>Editar', array('serie/update','id'=>$model->id), array('class'=>'btn ui-state-default ui-corner-all')) ?>

 <?php echo CHtml::linkButton('<span class="ui-icon ui-icon-closethick"></span>Excluir',array(
'submit'=>array('/serie/delete','id'=>$model->id),
'class'=>'btn ui-state-default ui-corner-all',
'confirm'=>'Deseja realmente excluir este usuário?',
)); ?>

<?php echo CHtml::link('<span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Cancelar', array('/serie/index'), array('class'=>'btn ui-state-default ui-corner-all')) ?>


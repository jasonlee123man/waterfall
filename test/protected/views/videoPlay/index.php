<?php
/* @var $this VideoPlayController */

$this->breadcrumbs=array(
	'Video Play',
);
?>
<h1><?php //echo $this->id . '/' . $this->action->id; ?></h1>
<?php 

 
    $this->widget('ext.Yiippod.Yiippod', array(
    'video'=>"Yii::app()->baseUrl/upload/111.mp4", //if you don't use playlist
    //'video'=>"http://www.youtube.com/watch?v=qD2olIdUGd8", //if you use playlist
    'id' => 'yiippodplayer',
    'autoplay'=>true,
    'width'=>640,
    'view'=>6, 
    'height'=>480,
    'bgcolor'=>'#000'
    ));
?>

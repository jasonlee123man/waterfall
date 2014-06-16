<?php

class VideoListController extends Controller
{
	public $layout='//layouts/waterFall';
	 
	public function actionIndex()
	{
		$ret = 	Pictures::model()->findAll(array("order"=>'id desc'));
		$url=Yii::app()->basePath."/../images/upload/";
		$items=array();
		foreach ($ret as $v)
		{
			$item['url']= $url.$v->pic;
			$image = getimagesize("$url$v->pic");
			$item['width'] = $image[0];
			$item['height'] = $image[1];
			array_push($items, $item);
		}
		$this->render('index',array('items'=>$items));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
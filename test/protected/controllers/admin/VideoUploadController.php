<?php

class VideoUploadController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
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
	/*
	 * 上传视频
	 */
	public function actionUpload()
	{
	 
	        Yii::import("ext.EAjaxUpload.qqFileUploader");
	 
	        $folder=Yii::getPathOfAlias('webroot').'/upload/';// folder for uploaded files
//	        var_dump($folder);exit();
	        $allowedExtensions = array("jpg","jpeg","gif","exe","mov","mp4");//array("jpg","jpeg","gif","exe","mov" and etc...
	        $sizeLimit = 100 * 1024 * 1024;// maximum file size in bytes
	        $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
	        $result = $uploader->handleUpload($folder);
	        $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);
	 
	        $fileSize=filesize($folder.$result['filename']);//GETTING FILE SIZE
	        $fileName=$result['filename'];//GETTING FILE NAME
	        //$img = CUploadedFile::getInstance($model,'image');
	 
	        echo $return;// it's array
	}
}
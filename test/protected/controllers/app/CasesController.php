<?php

class CasesController extends Controller
{
	private $_cs;
	/*
	 * 构造函数
	 * @param $id
	 * @param null $module
	 */
	public function __construct($id,$module=null)
	{
		parent::__construct($id,$module);
		$this->_cs = new caseService();
	}
	
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
	 * 提交病例
	 */
	public function actionCaseSubmit()
	{
		$ret = $this->_cs->caseSubmit($_POST);
	}
}
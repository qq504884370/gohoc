<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SitePhoneController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
	public $layout="phonegohoc";
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionProject()
    {
        return $this->render('project');
    }
    public function actionProjectThought()
    {
        return $this->render('thought');
    }
    public function actionProjectFunny()
    {
        return $this->render('funny');
    }
    public function actionProjectMute()
    {
        return $this->render('mute');
    }
    public function actionProjectFriend()
    {
        return $this->render('friend');
    }
    public function actionProjectZhou()
    {
        return $this->render('zhou');
    }
    public function actionProjectEnzo()
    {
        return $this->render('enzo');
    }
    public function actionProjectIshare()
    {
        return $this->render('ishare');
    }
    public function actionProjectWealth()
    {
        return $this->render('wealth');
    }
}

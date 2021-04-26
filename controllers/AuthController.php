<?php

namespace app\controllers;

use app\helpers\Api;
use app\helpers\Route;
use app\models\User;
use yii\web\Controller;
use yii\web\Request;

class AuthController extends Controller
{

    public function actionSignin()
    {
        return $this->render('signin');
    }

    public function actionSignup()
    {
        return $this->render('signup');
    }

    









    public function actionLoginPost(Request $request)
    {
        $inputs = $request->getBodyParams();
        $user = User::find()->where(['email' => $inputs['email']])->one();
        if(!empty($user))
        {
            if($user->password == md5($inputs['password']))
            {
                $_SESSION['email'] = $inputs['email'];
                return Api::success($this,'You have successfully logged In.',Route::make('/user/profile'));
            }
            else
            {
                return Api::error($this,'Wrong password! try again');
            }
        }
        else
        {
            return Api::error($this,'You dont have account. Signup please');
        }

    }
    
 
}

<?php
namespace app\helpers;

use yii\web\JsonParser;

class Api
{
    public static function success($_this,$message,$redirect=null,$data = [])
    {
        $arr = [
            'status' => 'success',
            'message' => $message,
            'redirect' => $redirect,
            'data' => $data
        ];
        return $_this->asJson($arr);
    }


    public static function error($_this,$message,$data = [])
    {
        $arr = [
            'status' => 'error',
            'message' => $message,
            'data' => $data
        ];
        return $_this->asJson($arr);
    }

    public static function warning($_this,$message,$data = [])
    {
        $arr = [
            'status' => 'warning',
            'message' => $message,
            'data' => $data
        ];
        return $_this->asJson($arr);
    }
}
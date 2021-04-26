<?php
namespace app\helpers;

use Yii;
use yii\web\JsonParser;

class Route
{
    public static function make($route,$params=null)
    {
        $url = Yii::$app->request->getBaseUrl().'/index.php' .$route;
        if(!empty($params))
        {
            return $url .'?'.$params;
        }
        else
        {
            return $url;
        }
    }

    public static function base()
    {
        return Yii::$app->request->getBaseUrl();
    }
}
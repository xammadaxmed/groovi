<?php
namespace app\helpers;

use Yii;

class Token{
    public static function csrf()
    {
        $fieldName = Yii::$app->request->csrfParam;
        $tokenValue = Yii::$app->request->csrfToken;
        return "<input type='hidden' name='$fieldName' value='$tokenValue' />";
    }
}
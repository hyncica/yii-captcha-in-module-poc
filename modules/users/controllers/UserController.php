<?php
/**
 * Author: Michal Hynčica <michal@hyncica.eu>
 * Date: 27.03.2023
 */

declare(strict_types=1);

namespace app\modules\users\controllers;

use app\modules\users\models\User;
use Yii;
use yii\captcha\CaptchaAction;
use yii\helpers\VarDumper;
use yii\web\Controller;

class UserController extends Controller
{
    public function actions(): array
    {
        return [
            'captcha' => [
                'class' => CaptchaAction::class,
            ],
        ];
    }

    /**
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public function actionCreate(): string
    {
        $model = Yii::createObject(User::class);
        if ($model->load($this->request->post())) {
            if ($model->validate()) {
                echo "OK";
                exit;
            } else {
                VarDumper::dump($model->getErrors());
                exit;
            }
        }

        return $this->render('create', ['model' => $model]);
    }
}

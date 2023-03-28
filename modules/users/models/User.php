<?php
/**
 * Author: Michal Hynčica <michal@hyncica.eu>
 * Date: 27.03.2023
 */

declare(strict_types=1);

namespace app\modules\users\models;

class User extends \yii\base\Model
{
    public string $captcha = '';

    public function rules(): array
    {
        return [
            [
                'captcha',
                'captcha',
                'captchaAction' => 'users/user/captcha',
                // uncomment following line to test server side invalid code validation
                // 'enableClientValidation' => false,
            ],
        ];
    }
}

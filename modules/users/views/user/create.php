<?php
/**
 * Author: Michal Hynčica <michal@hyncica.eu>
 * Date: 27.03.2023
 */

declare(strict_types=1);

/**
 * @var \yii\web\View $this
 * @var \app\modules\users\models\User $model
 */

use yii\captcha\Captcha;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'captcha')->widget(Captcha::class, [
        'captchaAction' => 'user/captcha',
    ]); ?>
    <?= \yii\helpers\Html::submitButton(); ?>
<?php ActiveForm::end(); ?>

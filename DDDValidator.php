<?php

namespace parallaxsolutions\brutils;

use Yii;
use yii\validators\Validator;
use yii\helpers\Json;

class DDDValidator extends Validator {

    /**
     * @inheritdoc
     */
    public function init() {
        parent::init();
        if ($this->message === null) {
            $this->message = Yii::t('yii', "{attribute} is invalid.");
        }
    }

    /**
     * @inheritdoc
     */
    protected function validateValue($value) {
        $valid = in_array($value, PhoneUtils::$VALID_DDD);
        return ($valid) ? [] : [$this->message, []];
    }

    /**
     * @inheritdoc
     */
    public function clientValidateAttribute($object, $attribute, $view) {
        $options = [
            'message' => Yii::$app->getI18n()->format($this->message, [
                'attribute' => $object->getAttributeLabel($attribute),
                    ], Yii::$app->language),
            'VALID_DDD' => json_encode(PhoneUtils::$VALID_DDD),
        ];

        if ($this->skipOnEmpty) {
            $options['skipOnEmpty'] = 1;
        }

        ValidationAsset::register($view);
        return 'parallaxsolutions.brutilsvalidators.ddd(value, messages, ' . Json::encode($options) . ');';
    }

}

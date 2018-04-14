<?php

namespace api\models\ar;

use yii\db\ActiveRecord;

/**
 * Class Machine.
 *
 * @package api\models\ar
 *
 * @property int $id
 */
class Machine extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%machine}}';
    }
}

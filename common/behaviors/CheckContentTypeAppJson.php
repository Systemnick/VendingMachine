<?php

namespace common\behaviors;

use api\exceptions\VMBadRequestException;
use Yii;
use yii\base\Application;
use yii\base\Behavior;
use yii\base\Event;

class CheckContentTypeAppJson extends Behavior
{
    const MIME_TYPE_JSON = 'application/json';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        Yii::$app->on(Application::EVENT_BEFORE_REQUEST, [$this, 'afterIsAppJson']);
    }

    /**
     * @param \yii\base\Event $event Event.
     *
     * @throws VMBadRequestException
     * @throws \yii\base\InvalidConfigException
     * @see https://www.ietf.org/rfc/rfc2045.txt
     */
    public function afterIsAppJson(Event $event)
    {
        if (Yii::$app->request->getRawBody()) {

            if (!$this->checkContentType(self::MIME_TYPE_JSON, Yii::$app->request->getHeaders()->get('content-type'))) {

                Yii::error('Bad Request. Content-Type "application/json" was not set.'
                    . "\n Url: \n"
                    . print_r(Yii::$app->request->getUrl(), true)
                    . "\n Headers body: \n"
                    . print_r(Yii::$app->request->getHeaders()->toArray(), true)
                    . "\n Raw body: \n"
                    . print_r(Yii::$app->request->getRawBody(), true), 'ApiRequests');

                throw new VMBadRequestException('Bad Request. Content-Type "application/json" was not set.');
            }
        }
    }


    /**
     * Search the specified type.
     *
     * @param string $type Specify the type of search.
     * @param string $headers Where exactly are looking for.
     * @param string $delimiter Separator in line.
     *
     * @return bool
     */
    private function checkContentType($type, $headers = null, $delimiter = ';')
    {
        $contentType = explode($delimiter, $headers);
        $flag = false;
        foreach ($contentType as $typev) {
            if ($typev == $type) {
                $flag = true;
            }
        }
        return $flag;
    }
}

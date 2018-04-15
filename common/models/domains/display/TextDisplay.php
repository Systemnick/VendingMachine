<?php

namespace common\models\domains\display;

/**
 * Class TextDisplay.
 *
 * @package common\models\domains\display
 */
class TextDisplay implements TextDisplayInterface
{
    /** @var string */
    protected $text;

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return TextDisplay
     */
    public function setText(string $text): TextDisplay
    {
        $this->text = $text;
        return $this;
    }
}

<?php

namespace common\models\domains\display;

/**
 * Interface TextDisplayInterface.
 *
 * @package common\models\domains\display
 */
interface TextDisplayInterface
{
    /**
     * Show some text.
     *
     * @param string $text
     *
     * @return TextDisplay
     */
    public function setText(string $text): TextDisplay;
}

<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\MessageBuilder;

use LINE\LINEBot\Constant\MessageType;
use LINE\LINEBot\MessageBuilder;
<<<<<<< HEAD
=======
use LINE\LINEBot\QuickReplyBuilder;
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903

/**
 * A builder class for text message.
 *
 * @package LINE\LINEBot\MessageBuilder
 */
class TextMessageBuilder implements MessageBuilder
{
    /** @var string[] */
    private $texts;
<<<<<<< HEAD
    /** @var array */
    private $message = [];

=======

    /** @var array */
    private $message = [];

    /** @var QuickReplyBuilder|null */
    private $quickReply;

>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    /**
     * TextMessageBuilder constructor.
     *
     * Exact signature of this constructor is <code>new TextMessageBuilder(string $text, string[] $extraTexts)</code>.
     *
     * Means, this constructor can also receive multiple messages like so;
     *
     * <code>
     * $textBuilder = new TextMessageBuilder('text', 'extra text1', 'extra text2', ...);
     * </code>
     *
     * @param string $text
     * @param string[]|null $extraTexts
     */
    public function __construct($text, $extraTexts = null)
    {
<<<<<<< HEAD
        $extra = [];
        if (!is_null($extraTexts)) {
            $args = func_get_args();
            $extra = array_slice($args, 1);
        }
        $this->texts = array_merge([$text], $extra);
=======
        $extras = [];
        if (! is_null($extraTexts)) {
            $args = func_get_args();
            $extras = array_slice($args, 1);

            foreach ($extras as $key => $extra) {
                if ($extra instanceof QuickReplyBuilder) {
                    $this->quickReply = $extra;
                    unset($extras[$key]);
                    break;
                }
            }
            $extras = array_values($extras);
        }
        $this->texts = array_merge([$text], $extras);
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    }

    /**
     * Builds text message structure.
     *
     * @return array
     */
    public function buildMessage()
    {
<<<<<<< HEAD
        if (!empty($this->message)) {
=======
        if (! empty($this->message)) {
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
            return $this->message;
        }

        foreach ($this->texts as $text) {
            $this->message[] = [
                'type' => MessageType::TEXT,
                'text' => $text,
            ];
        }

<<<<<<< HEAD
=======
        if ($this->quickReply) {
            $lastKey = count($this->message) - 1;

            //If the user receives multiple message objects.
            //The quickReply property of the last message object is displayed.
            $this->message[$lastKey]['quickReply'] = $this->quickReply->buildQuickReply();
        }

>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
        return $this->message;
    }
}

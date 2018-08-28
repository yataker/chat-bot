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
 * A builder class for audio message.
 *
 * @package LINE\LINEBot\MessageBuilder
 */
class AudioMessageBuilder implements MessageBuilder
{
    /** @var string */
    private $originalContentUrl;
<<<<<<< HEAD
    /** @var int */
    private $duration;

=======

    /** @var int */
    private $duration;

    /** @var array */
    private $message = [];

    /** @var QuickReplyBuilder|null */
    private $quickReply;

>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    /**
     * AudioMessageBuilder constructor.
     *
     * @param string $originalContentUrl URL that serves audio file.
     * @param int $duration Duration of audio file (milli seconds)
<<<<<<< HEAD
     */
    public function __construct($originalContentUrl, $duration)
    {
        $this->originalContentUrl = $originalContentUrl;
        $this->duration = $duration;
    }

    /**
     * Builds
=======
     * @param QuickReplyBuilder|null $quickReply
     */
    public function __construct($originalContentUrl, $duration, QuickReplyBuilder $quickReply = null)
    {
        $this->originalContentUrl = $originalContentUrl;
        $this->duration = $duration;
        $this->quickReply = $quickReply;
    }

    /**
     * Build audio message structure.
     *
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
     * @return array
     */
    public function buildMessage()
    {
<<<<<<< HEAD
        return [
            [
                'type' => MessageType::AUDIO,
                'originalContentUrl' => $this->originalContentUrl,
                'duration' => $this->duration,
            ]
        ];
=======
        if (! empty($this->message)) {
            return $this->message;
        }

        $audioMessage = [
            'type' => MessageType::AUDIO,
            'originalContentUrl' => $this->originalContentUrl,
            'duration' => $this->duration,
        ];

        if ($this->quickReply) {
            $audioMessage['quickReply'] = $this->quickReply->buildQuickReply();
        }

        $this->message[] = $audioMessage;

        return $this->message;
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    }
}

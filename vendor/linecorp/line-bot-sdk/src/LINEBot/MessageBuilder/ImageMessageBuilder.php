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
 * A builder class for image message.
 *
 * @package LINE\LINEBot\MessageBuilder
 */
class ImageMessageBuilder implements MessageBuilder
{
    /** @var string */
    private $originalContentUrl;
<<<<<<< HEAD
    /** @var string */
    private $previewImageUrl;

=======

    /** @var string */
    private $previewImageUrl;

    /** @var array */
    private $message = [];

    /** @var QuickReplyBuilder|null */
    private $quickReply;

>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    /**
     * ImageMessageBuilder constructor.
     *
     * @param string $originalContentUrl
     * @param string $previewImageUrl
<<<<<<< HEAD
     */
    public function __construct($originalContentUrl, $previewImageUrl)
    {
        $this->originalContentUrl = $originalContentUrl;
        $this->previewImageUrl = $previewImageUrl;
=======
     * @param QuickReplyBuilder|null $quickReply
     */
    public function __construct($originalContentUrl, $previewImageUrl, QuickReplyBuilder $quickReply = null)
    {
        $this->originalContentUrl = $originalContentUrl;
        $this->previewImageUrl = $previewImageUrl;
        $this->quickReply = $quickReply;
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    }

    /**
     * Builds image message structure.
     *
     * @return array
     */
    public function buildMessage()
    {
<<<<<<< HEAD
        return [
            [
                'type' => MessageType::IMAGE,
                'originalContentUrl' => $this->originalContentUrl,
                'previewImageUrl' => $this->previewImageUrl,
            ]
        ];
=======
        if (! empty($this->message)) {
            return $this->message;
        }

        $imageMessage = [
            'type' => MessageType::IMAGE,
            'originalContentUrl' => $this->originalContentUrl,
            'previewImageUrl' => $this->previewImageUrl,
        ];

        if ($this->quickReply) {
            $imageMessage['quickReply'] = $this->quickReply->buildQuickReply();
        }

        $this->message[] = $imageMessage;

        return $this->message;
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    }
}

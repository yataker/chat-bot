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
use LINE\LINEBot\ImagemapActionBuilder;
use LINE\LINEBot\MessageBuilder;
use LINE\LINEBot\MessageBuilder\Imagemap\BaseSizeBuilder;
<<<<<<< HEAD
=======
use LINE\LINEBot\QuickReplyBuilder;
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903

/**
 * A builder class for imagemap message.
 *
 * @package LINE\LINEBot\MessageBuilder
 */
class ImagemapMessageBuilder implements MessageBuilder
{
    /** @var string */
    private $baseUrl;
<<<<<<< HEAD
    /** @var string */
    private $altText;
    /** @var BaseSizeBuilder */
    private $baseSizeBuilder;
=======

    /** @var string */
    private $altText;

    /** @var BaseSizeBuilder */
    private $baseSizeBuilder;

>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    /** @var ImagemapActionBuilder[] */
    private $imagemapActionBuilders;

    /** @var array */
    private $message = [];

<<<<<<< HEAD
=======
    /** @var QuickReplyBuilder|null */
    private $quickReply;

>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    /**
     * ImagemapMessageBuilder constructor.
     *
     * @param string $baseUrl
     * @param string $altText
     * @param BaseSizeBuilder $baseSizeBuilder
     * @param ImagemapActionBuilder[] $imagemapActionBuilders
<<<<<<< HEAD
     */
    public function __construct($baseUrl, $altText, $baseSizeBuilder, array $imagemapActionBuilders)
    {
=======
     * @param QuickReplyBuilder|null $quickReply
     */
    public function __construct(
        $baseUrl,
        $altText,
        $baseSizeBuilder,
        array $imagemapActionBuilders,
        QuickReplyBuilder $quickReply = null
    ) {
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
        $this->baseUrl = $baseUrl;
        $this->altText = $altText;
        $this->baseSizeBuilder = $baseSizeBuilder;
        $this->imagemapActionBuilders = $imagemapActionBuilders;
<<<<<<< HEAD
=======
        $this->quickReply = $quickReply;
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    }

    /**
     * Builds imagemap message strucutre.
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

        $actions = [];
        foreach ($this->imagemapActionBuilders as $builder) {
            $actions[] = $builder->buildImagemapAction();
        }

<<<<<<< HEAD
        $this->message[] = [
=======
        $imagemapMessage = [
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
            'type' => MessageType::IMAGEMAP,
            'baseUrl' => $this->baseUrl,
            'altText' => $this->altText,
            'baseSize' => $this->baseSizeBuilder->build(),
            'actions' => $actions,
        ];

<<<<<<< HEAD
=======
        if ($this->quickReply) {
            $imagemapMessage['quickReply'] = $this->quickReply->buildQuickReply();
        }

        $this->message[] = $imagemapMessage;

>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
        return $this->message;
    }
}

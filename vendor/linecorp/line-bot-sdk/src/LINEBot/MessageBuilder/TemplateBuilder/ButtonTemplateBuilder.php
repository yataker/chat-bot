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

namespace LINE\LINEBot\MessageBuilder\TemplateBuilder;

use LINE\LINEBot\Constant\TemplateType;
use LINE\LINEBot\MessageBuilder\TemplateBuilder;
use LINE\LINEBot\TemplateActionBuilder;

/**
 * A builder class for button template message.
 *
 * @package LINE\LINEBot\MessageBuilder\TemplateBuilder
 */
class ButtonTemplateBuilder implements TemplateBuilder
{
    /** @var string */
    private $title;
<<<<<<< HEAD
    /** @var string */
    private $text;
    /** @var string */
    private $thumbnailImageUrl;
    /** @var string */
    private $imageAspectRatio;
    /** @var string */
    private $imageSize;
    /** @var string */
    private $imageBackgroundColor;
=======

    /** @var string */
    private $text;

    /** @var string */
    private $thumbnailImageUrl;

    /** @var string */
    private $imageAspectRatio;

    /** @var string */
    private $imageSize;

    /** @var string */
    private $imageBackgroundColor;

>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    /** @var TemplateActionBuilder[] */
    private $actionBuilders;

    /** @var array */
    private $template;

    /**
<<<<<<< HEAD
=======
     * @var TemplateActionBuilder
     */
    private $defaultAction;

    /**
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
     * ButtonTemplateBuilder constructor.
     *
     * @param string $title
     * @param string $text
     * @param string $thumbnailImageUrl
     * @param TemplateActionBuilder[] $actionBuilders
     * @param string|null $imageAspectRatio
     * @param string|null $imageSize
     * @param string|null $imageBackgroundColor
<<<<<<< HEAD
=======
     * @param TemplateActionBuilder|null $defaultAction
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
     */
    public function __construct(
        $title,
        $text,
        $thumbnailImageUrl,
        array $actionBuilders,
        $imageAspectRatio = null,
        $imageSize = null,
<<<<<<< HEAD
        $imageBackgroundColor = null
=======
        $imageBackgroundColor = null,
        TemplateActionBuilder $defaultAction = null
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    ) {
        $this->title = $title;
        $this->text = $text;
        $this->thumbnailImageUrl = $thumbnailImageUrl;
        $this->actionBuilders = $actionBuilders;
        $this->imageAspectRatio = $imageAspectRatio;
        $this->imageSize = $imageSize;
        $this->imageBackgroundColor = $imageBackgroundColor;
<<<<<<< HEAD
=======
        $this->defaultAction = $defaultAction;
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    }

    /**
     * Builds button template message structure.
     *
     * @return array
     */
    public function buildTemplate()
    {
<<<<<<< HEAD
        if (!empty($this->template)) {
=======
        if (! empty($this->template)) {
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
            return $this->template;
        }

        $actions = [];
        foreach ($this->actionBuilders as $actionBuilder) {
            $actions[] = $actionBuilder->buildTemplateAction();
        }

        $this->template = [
            'type' => TemplateType::BUTTONS,
            'thumbnailImageUrl' => $this->thumbnailImageUrl,
            'title' => $this->title,
            'text' => $this->text,
            'actions' => $actions,
        ];

        if ($this->imageAspectRatio) {
            $this->template['imageAspectRatio'] = $this->imageAspectRatio;
        }

        if ($this->imageSize) {
            $this->template['imageSize'] = $this->imageSize;
        }

        if ($this->imageBackgroundColor) {
            $this->template['imageBackgroundColor'] = $this->imageBackgroundColor;
        }

<<<<<<< HEAD
=======
        if ($this->defaultAction) {
            $this->template['defaultAction'] = $this->defaultAction->buildTemplateAction();
        }

>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
        return $this->template;
    }
}

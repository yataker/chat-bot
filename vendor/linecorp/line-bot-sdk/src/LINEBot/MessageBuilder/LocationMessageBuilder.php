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
 * A builder class for location message.
 *
 * @package LINE\LINEBot\MessageBuilder
 */
class LocationMessageBuilder implements MessageBuilder
{
    /** @var string */
    private $title;
<<<<<<< HEAD
    /** @var string */
    private $address;
    /** @var double */
    private $latitude;
    /** @var double */
    private $longitude;

=======

    /** @var string */
    private $address;

    /** @var double */
    private $latitude;

    /** @var double */
    private $longitude;

    /** @var array */
    private $message = [];

    /** @var QuickReplyBuilder|null */
    private $quickReply;

>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    /**
     * LocationMessageBuilder constructor.
     *
     * @param string $title
     * @param string $address
     * @param double $latitude
     * @param double $longitude
<<<<<<< HEAD
     */
    public function __construct($title, $address, $latitude, $longitude)
=======
     * @param QuickReplyBuilder|null $quickReply
     */
    public function __construct($title, $address, $latitude, $longitude, QuickReplyBuilder $quickReply = null)
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    {
        $this->title = $title;
        $this->address = $address;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
<<<<<<< HEAD
=======
        $this->quickReply = $quickReply;
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    }

    /**
     * Builds location message structure.
     *
     * @return array
     */
    public function buildMessage()
    {
<<<<<<< HEAD
        return [
            [
                'type' => MessageType::LOCATION,
                'title' => $this->title,
                'address' => $this->address,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
            ]
        ];
=======
        if (! empty($this->message)) {
            return $this->message;
        }

        $locationMessage = [
            'type' => MessageType::LOCATION,
            'title' => $this->title,
            'address' => $this->address,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ];

        if ($this->quickReply) {
            $locationMessage['quickReply'] = $this->quickReply->buildQuickReply();
        }

        $this->message[] = $locationMessage;

        return $this->message;
>>>>>>> 75a95f1f631f4d4d994b0a4c5e293a5b95c8d903
    }
}

<?php

namespace Messenger\Api\Message\Quick;

/**
 * Class Reply
 */
class TextReply implements ReplyInterface
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $payload;

    /**
     * TextReply constructor.
     *
     * @param string $title
     * @param string $payload
     */
    public function __construct($title, $payload)
    {
        $this->title = $title;
        $this->payload = $payload;
    }

    /**
     * @return array
     */
    public function getReply(): array
    {
        return [
            'title' => $this->title,
            'payload' => $this->payload,
        ];
    }
}

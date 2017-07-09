<?php

namespace Messenger\Api\Message\Quick;

/**
 * Class TextReply
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
    public function __construct(string $title, string $payload)
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
            'content_type' => 'text',
            'title' => $this->title,
            'payload' => $this->payload,
        ];
    }
}

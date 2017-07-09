<?php

namespace Messenger\Api\Message\Quick;

/**
 * Class ImageReply
 */
class ImageReply extends TextReply
{
    /**
     * @var string
     */
    private $image_url;

    /**
     * ImageReply constructor.
     *
     * @param string $title
     * @param string $payload
     * @param string $image_url
     */
    public function __construct(
        string $title,
        string $payload,
        string $image_url
    )
    {
        $this->image_url = $image_url;

        parent::__construct($title, $payload);
    }

    /**
     * @return array
     */
    public function getReply(): array
    {
        return parent::getReply() + ['image_url' => $this->image_url];
    }
}

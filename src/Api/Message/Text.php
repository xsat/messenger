<?php

namespace Messenger\Api\Message;

/**
 * Class Text
 */
class Text implements MessageInterface
{
    /**
     * @var string
     */
    private $text;

    /**
     * Text constructor.
     *
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return array
     */
    public function getMessage(): array
    {
        return [
            'text' => $this->text,
        ];
    }
}

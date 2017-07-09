<?php

namespace Messenger\Api\Message\Quick;

use Messenger\Api\Message\MessageInterface;

/**
 * Class Replies
 */
class Replies implements MessageInterface
{
    /**
     * @var MessageInterface
     */
    private $message;

    /**
     * @var ReplyInterface[]
     */
    private $replies = [];

    /**
     * Replies constructor.
     *
     * @param MessageInterface $message
     * @param ReplyInterface[] $replies
     */
    public function __construct(MessageInterface $message, array $replies)
    {
        $this->message = $message;
        $this->replies = $replies;
    }

    /**
     * @return array
     */
    public function getMessage(): array
    {
        $replies = [];

        foreach ($this->replies as $reply) {
            $replies[] = $reply->getReply();
        }

        return $this->message->getMessage() + ['quick_replies' => $replies];
    }
}

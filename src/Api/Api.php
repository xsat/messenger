<?php

namespace Messenger\Api;

use Messenger\Api\Message\MessageInterface;
use Messenger\Api\Recipient\RecipientInterface;

/**
 * Class Api
 */
class Api implements ApiInterface
{
    /**
     * @param RecipientInterface $recipient
     * @param MessageInterface $message
     */
    public function send(RecipientInterface $recipient, MessageInterface $message): void
    {
        $data = [
            'recipient' => $recipient->getRecipient(),
            'message' => $message->getMessage(),
        ];
    }
}

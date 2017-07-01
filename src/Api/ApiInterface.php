<?php

namespace Messenger\Api;

use Messenger\Api\Message\MessageInterface;
use Messenger\Api\Recipient\RecipientInterface;

/**
 * Interface ApiInterface
 */
interface ApiInterface
{
    /**
     * @param RecipientInterface $recipient
     * @param MessageInterface $message
     *
     * @return array
     */
    public function send(RecipientInterface $recipient, MessageInterface $message): array;
}

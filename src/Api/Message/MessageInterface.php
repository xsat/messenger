<?php

namespace Messenger\Api\Message;

/**
 * Interface MessageInterface
 */
interface MessageInterface
{
    /**
     * @return array
     */
    public function getMessage(): array;
}

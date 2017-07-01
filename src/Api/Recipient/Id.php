<?php

namespace Messenger\Api\Recipient;

/**
 * Class Id
 */
class Id implements RecipientInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * Id constructor.
     *
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return array
     */
    public function getRecipient(): array
    {
        return [
            'id' => $this->id,
        ];
    }
}

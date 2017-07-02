<?php

namespace Messenger\Api\Recipient;

/**
 * Class Id
 */
class Id implements RecipientInterface
{
    /**
     * @var string
     */
    private $id;

    /**
     * Id constructor.
     *
     * @param string $id
     */
    public function __construct(string $id)
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

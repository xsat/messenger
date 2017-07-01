<?php

namespace Messenger\Api\Recipient;

/**
 * Class PhoneNumber
 */
class PhoneNumber implements RecipientInterface
{
    /**
     * @var string
     */
    private $phone_number;

    /**
     * PhoneNumber constructor.
     *
     * @param string $phone_number
     */
    public function __construct(string $phone_number)
    {
        $this->phone_number = $phone_number;
    }

    /**
     * @return array
     */
    public function getRecipient(): array
    {
        return [
            'phone_number' => $this->phone_number,
        ];
    }
}

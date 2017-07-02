<?php

namespace Messenger\Api;

use Messenger\Api\Message\MessageInterface;
use Messenger\Api\Recipient\RecipientInterface;

/**
 * Class Api
 */
class Api implements ApiInterface
{
    private const API_URL = 'https://graph.facebook.com/v2.6/';

    /**
     * Allowed types for request
     */
    private const TYPE_GET = 'GET';
    private const TYPE_POST = 'POST';

    /**
     * @var string
     */
    private $token;

    /**
     * Api constructor.
     *
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * @param RecipientInterface $recipient
     * @param MessageInterface $message
     *
     * @return array
     */
    public function send(RecipientInterface $recipient, MessageInterface $message): array
    {
        return $this->request('me/messages', self::TYPE_POST, [
            'recipient' => $recipient->getRecipient(),
            'message' => $message->getMessage(),
        ]);
    }

    /**
     * @param string $url
     * @param string $type
     * @param array $data
     *
     * @return array
     */
    private function request(string $url, string $type, array $data = []): array
    {
        $data['access_token'] = $this->token;

        if ($type == self::TYPE_GET) {
            $url .= '?' . http_build_query($data);
        }

        $curl = curl_init(self::API_URL . $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);

        if ($type == self::TYPE_POST) {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        }

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, true);
    }
}

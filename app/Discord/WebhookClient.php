<?php
/**
 * Created by PhpStorm.
 * User: shtrih
 * Date: 21.03.2019
 * Time: 2:51
 */

namespace App\Discord;


use GuzzleHttp\Client;

class WebhookClient
{
    /**
     * @var Client
     */
    protected $httpClient;

    public function __construct(Client $client)
    {
        $this->httpClient = $client;
        $this->hookUri = config('services.discord.hook_uri');
    }

    public function execute(array $data)
    {
        $this->httpClient->post($this->hookUri, [
            'form_params' => [
                'username' => 'New member request',
                'content' => $this->prepareData($data),
            ]
        ]);
    }

    protected function prepareData(array $data)
    {
        $result = '';

        // Hide user email
        unset($data['email']);

        // Remove empty fields
        $data = array_filter($data);

        foreach ($data as $k => $v) {
            $result .= sprintf("`%s: %s`\n", $k, $v);
        }

        return $result;
    }
}
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
        $nickname = empty($data['nickname']) ? 'Anonymous' : $data['nickname'];
        $role = empty($data['route']) ? 'No-role' : basename($data['route']);

        $this->httpClient->post($this->hookUri, [
            'form_params' => [
                'username' => 'Resume Informer',
                'content' => 'New member request: ' . sprintf('`%s`, `%s`', $role, $nickname),
            ]
        ]);
    }
}
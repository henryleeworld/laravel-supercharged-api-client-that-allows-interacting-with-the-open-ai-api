<?php

namespace App\Http\Controllers;

use App\Http\Integrations\OpenAI\OpenAIConnector;

class OpenAIController extends Controller
{
    public function __construct(OpenAIConnector $openAIConnector)
    {
        $this->openAIConnector = $openAIConnector;
    }

    public function createImage() 
    {
        $response = $this->openAIConnector->createImage([
            'prompt' => __('FIFA World Cup Qatar 2022'),
            'n' => 1,
            'size' => '256x256',
            'response_format' => 'url',
        ]);
        dd($response->toArray());
    }
}

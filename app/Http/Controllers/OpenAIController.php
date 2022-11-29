<?php

namespace App\Http\Controllers;

use App\Services\OpenAIService;

class OpenAIController extends Controller
{
    public function __construct(OpenAIService $openAIService)
    {
        $this->openAIService = $openAIService;
    }

    public function createImage() 
    {
        $response = $this->openAIService->createImage([
            'prompt' => '卡達世界盃',
            'n' => 1,
            'size' => '256x256',
            'response_format' => 'url',
        ]);
        dd($response->toArray());
    }
}

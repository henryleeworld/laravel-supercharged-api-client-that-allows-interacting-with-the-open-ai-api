<?php

namespace App\Http\Integrations\OpenAI;

use OpenAI;

class OpenAIConnector
{
    /**
     * OpenAIService constructor.
     */
    public function __construct()
    {
        $this->client = OpenAI::client(config('open-ai.secret_key'));
    }

    /**
     * Creates an image given a prompt.
     */
    public function createImage(array $attributeAry)
    {
        return $this->client->images()->create([
            'prompt' => $attributeAry['prompt'] ?? '',
            'n' => $attributeAry['n'] ?? 1,
            'size' => $attributeAry['size'] ?? '256x256',
            'response_format' => $attributeAry['responseFormat'] ?? 'url',
        ]);
    }
}

<?php

namespace App\Services;

use OpenAI;

class OpenAIService
{
    /**
     * OpenAIService constructor.
     */
    public function __construct()
    {
        $this->client = OpenAI::client(env('OPEN_API_SECRET_KEY'));
    }

    /**
     * Get post by id.
     *
     * @param $id
     * @return String
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

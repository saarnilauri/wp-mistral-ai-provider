<?php

declare(strict_types=1);

namespace WpMistralProvider\Models;

use WordPress\AiClient\Providers\Http\DTO\Request;
use WordPress\AiClient\Providers\Http\Enums\HttpMethodEnum;
use WordPress\AiClient\Providers\OpenAiCompatibleImplementation\AbstractOpenAiCompatibleTextGenerationModel;
use WpMistralProvider\Provider\MistralProvider;

/**
 * Class for a Mistral text generation model.
 *
 * @since 1.0.0
 */
class MistralTextGenerationModel extends AbstractOpenAiCompatibleTextGenerationModel
{
    /**
     * {@inheritDoc}
     *
     * @since 1.0.0
     */
    protected function createRequest(
        HttpMethodEnum $method,
        string $path,
        array $headers = [],
        $data = null
    ): Request {
        return new Request(
            $method,
            MistralProvider::url($path),
            $headers,
            $data,
            $this->getRequestOptions()
        );
    }
}

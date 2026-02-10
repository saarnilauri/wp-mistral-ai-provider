# Mistral AI Provider

A Mistral provider for the [PHP AI Client](https://github.com/WordPress/php-ai-client) SDK. Works as both a Composer package and a WordPress plugin.

## Requirements

- PHP 7.4 or higher
- [wordpress/php-ai-client](https://github.com/WordPress/php-ai-client) must be installed

## Installation

### As a Composer Package

```bash
composer require saarnilauri/wp-mistral-ai-provider
```

### As a WordPress Plugin

1. Download the plugin files
2. Upload to `/wp-content/plugins/wp-mistral-ai-provider/`
3. Ensure the PHP AI Client plugin is installed and activated
4. Activate the plugin through the WordPress admin

## Usage

### With WordPress

The provider automatically registers itself with the PHP AI Client on the `init` hook. Simply ensure both plugins are active and configure your API key:

```php
// Set your Mistral API key (or use the MISTRAL_API_KEY environment variable)
putenv('MISTRAL_API_KEY=your-api-key');

// Use the provider
$result = AiClient::prompt('Hello, world!')
    ->usingProvider('mistral')
    ->generateTextResult();
```

### As a Standalone Package

```php
use WordPress\AiClient\AiClient;
use WpMistralProvider\Provider\MistralProvider;

// Register the provider
$registry = AiClient::defaultRegistry();
$registry->registerProvider(MistralProvider::class);

// Set your API key
putenv('MISTRAL_API_KEY=your-api-key');

// Generate text
$result = AiClient::prompt('Explain quantum computing')
    ->usingProvider('mistral')
    ->generateTextResult();

echo $result->toText();
```

## Supported Models

Available models are dynamically discovered from the Mistral API. This includes text models and, for compatible models, vision and function-calling capabilities. See the [Mistral documentation](https://docs.mistral.ai/) for the full list of available models.

## Configuration

The provider uses the `MISTRAL_API_KEY` environment variable for authentication. You can set this in your environment or via PHP:

```php
putenv('MISTRAL_API_KEY=your-api-key');
```

## License

GPL-2.0-or-later

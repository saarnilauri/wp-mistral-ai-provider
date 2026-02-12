# v0.2.0

This release completes the provider rename to a neutral, third-party naming scheme.

## Breaking Changes

- Repository rename:
  - Old: `https://github.com/saarnilauri/wp-mistral-ai-provider`
  - New: `https://github.com/saarnilauri/wp-ai-client-provider-for-mistral`
- Composer package rename:
  - Old: `saarnilauri/wp-mistral-ai-provider`
  - New: `saarnilauri/wp-ai-client-provider-for-mistral`
- PHP namespace rename:
  - Old: `WpMistralProvider\\`
  - New: `WpAiClientProviderForMistral\\`
- Class renames:
  - `WpMistralProvider\Provider\MistralProvider` -> `WpAiClientProviderForMistral\Provider\ProviderForMistral`
  - `WpMistralProvider\Metadata\MistralModelMetadataDirectory` -> `WpAiClientProviderForMistral\Metadata\ProviderForMistralModelMetadataDirectory`
  - `WpMistralProvider\Models\MistralTextGenerationModel` -> `WpAiClientProviderForMistral\Models\ProviderForMistralTextGenerationModel`
- WordPress plugin slug/text domain rename:
  - Old: `wp-mistral-ai-provider` / `mistral-ai-provider`
  - New: `wp-ai-client-provider-for-mistral` / `wp-ai-client-provider-for-mistral`
- Release artifact rename:
  - Old: `dist/wp-mistral-ai-provider.zip`
  - New: `dist/wp-ai-client-provider-for-mistral.zip`

## Migration Guide

1. Update Composer dependency:

```bash
composer remove saarnilauri/wp-mistral-ai-provider
composer require saarnilauri/wp-ai-client-provider-for-mistral
```

2. Update imports and registration in your PHP code:

```php
use WpAiClientProviderForMistral\Provider\ProviderForMistral;

$registry->registerProvider(ProviderForMistral::class);
```

3. If installed as a WordPress plugin, reinstall/rename to the new plugin directory:

`wp-content/plugins/wp-ai-client-provider-for-mistral/`

4. Provider id and API key config are unchanged:
  - Provider id: `mistral`
  - API key variable: `MISTRAL_API_KEY`

## Notes

- This project is independent and is not affiliated with, endorsed by, or sponsored by Mistral AI.
- Added a PHPUnit test suite for unit and integration testing in this repository.

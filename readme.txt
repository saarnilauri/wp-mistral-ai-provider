=== Mistral AI Provider ===
Contributors: WordPress AI Team
Tags: ai, mistral, machine-learning, artificial-intelligence
Requires at least: 6.9
Tested up to: 6.9
Stable tag: 1.0.0
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Mistral provider for the PHP AI Client SDK.

== Description ==

This plugin provides Mistral integration for the PHP AI Client SDK. It enables WordPress sites to use Mistral models for text generation and related AI capabilities.

**Features:**

* Text generation with Mistral models
* Function calling support (for compatible models)
* Vision input support (for compatible models)
* Automatic provider registration

Available models are dynamically discovered from the Mistral API.

**Requirements:**

* PHP 7.4 or higher
* PHP AI Client plugin must be installed and activated
* Mistral API key

== Installation ==

1. Ensure the PHP AI Client plugin is installed and activated
2. Upload the plugin files to `/wp-content/plugins/wp-mistral-ai-provider/`
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Configure your Mistral API key via the `MISTRAL_API_KEY` environment variable or constant

== Frequently Asked Questions ==

= How do I get a Mistral API key? =

Visit the [Mistral Console](https://console.mistral.ai/) to create an account and generate an API key.

= Does this plugin work without the PHP AI Client? =

No, this plugin requires the PHP AI Client plugin to be installed and activated. It provides the Mistral-specific implementation that the PHP AI Client uses.

== Changelog ==

= 1.0.0 =
* Initial release
* Support for Mistral text generation models
* Function calling support for compatible models
* Vision input support for compatible models

== Upgrade Notice ==

= 1.0.0 =
Initial release.

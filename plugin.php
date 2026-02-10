<?php

/**
 * Plugin Name: Mistral AI Provider
 * Plugin URI: https://github.com/saarnilauri/wp-mistral-ai-provider
 * Description: Mistral AI provider for the WordPress AI Client.
 * Requires at least: 6.9
 * Requires PHP: 7.4
 * Version: 0.1.1
 * Author: Lauri Saarni
 * Author URI: https://profiles.wordpress.org/laurisaarni/
 * License: GPL-2.0-or-later
 * License URI: https://spdx.org/licenses/GPL-2.0-or-later.html
 * Text Domain: mistral-ai-provider
 *
 * @package WpMistralProvider
 */

declare(strict_types=1);

namespace WpMistralProvider;

use WordPress\AiClient\AiClient;
use WpMistralProvider\Provider\MistralProvider;

if (!defined('ABSPATH')) {
    return;
}

/**
 * Registers the Mistral AI provider with the AI Client.
 *
 * @since 1.0.0
 *
 * @return void
 */
function register_provider(): void
{
    if (!class_exists(AiClient::class)) {
        return;
    }

    $registry = AiClient::defaultRegistry();

    if ($registry->hasProvider(MistralProvider::class)) {
        return;
    }

    $registry->registerProvider(MistralProvider::class);
}

add_action('init', __NAMESPACE__ . '\\register_provider', 5);

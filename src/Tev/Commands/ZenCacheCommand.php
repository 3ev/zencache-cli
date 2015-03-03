<?php
namespace Tev\Commands;

use WP_CLI;
use WP_CLI_Command;
use zencache;

/**
 * Manage the ZenCache plugin.
 */
class ZenCacheCommand extends WP_CLI_Command
{
    /**
     * Clear the cache.
     */
    public function clear($args = array(), $assoc_args = array())
    {
        if (defined('WP_CACHE') && WP_CACHE && class_exists('\zencache')) {
            $wiped = zencache::wipe();
            WP_CLI::success("$wiped file(s) were cleared from the cache.");
        } else {
            WP_CLI::warning('ZenCache is not installed or enabled');
        }
    }
}

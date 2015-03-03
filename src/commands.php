<?php

if (defined('WP_CLI') && WP_CLI) {
    WP_CLI::add_command('zencache', 'Tev\Commands\ZenCacheCommand');
}

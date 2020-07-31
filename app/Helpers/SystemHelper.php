<?php

namespace App\Helpers;

use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Support\Facades\File;

class SystemHelper {
    /**
     * Get Laravel version
     *
     * @return string
     */
    public static function version() {
        return app()->version();
    }

    /**
     * Get PHPUnit version
     *
     * @param bool $dev
     * @return array
     */
    public static function getRequire(bool $dev = false) {
        $content = File::get(base_path() . '/composer.json');
        $content = json_decode($content, true);

        if ($dev) {
            return $content['require-dev'];
        }

        return $content['require'];
    }
}

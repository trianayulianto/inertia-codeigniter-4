<?php

use Inertia\Factory;
use Inertia\Services;

if (! function_exists('inertia')) {
    /**
     * @param null $component
     * @param array $props
     * @return Factory|string
     */
    function inertia($component = null, $props = [])
    {
        $inertia = Services::inertia();

        if ($component) {
            return $inertia->render($component, $props);
        }

        return $inertia;
    }
}

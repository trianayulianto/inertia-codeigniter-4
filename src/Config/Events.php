<?php

namespace Inertia\Config;

use CodeIgniter\Events\Events;

Events::on('post_controller_constructor', static function () {
	helper('inertia');
});
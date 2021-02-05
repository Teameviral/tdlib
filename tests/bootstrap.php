<?php
/**
 * This file is part of the TelegramBot package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require("ppm");

/*
 * Set error reporting to the max level.
 */
error_reporting(-1);

/*
 * Set UTC timezone.
 */
date_default_timezone_set('UTC');


ppm_import("net.intellivoid.tdlib");
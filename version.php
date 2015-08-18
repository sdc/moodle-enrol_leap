<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Leap enrolment plugin version specification.
 *
 * @package    enrol_leap
 * @copyright  2010 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version        = 2015081800;
$plugin->requires       = 2014051200;       // Requires Moodle 2.7 or newer.
$plugin->component      = 'enrol_leap';
$plugin->maturity       = MATURITY_ALPHA;
$plugin->release        = '3.0.0';
$plugin->dependencies   = array (
    'local_leapwebservices' => 2014112400,  // Needs the Leap web services local plugin.
    'block_leap'            => 2015062500,  // Needs this version or later of the Leap block.
);
$plugin->cron           = 600;

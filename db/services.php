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
 * Leap plugin external functions and service definitions.
 *
 * @package    enrol_leap
 * @category   webservice
 * @copyright  2011 Jerome Mouneyrac
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$functions = array(

    // === enrol related functions ===
    'moodle_enrol_leap_enrol_users' => array(
        'classname'   => 'enrol_leap_external',
        'methodname'  => 'enrol_users',
        'classpath'   => 'enrol/leap/externallib.php',
        'description' => 'DEPRECATED: this deprecated function will be removed in a future version. This function has be renamed as enrol_leap_enrol_users()',
        'capabilities'=> 'enrol/leap:enrol',
        'type'        => 'write',
    ),

    'enrol_leap_enrol_users' => array(
        'classname'   => 'enrol_leap_external',
        'methodname'  => 'enrol_users',
        'classpath'   => 'enrol/leap/externallib.php',
        'description' => 'leap enrol users',
        'capabilities'=> 'enrol/leap:enrol',
        'type'        => 'write',
    ),

);

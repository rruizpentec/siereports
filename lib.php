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
 * Plugin interface. Adds an item to the navigation menu block.
 *
 * @package    SIE
 * @copyright  2015 Planificacion de Entornos Tecnologicos SL
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if (isloggedin()) {
    global $PAGE;
    $sieconfig = get_config('package_sie');
    $baseurl = $sieconfig->baseurl;
    if (isset($baseurl) && $baseurl != '' && $baseurl != null) {
        $PAGE->navigation->add(get_string('menuoption', 'local_siereports'),
                new moodle_url($CFG->wwwroot.'/local/siereports/index.php'), null, null, 'local_siereports_menuoption');
    }
}
<?php
/*
 *      OSCLass – software for creating and publishing online classified
 *                           advertising platforms
 *
 *                        Copyright (C) 2010 OSCLASS
 *
 *       This program is free software: you can redistribute it and/or
 *     modify it under the terms of the GNU Affero General Public License
 *     as published by the Free Software Foundation, either version 3 of
 *            the License, or (at your option) any later version.
 *
 *     This program is distributed in the hope that it will be useful, but
 *         WITHOUT ANY WARRANTY; without even the implied warranty of
 *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *             GNU Affero General Public License for more details.
 *
 *      You should have received a copy of the GNU Affero General Public
 * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
<div id="settings_form" style="border: 1px solid #ccc; background: #eee; ">
<div style="padding: 20px;">
<div>
<fieldset>
<legend><h1><?php _e("Sitemap Generator Help");?></h1></legend>
<?php sitemap_generator();
?>
<h2><?php _e("What is Sitemap Generator Plugin?");?></h2>
<?php _e("Sitemap Generator plugin allows you to generate a sitemap.xml file and ping the major search engines so they will be able to index your site.");?>

<h2><?php _e("How does Sitemap Generator plugin work?");?></h2>
<?php _e("The plugin will generate a sitemap.xml file on the root of your OSClass installation. The folder <b>must have write permissions</b> to work correctly. The sitemap.xml file will be generated hourly and at the same time will ping the major search engines. No user interaction is needed.");?><br/>


</fieldset>
</div></div></div>
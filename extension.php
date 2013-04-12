<?php
/**
 * Extension that adds the ie6update js script from ie6update.com to the page footer
 *
 * @package default
 * @author Peter Epp
 * @copyright Copyright (c) 2009 Peter Epp (http://teknocat.org)
 * @license GNU Lesser General Public License (http://www.gnu.org/licenses/lgpl.html)
 * @version 2.0
 */
class Ie6Update extends AbstractExtension {
	protected $_dependencies = array("Jquery");
	public function run() {
		// Force the framework to instantiate the extension.
	}
	/**
	 * Add the IE6 update script to the page footer
	 *
	 * @return void
	 * @author Peter Epp
	 */
	protected function act_on_compile_footer() {
		// This script is copied from ie6update.com, but has the jquery detection and inclusion if not found removed as this extension has jquery
		// set as a dependency causing jquery to get loaded automatically by the framework if it is not already and this extension is installed.
		$ie6_update_script = '<!--[if IE 6]>
		<script type="text/javascript"> 
			var IE6UPDATE_OPTIONS = {
				icons_path: "http://static.ie6update.com/hosted/ie6update/images/"
			}
		</script>
		<script type="text/javascript" src="http://static.ie6update.com/hosted/ie6update/ie6update.js"></script>
		<![endif]-->';
		$this->Biscuit->append_view_var("footer",$ie6_update_script);
	}
}
?>
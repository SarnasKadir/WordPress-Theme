read this to understand how this function works

This function enable WordPress to display a message when the theme activated 
the message is:
	
	This theme requires the following plugins: classic-widgets and contact form 7.
	This theme recommends the following plugin: classic-editor.
	Begin installing plugins | Dismiss this notice

in this message we see that classic-widgets and contact form 7 plugin are REQUIRED to be installed with this theme and
we see that classic-editor plugin RECOMMENDED to be installed with this theme.

See required_plugins.php file in this folder and see the function my_theme_register_required_plugins()

name = plugin name
slug = plugin slug same as plugin folder and file name
recommended = means this plugin recommended
required = means this plugin required
true or false = yes no.

			function my_theme_register_required_plugins() {	 
				$plugins = array(	
					array(
						'name'      => 'classic-editor',
						'slug'      => 'classic-editor',
						'recommended'  => true,
					),
					array(
						'name'      => 'classic-widgets',
						'slug'      => 'classic-widgets',
						'required'  => true,
					),
					array(
						'name'      => 'contact form 7',
						'slug'      => 'contact-form-7',
						'required'  => true,
					),
				);
	
	
	
	
	

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
 */
<?php
/**
*
* @package Board3 Portal v2.1
* @copyright (c) 2014 Board3 Group ( www.board3.de )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	// Portal Modules
	'ACP_PORTAL_MODULES_EXP'		=> 'Je kan je portaal modules hier beheren. Als je alle modules uitschakelt, schakel dan ook het portaal zelf uit.',

	'MODULE_POS_TOP'				=> 'Boven',
	'MODULE_POS_LEFT'				=> 'Linker kolom',
	'MODULE_POS_RIGHT'				=> 'Rechter kolom',
	'MODULE_POS_CENTER'				=> 'Midden kolom',
	'MODULE_POS_BOTTOM'				=> 'Onder',
	'ADD_MODULE'					=> 'Voeg module toe',
	'CHOOSE_MODULE'					=> 'Kies een module',
	'CHOOSE_MODULE_EXP'				=> 'Kies een module uit de drop-down lijst',
	'SUCCESS_ADD'					=> 'De module is succesvol toegevoegd.',
	'SUCCESS_DELETE'				=> 'De module is succesvol verwijderd.',
	'NO_MODULES'					=> 'Er zijn geen modules gedetecteerd.',
	'MOVE_RIGHT'					=> 'Verplaats naar rechts',
	'MOVE_LEFT'						=> 'verplaats naar links',
	'B3P_FILE_NOT_FOUND'			=> 'Het gevraagde bestand kan niet worden gevonden',
	'UNABLE_TO_MOVE'				=> 'It is not possible to move the block to the selected column.',
	'UNABLE_TO_MOVE_ROW'			=> 'It is not possible to move the block to the selected row.',
	'DELETE_MODULE_CONFIRM'			=> 'Weet je zeker dat je de module "%1$s" wilt verwijderen?',
	'MODULE_RESET_SUCCESS'			=> 'Module instellingen succesvol gereset.',
	'MODULE_RESET_CONFIRM'			=> 'Weet je zeker dat je de instellingen van de module "%1$s" wilt resetten?',
	'MODULE_NOT_EXISTS'				=> 'De geselecteerde module bestaat niet.',

	'MODULE_OPTIONS'			=> 'Module opties',
	'MODULE_NAME'				=> 'Module naam',
	'MODULE_NAME_EXP'			=> 'Vul hier de naam van de module in die moet worden weergegeven in de module configuratie.',
	'MODULE_IMAGE'				=> 'Module afbelding',
	'MODULE_IMAGE_EXP'			=> 'Vul hier de bestandsnaam in van de module afbelding. Afbeeldingen moeten in alle styles/{jouwstijl}/theme/images/portal/ mappen staan',
	'MODULE_PERMISSIONS'		=> 'Module permissies',
	'MODULE_PERMISSIONS_EXP'	=> 'Selecteer de groepen die deze module mogen zien. Als alle groepen deze module mogen zien, selecteer dan niets.<br />Selecteer/Deselecteer meerdere groepen doormiddel van <samp>CTRL</samp> en door te klikken.',
	'MODULE_IMAGE_WIDTH'		=> 'Module afbeeldingsbreedte',
	'MODULE_IMAGE_WIDTH_EXP'	=> 'Breedte module afbeelding in pixels',
	'MODULE_IMAGE_HEIGHT'		=> 'Module afbeldingshoogte',
	'MODULE_IMAGE_HEIGHT_EXP'	=> 'Hoogte module afbeelding in pixels',
	'MODULE_RESET'				=> 'Reset module configuratie',
	'MODULE_RESET_EXP'			=> 'Hierdoor worden alle instellingen teruggezet naar de standaard configuratie!',
	'MODULE_STATUS'				=> 'Module inschakelen',
	'MODULE_ADD_ONCE'			=> 'Deze module kan maar één keer worden toegevoegd.',
	'MODULE_IMAGE_ERROR'		=> 'Er is een fout opgetreden tijdens het controleren van de module afbeelding:',

	// general
	'ACP_PORTAL_CONFIG_INFO'				=> 'Algemene instellingen',
	'ACP_PORTAL_GENERAL_TITLE'				=> 'Portaal beheer',
	'ACP_PORTAL_GENERAL_TITLE_EXP'			=> 'Dank je wel voor het kiezen van Board3 Portal! Dit is de plek waar jij je portaal pagina kan beheren. Onderstaande opties geven je de mogelijkheid verschillende algemene instellingen aan te passen.',
	'PORTAL_ENABLE'							=> 'Portaal inschakelen',
	'PORTAL_ENABLE_EXP'						=> 'Schakel het hele portaal in of uit',
	'PORTAL_LEFT_COLUMN'					=> 'Linkerkolom inschakelen',
	'PORTAL_LEFT_COLUMN_EXP'				=> 'Switch to no if you wish to turn off the left column',
	'PORTAL_RIGHT_COLUMN'					=> 'Rechterkolom inschakelen',
	'PORTAL_RIGHT_COLUMN_EXP'				=> 'Switch to no if you wish to turn off the right column',
	'PORTAL_VERSION_CHECK'					=> 'Versioncheck on Portal',
	'PORTAL_PHPBB_MENU'						=> 'phpBB menu',
	'PORTAL_PHPBB_MENU_EXP'					=> 'Display the phpBB Header on the portal.',
	'PORTAL_DISPLAY_JUMPBOX'				=> 'Display jumpbox',
	'PORTAL_DISPLAY_JUMPBOX_EXP'			=> 'Display the jumpbox on the portal. The jumpbox will only be displayed if it is also enabled in the board features.',
	'ACP_PORTAL_COLUMN_WIDTH_SETTINGS'		=> 'Left and right column width settings',
	'PORTAL_LEFT_COLUMN_WIDTH'				=> 'Width of the left column',
	'PORTAL_LEFT_COLUMN_WIDTH_EXP'			=> 'Change the width of the left column in pixels; recommended value is 180',
	'PORTAL_RIGHT_COLUMN_WIDTH'				=> 'Width of the right column',
	'PORTAL_RIGHT_COLUMN_WIDTH_EXP'			=> 'Change the width of the right column in pixels; recommended value is 180',

	'LINK_ADDED'							=> 'The link has been successfully added',
	'LINK_UPDATED'							=> 'The link has been successfully updated',

	// Upload Module
	'MODULE_UPLOAD'					=> 'Upload a module',
	'MODULE_UPLOAD_EXP'				=> 'Choose the zip file of the module you want to upload:',
	'MODULE_UPLOAD_GO'				=> 'Upload',
	'NO_MODULE_UPLOAD'				=> 'Your server configuration does not allow file uploads.',
	'NO_FILE_B3P'					=> 'No zip file specified.',
	'MODULE_UPLOADED'				=> 'Module uploaded successfully.',
	'MODULE_UPLOAD_MKDIR_FAILURE'	=> 'Unable to create a folder.',
	'MODULE_COPY_FAILURE'			=> 'Unable to copy the following file: %1$s',
	'MODULE_CORRUPTED'				=> 'The module you are trying to upload seems to be corrupted.',
	'PORTAL_NEW_FILES'				=> 'New files',
	'PORTAL_MODULE_SOURCE'			=> 'Source',
	'PORTAL_MODULE_TARGET'			=> 'Target',
	'PORTAL_MODULE_STATUS'			=> 'Status',
	'PORTAL_MODULE_SUCCESS'			=> 'Success',
	'PORTAL_MODULE_ERROR'			=> 'Error',

	// Install
	'PORTAL_BASIC_INSTALL'			=> 'Adding basic set of modules',
	'PORTAL_BASIC_UNINSTALL'		=> 'Removing modules from database',

	/**
	* A copy of Handyman` s MOD version check, to view it on the portal overview
	*/
	'ANNOUNCEMENT_TOPIC'	=> 'Release aankondiging',
	'CURRENT_VERSION'		=> 'Huidige versie',
	'DOWNLOAD_LATEST'		=> 'Download de laatste versie',
	'LATEST_VERSION'		=> 'Laatste versie',
	'NO_INFO'				=> 'De server voor de versie controle kan niet worden gecontacteerd',
	'NOT_UP_TO_DATE'		=> '%s is niet up-to-date',
	'RELEASE_ANNOUNCEMENT'	=> 'Aankondigings onderwerp',
	'UP_TO_DATE'			=> '%s is up-to-date',
	'VERSION_CHECK'			=> 'EXT Versie Controle',
));

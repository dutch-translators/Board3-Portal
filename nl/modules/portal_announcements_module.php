<?php
/**
*
* [Dutch] translated by Dutch Translators (https://github.com/dutch-translators)
* @package Board3 Portal v2.1 - Announcements
* @copyright (c) 2013 Board3 Group ( www.board3.de )
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
	'LATEST_ANNOUNCEMENTS'		=> 'Laatste algemene aankondigingen',
	'GLOBAL_ANNOUNCEMENTS'		=> 'Algemene aankondigingen',
	'GLOBAL_ANNOUNCEMENT'		=> 'Algemene aankondiging',
	'VIEW_LATEST_ANNOUNCEMENT'  => '1 aankondiging',
	'VIEW_LATEST_ANNOUNCEMENTS' => '%d aankondigingen',
	'READ_FULL'					=> 'Lees alles',
	'NO_ANNOUNCEMENTS'			=> 'Geen algemene aankondigingen',
	'POSTED_BY'					=> 'Auteur',
	'COMMENTS'					=> 'Reacties',
	'VIEW_COMMENTS'				=> 'Bekijk reacties',
	'PORTAL_POST_REPLY'			=> 'Schrijf reactie',
	'TOPIC_VIEWS'				=> 'Weergaves',
	'JUMP_NEWEST'				=> 'Spring naar nieuwste bericht',
	'JUMP_FIRST'				=> 'spring naar eerste bericht',
	'JUMP_TO_POST'				=> 'Spring naar bericht',

	// ACP
	'ACP_PORTAL_ANNOUNCE_SETTINGS'			=> 'Algemene aankondigingen instellingen',
	'ACP_PORTAL_ANNOUNCE_SETTINGS_EXP'		=> 'Hier kan je de algemene aankondigingen blok aanpassen.',
	'PORTAL_ANNOUNCEMENTS'					=> 'Algemene aankondigingen weergeven',
	'PORTAL_ANNOUNCEMENTS_EXP'				=> 'Weergeeft dit blok op het portaal.',
	'PORTAL_ANNOUNCEMENTS_STYLE'			=> 'Compacte algemene aankondigingen blokstijl',
	'PORTAL_ANNOUNCEMENTS_STYLE_EXP'		=> '"Ja" betekent het gebruik van de compacte stijl voor algemene aankondigingen. "Nee" betekent het gebruik van de grote stijl (tekst weergave).',
	'PORTAL_NUMBER_OF_ANNOUNCEMENTS'		=> 'Aantal aankondigingen op het portaal',
	'PORTAL_NUMBER_OF_ANNOUNCEMENTS_EXP'	=> '0 betekent oneindig',
	'PORTAL_ANNOUNCEMENTS_DAY'				=> 'Aantal dagen om de aankondiging weer te geven',
	'PORTAL_ANNOUNCEMENTS_DAY_EXP'			=> '0 betekent oneindig',
	'PORTAL_ANNOUNCEMENTS_LENGTH'			=> 'Maximum grootte/lengte van algemene aankondiging',
	'PORTAL_ANNOUNCEMENTS_LENGTH_EXP'		=> '0 betekent oneindig',
	'PORTAL_GLOBAL_ANNOUNCEMENTS_FORUM'		=> 'Aankondigingsforums',
	'PORTAL_GLOBAL_ANNOUNCEMENTS_FORUM_EXP'	=> 'Forum(s) waaruit we de aankondigingen halen. Laat dit leeg om de aankondigingen uit alle forums te halen. Als "Forums uitsluiten" is ingesteld op "Ja", selecteer dan de forums die je wilt uitsluiten.<br />If "Exclude forums" is set to "No" select the forums you want to see.<br />Select/Deselect multiple forums by holding <samp>CTRL</samp> and clicking.',
	'PORTAL_ANNOUNCEMENTS_FORUM_EXCLUDE'	=> 'Exclude forums',
	'PORTAL_ANNOUNCEMENTS_FORUM_EXCLUDE_EXP'=> 'Select "Yes" if you want to exlude the selected forums from the announcements block, and "No" if you want to see only the selected forums in the announcements block.',
	'PORTAL_ANNOUNCEMENTS_PERMISSIONS'		=> 'Enable/disable permissions',
	'PORTAL_ANNOUNCEMENTS_PERMISSIONS_EXP'	=> 'When displaying announcements, consider a user&apos;s forum-viewing permissions.',
	'PORTAL_ANNOUNCEMENTS_ARCHIVE'			=> 'Enable the announcements archive system',
	'PORTAL_ANNOUNCEMENTS_ARCHIVE_EXP'		=> 'If enabled the announcements archive system / page numbers will be displayed.',
	'PORTAL_SHOW_REPLIES_VIEWS'				=> 'Display the number of replies and views',
	'PORTAL_SHOW_REPLIES_VIEWS_EXP'			=> 'This setting pertains to the compact block.<br />When Yes, the number of replies and views are shown in 2 extra columns. When No, replies and views will be shown beside the forum name. Select No if you have problems with the display of the extra columns due to the extra width required.',
));

<?php
/**
*
* [Dutch] translated by Dutch Translators (https://github.com/dutch-translators)
* @package Board3 Portal v2.1 - Calendar
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
	'PORTAL_CALENDAR'			=> 'Kalender',
	'VIEW_NEXT_MONTH'		=> 'Volgende maand',
	'VIEW_PREVIOUS_MONTH'	=> 'Vorige maand',
	'EVENT_START'			=> 'Van',
	'EVENT_END'				=> 'Tot',
	'EVENT_TIME'			=> 'Tijd',
	'EVENT_ALL_DAY'			=> 'De hele dag',
	'CURRENT_EVENTS'		=> 'Huidige evenementen ',
	'NO_CUR_EVENTS'			=> 'Geen huidige evenementen ',
	'UPCOMING_EVENTS'		=> 'Aankomende evenementen ',
	'NO_UPCOMING_EVENTS'	=> 'Geen aankomende evenementen ',

	'mini_cal'	=> array(
		'day'	=> array(
			'1'	=> 'Zo',
			'2'	=> 'Ma',
			'3'	=> 'Di',
			'4'	=> 'Wo',
			'5'	=> 'Do',
			'6'	=> 'Vr',
			'7'	=> 'Za',
		),

		'month'	=> array(
			'1'	=> 'Jan.',
			'2'	=> 'Feb.',
			'3'	=> 'Mar.',
			'4'	=> 'Apr.',
			'5'	=> 'Mei.',
			'6'	=> 'Jun.',
			'7'	=> 'Jul.',
			'8'	=> 'Aug.',
			'9'	=> 'Sep.',
			'10'=> 'Okt.',
			'11'=> 'Nov.',
			'12'=> 'Dec.',
		),

		'long_month'=> array(
			'1'	=> 'Januari',
			'2'	=> 'Februari',
			'3'	=> 'Maart',
			'4'	=> 'April',
			'5'	=> 'Mei',
			'6'	=> 'Juni',
			'7'	=> 'Juli',
			'8'	=> 'Augustus',
			'9'	=> 'September',
			'10'=> 'Oktober',
			'11'=> 'November',
			'12'=> 'December',
		),
	),

	// ACP
	'ACP_PORTAL_CALENDAR'					=> 'Kalender instellingen',
	'ACP_PORTAL_CALENDAR_EXP'				=> 'Hier kan je het Kalanderblok aanpassen.',
	'ACP_PORTAL_EVENTS'						=> 'Calendar events',
	'PORTAL_CALENDAR_TODAY_COLOR'			=> 'Kleur voor de huidige dag',
	'PORTAL_CALENDAR_TODAY_COLOR_EXP'	=> 'HEX or named colors are allowed such as #FFFFFF for white, or color names like violet.',
	'PORTAL_CALENDAR_SUNDAY_COLOR'			=> 'Kleur voor zondag',
	'PORTAL_CALENDAR_SUNDAY_COLOR_EXP'	=> 'HEX or named colors are allowed such as #FFFFFF for white, or color names like violet.',
	'PORTAL_LONG_MONTH'						=> 'Show full month names',
	'PORTAL_LONG_MONTH_EXP'				=> 'If disabled the months will be shortened e.g. Aug. instead of August.',
	'PORTAL_SUNDAY_FIRST'					=> 'Eerste dag van de week',
	'PORTAL_SUNDAY_FIRST_EXP'			=> 'If disabled the calendar will show Mo. --> Su., else Su. --> Sa.',
	'PORTAL_DISPLAY_EVENTS'					=> 'Display events',
	'PORTAL_DISPLAY_EVENTS_EXP'				=> 'Display events that have been created in the calendar block',
	'PORTAL_EVENTS_MANAGE'					=> 'Manage events',
	'NO_EVENT_TITLE'						=> 'You haven’t specified a title for the event.',
	'NO_EVENT_START'						=> 'You haven’t specified a start time for the event.',
	'ADD_EVENT'								=> 'Voeg een nieuw evenement toe',
	'EVENT_UPDATED'							=> 'Evenement succesvol gewijzigd.',
	'EVENT_ADDED'							=> 'Evenement succesvol toegevoegd.',
	'NO_EVENT'								=> 'No event specified.',
	'EVENT_TITLE'							=> 'Evenement titel',
	'EVENT_DESC'							=> 'Evenement omschrijving',
	'EVENT_LINK'							=> 'Evenement link',
	'EVENT_LINK_EXP'						=> 'Enter the link to a topic or website with the announcement or discussion topic of the event.',
	'NO_EVENTS'								=> 'Geen evenementen',
	'ACP_PORTAL_CALENDAR_START_INCORRECT'	=> 'The start time you entered was incorrect. Please follow the instructions carefully.',
	'ACP_PORTAL_CALENDAR_END_INCORRECT'		=> 'The end time you entered was incorrect. Please follow the instructions carefully.',
	'ACP_PORTAL_CALENDAR_EVENT_PAST'		=> 'The event start time needs to be in the future.',
	'ACP_PORTAL_EVENT_START_DATE'			=> 'Begin datum evenement',
	'ACP_PORTAL_EVENT_START_DATE_EXP'		=> 'Enter the date and time the event starts. The date has to be in a similar format: MM/DD/YYYY 3:00 PM',
	'ACP_PORTAL_EVENT_END_DATE'			=> 'Eind datum evenement',
	'ACP_PORTAL_EVENT_END_DATE_EXP'			=> 'Enter the date and time the event ends. The date has to be in a similar format: MM/DD/YYYY 3:00 PM',
	'ACP_PORTAL_CALENDAR_EVENT_START_FIRST'	=> 'The end of the event has to be after the start of the event.',
	'ACP_PORTAL_CALENDAR_PERMISSION'		=> 'Event permissions',
	'ACP_PORTAL_CALENDAR_PERMISSION_EXP'	=> 'Select the groups that should be authorized to view the event. If you want all users to be able to view the event, don’t select anything.<br />Select/Deselect multiple groups by holding <samp>CTRL</samp> and clicking.',
	'PORTAL_EVENTS_URL_NEW_WINDOW'			=> 'Open external event links in a new window',

	// Logs
	'LOG_PORTAL_EVENT_UPDATED'				=> '<strong>Evenement gewijzigd</strong><br />&raquo; %s',
	'LOG_PORTAL_EVENT_ADDED'				=> '<strong>Evenement toegevoegd</strong><br />&raquo; %s',
	'LOG_PORTAL_EVENT_REMOVED'				=> '<strong>Evenement verwijderd</strong><br />&raquo; %s',
));

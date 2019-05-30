<?php

/**
 *
 * Thanks For Posts extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2013 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CLEAR_LIST_THANKS' => 'Verwijder alle waarderingen',
	'CLEAR_LIST_THANKS_CONFIRM' => 'Weet je zeker dat je alle waarderingen van deze gebruiker wilt verwijderen?',
	'CLEAR_LIST_THANKS_GIVE' => 'Alle waarderingen van deze gebruiker zijn verwijderd.',
	'CLEAR_LIST_THANKS_POST' => 'Alle waarderingen van dit bericht zijn verwijderd.',
	'CLEAR_LIST_THANKS_RECEIVE' => 'Alle ontvangen waarderingen van deze gebruiker zijn verwijderd.',
	'DISABLE_REMOVE_THANKS' => 'Waardering verwijderen is uitgeschakeld door de beheerders.',
	'GIVEN' => 'Waardering gegeven',
	'GLOBAL_INCORRECT_THANKS' => 'Je kan geen waardering achterlaten op een globale mededeling dat niet geplaatst is in een specifiek forum.',
    'GRATITUDES' => 'Overzicht waarderingen',
	'INCORRECT_THANKS' => 'Waardering foutief',
	'JUMP_TO_FORUM' => 'Ga naar forum',
	'JUMP_TO_TOPIC' => 'Ga naar onderwerp',
	'FOR_MESSAGE' => ' voor bericht',
	'FURTHER_THANKS' => array(
		1 => ' en een andere gebruiker',
		2 => ' en %d meer gebruikers'
	),
	'NO_VIEW_USERS_THANKS' => 'You are not authorised to view the Thanks List.',
	'NOTIFICATION_THANKS_GIVE' => array(
		1 => '<strong>Waardering ontvangen</strong> van %1$s voor het bericht:',
		2 => '<strong>Waarderingen ontvangen</strong> from %1$s voor de berichten:',
	),
	'NOTIFICATION_THANKS_REMOVE' => array(
		1 => '<strong>Waardering</strong> van %1$s voor het bericht:',
		2 => '<strong>Waarderingen verwijderd</strong> van %1$s voor de berichten:',
	),
	'NOTIFICATION_TYPE_THANKS' => 'Bedankt voor je bericht',
	'NOTIFICATION_TYPE_THANKS_GIVE' => 'Iemand heeft een bericht gewaardeerd',
	'NOTIFICATION_TYPE_THANKS_REMOVE' => 'Iemand heeft zijn waardering voor een bericht verwijderd',
	'RECEIVED' => 'Waarderingen&nbsp;ontvangen',
	'REMOVE_THANKS' => 'Verwijder je waardering: ',
	'REMOVE_THANKS_CONFIRM' => 'Weet je zeker dat je je waardering wilt verwijderen?',
	'REMOVE_THANKS_SHORT' => 'Verwijder waardering',
	'REPUT' => 'Waardering',
	'REPUT_TOPLIST' => 'Waardering ranglijst — %d',
    'RATING_LOGIN_EXPLAIN' => 'Je hebt geen toegang tot de ranglijst van waarderingen',
	'RATING_NO_VIEW_TOPLIST' => 'Je hebt geen toegang tot de ranglijst van waarderingen',
	'RATING_VIEW_TOPLIST_NO' => 'Ranglijst is leeg of uitgeschakeld door de beheerder',
	'RATING_FORUM' => 'Forum',
	'RATING_POST' => 'Bericht',
	'RATING_TOP_FORUM' => 'Waardering fora',
	'RATING_TOP_POST' => 'Waardering berichten',
	'RATING_TOP_TOPIC' => 'Waardering onderwerpen',
	'RATING_TOPIC' => 'Onderwerp',
	'THANK' => 'tijd',
	'THANK_FROM' => 'van',
	'THANK_TEXT_1' => 'Deze gebruikers waarderen ',
	'THANK_TEXT_2' => array(
		1 => ' voor het bericht: ',
		2 => ' voor de berichten (totaal %d):'
	),
	'THANK_POST' => 'Laat een waardering achter voor de auteur van dit bericht: ',
	'THANK_POST_SHORT' => 'Waardeer',
	'THANKS' => array(
		1 => '%d keer',
		2 => '%d keren',
	),
	'THANKS_BACK' => 'Terug',
	'THANKS_INFO_GIVE' => 'Je hebt een waardering gegeven voor dit bericht.',
	'THANKS_INFO_REMOVE' => 'Je hebt je waardering verwijderd.',
	'THANKS_LIST' => 'Open/sluit lijst',
	'THANKS_PM_MES_GIVE' => 'heeft jou bericht gewaardeerd',
	'THANKS_PM_MES_REMOVE' => 'heeft zijn/haar waardering verwijderd voor het bericht ',
	'THANKS_PM_SUBJECT_GIVE' => 'Waardeer dit bericht',
	'THANKS_PM_SUBJECT_REMOVE' => 'Verwijder waardering voor dit bericht',
	'THANKS_USER' => 'Lijst van waarderingen',
	'TOPLIST' => 'Meest gewaardeerde berichten'
));

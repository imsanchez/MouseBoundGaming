<?php
	/*
	 *	Mouse Bound Source Code
	 *	Copyright (C) 2015 Isaiah Marc Sanchez <isaiah.marc.sanchez@gmail.com> - All Rights Reserved.
	 *
	 *	This file is proprietary and confidential.
	 *
	 *	This file is property of Isaiah Marc Sanchez and is not meant to be distributed or duplicated, privately or publicly. 
	 *	Unauthorized distributing, duplicating, or using of this file, via any medium, is strictly prohibited and is 
	 *	in violation of Article 1, Section 1, Clause 8 of the United States Constitution and will be pursued.
	 *
	 *	If you have authorized access to this code, please note it may contain private, important, and sensitive information
	 *	that can never be shared or copied under any circumstances.
	 *
	 *	This code is not licensed with the GNU Affero General Public License <http://www.gnu.org/licenses/agpl-3.0.html> 
	 *	or the MIT License <http://opensource.org/licenses/MIT>.
	 *
	 * 	This code is a heavily modified branch of the PHP Framework "Laravel" written by Taylor Otwell <taylorotwell@gmail.com> 
	 *	that was licensed with the MIT License.
	 */
	
	session_start();
	define('URL', '/');
	function compress($buffer) {
		$buffer = 
				preg_replace(
					array(
				        '/\>[^\S ]+/s',
				        '/[^\S ]+\</s',
				        '/(\s)+/s'
				    ), 
					array(
				        '>',
				        '<',
				        '\\1'
				    ), 
					$buffer
				);
		// Comments
		$buffer = preg_replace('!/\*.*?\*/!s', '', $buffer);
		$buffer = preg_replace('/\n\s*\n/', "\n", $buffer);
		$buffer = preg_replace('/^<!--(?!\[[^]+])(?:(?!-->).)*-->$/', '', $buffer);
		// Trim Each Line
		$buffer = preg_replace('/^\\s+|\\s+$/m', '', $buffer);
		// Clear Spaces
		$buffer = str_replace(array("\r\r\r", "\r\r", "\r\n", "\n\r", "\n\n\n", "\n\n"), "\n", $buffer);
		// Clear Tabs
		$buffer = str_replace(array("\t\t\t", "\t\t", "\t\n", "\n\t"), "\t", $buffer);
		// Clear Blank Spaces
		$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
		// Clear Non-breaking Spaces
		$buffer = str_replace(" &nbsp;", "&nbsp;", $buffer);
		$buffer = str_replace("&nbsp; ", "&nbsp;", $buffer);
		return $buffer;
	}
	ob_start('compress');

	/* http://www.webmonkey.com/2010/02/html_cheatsheet/ */

	$community = array(
		'Twitter' 			=> 'https://twitter.com/MouseBound',
		'Facebook' 			=> 'https://www.facebook.com/MouseBoundGaming',
		'Steam' 			=> 'http://steamcommunity.com/groups/MouseBoundGaming',
		'Twitch' 			=> 'https://www.twitch.tv/mouseboundgaming'
	);

	/* PAGE 1 / HOME */
	$pg1 = array(
		'meta-title' 		=> 'Mouse Bound | New York E-Sports Orginization',
		'title' 			=> 'Mouse Bound',
		'subtitle' 			=> 'Counter Strike Orginization'
	);
	$pg1sec1 = array(
		'title' 			=> 'About Mouse Bound',
		'description' 		=> ' Mouse Bound is an Counter-Strike organization that strives to bring you the very best in terms of teams, servers, online 
								 and LAN tournaments, and an overall great gaming experience. We look to produce monthly online tournaments and tri-monthly 
								 LAN tournaments to help fuel the competitive scene in North America. We are a new organization and we hope to soon branch 
								 out and become the leading source of North American Counter-Strike. Mouse Bound is comprised of E-Sports enthusiasts and 
								 former/current players all who work together so that Mouse Bound can grow and continue to provide our fans with the best 
								 in the industry. All of our staff are passionate about the game and the  work we do. At the end of the day everything we
								 do is made by gamers for gamers.'

		);
	$pg1sec1data = array(
		array(
			'picture' 		=> 'https://scontent-ord.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/644400_934419046577164_1049811725208345443_n.jpg?oh=23aca9a7b27523298e35097bad3b584c&oe=55A8AB7E', // URL
			'name' 			=> 'Marc "em-jay" Suda',
			'title' 		=> 'Founder &amp; CEO',
			'social'		=> array(
				'facebook' 	=> 'https://www.facebook.com/mjrulz5',
				'twitter' 	=> 'https://twitter.com/Mjrulz5',
				'steam' 	=> 'http://steamcommunity.com/id/mjrulz5',
				'twitch' 	=> 'http://www.twitch.tv/mjrulz5'
			)
		)
	);							 

	$pg1sec2 = array(
		'title' 			=> 'Upcoming Events'
	);
	$pg1sec2data = array(
		array(
			'day'			=> '',
			'details' 		=> ''
		),
		array(
			'day' 			=> 'Mouse Bound looking to pick up a CSGO Team',
			'details' 		=> 'We are currently in the process of searching for a Counter Strike Team to represent Mouse Bound in the NA competitive scene.'
		)
	);

	$pg1faq = array(
		'active' => false,
		'title' => 'Frequently Asked Questions'
	);
	$pg1faqdata = array(
		array(
			'question' 		=> 'What if I get lost traveling to the location?',
			'answer' 		=> 'Call or text us at (123)456-7890. Make sure prior to traveling you use a service like <a href="https://www.hopstop.com/">HopStop</a> or <a href="https://www.google.com/maps">Google Maps</a>.'
		)
	);
	$pg1nl = array(
		'active' => false,
		'title' 			=> 'Stay informed with our newsletter'
	);
	$pg1sec3 = array(
		'title' 			=> 'Contact Us'
	);
	$pg1sec3data = array(
		'email'				=> 'contact@mouseboundgaming.com'
	);
	$pg1sec3form = 'mouseboundgaming@gmail.com';

	/* PAGE 2 / LAN */
	$pg2 = array(
		'meta-title' 		=> 'Mouse Bound | New York City E-Sports Tournaments',
		'title' 			=> 'Mouse Bound LAN'
	);
	$pg2sec1 = array(
		'title' 			=> 'Information will stay, but the LAN will not be happening.',
		'subtitle' 			=> '<b>General Information</b>
								<ul>
									<li>Hosted in "Z Bar"</li>
									<li>26-12 Hoyt Ave S Queens, NY 11102</li>
									<li>Age is not a problem to attend
									<li>There will be ID checks since there will be alcohol at the venue
									<li>May 23rd and 24th</li>
									<li>Starts 9:00 AM and will go until matches are finished</li>
									<li>BYOC event</li>
								</ul>
								<b>Tournament Format</b>
								<ul>
									<li>16 Teams</li>
									<li>ESEA Rule Set</li>
									<li>Map List: Dust II, Inferno, Cobble, Overpass, Mirage, Cache, Season</li>
									<li>Maps will be selected via veto.</li>
									<li>Best of 1 Group Play</li>
									<li>4 groups, 4 teams per group</li>
									<li>2 wins advance, 2 losses go home</li>
								</ul>
								<b>Prize Pool</b>
								<ol>
									<li>$1250</li>
									<li>$750</li>
									<li>$250</li>
								</ol>'
	);
	$map = array(
		'location' 			=> '26-12 Hoyt Ave S Queens, NY 11102',
		'default' 			=> 'Open the map <i class="fa fa-angle-down"></i>',
		'alt' 				=> 'Close the map <i class="fa fa-angle-up"></i>'
	);
	$pg2sec3 = array(
		'title' 			=> 'Registration',
		'subtitle' 			=> 'Get started below. Refunds will only be issued if there are not enough teams attending the event.<br/> 
								If you would prefer to use paypal, then you can send a business payment to Sudam98@outlook.com.<br/> 
								Please remeber to put your email, player name, and team name in the text box when using paypal.<br/> 
								Same prices and dates apply to paypal users.'
	);
	$pg2sec4 = array(
		'title' 			=> 'Teams<br/><i><small>*Subject to Change*</small></i>'
	);
	$teams2 = array(
		array(
			'title' 		=> 'Team 1',
			'subtitle'		=> 'Player 1<br/>Player 2<br/>Player 3<br/>Player 4<br />Player 5<br/>'
		),
		array(
			'title' 		=> 'Team 2',
			'subtitle'		=> 'Player 1<br/>Player 2<br/>Player 3<br/>Player 4<br />Player 5<br/>' 
		),
		array(
			'title' 		=> 'Team 3',
			'subtitle'		=> 'Player 1<br/>Player 2<br/>Player 3<br/>Player 4<br />Player 5<br/>' 
		),
		array(
			'title' 		=> 'Team 4',
			'subtitle'		=> 'Player 1<br/>Player 2<br/>Player 3<br/>Player 4<br />Player 5<br/>' 
		),
		array(
			'title' 		=> 'Team 5',
			'subtitle'		=> 'Player 1<br/>Player 2<br/>Player 3<br/>Player 4<br />Player 5<br/>' 
		),
		array(
			'title' 		=> 'Team 6',
			'subtitle'		=> 'Player 1<br/>Player 2<br/>Player 3<br/>Player 4<br />Player 5<br/>' 
		),
		array(
			'title' 		=> 'Team 7',
			'subtitle'		=> 'Player 1<br/>Player 2<br/>Player 3<br/>Player 4<br />Player 5<br/>' 
		),
		array(
			'title' 		=> 'Team 8',
			'subtitle'		=> 'Player 1<br/>Player 2<br/>Player 3<br/>Player 4<br />Player 5<br/>'
		),
		array(
			 'title' 		=> 'Team 9',
			'subtitle'		=> 'Player 1<br/>Player 2<br/>Player 3<br/>Player 4<br />Player 5<br/>'
		),
		array(
			'title' 		=> 'Team 10',
			'subtitle'		=> 'Player 1<br/>Player 2<br/>Player 3<br/>Player 4<br />Player 5<br/>'
		),
		array(
			 'title' 		=> 'Team 11',
			'subtitle'		=> 'Player 1<br/>Player 2<br/>Player 3<br/>Player 4<br />Player 5<br/>' 
		),
		array(
			'title' 		=> 'Team 12',
			'subtitle'		=> 'Player 1<br/>Player 2<br/>Player 3<br/>Player 4<br />Player 5<br/>' 
		),
		array(
			'title' 		=> 'Team 13',
			'subtitle'		=> 'Player 1<br/>Player 2<br/>Player 3<br/>Player 4<br />Player 5<br/>' 
		),
		array(
			'title' 		=> 'Team 14',
			'subtitle'		=> 'Player 1<br/>Player 2<br/>Player 3<br/>Player 4<br />Player 5<br/>' 
		),
		array(
			'title' 		=> 'Team 15',
			'subtitle'		=> 'Player 1<br/>Player 2<br/>Player 3<br/>Player 4<br />Player 5<br/>' 
		),
		array(
			'title' 		=> 'Team 16',
			'subtitle'		=> 'Player 1<br/>Player 2<br/>Player 3<br/>Player 4<br />Player 5<br/>' 
		)
	);
	$pg2sec5 = array(
		'title' 			=> 'Brackets<br/><i><small>*Subject to Change*</small></i>',
		'embed'				=> '<iframe src="http://challonge.com/MouseBound/module" width="100%" height="500" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>'
	);
	$pg2sec6 = array(
		'title' 			=> 'Stream',
		'embed' 			=> '<iframe src="http://www.twitch.tv/mouseboundgaming/embed" frameborder="0" scrolling="no"></iframe>'
	);

	/* PAGE 3 / Servers */
	$pg3 = array(
		'meta-title' 		=> 'Mouse Bound | New York City E-Sports Tournaments',
		'title' 			=> 'Mouse Bound'
	);

	/* PAGE 4 / SPONSORS */
	$pg4 = array(
		'meta-title' 		=> 'Mouse Bound | New York City E-Sports Tournaments',
		'title' 			=> 'Sponsors',
		'subtitle'			=> "If you or your business is interesting in learning more about sponsorship opportunities with Mouse Bound, 
								please email us at: MouseBoundGaming@gmail.com so we can send you more information! <br/>
								Also, if you are a passionate individual who may be looking to help support Mouse Bound. <br/>
								Either way, we truly appreciate anyone taking the time to consider supporting our organization and what 
								we are building, and hope that you give Aware eSports a chance to build a lasting partnership."
	);

	/* NEW CODE FORMAT */
	$online = array(
			'title' 		=> 'Mouse Bound Announces CS:GO June 2k Series',
			'date'			=> '2015-05-31',
			'event'			=> '2015-12-12',
			'prizepool'		=> '',
			'fillertime1'	=> '',
			'fillertime2'	=> '',
			'fillertime3'	=> '',
			'fillertime4'	=> '',
			'fillertime5'	=> '',
			'fillertime6'	=> '',
			'fillertime7'	=> '',
			'fillertime8'	=> ''
	);
	$teams = array(
		array(
			'title' 		=> 'Player 1',
			'subtitle'		=> 'Real Name'
		),
		array(
			'title' 		=> 'Player 2',
			'subtitle'		=> 'Real Name' 
		),
		array(
			'title' 		=> 'Player 3',
			'subtitle'		=> 'Real Name' 
		),
		array(
			'title' 		=> 'Player 4',
			'subtitle'		=> 'Real Name' 
		),
	);
	$sponsors = array(
		array(
			'picture' 		=> 'https://scontent-lga1-1.xx.fbcdn.net/hphotos-xtf1/v/t1.0-9/11245804_835508349876337_5321894569472006124_n.jpg?oh=7b00ace90780d8f144b62a7dcf985da3&oe=55F2784D', // URL
			'name' 			=> 'Respondint',
			'title' 		=> 'Hosting, Technical, Business and Office Solutions',
			'social'		=> array(
				'facebook' 	=> 'https://www.facebook.com/mjrulz5',
				'twitter' 	=> 'https://twitter.com/Mjrulz5',
				'steam' 	=> 'http://steamcommunity.com/id/mjrulz5',
				'twitch' 	=> 'http://www.twitch.tv/mjrulz5'
			)
		)
	);	
<?php
	/*
	 *	Mouse Bound Source Code
	 *	Copyright (C) 2015 Isaiah Marc Sanchez <isaiah.marc.sanchez@gmail.com> <li>All Rights Reserved.
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

	define('PAGE', 'ONLINE');
	define('NAV', 'SOLID');
	require('defines.php');
	include('head.php');
?>
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <div class="page" id="top">
            <?php require('nav.php'); ?>
            <section class="page-section">
                <div class="container relative">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="blog-item">
    							<div class="blog-item-body">
    								<div class="blog-item-date">
	                                    <span class="date-num"><?=isset($online['date']) && !empty($online['date']) ? date("d", strtotime($online['date'])) : NULL?></span><?=isset($online['date']) && !empty($online['date']) ? date("M", strtotime($online['date'])) : NULL?>
	                                </div>
                                    <?=isset($online['title']) && !empty($online['title']) ? '<h1 class="mt-0 font-alt">' . $online['title'] . '</h1>' : NULL?>
									<div class="lead">
										<p>
											Mouse Bound, an up and coming E-sport organization is pleased to announce the Mouse Bound June Cup online tournament. The Mouse Bound June Cup will be an online tournament that will consist of one weekend of CS:GO matches hosted on CEVO.com and broadcast by CEVO-TV taking place on <?=isset($online['event']) && !empty($online['event']) ? date("F j", strtotime($online['event'])) : NULL?>, it will be open to North American CS:GO teams of all skill levels. The tournament will have <?=isset($online['prizepool']) && !empty($online['prizepool']) ? $online['prizepool'] : '(filler prize pool)'?> up for grabs, and the team that finishes the tournament on top will win the prize pool and free admission to Mouse Bound LAN. This will be the first of many online tournaments that will be hosted by Mouse Bound monthly.
										</p>
									</div>
									<h4 class="blog-page-title font-alt">Prize Winnings</h4>
									<ol>
										<li>$1,250.00</li>
										<li>$500.00</li>
										<li>$250.00</li>
									</ol>
									<p>
										<small>These prizes will be awarded to the teams that make it farthest in the tournament.</small>
									</p>
									<h4 class="blog-page-title font-alt">FORMAT & SCHEDULE</h4>
									<ul>
										<li>128 team double elimination bracket</li>
										<li>first come, first serve open registration</li>
										<li>best of three maps (bo3) upper bracket and best of one map (bo1) lower bracket</li>
										<li>map & side selection (bo3): VETO process (maps 1 & 2) / knife for sides (map 3)</li>
										<li>map & side selection (bo1): VETO process + knife for sides</li>
										<li>tournament seeds: random</li>
										<li>top 8 teams advance to day two</li>
											<ul>
												<li>Round of 128: 12:00 PM ET</li>
												<li>Round of 64 / LB Round 1: <?=isset($online['fillertime1']) && !empty($online['fillertime1']) ? $online['fillertime1'] : '(filler time)'?></li>
												<li>Round of 32 / LB Round 2: <?=isset($online['fillertime2']) && !empty($online['fillertime2']) ? $online['fillertime2'] : '(filler time)'?></li>
												<li>LB Round 3: <?=isset($online['fillertime3']) && !empty($online['fillertime3']) ? $online['fillertime3'] : '(filler time)'?></li>
												<li>Round of 16 / LB Round 4: <?=isset($online['fillertime4']) && !empty($online['fillertime4']) ? $online['fillertime4'] : '(filler time)'?></li>
												<li>LB Round 5: <?=isset($online['fillertime5']) && !empty($online['fillertime5']) ? $online['fillertime5'] : '(filler time)'?></li>
												<li>Round of 8 / LB Round 6: <?=isset($online['fillertime1']) && !empty($online['fillertime1']) ? $online['fillertime1'] : '(filler time)'?></li>
												<li>LB Round 7: <?=isset($online['fillertime6']) && !empty($online['fillertime6']) ? $online['fillertime6'] : '(filler time)'?></li>
												<li>LB Round 8: <?=isset($online['fillertime7']) && !empty($online['fillertime7']) ? $online['fillertime7'] : '(filler time)'?></li>
										 	</ul>
									</ul>
									<small>Teams should be aware that the tournament schedule is tentative and teams should be prepared to play matches in a rush style back-to-back format. Reschedules will not be permitted. The complete Mouse Bound Cup schedule can be found online HERE.</small>
									<h4 class="blog-page-title font-alt">MAP POOL</h4>
									<ul>
										<li>de_dust2</li>
										<li>de_inferno</li>
										<li>de_train</li>
										<li>de_mirage</li>
										<li>de_cache</li>
										<li>de_overpass</li>
										<li>de_cbble</li>
									</ul>
									<p class="text-center pt-20">
										<a class="btn btn-mod btn-medium">
	                                        CLICK HERE TO REGISTER FOR THE MOUSE BOUND JUNE CUP
	                                    </a>
	                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php require('footer.php'); ?>
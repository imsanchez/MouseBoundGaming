<?php
    /*
     *  Mouse Bound Source Code
     *  Copyright (C) 2015 Isaiah Marc Sanchez <isaiah.marc.sanchez@gmail.com> - All Rights Reserved.
     *
     *  This file is proprietary and confidential.
     *
     *  This file is property of Isaiah Marc Sanchez and is not meant to be distributed or duplicated, privately or publicly. 
     *  Unauthorized distributing, duplicating, or using of this file, via any medium, is strictly prohibited and is 
     *  in violation of Article 1, Section 1, Clause 8 of the United States Constitution and will be pursued.
     *
     *  If you have authorized access to this code, please note it may contain private, important, and sensitive information
     *  that can never be shared or copied under any circumstances.
     *
     *  This code is not licensed with the GNU Affero General Public License <http://www.gnu.org/licenses/agpl-3.0.html> 
     *  or the MIT License <http://opensource.org/licenses/MIT>.
     *
     *  This code is a heavily modified branch of the PHP Framework "Laravel" written by Taylor Otwell <taylorotwell@gmail.com> 
     *  that was licensed with the MIT License.
     */
?>
<nav class="main-nav dark <?=NAV == 'SOLID' ? 'js-stick' : 'transparent stick-fixed'?>">
    <div class="full-wrapper relative clearfix" style="text-align:center;">
        <div class="mobile-nav">
            <i class="fa fa-bars"></i>
        </div>
        <div class="inner-nav desktop-nav" style="float:none;">
            <ul class="clearlist scroll-nav local-scroll">
                <li>
                    <a href="<?=PAGE == 'INDEX' ? NULL : URL . '/index'?>" class="mn-has-sub">Home <i class="fa fa-angle-down"></i></a>
                    <ul class="mn-sub">
                        <li>
                            <a href="<?=PAGE == 'INDEX' ? NULL : URL . '/index'?>#about">About</a>
                        </li>
                        <li>
                            <a href="<?=PAGE == 'INDEX' ? NULL : URL . '/index'?>#news">News</a>
                        </li>
                        <?php if($pg1faq['active'] != false) : ?>
                        <li>
                            <a href="<?=PAGE == 'INDEX' ? NULL : URL . '/index'?>#events">Events</a>
                        </li>
                        <?php endif; ?>
                        <li>
                            <a href="<?=PAGE == 'INDEX' ? NULL : URL . '/index'?>#contact">Contact</a>
                        </li>
                    </ul>
                </li>
                <!--<li>
                    <a href="<?=PAGE == 'LAN' ? NULL : URL . '/uc'?>" class="mn-has-sub">LAN <i class="fa fa-angle-down"></i></a>
                    <ul class="mn-sub">
                        <li>
                            <a href="<?=PAGE == 'LAN' ? NULL : URL . '/uc'?>#info">Information</a>
                        </li>
                        <li>
                            <a href="<?=PAGE == 'LAN' ? NULL : URL . '/uc'?>#location">Location</a>
                        </li>
                        <li>
                            <a href="<?=PAGE == 'LAN' ? NULL : URL . '/uc'?>#registration">Registration</a>
                        </li>
                        <li>
                            <a href="<?=PAGE == 'LAN' ? NULL : URL . '/uc'?>#teams">Teams</a>
                        </li>
                        <li>
                            <a href="<?=PAGE == 'LAN' ? NULL : URL . '/uc'?>#brackets">Brackets</a>
                        </li>
                        <li>
                            <a href="<?=PAGE == 'LAN' ? NULL : URL . '/uc'?>#stream">Stream</a>
                        </li>
                    </ul>
                </li>-->
                <li>
                    <a href="<?=PAGE == 'ONLINE' ? NULL : URL . '/uc'?>" class="mn-has-sub">Online<!-- <i class="fa fa-angle-down"></i>--></a>
                    <!--<ul class="mn-sub">
                        <li>
                            <a href="<?=PAGE == 'ONLINE' ? NULL : URL . '/uc'?>#about">About</a>
                        </li>
                        <li>
                            <a href="<?=PAGE == 'ONLINE' ? NULL : URL . '/uc'?>#info">Information</a>
                        </li>
                        <li>
                            <a href="<?=PAGE == 'ONLINE' ? NULL : URL . '/uc'?>#registration">Registration</a>
                        </li>
                        <li>
                            <a href="<?=PAGE == 'ONLINE' ? NULL : URL . '/uc'?>#stream">Stream</a>
                        </li>
                    </ul>-->
                </li>
                <li>
                    <a href="<?=PAGE == 'TEAMS' ? NULL : URL . '/uc'?>" class="mn-has-sub">Teams <i class="fa fa-angle-down"></i></a>
                    <ul class="mn-sub">
                        <li>
                            <a href="<?=PAGE == 'TEAMS' ? NULL : URL . '/uc'?>#registration">CSGO</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?=PAGE == 'SERVERS' ? NULL : URL . '/servers'?>" class="mn-has-sub">Servers <i class="fa fa-angle-down"></i></a>
                    <ul class="mn-sub">
                        <li>
                            <a href="<?=PAGE == 'SERVERS' ? NULL : URL . '/servers'?>#ffa">FFA DM</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="mn-has-sub">Community <i class="fa fa-angle-down"></i></a>
                    <ul class="mn-sub">
                        <?php foreach($community as $name => $link) : ?>
                            <li>
                                <a href="<?=$link?>" title="<?=$name?>" target="_blank"><?=$name?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li>
                    <a href="<?=PAGE == 'SPONSORS' ? NULL : URL . '/sponsors'?>" class="mn-has-sub">Sponsors <i class="fa fa-angle-down"></i></a>
                    <ul class="mn-sub">
                        <li>
                            <a href="<?=PAGE == 'SPONSORS' ? NULL : URL . '/sponsors'?>#current">Current Sponsors</a>
                        </li>
                        <li>
                            <a href="<?=PAGE == 'SPONSORS' ? NULL : URL . '/sponsors'?>#potential">Potential Sponsors</a>
                        </li>

                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
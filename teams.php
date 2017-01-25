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

    define('PAGE', 'TEAMS');
    define('NAV', 'SOLID');
    require('defines.php');
    include('head.php');
?>
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <div class="page" id="top">
            <?php include('nav.php'); ?>
            <section class="small-section bg-gray-lighter">
                <div class="relative container align-left">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="hs-line-11 no-transp font-alt mb-20 mb-xs-0">TEAMS</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page-section">
                <div class="container relative">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <h1 class="blog-page-title font-alt">CSGO</h1>
                            <div class="row multi-columns-row alt-features-grid">
                                <?php 
                                    foreach($teams as $team) :
                                ?>
                                    <div class="col-sm-4 col-md-3 col-lg-3">
                                        <div class="alt-features-item align-left">
                                            <h3 class="alt-features-title font-alt"><?=$team['title']?></h3>
                                            <div class="alt-features-descr align-left">
                                                <?=$team['subtitle']?>
                                            </div>
                                        </div>
                                    </div>
                                <?php 
                                    endforeach;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?=$pg3sec2['embed']?>
            <?php include('footer.php'); ?>
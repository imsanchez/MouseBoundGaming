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

    define('PAGE', 'LAN');
    require('defines.php');
    include('head.php');
?>
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <div class="page" id="top">
            <section class="home-section bg-dark-alfa-50 fixed-height-small" data-background="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/items/730/ef7cb44d312df5038cba0f69a0901da427900645.jpg" id="home">
                <div class="js-height-parent container" style="height: 600px;">
                    <div class="home-content">
                        <div class="home-text">
                            <h2 class="hs-line-14 font-alt mb-50 mb-xs-30">
                                <?=$pg2['title']?>
                            </h2>
                        </div>
                    </div>
                </div>
            </section>
            <?php require('nav.php'); ?>
            <section class="page-section pb-50 pt-50 bg-dark" data-background="images/full-width-images/section-bg-2.jpg" id="information">
                <div class="container relative">
                    <div class="banner-content">
                        <h1 class="banner-heading font-alt align-center"><?=$pg2sec1['title']?></h1>
                        <div class="banner-decription">
                            <?=$pg2sec1['subtitle']?>
                        </div>
                        <div class="local-scroll">
                            <?php if(isset($pg2sec1['btn-link']) && isset($pg2sec1['btn-text'])) : ?>
                                <a href="<?=$pg2sec1['btn-link']?>" class="btn btn-mod btn-w btn-medium btn-round"><?=$pg2sec1['btn-text']?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page-section pb-50 pt-50" id="registration">
                <div class="container relative">
                    <h1 class="section-title font-alt mb-70 mb-sm-40"><?=$pg2sec3['title']?></h1>
                    <div class="row mb-70 mb-xs-40">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="section-text align-center">
                                <?=$pg2sec3['subtitle']?>
                            </div>
                        </div>
                    </div>
                    <div class="row multi-columns-row">
                        <div class="col-sm-8 col-md-4 col-lg-4">
                            <div class="pricing-item">
                                <div class="pricing-item-inner">
                                    <div class="pricing-wrap">
                                        <div class="pricing-title">
                                            Spectator
                                        </div>
                                        <hr style="border-colr: #f1f1f1;"/>
                                        <div class="pricing-num">
                                            <sup>$</sup>15
                                        </div>
                                        <div class="pr-per">
                                            permanent price
                                        </div>
                                        <div class="pr-button">
                                            <a href="https://app.moonclerk.com/pay/ha9b2xjbqts" class="btn btn-mod" target="_blank">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-4 col-lg-4">
                            <div class="pricing-item">
                                <div class="pricing-item-inner">
                                    <div class="pricing-wrap">
                                        <div class="pricing-title">
                                            Player
                                        </div>
                                        <hr style="border-colr: #f1f1f1;"/>
                                        <div class="pricing-num">
                                            <sup>$</sup>50
                                        </div>
                                        <div class="pr-per">
                                            early bird special
                                        </div>
                                        <hr style="border-colr: #f1f1f1;"/>
                                        <div class="pricing-num">
                                            <sup>$</sup>55
                                        </div>
                                        <div class="pr-per">
                                            after 04/10/2015
                                        </div>
                                        <hr style="border-colr: #f1f1f1;"/>
                                        <div class="pricing-num">
                                            <sup>$</sup>60
                                        </div>
                                        <div class="pr-per">
                                            at the door
                                        </div>
                                        <div class="pr-button">
                                            <a href="https://app.moonclerk.com/pay/fn6gpf4a710" class="btn btn-mod" target="_blank">Buy Now</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-4 col-lg-4">
                            <div class="pricing-item">
                                <div class="pricing-item-inner">
                                    <div class="pricing-wrap">
                                        <div class="pricing-title">
                                            Team
                                        </div>
                                        <hr style="border-colr: #f1f1f1;"/>
                                        <div class="pricing-num">
                                            <sup>$</sup>250
                                        </div>
                                        <div class="pr-per">
                                            early bird special
                                        </div>
                                        <hr style="border-colr: #f1f1f1;"/>
                                        <div class="pricing-num">
                                            <sup>$</sup>275
                                        </div>
                                        <div class="pr-per">
                                            after 04/10/2015
                                        </div>
                                        <hr style="border-colr: #f1f1f1;"/>
                                        <div class="pricing-num">
                                            <sup>$</sup>300
                                        </div>
                                        <div class="pr-per">
                                            at the door
                                        </div>
                                        <div class="pr-button">
                                            <a href="https://app.moonclerk.com/pay/h0eu0ogthol" class="btn btn-mod" target="_blank">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page-section pb-0 pt-0" id="location" style="position:relative;">
                <div class="google-map">
                    <div data-address="<?=$map['location']?>" id="map-canvas"></div>
                    <div class="map-section">
                        <div class="map-toggle">
                            <div class="mt-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="mt-text font-alt">
                                <div class="mt-open"><?=$map['default']?></div>
                                <div class="mt-close"><?=$map['alt']?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="align-center" style="position:absolute;padding:10px;right:0;bottom:0;z-index:999;">
                    <a href="https://www.google.com/maps/@40.772285,-73.92037,3a,75y,234.76h,86.09t/data=!3m4!1e1!3m2!1spw8pw9pY-kaSfieMzKhxvg!2e0" style="color:#fff!important;text-decoration:none!important;"><img src="https://lh4.ggpht.com/99bsLKJEN2B6T-WI63UYU7FG8mEXOGxbif6Lsgfzs_pIDs_2RxJSiOVaMhMhRmciizk=w300" style="max-width:50px;height:auto;" /></a>
                </div>
            </section>
            <section class="page-section pb-50 pt-50" id="teams">
                <div class="container relative">
                    <h1 class="section-title font-alt mb-70 mb-sm-40">
                        <?=$pg2sec4['title']?>
                    </h1>
                    <div class="row multi-columns-row alt-features-grid">
                        <?php 
                            foreach($teams2 as $team) :
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
            </section>
            <section class="page-section pb-0 pt-50 bg-dark" id="brackets">
                <div class="relative">
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        <?=$pg2sec5['title']?>
                    </h2>
                    <div class="videoWrapper" style="padding-bottom: 42.25%;padding-top: 0;">
                        <?=$pg2sec5['embed']?>
                    </div>
                </div>
            </section>
            <section class="page-section pb-0 pt-50" id="stream">
                <div class="relative">
                    <h3 class="section-title font-alt mb-70 mb-sm-40">
                        <?=$pg2sec6['title']?>
                    </h3>
                    <div class="videoWrapper" style="padding-top:0;padding-bottom:42.25%;">
                       <?=$pg2sec6['embed']?>
                    </div>
                </div>
            </section>
            <?php require('footer.php'); ?>
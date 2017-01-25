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

    define('PAGE', 'SPONSORS');
    define('NAV', 'SOLID');
    require('defines.php');
    include('head.php');
?>
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <div class="page" id="top">
            <?php require('nav.php'); ?>
            <section class="small-section bg-gray-lighter">
                <div class="relative container align-left">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="hs-line-11 no-transp font-alt mb-20 mb-xs-0">SPONSORS</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page-section">
                <div class="container relative">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <h1 class="blog-page-title font-alt">Current Sponsors</h1>
                            <div class="row multi-columns-row alt-features-grid">
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="alt-features-item align-left">
                                        <div class="alt-features-icon">
                                            <a href="https://respondint.com"><img src="/assets/images/sponsors/respondint.png" alt="" /></a>
                                        </div>
                                        <h3 class="alt-features-title font-alt">Respondint Solutions LLC</h3>
                                        <div class="alt-features-descr align-left">
                                            Websites, Hosting, Technical, and Universal solutions for businesses and individuals.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="blog-page-title font-alt">Potential Sponsors</h1>
                            <div class="lead">
                                <p>
                                    If you or your business is interesting in learning more about sponsorship opportunities with Mouse Bound, please send an email to <a href="mailto:contact@mouseboundgaming.com">contact@mouseboundgaming.com</a> so we can send you more information! Also, if you are a passionate individual who may be looking to help support Mouse Bound feel free to contact us. Either way, we truly appreciate anyone taking the time to consider supporting our organization and what we are building, and hope that you give Mouse Bound a chance to build a lasting partnership.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php require('footer.php'); ?>
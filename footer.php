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
            <footer class="page-section bg-gray-lighter footer pb-60">
                <div class="container">
                    <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
                        <a href="#top"><img src="/assets/images/icon.png" alt="" style="height:100px;width:auto;" /></a>
                    </div>
                    <div class="footer-social-links mb-110 mb-xs-60">
                        <?php foreach($community as $name => $link) : ?>
                            <a href="<?=$link?>" title="<?=$name?>" target="_blank"><i class="fa fa-<?=strtolower($name)?>"></i></a>
                        <?php endforeach; ?>
                    </div>
                    <div class="footer-text">
                        <div class="footer-copy font-alt">
                            Copyright &copy; Mouse Bound <?=date('Y')?>. All rights reserved.
                        </div>
                        <div class="footer-made">
                        	Mouse Bound and it's management are <strong>not</strong> responsible for anything. Feel free to contact us regarding any questions or concerns.<br />
            				By connecting to this website you agree to all of the Terms, Policies, Conditions, and Agreements which are subject to change at any time without notice.<br />
                            Created with love by <a href="https://www.respondint.com">Respondint</a>.
                        </div>
                    </div>
                 </div>
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                 </div>
            </footer>
        </div>
        <script src="/assets/template/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="/assets/template/js/jquery.easing.1.3.js"></script>  
        <script type="text/javascript" src="/assets/template/js/SmoothScroll.js"></script>
        <script type="text/javascript" src="/assets/template/js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="/assets/template/js/jquery.localScroll.min.js"></script>
        <script type="text/javascript" src="/assets/template/js/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="/assets/template/js/jquery.countTo.js"></script>
        <script type="text/javascript" src="/assets/template/js/jquery.appear.js"></script>
        <script type="text/javascript" src="/assets/template/js/jquery.sticky.js"></script>
        <script type="text/javascript" src="/assets/template/js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="/assets/template/js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="/assets/template/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="/assets/template/js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="/assets/template/js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="/assets/template/js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
        <script type="text/javascript" src="/assets/template/js/gmap3.min.js"></script>
        <script type="text/javascript" src="/assets/template/js/wow.min.js"></script>
        <script type="text/javascript" src="/assets/template/js/masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="/assets/template/js/jquery.simple-text-rotator.min.js"></script>
        <script type="text/javascript" src="/assets/template/js/all.js"></script>
        <script type="text/javascript" src="/assets/template/js/contact-form.js"></script>        
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
    </body>
</html>
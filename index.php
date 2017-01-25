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

	define('PAGE', 'INDEX');
	require('defines.php');
	include('head.php');

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name = $_POST['ContactName'];
		$email = $_POST['ContactEmail'];
		$text = $_POST['ContactMessage'];
		if(isset($name) && !empty($name) && isset($email) && !empty($email) && isset($text) && !empty($text)) {
			$subject = 'Message from a Visitor';
			$message = '<html><body>';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
			$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($text) . "</td></tr>";
			$message .= "</table>";
			$message .= "</body></html>";
			$headers = "From: " . $name . " <" . $email . ">\r\n";
			$headers .= "Reply-To: " . $email . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			mail($pg1sec3form, $subject, $message, $headers);
		} else {
			die('<strong>All fields are required and must be completed.</strong> Please review your contact application and try again.');
		}
	}
?>
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <div class="page" id="top">
            <section class="home-section bg-dark-alfa-30 parallax-2" id="home" style="background-image:url(http://subtlepatterns.com/patterns/dark_mosaic.png);background-size:inherit;background-repeat:repeat;">
                <div class="js-height-full">
                    <div class="home-content">
                        <div class="home-text">
                            <h1 class="hs-line-1 font-alt mb-80 mb-xs-30 mt-70 mt-sm-0">
                                <?=$pg1['title']?>
                            </h1>
                            <div class="hs-line-6">
                                <?=$pg1['subtitle']?>
                            </div>
                        </div>
                    </div>
                    <div class="local-scroll">
                        <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
                    </div>
                </div>
            </section>
            <?php require('nav.php'); ?>
            <section class="page-section pb-50 pt-50" id="about">
                <div class="container relative">
                    <h2 class="blog-page-title font-alt">
                        <?=$pg1sec1['title']?>
                    </h2>
                    <div class="lead">
                    	<p>
                            	<?=$pg1sec1['description']?> 
                        </p>
                    </div>
                    <div class="row">
                    	<?php foreach($pg1sec1data as $person) { ?>
	                    	<div class="col-sm-4 mb-xs-30 wow fadeInUp">
	                            <div class="team-item">
	                                <div class="team-item-image">
	                                    <img src="<?=isset($person['picture']) ? $person['picture'] : NULL?>" alt="" />
	                                    <div class="team-item-detail">
	                                        <?=isset($person['htitle']) ? '<h4 class="font-alt normal">' . $person['htitle'] . '</h4>' : NULL?>
	                                        <?=isset($person['hpg']) ? '<p>' . $person['hpg'] . '</p>' : NULL?>
	                                        <div class="team-social-links">
	                                        	<?php foreach($person['social'] as $name => $link) : ?>
	                                        		<a href="<?=$link?>" target="_blank"><i class="fa fa-<?=$name?>"></i></a>
	                                        	<?php endforeach; ?>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="team-item-descr font-alt">
	                                    <div class="team-item-name">
	                                        <?=isset($person['name']) ? $person['name'] : NULL?>
	                                    </div>
	                                    <div class="team-item-role">
	                                        <?=isset($person['title']) ? $person['title'] : NULL?>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <section class="page-section pt-50 pb-50 banner-section bg-dark" data-background="images/full-width-images/section-bg-2.jpg" id="events">
                <div class="container relative">
                    <h3 class="section-title font-alt mb-0"><?=$pg1sec2['title']?></h3>
                    <div class="row multi-columns-row alt-features-grid">
                        <?php foreach($pg1sec2data as $event) { ?>
	                        <div class="col-sm-6 col-md-4 col-lg-4">
	                            <div class="alt-features-item align-center">
	                                <div class="alt-features-icon">
	                                    <span class="icon-flag"></span>
	                                </div>
	                                <h3 class="alt-features-title font-alt"><?=isset($event['day']) ? $event['day'] : NULL?></h3>
	                                <div class="alt-features-descr align-center">
	                                    <?=isset($event['details']) ? $event['details'] : NULL?>
	                                </div>
	                            </div>
	                        </div>
	                    <?php } ?>
                    </div>
                </div>
            </section>
            <?php if($pg1faq['active'] != false) : ?>
	            <section class="page-section pb-50 pt-50" id="faq">
	                <div class="container relative">
	                    <h2 class="section-title font-alt mb-70 mb-sm-40">
	                        <?=$pg1faq['title']?>
	                    </h2>
	                    <div class="row section-text">
	                        <div class="col-md-8 col-md-offset-2">
	                            <dl class="accordion">
	                            	<?php foreach($pg1faqdata as $q) { ?>
	                            		<dt>
		                                    <a href="" class="active"><?=isset($q['question']) ? $q['question'] : NULL?></a>
		                                </dt>
		                                <dd style="display: block;">
		                                    <?=isset($q['answer']) ? $q['answer'] : NULL?>
		                                </dd>
	                            	<?php } ?>
	                            </dl>
	                        </div>
	                    </div>
	                </div>
	            </section>
	        <?php endif; ?>
	        <?php if($pg1nl['active'] != false) : ?>
	            <section class="page-section pb-50 pt-50 bg-gray-lighter">
	                <div class="container relative">
	                    <form action="" method="post" class="form align-center" id="NewsletterForm" name="NewsletterForm">
	                        <div class="row">
	                            <div class="col-md-6 col-md-offset-3">
	                                <div class="newsletter-label font-alt">
	                                    <?=$pg1nl['title']?>
	                                </div>
	                                <div class="mb-20">
	                                    <input placeholder="Email Address" class="newsletter-field input-md round mb-xs-10" type="email" name="NewsletterEmail" id="NewsletterEmail" required pattern=".{5,100}" <?=(!isset($_COOKIE['NEWSLETTER']) || ($_COOKIE['NEWSLETTER'] != 'TRUE')) ? NULL : 'disabled' ?>/>
	                                    <button type="submit" name="NewsletterSubmit" id="NewsletterSubmit" class="btn btn-mod btn-medium btn-round mb-xs-10" <?=(!isset($_COOKIE['NEWSLETTER']) || ($_COOKIE['NEWSLETTER'] != 'TRUE')) ? NULL : 'disabled' ?>>
	                                        Subscribe
	                                    </button>
	                                </div>
	                                <div class="form-tip">
	                                    <i class="fa fa-info-circle"></i> <?=(!isset($_COOKIE['NEWSLETTER']) || ($_COOKIE['NEWSLETTER'] != 'TRUE')) ? 'Please trust us, we will never send you spam.' : 'You are already in our mailing list. Contact us for your removal.' ?>
	                                </div>
	                            </div>
	                        </div>
	                    </form>
	                </div>
	            </section>
            <?php endif; ?>
            <section class="page-section pb-50 pt-50" id="contact">
                <div class="container relative">
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        <?=$pg1sec3['title']?>
                    </h2>
                    <div class="row mb-60 mb-xs-40">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="row">
	                            <?php foreach($pg1sec3data as $item => $value): ?>
	                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
	                                    <div class="contact-item">
	                                        <div class="ci-icon">
	                                            <i class="fa fa-<?=$item == 'phone' ? 'phone' : ($item =='address' ? 'map-marker' : ($item =='email' ? 'envelope' : NULL))?>"></i>
	                                        </div>
	                                        <div class="ci-title font-alt">
	                                        	<?=$item == 'phone' ? 'Phone' : ($item =='address' ? 'Address' : ($item =='email' ? 'Email' : NULL))?>
	                                        </div>
	                                        <div class="ci-text">
	                                            <?=$value?>
	                                        </div>
	                                    </div>
	                                </div>
	                           	<?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form action="" method="post" class="form" id="ContactForm" name="ContactForm" autocomplete="off">
                                <div class="clearfix">
                                    <div class="cf-left-col">
                                        <div class="form-group">
                                            <input type="text" name="ContactName" id="ContactName" class="input-md round form-control" placeholder="Name" pattern=".{3,100}" required style="text-transform:none">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="ContactEmail" id="ContactEmail" class="input-md round form-control" placeholder="Email" pattern=".{5,100}" required style="text-transform:none">
                                        </div>
                                    </div>
                                    <div class="cf-right-col">
                                        <div class="form-group">                                            
                                            <textarea name="ContactMessage" id="ContactMessage" class="input-md round form-control" placeholder="Message" required style="height: 84px;text-transform:none"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="cf-left-col">                                   
                                        <div class="form-tip pt-20">
                                            <i class="fa fa-info-circle"></i> All the fields are required
                                        </div>
                                    </div>
                                    <div class="cf-right-col">
                                        <div class="align-right pt-10">
                                            <button type="submit" class="btn btn-mod btn-medium btn-round" name="ContactSubmit" id="ContactSubmit">Submit Message</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <?php require('footer.php'); ?>
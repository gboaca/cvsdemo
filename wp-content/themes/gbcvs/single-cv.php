<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131505514-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131505514-2');
</script>

<?php
/*
Template Name: CV V1 Sonja 
Template Post Type: post, cv 

*/


$cf_linkedin = get_post_meta( get_the_ID(), '1linkedin', true );
$cf_fb = get_post_meta( get_the_ID(), '2fb', true );
$cf_twt = get_post_meta( get_the_ID(), '3twt', true );
$cf_insta = get_post_meta( get_the_ID(), '4insta', true );
$cf_pdf = get_post_meta( get_the_ID(), '5pdf', true );
$cf_prenume = get_post_meta( get_the_ID(), '6prenume', true );
$cf_nume = get_post_meta( get_the_ID(), '7nume', true );
$cf_titlu = get_post_meta( get_the_ID(), '8titlu', true );
$cf_oras = get_post_meta( get_the_ID(), '9oras', true );
$cf_email = get_post_meta( get_the_ID(), '10email', true );
$cf_tel = get_post_meta( get_the_ID(), '11tel', true );
$cf_profil = get_post_meta( get_the_ID(), '12profil', true );
$cf_skills = get_post_meta( get_the_ID(), '13skills', true );
$cf_knowledge = get_post_meta( get_the_ID(), '14knowledge', true );
$cf_exp1 = get_post_meta( get_the_ID(), '15exp1', true );
$cf_exp2 = get_post_meta( get_the_ID(), '16exp2', true );
$cf_exp3 = get_post_meta( get_the_ID(), '17exp3', true );
$cf_exp4 = get_post_meta( get_the_ID(), '18exp4', true );
$cf_exp5 = get_post_meta( get_the_ID(), '19exp5', true );
$cf_edu1 = get_post_meta( get_the_ID(), '20edu1', true );
$cf_edu2 = get_post_meta( get_the_ID(), '21edu2', true );
$cf_edu3 = get_post_meta( get_the_ID(), '22edu3', true );
$cf_interese = get_post_meta( get_the_ID(), '23interese', true );

?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/cv-style.css">

<nav class="Navbar">
<div class="l-Wrapper l-Wrapper--reset@sm-down">
<ul class="u-pullRight u-hidden@xs-down">
<?php if ( ! empty( $cf_pdf ) ) { ?>
   <li><a class="Navbar-btn Navbar-btn--main" href="<?=$cf_pdf?>" target="_blank" rel="noopener">Download (pdf)<br /></a></li>
<?php } ?>
</ul>
<ul>
	<?php if ( ! empty( $cf_linkedin ) ) { ?>
   	<li><a href="<?=$cf_linkedin?>" target="_blank" rel="noopener">Linkedin</a></li>
	<?php } ?>
	<?php if ( ! empty( $cf_fb ) ) { ?>
   	<li><a href="<?=$cf_fb?>" target="_blank" rel="noopener">Facebook</a></li>
	<?php } ?>
	<?php if ( ! empty( $cf_twt ) ) { ?>
   	<li><a href="<?=$cf_twt?>" target="_blank" rel="noopener">Twitter</a></li>
	<?php } ?>
	<?php if ( ! empty( $cf_insta ) ) { ?>
   	<li><a href="<?=$cf_insta?>" target="_blank" rel="noopener">Instagram</a></li>
	<?php } ?>




</ul>
</div>
</nav>
<article class="l-Wrapper">
	<div class="l-Header">
		<div class="l-Header-col">
			<a href="#">
				<h1 class="Title">
					<span class="u-shadow"><br />
						<?php
						// Check if the custom field has a value.
						if ( ! empty( $cf_prenume ) ) {
						    echo $cf_prenume;
						}
						?>
						<br />
						<?php
						if ( ! empty( $cf_nume ) ) {
						    echo $cf_nume;
						}
						?>
					</span>
					<span class="Title-sub">
						<?php  if ( ! empty( $cf_titlu ) ) { echo $cf_titlu; } ?>
					</span> 
				</h1>
			</a>
		</div>
		<div class="l-Header-col Contact">
			<div><?php  if ( ! empty( $cf_oras ) ) { echo $cf_oras; } ?></div>
			<div>
				<a class="u-link" href="mailto:<?php  if ( ! empty( $cf_email ) ) { echo $cf_email; } ?>" target="_blank" rel="noopener"><?php  if ( ! empty( $cf_email ) ) { echo $cf_email; } ?></a>
			</div>
			<div><?php  if ( ! empty( $cf_tel ) ) { echo $cf_tel; } ?></div>
		</div>
	</div>
<section class="l-Section">
<h2 class="l-Section-title h3 u-hidden@sm-down">Profile</h2>
<div class="l-Section-content">
<p><?php  if ( ! empty( $cf_profil ) ) { echo $cf_profil; } ?></p>
</div>
</section>
<section class="l-Section">
<h2 class="l-Section-title h3">Skills</h2>
<div class="l-Section-content">
<?php  if ( ! empty( $cf_skills ) ) { echo $cf_skills; } ?>
</div>
</section>
<?php  if ( ! empty( $cf_knowledge ) ) { ?>
<section class="l-Section">
<h2 class="l-Section-title h3">Knowledge</h2>
<div class="l-Section-content">
 <?php echo $cf_knowledge;  ?>
</div>
</section>
<?php } ?>
<section class="l-Section">
<h2 class="l-Section-title h3">Experience</h2>
<div class="l-Section-content">
<?php  if ( ! empty( $cf_exp1 ) ) { echo $cf_exp1; } ?>
<?php  if ( ! empty( $cf_exp2 ) ) { echo $cf_exp2; } ?>
<?php  if ( ! empty( $cf_exp3 ) ) { echo $cf_exp3; } ?>
<?php  if ( ! empty( $cf_exp4 ) ) { echo $cf_exp4; } ?>
<?php  if ( ! empty( $cf_exp5 ) ) { echo $cf_exp5; } ?>
</div>
</section>
<section class="l-Section">
<h2 class="l-Section-title h3">Education</h2>
<div class="l-Section-content">
<?php  if ( ! empty( $cf_edu1 ) ) { echo $cf_edu1; } ?>
<?php  if ( ! empty( $cf_edu2 ) ) { echo $cf_edu2; } ?>
<?php  if ( ! empty( $cf_edu3 ) ) { echo $cf_edu3; } ?>
</div>
</section>
<section class="l-Section u-hidden@print">
<h2 class="l-Section-title h3">Interests</h2>
<div class="l-Section-content">
<p><?php  if ( ! empty( $cf_interese ) ) { echo $cf_interese; } ?></p>
</div>
</section>
</article>
<div class="l-Wrapper u-keyline">
<div class="l-Footer">
<div class="l-Footer-col"><strong class="Tag"><?php  if ( ! empty( $cf_prenume ) ) { echo substr($cf_prenume, 0, 1) . "."; } ?> <?php  if ( ! empty( $cf_nume ) ) { echo $cf_nume; } ?></strong></div>
<div class="l-Footer-col Contact"><?php  if ( ! empty( $cf_tel ) ) { echo $cf_tel; } ?><br /><a href="mailto:<?php  if ( ! empty( $cf_email ) ) { echo $cf_email; } ?>" target="_blank" rel="noopener"><?php  if ( ! empty( $cf_email ) ) { echo $cf_email; } ?></a></div>
</div>
</div>
<!-- wp:paragraph -->
<p>&nbsp;</p>
<!-- /wp:paragraph -->
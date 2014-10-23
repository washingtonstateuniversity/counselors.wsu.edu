<?php

get_header();

if ( is_home() ) {
	$main_class = 'spine-main-index';
} elseif ( is_author() ) {
	$main_class = 'spine-author-index';
} elseif ( is_category() ) {
	$main_class = 'spine-category-index';
} elseif ( is_tag() ) {
	$main_class = 'spine-tag-index';
} elseif ( is_tax() ) {
	$main_class = 'spine-tax-index';
} elseif ( is_archive() ) {
	$main_class = 'spine-archive-index';
}

?>

<main class="<?php echo $main_class; ?>">

<section class="row one thirds">
	<div class="column one">
		<div class="info">
			<span>Kara</span>
		</div>
	</div>
	<div class="column two">
		<span>JR</span>
	</div>
	<div class="column three orange-back">
		<span>Aubree</span>
	</div>
</section>

<section class="row two thirds">
	<div class="column one">
		<span>Dina</span>
	</div>
	<div class="column two">
		<span>Samantha</span>
	</div>
	<div class="column three">
		<span>Ranene</span>
	</div>
</section>

<section class="row three thirds">
	<div class="column one">
		<span>Chris</span>
	</div>
	<div class="column two">
		<span>Randi</span>
	</div>
	<div class="column three">
		<span>Lindsey</span>
	</div>
</section>

<section class="row single">

</section>


</main>
<?php

get_footer();

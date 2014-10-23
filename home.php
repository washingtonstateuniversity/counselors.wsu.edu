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

<section class="row one quarters">
	<div id="kara" class="column">
		<div class="info">
			<span>Kara</span>
		</div>
	</div>
	<div id="jr" class="column">
		<span>JR</span>
	</div>
	<div id="aubree" class="column orange-back">
		<span>Aubree</span>
	</div>
	<div id="dina" class="column">
		<span>Dina</span>
	</div>
	<div id="samantha" class="column">
		<span>Samantha</span>
	</div>
	<div id="ranene" class="column">
		<span>Ranene</span>
	</div>
	<div id="chris" class="column">
		<span>Chris</span>
	</div>
	<div id="randi" class="column">
		<span>Randi</span>
	</div>
	<div id="lindsey" class="column">
		<span>Lindsey</span>
	</div>
</section>

<section class="row single">

</section>


</main>
<?php

get_footer();

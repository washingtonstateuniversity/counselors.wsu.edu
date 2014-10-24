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

<script>

(function($){

$(document).ready( function(){

 $(".face").on('click', function() {
	
	$(this).toggleClass('switched');
	 
 });
 
 $("#chooser select").on('keyup change', function() {
	
	var counselor_id = $(this).children(":selected").attr("id");
	$('body').addClass('counselor-selected').addClass('counselor-'+counselor_id);
	 
 });
 
});

})(jQuery);

</script>

<main class="<?php echo $main_class; ?>">

<section id="bunch" class="row one quarters">
	
	<div id="kara" class="column face">
		<div class="info">
			<span>Kara</span>
		</div>
	</div>
	<div id="jr" class="column face">
		<span>JR</span>
	</div>
	<div id="aubree" class="column face">
		<span>Aubree</span>
	</div>
	<div id="dina" class="column face">
		<span>Dina</span>
	</div>
	<div id="samantha" class="column face">
		<span>Samantha</span>
	</div>
	<div id="thecounselors" class="column">
		
	</div>
	<div id="ranene" class="column face">
		<span>Ranene</span>
	</div>
	<div id="chris" class="column face">
		<span>Chris</span>
	</div>
	<div id="randi" class="column face">
		<span>Randi</span>
	</div>
	<div id="lindsey" class="column face">
		<span>Lindsey</span>
	</div>
	<div id="chooser" class="column halved yellow-er-back">
		<form class="centered vertically">
			<header>Find your counselor...</header>
			<select>
				<option>I am...</option>
				<option id="dina">A Washington State high schooler</option>
				<option id="dina">An International Student</option>
				<option id="dina">Home-Schooled</option>
				<option id="dina">A Washington State Transfer Student</option>
				<option id="dina">An Online Student</option>
			</select>
		</form>
	</div>
	
	<div id="counselor-focus"></div>
</section>

<section class="row single">
	<div class="column one">
	</div>
</section>


</main>
<?php

get_footer();

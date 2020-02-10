<?php
/**
 * The template for displaying the 404 template
 */

get_header();
?>

<style>
	#p404 {
		margin-bottom: 100px;
	}

	#p404 h1 {
		margin-top: 100px;
	}
</style>

<div id="p404">
	<div id="section-faq">
	    <div class="container text-center">   
	        <div class="row m-auto col-sm-5">
				<h1>Oups ! <br>Cette page n'est pas disponible !</h1>
			</div>
			<div class="row text-center m-auto col-sm-4">
				<p>Si vous avez cliqué sur un lien du site, il est probable que cette page ne soit pas encore mise en ligne. <br>Merci de repasser plus tard. :-)</p>
				
		    </div>
		    <div class="row m-auto col-md-5" style="justify-content: center;">
		    	<img style="width: 50%;" src="http://lbv21/wp-content/themes/theme_labascule/img/logos/dominos.png">	
		    </div>
		    <div class="mt-5">
	            <a href="http://lbv21/" class="btn btn-primary deco">Retour à l'accueil</a>
	        </div>
		</div>
	</div>
</div>

<?php
get_footer();
?>
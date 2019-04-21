<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage mc-foundation
 * @since 1.0.0
 */

get_header();
?>

<section id="movie"><div class="hash" id="movie-link"></div><div class="movie"><div class="movie__wrapper"><iframe id="player" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" src="https://www.youtube.com/embed/?loop=1&amp;playlist=MdpfNfWw0jo&amp;controls=0&amp;autoplay=1&amp;rel=0&amp;showinfo=0&amp;fs=0&amp;enablejsapi=1&amp;origin=http%3A%2F%2Flocalhost%3A3000&amp;widgetid=1" width="640" height="360" frameborder="0"></iframe><div class="movie__wrapper__overlay"></div><div class="movie__wrapper__cover hide" id="video-cover"><div class="movie__wrapper__cover__play"><div class="movie__wrapper__cover__play__triangle"></div></div></div></div></div></section>

<section id="about-us"><div class="hash" id="about-link"></div><div class="about container"><h2>Kim jesteśmy?</h2><p>Fundacja <span>„Przystań Medyczna”</span> została utworzona w 2017 roku w Krakowie, a jej celem jest <span>pomoc medyczna dla osób bezdomnych, ubogich i społecznie wykluczonych</span>, uznając nadrzędną rolę zdrowia w powrocie do życia w społeczności. Nasza działalność zmierza do utworzenia placówki ambulatoryjnej, gdzie pacjenci, znajdujący się w szczególnie trudnej sytuacji życiowej i materialnej, będą mogli uzyskać dostęp do <span>podstawowych świadczeń medycznych</span>. Nasza fundacja skupia lekarzy, pielęgniarki, farmaceutów oraz studentów medycyny. Ale naszą Fundację budują także wolontariusze z innych grup zawodowych i specjalizacji. Są wśród nich miedzy innymi przedsiębiorcy, managerowie, księgowi, informatycy oraz Ci, którzy chcą z nami budować „Przystań Medyczną” , <span>wierząc w naszą misję i sens naszej pracy</span>. Swoją działalność opieramy na darowiznach, dlatego każda pomoc, nie tylko finansowa, to dla nas kolejny krok w budowaniu sprawnie działającej i skutecznej organizacji</p></div></section>

<section class="hidden" id="counter"><div class="hash" id="counter-link"></div><h2>dane w liczbach</h2><div class="counter container"><div class="counter__single hidden"><p>pomogliśmy</p><p class="counter__single__value" onshow="test()">123</p><p>osobom</p></div><div class="counter__single hidden"><p>zebraliśmy</p><p class="counter__single__value" onshow="test()">123123</p><p>zł</p></div><div class="counter__single hidden"><p>jest nas</p><p class="counter__single__value" onshow="test()">12</p><p>wolontariuszy</p></div></div></section>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
			}

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
?>

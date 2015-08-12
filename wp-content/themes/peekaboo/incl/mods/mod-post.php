<?php
# LYBE: Björn [All pairs of category/image]
$listKlevCats = array(
	"hons"				=> '/2015/06/hona-ikon-2.jpg',
	"klevs-lantbruk"	=> '/2015/06/vag.jpg',
	"gris"				=> '/2015/06/gris-ikon-2.jpg',
	"entreprenad"		=> '/2015/06/lastmaskin-ikon.jpg',
	"vaxtodling"		=> '/2015/06/ax-ikon-2.jpg'
);

# LYBE: Björn [Returns Image Src matching posts category]
function getFeaturedImage($postCats, $listCats){
	foreach ($listCats as $cat => $src) {
		foreach ($postCats as $postCat) {
			if ($cat == $postCat->slug) { return $src; }
		}
	}
}
// This setup supports old PHP v.
$uploadDir = wp_upload_dir();
$uploadDir = $uploadDir['baseurl'];
?>
<div class="row mod-post">
	<hr>
</div>

<?php if ($smof_data['pkb_post_mod_title']) { ?>
    <div class="row section-title">
        <div class="columns large-10">
            <?php if ($smof_data['pkb_post_mod_url']) { ?>
                <h4 class="replace featured-title"><a
                        href="?p=<?php echo stripslashes($smof_data['pkb_post_mod_url']); ?>"><?php echo stripslashes($smof_data['pkb_post_mod_title']); ?></a>
                </h4>
            <?php } else { ?>
                <h4 class="replace featured-title"><?php echo stripslashes($smof_data['pkb_post_mod_title']); ?></h4>
            <?php } ?>

        </div>
        <?php if ($smof_data['pkb_post_mod_more_link']) { ?>
            <div class="columns large-2 hide-for-small">
                <a href="?p=<?php echo stripslashes($smof_data['pkb_post_mod_url']); ?>"
                   class="button fancy small secondary"><?php echo stripslashes($smof_data['pkb_post_mod_more_link']); ?></a>
            </div>
        <?php } ?>
    </div>
<?php } ?>

<div class="row">

    <section class="featured-post">
        <?php
        $featPostNumber = $smof_data['pkb_post_mod_number'];
        if ($featPostNumber == 2) {
            $featPostColNumber = 'large-6 small-12';
        } elseif ($featPostNumber == 3) {
            $featPostColNumber = 'large-4 small-12';
        } else {
            $featPostColNumber = 'large-3 small-12';
        };
        ?>

        <?php if ($featPostNumber >= 2) { ?>
            <article class="<?php echo $featPostColNumber ?> columns">
                <?php
                if ($smof_data['pkb_homepage_post_1']) {
                    $the_query = new WP_Query($smof_data['pkb_homepage_post_1']);
                } else {
                    $the_query = new WP_Query('posts_per_page=1');
                }
                while ($the_query->have_posts()) : $the_query->the_post();?>
                    <div class="post-module">

						<?php # LYBE: Björn [Render Category Symbol] ?>
						<?php $postCategories = get_the_category(); // Fetches first category slug ?>
						<?php $catImgSrc = getFeaturedImage($postCategories, $listKlevCats); ?>
						<?php $catImgSrc = $catImgSrc === NULL ? $listKlevCats["klevs-lantbruk"] : $catImgSrc; ?>
						<a href="<?php the_permalink() ?>"><img class="figure-img" src="<?php echo $uploadDir.$catImgSrc; ?>" title="<?php the_title(); ?>" /></a>

                        <div class="excerpt_container">
                            <h3 class="entry-title replace"><a href="<?php the_permalink(); ?>"
                                                               title="<?php printf(esc_attr__('Permalink to %s', 'peekaboo'), the_title_attribute('echo=0')); ?>"
                                                               rel="bookmark"><?php the_title(); ?></a></h3>

                            <p><?php echo get_the_excerpt(); ?>


                        </div>
                    </div>
                <?php
                endwhile; wp_reset_postdata();
                ?>
            </article>
            <article class="<?php echo $featPostColNumber ?> columns">
                <?php
                if ($smof_data['pkb_homepage_post_2']) {
                    $the_query = new WP_Query($smof_data['pkb_homepage_post_2']);
                } else {
                    $the_query = new WP_Query('posts_per_page=1&offset=1');
                }
                while ($the_query->have_posts()) : $the_query->the_post();?>
                    <div class="post-module">

						<?php # LYBE: Björn [Render Category Symbol] ?>
						<?php $postCategories = get_the_category(); // Fetches first category slug ?>
						<?php $catImgSrc = getFeaturedImage($postCategories, $listKlevCats); ?>
						<?php $catImgSrc = $catImgSrc === NULL ? $listKlevCats["klevs-lantbruk"] : $catImgSrc; ?>
						<a href="<?php the_permalink() ?>"><img class="figure-img" src="<?php echo $uploadDir.$catImgSrc; ?>" title="<?php the_title(); ?>" /></a>

                        <div class="excerpt_container">
                            <h3 class="entry-title replace"><a href="<?php the_permalink(); ?>"
                                                               title="<?php printf(esc_attr__('Permalink to %s', 'peekaboo'), the_title_attribute('echo=0')); ?>"
                                                               rel="bookmark"><?php the_title(); ?></a></h3>

                            <p><?php echo get_the_excerpt(); ?>


                        </div>
                    </div>
                <?php
                endwhile; wp_reset_postdata();
                ?>
            </article>
        <?php } ?>
        <?php if ($featPostNumber >= 3) { ?>
            <article class="<?php echo $featPostColNumber ?> columns">
                <?php
                if ($smof_data['pkb_homepage_post_3']) {
                    $the_query = new WP_Query($smof_data['pkb_homepage_post_3']);
                } else {
                    $the_query = new WP_Query('posts_per_page=1&offset=2');
                }
                while ($the_query->have_posts()) : $the_query->the_post();?>
                    <div class="post-module">

						<?php # LYBE: Björn [Render Category Symbol] ?>
						<?php $postCategories = get_the_category(); // Fetches first category slug ?>
						<?php $catImgSrc = getFeaturedImage($postCategories, $listKlevCats); ?>
						<?php $catImgSrc = $catImgSrc === NULL ? $listKlevCats["klevs-lantbruk"] : $catImgSrc; ?>
						<a href="<?php the_permalink() ?>"><img class="figure-img" src="<?php echo $uploadDir.$catImgSrc; ?>" title="<?php the_title(); ?>" /></a>

                        <div class="excerpt_container">
                            <h3 class="entry-title replace"><a href="<?php the_permalink(); ?>"
                                                               title="<?php printf(esc_attr__('Permalink to %s', 'peekaboo'), the_title_attribute('echo=0')); ?>"
                                                               rel="bookmark"><?php the_title(); ?></a></h3>

                            <p><?php echo get_the_excerpt(); ?>


                        </div>
                    </div>
                <?php
                endwhile; wp_reset_postdata();
                ?>
            </article>
        <?php } ?>
        <?php if ($featPostNumber >= 4) { ?>
            <article class="<?php echo $featPostColNumber ?> columns">
                <?php
                if ($smof_data['pkb_homepage_post_4']) {
                    $the_query = new WP_Query($smof_data['pkb_homepage_post_4']);
                } else {
                    $the_query = new WP_Query('posts_per_page=1&offset=3');
                }
                while ($the_query->have_posts()) : $the_query->the_post();?>
                    <div class="post-module">

						<?php # LYBE: Björn [Render Category Symbol] ?>
						<?php $postCategories = get_the_category(); // Fetches first category slug ?>
						<?php $catImgSrc = getFeaturedImage($postCategories, $listKlevCats); ?>
						<?php $catImgSrc = $catImgSrc === NULL ? $listKlevCats["klevs-lantbruk"] : $catImgSrc; ?>
						<a href="<?php the_permalink() ?>"><img class="figure-img" src="<?php echo $uploadDir.$catImgSrc; ?>" title="<?php the_title(); ?>" /></a>

                        <div class="excerpt_container">
                            <h3 class="entry-title replace"><a href="<?php the_permalink(); ?>"
                                                               title="<?php printf(esc_attr__('Permalink to %s', 'peekaboo'), the_title_attribute('echo=0')); ?>"
                                                               rel="bookmark"><?php the_title(); ?></a></h3>

                            <p><?php echo get_the_excerpt(); ?>


                        </div>
                    </div>
                <?php
                endwhile; wp_reset_postdata();
                ?>
            </article>
        <?php } ?>

    </section>
</div>

<!DOCTYPE HTML>
<html>

<head <?php language_attributes(); ?> class="no-js">
    <title>Kijewoku - création de jeux-vidéo</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700,600' rel='stylesheet' type='text/css'>
</head>

<body>
    <?php get_header(); ?>

        <section>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                <p>
                    <?php the_content(__('(more...)')); ?>
                </p>
                <hr>
                <?php endwhile; else: ?>
                    <p>
                        <?php _e('Sorry, no posts matched your criteria.'); ?>
                    </p>
                    <?php endif; ?>
        </section>

        <div id="sidebar">
            <h2><?php _e('Categories'); ?></h2>
            <ul>
                <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
            </ul>
            <h2><?php _e('Archives'); ?></h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </div>

        <?php get_footer(); ?>

</body>

</html>
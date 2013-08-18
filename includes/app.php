
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <title><?php the_title(); ?></title>

        <meta name="description" content="A framework for easily creating beautiful presentations using HTML">

        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <?php do_action('presenpress_head'); ?>
    </head>

    <body>

        <div class="reveal">

            <!-- Any section element inside of this container is displayed as a slide -->
            <div class="slides">
                <?php while(have_posts()): the_post(); ?>
                    <?php global $numpages; ?>
                    <?php for ($i = 1; $i <= $numpages; $i++ ): ?>
                        <section>
                            <?php global $page; $page = $i; ?>
                            <?php the_content(); ?>
                        </section>
                    <?php endfor; ?>
                <?php endwhile; ?>
            </div>

        </div>

        <?php do_action('presenpress_footer'); ?>

        <div id="presenpress-cursor"></div>
        <div id="presenpress-highlight"></div>
    </body>
</html>
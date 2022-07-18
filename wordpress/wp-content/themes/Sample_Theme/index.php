<html>
<head>
</head>

<body>
    
    <?php if (have_posts()):while(have_posts()): the_post();?>
        <h1> <?php the_title(); ?> </h1>
        <h1> <?php the_author(); ?> </h1>
        <?php the_content(); ?>
    <?php endwhile; else: ?>
        <?php _e("Sorry, No content found.", "phpfowp"); ?>

    <?php endif; ?>

</body>


</html>

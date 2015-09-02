<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php wp_title(' · ', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="splasher">
        <header class="splasher-site-header">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri() ?>/libs/img/logo.svg">
            </div>
        </header>
        <article>
            <div class="inner">
                <h1>Hjemmesiden er under udarbejdelse</h1>
                <p>Inden længe er vi klar til at præsentere relevant information og muligheder for at tage del i projektet på energisarfari.dk</p>
                <p>I mellemtiden kan du læse mere om projektet på <a href="//www.energibyenskive.dk/da/projekter/energisafari/">Energibyen Skives hjemmeside</a></p>
            </div>
        </article>
        <nav class="splasher-nav"></nav>
        <footer class="splasher-site-footer">
            <a href="//:energibyenskive.dk">
                <img src="<?php echo get_template_directory_uri() ?>/libs/img/energibyenskivegraa.png">
            </a>
        </footer>
    </div>
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
        <section class="not-ready">
            <article class="inner">
                <h1>Hjemmesiden er under udarbejdelse</h1>
                <p>Inden længe er vi klar til at præsentere relevant information og muligheder for at tage del i projektet på energisafari.dk</p>
                <p>I mellemtiden kan du læse mere om projektet på <a href="//www.energibyenskive.dk/da/projekter/energisafari/">Energibyen Skives hjemmeside</a></p>
            </article>
        </section>
        <section class="splashercta">
            <article class="inner">
                <h3>Få besked, når hjemmesiden er klar</h3>
                <form action="<?php echo get_template_directory_uri(); ?>/ajax/form.php">
                    <div>
                        <span>Ja tak, jeg vil gerne modtage en e-mail, når mere information er klar om Energisafari</span>
                    </div>
                    <div class="split">
                        <div>
                            <input type="email" name="email" required/>
                            <label for="email">Din email</label>
                        </div>
                        <div>
                            <input type="text" name="name" required/>
                            <label for="name">Dit navn</label>
                        </div>
                    </div>
                    <div>
                        <textarea rows="1" name="detail"></textarea>
                        <label for="detail">Eventuel kommentar</label>
                    </div>
                    <div class="buttonset">
                        <a href="#" class="button submit">Send</a>
                    </div>
                </form>
            </article>
        </section>
        <footer class="splasher-site-footer">
            <a href="//:energibyenskive.dk">
                <img src="<?php echo get_template_directory_uri() ?>/libs/img/energibyenskivegraa.png">
            </a>
        </footer>
    </div>
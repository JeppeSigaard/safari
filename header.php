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
                <p>Energisafari.DK er et udviklingsprojekt der har til formål at fremvise Know-how og Show-how inden for Energi i form af specialiserede fagture.</p> 
                <p>Erhvervsgæster til Region Midtjylland skal opleve midtjyske energikompetencer og samarbejder mellem førende virksomheder, vidensinstitutioner og myndigheder.</p>
                <p>Mission &amp; Vision er at gøre Region Midtjylland og projektets samarbejdspartnere nationalt og internationalt kendte og anerkendte som førende inden for Energi.</p>
                <p>Har du spørgsmål til Energisafari.DK så kontakt Joan Kahr på: <a href="mailto:joka@skivekommune.dk">joka@skivekommune.dk</a></p>
                <p>Mere information om Energisafari.DK kan du finde på <a href="http://www.energibyenskive.dk/">Energibyen Skives Hjemmeside</a></p>
                <br/>
                <img src="<?php echo get_template_directory_uri() ?>/libs/img/billede.jpg">
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
<?php require_once ("couch/cms.php"); ?>
    <cms:template title="Freelancer" icon="home" />
    <!DOCTYPE html>
    <html lang="de">
    <cms:embed "head.html" />
    <body id="page-top">
    <cms:embed "nav.html" />
    <cms:embed "header.html" />
    <cms:embed "portfolio.html" />
    <cms:embed "about.html" />
    <cms:embed "contact.html" />
    <cms:embed "footer.html" />
    <cms:embed "scripts.html" />
    </body>
    </html>
<?php COUCH::invoke(); ?>
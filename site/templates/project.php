<html>
  <head>
    <title>Jeff Ong | Portfolio of design technology and art</title>
    <link href="https://fonts.googleapis.com/css?family=Rasa|Roboto" rel="stylesheet">
    <link href="/assets/css/index.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="description" content="Portfolio media for Jeff Ong">
    <meta name="keywords" content="design,technology,code,media,itp,frog,art,jeff ong,jeffrey ong">
    <meta name="author" content="Jeff Ong">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <main class="main project">

      <header class="wrap">
        <h1 class="header"><?= $page->title()->html() ?> - <?= $page->year() ?></h1>
      </header>
      
      <div class="text wrap">
        <?= $page->text()->kirbytext() ?>
        <h2 class="header">Responsibilities</h2>
        <h2 class="header">Project Links</h2>
          <?php if ($page->project_site() != ''): ?>
            <a href="<?= $page->project_site()->url() ?>">project site</a><br>
          <?php endif ?> 
          <?php if ($page->github() != ''): ?>
            <a href="<?= $page->github()->url() ?>">GitHub</a><br>
          <?php endif ?> 

        <?php
        // Images for the "project" template are sortable. You
        // can change the display by clicking the 'edit' button
        // above the files list in the sidebar.
        foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
          <figure class="media-container">
            <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
          </figure>
        <?php endforeach ?>
      </div>
    </main>
  </body>
</html>

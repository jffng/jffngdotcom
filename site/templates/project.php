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
          <?= $page->responsibilities()->kirbytext() ?>
        <h2 class="header">Project Links</h2>
          <ul>
          <?php if ($page->project_site() != ''): ?>
          <li>
            <a href="<?= $page->project_site()->url() ?>">Project Site</a>
          </li>
          <?php endif ?> 

          <?php if ($page->github() != ''): ?>
          <li>
            <a href="<?= $page->github()->url() ?>">GitHub</a>
          </li>
          <?php endif ?> 
        </ul>

        <h2 class="header">Documentation</h2>
        <?php
        // Images for the "project" template are sortable. You
        // can change the display by clicking the 'edit' button
        // above the files list in the sidebar.
        /* foreach($page->images()->sortBy('sort', 'asc') as $image): ?> */
        foreach($page->files()->sortBy('sort', 'asc') as $file): ?>
          <figure class="media-container">
            <?php if($file->type() == "image"): ?>
              <img src="<?= $file->url() ?>" alt="<?= $page->title()->html() ?>" />
            <?php elseif($file->type() == "video"): ?>
              <video src="<?= $file->url() ?>" controls="true" alt="<?= $page->title()->html() ?>" />
            <?php endif ?>
          </figure>
        <?php endforeach ?>
      </div>
    </main>
  </body>
</html>

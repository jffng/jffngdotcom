<?php

$projects = page('projects')->children()->visible();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Jeff Ong | Designer Technologist Artist</title>
    <link href="https://fonts.googleapis.com/css?family=Rasa|Roboto" rel="stylesheet">
    <link href="/assets/css/index.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="description" content="Portfolio media for Jeff Ong">
    <meta name="keywords" content="design,technology,code,media,itp,frog,art,jeff ong,jeffrey ong">
    <meta name="author" content="Jeff Ong">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">

      <div class="center">
        <h1 class="header blink">Jeff Ong</h1>
      </div>

      <div class="block tl">
        <div class="padded">
          <h2 class="header">About</h2>
          <p>I'm an American artist | designer | technologist based in Brooklyn, New York.</p>
          <p>I graduated from the University of Michigan and the <a href="https://tisch.nyu.edu/itp">Interactive Telecommunications Program</a> at New York University.</p>
          <p>I work at <a href="https://frogdesign.com">frog design</a>, advancing the human experience through design and technology.</p>
        </div>
      </div>

      <div class="block tr">
        <div class="padded right">
          <h2 class="header">Work</h2>
          <p>
            <?php foreach($projects as $project): ?>
            <a href="<?= $project->url() ?>"><?= $project->title() ?></a><br>
            <?php endforeach ?>
          </p>
        </div>
      </div>

      <div class="block bl">
        <div class="padded">
          <h2 class="header">Contact + Info</h2>
          <p>
            <a href="mailto:this.jeffong@gmail.com">Email</a><br>
            <a href="https://github.com/jffng">GitHub</a><br>
            <a href="https://www.linkedin.com/in/ongjeffrey/">LinkedIn</a>
          </p>
        </div>
        </p>
      </div>

      <div class="block br">
        <div class="padded right">
          <h2 class="header">Societal Validation</h2>
          <p>
            <a href="mailto:this.jeffong@gmail.com">Atlantic</a><br>
            <a href="https://github.com/jffng">New York Times</a><br>
            <a href="https://github.com/jffng">Resistor</a><br>
            <a href="https://github.com/jffng">Shows</a><br>
          </p>
        </div>
      </div>
    </div>
</body>
</html>

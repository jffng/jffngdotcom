<?php

$projects = page('projects')->children()->visible();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Jeff Ong | design . technology . art</title>
    <link href="https://fonts.googleapis.com/css?family=Rasa|Roboto" rel="stylesheet">
    <link href="/assets/css/index.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="description" content="The online representation & portfolio of Jeff Ong. Design + technology + art on sale! Projects going quickly! Hire today!">
    <meta name="keywords" content="design,technology,code,media,itp,frog,art,jeff ong,jeffrey ong">
    <meta name="author" content="Jeff Ong">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">

      <div class="center">
        <h1 class="header blink">Jeff Ong</h1>
        <div class="preview"></div>
      </div>

      <div class="block tl">
        <div class="padded">
          <h2 class="header">About</h2>
          <p>I'm an American artist | designer | programmer based in Brooklyn, New York.</p>
          <p>I graduated from the University of Michigan and the <a target="_blank" href="https://tisch.nyu.edu/itp">Interactive Telecommunications Program</a> at New York University.</p>
          <p>I work at <a target="_blank" href="https://www.frogdesign.com">frog design</a>, advancing the human experience through design and technology.</p>
        </div>
      </div>

      <div class="block tr">
        <div class="padded right">
          <!-- <h2 class="header">Work</h2> -->
          <p>
            <?php foreach($projects as $project):?>
            <?php
            $images = $project->files();
            $thumbnail = null;
            foreach($images as $image):
              if($image->name() == 'thumbnail'){
                $thumbnail = $image->url();  
              }
            endforeach
            ?>
            <!-- <a target="_blank" class="project-link" data-thumbnail="<?= $thumbnail ?>" href="<?= $project->url() ?>"><?= $project->title() ?></a><br> -->
            <?php endforeach ?>
          </p>
        </div>
      </div>

      <div class="block bl">
        <div class="padded">
          <!-- <h2 class="header">Societal Validation</h2>
          <p>
            <a target="_blank" href="http://eng.indiebo.co/indiebox/">Indie Bogota - 2017</a><br>
            <a target="_blank" href="http://www.nytransitmuseum.org/platform/">Platform: NY Transit Museum Exhibit - 2016</a><br>
            <a target="_blank" href="https://docubase.mit.edu/project/subway-stories/">MIT Docubase - 2016</a><br>
            <a target="_blank" href="https://currentsnewmedia.org/work/subway-stories/">Currents New Media Festival - 2015</a><br>
            <a target="_blank" href="https://futureofstorytelling.org">Future of Storytelling Fellow - 2015</a><br>
            <a target="_blank" href="https://muse.jhu.edu/article/552317">Leonardo Volume #47 - 2014</a><br>
            <a target="_blank" href="http://s2014.siggraph.org/attendees/art-gallery/events/subway-stories.html">SIGGRAPH Art Gallery - 2014</a><br>
            <a target="_blank" href="https://creators.vice.com/en_us/article/pgqdgz/subway-stories-takes-you-on-an-interactive-ride-through-the-nyc-underground-sans-stressawfulness">The Creators Project - 2014</a><br>
          </p> -->
        </div>
        </p>
      </div>

      <div class="block br">
        <div class="padded right">
          <h2 class="header">Contact + Info</h2>
          <p>
            <a target="_blank" href="mailto:this.jeffong@gmail.com">Email</a><br>
            <a target="_blank" href="https://github.com/jffng">GitHub</a><br>
            <a target="_blank" href="https://www.linkedin.com/in/ongjeffrey/">LinkedIn</a><br>
            <a target="_blank" href="http://jffng.com/content/3-about/0-jeffong/jeff-ong-resume_2017.pdf">CV</a>
          </p>
        </div>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="/assets/js/home.js"></script>
</body>
</html>

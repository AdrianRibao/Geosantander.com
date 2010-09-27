<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-ES">
<head>
  <title>Fotos del Santander de cuando eras pequeño</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <meta name="robots" content="all" />
  <meta name="author" content="geosantander.com" />
  <meta name="keywords" content="Santander, fotos, fotografías, Santander2016, Cantabria, panoramio" />
  <meta name="description" content="Fotos del Santander de cuando eras pequeño" />

  <link rel="shortcut icon" href="/favicon.ico" />
  <?php // <link rel="stylesheet" type="text/css" media="screen" href="http://fonts.googleapis.com/css?family=Cantarell|Droid+Sans" /> ?>

  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/tags/markermanager/1.0/src/markermanager.js"></script>

  <?php
    $assets = array(
      '/css/screen/geosantander.css',
    );

    $virtualFile = sprintf('css/screen/%s/%s.css', strtolower($this->name), strtolower($this->action));
    if (file_exists(WWW_ROOT . $virtualFile)) {
      $assets[] = '/' . $virtualFile;
    }

    echo $html->css($assets);

    $assets = array(
      '/js/geosantander.js',
    );

    $virtualFile = sprintf('js/%s/%s.js', strtolower($this->name), strtolower($this->action));
    if (file_exists(WWW_ROOT . $virtualFile)) {
      $assets[] = '/' . $virtualFile;
    }

    echo $html->script($assets);
  ?>
</head>

<body onload="setupMap()">

  <div id="container">
    <div id="map"></div>
    <?php echo $content_for_layout; ?>
  </div> <!-- container -->
  <?php // echo $this->element('google-analytics'); ?>

</body>
</html>

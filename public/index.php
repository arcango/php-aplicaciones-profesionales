<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spaghetti</title>
  <link rel="stylesheet" href="/assets/styles.css">
</head>

<body>
  <h1>Spaghetti PHP!!!</h1>
  <a href="pagina2.php">pagina2</a><br>


  <?php

  require '../vendor/autoload.php';

  use Carbon\Carbon;
  use Lib\Breadcrumbs as Brcrumb;
  use Lib\Dates;
  use League\Plates\Engine;

  $templates = new Engine('../views');

  $date = Carbon::now();
  echo $date->format('Y');

  Carbon::setLocale('es');
  $today = Carbon::now();
  $tomorrow = $today->addDays(1);
  echo $tomorrow->isoFormat('dddd DD [de] MMMM');

  // include '../Lib/Dates.php';
  // include '../Lib/Breadcrumbs.php';

  $crumbs = new Brcrumb();
  $crumbs->add('/link', 'Sección');
  $crumbs->show();
  // $router = new AltoRouter();

  // $router->map('GET', '/', 'FrontController#home', 'home');
  // $router->map('GET', '/otra/carpeta', 'FrontController#otraCarpeta');
  // $router->map('GET', '/producto/[i:id]', 'FrontController#producto');

  // $match = $router->match();

  // if ($match === false) {
  //   open404Error();
  // } else {
  //   callController($match);
  // }

  // function open404Error()
  // {
  //   header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
  //   $controllerObject = new App\Controllers\FrontController;
  //   $controllerObject->error404();
  // }

  // function callController($match)
  // {
  //   list($controller, $action) = explode('#', $match['target']);
  //   $controller = 'App\\Controllers\\' . $controller;
  //   if (method_exists($controller, $action)) {
  //     $controllerObject = new $controller;
  //     call_user_func_array(array($controllerObject, $action), $match['params']);
  //   } else {
  //     open404Error();
  //   }
  // }
  ?>
  <p>
    Con PHP es fácil hacer Spaghetti Code y mezclar la presentación, el HTML con código blaaaaa
  </p>
  <p>
    Pero en 
    <?= Dates::longDate(Dates::tomorrow()); ?>
    lo vamos a solucionar
  </p>
  <?php echo $templates->render('template-test', [
    'subtitle' => 'Bienvenidos a escuela IT']); ?>
</body>

</html>
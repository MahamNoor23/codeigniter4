<!-- app/Views/layout/layout.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body> <?= $this->include('header') ?> <?= $this->renderSection('content') ?> <?= $this->include('footer') ?> </body>

</html>
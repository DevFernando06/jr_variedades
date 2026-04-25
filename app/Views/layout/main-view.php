<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/coreui/css/coreui.min.css" rel="stylesheet">

    <title><?= $title ?></title>
</head>
<body class="c-app">

    <?= $this->include('layout/sidebar-view') ?>

    <div class="wrapper d-flex flex-column min-vh-100">
        
        <?= $this->include('layout/header') ?>

        <div class="body flex-grow-1 px-3">
            <?= $this->renderSection('content') ?>
        </div>

        <?= $this->include('layout/footer-view') ?>

    </div>

</body>
</html>
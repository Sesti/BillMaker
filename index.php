<?php
    include_once( "config.php" );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= APP_TITLE ?></title>
    <link rel="stylesheet" type="text/css" href="assets/styles/reset.css" />
    <link rel="stylesheet" type="text/css" href="assets/styles/import.css"/>
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css"/>
    <script type="application/javascript" src="assets/scripts/state.js"></script>
    <script type="application/javascript" src="assets/scripts/addEntry.js"></script>
    <script type="application/javascript" src="assets/scripts/main.js"></script>
    <script type="application/javascript" src="assets/scripts/viewData.js"></script>
</head>
<body>
<main class="app__window">
    <section class="app__header">
        <h1><?= APP_TITLE ?></h1>
    </section>
    <?php
        include_once('views/main_menu.php');
        include_once('views/add_entry.php');
        include_once('views/view_data.php');
        include_once('views/create_bill.php');
    ?>
    
</main>
</body>
</html>
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
</head>
<body>
<main class="app__window">
    <section class="app__header">
        <h1>Bill Maker</h1>
    </section>
    <section class="app__view app__view-main">
        <div class="view__container">
            <div class="content__choice-box content__choice-box-full">
                <img src="<?= ICON_DIR . "add_entry.svg" ?>" alt="Add job entry">
                <h2>Add entry</h2>
            </div>
            <div class="content__choice-box content__choice-box-1-3">
                <img src="<?= ICON_DIR . "view_data.svg" ?>" alt="View job data">
                <h2>View data</h2>
            </div>
            <div class="content__choice-box content__choice-box-1-3">
                <img src="<?= ICON_DIR . "create_bill.svg" ?>" alt="Create bill">
                <h2>Create Bill</h2>
            </div>
            <div class="content__choice-box content__choice-box-1-3 content__choice-box-last">
                <img src="<?= ICON_DIR . "send_bill.svg" ?>" alt="Send bill">
                <h2>Send Bill</h2>
            </div>
        </div>
    </section>
</main>
<main class="app__view app__view-add-entry app__view-hidden">
    <form id="form_add_entry">
        <input type="text" />
    </form>
</main>
<script>
    var s = new App();
    s.spawn(s.viewMain);
</script>
</body>
</html>
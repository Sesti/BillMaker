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
</head>
<body>
<main class="app__window">
    <section class="app__header">
        <h1>Bill Maker</h1>
    </section>
    <section class="app__view app__view-main app__view-hidden">
        <div class="view__container">
            <div class="content__choice-box content__choice-add-entry content__choice-box-full">
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
    <section class="app__view app__view-add-entry app__view-hidden">
        <div class="view__container">
            <div class="form__notification form__notification-success form__notification-hidden">
                <img src="<?= ICON_DIR . "form_success.svg" ?>" alt="Form success">
                <span>Success!</span>
            </div>
            <span class="content__choice-box content__choice-view-start">Back</span>
            <form id="form_add_entry" class="form__add-entry">
                <input type="hidden" name="e_token" value="1" />
                <label for="e_date">
                    <span>Date</span>
                    <input type="date" name="e_date" value="<?= date("Y-m-j") ?>"/>
                </label>
                <label for="e_time">
                    <span>Hours</span>
                    <input type="number" name="e_time"/>
                </label>
                <label for="e_client">
                    <span>Client</span>
                    <input type="text" name="e_client"/>
                </label>
                <label for="e_description">
                    <span>Description</span>
                    <textarea name="e_description"></textarea>
                </label>
                <button class="js__submit-add-entry">Add Entry</button>
            </form>
        </div>
    </section>
</main>
</body>
</html>
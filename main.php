<!DOCTYPE html>
<html lang="ko">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ICON -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <title>Jcloud</title>

    <!-- STYLE -->
    <link rel="stylesheet" href="./src/css/main.css">

    <!-- SCRIPT -->
    <script src="./js/main.js" type="text/javascript"></script>
</head>

<body>
    <section class="main_section">
        <div class="sc_left_center_bundle">
            <!-- The left screen -->
            <article id="sc_left" class="sc_left">
                <?php include 'sc_left.php'; ?>
            </article>

            <!-- The center screen-->
            <article id="sc_center" class="sc_center">
                <?php include 'sc_center.php'; ?>
            </article>
        </div>

        <!-- The right screen-->
        <article id="sc_right" class="sc_right">
            <?php include 'sc_right.php'; ?>
        </article>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Publications</title>
    <link rel="stylesheet" href="/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!--for icons-->
    <link rel="icon" href="images/site/notes_sticky_icon.png" type="image/png">
</head>

<body>

    <?php include 'assets/header.php';?>

    <br />

    <!-- HEADER -->
    <section class="py-5 text-center bg-light">
        <div class="container">
            <h1 class="display-5 fw-bold"><i>A Note to You</i> is available in a zine and book format.</h1>
        </div>
    </section>

    <?php
        // randomize zine PDF version
        $zineVersion = rand(1, 17);
        $zinePDF = "assets/zines/zine-$zineVersion.pdf";
    ?>

    <!-- ZINE SECTION -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="images/site/zine.jpg" alt="Zine Preview" class="img-fluid rounded shadow" style="width: 30vw; height: 350px; object-fit: cover;">
                </div>
                <div class="col-md-6">
                    <h2>ZINE</h2>
                    <p>
                        Each zine documents six notes. There are 37 different versions available for download.
                        Every time this page is refreshed, a different version of the PDF is available for download.
                        The zine is formatted to be printed to scale on Tabloid (11”x17”) paper and then folded and cut,
                        following the tutorial to create a one-page book <a
                            href="https://www.quarantinepubliclibrary.com/tutorial" target="_blank">here</a>.
                    </p>
                    <a href="<?= $zinePDF ?>" download class="btn btn-primary">Download Zine PDF</a>
                </div>
            </div>
        </div>
    </section>


    <!-- BOOK SECTION -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <img src="images/site/book-coming-soon.jpg" alt="Book Preview" class="img-fluid rounded shadow" style="width: 30vw; height: 350px; object-fit: cover;">
                </div>
                <div class="col-md-6 order-md-1">
                    <h2><i>A Note to You</i> Book</h2>
                    <p>
                        <i>A Note to You</i> Book is available as a PDF download here. All 222 notes are documented in the book
                        format.
                    </p>
                    <a href="assets/a_note_to_you_book.pdf" class="btn btn-success" target="_blank">
                        Download Book PDF
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
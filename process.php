<!DOCTYPE html>
<html lang="en">

<head>
    <title>Our Process</title>
    <link rel="stylesheet" href="/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="images/site/notes_sticky_icon.png" type="image/png">
    <style>
    .angled-card {
        transform: rotate(-2deg);
        z-index: 2;
    }

    .angled-card-offset {
        transform: rotate(2deg);
        margin-top: 3rem;
        z-index: 1;
    }

    .timeline-step {
        border-left: 4px solid #0d6efd;
        padding-left: 1rem;
        margin-left: 1rem;
        position: relative;
    }

    .timeline-step::before {
        content: "";
        position: absolute;
        top: 0;
        left: -10px;
        width: 20px;
        height: 20px;
        background-color: #0d6efd;
        border-radius: 50%;
        transform: translateY(10px);
    }

    .carousel-inner, .carousel-item {
        height: 60vh;
    }

    .carousel-item img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: center;
    }
    </style>
</head>

<body>

    <?php include 'assets/header.php';?>

    <br />

    <!-- HEADER -->
    <section class="pt-5 pb-4 text-center bg-light">
        <div class="container">
            <h1 class="display-5 fw-bold">Our Creative Process</h1>
            <p class="lead">
                Through collective brainstorming, researching, and presenting a wide variety of art, artistic
                initiatives,
                and artists, we developed a plan of action that incorporated the main aspects of:
            </p>
        </div>
    </section>

    <!-- PROCESS SECTION -->
    <section class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Card 1 -->
                <div class="col-md-6">
                    <div class="card h-90 shadow-sm border-0 angled-card">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <i class="bi bi-lightbulb display-4 text-warning"></i>
                            </div>
                            <h5 class="card-title text-center">Conceptualization</h5>
                            <p class="card-text">
                                Community engagement (Yoko Ono, ritual art): Through community engagement, we reached
                                out to the Free Art Collective. After Gabrielle presented to our class, we strategized a
                                series of tabling events to interact with and receive notes from the RIT student body.
                                Students were asked to In total, we collected 222 sticky notes from students across four
                                different days.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0 angled-card-offset">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <i class="bi bi-box2 display-4 text-info"></i>
                            </div>
                            <h5 class="card-title text-center">Item Collection</h5>
                            <p class="card-text">
                                Value of rarity/each object is different (referenced from valuable artifacts in class):
                                One of the ideas we championed was the ‘specialness’ of artifacts, like the example of a
                                crumpled gallery map. Things are made special by a series of circumstances, and one of
                                the hallmarks of our project is the inclusion of sticky notes written by students. Each
                                sticky note is special because it a) represents an individual separate from the rest, b)
                                was written by students who were just walking by, preserving ‘in-the-moment’
                                originality, and c) was captured at specific tabling events over different days, which
                                means that these notes had to happen during active community engagement on campus. These
                                sticky notes preserve the individual sentiment and space of the RIT student body.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- TIMELINE SECTION -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Construction Process</h2>
            <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"
                data-bs-pause="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/site/process_1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="images/site/process_2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="images/site/process_3.jpeg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img src="images/site/process_4.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img src="images/site/process_5.jpeg" alt="Fifth slide">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-10">
                    <div class="timeline-step mb-4">
                        <h5>Phase 1: Brainstorming</h5>
                        <p>We learned about different types of art and their forms, which helped us develop our
                            community-focused project.</p>
                    </div>
                    <div class="timeline-step mb-4">
                        <h5>Phase 2: Weekly Meetings</h5>
                        <p>The class met twice weekly, on Mondays and Wednesdays, and we spent those sections engaging
                            in discussions and receiving guest lectures.</p>
                    </div>
                    <div class="timeline-step mb-4">
                        <h5>Phase 3: Collection</h5>
                        <p>Collecting the sticky notes from RIT students at community outreach (tabling) events where we
                            partnered with The Free Art Collective to encourage students with free art.</p>
                    </div>
                    <div class="timeline-step mb-4">
                        <h5>Phase 4: Processing</h5>
                        <p>Taking the sticky notes to the image lab and scanning them into digital versions.</p>
                    </div>
                    <div class="timeline-step mb-4">
                        <h5>Phase 5: Analysis</h5>
                        <p>Transcribing the notes for captions and determining the order that the notes would be
                            displayed in the physical book/zines.</p>
                    </div>
                    <div class="timeline-step">
                        <h5>Phase 6: Display</h5>
                        <p>
                            Designing and creating zines to distribute at 2025 Imagine RIT and gift to partner
                            organizations (The Free Art Collective, RIT Honors office, College of Art & Design
                            Leadership, etc.)
                            <a href="publication.php">See More →</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
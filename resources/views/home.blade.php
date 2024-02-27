<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex-3 Academy | Bangladesh's First Smart E-learning Platform</title>
    <meta name="description"
        content="Ex-3 is Bangladesh's first smart E-learning platform where you can learn and earn. Explore our innovative e-learning system for teachers and students.">
    <meta name="keywords" content="e-learning, LMS, learning platform, social media, e-learning platform">
    <meta name="author" content="Ex-3 Academy">

    {{-- stylesheets and plugins --}}
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-6 text-center mt-5">
                <img class="logohome" src="{{ asset('assets/frontend/images/logo1.png') }}" alt="Ex-3 Academy">
            </div>

            <div class="col-md-6 text-center mt-5">
                <img class="logohome" src="{{ asset('assets/frontend/images/logo2.png') }}" alt="Ex-3 Pro">
            </div>
            <div class="col-md-12 mt-5">
                <h2 class="slogan text-center">Your Earning, Learning & Entertainment Partner</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <h1 class="coming mt-5">Coming Soon<span class="dot-animation">. . .</span></h1>
        </div>

        <div class="row mt-5">
            <div class="video-container col-md-7">


                <iframe width="100%" height="360"
                    src="https://www.youtube.com/embed/D0UnqGm_miA?autoplay=1&mute=0&loop=1"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>


            <div class="about col-md-5 pl-5">
                <h2 class="about-title"><span class="about-shadow">About Us</span></h2>
                <p class="about-text mt-5">
                    Ex-3 Academy (Your learning Partner for professionals). EX-3 Pro (Your social media partner). Start
                    your journey with EX-3 Academy for professionalism and create an account on EX-3 Pro for all types
                    of communication and entertainments .
                </p>

            </div>
        </div>

    </div>

    {{-- js  --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/frontend/js/index.js') }}"></script>

</body>

</html>

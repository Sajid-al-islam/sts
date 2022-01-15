
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@300;400;500;700&family=Montserrat:wght@400;500;700;900&family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
     <!-- Link Swiper's CSS -->
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

     <link rel="icon" href="assets/images/fav.png" type="image/gif">
     <title>Save The Student</title>

     <!-- main css -->
     
     <link rel="stylesheet" href="{{ asset('assets/frontend/css/frontend.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
</head>
<body>
     <div class="wrapper">
        
        @yield('content')
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
          crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
          crossorigin="anonymous"></script>
     <!-- Swiper JS -->
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <!-- Initialize Swiper -->
     <script>
          var swiper = new Swiper(".banner-slider", {
               loop: true,
               autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
               },
               pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
               },
          });
     </script>
</body>

</html>
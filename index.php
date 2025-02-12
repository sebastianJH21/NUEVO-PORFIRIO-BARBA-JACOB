<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'controllers/head.php' ?>
</head>

<body>
    <?php include 'controllers/nav.php' ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <a href="index.php" class="logo">
                    <img src="img/logo.png" alt="">
                </a>
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">Desarrollo Integral del Saber</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Fomentamos el desarrollo humano, cultural, económico,
                                    tecnológico y social de la región y el distrito de Medellín, reconociendo la educación
                                    como la principal fuente del saber.</p>
                                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <a href="index.php" class="logo">
                    <img src="img/logo.png" alt="">
                </a>
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">Metodologías Innovadoras</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Implementar programas académicos y metodologías
                                    técnico-pedagógicas que mejoren cualitativamente la educación en consonancia con las
                                    características sociales, económicas, tecnológicas y culturales del entorno nacional,
                                    regional y local.</p>
                                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <?php include 'controllers/services.php' ?>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/estudiantes.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Acerca de Nosotros</h6>
                    <h1 class="mb-4">Bienvenido al Instituto Porfirio Barba Jacob</h1>
                    <p class="mb-4">Como Institución de Educación para el Trabajo y el Desarrollo Humano.</p>
                    <p class="mb-4">El proceso formativo del estudiante es diseñado con base en el desarrollo de competencias
                        laborales que propone un paradigma en donde el proceso de enseñanza se percibe y se lleva a
                        cabo como un proceso dinámico, participativo e interactivo del sujeto, de modo que el
                        conocimiento sea una auténtica construcción operada por la persona que aprende.</p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Leer más</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Docentes</h6>
                <h1 class="mb-5">Docentes Expertos</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Nombre del Docente</h5>
                            <small>Area</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Nombre del Docente</h5>
                            <small>Area</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Nombre del Docente</h5>
                            <small>Area</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Nombre del Docente</h5>
                            <small>Area</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonios</h6>
                <h1 class="mb-5">Nuestros Estudiantes Dicen!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nombre del Estudiante</h5>
                    <p>Profesión</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus libero dolor quam inventore distinctio, ullam laboriosam maxime soluta voluptas harum.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nombre del Estudiante</h5>
                    <p>Profesión</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore modi quas iste et eos?</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nombre del Estudiante</h5>
                    <p>Profesión</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non corrupti incidunt voluptates debitis dicta, labore saepe tempore accusantium.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nombre del Estudiante</h5>
                    <p>Profesión</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure a, repudiandae voluptatem obcaecati commodi vel sunt illo rem rerum facilis sapiente consequatur?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <?php
    include 'controllers/footer.php';
    include 'controllers/scripts.php';
    ?>

</body>

</html>
@extends('layouts.app')

@section('title', 'Inicio')

@section('main_content')    
    <section class="section-padding pb-0" id="about">
        <div class="container mb-5 pb-lg-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-3" data-aos="fade-up">Nosotros</h2>
                </div>

                <div class="col-lg-6 col-12 mt-3 mb-lg-5">
                    <p class="me-4" data-aos="fade-up" data-aos-delay="300">
                        Desde 2004 y con el objetivo principal de generar un trabajo digno la Cooperativa de Trabajo del Centro confecciona indumentaria de trabajo; viene desarrollándose en base a la voluntad, esfuerzo y a una convicción clara de trabajo en equipo y superación día a día.
                    </p>
                </div>

                <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">
                    <p data-aos="fade-up" data-aos-delay="500">Hemos creado un emprendimiento textil que nos permite mostrar la calidad de nuestro trabajo. Fuimos hilvanando este proyecto que hoy es realidad: una cooperativa de trabajo que nos permite vivir y generar nuestra propia fuente de recursos dignamente.<br> 
                        Pusimos nuestro empeño, creatividad e ideas en sincronía, con organización y perseverancia constante.</p>
                        <a href="<?php  echo route('nosotros');?>" class="nav-link">->Leer mas...</a>                    
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-12 p-0">      
                    <img src="{{ asset('images/elena-rabkina-eVVzwsNhNf4-unsplash.jpg') }}" class="img-fluid about-image" alt="">
                </div>

                <div class="col-lg-3 col-12 bg-dark">  
                    <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                        <h3 class="text-white mb-3" data-aos="fade-up">We’re - idealists and strategic thinkers.</h3>

                        <p class="text-secondary-white-color" data-aos="fade-up">Over six years in the video business</p>

                        <div class="mt-3 custom-links">
                            
                            <a href="#news" class="text-white custom-link" data-aos="zoom-in" data-aos-delay="100">Read News & Events</a>

                            <a href="#contact" class="text-white custom-link" data-aos="zoom-in" data-aos-delay="300">Work with Us</a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-12 p-0">  
                    <section id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/people/studio-shot-beautiful-happy-retired-caucasian-female-with-pixie-hairdo-crossing-arms-her-chest-having-confident-look-smiling-broadly.jpg') }}" class="img-fluid team-image" alt="">

                                <div class="team-thumb bg-warning">
                                    <h3 class="text-white mb-0">Susane R.</h3>

                                    <p class="text-secondary-white-color mb-0">Founding Partner</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('images/people/project-leder-with-disabilities-looking-front-sitting-immobilized-wheelchair-business-office-room.jpg') }}" class="img-fluid team-image" alt="">

                                <div class="team-thumb bg-primary">
                                    <h3 class="text-white mb-0">Morgan S.</h3>

                                    <p class="text-secondary-white-color mb-0">CEO & Investor</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('images/people/asia-business-woman-feeling-happy-smiling-looking-camera-while-relax-home-office.jpg') }}" class="img-fluid team-image" alt="">

                                <div class="team-thumb bg-success">
                                    <h3 class="text-white mb-0">Naomi W.</h3>

                                    <p class="text-secondary-white-color mb-0">Art Director</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="{{asset('images/people/happy-african-american-professional-manager-smiling-looking-camera-headshot-portrait.jpg') }}" class="img-fluid team-image" alt="">

                                <div class="team-thumb bg-info">
                                    <h3 class="text-white mb-0">Robinson H.</h3>

                                    <p class="text-secondary-white-color mb-0">Sales & Marketing</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('images/people/working-business-lady.jpg') }}" class="img-fluid team-image" alt="">

                                <div class="team-thumb bg-danger">
                                    <h3 class="text-white mb-0">Jane M.</h3>

                                    <p class="text-secondary-white-color mb-0">Project Management</p>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                              <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>

                              <span class="visually-hidden">Next</span>
                        </button>
                    </section>

                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" id="portfolio">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h2 class="mb-5 text-center" data-aos="fade-up">Portfolio</h2>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="portfolio-thumb mb-5" data-aos="fade-up">
                        <a href="{{ asset('images/portfolio/visuals-Y4qzW3AsvqI-unsplash.jpeg') }}" class="image-popup">
                            <img src="{{ asset('images/portfolio/visuals-Y4qzW3AsvqI-unsplash.jpeg') }}" class="img-fluid portfolio-image" alt="">
                        </a>

                        <div class="portfolio-info">                     
                            <h4 class="portfolio-title mb-0">Effortless</h4>

                            <p class="text-danger">Branding</p>
                        </div>
                    </div> 

                    <div class="portfolio-thumb" data-aos="fade-up">
                        <a href="{{ asset('images/portfolio/severin-candrian-nn3uIZqmUtE-unsplash.jpeg') }}" class="image-popup">
                            <img src="images/portfolio/severin-candrian-nn3uIZqmUtE-unsplash.jpeg" class="img-fluid portfolio-image" alt="">
                        </a>

                        <div class="portfolio-info">                     
                            <h4 class="portfolio-title mb-0">Health technology</h4>

                            <p class="text-success">Art Direction</p>
                        </div>
                    </div> 
                </div>

                <div class="col-lg-6 col-12">
                    <div class="portfolio-thumb mt-5 mt-lg-0 mb-5" data-aos="fade-up">
                        <a href="{{ asset('images/portfolio/tyler-nix-Y1drF0Y3Oe0-unsplash.jpeg') }}" class="image-popup">
                            <img src="{{ asset('images/portfolio/tyler-nix-Y1drF0Y3Oe0-unsplash.jpeg') }}" class="img-fluid portfolio-image" alt="">
                        </a>

                        <div class="portfolio-info">                     
                            <h4 class="portfolio-title mb-0">Maki</h4>

                            <p class="text-warning">Website</p>
                        </div>
                    </div> 

                    <div class="portfolio-thumb" data-aos="fade-up">
                        <a href="images/portfolio/thought-catalog-gv-T-OjLe4c-unsplash.jpeg" class="image-popup">
                            <img src="{{ asset('images/portfolio/thought-catalog-gv-T-OjLe4c-unsplash.jpeg') }}" class="img-fluid portfolio-image" alt="">
                        </a>

                        <div class="portfolio-info">                     
                            <h4 class="portfolio-title mb-0">The gig economy</h4>

                            <p class="text-info">Graphic</p>
                        </div>
                    </div> 
                </div>

            </div>
        </div>
    </section>

    <section class="news section-padding" id="news">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h2 class="mb-5 text-center" data-aos="fade-up">News & Events</h2>
                </div>

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="news-thumb" data-aos="fade-up">
                        <a href="news-detail.html" class="news-image-hover news-image-hover-warning">
                            <img src="{{ asset('images/news/caroline-lm-uqveD8dYPUM-unsplash.jpg') }}" class="img-fluid large-news-image news-image" alt="">
                        </a>

                        <div class="news-category bg-warning text-white">News</div>
                        
                        <div class="news-text-info">
                            <h5 class="news-title">
                                <a href="news-detail.html" class="news-title-link">The rise of the gig economy spells the end for these workers the old system</a>
                            </h5>

                            <span class="text-muted">22 hours ago</span>
                        </div>
                    </div> 
                </div>

                <div class="col-lg-6 col-12">
                    <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                        <div class="news-top w-100">
                            
                            <a href="news-detail.html" class="news-image-hover news-image-hover-primary">
                                <img src="{{ asset('images/news/jean-philippe-delberghe-MmanXAs1sKw-unsplash.jpeg') }}" class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-category bg-primary text-white">Events</div>
                        </div>
                        
                        <div class="news-bottom w-100">
                            <div class="news-text-info">
                                <h5 class="news-title">
                                    <a href="news-detail.html" class="news-title-link">Job Opportunities: Digital, Marketing</a>
                                </h5>

                                <div class="d-flex flex-wrap">
                                    <span class="text-muted me-2">
                                        <i class="bi-geo-alt-fill me-1 mb-2 mb-lg-0"></i>
                                        Alaska,
                                    </span>

                                    <span class="text-muted">August 6, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                        <div class="news-top w-100" data-aos="fade-up">
                            
                            <a href="news-detail.html" class="news-image-hover news-image-hover-success">
                                <img src="{{ asset('images/news/maria-stewart-p4tj0g-_aMM-unsplash.jpeg') }}" class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-category bg-success text-white">News</div>
                        </div>
                        
                        <div class="news-bottom w-100">
                            <div class="news-text-info">
                                <h5 class="news-title">
                                    <a href="news-detail.html" class="news-title-link">What happened to new viral video?</a>
                                </h5>

                                <span class="text-muted">6 days ago</span>
                            </div>
                        </div>
                    </div> 
                </div>

            </div>
        </div>
    </section>

    <section class=" contact section-padding" id="contact">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7 col-12 mx-auto">

                    <h2 class="mb-4 text-center" data-aos="fade-up">Envíanos un mensaje</h2>

                    <form action="#" method="post" class="contact-form" role="form" data-aos="fade-up">

                        <div class="row">
                            
                            <div class="col-lg-6 col-6">
                                <label for="name" class="form-label">Nombre <sup class="text-danger">*</sup></label>

                                <input type="text" name="name" id="name" class="form-control" placeholder="Nombre completo" required>
                            </div>

                            <div class="col-lg-6 col-6">
                                <label for="email" class="form-label">Email <sup class="text-danger">*</sup></label>

                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Dirección de email" required>
                            </div>

                            <div class="col-12 my-4">
                                <label for="message" class="form-label">¿Cómo podemos ayudarte?</label>

                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Contanos acerca del proyecto" required></textarea>
                                
                            </div>

                            <div class="col-12">
                                <label for="services" class="form-label">Servicios<sup class="text-danger">*</sup></label>
                            </div>

                            <div class="col-lg-4 col-12">
                                <div class="form-check">
                                    <input type="checkbox" id="checkbox1" name="checkbox1" class="form-check-input">

                                    <label class="form-check-label" for="checkbox1">Indumentaria</label>
                                  </div>
                            </div>

                            <div class="col-lg-4 col-12 my-2 my-lg-0">
                                <div class="form-check">
                                    <input type="checkbox" id="checkbox2" name="checkbox2" class="form-check-input">

                                    <label class="form-check-label" for="checkbox2">Diseño</label>
                                  </div>
                            </div>

                            <div class="col-lg-4 col-12">
                                <div class="form-check">
                                    <input type="checkbox" id="checkbox3" name="checkbox3" class="form-check-input">

                                    <label class="form-check-label" for="checkbox3">Bordado</label>
                                  </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 mx-auto mt-5">
                            <button type="submit" class="form-control">Enviar Mensaje</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>   
@endsection
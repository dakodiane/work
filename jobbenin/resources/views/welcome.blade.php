@extends('templates.app')

@section('document')

<main>

<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active">
        <div class="single-slider slider-height d-flex align-items-center" data-background="{{asset('img/team/work.jpeg')}}">
            <div class="container">
                
                <!-- Search Box -->
                <div class="row">
                    <div class="col-xl-8">
                        <!-- form -->
                        <form action="#" class="search-box">
                            <div class="input-form">
                                <input type="text" placeholder="Categories ou Mots clés">
                            </div>
                            <div class="select-form">
                                <div class="select-itms">
                                    <select name="select" id="select1">
                                        <option value="">Ville</option>
                                        <option value="">Cotonou</option>
                                        <option value="">Abomey-Calavi</option>
                                        <option value="">Porto-Novo</option>
                                        <option value="">Bohicon</option>
                                        <option value="">Abomey</option>
                                        <option value="">Parakou</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-form">
                                <a href="">Trouver une offre</a>
                            </div>	
                        </form>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- Section Tittle -->
            <!-- slider Area End-->
<!-- Our Services Start -->
<div class="our-services  ">
    <div class="container">
      <!-- Featured_job_start -->
<section class="featured-job-area feature-padding">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 mt-10">
                <div class="section-tittle section-tittle2 text-center esp">
                    <h2>Quelques offres</h2>
                    <span >Trouvez l'emploi de vos rêves</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-xl-10 mt-120">
                <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="job_details.html"><img src="{{asset('img/icon/job-list1.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="job_details.html"><h4>Developpeur Mobile</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Porto-Novo</li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="job_details.html">Voir l'offre</a>
                        <span>Il y'a 7heures</span>
                    </div>
                </div>
                <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="job_details.html"><img src="{{asset('img/icon/job-list2.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="job_details.html"><h4>Comptable principal</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Cotonou</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="job_details.html">Voir l'offre</a>
                        <span>Il y'a 1 jour</span>
                    </div>
                </div>
                 <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="job_details.html"><img src="{{asset('img/icon/job-list3.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="job_details.html"><h4>Ouvrier en mécanique industrielle</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Abomey-Calavi</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="job_details.html">Voir l'offfre</a>
                        <span>23 Fev 2023</span>
                    </div>
                </div>
                 <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="job_details.html"><img src="{{asset('img/icon/job-list4.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="job_details.html"><h4>Secretaire </h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Parakou</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="job_details.html">Voir l'offre</a>
                        <span>31 Jan 2023</span>
                    </div>
                </div>
                 <!-- single-job-content -->
                 <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="job_details.html"><img src="{{asset('img/icon/job-list1.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="job_details.html"><h4>Developpeur Mobile</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Porto-Novo</li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="job_details.html">Voir l'offre</a>
                        <span> 23 Dec 2022</span>
                    </div>
                </div>
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="job_details.html"><img src="{{asset('img/icon/job-list2.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="job_details.html"><h4>Comptable principal</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Cotonou</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="job_details.html">Voir l'offre</a>
                        <span>15 Dec 2022</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured_job_end -->
  
        <!-- More Btn -->
        <!-- Section Button -->
        <div class="row esp2">
            <div class="col-lg-12">
                <div class=" text-center mb-5">
                    <a href="offre.html" class="border-btn2">Voir +</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Services End -->

<section  class="section gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="section-tittle text-center section-tittle2 mt-85">
                    <h2 >Freelancers</h2>
                    <span >Trouvez des talents à votre façon</span>

                </div>
            </div>
        </div>
        <div class=" justify-content-center">
        <div class="row">
            <div class="col-md-4">
                <div class="team text-center">
                   
                    <img src="{{asset('img/free/team3.png')}}" alt="Team Image" class="avatar">
                    <div class="title">
                        
                        <h4 >Developpeur Frontend</h4>
                        <h5 class="muted regular">Ben Adamson</h5>
                       
                    </div>
                    <a href="detail_free.html">
                    <button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Details</button>
                </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team text-center">
                    
                    <img src="{{asset('img/free/team1.png')}}" alt="Team Image" class="avatar">
                    <div class="title">
                        
                        <h4 >Graphiste</h4>
                        <h5 class="muted regular" >Eva Williams</h5>
                       
                    </div>
                    <a href="detail_free.html" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Details</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team text-center">
                    <img src="{{asset('img/free/team2.png')}}" alt="Team Image" class="avatar">
                    <div class="title">
                      
                        <h4  class="muted regular" >Redacteur Web</h4>
                        <h5>John Phillips</h5>
                     
                    </div>
                    <a href="detail_free.html" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Details</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="team text-center">
                   
                    <img src="{{asset('img/free/team3.png')}}" alt="Team Image" class="avatar">
                    <div class="title">
                        
                        <h4 >Developpeur Frontend</h4>
                        <h5 class="muted regular">Ben Adamson</h5>
                      
                    </div>
                    <a href="detail_free.html">
                    <button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Details</button>
                </a>
               </div>
            </div>
            <div class="col-md-4">
                <div class="team text-center">
                    
                    <img src="{{asset('img/free/team1.png')}}" alt="Team Image" class="avatar">
                    <div class="title">
                        
                        <h4 >Graphiste</h4>
                        <h5 class="muted regular" >Eva Williams</h5>
                      
                    </div>
                    <a href="detail_free.html" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Details</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team text-center">
                    <img src="{{asset('img/free/team2.png')}}" alt="Team Image" class="avatar">
                    <div class="title">
                      
                        <h4  class="muted regular" >Redacteur Web</h4>
                        <h5>John Phillips</h5>
                       
                    </div>
                    <a href="detail_free.html" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Details</a>
                </div>
            </div>
        </div>
    </div>
    </div>
     <!-- Section Button -->
    
</section>
<div class="row">
        <div class="col-lg-12">
            <div class="browse-btn2 text-center mb-5">
                <a href="freelancer.html" class="border-btn2">Voir +</a>
            </div>
        </div>
    </div>




</main>

@endsection
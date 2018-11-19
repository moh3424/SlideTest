<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slider</title>
    <!-- font google -->
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet"> 
    <!-- CDN bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <!-- CDN fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">

<style>
    @import url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
    body{
        background-color: #c69;
        font-family: 'Coiny', cursive;
    }

    h3, p{
        color: #c69;
    }
    /* Responsive typography */
    html {
        font-size: 1rem;
    }

    .textColor{
        color: #c69;
    }
    
    @include media-breakpoint-up(sm) {
        html {
        font-size: 1.2rem;
        }
    }
    
    @include media-breakpoint-up(md) {
        html {
        font-size: 1.4rem;
        }
    }
    
    @include media-breakpoint-up(lg) {
        html {
        font-size: 1.6rem;
        }
    }

    /* Posiotion  */
    .posnav{
        position: relative;
        /* position: -webkit-sticky; */
        top: 15%;
        z-index: 1;
    }
    .position1{
        position: relative;
        right: -550px;
        bottom: 30%;
        z-index: 3;
    }
    .position4{
        position: relative;
        right: -75px;
        top:-15%;
        z-index: 3;
    }
    .position2{
        position: relative;
        right: -600px;
        top:35%;
        z-index: 2;
    }
    .position3{
        position: relative;
        left: -200px;
        top:35%;
        z-index: 2;
    }
    .position5{
        position: relative;
        right: -100px;
        top:-40%;
        z-index: 2;
    }
    .position6{
        position: relative;
        right: -100px;
        top:-40%;
        z-index: 2;
    }


    /* Make the images wide and responsive. */
    .wide-and-responsive img {
    height: auto;
    max-width: 100%;
    width: 100%;
    }

    /* Change the direction of the transition. */
    @media all and (transform-3d), (-webkit-transform-3d) {
    .rtl .item.next,
    .rtl .active.right {
        -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
    }
    .rtl .item.prev,
    .rtl .item.active.left {
        -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
    }
    }

    /* Change the order of the indicators. Return them to the center of the slide. */
    .rtl-indicators .carousel-indicators {
    width: auto;
    margin-left: 0;
    transform: translateX(-50%);
    }
    .rtl-indicators .carousel-indicators li {
    float: right;
    margin: 1px 4px;
    
    }
    .rtl-indicators .carousel-indicators .active {
    margin: 0 3px;
    }

    /* animation avec css */
    #anim1 .fadeOutUp {
        /* animation-delay: 6s; */
        animation-duration: 6s;
        
        animation-iteration-count: infinite;

    }

    .progress{
        max-width: 200px;
    }
    .progress-bar{
        background-color:black;
    }
</style>
</head>
<body>
    
    <div class="container mt-5">
        <div class="row d-flex m-0 p-0">
            <div class="m-0 p-0">
                <div class="navbar m-4 posnav">
                    <a href=""><span class="textColor ">A $ A P</span> </a>
                </div>
                <div id="carousel-2" class="carousel slide rtl" data-ride="carousel">    
                    <div class="carousel-inner" role="listbox">  
                        <div class="item active" >
                        <img  src="img/a.jpg" style="width:250px; height:500px" alt="Second slide">
                        </div>
                        <div class="item" >
                        <img  src="img/c.jpg" style="width:250px; height:500px" alt="Third slide">
                        </div>
                        <a class="carousel-control-next" href="carousel-2" role="button" data-slide="next">
                            <span class="position3 textColor" aria-hidden="true">Next&nbsp;&nbsp;</span>
                        </a>
                    </div> <!-- fin carousel-inner -->  
                </div><!-- fin crousel-2 -->
                <div class="row m-auto d-flex position4"> 
                    <div class="hidden">
                        <div id="carousel-2" class="carousel  slide rtl" data-ride="carousel" >  
                            <div class="carousel-inner" role="listbox">                               
                                <div class="item active">
                                <img  src="//placehold.it/50x50/c69/f9c/?text=01" alt="Second slide">                               
                                </div>
                                <div class="item">
                                <img  src="//placehold.it/50x50/c69/f9c/?text=02" alt="Third slide">                               
                                </div>                          
                            </div>                         
                        </div> 
                    </div>               
                    <div class="">
                            <div id="myCarousel" class="carousel slide carousel-rtl" data-ride="carousel">                      
                                <div class="carousel-inner" role="listbox">                              
                                    <div class="item active" >
                                    <img  src="//placehold.it/50x50/?text=01" alt="Second slide">                                   
                                    </div>
                                    <div class="item" >
                                    <img  src="//placehold.it/50x50/?text=02" alt="Third slide">                                  
                                    </div>                              
                                </div>
                            </div>
                    </div>
                </div><!-- fin row interne -->
            </div><!-- fin col -->       
            <div class="m-0 p-0">        
                    <div class="navbar text-center m-4 posnav">
                        <a href=""><span class="textColor ">New</span> </a>
                        <a href=""><span class="textColor ">Albums</span> </a>
                        <a href=""><span class="textColor ">Videos</span> </a>
                        <a href=""><span class="textColor ">Store</span> </a>
                    </div>        
                <div id="myCarousel" class="carousel slide rtl-indicators" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                            <div class="item active" >
                                <img  src="img/d.jpg" style="width:700px; height:500px" alt="Second slide">
                            </div>
                            <div class="item" >
                                <img src="img/b.jpg" style="width:700px; height:500px" alt="Third slide">
                            </div>
                            <a class="carousel-control-prev" href="myCarousel" role="button" data-slide="prev">
                                <span class="position2 textColor" aria-hidden="true">Prev&nbsp;&nbsp;</span>
                            </a>
                    </div> <!-- fin carousel-inner -->

                </div><!-- fin myCarousel -->
                <div id="anim1" class="position5">  
                    <span ><h3 class="animated fadeOutUp"> Hello mes amis</h3></span>
                    <span ><p class="animated fadeOutUp"> Ouuuiiiiiiiiiiiiiiii!!!!!!!!!!!!!</p></span>
                </div>
                <div id="anim1" class="position6">  
                    <div class="row">
                        <div class="col-md-2"><span><i class="fas fa-fw fa-2x fa-pause animated fadeOutUp"></i></span></div>
                        <div class=" col-md-10">
                            <div class="progress animated fadeOutUp" style="height: 2px;">
                                 <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-auto d-flex position1"> 
                    <div class="">
                        <div id="carousel-2" class="carousel  slide rtl" data-ride="carousel"> 
                            <div class="carousel-inner" role="listbox"> 
                                <div class="item active">
                                <img  src="//placehold.it/50x50/c69/f9c/?text=03" alt="Second slide">
                                </div>
                                <div class="item">
                                <img  src="//placehold.it/50x50/c69/f9c/?text=04" alt="Third slide">
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="hidden">
                            <div id="myCarousel" class="carousel slide carousel-rtl" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                    <img  src="//placehold.it/50x50/c69/f9c/?text=03" alt="Second slide">
                                    </div>
                                    <div class="item">
                                    <img  src="//placehold.it/50x50/c69/f9c/?text=04" alt="Third slide">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div><!-- fin row interne -->
            </div><!-- fin col -->
        </div><!-- fin row -->
    </div><!-- fin cotainer-fluid -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
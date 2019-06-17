@extends('base.apps')
@push('styles')
<style type="text/css">

    .slider {
        width: 100%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: white;
      
    }

    .slick-slide {
      transition: all ease-in-out .3s;
      /* opacity: .2; */
      margin-bottom: 50px;
    }

    .item-slider {
        width: 100%;
        height: 58%;
    }
    .img-slider {
        width: 100%;
        height: 100%;
    }
    .card_slider_1 {
        background-image: url('../img/tutor_kelasbahasa_1.jpg');
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .item-slider .card_slider_1 .card-body {
        padding: 0 !important;
    }
    .slider-list-country {
        width: 200px;
        height: 80px;
        float: right;
        margin-top: 295px;
    }

  </style>
@endpush
@section('img_header')
<div class="home_background">
    <div class="test" style="margin-top: 0px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6" style="padding-right:0;">         
                        <!-- Heading -->
                        <h2 class=" display-4 font-weight-bold pt-2 mb-2">
                            BERBICARA BAHASA ASING MENJADI MUDAH
                            
                        </h2>
     
                        <!-- Description -->
                        <p class="my-6">
                            Kuasai bahasa yang kamu inginkan, dengan waktu yang fleksibel dan pengajar professional. Kapanpun dan dimanapun.
                        
                        </p>
                        <div class="btn-mulai"><button class="btn btn-primary">MULAI SEKARANG</button></div>
                        
                </div>
                <div class="col-md-6" style="padding-left:0;">
                    <div class="gambar_header-home">
                        <img src="img/GAMBAR BANNER.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@section('content')
<div id="section-1">
    <div class="tutor__ruang-bahasa">
        <div class="judul__tutor-ruang-bahasa">
            <div class="container mt-5">
                <div class="judul_section_1 text-center font-weigth-bold">
                    <h2><strong>TUTOR LOKAL & NATIVE</strong></h2>
                    <h4>PENGAJAR PROFESSIONAL</h4>
                </div>
            </div>
        </div>
       
        <div class="images-card__tutor-bahasa mt-5 container" >
            
            <div id="mySlider" class="myslider-content-slick">
                <a href="#" class="item-slider">
                    <div class="card custom__card-1">
                        <div class="img__card-tutor">
                            
                                <div class="img__background-tutor">
                                    <div class="content__background-tutor">
                                        <div class="card tutor__list-asal">
                                            <div class="card-body custom__card-body_tutor" style="padding: 0;">
                                                <div class="row">
                                                    <div class="col-md-5 pr-0 layouts__size-android">
                                                        <div class="img__tutorkelasbahasa__details">
                                                            <img src="{{ asset('img/indonesia_tutor.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-0 layouts__size-android">
                                                        <div class="tutor__kelasbahasa-details">
                                                            <h4>America</h4>
                                                            <p>20 Hours</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div> 
                </a>

                <a href="#" class="item-slider">
                    <div class="card custom__card-2">
                        <div class="img__card-tutor">
                            
                                <div class="img__background-tutor">
                                    <div class="content__background-tutor">
                                        <div class="card tutor__list-asal">
                                            <div class="card-body custom__card-body_tutor" style="padding: 0;">
                                                <div class="row">
                                                    <div class="col-md-5 pr-0 layouts__size-android">
                                                        <div class="img__tutorkelasbahasa__details">
                                                            <img src="{{ asset('img/indonesia_tutor.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-0 layouts__size-android">
                                                        <div class="tutor__kelasbahasa-details">
                                                            <h4>America</h4>
                                                            <p>20 Hours</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div> 
                </a>

                <a href="#" class="item-slider">
                    <div class="card custom__card-3">
                        <div class="img__card-tutor">
                            
                                <div class="img__background-tutor">
                                    <div class="content__background-tutor">
                                        <div class="card tutor__list-asal">
                                            <div class="card-body custom__card-body_tutor" style="padding: 0;">
                                                <div class="row">
                                                    <div class="col-md-5 pr-0 layouts__size-android">
                                                        <div class="img__tutorkelasbahasa__details">
                                                            <img src="{{ asset('img/france_tutor.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-0 layouts__size-android">
                                                        <div class="tutor__kelasbahasa-details">
                                                            <h4>America</h4>
                                                            <p>20 Hours</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div> 
                </a>

                <a href="#" class="item-slider">
                    <div class="card custom__card-4">
                        <div class="img__card-tutor">
                            
                                <div class="img__background-tutor">
                                    <div class="content__background-tutor">
                                        <div class="card tutor__list-asal">
                                            <div class="card-body custom__card-body_tutor" style="padding: 0;">
                                                <div class="row">
                                                    <div class="col-md-5 pr-0 layouts__size-android">
                                                        <div class="img__tutorkelasbahasa__details">
                                                            <img src="{{ asset('img/korea_tutor.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-0 layouts__size-android">
                                                        <div class="tutor__kelasbahasa-details">
                                                            <h4>America</h4>
                                                            <p>20 Hours</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div> 
                </a>
                <!-- <a href="#" class="item-slider" style="text-decoration:none;">
                    <div class="card card_slider_1">
                        
                    </div>
                </a>
                <a href="#" class="item-slider" style="text-decoration:none;">
                    <div class="card card_slider_1">
                        <div class="img__background-tutor">
                            <div class="content__background-tutor">
                                <div class="card tutor__list-asal">
                                    <div class="card-body custom__card-body_tutor" style="padding: 0;">
                                        <div class="row">
                                            <div class="col-md-5 pr-0 layouts__size-android">
                                                <div class="img__tutorkelasbahasa__details">
                                                    <img src="{{ asset('img/america_tutor.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-0 layouts__size-android">
                                                <div class="tutor__kelasbahasa-details">
                                                    <h4>America</h4>
                                                    <p>20 Hours</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="item-slider" style="text-decoration:none;">
                    <div class="card card_slider_1">
                        
                    </div>
                </a>   
                <a href="#" class="item-slider" style="text-decoration:none;">
                    <div class="card card_slider_1">
                        
                    </div>
                </a>
                <a href="#" class="item-slider" style="text-decoration:none;">
                    <div class="card card_slider_1">
                        
                    </div>
                </a> -->
            </div>
                
                
                
            <!-- <div class="row"> -->
                <!-- <div class="col-md-4">
                    <div class="card custom__card-1">
                        <div class="img__card-tutor">
                            <a href="#">
                                <div class="img__background-tutor">
                                    <div class="content__background-tutor">
                                        <div class="card tutor__list-asal">
                                            <div class="card-body custom__card-body_tutor" style="padding: 0;">
                                                <div class="row">
                                                    <div class="col-md-5 pr-0 layouts__size-android">
                                                        <div class="img__tutorkelasbahasa__details">
                                                            <img src="{{ asset('img/america_tutor.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-0 layouts__size-android">
                                                        <div class="tutor__kelasbahasa-details">
                                                            <h4>America</h4>
                                                            <p>20 Hours</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>        
                
                <div class="col-md-4">
                    <div class="card custom__card-2">
                        <div class="img__card-tutor">
                            <a href="#">
                                <div class="img__background-tutor">
                                    <div class="content__background-tutor">
                                        <div class="card tutor__list-asal">
                                            <div class="card-body custom__card-body_tutor" style="padding: 0;">
                                                <div class="row">
                                                    <div class="col-md-5 pr-0 layouts__size-android">
                                                        <div class="img__tutorkelasbahasa__details">
                                                            <img src="{{ asset('img/korea_tutor.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-0 layouts__size-android">
                                                        <div class="tutor__kelasbahasa-details">
                                                            <h4>Korea</h4>
                                                            <p>10 Hours</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card custom__card-3">
                        <div class="img__card-tutor">
                            <a href="#">
                                <div class="img__background-tutor">
                                    <div class="content__background-tutor">
                                        <div class="card tutor__list-asal">
                                        <div class="card-body custom__card-body_tutor" style="padding: 0;">
                                                <div class="row">
                                                    <div class="col-md-5 pr-0 layouts__size-android">
                                                        <div class="img__tutorkelasbahasa__details">
                                                            <img src="{{ asset('img/korea_tutor.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-0 layouts__size-android">
                                                        <div class="tutor__kelasbahasa-details">
                                                            <h4>Korea</h4>
                                                            <p>10 Hours</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> -->


            <!-- </div> -->
           
            
        </div>
        <div class="button__tutorkelasbahasa__find d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">TEMUKAN TUTORMU</button>
        </div>
    </div>
</div>
<div id="section-2" class="mt-5">
    <div class="judul__section-2-kelas__bahasa d-flex justify-content-center">
        <h2 class="font-weigth-bold"><strong>PILIH KEBUTUHANMU</strong></h4>
    </div>
    <div class="choose__kebutuhan-customer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="list__kebutuhan-karir">
                        <div class="row">
                            <div class="col-md-3 pr-0 pl-0">
                                <div class="icon__kebutuhan-kelasbahasa">
                                    <img id="karir" src="{{ asset('img/Group_52_1.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 pl-0 pr-0">
                                <div class="kebutuhan__customer-kelasbahasa">
                                    <h2 class="__karir"><strong>KARIR</strong></h2>
                                    <hr class="deep-purple mb-2 mt-0 d-inline-block mx-auto" style="width: 55px;">
                                    <p class="deskripsi__Karir">TINGKATKAN PROFESIONALITASMU UNTUK MENJAGA INTERVIEW KERJA, SERTIFIKASI, PROMOSI DLL.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cold-md-6">
                    <div class="list__kebutuhan-jalan-jalan">
                        <div class="row">
                            <div class="col-md-3 pr-0 pl-0">
                                <div class="icon__kebutuhan-kelasbahasa">
                                    <img id="jalan-jalan" src="{{ asset('img/Group_52_2.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 pl-0 pr-0">
                                <div class="kebutuhan__customer-kelasbahasa">
                                    <h2 class="__jalanjalan"><strong>JALAN-JALAN</strong></h2>
                                    <hr class="deep-purple mb-2 mt-0 d-inline-block mx-auto" style="width: 55px;">
                                    <p class="deskripsi__jalanjalan">TIDAK PERLU KHAWATIR KESULITAN BERKOMUNIKASI KETIKA BERPEGIAN LUAR NEGERI</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="list__kebutuhan-akademik">
                        <div class="row">
                            <div class="col-md-3 pr-0 pl-0">
                                <div class="icon__kebutuhan-kelasbahasa">
                                    <img id="akademik" src="{{ asset('img/Group_52_3.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 pl-0 pr-0">
                                <div class="kebutuhan__customer-kelasbahasa">
                                    <h2 class="__akademik"><strong>AKADEMIK</strong></h2>
                                    <hr class="deep-purple mb-2 mt-0 d-inline-block mx-auto" style="width: 55px;">
                                    <p class="deskripsi__akademik">AKADEMIK RISET, TES TOEFL, IELTS, DELE DAN KEBUTUHAN AKADEMIK LAINNYA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cold-md-6">
                    <div class="list__kebutuhan-hobi">
                        <div class="row">
                            <div class="col-md-3 pr-0 pl-0">
                                <div class="icon__kebutuhan-kelasbahasa">
                                    <img id="hobi" src="{{ asset('img/Group_52_4.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 pl-0 pr-0">
                                <div class="kebutuhan__customer-kelasbahasa">
                                    <h2 class="__hobi"><strong>HOBI</strong></h2>
                                    <hr class="deep-purple mb-2 mt-0 d-inline-block mx-auto" style="width: 55px;">
                                    <p class="deskripsi__hobi">INGIN MENGUASAI BAHASA LEBIH DARI SATU? MAKA HALLOWORLD ADALAH SOLUSINYA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="section-3" class="mt-5">
    <div class="hallo_world__judul-text d-flex justify-content-center mt-5">
        <h2>KENAPA HALLOWORLD?</h2>
    </div>

    <div class="content__halloworld">
       <div class="left__content-halloworld-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 pr-0">
                        <img class="kebutuhan__img" src="{{ asset('img/halloworld_1.png')}}" alt="">
                    </div>
                    <div class="col-md-3 pl-0 ">
                        <h2 class="text_halloworld-kebutuhan"><strong>SESUAI KEBUTUHAN</strong></h2>
                        <p class="deskripsi__halloworld-kebutuhan text-muted">PILIH BAHASA YANG MAU KAMU PELAJARI SESUAI DENGAN KEBUTUHANMU.</p>
                    </div>
                </div>
            </div>
       </div>
        <div class="right__content-halloworld-2">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-3 pr-0">
                        <img class="kebutuhan__img-2" src="{{ asset('img/halloworld_2.png')}}" alt="">
                    </div>
                    <div class="col-md-4 pl-0">
                        <h2 class="text_halloworld-kebutuhan-2"><strong>BAYAR PER-PERTEMUAN</strong></h2>
                        <p class="deskripsi__halloworld-kebutuhan-2 text-muted">HANYA PERLU MEMBAYAR PERTEMUAN YANG KAMU IKUTI DAN ATUR BUFGET TANPA KHAWATIR TERLALU MAHAL</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="left__content-halloworld-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 pr-0">
                        <img class="kebutuhan__img-3" src="{{ asset('img/halloworld_3.png')}}" alt="">
                    </div>
                    <div class="col-md-4 pl-0 ">
                        <h2 class="text_halloworld-kebutuhan-3"><strong>FLEKSIBEL</strong></h2>
                        <p class="deskripsi__halloworld-kebutuhan-3 text-muted">KAPAN DAN DI MANA SAJA TANPA PERLU DATANG KE TEMPAT LES SELAMA KAMU TERHUBUNG KE INTERNET.</p>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>
<div id="section-4" class="mt-5">
    <div class="judul__mendaftar-pages d-flex justify-content-center">
        <h2>CARA MENDAFTAR</h2>
    </div>
    <div class="content__mendaftar-kelasbahasa">
        <div class="right__content-mendaftar-1">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-3 pr-0">
                        <h2 class="text_halloworld-mendaftar-1"><strong>PILIH BAHASA</strong></h2>
                        <p class="deskripsi__halloworld-mendaftar-1 text-muted">PILIH BAHASA APA YANG INGIN KAMU KUASAI</p>
                    </div>
                    <div class="col-md-3 pr-0">
                        <img class="mendaftar__img-1" src="{{ asset('img/mendaftar_icon-1.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="left__content-mendaftar-2">
            <div class="container">
                <div class="row">
                <div class="col-md-3 pr-0">
                        <img class="mendaftar__img-2" src="{{ asset('img/mendaftar_icon-2.png')}}" alt="">
                    </div>
                    <div class="col-md-3 pr-0">
                        <h2 class="text_halloworld-mendaftar-2"><strong>PILIH TUTOR</strong></h2>
                        <p class="deskripsi__halloworld-mendaftar-2 text-muted">PILIH TUTOR SESUAI DENGAN KRITERIA YANG KAMU INGINKAN.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="right__content-mendaftar-3">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-3 pr-0">
                        <h2 class="text_halloworld-mendaftar-3"><strong>INTERAKSI</strong></h2>
                        <p class="deskripsi__halloworld-mendaftar-3 text-muted">KAMU SUDAH BISA BELAJAR BERBICARA BAHASA ASING DENGAN TUTOR PILIHANMU VIA FITUR VIDEO CHAT</p>
                    </div>
                    <div class="col-md-3 pr-0">
                        <img class="mendaftar__img-3" src="{{ asset('img/mendaftar_icon-3.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="section-5" class="mt-5">
    <div class="judul__section-5-kelasbahasa">
        <div class="container-fluid">
            <div class="section__text-align">
                <h2 class="text-section-1" style="margin-top: 50px;">PELAJARI BAHASA,</h2>
                <h2 class="text-section-2">BUKAN HANYA KATA-KATA</h2>
            </div>
        </div>
    </div>
</div>
<div id="section-6" class="mt-5">
    <div class="judul__content-section-6">
        <div class="d-flex justify-content-center">
            <h2>KELAS ENTERPRISE</h2>
        </div>

        <div class="content__section-6 mt-3">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <p>INGIN TINGKATKAN KEMAMPUAN BERBICARA BAHASA ASING KARYAWAN ANDA?</p>
                </div>
            </div>
        </div>

        <div class="btn__section-6 mt-3">
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn__section-6__kelasbahasa">HUBUNGI KAMI</button>
            </div>
        </div>
    </div>
</div>
<!--============================================================-->
<!--SECTION 7-->
<!--============================================================-->
<div id="section-7" class="mt-5">
    <div class="tetimoni__customer-kelasbahasa__">
        <div class="judul__testimoni__section7">
            <div class="d-flex justify-content-center">
                <h2 class="font-weight-bold"><strong>TESTIMONI</strong></h2>
            </div>
        </div>

        <div class="background__testimoni-section7">
            <div class="slider__content-testimoni">
                <div class="item_slider-testimoni">
                    <div class="d-flex-justify-content-center">
                        <img src="{{ asset('img/asset1.png') }}" alt="">
                    </div>

                    <div class="testimoni__ text-center text-muted">
                        <p class="tetimoni__customer-kelasbahasa">
                            Setelah mengikuti kelas di Halloworld, 
                            kemampuan berbicara bahasa inggris saya meningkat
                            pesat. Tutor sangat membantu dan yang pasti saya bisa
                            belajar kapan saja dan dimana saja.
                        </p>
                    </div>
                    
                    <div class="testimoni__by__Customer text-center text-muted">
                            <p class="customer__ font-weight-bold mt-5"><strong>Farhan</strong></p>
                            <p class="job__Customer font-weight-bold" style="margin-top: -20px;"><strong>Desainer</strong></p>
                    </div>
                </div>
            </div>
        </div>
     
    </div>
</div>
<div class="button_testimon-section-7 text-center mt-5">
    <button type="submit" class="btn btn-testimoni">MULAI BELAJAR</button>
</div>
<!--============================================================-->
<!--END SECTION 7!!-->
<!--============================================================-->


@push('scripts')
<script type="text/javascript">
$('#mySlider').slick({
        // dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        // dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>
@endpush
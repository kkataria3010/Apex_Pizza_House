@extends('layouts.app')

@section('content')
                <header class="hero flex items-center">
                    <div class="container">
                        <div class="welcome flex items-center">
                            <span>Welcome to</span>
                            <img src="{{ asset('/images/apex-logo.png') }}" alt="" width="300rem">
                        </div>
                        <h1>Ahmedabad's Best <span>Pizza</span> House</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the
                            industry's standard dummy.</p>
                        <div>
                            <a href="/menu"><button class="btn btn-primary"> Order Now</button></a>
                            <a href="/#contact"><button class="btn btn-secondary"> Contact Us</button></a>
                        </div>
                        <div class="hero-image">
                            <img src="{{ asset('/images/source.gif') }}" alt="">
                        </div>
                    </div>
                </header>
                <section id="about"class="about-meal">
                    <div class="container">
                        <h1 class="section-heading">About Apex Pizza House</h1>
                        <div class="about-meal-wrap flex">
                            <div class="flex-1">
                                <img src="{{ asset('/images/italian.png') }}" alt="">
                            </div>
                            <div class="flex-1">
                                <h2>Apex Pizza House is one of finest Ahmedabad's Italian Restaurant</h2>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of
                                    classical Latin literature from 45 BC, making it over 2000 years old. Richard
                                    McClintock, a
                                    Latin professor at Hampden Sydney College in Virginia, The standard chunk of Lorem
                                    Ipsum used
                                    since the 1500s is reproduced below for those interested.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="services"class="our-services">
                    <div class="container">
                        <h1 class="section-heading">Our services</h1>
                        <div class="card-wrapper flex">
                            <div class="service-card magic-shadow-sm">
                                <img class="icon" src="{{ asset('/images/untitled-3.png') }}" style="width:10rem; height:8.5rem; top:-4.2rem;" alt="">
                                <h2>Free Home delivery</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a href="/menu"><button class="btn btn-secondary">Order Now</button></a>
                            </div>
                            <div class="service-card magic-shadow-sm">
                                <img class="icon" src="{{ asset('/images/untitled.png') }}" alt="" style="width:9rem; height:7.5rem; top:-3.8rem;">
                                <h2 class="text-primary">Ambient Restaurant</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a href="/#contact"><button class="btn btn-primary">Visit Now</button></a>
                            </div>
                            <div class="service-card magic-shadow-sm">
                                <img class="icon" src="{{ asset('/images/untitled-2.png') }}" alt="" style="width:6.3rem; height:5.9rem; top:-3rem;">
                                <h2>Party Orders</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a href="/#contact"><button class="btn btn-secondary">Contact Us</button></a>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- <section id="booktable"class="big-deal">
                    <div class="container">
                        <h1 class="section-heading text-pure">Big Deals of the Week</h1>
                        <div class="timer">
                            <div>
                                <span>02</span>
                                <span>Days</span>
                            </div>
                            <div>
                                <span>24</span>
                                <span>Hours</span>
                            </div>
                            <div>
                                <span>55</span>
                                <span>Minutes</span>
                            </div>
                            <div>
                                <span>58</span>
                                <span>Seconds</span>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <h1 class="section-heading text-pure">Big Deals of the Week</h1>
                        <div class="timer">
                            <div>
                                <span>02</span>
                                <span>Days</span>
                            </div>
                            <div>
                                <span>24</span>
                                <span>Hours</span>
                            </div>
                            <div>
                                <span>55</span>
                                <span>Minutes</span>
                            </div>
                            <div>
                                <span>58</span>
                                <span>Seconds</span>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <section id="contact"class="contact-us flex">
                    <div class="contact-info-wrapper">
                        <h1 class="section-heading">Contact us</h1>
                        <div class="contact-info">
                            <div>
                                <div>
                                    <img src="{{ asset('/icons/phone-2.svg') }}" alt="">
                                    <div>
                                        <span>Call us:</span>
                                        <span>(+91) 123 456 7891</span>
                                    </div>
                                </div>
                                <div>
                                    <img src="{{ asset('/icons/bag-2.svg') }}" alt="">
                                    <div>
                                        <span>E-mail ::</span>
                                        <span>suppor@apexpizza.com</span>
                                    </div>
                                </div>
                                <div>
                                    <img src="{{ asset('/icons/clock-2.svg') }}" alt="">
                                    <div>
                                        <span>Opening Hours:</span>
                                        <span>Mon - Sun (10.00am - 12.00am)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map">
                        
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2069.3037897664894!2d72.65200512466417!3d23.06851478310814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e86d2fe747685%3A0xbe82bf6fb62ccd1f!2sE-14%2C%20Pulin%20Society%20Part%202%2C%20Naroda%2C%20Ahmedabad%2C%20Gujarat%20382330!5e0!3m2!1sen!2sin!4v1607502459801!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </section>
                @endsection
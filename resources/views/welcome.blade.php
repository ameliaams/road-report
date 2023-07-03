<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Road Report</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
</head>

<body>
    <!-- HEADER -->
    <header>
        <a href="#" class="logo">MyTrip</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#explore">Explore</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
    </header>

    <!-- HOME -->
    <section class="home" id="home">
        <div class="home-text">
            <h1>
                Discover routes and <br />
                relive memories!
            </h1>
            <a href="#explore" class="home-btn">Explore Now</a>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about" id="about">
        <div class="about-content">
            <img class="about-bg" src="{{ asset('assets/img/bg-about.jpg') }}" />
            <img class="about-img" src="{{ asset('assets/img/about.png') }}" />
            <p>Discover real-time road conditions and share your own adventures with our interactive road report website, where users provide valuable insights on tracking and contribute to a vibrant community of fellow travelers.</p>
        </div>
    </section>

    <!-- EXPLORE -->
    <section class="explore" id="explore">
        <div class="explore">
            <div class="title">
                <h2>Explore Routes</h2>
            </div>
            <div class="filter-box">
                <svg class="box" width="600" height="94" viewBox="0 0 720 94" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 47C0 21.0426 21.0426 0 47 0H673C698.957 0 720 21.0426 720 47V47C720 72.9574 698.957 94 673 94H47C21.0426 94 0 72.9574 0 47V47Z" fill="#EBE2CD" />
                </svg>

                <div class="frame-11">
                    <div class="frame-10">
                        <div class="frame-8">
                            <div class="fil-category">
                                <div class="cat-content">
                                    <svg class="vectors" width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.5 9L9 0L14.5 9H3.5ZM14.5 20C13.25 20 12.1873 19.5623 11.312 18.687C10.4367 17.8117 9.99933 16.7493 10 15.5C10 14.25 10.4377 13.1873 11.313 12.312C12.1883 11.4367 13.2507 10.9993 14.5 11C15.75 11 16.8127 11.4377 17.688 12.313C18.5633 13.1883 19.0007 14.2507 19 15.5C19 16.75 18.5623 17.8127 17.687 18.688C16.8117 19.5633 15.7493 20.0007 14.5 20ZM0 19.5V11.5H8V19.5H0ZM14.5 18C15.2 18 15.7917 17.7583 16.275 17.275C16.7583 16.7917 17 16.2 17 15.5C17 14.8 16.7583 14.2083 16.275 13.725C15.7917 13.2417 15.2 13 14.5 13C13.8 13 13.2083 13.2417 12.725 13.725C12.2417 14.2083 12 14.8 12 15.5C12 16.2 12.2417 16.7917 12.725 17.275C13.2083 17.7583 13.8 18 14.5 18ZM2 17.5H6V13.5H2V17.5ZM7.05 7H10.95L9 3.85L7.05 7Z" fill="#4CAF50" />
                                    </svg>
                                    <h6>Category</h6>
                                    <p>All Category</p>
                                </div>
                                <svg class="vector-drop" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0L5 5L10 0H0Z" fill="black" />
                                </svg>
                            </div>
                            <div class="lines"></div>

                            <div class="fil-location">
                                <div class="loc-content">
                                    <svg class="vectors" width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.5 0C3.35953 0 0 2.87991 0 6.42857C0 12.1429 7.5 20 7.5 20C7.5 20 15 12.1429 15 6.42857C15 2.87991 11.6405 0 7.5 0ZM7.5 10C6.90666 10 6.32664 9.83243 5.83329 9.51848C5.33994 9.20454 4.95542 8.75831 4.72836 8.23624C4.5013 7.71416 4.44189 7.13969 4.55764 6.58546C4.6734 6.03122 4.95912 5.52213 5.37868 5.12255C5.79824 4.72297 6.33279 4.45086 6.91473 4.34061C7.49667 4.23037 8.09987 4.28695 8.64805 4.5032C9.19623 4.71945 9.66476 5.08566 9.99441 5.55551C10.3241 6.02537 10.5 6.57777 10.5 7.14286C10.4991 7.90036 10.1828 8.62661 9.62036 9.16225C9.05794 9.69789 8.29538 9.99917 7.5 10Z" fill="#4CAF50" />
                                    </svg>
                                    <h6>Location</h6>
                                    <p>All Location</p>
                                </div>
                                <svg class="vector-drop" width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0.5L5 5.5L10 0.5H0Z" fill="black" />
                                </svg>
                            </div>
                        </div>

                        <svg class="frame-9" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="25" fill="#4CAF50" />
                            <path d="M28.5 27H27.71L27.43 26.73C28.4439 25.554 29.0011 24.0527 29 22.5C29 21.2144 28.6188 19.9577 27.9046 18.8888C27.1903 17.8199 26.1752 16.9868 24.9874 16.4948C23.7997 16.0028 22.4928 15.8741 21.2319 16.1249C19.971 16.3757 18.8129 16.9948 17.9038 17.9038C16.9948 18.8129 16.3757 19.971 16.1249 21.2319C15.8741 22.4928 16.0028 23.7997 16.4948 24.9874C16.9868 26.1752 17.8199 27.1903 18.8888 27.9046C19.9577 28.6188 21.2144 29 22.5 29C24.11 29 25.59 28.41 26.73 27.43L27 27.71V28.5L32 33.49L33.49 32L28.5 27ZM22.5 27C20.01 27 18 24.99 18 22.5C18 20.01 20.01 18 22.5 18C24.99 18 27 20.01 27 22.5C27 24.99 24.99 27 22.5 27Z" fill="white" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="group-15">
                <div class="group-14">
                    <div class="rectangle-729"></div>

                    <div class="group-13">
                        <div class="frame-21">
                            <img class="img-gallery" src="{{ asset('assets/img/ijen/ijen1.jpeg') }}" />

                            <img class="img-gallery" src="{{ asset('assets/img/ijen/ijen2.jpeg') }}" />

                            <img class="img-gallery" src="{{ asset('assets/img/ijen/ijen4.jpg') }}" />

                            <img class="img-gallery" src="{{ asset('assets/img/ijen/ijen5.jpg') }}" />

                            <img class="img-gallery" src="{{ asset('assets/img/ijen/ijen6.jpg') }}" />
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31603.343506502235!2d114.23211338628909!3d-8.05878059372186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd149f2110ae607%3A0x7c04ef029d5e39bc!2sGn.%20Ijen!5e0!3m2!1sid!2sid!4v1688334030081!5m2!1sid!2sid" class="maps"></iframe>

                        <img class="gif-3d" src="{{ asset('assets/img/ijen/ijen3.gif') }}" />

                        <div class="main-text">
                            <h2 class="main-title">Gunung Ijen</h2>
                            <p>Perbatasan Kabupaten Banyuwangi dan Kabupaten Bondowoso, Jawa Timur, Indonesia</p>

                            <div class="main-rute">
                                <h6>Rute</h6>
                                <p>Bondowoso - Wonosari - Tapen - Sempol - Paltuding</p>
                            </div>

                            <div class="main-high">
                                <h6>Ketinggian</h6>
                                <p>2.779 m (9.117 ft)</p>
                            </div>

                            <h6>Galeri</h6>
                        </div>
                    </div>
                </div>

                <div class="ex-list">
                    <div class="box-list"></div>
                    <div class="list-content">
                        <ul>
                            <li>
                                <div class="list">
                                    <div class="list-details">
                                        <a href="#">Gunung Ijen</a>
                                        <p>Kab. Banyuwangi</p>
                                    </div>
                                    <div class="line-9"></div>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <div class="list-details">
                                        <a href="#">Gunung Bromo</a>
                                        <p>Kab. Malang</p>
                                    </div>
                                    <div class="line-9"></div>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <div class="list-details">
                                        <a href="#">Gunung Panderman</a>
                                        <p>Kota Batu</p>
                                    </div>
                                    <div class="line-9"></div>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <div class="list-details">
                                        <a href="#">Gunung Lawu</a>
                                        <p>Kab. Karanganyar</p>
                                    </div>
                                    <div class="line-9"></div>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <div class="list-details">
                                        <a href="#">Gunung Kelud</a>
                                        <p>Kab. Kediri</p>
                                    </div>
                                    <div class="line-9"></div>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <div class="list-details">
                                        <a href="#">Gunung Buthak</a>
                                        <p>Kab. Malang</p>
                                    </div>
                                    <div class="line-9"></div>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <div class="list-details">
                                        <a href="#">Gunung Semeru</a>
                                        <p>Kab. Malang</p>
                                    </div>
                                    <div class="line-9"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--gallery-->
    <section class="gallery" id="gallery">
        <div class="title">
            <h2>Photo Gallery</h2>
        </div>
        <div class="gallery-content">
            <div class="col-content">
                <img src="{{ asset('assets/img/img1.jpg') }}" />
                <h5>Machu Picchu</h5>
                <p>Peru</p>
            </div>

            <div class="col-content">
                <img src="{{ asset('assets/img/img2.jpg') }}" />
                <h5>Machu Picchu</h5>
                <p>Peru</p>
            </div>

            <div class="col-content">
                <img src="{{ asset('assets/img/img3.jpg') }}" />
                <h5>Machu Picchu</h5>
                <p>Peru</p>
            </div>

            <div class="col-content">
                <img src="{{ asset('assets/img/img4.jpg') }}" />
                <h5>Machu Picchu</h5>
                <p>Peru</p>
            </div>

            <div class="col-content">
                <img src="{{ asset('assets/img/img5.jpg') }}" />
                <h5>Machu Picchu</h5>
                <p>Peru</p>
            </div>

            <div class="col-content">
                <img src="{{ asset('assets/img/img6.jpg') }}" />
                <h5>Machu Picchu</h5>
                <p>Peru</p>
            </div>
        </div>
    </section>

    <!--footer-->
    <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a>
                <a href="https://www.twitter.com/"><i class="icon ion-social-twitter"></i></a>
                <a href="https://www.facebook.com"><i class="icon ion-social-facebook"></i></a>
            </div>
            <p class="copyright">MyTrip © 2023</p>
        </footer>
    </div>
    <script type="text/javascript" src="script1.js"></script>
</body>

</html>
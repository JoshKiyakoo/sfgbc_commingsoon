<?php
// ======================================================================
//             Designed by:    Eyasu Girma [Kiya]
//                 Mobile:     +251-913-078-029
//                 Email:      sendtokiya@gmail.com
//                 Facebook:   https://facebook.com/JoshKiyakoo
//                 LinkedIn:   https://linkedin.com/in/JoshKiyakoo
//                 Twitter:    https://twitter.com/JoshKiyakoo
//                 Telegram:   https://t.me/JoshKiyakoo
// ======================================================================
 ?>
@extends('layouts.myLayout')
@section('AboutUs')
    <!-- About Section
    ================================================== -->
    <section id="about">
        <div class="row section-header">
            <div class="twelve columns">
                <div class="icon-wrap">
                <i class="fa fa-group"></i>
            </div>
            <h1>{{ ("About Us.") }}</h1>
            <p class="lead">
                {{ ("The") }} <b>{{ ("Ethiopian Full Gospel Believers' Church") }}</b> {{ ("is an indigenous Pentecostal Church started by young university students") }} <?=date('Y') - 1965;?> {{ ("years back from now. In those successive years the revival broke throughout the country. Since then, the revival inundated the whole country the provincial towns, small towns and villages in the country side. This brought the issue that the believers had to form unity on a national level and be organized as a denomination. In 1974, leaders from different places of the country came and agreed to be organized at a denominational level.The national office of the church is established in Addis Ababa and the Federal Democratic Republic of Ethiopia accorded the church its full recognition on November 10, 1991 in accordance with the constitutional provision of the religious liberty and freedom of worship.") }}<br>
                {{ ("The Church is the third biggest among the evangelical Churches in Ethiopia. It consists of more than 2,277 local churches and more than 7,000 fellowships which organized by 35 regions and the members of the church exceeds 4.5 million.") }}
            </p><hr>
        </div>
        </div> <!-- end section-header -->

    <div class="row section-content">
        <div class="six columns">
            <h2 style="font-weight: bolder">{{ ("Mission.") }}</h2>
            <p>{{ ("The") }} <b>{{ ("Ethiopian Full Gospel Believers' Church") }}</b> {{ ("exists to preach the Gospel of Jesus Christ with the power of the Holy Spirit and make disciples of all nations by serving the whole man. Unceasingly we minister the converts to help them grow to the full stature of Jesus Christ. Our mission is to rise spirit empowered leaders who are the keys to the multiplication of vibrant local churches") }} </p>
        </div>

        <div class="six columns">
            <h2 style="font-weight: bolder">{{ ("Vision.") }}</h2>

            <p><b>{{ ("Ethiopian Full Gospel Believers' Church") }}</b> {{ ("is visioned to see spirit filled and vibrant local Churches planted among the peoples of Ethiopia, Horn of Africa, Middle East and beyond.") }}</p>
        </div>
    </div>
    <!-- end section-content -->

    <div class="row section-content">
        <div class="six columns">
            <h2 style="font-weight: bolder;">{{ ("Purpose.") }}</h2>
            <p> <b>{{ ("Ethiopian Full Gospel Believers' Church") }}</b> {{ ("has the purpose to the following core points") }}<br><br>
                <i style="color: #000; font-weight: bolder;">1.</i> {{ ("Doing the evangelism mission given by Lord Jesus Christ") }}<br>
                <i style="color: #000; font-weight: bolder;">2.</i> {{ ("Making believers disciples") }}<br>
                <i style="color: #000; font-weight: bolder;">3.</i> {{ ("Doing whatever enables the church to give holistic services") }}<br>
                <i style="color: #000; font-weight: bolder;">4.</i> {{ ("Protecting the doctrine of faith and unity of the church") }}<br>
            </p>
        </div>

        <div class="six columns">
            <h2 style="font-weight: bolder">{{ ("Values.") }}</h2>

            <p><i>{{ ("The")}} <b>{{ ("Ethiopian Full Gospel Believers' Church") }}</b> {{ ("uphold the following values as foundations of its Ministry.") }}</i><br>
                <ul class="list1">
                    <li><i class="fa fa-check-circle" style="color: #000;">&nbsp;&nbsp;&nbsp;</i> {{ ("Love") }}</li>
                    <li><i class="fa fa-check-circle" style="color: #000;">&nbsp;&nbsp;&nbsp;</i> {{ ("Unity") }}</li>
                    <li><i class="fa fa-check-circle" style="color: #000;">&nbsp;&nbsp;&nbsp;</i> {{ ("Classical Pentecostalism") }}</li>
                    <li><i class="fa fa-check-circle" style="color: #000;">&nbsp;&nbsp;&nbsp;</i> {{ ("Holiness") }}</li>
                    <li><i class="fa fa-check-circle" style="color: #000;">&nbsp;&nbsp;&nbsp;</i> {{ ("Partnership") }}</li>
                    <li><i class="fa fa-check-circle" style="color: #000;">&nbsp;&nbsp;&nbsp;</i> {{ ("Fasting and Prayer") }}</li>
                    <li><i class="fa fa-check-circle" style="color: #000;">&nbsp;&nbsp;&nbsp;</i> {{ ("Servanthood") }}</li>
                    <li><i class="fa fa-check-circle" style="color: #000;">&nbsp;&nbsp;&nbsp;</i> {{ ("Righteousness and Justice") }}</li>
                    <li><i class="fa fa-check-circle" style="color: #000;">&nbsp;&nbsp;&nbsp;</i> {{ ("Transparency") }}</li>
                </ul>
            </p>
        </div> <!-- end section-content -->
        <hr>
    <div class="twelve columns">
        <div class="icon-wrap">
            <img src="{{ asset ('public/images/bible.png')}}" height="50" width="45" alt="Bible">
        </div>
        <h1 class="wrap" style="font-weight: bold;">{{ ("Statement of Faith.") }}</h1>
        <p class="lead">
            <strong style="font-weight: bold;">{{ ("The Basic Christian doctrine of the Ethiopian Full Gospel Believers' Church are the following") }}</strong>
            <ul type="1">
                <li><b style="color: #000; font-weight: bolder;">{{ ("1.") }}</b> {{ ("We believe the Bible which has the 66 books in it is the Word of God breathed by Him, infallible, has the final authority on every faith and conduct issues, it is living and works today.") }}</li>
                <li><b style="color: #000; font-weight: bolder;">{{ ("2.") }}</b> {{ ("We believe in one Trinity God that expressed him self as God the Father, Son the Christ and the Holy Spirit.") }}</li>
                <li><b style="color: #000; font-weight: bolder;">{{ ("3.") }}</b> {{ ("We believe that God has the Supreme Authority in the Works of Creation, Protecting the creation, manifestation, redemption and the last judgment.") }}</li>
                <li><b style="color: #000; font-weight: bolder;">{{ ("4.") }}</b> {{ ("We believe that our Lord Jesus Christ is sent by God, conceived from the Holy Spirit, perfect man and God, died on the cross for the sins of human beings as ransom, buried, raised from the dead on the third day in bodily form, ascended to Heaven, sat on the right hand of God and intercedes for us and will come once again in glory and honor to judge the living and the dead.") }}</li>
                <li><b style="color: #000; font-weight: bolder;">{{ ("5.") }}</b> {{ ("We believe that the Holy Spirit has all the divine attributes, is perfect God and deserves Worship.") }}</li>
                <li><b style="color: #000; font-weight: bolder;">{{ ("6.") }}</b> {{ ("We believe that man is created in the image and likeness of God, fell in sin, and, because of this reason man is guilty and the wrath and judgment of God is up on him.") }}</li>
                <li><b style="color: #000; font-weight: bolder;">{{ ("7.") }}</b> {{ ("Man can be saved from the debt of sin, its power and penalty only through the redemptive work of the sinless son of God Jesus Christ on behalf of human beings; and, a sinner can be saved by grace in believing in the Lord Jesus Christ only.") }}</li>
                <li><b style="color: #000; font-weight: bolder;">{{ ("8.") }}</b> {{ ("We believe the Holy Spirit works in the life of a sinner by convicting him about sin, helping him to repent, be born again and become a new creation.") }}</li>
                <li><b style="color: #000; font-weight: bolder;">{{ ("9.") }}</b> {{ ("We believe that the Holy Spirit dwells in the life of a believer, a believer receives power and speaks in tongue whenever he is baptized by the Holy Spirit and be refilled time to time.") }}</li>
                <li><b style="color: #000; font-weight: bolder;">{{ ("10.") }}</b> {{ ("We believe that the Holly Sprit works today to build the Church, gives different grace gifts to believers, heals the sick, delivers the oppressed and does miracles.") }}</li>
                <li><b style="color: #000; font-weight: bolder;">{{ ("11.") }}</b> {{ ("We believe the Holy Spirit gives Apostles, Prophets, Evangelists, Pastors, Teachers and other Ministry gifts to enable the Church discharge the great commission, given to her by Lord Jesus Christ to Preach the Gospel to all people and the believers and do what is necessary for building the body of Christ.") }}</li>
                <li><b style="color: #000; font-weight: bolder;">{{ ("12.") }}</b> {{ ("We believe in one Holy Church that is the body of Christ wherein all those who are born again by Holy Spirit are found.") }}</li>
                <li><b style="color: #000; font-weight: bolder;">{{ ("13.") }}</b> {{ ("We believe that, pursuant to the instruction of Lord Jesus Christ, every born again believer should be baptized by being fully immersed in water in the name of God the Father, the Son and the Holy Spirit to show his oneness with the death and resurrection of Christ, his death to sin and resurrection for righteousness. Moreover, a believer partakes the Lord’s Supper to speak about the death of the Lord until his second coming and express his fellowship with the Lord and believers too.") }}</li>
                <li><b style="color: #000; font-weight: bolder;">{{ ("14.") }}</b> {{ ("We believe in the resurrection of the dead, eternal judgment of sinners and eternal life of believers.") }}</li>
            </ul>
        </p>
    </div>

    </section> <!-- About Section End-->

    </section>
    <!-- end location section -->
@endsection

@section('Location')
    <!-- Location Section
    ================================================== -->
    <section id="contact">
        <div class="contacts">
            <div class="row contact-details">

                <div class="columns">
                    <h3><i class="fa fa-home"></i>{{ ("Address | Location.") }}</h3>
                    <p>{{ ("Arada Subcity, Belay Zeleke Street, The road from Piassa to Addisu Gebeya, infront of Semien Hotel.") }}
                        <br><b style="font-weight:bolder;">{{ ("Addis Ababa, Ethiopia") }}</b></p>
                </div>

                <div class="columns">
                    <h3><i class="fa fa-phone"></i>{{ ("Contact | Phone Number.") }}</h3>
                        <p>{{ ("Telephone : (+251) 111 112 211") }}<br>
                            {{ ("Telephone : (+251) 111 564 545") }}<br>
                            {{ ("Mobile : (+251) 905 050 474") }}
                    </p>
                    <h3><i class="fa fa-envelope"></i>{{ ("Electronic Mail (Email).") }}</h3>
                    <p>{{ ("info@semienfgbc.org") }}<br></p>
                </div>

                <div class="columns end">
                    <h3><i class="fa fa-clock-o"></i>{{ ("Working | Openning Hour.") }}</h3>
                    <p>{{ ("Monday - Friday: 08:30 to 18:00") }}<br>
                        {{ ("Saturday: 08:30 to 14:00") }}<br>
                        {{ ("Sunday: 08:30 to 14:00") }}
                    </p>
                </div>
            </div> <!-- end contact-details -->
        </div> <!-- end contacts -->

        <!-- ##### Google Maps Start ##### -->
        <div class="map-area mt-30" id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7880.447140900158!2d38.748887!3d9.04336!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc17817353ca967a5!2sEthiopian+Full+Gospel+Believers%2C+Semen+Local+Church!5e0!3m2!1sen!2set!4v1553621634021" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
            </iframe>
        </div>
        <!-- ##### Google Maps End ##### -->
@endsection

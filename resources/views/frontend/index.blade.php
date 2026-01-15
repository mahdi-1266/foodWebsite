@extends('frontend.dashboard')
@section('frontend')
<main>
  <article>
    <!--
      - #HERO
    -->

    <section class="hero text-center" aria-label="home" id="home">

      <ul class="hero-slider" data-hero-slider>
        @php
         $contents = App\Models\HeroSection::get();
        @endphp

        @foreach($contents as $content)
          <li class="slider-item active" data-hero-slider-item>
            <div class="slider-bg">
              <img src="{{ asset($content->photo) }}" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">{{ $content->text }}</p>

            <h1 class="display-1 hero-title slider-reveal">
              {{ $content->title }}
            </h1>

            <p class="body-2 hero-text slider-reveal">
              {{ $content->description }}
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Menu</span>
              <span class="text text-2" aria-hidden="true">View Our Menu</span>
            </a>
          </li>
        @endforeach
      </ul>

      <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
        <ion-icon name="chevron-back"></ion-icon>
      </button>

      <button class="slider-btn next" aria-label="slide to next" data-next-btn>
        <ion-icon name="chevron-forward"></ion-icon>
      </button>

      <a href="#" class="hero-btn has-after">
        <img src="{{ asset('front-end/assets/images/hero-icon.png'); }}" width="48" height="48" alt="booking icon">

        <span class="label-2 text-center span">Book A Table</span>
      </a>

    </section>





    <!-- ************
      ******* #SERVICE *******
    ************ -->

    <section class="section service bg-black-10 text-center" aria-label="service">
      <div class="container">

        <p class="section-subtitle label-2">Flavors For Royalty</p>

        <h2 class="headline-1 section-title">We Offer Top Notch</h2>

        <p class="section-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industrys standard dummy text ever.</p>

        <ul class="grid-list">
          @php
            $offers = App\Models\TopOffer::get();
          @endphp

          @foreach($offers as $offer)
            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="{{ asset($offer->photo); }}" width="285" height="336" loading="lazy" alt="Breakfast"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">
                  <h3 class="title-4 card-title">
                    <a href="#">{{ $offer->foodcategory }}</a>
                  </h3>

                  <a href="#" class="btn-text hover-underline label-2">{{ $offer->menu }}</a>
                </div>
              </div>
            </li>
          @endforeach
        </ul>

        <img src="{{ asset('front-end/assets/images/shape-1.png'); }}" width="246" height="412" loading="lazy" alt="shape"
          class="shape shape-1 move-anim">
        <img src="{{ asset('front-end/assets/images/shape-2.png'); }}" width="343" height="345" loading="lazy" alt="shape"
          class="shape shape-2 move-anim">
      </div>
    </section>


    <!--
      - #ABOUT
    -->

    <section class="section about text-center" aria-labelledby="about-label" id="about">
      @php
        $storys = App\Models\Story::get();
      @endphp

      @foreach($storys as $story)
        <div class="container">
          <div class="about-content">
            <p class="label-2 section-subtitle" id="about-label">Our Story</p>

            <h2 class="headline-1 section-title">{{ $story->title }}</h2>

            <p class="section-text">{{ $story->description }}</p>

            <div class="contact-label">Book Through Call</div>

            <a href="tel:+804001234567" class="body-1 contact-number hover-underline">{{ $story->phone }}</a>

            <a href="#" class="btn btn-primary">
              <span class="text text-1">Read More</span>
              <span class="text text-2" aria-hidden="true">Read More</span>
            </a>
          </div>

          <figure class="about-banner">
            <img src="{{ asset($story->photo1) }}" width="570" height="570" loading="lazy" alt="about banner"
            class="w-100" data-parallax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="{{ asset($story->photo2); }}" width="285" height="285" loading="lazy" alt=""
              class="w-100">
            </div>

            <div class="abs-img abs-img-2 has-before">
              <img src="{{ asset('front-end/assets/images/badge-2.png'); }}" width="133" height="134" loading="lazy" alt="">
            </div>
          </figure>

          <img src="{{ asset('front-end/assets/images/shape-3.png'); }}" width="197" height="194" loading="lazy" alt="" class="shape">
        </div>
      @endforeach
    </section>

    <!--
      - #SPECIAL DISH
    -->
    <section class="special-dish text-center" aria-labelledby="dish-label">

      @php
        $dishes = App\Models\SpecialDish::get();
      @endphp

      @foreach($dishes as $dish)
        <div class="special-dish-banner">
          <img src="{{ asset($dish->photo) }}" width="940" height="900" loading="lazy" alt="special dish"
          class="img-cover">
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">
            <img src="{{ asset('front-end/assets/images/badge-1.png'); }}" width="28" height="41" loading="lazy" alt="badge" class="abs-img">

            <p class="section-subtitle label-2">Special Dish</p>

            <h2 class="headline-1 section-title">{{ $dish->title }}</h2>

            <p class="section-text">{{ $dish->description }}</p>

            <div class="wrapper">
              <del class="del body-3">{{ '$'.$dish->old_price }}</del>

              <span class="span body-1">{{ '$'.$dish->new_price }}</span>
            </div>

            <a href="#" class="btn btn-primary">
              <span class="text text-1">View All Menu</span>
              <span class="text text-2" aria-hidden="true">View All Menu</span>
            </a>

          </div>
        </div>
      @endforeach

      <img src="{{ asset('front-end/assets/images/shape-4.png'); }}" width="179" height="359" loading="lazy" alt="" class="shape shape-1">

      <img src="{{ asset('front-end/assets/images/shape-9.png'); }}" width="351" height="462" loading="lazy" alt="" class="shape shape-2">

    </section>

    <!--
      - #MENU
    -->

    <section class="section menu" aria-label="menu-label" id="menu">
      <div class="container">

        <p class="section-subtitle text-center label-2">Special Selection</p>

        <h2 class="headline-1 section-title text-center">Delicious Menu</h2>

        <ul class="grid-list">

          @php
            $foods = App\Models\Foods::get();
          @endphp

          @foreach($foods as $food)
            <li>
              <div class="menu-card hover:card">
                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ $food->photo }}" width="100" height="100" loading="lazy" alt="Greek Salad"
                    class="img-cover">
                </figure>

                <div>
                    <div class="title-wrapper">
                        <h3 class="title-3">
                        <a href="#" class="card-title">{{ $food->name }}</a>
                        </h3>

                        <span class="span title-2">{{ '$'.$food->price }}</span>
                    </div>

                    <p class="card-text label-1">{{ $food->description }}</p>

                    <a href="{{ route('order') }}" target="__blank" class="order-btn">
                        <span>Order Now</span>
                    </a>
                </div>
              </div>
          </li>
          @endforeach
        </ul>

        <p class="menu-text text-center">
          During winter daily from <span class="span">7:00 pm</span> to <span class="span">9:00 pm</span>
        </p>

        <a href="#" class="btn btn-primary">
          <span class="text text-1">View All Menu</span>

          <span class="text text-2" aria-hidden="true">View All Menu</span>
        </a>

        <img src="{{ asset('front-end/assets/images/shape-5.png'); }}" width="921" height="1036" loading="lazy" alt="shape"
          class="shape shape-2 move-anim">
        <img src="{{ asset('front-end/assets/images/shape-6.png'); }}" width="343" height="345" loading="lazy" alt="shape"
          class="shape shape-3 move-anim">

      </div>
    </section>

    <!--
      - #TESTIMONIALS
    -->

    <section class="section testi text-center has-bg-image"
      style="background-image: url('./assets/images/testimonial-bg.jpg')" aria-label="testimonials">
      <div class="container">

        <div class="quote">”</div>

        <p class="headline-2 testi-text">
          I wanted to thank you for inviting me down for that amazing dinner the other night. The food was
          extraordinary.
        </p>

        <div class="wrapper">
          <div class="separator"></div>
          <div class="separator"></div>
          <div class="separator"></div>
        </div>

        <div class="profile">
          <img src="{{ asset('front-end/assets/images/testi-avatar.jpg'); }}" width="100" height="100" loading="lazy" alt="Sam Jhonson"
            class="img">

          <p class="label-2 profile-name">Sam Jhonson</p>
        </div>

      </div>
    </section>

    <!--
      - #RESERVATION
    -->

    <section class="reservation">
      <div class="container">

        <div class="form reservation-form bg-black-10">

          <form action="{{ route('form.store') }}" method='POST' class="form-left">
            @csrf
            <h2 class="headline-1 text-center">Online Reservation</h2>

            <p class="form-text text-center">
              Booking request <a href="tel:+88123123456" class="link">+88-123-123456</a>
              or fill out the order form
            </p>

            <div class="input-wrapper">

              <input type="text" name="name" placeholder="Your Name" class="input-field" required>

              <input type="tel" name="phone" placeholder="Phone Number" class="input-field" required>
            </div>

            <div class="input-wrapper">

              <div class="icon-wrapper">
                <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                <select name="customer_qty" class="input-field">
                  <option value="1">1 Person</option>
                  <option value="2">2 Person</option>
                  <option value="3">3 Person</option>
                  <option value="4">4 Person</option>
                  <option value="5">5 Person</option>
                  <option value="6">6 Person</option>
                  <option value="7">7 Person</option>
                </select>

                <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
              </div>

              <div class="icon-wrapper">
                <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>

                <input type="date" name="reservation_date" class="input-field">

                <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
              </div>

              <div class="icon-wrapper">
                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                <select name="time" class="input-field">
                  <option value="08:00:00">08 : 00 am</option>
                  <option value="09:00:00">09 : 00 am</option>
                  <option value="10:00:00">10 : 00 am</option>
                  <option value="11:00:00">11 : 00 am</option>
                  <option value="12:00:00">12 : 00 am</option>
                  <option value="01:00:00">01 : 00 pm</option>
                  <option value="02:00:00">02 : 00 pm</option>
                  <option value="03:00:00">03 : 00 pm</option>
                  <option value="04:00:00">04 : 00 pm</option>
                  <option value="05:00:00">05 : 00 pm</option>
                  <option value="06:00:00">06 : 00 pm</option>
                  <option value="07:00:00">07 : 00 pm</option>
                  <option value="08:00:00">08 : 00 pm</option>
                  <option value="09:00:00">09 : 00 pm</option>
                  <option value="10:00:00">10 : 00 pm</option>
                </select>

                <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
              </div>

            </div>

            <textarea name="message" placeholder="Message" class="input-field" required></textarea>

            <button type="submit" class="btn btn-secondary">
              <span class="text text-1">Book A Table</span>

              <span class="text text-2" aria-hidden="true">Book A Table</span>
            </button>

          </form>

          <div class="form-right text-center" style="background-image: url('./assets/images/form-pattern.png')">

            <h2 class="headline-1 text-center">Contact Us</h2>

            <p class="contact-label">Booking Request</p>

            <a href="tel:+88123123456" class="body-1 contact-number hover-underline">+88-123-123456</a>

            <div class="separator"></div>

            <p class="contact-label">Location</p>

            <address class="body-4">
              Restaurant St, Delicious City, <br>
              London 9578, UK
            </address>

            <p class="contact-label">Lunch Time</p>

            <p class="body-4">
              Monday to Sunday <br>
              11.00 am - 2.30pm
            </p>

            <p class="contact-label">Dinner Time</p>

            <p class="body-4">
              Monday to Sunday <br>
              05.00 pm - 10.00pm
            </p>

          </div>

        </div>

      </div>
    </section>

    <!--
      - #FEATURES
    -->

    <section class="section features text-center" aria-label="features">
      <div class="container">

        <p class="section-subtitle label-2">Why Choose Us</p>

        @php
          $choices = App\Models\ChooseUs::get();
        @endphp


          <h2 class="headline-1 section-title">Our Strength</h2>

          <ul class="grid-list">
            @foreach($choices as $choice)
            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img src="{{ asset($choice->photo); }}" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">{{ $choice->title }}</h3>

                <p class="label-1 card-text">{{ $choice->description }}</p>
              </div>
            </li>
           @endforeach
          </ul>


        <img src="{{ asset('front-end/assets/images/shape-7.png'); }}" width="208" height="178" loading="lazy" alt="shape"
          class="shape shape-1">

        <img src="{{ asset('front-end/assets/images/shape-8.png'); }}" width="120" height="115" loading="lazy" alt="shape"
          class="shape shape-2">

      </div>
    </section>





    <!--
      - #EVENT
    -->

    <section class="section event bg-black-10" aria-label="event">
      <div class="container">

        <p class="section-subtitle label-2 text-center">Recent Updates</p>

        @php
          $events = App\Models\Event::get();
        @endphp

        <h2 class="section-title headline-1 text-center">Upcoming Event</h2>

          <ul class="grid-list">
            @foreach($events as $event)
              <li>
                <div class="event-card has-before hover:shine">

                  <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                    <img src="{{ asset($event->photo) }}" width="350" height="450" loading="lazy"
                      alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                    <time class="publish-date label-2" datetime="2022-09-15">{{ $event->date }}</time>
                  </div>

                  <div class="card-content">
                    <p class="card-subtitle label-2 text-center">{{ $event->text }}</p>

                    <h3 class="card-title title-2 text-center">{{ $event->description }}</h3>
                  </div>
                </div>
              </li>
            @endforeach
          </ul>


        <a href="#" class="btn btn-primary">
          <span class="text text-1">View Our Blog</span>

          <span class="text text-2" aria-hidden="true">View Our Blog</span>
        </a>

      </div>
    </section>

  </article>
</main>
@endsection

@extends('layouts.index')

@section('content')

<nav id="mobile-menu"></nav>

<div class="wrapper">

    @include('partials.navbar')

     <!-- ========== REVOLUTION SLIDER ========== -->
     <div id="rev-slider-event" class="rev_slider gradient-slider" data-version="5.4.5">
        <ul>
          <!-- SLIDE -->
          <li data-transition="fade">
            <!-- MAIN IMAGE -->
            <img src="images/events/event/event.jpg" alt="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina="data-no-retina">
            <!-- LAYER NR. 1 -->
            <div
              class="tp-caption"
              data-x="['center','center','center','center']"
              data-hoffset=""
              data-y="['middle','middle','middle','middle']"
              data-voffset=""
              data-responsive_offset="on"
              data-fontsize="['54','42','32','32']"
              data-lineheight="['40','32','28','22']"
              data-whitespace="nowrap"
              data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
              style="color: #fff; font-weight: 700; font-family: 'Raleway', sans-serif;">HIMARA SUMMER PARTY
            </div>
            <!-- LAYER NR. 2 -->
            <div
              class="tp-caption"
              data-x="['center','center','center','center']"
              data-hoffset=""
              data-y="['500','500','500','500']"
              data-voffset=""
              data-responsive_offset="on"
              data-whitespace="nowrap"
              data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
              <div id="countdown" data-countdown="2019/01/01"></div>
            </div>
          </li>
        </ul>
      </div>

       <!-- ========== MAIN ========== -->
       <main class="restaurant">
        <div class="container">
          <div class="entry">
            <!-- BOOKING FORM -->
            <div class="vertical-booking-form entry-booking-form-left">
              <h3 class="form-title">BOOK YOUR TICKET</h3>
              <div class="inner">
                <form id="booking-form">
                  <!-- EMAIL -->
                  <div class="form-group">
                    <input class="form-control" name="booking-email" type="email" placeholder="Your Email Address">
                  </div>
                  <div class="form-group" style="display:none;">
                    <select class="form-control" name="booking-roomtype" title="Select Room Type" data-header="Room Type" disabled="disabled">
                      <option value="Offer" selected="selected">Offer</option>
                    </select>
                  </div>
                  <!-- GUESTS -->
                  <div class="form-group">
                    <div class="panel-dropdown">
                      <div class="form-control guestspicker">Guests
                        <span class="gueststotal"></span></div>
                      <div class="panel-dropdown-content">
                        <div class="guests-buttons">
                          <label>Adults
                            <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="18+ years" data-original-title="Adults">
                              <i class="fa fa-info-circle"></i>
                            </a>
                          </label>
                          <div class="guests-button">
                            <div class="minus"></div>
                            <input type="text" name="booking-adults" class="booking-guests" value="0">
                            <div class="plus"></div>
                          </div>
                        </div>
                        <div class="guests-buttons">
                          <label>Cildren
                            <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Under 18 years" data-original-title="Children">
                              <i class="fa fa-info-circle"></i>
                            </a>
                          </label>
                          <div class="guests-button">
                            <div class="minus"></div>
                            <input type="text" name="booking-children" class="booking-guests" value="0">
                            <div class="plus"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- BOOKING BUTTON -->
                  <button type="submit" class="btn btn-book btn-dark">BOOK A TICKET</button>
                  <div class="mt20"></div>
                </form>
              </div>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum commodi incidunt labore unde minima numquam rerum, expedita itaque quibusdam ipsa consequuntur cupiditate, officia iure earum soluta voluptatem impedit pariatur rem! Nulla, error
              placeat! Animi harum, eveniet placeat excepturi perferendis, ex consectetur explicabo voluptatem totam hic, officiis quisquam? Similique eum itaque, delectus quo deserunt deleniti quibusdam alias sed commodi assumenda magnam unde provident
              praesentium doloribus a asperiores, amet dolores maiores, illo quis inventore sunt, nihil nemo pariatur! Culpa neque sint accusantium laboriosam reiciendis corporis, veritatis quos, debitis doloremque adipisci repudiandae atque, minus! Atque libero,
              asperiores ex fugit, quia consequatur modi officiis! Magnam quae atque quasi natus minima optio nobis eveniet aspernatur vitae deserunt totam in sed, placeat odio cumque, accusantium ducimus. Molestias quasi ipsa libero vero dolorem recusandae iusto
              beatae quae architecto provident expedita debitis, animi enim labore deleniti ullam, a nobis asperiores aliquam necessitatibus error? Quia consequatur vero assumenda architecto ex, aliquid. Perferendis, at, necessitatibus. Assumenda vel, consequuntur voluptatibus non voluptates!
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quia itaque accusantium voluptatibus esse animi tenetur adipisci! Iure cumque aliquam tempore quam, asperiores obcaecati architecto earum vitae a commodi ratione velit nesciunt
              animi at dolore illo fugit. At nostrum, tenetur similique adipisci
              voluptatem mollitia, cum neque autem labore sapiente dolore accusantium et excepturi odit iusto corporis, facere inventore obcaecati incidunt, est quam. Maiores aliquid cupiditate tenetur aut fugit! Quis deleniti nesciunt at officiis! Iusto
              recusandae numquam ratione excepturi perspiciatis cumque nisi, explicabo dolorum alias ipsum voluptates non, possimus! Voluptatem adipisci dolor quos tenetur placeat?</p>
            <div class="row image-gallery">
              <!-- ITEM -->
              <div class="col-md-3">
                <figure class="gradient-overlay-hover image-icon">
                  <a href="images/events/event/event1.jpg">
                    <img src="images/events/event/event1.jpg" class="img-fluid" alt="Image">
                  </a>
                </figure>
              </div>
              <!-- ITEM -->
              <div class="col-md-3">
                <figure class="gradient-overlay-hover image-icon">
                  <a href="images/events/event/event2.jpg">
                    <img src="images/events/event/event2.jpg" class="img-fluid" alt="Image">
                  </a>
                </figure>
              </div>
              <!-- ITEM -->
              <div class="col-md-3">
                <figure class="gradient-overlay-hover image-icon">
                  <a href="images/events/event/event3.jpg">
                    <img src="images/events/event/event3.jpg" class="img-fluid" alt="Image">
                  </a>
                </figure>
              </div>
              <!-- ITEM -->
              <div class="col-md-3">
                <figure class="gradient-overlay-hover image-icon">
                  <a href="images/events/event/event4.jpg">
                    <img src="images/events/event/event4.jpg" class="img-fluid" alt="Image">
                  </a>
                </figure>
              </div>
              <!-- ITEM -->
              <div class="col-md-3">
                <figure class="gradient-overlay-hover image-icon">
                  <a href="images/events/event/event5.jpg">
                    <img src="images/events/event/event5.jpg" class="img-fluid" alt="Image">
                  </a>
                </figure>
              </div>
              <!-- ITEM -->
              <div class="col-md-3">
                <figure class="gradient-overlay-hover image-icon">
                  <a href="images/events/event/event6.jpg">
                    <img src="images/events/event/event6.jpg" class="img-fluid" alt="Image">
                  </a>
                </figure>
              </div>
              <!-- ITEM -->
              <div class="col-md-3">
                <figure class="gradient-overlay-hover image-icon">
                  <a href="images/events/event/event7.jpg">
                    <img src="images/events/event/event7.jpg" class="img-fluid" alt="Image">
                  </a>
                </figure>
              </div>
              <!-- ITEM -->
              <div class="col-md-3">
                <figure class="gradient-overlay-hover image-icon">
                  <a href="images/events/event/event8.jpg">
                    <img src="images/events/event/event8.jpg" class="img-fluid" alt="Image">
                  </a>
                </figure>
              </div>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quis autem natus dicta, possimus necessitatibus cum, et doloribus facilis fugit molestias! Delectus quo doloribus pariatur dolor sint, ad officiis totam similique quaerat nesciunt quod
              fugit libero voluptates deserunt laboriosam hic quia? Ex iusto maiores ipsum ab quis provident, molestiae veritatis, consequuntur nostrum aliquid quos. Eligendi enim fugiat fuga aperiam odio accusamus, architecto et, sequi ullam facere, quidem fugit
              ut. </p>
              <table class="mt20 mb20">
                <thead>
                  <tr>
                    <td>Name</td>
                    <td>Nickname</td>
                    <td>Number</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Jane</td>
                    <td>Doe</td>
                    <td>13</td>
                  </tr>
                  <tr>
                    <td>Eve</td>
                    <td>Doe</td>
                    <td>94</td>
                  </tr>
                  <tr>
                    <td>Jane</td>
                    <td>Doe</td>
                    <td>77</td>
                  </tr>
                  <tr>
                    <td>Ina</td>
                    <td>Aldrich</td>
                    <td>16</td>
                  </tr>
                </tbody>
              </table>
              <p>Praesentium vel quos recusandae perferendis, dolore voluptatibus nesciunt provident quod ab laborum quisquam alias quaerat optio. Temporibus, saepe, atque, ea inventore excepturi explicabo tenetur similique, rerum tempora doloremque at nemo
              alias.
            </p>
          </div>
        </div>
      </main>

      @include('partials.footerEventsDetails')
</div>
<div class="notification"></div>
    <!-- ========== BACK TO TOP ========== -->
    <div class="back-to-top">
      <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

@endsection

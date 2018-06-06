<?php
/** 
  * The template for displaying all pages. 
  * 
  * This is the template that displays all pages by default. 
  * Please note that this is the WordPress construct of pages 
  * and that other 'pages' on your WordPress site will use a 
  * different template. 
  * 
  * @package butiko 
  * Template Name: Events Page 
*/

$file_Ver = 0.81;
get_header();
$header_url = get_post_meta( get_the_ID(), 'butiko_page_header_image', true );
$page_title = get_post_meta( get_the_ID(), 'butiko_page_title', true );
$page_footer = get_post_meta( get_the_ID(), 'butiko_page_footer', true );
$page_description = get_post_meta( get_the_ID(), 'butiko_page_description', true );

if($header_url != "" ){    
	$header_type = "with-bg";
}
wp_enqueue_style( 'style-events', '/sahola_events/css/main.min.css?v='.$file_Ver );
?>

 <header class="b-header events-header">
 <svg style="display:none;">
    <symbol id="arrow-right" viewBox="0 0 309.143 309.143">
      <path d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197  c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197  c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z" />
    </symbol>
    <symbol id="arrow-left" viewBox="0 0 309.143 309.143">
      <path d="M112.855,154.571L240.481,26.946c2.929-2.929,2.929-7.678,0-10.606L226.339,2.197  C224.933,0.79,223.025,0,221.036,0c-1.989,0-3.897,0.79-5.303,2.197L68.661,149.268c-2.929,2.929-2.929,7.678,0,10.606  l147.071,147.071c1.406,1.407,3.314,2.197,5.303,2.197c1.989,0,3.897-0.79,5.303-2.197l14.142-14.143  c2.929-2.929,2.929-7.678,0-10.606L112.855,154.571z" />
    </symbol>
    <symbol id="icon-cross" viewBox="0 0 469.404 469.404">
      <path d="M310.4,235.083L459.88,85.527c12.545-12.546,12.545-32.972,0-45.671L429.433,9.409c-12.547-12.546-32.971-12.546-45.67,0
      L234.282,158.967L85.642,10.327c-12.546-12.546-32.972-12.546-45.67,0L9.524,40.774c-12.546,12.546-12.546,32.972,0,45.671
      l148.64,148.639L9.678,383.495c-12.546,12.546-12.546,32.971,0,45.67l30.447,30.447c12.546,12.546,32.972,12.546,45.67,0
      l148.487-148.41l148.792,148.793c12.547,12.546,32.973,12.546,45.67,0l30.447-30.447c12.547-12.546,12.547-32.972,0-45.671
      L310.4,235.083z"/>
    </symbol>
     <symbol id="arrow-down" viewBox="0 0 129 129">
      <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" fill="#c2a768"/>
    </symbol>
  </svg>  
  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:500" rel="stylesheet">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

    <h1 class="b-title b-title--main">EVENTS</h1>   
  </header>
  <nav class="b-breadcrumb">
    <ul class="b-breadcrumb__list">
      <li class="b-breadcrumb__item">
        <a class="b-breadcrumb__link" title="Home page" href="/">HOME</a>
        <li class="b-breadcrumb__item">/</li>
      </li>
      <li class="b-breadcrumb__item active">
        <a class="b-breadcrumb__link" title="Events page" href="#">Events</a>
      </li>
    </ul>
  </nav>
  <section class="b-section events-description">    
    <h2 class="b-title">Events</h2>
    <p class="events-description__text">Your event is a chance to escape the ordinary. SAHOLA Floral Art & Event Design offers unique, imaginative, and innovative event floral designs from private family Celebrations, Birthdays, Bar/Bat Mitzvah, to Corporate and Galas. For us the flow, timing and execution of the event are as important as the details themselves. We plan elegant and glamorous events and are the luxury destination for swanky and posh clients.</p>
  </section>  
  <section class="events-works clearfix">
      <h2 class="b-title">GALLERY</h2>
      <div class="events-works__out">
        <div class="events-works__inner">
          <div class="events-works__wraper" id="slider">
            <div class="events-works__photo">
              <a class="events-works__photo-link" title="Open large image" href="/sahola_events/img/events-works/gal-event02_big.jpg">
                <picture>
                  <source srcset="/sahola_events/img/events-works/gal-event02.jpg" width="421" height="280" media="(min-width: 1201px)">
                  <source srcset="/sahola_events/img/events-works/gal-event02_360.jpg" width="333" height="222" media="(min-width: 768px) and (max-width: 1200px)">
                  <source srcset="/sahola_events/img/events-works/gal-event02_260.jpg" width="216" height="144" media="(min-width: 481px) and (max-width: 767px)">
                  <source srcset="/sahola_events/img/events-works/gal-event02_400.jpg" width="480" height="203" media="(max-width: 480px)">
                  <img src="/sahola_events/img/events-works/gal-event02.jpg" alt="Our work 1" width="300" height="450">
                </picture>
              </a>
            </div>
            <div class="events-works__photo">
              <a class="events-works__photo-link" title="Open large image" href="/sahola_events/img/events-works/gal-event03_big.jpg">
                <picture>
                  <source srcset="/sahola_events/img/events-works/gal-event03.jpg" width="421" height="280" media="(min-width: 1201px)">
                  <source srcset="/sahola_events/img/events-works/gal-event03_360.jpg" width="333" height="222" media="(min-width: 768px) and (max-width: 1200px)">
                  <source srcset="/sahola_events/img/events-works/gal-event03_260.jpg" width="216" height="144" media="(min-width: 481px) and (max-width: 767px)">
                  <source srcset="/sahola_events/img/events-works/gal-event03_400.jpg" width="480" height="203" media="(max-width: 480px)">
                  <img src="/sahola_events/img/events-works/gal-event03.jpg" alt="Our work 1" width="300" height="450">
                </picture>
              </a>
            </div>
            <div class="events-works__photo">
              <a class="events-works__photo-link" title="Open large image" href="/sahola_events/img/events-works/gal-event04_big.jpg">
                <picture>
                  <source srcset="/sahola_events/img/events-works/gal-event04.jpg" width="421" height="280" media="(min-width: 1201px)">
                  <source srcset="/sahola_events/img/events-works/gal-event04_360.jpg" width="333" height="222" media="(min-width: 768px) and (max-width: 1200px)">
                  <source srcset="/sahola_events/img/events-works/gal-event04_260.jpg" width="216" height="144" media="(min-width: 481px) and (max-width: 767px)">
                  <source srcset="/sahola_events/img/events-works/gal-event04_400.jpg" width="480" height="203" media="(max-width: 480px)">
                  <img src="/sahola_events/img/events-works/gal-event04.jpg" alt="Our work 1" width="300" height="450">
                </picture>
              </a>
            </div>
            <div class="events-works__photo">
              <a class="events-works__photo-link" title="Open large image" href="/sahola_events/img/events-works/gal-event05_big.jpg">
                <picture>
                  <source srcset="/sahola_events/img/events-works/gal-event05.jpg" width="421" height="280" media="(min-width: 1201px)">
                  <source srcset="/sahola_events/img/events-works/gal-event05_360.jpg" width="333" height="222" media="(min-width: 768px) and (max-width: 1200px)">
                  <source srcset="/sahola_events/img/events-works/gal-event05_260.jpg" width="216" height="144" media="(min-width: 481px) and (max-width: 767px)">
                  <source srcset="/sahola_events/img/events-works/gal-event05_400.jpg" width="480" height="203" media="(max-width: 480px)">
                  <img src="/sahola_events/img/events-works/gal-event05.jpg" alt="Our work 1" width="300" height="450">
                </picture>
              </a>
            </div>
            <div class="events-works__photo">
              <a class="events-works__photo-link" title="Open large image" href="/sahola_events/img/events-works/gal-event06_big.jpg">
                <picture>
                  <source srcset="/sahola_events/img/events-works/gal-event06.jpg" width="421" height="280" media="(min-width: 1201px)">
                  <source srcset="/sahola_events/img/events-works/gal-event06_360.jpg" width="333" height="222" media="(min-width: 768px) and (max-width: 1200px)">
                  <source srcset="/sahola_events/img/events-works/gal-event06_260.jpg" width="216" height="144" media="(min-width: 481px) and (max-width: 767px)">
                  <source srcset="/sahola_events/img/events-works/gal-event06_400.jpg" width="480" height="203" media="(max-width: 480px)">
                  <img src="/sahola_events/img/events-works/gal-event06.jpg" alt="Our work 1" width="300" height="450">
                </picture>
              </a>
            </div>
            <div class="events-works__photo">
              <a class="events-works__photo-link" title="Open large image" href="/sahola_events/img/events-works/gal-event07_big.jpg">
                <picture>
                  <source srcset="/sahola_events/img/events-works/gal-event07.jpg" width="421" height="280" media="(min-width: 1201px)">
                  <source srcset="/sahola_events/img/events-works/gal-event07_360.jpg" width="333" height="222" media="(min-width: 768px) and (max-width: 1200px)">
                  <source srcset="/sahola_events/img/events-works/gal-event07_260.jpg" width="216" height="144" media="(min-width: 481px) and (max-width: 767px)">
                  <source srcset="/sahola_events/img/events-works/gal-event07_400.jpg" width="480" height="203" media="(max-width: 480px)">
                  <img src="/sahola_events/img/events-works/gal-event07.jpg" alt="Our work 1" width="300" height="450">
                </picture>
              </a>
            </div>
            <div class="events-works__photo">
              <a class="events-works__photo-link" title="Open large image" href="/sahola_events/img/events-works/gal-event09_big.jpg">
                <picture>
                  <source srcset="/sahola_events/img/events-works/gal-event09.jpg" width="421" height="280" media="(min-width: 1201px)">
                  <source srcset="/sahola_events/img/events-works/gal-event09_360.jpg" width="333" height="222" media="(min-width: 768px) and (max-width: 1200px)">
                  <source srcset="/sahola_events/img/events-works/gal-event09_260.jpg" width="216" height="144" media="(min-width: 481px) and (max-width: 767px)">
                  <source srcset="/sahola_events/img/events-works/gal-event09_400.jpg" width="480" height="203" media="(max-width: 480px)">
                  <img src="/sahola_events/img/events-works/gal-event09.jpg" alt="Our work 1" width="300" height="450">
                </picture>
              </a>
            </div>
            <div class="events-works__photo">
              <a class="events-works__photo-link" title="Open large image" href="/sahola_events/img/events-works/gal-event10_big.jpg">
                <picture>
                  <source srcset="/sahola_events/img/events-works/gal-event10.jpg" width="421" height="280" media="(min-width: 1201px)">
                  <source srcset="/sahola_events/img/events-works/gal-event10_360.jpg" width="333" height="222" media="(min-width: 768px) and (max-width: 1200px)">
                  <source srcset="/sahola_events/img/events-works/gal-event10_260.jpg" width="216" height="144" media="(min-width: 481px) and (max-width: 767px)">
                  <source srcset="/sahola_events/img/events-works/gal-event10_400.jpg" width="480" height="203" media="(max-width: 480px)">
                  <img src="/sahola_events/img/events-works/gal-event10.jpg" alt="Our work 1" width="300" height="450">
                </picture>
              </a>
            </div>
            <div class="events-works__photo">
              <a class="events-works__photo-link" title="Open large image" href="/sahola_events/img/events-works/gal-event11_big.jpg">
                <picture>
                  <source srcset="/sahola_events/img/events-works/gal-event11.jpg" width="421" height="280" media="(min-width: 1201px)">
                  <source srcset="/sahola_events/img/events-works/gal-event11_360.jpg" width="333" height="222" media="(min-width: 768px) and (max-width: 1200px)">
                  <source srcset="/sahola_events/img/events-works/gal-event11_260.jpg" width="216" height="144" media="(min-width: 481px) and (max-width: 767px)">
                  <source srcset="/sahola_events/img/events-works/gal-event11_400.jpg" width="480" height="203" media="(max-width: 480px)">
                  <img src="/sahola_events/img/events-works/gal-event11.jpg" alt="Our work 1" width="300" height="450">
                </picture>
              </a>
            </div>
            <div class="events-works__photo">
              <a class="events-works__photo-link" title="Open large image" href="/sahola_events/img/events-works/gal-event12_big.jpg">
                <picture>
                  <source srcset="/sahola_events/img/events-works/gal-event12.jpg" width="421" height="280" media="(min-width: 1201px)">
                  <source srcset="/sahola_events/img/events-works/gal-event12_360.jpg" width="333" height="222" media="(min-width: 768px) and (max-width: 1200px)">
                  <source srcset="/sahola_events/img/events-works/gal-event12_260.jpg" width="216" height="144" media="(min-width: 481px) and (max-width: 767px)">
                  <source srcset="/sahola_events/img/events-works/gal-event12_400.jpg" width="480" height="203" media="(max-width: 480px)">
                  <img src="/sahola_events/img/events-works/gal-event12.jpg" alt="Our work 1" width="300" height="450">
                </picture>
              </a>
            </div>            
          </div>
        </div>
      </div>
      <button type="button" id="show-more" class="b-btn b-btn--arrow">Show more
      </button>
  </section>  
  <section class="b-section events-contact">
    <div class="events-contact__container">     
      <!-- <h2 class="b-title b-title--black b-title--low">Contact</h2> -->
      <p class="events-contact__schedule">Let us create for you once in-a-lifetime event leaving you free to relax and enjoy the experience.</p>
      <form class="events-contact__form" action="/wp-content/send.php" method="post">
        <fieldset class="events-contact__left">
          <div class="events-contact__field">
            <input placeholder="Name*" type="text" class="events-contact__input" name="bride" autocomplete="on">
          </div>
          <div class="events-contact__field">
            <input placeholder="Tel*" type="tel" class="events-contact__input" name="tel" autocomplete="on">
          </div>
          <div class="events-contact__field">
            <input placeholder="Email*" type="email" class="events-contact__input" name="email" autocomplete="on">
          </div>
        </fieldset>
        <div class="events-contact__right">
          <textarea placeholder="Message" name="message" class="events-contact__input events-contact__input--text"></textarea>
        </div>
        <button type="submit" class="b-btn b-btn--small events-contact__form-submit">SEND</button>
      </form>      
    </div>
  </section>
  <div class="modal__overlay">
    <div class="modalsend" id="modalsend">
      <button class="landing__modal__close" type="button" title="Close">Close</button>
      <p class="modalsend-title">Thank you!</p>
      <p class="modalsend-title">Your message has been sent.</p>
        <button class="landing__btn landing__btn--modal btn__modal-close" type="button">Close</button>
    </div>
    <div class="modalnosend" id="modalnosend">
      <button class="landing__modal__close" type="button" title="Close">Close</button>
      <p class="modalsend-title">Sorry!</p>
      <p class="modalsend-title">Your message was not sent. Please try again.</p>
        <button class="landing__btn landing__btn--modal btn__modal-again" type="button">Try again</button>
    </div>
  </div>

  
  


  <script src='/sahola_events/js/picturefill.min.js?v=<?php echo $file_Ver; ?>' type='text/javascript'></script>

  <script src='/sahola_events/js/jquery.mask.min.js?v=<?php echo $file_Ver; ?>' type='text/javascript'></script>
  <script src='/sahola_events/js/slick.min.js' type='text/javascript'></script>

  <script src='/sahola_events/js/script.min.js?v=<?php echo $file_Ver; ?>' type='text/javascript'></script>

<?php get_footer(); ?>
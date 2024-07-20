
    <section id="footer">
      <div class="container foot">
        <div class="footer">
          <h3>
          {{ env('APP_NAME') }}.
          </h3>
          <p>We offer Global commodity brokerage services, managed futures consultation, direct access trading, and trading system execution services to individuals, corporations and industry professionals.</p>
        </div>

        <div class="footer">
          <h3>
            Useful Link
          </h3>
          <a href="{{ url('about') }}">About Us</a>
          <a href="{{ url('terms') }}">Terms</a>
          <a href="{{ route('home') }}">Login</a>
          <a href="{{ url('faq') }}">FAQ</a>
          <a href="{{ url('contact') }}">Contact Us</a>
        </div>

        <div class="footer">
          <h3>
            Chat on Socials
          </h3>
          <p>Chat with our 24/7 support team on socials. Don't forget your fund is save wit us always</p>

          <p class="socials">
              <a href="https://wa.me/+447437286745"
                target="_blank"><i
                  class="uil uil-whatsapp"></i></a>
              <a href="https://www.twitter.com/avantis_wealth"
                target="_blank"><i
                  class="uil uil-twitter-alt"></i></a>
              <a href="https://www.facebook.com/avantiswealth"
                target="_blank"><i
                  class="uil uil-facebook-f"></i></a>
              <a href="https://t.me/AventisWealth"
                target="_blank"><i
                  class="uil uil-telegram-alt"></i></a>
            </p>

        </div>
      </div>
    </section>

    <footer class="coppy">
      <div class="container copies">
        <div class="copyright">
          <small>2024 {{ env('APP_NAME') }}. &copy; All Rights Reserved.</small>
        </div>
      </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- <script src="https://c2fc-102-91-52-86.ngrok-free.app/assets/website/js/main.js"></script> -->
    <script src="{{ asset('assets/website/js/main.js') }}"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


      <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/661bcebb1ec1082f04e22619/1hre9v721';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
  </body>
</html>

    
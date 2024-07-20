@include('layouts.header')

<section id="about" class="abouttt">
    <div class="goldview">
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
            {
            "symbol": "OANDA:XAUUSD",
            "width": 800,
            "locale": "en",
            "colorTheme": "dark",
            "isTransparent": false
          }
        </script>
    </div>
    
    <div class="container">
    
    <div class="about-container">
      <div class="abt-first">
        <p>About Us</p>
        <h2>We offer the best strategy to maximize your investment profit!</h2>
      </div>

      <div class="abt-second" data-aos="fade-in">
        <p>
          Through our market strategies, It has been noticed that gold has outperformed the inflation rate over the years and you will be able to reduce your risk by a huge margin by having some savings in gold. Shield yourself from currency risk exposures and invest with us for your best stock trading strategy
        </p>

        <div class="box" data-aos="fade-up" data-aos-delay="200">
          <span><i class="uil uil-signal-alt-3"></i></span>
          <div class="insur">
            <h3>Diversification</h3>
              <p> Avantis wealth management let you access a wide mix of asset classes, including ETFs, domestic, international stocks, bonds and highest commodities.</p>
          </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="400">
          <span><i class="uil uil-bitcoin-circle"></i></i></span>
          <div class="insur">
            <h3>Stable Income</h3>
            <p>Professionally, the management experts decide which securities to buy (AI & ETF's, stocks, bonds, cryptocurrencies etc) and when to sell them.</p>
          </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="500">
          <span><i class="uil uil-money-withdrawal"></i></span>
          <div class="insur">
            <h3>Instant Withdrawal</h3>
            <p>All withdrwal payment are automated for fast processing>
          </div>
        </div>
      </div>
    </div>
    <div class="abt-image" data-aos="fade-in">
      <img src="{{ asset('assets/website/images/about_2.png') }}" alt="">
    </div>
  </div>
</section>

<section id="markets">
  <div class="container service-container">
    <h2>Our Projects</h2>
    <P data-aos="fade-in">Sumamary of our shares of commodity as notably low-cost share dealing in the U.K. is offered by market disruptors such as {{ env('APP_NAME') }}, Capital.com, Freetrade, Trading 212 and CMC Invest, who cite zero-commission trading — although there are some other costs and fees users may incur. Your daily percent profit is gotten from these asset and shares listed below.</P>

    <div class="services">
      <div class="service">
        <img src="{{ asset('assets/website/images/AI IMG.webp') }}" alt="gold">

        <h4>
          AI Stocks and ETFS
        </h4>
        <p>
          This also provides the investor with a portfolio of multiple AI stocks such as Tesla(TSLA), NVIDIA(NVDA), Microsoft(MSFT), Amazon.com(AMZN), Apple(APPL) etc within a single investment. Investing in {{ env('APP_NAME') }} involves paying attention to ensure profit returns.
        </p>

      </div>
      <div class="service">
        <img src="{{ asset('assets/website/images/gold.jpg') }}" alt="gold">

        <h4>
          Gold and Silver
        </h4>
        <p>
          Gold and silver have been recognized as valuable metals and were highly coveted by ancient civilizations. Precious metals still have their place in a savvy investor's portfolio in modern times.
        </p>

      </div>
      <div class="service">
      
        <img src="{{ asset('assets/website/images/crypto1.jpg') }}" alt="cryptocurrency">

        <h4>Cryptocurrency Investment</h4>
        <p>
          This is becoming the "New Money" in the finance industry, making waves and amazing returns on invested capital.
        
        </p>  
      </div>
      <div class="service">
        <img src="{{ asset('assets/website/images/real est.jpg') }}" alt="real estate">
        <h4>
          Real Estate Mgt.
        </h4>
        <p>
          Real estate investment, even on a very small scale, remains a tried and true means of building an individual's cash flow nd wealth.
        </p>
      </div>
      <div class="service">
        <img src="{{ asset('assets/website/images/forex (2).jpg') }}" alt="forex">
        <h4>
        Forex Trading
        </h4>
        <p>
          Forex (FX) is a portmanteau of the words foreign [currency] and exchange. Foreign exchange is the process of changing one currency into another for various reasons, usually for commerce, trading, or tourism.
        </p>
      </div>
      <div class="service">
        <img src="{{ asset('assets/website/images/agriculture.jpg') }}" alt="agriculture">
        <h4>
          Agriculture
        </h4>
        <p>
          Literally buying a farm isn't a feasible strategy for the average investor.Fortunately, investors have many other means to gain exposure to the sector beyond sinking money into a farm.
        </p>
      </div>
      <div class="service">
        <img src="{{ asset('assets/website/images/oil n gas.jpg') }}" alt="oil $ gas">
        <h4>Oil and Gas</h4>
        <p>
          The oil and gas industry is one of the largest sectors in the world in terms of dollar value, generating an estimated $5 trillion in global revenue as of 2022
        </p>
      </div>
    </div>
  </div>
</section>

<section id="video">
  <div class="container choose">
      <div class="chose">
        <p>Why you should choose us!</p>
      </div>
      <div class="video-container">
        <div class="video-sec">
          <div class="video-cont"
            data-aos="fade-in">
            <h2>
              Over 7 Years of Experience
            </h2>
            <p>
              With a large investor community,
              we can assure you the best profit
              earning opportunity. So grab the
              chance and ensure your equal share from us. Because we want to grow with your development in this
              trading industry. So make it
              happen now!
            </p>
          </div>
          <div class="cont-icon">
            <div class="run">
              <span id="start1">
                <i class="uil uil-users-alt"></i>
              </span>
              <div class="runn">
                <div id="counter1"
                  class="counter"
                  data-stop="199787"
                  data-speed="20"
                  data-decimals="true">199487</div>
                <p>Happy Clients</p>
              </div>
            </div>
            <div class="run">
              <span id="start2">
                <i class="uil uil-bill"></i>
              </span>

              <div class="runn">
                <div id="counter2"
                  class="counter"
                  data-stop="201267"
                  data-speed="8">201467</div>
                <p>Running Investment</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="video">
          <div class="play-icon"></div>
          <img src="{{ asset('assets/website/images/intro-video.jpg') }}" alt="">
          <iframe class="youtube-video" src="https://www.youtube.com/embed/JUtes-k-VX4?si=W4eAschsW627_UfZ" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
  </div>
</section>

<section id="plan">
  <div class="container plan-container">
    <div class="plan-head">
      <p>Pricing</p>
      <h2>
        Choose your flexible investment plan
      </h2>
    </div>

    <div class="plans">
      <div class="braze-plan">
        <p class="braze">Starter-PLAN</p> 
          <p id="amt"> $200 - $1999</p>               
          <div class="trade">
          <p>Active Features</p>
          <div class="pro-list">
            <ul>
              <li><i class="fa-solid fa-circle-check good"></i> Gold & Silver</li>
              <li><i class="fa-solid fa-circle-xmark"></i> AI stock & ETFs</li>
              <li><i class="fa-solid fa-circle-xmark"></i> Real Estates</li>
              <li><i class="fa-solid fa-circle-xmark"></i> Agriculture</li>
              <li><i class="fa-solid fa-circle-check good"></i> 2% daily</li>
              <li><i class="fa-solid fa-circle-check good"></i> 5% Referral bonus</li>
  
            </ul>
            <ul>
              <li><i class="fa-solid fa-circle-check good"></i> Crypto Mining</li>
              <li><i class="fa-solid fa-circle-xmark"></i> Forex Trading</li>
              <li><i class="fa-solid fa-circle-xmark"></i> Oil & Gas</li>
              <li><i class="fa-solid fa-circle-xmark"></i> Retirement/Insurance</li>
              <li><i class="fa-solid fa-circle-check good"></i> Profit Withdraw/weekly</li>
              <li><i class="fa-solid fa-circle-check good"></i> Capital Withdraw/10days</li>
            </ul>
          </div>
        </div>
        <br>

        <a class="btn sm primary" href="{{ route('investplans') }}">Invest</a>
      </div>
      <div class="braze-plan" data-aos="fade-in" data-aos-delay="200">
        <p class="braze">Gold-PLAN</p>
        <p id="amt">$2000 - $9999</p>
        <div class="trade">
          <p>Active Features</p>
          <div class="pro-list">
            <ul>    
              <li><i class="fa-solid fa-circle-check good"></i> Gold & Silver</li>
              <li><i class="fa-solid fa-circle-check good"></i> AI stock & ETFs</li>
              <li><i class="fa-solid fa-circle-xmark"></i> Real Estates mgt</li>
              <li><i class="fa-solid fa-circle-xmark"></i> Agriculture</li>
              <li><i class="fa-solid fa-circle-check good"></i> 3% daily</li>
              <li><i class="fa-solid fa-circle-check good"></i> 5% Referral bonus</li>
            </ul>
            <ul>
                <li><i class="fa-solid fa-circle-check good"></i> Crypto Mining</li>
                <li><i class="fa-solid fa-circle-xmark"></i> Forex Trading</li>
                <li><i class="fa-solid fa-circle-xmark"></i> Oil & Gas</li>
                <li><i class="fa-solid fa-circle-xmark"></i> Retirement/Insurance</li>
                <li><i class="fa-solid fa-circle-check good"></i> Profit withdraw/weekly</li>
                <li><i class="fa-solid fa-circle-check good"></i> Capital withdraw/10days</li>
              </ul>
          </div>
        </div>
        <br>
        <a class="btn sm primary" href="{{ route('investplans') }}">Invest</a>
      </div>
      <div class="braze-plan" data-aos="fade-in" data-aos-delay="300">
        <p class="braze">Advanced-PLAN</p>
        <p id="amt">$10000 - $49,999</p>
        <div class="trade">
          <p>Active Features</p>
          <div class="pro-list">
            <ul>
              <li><i class="fa-solid fa-circle-check good"></i> Gold & Silver</li>
              <li><i class="fa-solid fa-circle-check good"></i> AI stock & ETFs</li>
              <li><i class="fa-solid fa-circle-check good"></i> Real Estates mgt</li>
              <li><i class="fa-solid fa-circle-xmark"></i> Agriculture</li>
              <li><i class="fa-solid fa-circle-check good"></i> 4% daily</li>
              <li><i class="fa-solid fa-circle-check good"></i> 5% Referral bonus</li>    
            </ul>
            <ul>
                <li><i class="fa-solid fa-circle-check good"></i> Crypto Mining</li>
                <li><i class="fa-solid fa-circle-xmark"></i> Forex Trading</li>
                <li><i class="fa-solid fa-circle-xmark"></i> Oil & Gas</li>
                <li><i class="fa-solid fa-circle-xmark"></i> Retirement/Insurance</li>
                <li><i class="fa-solid fa-circle-check good"></i> Profit withdraw/weekly</li>
                <li><i class="fa-solid fa-circle-check good"></i> Capital withdraw/10days</li>
              </ul>
          </div>
        </div>
        <br>
        <a class="btn sm primary" href="{{ route('investplans') }}">Invest</a>
      </div>
      <div class="braze-plan" data-aos="fade-in" data-aos-delay="400">
        <p class="braze">Premium-Plan</p>
        <p id="amt">$50,000 - $99,999</p>
        <div class="trade">
          <p>Active Features</p>
          <div class="pro-list">
            <ul>
    
              <li><i class="fa-solid fa-circle-check good"></i> Gold & Silver</li>
              <li><i class="fa-solid fa-circle-check good"></i> AI stock & ETFs</li>
              <li><i class="fa-solid fa-circle-check good"></i> Real Estates mgt</li>
              <li><i class="fa-solid fa-circle-check good"></i> Agriculture</li>
              <li><i class="fa-solid fa-circle-check good"></i> 5% daily</li>
              <li><i class="fa-solid fa-circle-check good"></i> 5% Referral bonus</li>    
            </ul>
            <ul>
                <li><i class="fa-solid fa-circle-check good"></i> Crypto Mining</li>
                <li><i class="fa-solid fa-circle-xmark"></i> Forex Trading</li>
                <li><i class="fa-solid fa-circle-xmark"></i> Oil & Gas</li>
                <li><i class="fa-solid fa-circle-xmark"></i> Retirement/Insurance</li>
                <li><i class="fa-solid fa-circle-check good"></i> Profit withdraw/weekly</li>
                <li><i class="fa-solid fa-circle-check good"></i> Capital withdraw/10days</li>
            </ul>
          </div>
        </div>
        <br>
        <a class="btn sm primary" href="{{ route('investplans') }}">Invest</a>
      </div>

      <div class="braze-plan" data-aos="fade-in" data-aos-delay="400">
        <p class="braze">Exclusive-Plan</p>
        <p id="amt">$100,000 - $499,999</p>
        <div class="trade">
          <p>Active Features</p>
          <div class="pro-list">
            <ul>
    
              <li><i class="fa-solid fa-circle-check good"></i> Gold & Silver</li>
              <li><i class="fa-solid fa-circle-check good"></i> AI stock & ETFs</li>
              <li><i class="fa-solid fa-circle-check good"></i> Real Estates mgt</li>
              <li><i class="fa-solid fa-circle-check good"></i> Agriculture</li>
              <li><i class="fa-solid fa-circle-check good"></i> 5% daily</li>
              <li><i class="fa-solid fa-circle-check good"></i> 5% Referral bonus</li>    
            </ul>
            <ul>
                <li><i class="fa-solid fa-circle-check good"></i> Crypto Mining</li>
                <li><i class="fa-solid fa-circle-check good"></i> Forex Trading</li>
                <li><i class="fa-solid fa-circle-xmark"></i> Oil & Gas</li>
                <li><i class="fa-solid fa-circle-xmark"></i> Retirement/Insurance</li>
                <li><i class="fa-solid fa-circle-check good"></i> Profit withdraw/weekly</li>
                <li><i class="fa-solid fa-circle-check good"></i> Capital withdraw/10days</li>
            </ul>
          </div>
        </div>
        <br>
        <a class="btn sm primary" href="{{ route('investplans') }}">Invest</a>
      </div>

      <div class="braze-plan" data-aos="fade-in" data-aos-delay="400">
        <p class="braze">VIP-Plan</p>
        <p id="amt">$500,000 - $999,999</p>
        <div class="trade">
          <p>Active Features</p>
          <div class="pro-list">
            <ul>
    
              <li><i class="fa-solid fa-circle-check good"></i> Gold & Silver</li>
              <li><i class="fa-solid fa-circle-check good"></i> AI stock & ETFs</li>
              <li><i class="fa-solid fa-circle-check good"></i> Real Estates mgt</li>
              <li><i class="fa-solid fa-circle-check good"></i> Agriculture</li>
              <li><i class="fa-solid fa-circle-check good"></i> 5% daily</li>
              <li><i class="fa-solid fa-circle-check good"></i> 5% Referral bonus</li>    
            </ul>
            <ul>
                <li><i class="fa-solid fa-circle-check good"></i> Crypto Mining</li>
                <li><i class="fa-solid fa-circle-check good"></i> Forex Trading</li>
                <li><i class="fa-solid fa-circle-xmark"></i> Oil & Gas</li>
                <li><i class="fa-solid fa-circle-check good"></i> Retirement/Insurance</li>
                <li><i class="fa-solid fa-circle-check good"></i> Profit withdraw/weekly</li>
                <li><i class="fa-solid fa-circle-check good"></i> Capital withdraw/10days</li>
            </ul>
          </div>
        </div>
        <br>
        <a class="btn sm primary" href="{{ route('investplans') }}">Invest</a>
      </div>

      <div class="braze-plan" data-aos="fade-in" data-aos-delay="400">
        <p class="braze">Shares-Plan</p>
        <p id="amt">$1,000,000 - $Unlimited</p>
        <div class="trade">
          <p>Active Features</p>
          <div class="pro-list">
            <ul>
    
              <li><i class="fa-solid fa-circle-check good"></i> Gold & Silver</li>
              <li><i class="fa-solid fa-circle-check good"></i> AI stock & ETFs</li>
              <li><i class="fa-solid fa-circle-check good"></i> Real Estates mgt</li>
              <li><i class="fa-solid fa-circle-check good"></i> Agriculture</li>
              <li><i class="fa-solid fa-circle-check good"></i> 5% daily</li>
              <li><i class="fa-solid fa-circle-check good"></i> 5% Referral bonus</li>    
            </ul>
            <ul>
                <li><i class="fa-solid fa-circle-check good"></i> Crypto Mining</li>
                <li><i class="fa-solid fa-circle-check good"></i> Forex Trading</li>
                <li><i class="fa-solid fa-circle-check good"></i> Oil & Gas</li>
                <li><i class="fa-solid fa-circle-check good"></i> Retirement/Insurance</li>
                <li><i class="fa-solid fa-circle-check good"></i> Profit withdraw/daily</li>
                <li><i class="fa-solid fa-circle-check good"></i> Capital withdraw/2days</li>
            </ul>
          </div>
        </div>
        <br>
        <a class="btn sm primary" href="{{ route('investplans') }}">Invest</a>
      </div>
    </div>
  </div>

  <div class="pay">
    <p>Payment Methods</p>
    <div class="pay1">

      <div class="pay2">
        <img src="{{ asset('assets/website/images/paymethod.jpg') }}" alt="Payments">
      </div>
    </div>
    
  </div>
</section>

<section id="stock" class="stock-section">
  <div class="container">
    <div class="stock-container">
      <div class="stock-head">
        <h2>
          Runner up: {{ env('APP_NAME') }} Broker,
          best for Professional traders and
          research
        </h2>
        <p>
        {{ env('APP_NAME') }} Brokers is a great
          choice, not just for professional
          traders in the U.K., but also for
          retail investors who need access to
          a wide range of global markets such
          as Cryptocurrency, Forex, Estate
          management, Agriculture, Gold, Oil &
          Gas etc, in addition to local
          markets. The Trader Workstation
          (TWS) platform and more recently
          launched platforms GlobalTrader and
          impact come with a multitude of
          features and trading tools,
          including dozens of research
          channels, comprehensive educational
          content, and competitive
          commissions. They also offer stocks
          and shares ISAs
        </p>
      </div>
    </div>
  </div>

  <div class="stock-stats">
    <div class="stockss">
      <div class="stock1">

        <div class="bank-img sales">
          <div class="sstock">
            <h3>Award Sales Proceeds</h3>
          </div>
          <img src="{{ asset('assets/website/images/sale-proceeds3.png') }}" alt="sales">
        </div>
        <div class="divider"></div>
        <ul>
          <li><span class="chart-box color1"></span><span>Advisers</span></li>
          <li><span class="chart-box color2"></span><span>Marketing</span></li>
          <li><span class="chart-box color3"></span><span>Public Sale</span></li>
          <li><span class="chart-box color4"></span><span>Pre Sale</span></li>
          <li><span class="chart-box color5"></span><span>Projects</span></li>
        </ul>
      </div>
      
      <div class="stock2">
        
        <div class="bank-img sales">
          <div class="sstock">
            <h3>Award Distribution</h3>
          </div>
          <img src="{{ asset('assets/website/images/distribution3.png') }}" alt="distribute">
        </div>
        <div class="divider"></div>
        <ul>
          <li><span class="chart-box color1"></span><span>ICO Sale</span></li>
          <li><span class="chart-box color2"></span><span>Build Out</span></li>
          <li><span class="chart-box color3"></span><span>Team Advisers</span></li>
          <li><span class="chart-box color4"></span><span>Investors</span></li>
          <li><span class="chart-box color5"></span><span>Bounty</span></li>
        </ul>
      </div>
    </div>        
  </div>    
</section>

<section id="gold" class="gold">
  <div class="gold-cont">
    <!-- <div class="btc-cont">
      <script src="https://widgets.coingecko.com/coingecko-coin-heatmap-widget.js"></script>
      <coingecko-coin-heatmap-widget  height="400" locale="en"></coingecko-coin-heatmap-widget>
    </div> -->
    <div class="gold-img">
      <div class="gold-img1" data-aos="fade-in">
        <img src="{{ asset('assets/website/images/handgold.jpg') }}" alt="">
      </div>
      <div class="gold-img2">
        <p>
        Gold is relatively stable and you will always be able to protect your money in the long run by investing in gold. In this regard, let us carefully start investing in gold as it is beneficial for your future. In this manner, your other investments will be hedged properly and you will be able to diversify the risk in a huge manner.
        </p>
      </div>
      <div class="goldbtn">
        <a href="">Get started</a>    
        <a href="">Login</a>    
      </div>
    </div>

    <div class="gold-img imgPhone" data-aos="fade-up">
      <img src="{{ asset('assets/website/images/goldphone.png') }}" alt="">

    </div>
     
  </div>
</section>

<section id="icon-sec">
  <div class="container icons">
    <div class="run2">
      <span>
        <i class="uil uil-users-alt"></i>
      </span>
      <div class="c-run">
        <b>197+</b>
        <p>Happy Clients</p>
      </div>
    </div>
    <div class="run2">
      <span>
        <i class="uil uil-chart-line"></i>
      </span>
      <div class="c-run">
        <b>945%</b>
        <p>Investment Growth</p>
      </div>
    </div>
    <div class="run2">
      <span>
        <i class="uil uil-bill"></i>
      </span>
      <div class="c-run">
        <b>80Million+</b>
        <p>Running Investment</p>
      </div>
    </div>
    <div class="run2">
      <span>
        <i class="uil uil-coins"></i>
      </span>
      <div class="c-run">
        <b>45Million+</b>
        <p>Successful Investment</p>
      </div>
    </div>
  </div>



  <!-- slide section -->

  <div class="slide-sec">
    <div id="main-carousel" class="splide"
      aria-label="My Awesome Gallery">
      <div class="splide__track">
        <ul class="splide__list"
          data-aos="fade-in">
          <li class="splide__slide">
            <figure class="swiper-slide2">
              <figcaption>
                I have recommended
                {{ env('APP_NAME') }} to seversl of my
                friends and family members as
                i believe it's one of the best
                investment platforms out here.
                their competitive fees,
                excellent customer service and
                high returns make them a
                reliable choice for anyone
                looking to invest in
                cryptocurrency and the stocks
              </figcaption>
              <div class="swiper-client2">
                <div
                  class="swiper-client-avater2">
                <img src="{{ asset('assets/website/images/rod-thomas.jpg') }}" alt="">
              </div>
              <div
                  class="swiper-client-details2">
                  <h5>Rod Thomas..</h5>
                  <small>CEO-Founder</small>
                </div>
              </div>
            </figure>
          </li>
          <li class="splide__slide">
            <figure class="swiper-slide2">
              <figcaption>
              {{ env('APP_NAME') }} has exceeded my
                expectations in terms of
                security and reliability.
                Their advanced security
                measures ensure that my
                investments are safe from any
                potential threats.
                Additionally, the platform is
                always up-to-date with the
                latest market trends whic
                helps me make informed
                investment decisions."
              </figcaption>
              <div class="swiper-client2">
                <div
                  class="swiper-client-avater2">
                <img src="{{ asset('assets/website/images/testimonial1.png') }}" alt="">
              </div>
              <div
                  class="swiper-client-details2">
                  <h5>James Perkins</h5>
                  <small>PR & Consultant</small>
                </div>
              </div>
            </figure>
          </li>
          <li class="splide__slide">
            <figure class="swiper-slide2">
              <figcaption>
                I was hesitant to invest in
                cryptocurrency initially but
                {{ env('APP_NAME') }} made it easy for
                me to navigate through the
                intuitive interface made it
                easy for me to navigate
                through the platform and
                invest in various
                cryptocurrencies. I have seen
                consistent retures on my
                investments which has given me
                confidence in their services,"
                being managed efficiently.
              </figcaption>
              <div class="swiper-client2">
                <div
                  class="swiper-client-avater2">
                <img src="{{ asset('assets/website/images/testimonial4.jpg') }}" alt="">
              </div>
              <div
                  class="swiper-client-details2">
                  <h5>Alina Lucy</h5>
                  <small>Marketing</small>
                </div>
              </div>
            </figure>
          </li>
          <li class="splide__slide">
            <figure class="swiper-slide2">
              <figcaption>
                I have seen consistent retures
                on my investments which has
                given me confidence in their
                services," Their advanced
                security measures ensure that
                my investments are safe from
                any potential threats.
              </figcaption>
              <div class="swiper-client2">
                <div
                  class="swiper-client-avater2">
                <img src="{{ asset('assets/website/images/testimonial3.png') }}" alt="">
              </div>
              <div
                  class="swiper-client-details2">
                  <h5>Steven Taylor</h5>
                  <small></small>
                </div>
              </div>
            </figure>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container avanti-hand">
    <div class="av-hand">
    <img src="{{ asset('assets/website/images/avanti handshake.webp') }}" alt="">
    </div>
    <div class="video-sec">
      <div class="video-cont ava1"
        data-aos="fade-up">
        <h2>
          Avantis Wealth Specialties
        </h2>
        <p>
          Property Investment, Retirement Planning, Commercial Property Investment, Alternative Investment, High Return Investments, Income Generating Investments, fixed term investment, high yield investment, passive income, dividend investment, and income investment!
        </p>
      </div>
      <div class="cont-icon ava2">
        <div class="run">
          <ul>
            <li>Travel Insurance</li>
            <li>Retirement savings</li>
            <li>Vacation Packages</li>
            <li>Health Insurance</li>
            <li>Pet Insurance</li>
            <li>Property Insurance</li>
          </ul>
        </div>
        <div class="run Larun">
          <img src="{{ asset('assets/website/images/avantis-wealth-podcasts-fixed-income.webp') }}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="faq">
  <div class="container0">
    <div class="faq-head">
      <p>Our FAQs</p>
      <h2>Frequently asked questions</h2>
    </div>
    <div class="acc-container">
      <button class="acc-btn">How can i invest with {{ env('APP_NAME') }}?</button>
      <div class="acc-content">
        <p>
          To make an investment, you must first join {{ env('APP_NAME') }}. You can make your first deposit after signing up. All payments must be made via the Members Area. You can log in with the member username and password you created when you signed up
        </p>
      </div>

      <button class="acc-btn">
        Can i do a direct deposit from my bank account?
      </button>
      <div class="acc-content">
        <p>
          Because of the currency differences and dollar rate volatility, It's advisable to convert it to cryptocurrency(Bitcoin, Etherum etc) to make your deposit.
        </p>
      </div>

      <button class="acc-btn">
        Is this Company Trusted?
      </button>
      <div class="acc-content">
        <p>
          Of course YES! it's Properly Registered, it's been running for years, we've acquired thousands of investors worldwide with pleasant testimonies on TRUSTPILOT and the last but not least we also engaged in properly trading and investing activities that involves all the market sectors to provide enough profits for our investors.
        </p>
      </div>

      <button class="acc-btn">
        How can i Withdraw Funds?
      </button>
      <div class="acc-content">
        <p>
          Login to your account using your username and password and check the Withdraw section.
        </p>
      </div>

      <button class="acc-btn">
        Can I lose Money if i invest {{ env('APP_NAME') }}?
      </button>
      <div class="acc-content">
        <p>
          No you can't lose money not minding Investment is income, with increased risk, so we have partnered with Prudential Financial Inc and insured our client's funds. We are insured for up to $175,000,000USD.
          We can provide the insurance certificate on request.
          In general, violating company rules and procedures can result in penalties or even account suspension or termination. If you make investments without following the company's guidelines and recommendations, you may be at a higher risk of losing money. It is important to carefully read and understand the terms and conditions before making any investment.
        </p>
      </div>
    </div>
  </div>
</section>

    <section class="partners">
      <div class="body__inner-wrapper">
        <div class="marquee">
          <div class="marquee__inner-wrap">
            <div class="marquee__inner">

              <div class="marquee__img"><img src="{{ asset('assets/website/images/client1.png') }}" alt=""></div>
    
              <div class="marquee__img"><img src="{{ asset('assets/website/images/client2.png') }}" alt=""></div>

              <div class="marquee__img"><img src="{{ asset('assets/website/images/client3.png') }}" alt=""></div>

              <div aria-hidden="true" class="marquee__img"><img src="{{ asset('assets/website/images/client6.png') }}" alt=""></div>

              <div class="marquee__img"><img src="{{ asset('assets/website/images/client7.png') }}" alt=""></div>
    
              <div class="marquee__img"><img src="{{ asset('assets/website/images/client1.png') }}" alt=""></div>
    
              <div class="marquee__img"><img src="{{ asset('assets/website/images/client2.png') }}" alt=""></div>
    
              <div class="marquee__img"><img src="{{ asset('assets/website/images/client3.png') }}" alt=""></div>
    
              <div aria-hidden="true" class="marquee__img"><img src="{{ asset('assets/website/images/client6.png') }}" alt=""></div>
    
              <div class="marquee__img"><img src="{{ asset('assets/website/images/client7.png') }}" alt=""></div>
    
            </div>
          </div>
        </div>
      </div>
    </section>

@include('layouts.footer')
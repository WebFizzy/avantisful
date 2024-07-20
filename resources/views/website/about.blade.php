@include('website.includes.header')

    <section id="icon-sec2">
      <div class="container icons">
        <div class="icon-container abt2">
          <h1>
            About Us
          </h1>
        </div>
        </div>
      </div>

    </section>

    <section id="about">
      <div class="container">
        <div class="about-container">
          <div class="abt-first">
            <p>About Us</p>
            <h2>We offer the best cryptocurrency investment platform</h2>
          </div>
 
          <div class="abt-second">
            <p>Through our market strategies, Mutual funds let you pool your money together with other investors to "mutually" buy stocks, bonds and other investments. We use advanced security measures to protect users' funds and personal information.            </p>            
            <div class="box">
              <span><i class="uil uil-signal-alt-3"></i></span>
              <div class="insur">
                <h3>Diversification</h3>
                <p> Avantis wealth management let you access a wide mix of asset classes, including ETFs, domestic, international stocks, bonds and highest commodities.</p>
              </div>
            </div>
            <div class="box">
              <span><i class="uil uil-bitcoin-circle"></i></i></span>
              <div class="insur">
                <h3>Stable Income</h3>
                <p>Professionally, the management experts decide which securities to buy (AI & ETF's, stocks, bonds, cryptocurrencies etc) and when to sell them. You get exposure to all the investments in the fund and any income generated.</p>
              </div>
            </div>
            <div class="box">
              <span><i class="uil uil-money-withdrawal"></i></span>
              <div class="insur">
                <h3>Instant Withdrawal</h3>
                <p>All withdrwal payment are automated for fast processing and withdrawal before 24hrs.
              </div>
            </div>
          </div>
        </div>
        <div class="abt-image">
          <img src="{{ asset('assets/website/images/company certificate.png') }}" alt="">
        </div>
      </div>
    </section>

    <section id="markets">
      <div class="container">
        <div class="service-container">
          <h2>Our Projects</h2>
          <P>Sumamary of our shares as notably low-cost share dealing in the U.K. is offered by market disruptors such as {{ env('APP_NAME') }}.com, Capital.com, Freetrade, Trading 212 and CMC Invest, who cite zero-commission trading — although there are some other costs and fees users may incur, </P>
        
          <div class="services">
            <div class="service">
              <img src="{{ asset('assets/website/images/gold.jpg') }}" alt="gold">
              <h4>
                Gold and Precious Metals
              </h4>
              <p>
                Gold and silver have been recognized as valuable metals and were highly coveted by ancient civilizations. Precious metals still have their place in a savvy investor's portfolio in modern times.
              </p>
            </div>
            <div class="service">
              <img src="{{ asset('assets/website/images/crypto1.jpg') }}" alt="cryptocurrency">
              <h4>
                Cryptocurrency Investment
              </h4>
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
               Real estate investing, even on a very small scale, remains a tried and true means of building an individual's cash flow nd wealth.
              </p>
            </div>
            <div class="service">
              <img src="{{ asset('assets/website/images/oil n gas.jpg') }}" alt="oil $ gas">
              <h4>Oil and Gas</h4>
              <p>
               The oil and gas industry is one of the largest sectors in the world in terms of dollar value, generating an estimated $5 trillion in global revenue as of 2022
              </p>
            </div>
            <div class="service">
              <img src="{{ asset('assets/website/images/forex (2).jpg') }}" alt="forex">
              <h4>Forex Trading</h4>
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
          </div>
          
        </div>
      </div>
    </section>


@include('website.includes.footer')

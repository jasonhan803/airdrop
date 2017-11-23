<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- <meta property="og:title" content="LALA World"/>
    <meta name="author" content="Sankalp Shangari">
    <meta property="og:site_name" content="LALA World">
    <meta property="og:description" content="Empowering the unbanked with an Ecosystem, not only for financial inclusion but inclusive health, inclusive education, employment( the entire Ethos to make self sustainaible  Website: https://lalaworld.io">
    <meta property="og:image" content="{{asset('/public/img/logo-icon.png')}}"> -->

    <meta property="og:url" content="https://lalaworld.io">
    <meta property="og:type" content="website">
    <meta property="og:title" content="LALA World Airdrop">
    <meta property="og:description" content="Empowering the unbanked with an Ecosystem, not only for financial inclusion but inclusive health, inclusive education, employment( the entire Ethos to make self sustainaible  Website: https://lalaworld.io">
    <meta property="og:image" content="{{asset('/public/img/logo-icon.png')}}">

    <title>LALA World - Airdrop</title>
    <link href="{{asset('/public/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/public/css/core.min.css')}}" rel="stylesheet">
    <link href="{{asset('/public/css/thesaas.min.css')}}" rel="stylesheet">
    <link rel="icon" href="{{asset('/public/img/favicon.ico')}}">
    <style>
      .gradient-header {
        background: #DE6262;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #FFB88C, #DE6262);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #FFB88C, #DE6262);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }

      .text-theme {
        color: #fff !important;
      }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/4.11.0/d3.js"></script>
    <script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
    @yield('headerjs')
  </head>
  <body class="thesaas-sections-split">
    <!-- Topbar -->
    <nav class="topbar topbar-expand-md topbar-sticky">
      <div class="container">
        <div class="topbar-left">
          <button class="topbar-toggler">☰</button>
          <a class="topbar-brand" href="https://lalaworld.io/">
            <img class="logo-default" src="{{asset('/public/img/logo.png')}}">
            <img class="logo-inverse" src="{{asset('/public/img/logo.png')}}">
          </a>
        </div>
        <div class="topbar-right">
          <nav class="topbar topbar-expand-md">
            <div class="container">
              <div class="topbar-left">
                <button class="topbar-toggler">☰</button>
                <a class="topbar-brand" href="https://lalaworld.io/">
                  <img class="logo-default" src="{{asset('/public/img/logo.png')}}">
                  <img class="logo-inverse" src="{{asset('/public/img/logo.png')}}">
                </a>
              </div>
              <div class="topbar-right">
                <ul class="topbar-nav nav">
                  <li class="nav-item">
                    <a class="nav-link" href="https://lalaworld.io/" target="_blank">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://lalaworld.io/whitepaper.pdf" target="_blank">Whitepaper</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://invest.lalaworld.io" target="_blank">Crowdsale</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-scrollto="token-profile">Token Profile</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </nav>
    <header class="header bg-fixed gradient-animation">
      <div class="container text-center">
        <div class="row">
          <div class="text fs fs-20 ">
            <strong>🚀 IMPORTANT 🚀</strong>
            <br> To join our crowdsale, please fill out the whitelist form. Once the whitelist reaches a max capacity. It will
            be closed.
            <strong>
              <a class="social-twitter" href="https://lalaworld.io" target="_blank">https://lalaworld.io/#</a>
            </strong>
          </div>
          <div class="col-12 col-lg-8 offset-lg-2">
            <h1 class="airdrop-amount text-center hidden-sm-down " style="font-size:150px;">0.00</h1>
            <h1 class="airdrop-amount text-center fs fs-80 hidden-md-up ">0.00</h1>
            <div>
              <h1 class="text-uppercase fs fs-30 ">Join the LALA TOKEN(LALA) Airdrop!</h1>
              <h1 class="text-uppercase fs fs-30 ">By
                <a class="social-twitter" href="https://lalaworld.io" target="_blank">lalaworld.io</a>
              </h1>
            </div>
            <br />
            <button class="btn btn-xl btn-round btn-success " data-scrollto="section-airdrop">
              start
            </button>
          </div>
        </div>

      </div>
    </header>
    @yield('content')
    <section id="footer" class="footer-section">
      <div class="container footer-width">
        <hr class="footer white" width="100%">
        <div class="container text-center footer-width footer-bottom">
          <p>
          <img class="footer-logo" src="{{asset('/public/img/logo-icon.png')}}">
          </p>
        </div>
      </div>
    </section>
    <script src="{{asset('/public/js/core.min.js')}}"></script>
    <script src="{{asset('/public/js/thesaas.min.js')}}"></script>
    <script src="{{asset('/public/js/script.js')}}"></script>
    <script src="{{asset('/public/js/jquery-3.1.1.min.js')}}"></script>
    @yield('footerjs')
  </body>
</html>

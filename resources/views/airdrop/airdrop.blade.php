@extends('layouts.app')
@section('content')
<main class="main-content">
  <section class="section" id="token-profile">
    <div class="container text-center">
      <div class="row text-left">
        <div class="col-md-4">
            <p class="text-black railway">Token Profile</p>
            <hr>
            <p class="text-black railway">Token Name: LALA Token</p>
            <p class="text-black railway">Token Symbol: LALA</p>
            <p class="text-black railway">Parent Company: LALA WORLD PTE. LTD.</p>
            <hr>
              <div class="profile-btn text-center">
                <a href="https://www.facebook.com/MyLaLaWorld" target="_blank">
                  <i class="fa fa-facebook-official profile-icon" aria-hidden="true"></i>
                </a>
                <a href="https://twitter.com/MyLaLaWorld" target="_blank">
                  <i class="fa fa-twitter profile-icon" aria-hidden="true"></i>
                </a>
                <a href="https://t.me/LaLaWorld" target="_blank">
                  <i class="fa fa-telegram profile-icon" aria-hidden="true"></i>
                </a>
                <!--
                
                <a href="http://telegram.com/" target="_blank"><i class="fa fa-telegram profile-icon" aria-hidden="true"></i></a>
                
                -->
                <a href="https://www.linkedin.com/in/MyLaLaWorld/" target="_blank">
                  <i class="fa fa-linkedin profile-icon" aria-hidden="true"></i>
                </a>
                <a href="http://bit.ly/2yiWRE4" target="_blank">
                  <i class="fa fa-slack profile-icon" aria-hidden="true"></i>
                </a>
                <a href="https://medium.com/@MyLaLaWorld" target="_blank">
                  <i class="fa fa-medium profile-icon" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/lalawallet/" target="_blank">
                  <i class="fa fa-instagram profile-icon" aria-hidden="true"></i>
                </a>
                <a href="https://www.reddit.com/user/MyLaLaWorld" target="_blank">
                  <i class="fa fa-reddit profile-icon" aria-hidden="true"></i>
                </a>
              </div>
        </div>
        <div class="col-md-8">
          <p class="text-black railway">About LALA</p>
            <hr>
            <p class="text-black" style="font-weight: 400;">LALA World (“LALA”) is all about migrants and their unbanked families. Its an ECOSYSTEM enabled by the LALA Wallet as a PLATFORM, a single sign on platform revolving around their issues and problems. Employment issues, digital ID’s, communities build up, government and NGO partnerships, health issues, and of course, a new financial ecosystem for the huge underbanked population by capitalizing the Blockchain revolution to bridge the gap between cash, digital and the crypto world.
            <br><br>By creating a whole new peer to peer ecosystem, LALA aims to revolutionize the way individuals, small businesses and micro-entrepreneurs transact, make payments, borrow money and associated products like insurances, domestic and Cross-Border remittances, cards and other general banking products.
          </p>
          <hr>
          </div>
      </div>
    </div>
  </section>
  <section class="section" id="section-airdrop">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 task">
          <div class="card card-bordered card-hover-shadow text-center">
            <a class="card-block" target="_blank" href="https://t.me/LaLaWorld">
              <p>
                <i class="fa fa-telegram fs-50 text-muted" style="color:#00a99d !important;"></i>
              </p>
              <h1 class="card-title text-uppercase">Join Our Telegram Channel</h1>

            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 task">
          <div class="card card-bordered card-hover-shadow text-center">
            <span id="share" class="card-block">
              <p>
                <i class="fa fa-facebook fs-50 text-muted" style="color:#00a99d !important;"></i>
              </p>
              <h1 class="card-title text-uppercase">Share on Facebook</h1>
              <div class="message">
              </div>
              <!--button id="share" class="btn btn-xl btn-round btn-success text-uppercase ">
                Post
              </button-->
            </span>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card card-bordered card-hover-shadow text-center">
            <a class="card-block" href="#" data-scrollto="register">
              <p>
                <i class="icon-tools fs-50 text-muted"></i>
              </p>
              <h1 class="card-title text-uppercase">Fill The Form</h1>
            </a>
          </div>
        </div>
      </div>
      <hr />
      <div id="register" class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="card card-shadowed p-50  mb-0" style="max-width: 70%; margin-left: 20%;">
            <h5 class="text-uppercase text-center" id="form-head">Fill The Form</h5>
            <form class="form-type-material" method="post" action="#" id="register_user">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">@</span>
                  <input type="text" class="form-control" aria-describedby="basic-addon1" name="telegram" placeholder="Telegram Username">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" name="eth_address" placeholder="ETH Address">
                </div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
              <!-- btn btn-xl btn-success -->
              <button class="btn btn-xl btn-primary" type="submit" style="margin-left: 33%;">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection()
@section('footerjs')
<script type="text/javascript">

  $('#register_user').submit(function(e){
    e.preventDefault()
    value = $(this).serialize();
    response = JSON.parse(ajax_resp('/register',value))
    if(response.status == 'succ'){
      $('#form-head').html('Thank You')
      $('#register_user').html('<i class="fa fa-check-circle" aria-hidden="true"></i><br><br><button class="btn btn-xl btn-primary" id="crowdsale" type="button" style="margin-left: 19%;">Particapte to Crowdsale</button>')
    }
  })
/*<a href="https://crowdsale.lalaworld.io" target="_blank">*/
  function ajax_resp(url,data){
    var tmp = null;
    $.ajax({
        'async': false,
        'type': "POST",
        'global': false,
        'dataType': 'html',
        'url':  url,
        'data': data,
        'success': function (resp) {
            tmp = resp;
        }
    });

    return tmp;
  }
  /*$('#crowdsale').click(function(e){
    console.log("Hello")
    window.open(
      'https://crowsale.lalaworld.io',
      '_blank'
    );
  })
*/
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) return;
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/pl_PL/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

  //$("#share").on("click", function(e){
    /*window.open('https://www.facebook.com/dialog/share?app_id=144872242738827&%20channel_url=http://staticxx.facebook.com/connect/xd_arbiter/r/lY4eZXm_YWu.js?version=42#cb=f2ab76abba9ab74&domain=localhost&origin=http://localhost:260/f2a9377a5406c3c&relation=opener&display=popup&e2e={}&hashtag=#ICO #airdrop #eth #crypto #cryptocurrency&href=http://localhost:260&locale=pl_PL&mobile_iframe=false& next=http://staticxx.facebook.com/connect/xd_arbiter/r/lY4eZXm_YWu.js?version=42#cb=f32ed45aa21d6fc&domain=localhost&origin=http://localhost:260/f2a9377a5406c3c&relation=opener&frame=f2943a95be7814c&result="xxRESULTTOKENxx"&sdk=joey','targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false*/
    /*FB.ui({
      app_id: '144872242738827',
      method: 'share',
      href: 'https://lalaworld.io',
    }, function(response){});*/
  //})

  function pendingBonus(callback) {

      $.getJSON("public/counter.json", function (obj) {
        d3.selectAll(".airdrop-amount")
          .transition()
          .duration(2500)
          .on("start", function repeat() {

            d3.active(this)
              .tween("text", function () {
                var that = d3.select(this),
                  i = d3.interpolateNumber(that.text().replace(/,/g, ""), obj["counter"]);
                return function (t) { that.text(format(i(t))); };
              })
              .transition()
              .delay(1500)
            //.on("start", repeat);

          });
      });
    }
  var format = d3.format(",.2f");

  function getCounter(callback) {

      $.getJSON("public/counter.json", function (obj) {
        d3.selectAll(".airdrop-amount")
          .transition()
          .duration(2500)
          .on("start", function repeat() {

            d3.active(this)
              .tween("text", function () {
                var that = d3.select(this),
                  i = d3.interpolateNumber(that.text().replace(/,/g, ""), obj["counter"]);
                return function (t) { that.text(format(i(t))); };
              })
              .transition()
              .delay(2000)
            //.on("start", repeat);

          });
      });
    }
  getCounter();
  $(".task").on("click", function (e) {
    var v = $(this).find(".card-title");
    v.html("<del>" + v.html() + "</dev>");
  })
</script>
@endsection()

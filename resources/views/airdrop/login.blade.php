@extends('layouts.app')
@section('content')
    <div id="login" class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="card card-shadowed p-50  mb-0" style="max-width: 70%; margin-left: 20%;">
            <h5 class="text-uppercase text-center" id="form-head">Login</h5>
            <form class="form-type-material" method="post" action="#" id="login_user">
                <div class="form-group">
                    <input type="text" class="form-control" name="uname" id="uname" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Password">
                </div>
                <button class="btn btn-xl btn-primary" type="submit" style="margin-left: 33%;">SignIn
                </button>
            </form>
          </div>
        </div>
    </div>
@endsection()
@section('footerjs')
    <script type="text/javascript">
        $(document ).ready(function(){
            $('#login_user').submit(function(e){
                e.preventDefault()
                value   = $(this).serialize();
                uname   = $('#uname').val()
                passwd  = $('#passwd').val()

                if(uname == ''){
                    $.notify('Invalid Username')
                    return false
                }

                if(passwd == ''){
                    $.notify('Invalid Password')
                    return false
                }

                response = JSON.parse(ajax_resp('/login_check',value))

                if(response.status == 'succ')
                    window.location.replace(response.data.redirect_url)
                else{
                    $.confirm({
                      title: 'Error',
                      content: response.msg,
                      autoClose: 'cancellation|5000',
                      buttons: {
                        cancellation: function () {
                        }
                      }
                  });
                }
            })
        
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
        })
    </script>
@endsection()
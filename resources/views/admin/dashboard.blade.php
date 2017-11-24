<html>
<head>
 <title>Airdrop Admin</title>
 <script type="text/javascript">
     var TOOLS = {};
 </script>
</head>
<body>
    <link href="{{asset('/public/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/public/css/core.min.css')}}" rel="stylesheet">
    <link href="{{asset('/public/css/thesaas.min.css')}}" rel="stylesheet">
    <link rel="icon" href="{{asset('/public/img/favicon.ico')}}">
    
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">

<style type="text/css">
.btn-yellow {
  background: #f1c40f;
  color: white;
  border: none;
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}
.btn-yellow:hover{
  background: #f1d04f;
  color: white;
}
.float-e-margins .btn{
    margin-bottom: 2px !important;
}
.btn-xs{
    padding: 1px 4px;
    font-size: 10px;
}
</style>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Airdrop Admin</h2>
    </div>
</div>

<div class="wrapper wrapper-content fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Verify Telegram Users </h5>
                </div>
                <div class="ibox-content">
                    <table width="100%" class="display table table-bordered table-striped table-condensed cf" id="telegram_verification">
                        <thead class="cf">
                        <tr>
                            <th>ID </th>
                            <th>Telegram username </th>
                            <th>Email Address </th>
                            <th>ETH Address</th>
                            <th>Verify Telegram</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {
       TOOLS.bcd = $('#telegram_verification').DataTable({
            "processing": true,
            "serverSide": true,
            "stripeClasses": [ 'odd-row', 'even-row' ],
            "ajax":{
                     "url": "/telegramusers",
                     "dataType": "json",
                     "type": "POST",
                     "data":{ _token: "{{csrf_token()}}"}
                   },
            "columns": [
                { "data": "id" },
                { "data": "tel_user_name" },
                { "data": "email_address" },
                { "data": "eth_address" },
                { "data": "verify_telegram",
                     "render": function(data, type, row){
                        var telegram = JSON.parse(data);
                        if(telegram == 1){
                            return "<span class=\"label label-primary\">Verified</span><button type=\"submit\" style='margin-left:6px' class='btn btn-xs btn-primary fathumbup'><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> </button>";
                            }
                            else if(telegram == 0){
                            return "<span class=\"label label-danger\">Unverified</span><button type=\"submit\" style='margin-left:6px' class='btn btn-xs btn-primary fathumbup'><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> </button>";
                            }
                            else{
                            return "<span class=\"label label-warning\">None</span><button type=\"submit\" style='margin-left:6px' class='btn btn-xs btn-primary fathumbup'><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> </button>";
                        }
                    }
                }
             ]
        });

        $('.dataTables_filter input').attr({"class":"form-control","placeholder":"Enter text to search"});
        $('.dataTables_length label select').attr({"class":"form-control"});

        $( "body" ).on( "click", ".fathumbup", function(e) {

            _this =$(this);
            TOOLS.dt = $(this).html();

            e.preventDefault();
            var nTr = TOOLS.bcd.row(_this.parent().parent()).data();
            var user = nTr.tel_user_name;
                $.ajax({
                  type: 'post',
                  dataType: 'json',
                  url: '/verifyTelegramUser',
                  data: {'user':user, _token: "{{csrf_token()}}"},
                  success: function (response) {
                    if (response.status == 'SUCC') {
                        location.reload();
                    }
                    else{
                        alert(response.msg);
                     }
                    }
                });
        });

        });

</script>
 

</body>    

</html>

   
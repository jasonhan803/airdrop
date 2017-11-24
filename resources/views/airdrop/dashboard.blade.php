@extends('layouts.app')
@section('headerjs')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css" />
<style type="text/css">
	.header {
	    position: relative;
	    background-position: center;
	    -webkit-background-size: cover;
	    background-size: cover;
	    background-repeat: no-repeat;
	    padding: 0px 0 0px; 
	    z-index: 0;
	    overflow: hidden;
	}
</style>
@endsection()
@section('content')
<header class="header bg-fixed gradient-animation">
  <div class="container text-center">
    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">
        <h1 class="airdrop-amount text-center hidden-sm-down " style="font-size:50px;">Admin</h1>
        <!-- <h1 class="airdrop-amount text-center fs fs-80 hidden-md-up ">0.00</h1> -->
      </div>
    </div>
  </div>
</header>
<main class="main-content">
	<section class="section" id="token-profile">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-11">
					<div class="ibox-content" style="margin-left: 6%">
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
	</section>
</main>
@endsection()
@section('footerjs')
	<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			TOOLS = {}
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
			})

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
		})
	</script>
@endsection()
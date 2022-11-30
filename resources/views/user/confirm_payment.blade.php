<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

        <!-- Title -->
        <title>Mularoma - Confirm payment</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('images/logo_icon.svg')}}" type="image/x-icon"/>

        <!-- Icons css -->
        <link href="{{ asset('assetss/css/icons.css')}}" rel="stylesheet">

        <!-- Bootstrap css -->
        <link href="{{ asset('assetss/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!--  Right-sidemenu css -->
        <link href="{{ asset('assetss/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

        <!--  Custom Scroll bar-->
        <link href="{{ asset('assetss/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
        
        <script src="https://www.paypal.com/sdk/js?client-id=Aa6AIwYo9q4A6WYkMLhYgSKXHnFURGfxZQKN0-o7ghDzWXC7H7X3i2EQXvbFfX5ZjCBNx6-bGDLdUYw5&currency=USD"></script>

        <!--- Style css --->
        <link href="{{ asset('assetss/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('assetss/css/boxed.css')}}" rel="stylesheet">
        <link href="{{ asset('assetss/css/dark-boxed.css')}}" rel="stylesheet">

        <!--- Dark-mode css --->
        <link href="{{ asset('assetss/css/style-dark.css')}}" rel="stylesheet">

        <!---Skinmodes css-->
        <link href="{{ asset('assetss/css/skin-modes.css')}}" rel="stylesheet" />

        <!--- Animations css-->
        <link href="{{ asset('assetss/css/animate.css')}}" rel="stylesheet">

    </head>
    <body class="error-page1 main-body bg-light text-dark">

        <!-- Loader -->
        <div id="global-loader">
            <img src="{{ asset('assetss/img/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- /Loader -->

        <!-- Page -->
        <div class="page">

            <div class="container-fluid">
                <div class="row no-gutter">
                    <!-- The image half -->
                   
                    <!-- The content half -->
                    <div class="col-md-12 col-lg-12 col-xl-12 bg-white">
                        <div class="login d-flex align-items-center py-2">
                            <!-- Demo content-->
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                          <img src="{{ asset('images/logo.svg')}}" width="200" height="200">
                                        <div class="card-sigin">
                                            <div class="mb-5 d-flex">
                                                <a href="">
                                               
                                                </a>
                                                <!-- <h1 class="main-logo1 ms-1 me-0 my-auto tx-28">{{env('APP_NAME') }}</h1> -->
                                                
                                            </div>
                                            

                                            <div class="card-sigin">
                                                @if (\Session::has('error'))
                                                    <div class="alert alert-danger">
                                                        {!! \Session::get('error') !!}
                                                    </div>
                                                @endif
                                                <div class="alert alert-success" >
                                                   For any assistance please contact the admin via WhatsApp {{env('SUPPORT_LINE')}}
                                                </div>

                                                
                                            <div class="main-signup-header">
                                                <h2>Confirm payment</h2>
                                                <h5 class="fw-semibold mb-4">Await to input Mpesa pin</h5>
                                                <form method="GET" action="{{url('/store')}}">
                                                    @csrf
                                                   
                                                    <h5>After making the payment click the button below.</h5>                                             
                                            
                                                   <button class="btn btn-main-primary btn-block">Confirm</button>
                                                  
                                                </form>
                                               
                                            </div>
                                                
                                                
                                                
                                                <div class="count">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End -->
                        </div>
                    </div><!-- End -->
                </div>
            </div>

        </div>
        <!-- End Page -->

        <!-- JQuery min js -->
        <script src="{{ asset('assetss/plugins/jquery/jquery.min.js')}}"></script>

        <!-- Bootstrap Bundle js -->
        <script src="{{ asset('assetss/plugins/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{ asset('assetss/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Ionicons js -->
        <script src="{{ asset('assetss/plugins/ionicons/ionicons.js')}}"></script>

        <!-- Moment js -->
        <script src="{{ asset('assetss/plugins/moment/moment.js')}}"></script>
        
        <script>
      paypal.Buttons({

        // Sets up the transaction when a payment button is clicked
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
               value: document.getElementById('au').value
              }
            }]
          });
        },

        // Finalize the transaction after payer approval
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
                
                
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "https://deploy.elshadaigtinvestment.org/api/v1/response", true);
                    xhr.setRequestHeader('Content-Type', 'application/json');
                    xhr.send(JSON.stringify({
                         TransactionType:"paypal",
                         TransID:transaction.id,
                         TransTime:transaction.create_time,
                         TransAmount:5,
                         BusinessShortCode:1212,
                         BillRefNumber:"act#{{Auth::user()->id}}",
                         InvoiceNumber:"0",
                         ThirdPartyTransID:"0",
                         MSISDN:"254709895177",
                         FirstName:"John",
                         MiddleName:"Doe",
                         LastName:"Mike"
                    }));
                

            // When ready to go live, remove the alert and show a success message within this page. For example:
            // var element = document.getElementById('paypal-button-container');
            // element.innerHTML = '';
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');

    </script>

        <!-- P-scroll js -->
        <script src="{{ asset('assetss/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

        <!-- eva-icons js -->
        <script src="{{ asset('assetss/js/eva-icons.min.js')}}"></script>

        <!-- Rating js-->
        <script src="{{ asset('assetss/plugins/rating/jquery.rating-stars.js')}}"></script>
        <script src="{{ asset('assetss/plugins/rating/jquery.barrating.js')}}"></script>

        <!-- Custom Scroll bar Js-->
        <script src="{{ asset('assetss/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

        <!-- custom js -->
        <script src="{{ asset('assetss/js/custom.js')}}"></script>

    </body>
</html>


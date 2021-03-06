<!DOCTYPE html>
<html>
    <head>
        <title>Details</title>
        <link type="text/css" rel="stylesheet" href="{{asset('CSS/bootstrap.css')}}"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="_token" content="{{ csrf_token() }}"/>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-19500581-1', 'auto');
          ga('send', 'pageview');
        </script>
    </head>
    <body>
        @include('navbar',['active'=>'view'])
        <div id="content" class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-heading">Details of Registration</div>
                <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Details of Member 1 (Team Leader)</div>
                                    <div class="panel-body">   
                                     <p><strong>Name : </strong>{{$name_1}}</p>
                                     <p><strong>Email-ID : </strong>{{$email_1}}</p>   
                                     <p><strong>Contact No : </strong>{{$contact_number_1}}</p>   
                                     <p><strong>College : </strong>{{$college_1}}</p>   
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="panel panel-primary" id="member_2">
                                    <div class="panel-heading">Details of Member 2</div>
                                    <div class="panel-body">
                                      <p><strong>Name : </strong>@if($name_2){{$name_2}}@else----@endif</p>
                                      <p><strong>Email-ID : </strong>@if($email_2){{$email_2}}@else----@endif</p>   
                                      <p><strong>Contact No : </strong>@if($contact_number_2){{$contact_number_2}}@else----@endif</p>  
                                      <p><strong>College : </strong>@if($college_2){{$college_2}}@else----@endif</p>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="panel panel-primary" id="member_3">
                                    <div class="panel-heading">Details of Member 3</div>
                                    <div class="panel-body">
                                      <p><strong>Name : </strong>@if($name_3){{$name_3}}@else----@endif</p>
                                      <p><strong>Email-ID : </strong>@if($email_3){{$email_3}}@else----@endif</p>   
                                      <p><strong>Contact No : </strong>@if($contact_number_3){{$contact_number_3}}@else----@endif</p>  
                                      <p><strong>College : </strong>@if($college_3){{$college_3}}@else----@endif</p>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="panel panel-primary" id="member_4">
                                    <div class="panel-heading">Details of Member 4</div>
                                    <div class="panel-body">
                                      <p><strong>Name : </strong>@if($name_4){{$name_4}}@else----@endif</p>
                                      <p><strong>Email-ID : </strong>@if($email_4){{$email_4}}@else----@endif</p>   
                                      <p><strong>Contact No : </strong>@if($contact_number_4){{$contact_number_4}}@else----@endif</p>  
                                      <p><strong>College : </strong>@if($college_4){{$college_4}}@else----@endif</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">File Uploads</div>
                                    <div class="panel-body">
                                    @if($file_name)
                                    <a class="btn btn-primary" href="{{action('AdminController@download')}}?id={{$id}}">Download the File</a>
                                    @else
                                    NIL
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p align="right"><a class="btn btn-danger" href="{{action('AdminController@view')}}">Go Back</a></p>

                </div>
            </div>
        </div>
        @include('footer')
        <script type="text/javascript" src="{{asset('JS/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/fileinput.js')}}"></script>
    </body>
</html>

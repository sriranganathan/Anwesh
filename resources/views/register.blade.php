<!DOCTYPE html>
<html>
    <head>
        <title>Anwesh Registration</title>
        <link type="text/css" rel="stylesheet" href="{{asset('CSS/bootstrap.css')}}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{asset('CSS/fileinput.css')}}"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="_token" content="{{ csrf_token() }}"/>
        <style type="text/css">
            #abstract,#file
            {
                border: none; !important
                overflow: auto; !important
                outline: none; !important

                -webkit-box-shadow: none; !important
                -moz-box-shadow: none; !important
                box-shadow: none; !important
            }
            #form_container
            {
                background-color: transparent;
            }
        </style>
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
        @include('navbar',['active'=>'register'])
        <div id="content" class="container-fluid">
            <div class="well" id="form_container">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form method="post" action="{{action('HomeController@store')}}" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Details of Member 1 (Team Leader)</div>
                                    <div class="panel-body">
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:41%" id="name-addon-1">Name </span>
                                            <input type="text" id="name-1" name="name1" class="form-control" placeholder="Name" aria-describedby="name-addon-1" title="Name" value="{{old('name1')}}" required >
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:41%" id="email-addon-1">Email-ID</span>
                                            <input type="email" id="email-1" name="email1" class="form-control" placeholder="Email-ID" aria-describedby="email-addon-1" title="Email-ID" value="{{old('email1')}}" required >
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:41%" id="contact-addon-1">Contact No</span>
                                            <input type="text" id="contact-1" name="contact1" class="form-control" placeholder="Contact Number" aria-describedby="Contact-addon-1" pattern="[0-9]{10}" title="Mobile Number" value="{{old('contact1')}}" required>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:41%" id="college-addon-1">College</span>
                                            <input type="text" id="college-1" name="college1" class="form-control" placeholder="College Name" aria-describedby="college-addon-1"  title="College Name" value="{{old('college1')}}" required >
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Details of Member 2</div>
                                    <div class="panel-body">
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:41%" id="name-addon-2">Name </span>
                                            <input type="text" id="name-2" name="name2" class="form-control" onchange="name2change()" placeholder="Name" aria-describedby="name-addon-2" title="Name" value="{{old('name2')}}">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:41%" id="email-addon-2">Email-ID</span>
                                            <input type="email" id="email-2" name="email2" class="form-control" onchange="email2change()" placeholder="Email-ID" aria-describedby="email-addon-2" title="Email-ID" value="{{old('email2')}}">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:41%" id="contact-addon-2">Contact No</span>
                                            <input type="text" id="contact-2" name="contact2" class="form-control" onchange="contact2change()" placeholder="Contact Number" aria-describedby="Contact-addon-2" pattern="[0-9]{10}" title="Mobile Number" value="{{old('contact2')}}">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:41%" id="college-addon-2">College</span>
                                            <input type="text" id="college-2" name="college2" class="form-control" onchange="college2change()" placeholder="College Name" aria-describedby="college-addon-2"  title="College Name" value="{{old('college2')}}">
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Details of Member 3</div>
                                    <div class="panel-body">
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:41%" id="name-addon-3">Name </span>
                                            <input type="text" id="name-3" name="name3" class="form-control" onchange="name3change()" placeholder="Name" aria-describedby="name-addon-3" title="Name" value="{{old('name3')}}">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:41%" id="email-addon-3">Email-ID</span>
                                            <input type="email" id="email-3" name="email3" class="form-control" onchange="email3change()" placeholder="Email-ID" aria-describedby="email-addon-3" title="Email-ID" value="{{old('email3')}}">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:41%" id="contact-addon-3">Contact No</span>
                                            <input type="text" id="contact-3" name="contact3" class="form-control" onchange="contact3change()" placeholder="Contact Number" aria-describedby="Contact-addon-3" pattern="[0-9]{10}" title="Mobile Number" value="{{old('contact3')}}">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:41%" id="college-addon-3">College</span>
                                            <input type="text" id="college-3" name="college3" class="form-control" onchange="college3change()" placeholder="College Name" aria-describedby="college-addon-3"  title="College Name" value="{{old('college3')}}">
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Details of Member 4</div>
                                    <div class="panel-body">
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:41%" id="name-addon-4">Name </span>
                                            <input type="text" id="name-4" name="name4" class="form-control" onchange="name4change()" placeholder="Name" aria-describedby="name-addon-4" title="Name" value="{{old('name4')}}">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:41%" id="email-addon-4">Email-ID</span>
                                            <input type="email" id="email-4" name="email4" class="form-control" onchange="email4change()" placeholder="Email-ID" aria-describedby="email-addon-4" title="Email-ID" value="{{old('email4')}}">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:41%" id="contact-addon-4">Contact No</span>
                                            <input type="text" id="contact-4" name="contact4" class="form-control" onchange="contact4change()" placeholder="Contact Number" aria-describedby="Contact-addon-4" pattern="[0-9]{10}" title="Mobile Number" value="{{old('contact4')}}">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:41%" id="college-addon-4">College</span>
                                            <input type="text" id="college-4" name="college4" class="form-control" onchange="college4change()" placeholder="College Name" aria-describedby="college-addon-4"  title="College Name" value="{{old('college4')}}">
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Abstract (Max 1000 words)</div>
                                    <textarea id="abstract" name="abstract" class="form-control panel-body" rows="5" required>{{old('abstract')}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-8">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">File Uploads (If Any)</div>
                                    <input id="file" name="file" type="file" data-show-upload="false"  data-show-preview="false" class="file">
                                </div>
                            </div>
                            <div class="col-xs-4 col-xs-offset-4 col-sm-3 col-sm-offset-1" style="margin-top:40px;">
                                <center><input type="submit" class="btn btn-primary" value="Submit Registration"></center>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        @include('footer')
        <script type="text/javascript" src="{{asset('JS/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/fileinput.js')}}"></script>
        <script>
        function name2change()
        {
            var x = document.getElementById("name-2").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("contact-2").required = false;
                    document.getElementById("email-2").required = false;
                    document.getElementById("college-2").required = false;
                }
            else
                {
                    document.getElementById("contact-2").required = true;
                    document.getElementById("email-2").required = true;
                    document.getElementById("college-2").required = true;
                }
        }

        function contact2change()
        {
            var x = document.getElementById("contact-2").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("name-2").required = false;
                    document.getElementById("email-2").required = false;
                    document.getElementById("college-2").required = false;
                }
            else
                {
                    document.getElementById("name-2").required = true;
                    document.getElementById("email-2").required = true;
                    document.getElementById("college-2").required = true;
                }
        }
        function email2change()
        {
            var x = document.getElementById("email-2").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("name-2").required = false;
                    document.getElementById("contact-2").required = false;
                    document.getElementById("college-2").required = false;
                }
            else
                {
                    document.getElementById("name-2").required = true;
                    document.getElementById("contact-2").required = true;
                    document.getElementById("college-2").required = true;
                }
        }
        function college2change()
        {
            var x = document.getElementById("college-2").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("name-2").required = false;
                    document.getElementById("email-2").required = false;
                    document.getElementById("contact-2").required = false;
                }
            else
                {
                    document.getElementById("name-2").required = true;
                    document.getElementById("email-2").required = true;
                    document.getElementById("contact-2").required = true;
                }
        }
                function name3change()
        {
            var x = document.getElementById("name-3").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("contact-3").required = false;
                    document.getElementById("email-3").required = false;
                    document.getElementById("college-3").required = false;
                }
            else
                {
                    document.getElementById("contact-3").required = true;
                    document.getElementById("email-3").required = true;
                    document.getElementById("college-3").required = true;
                }
        }

        function contact3change()
        {
            var x = document.getElementById("contact-3").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("name-3").required = false;
                    document.getElementById("email-3").required = false;
                    document.getElementById("college-3").required = false;
                }
            else
                {
                    document.getElementById("name-3").required = true;
                    document.getElementById("email-3").required = true;
                    document.getElementById("college-3").required = true;
                }
        }
        function email3change()
        {
            var x = document.getElementById("email-3").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("name-3").required = false;
                    document.getElementById("contact-3").required = false;
                    document.getElementById("college-3").required = false;
                }
            else
                {
                    document.getElementById("name-3").required = true;
                    document.getElementById("contact-3").required = true;
                    document.getElementById("college-3").required = true;
                }
        }
        function college3change()
        {
            var x = document.getElementById("college-3").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("name-3").required = false;
                    document.getElementById("email-3").required = false;
                    document.getElementById("contact-3").required = false;
                }
            else
                {
                    document.getElementById("name-3").required = true;
                    document.getElementById("email-3").required = true;
                    document.getElementById("contact-3").required = true;
                }
        }
                function name4change()
        {
            var x = document.getElementById("name-4").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("contact-4").required = false;
                    document.getElementById("email-4").required = false;
                    document.getElementById("college-4").required = false;
                }
            else
                {
                    document.getElementById("contact-4").required = true;
                    document.getElementById("email-4").required = true;
                    document.getElementById("college-4").required = true;
                }
        }

        function contact4change()
        {
            var x = document.getElementById("contact-4").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("name-4").required = false;
                    document.getElementById("email-4").required = false;
                    document.getElementById("college-4").required = false;
                }
            else
                {
                    document.getElementById("name-4").required = true;
                    document.getElementById("email-4").required = true;
                    document.getElementById("college-4").required = true;
                }
        }
        function email4change()
        {
            var x = document.getElementById("email-4").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("name-4").required = false;
                    document.getElementById("contact-4").required = false;
                    document.getElementById("college-4").required = false;
                }
            else
                {
                    document.getElementById("name-4").required = true;
                    document.getElementById("contact-4").required = true;
                    document.getElementById("college-4").required = true;
                }
        }
        function college4change()
        {
            var x = document.getElementById("college-4").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("name-4").required = false;
                    document.getElementById("email-4").required = false;
                    document.getElementById("contact-4").required = false;
                }
            else
                {
                    document.getElementById("name-4").required = true;
                    document.getElementById("email-4").required = true;
                    document.getElementById("contact-4").required = true;
                }
        }

        $(document).ready(function(){
            name2change();contact2change();email2change();college2change();
            name3change();contact3change();email3change();college3change();
            name4change();contact4change();email4change();college4change();
        });
        </script>
    </body>
</html>

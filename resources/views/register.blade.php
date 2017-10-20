<!DOCTYPE html>
<html>
    <head>
        <title>Ingenium Registration</title>
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
        .input-group {
        width: 100%;
        }
        #form_container
        {
        background-color: transparent;
        }
        .vcenter
        {
        float: none;
        display: inline-block;
        vertical-align: middle;
        }
        @media screen and (min-width: 768px) and (max-width: 992px)
        {
        #submit_button{
        margin-left: 12.5%;
        }
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
                        <div class="col-xs-12 col-sm-8 col-lg-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Project Details</div>
                                <div class="panel-body">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="project-name-addon">Project Name </span>
                                        <input type="text" id="project-name" name="project_name" class="form-control" placeholder="Project Name" aria-describedby="project-name-addon" title="Project Name" value="{{old('project_name')}}" required>
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="project-category-1">Project Category</span>
                                        <div class="radio" style="margin-left: 5px">
                                            <label class="radio-inline"><input type="radio" id="project-category-1" name="project_category"  aria-describedby="project-category-1" title="Circuital" value="c" @if(old('project_category')=="c") checked @endif required checked>Circuital</label>
                                            <label class="radio-inline">
                                            <input type="radio" id="project-category-2" name="project_category"  aria-describedby="project-category-2" title="Non-Circuital" value="nc" @if(old('project_category')=="nc") checked @endif required>Non-Circuital</label>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="project-abstract-addon">Abstract </span>
                                        <input id="file" accept="application/pdf" name="file" type="file" aria-describedby="project-abstract-addon" data-show-upload="false"  data-show-preview="false" class="file" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Details of Member 1 (Team Leader)</div>
                                <div class="panel-body">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="name-addon-1">Name </span>
                                        <input type="text" id="name-1" name="name1" class="form-control" placeholder="Name" aria-describedby="name-addon-1" title="Name" value="{{old('name1')}}" required >
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="email-addon-1">Email-ID</span>
                                        <input type="email" id="email-1" name="email1" class="form-control" placeholder="Email-ID" aria-describedby="email-addon-1" title="Email-ID" value="{{old('email1')}}" required >
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="college-addon-1">College</span>
                                        <input type="text" id="college-1" name="college1" class="form-control" placeholder="College Name" aria-describedby="college-addon-1"  title="College Name" value="{{old('college1')}}" required >
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="branch-addon-1">Branch </span>
                                        <input type="text" id="branch-1" name="branch1" class="form-control" placeholder="Branch" aria-describedby="branch-addon-1" title="Branch" value="{{old('branch1')}}" required >
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="year-addon-1">Year </span>
                                        
                                        <select aria-describedby="year-addon-1" name="year1" id="year" required class="form-control">
                                            <option value="" disabled="" selected="selected">Choose Year</option>
                                            <option value="First Year" {{ (old("year1") == "First Year" ? "selected":"") }}>First Year </option>
                                            <option value="Second Year" {{old("year1")=="Second Year"?"selected":""}}>Second Year </option>
                                            <option value="Third Year" {{old("year1")=="Third Year"?"selected":""}}>Third Year </option>
                                            <option value="Fourth Year" {{old("year1")=="Fourth Year"?"selected":""}}>Fourth Year </option>
                                            <option value="Fifth Year" {{old("year1")=="Fifth Year"?"selected":""}}>Fifth Year </option>
                                        </select>
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="state-addon-1">State </span>
                                        <input type="text" id="state-1" name="state1" class="form-control" placeholder="State" aria-describedby="state-addon-1" title="State" value="{{old('state1')}}" required >
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="contact-addon-1">Contact No</span>
                                        <input type="text" id="contact-1" name="contact1" class="form-control" placeholder="Contact Number" aria-describedby="Contact-addon-1" pattern="[0-9]{10}" title="Mobile Number" value="{{old('contact1')}}" required>
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
                                        <input type="text" id="name-2" name="name2" class="form-control" placeholder="Name" aria-describedby="name-addon-2" title="Name" value="{{old('name2')}}">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="email-addon-2">Email-ID</span>
                                        <input type="email" id="email-2" name="email2" class="form-control"  placeholder="Email-ID" aria-describedby="email-addon-2" title="Email-ID" value="{{old('email2')}}">
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="college-addon-2">College </span>
                                        <input type="text" id="college-2" name="college2" class="form-control"  placeholder="College" aria-describedby="college-addon-2" title="College" value="{{old('college2')}}">
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="branch-addon-2">Branch </span>
                                        <input type="text" id="branch-2" name="branch2" class="form-control"  placeholder="Branch" aria-describedby="branch-addon-2" title="Branch" value="{{old('branch2')}}">
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="year-addon-2">Year </span>
                                        <select aria-describedby="year-addon-2" name="year2" id="year" class="form-control">
                                            <option value="" disabled="" selected="selected">Choose Year</option>
                                            <option value="First Year" {{ (old("year2") == "First Year" ? "selected":"") }}>First Year </option>
                                            <option value="Second Year" {{old("year2")=="Second Year"?"selected":""}}>Second Year </option>
                                            <option value="Third Year" {{old("year2")=="Third Year"?"selected":""}}>Third Year </option>
                                            <option value="Fourth Year" {{old("year2")=="Fourth Year"?"selected":""}}>Fourth Year </option>
                                            <option value="Fifth Year" {{old("year2")=="Fifth Year"?"selected":""}}>Fifth Year </option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="state-addon-2">State</span>
                                        <input type="text" id="state-2" name="state2" class="form-control"  placeholder="State" aria-describedby="state-addon-2"  title="State" value="{{old('state2')}}">
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="contact-addon-2">Contact No</span>
                                        <input type="text" id="contact-2" name="contact2" class="form-control"  placeholder="Contact Number" aria-describedby="Contact-addon-2" pattern="[0-9]{10}" title="Mobile Number" value="{{old('contact2')}}">
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
                                        <input type="text" id="name-3" name="name3" class="form-control"  placeholder="Name" aria-describedby="name-addon-3" title="Name" value="{{old('name3')}}">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="email-addon-3">Email-ID</span>
                                        <input type="email" id="email-3" name="email3" class="form-control"  placeholder="Email-ID" aria-describedby="email-addon-3" title="Email-ID" value="{{old('email3')}}">
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="college-addon-3">College </span>
                                        <input type="text" id="college-3" name="college3" class="form-control"  placeholder="College" aria-describedby="college-addon-3" title="College" value="{{old('college3')}}">
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="branch-addon-3">Branch </span>
                                        <input type="text" id="branch-3" name="branch3" class="form-control"  placeholder="Branch" aria-describedby="branch-addon-3" title="Branch" value="{{old('branch3')}}">
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="year-addon-3">Year </span>
                                        <select aria-describedby="year-addon-3" name="year3" id="year" class="form-control">
                                            <option value="" disabled="" selected="selected">Choose Year</option>
                                            <option value="First Year" {{ (old("year3") == "First Year" ? "selected":"") }}>First Year </option>
                                            <option value="Second Year" {{old("year3")=="Second Year"?"selected":""}}>Second Year </option>
                                            <option value="Third Year" {{old("year3")=="Third Year"?"selected":""}}>Third Year </option>
                                            <option value="Fourth Year" {{old("year3")=="Fourth Year"?"selected":""}}>Fourth Year </option>
                                            <option value="Fifth Year" {{old("year3")=="Fifth Year"?"selected":""}}>Fifth Year </option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="state-addon-3">State</span>
                                        <input type="text" id="state-3" name="state3" class="form-control"  placeholder="State" aria-describedby="state-addon-3"  title="State" value="{{old('state3')}}">
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="contact-addon-3">Contact No</span>
                                        <input type="text" id="contact-3" name="contact3" class="form-control"  placeholder="Contact Number" aria-describedby="Contact-addon-3" pattern="[0-9]{10}" title="Mobile Number" value="{{old('contact3')}}">
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
                                        <input type="text" id="name-4" name="name4" class="form-control"  placeholder="Name" aria-describedby="name-addon-4" title="Name" value="{{old('name4')}}">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="email-addon-4">Email-ID</span>
                                        <input type="email" id="email-4" name="email4" class="form-control"  placeholder="Email-ID" aria-describedby="email-addon-4" title="Email-ID" value="{{old('email4')}}">
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="college-addon-4">College </span>
                                        <input type="text" id="college-4" name="college4" class="form-control"  placeholder="College" aria-describedby="college-addon-4" title="College" value="{{old('college4')}}">
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="branch-addon-4">Branch </span>
                                        <input type="text" id="branch-4" name="branch4" class="form-control"  placeholder="Branch" aria-describedby="branch-addon-4" title="Branch" value="{{old('branch4')}}">
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="year-addon-4">Year </span>
                                        <select aria-describedby="year-addon-4" name="year4" id="year" class="form-control">
                                            <option value="" disabled="" selected="selected">Choose Year</option>
                                            <option value="First Year" {{ (old("year4") == "First Year" ? "selected":"") }}>First Year </option>
                                            <option value="Second Year" {{old("year4")=="Second Year"?"selected":""}}>Second Year </option>
                                            <option value="Third Year" {{old("year4")=="Third Year"?"selected":""}}>Third Year </option>
                                            <option value="Fourth Year" {{old("year4")=="Fourth Year"?"selected":""}}>Fourth Year </option>
                                            <option value="Fifth Year" {{old("year4")=="Fifth Year"?"selected":""}}>Fifth Year </option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="state-addon-4">State</span>
                                        <input type="text" id="state-4" name="state4" class="form-control"  placeholder="State" aria-describedby="state-addon-4"  title="State" value="{{old('state4')}}">
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="contact-addon-4">Contact No</span>
                                        <input type="text" id="contact-4" name="contact4" class="form-control"  placeholder="Contact Number" aria-describedby="Contact-addon-4" pattern="[0-9]{10}" title="Mobile Number" value="{{old('contact4')}}">
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-4 vcenter">
                            <center>{!! Recaptcha::render() !!}</center>
                        </div>
                        <div id="submit_button" class="col-xs-12 col-sm-1 vcenter" style="margin-top:20px;">
                            <center><input type="submit" class="btn btn-primary" value="Submit Registration" ></center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @include('footer')
        <script type="text/javascript" src="{{asset('JS/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/fileinput.js')}}"></script>
    </body>
</html>
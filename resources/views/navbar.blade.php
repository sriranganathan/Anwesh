<style>
#nav_bar
{
  border-bottom: #121212 1px solid;
}
</style>

<nav class="navbar navbar-default navbar-fixed-top" id="nav_bar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" style="margin:0;margin-right:15px;padding:0" href="{{action('HomeController@index')}}"><img style="height:100%;" src="{{asset('pragyan.png')}}"/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li id="home"><a href="{{action('HomeController@index')}}">Home</a></li> 
        <li id="register"><a href="{{action('HomeController@register')}}">Register</a></li>
        @if(Session::has('user_name'))
          <li id="view"><a href="{{action('AdminController@view')}}">View Registrations</a></li>
        @endif
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Session::has('user_name'))
        <li><a href="{{action('AdminController@logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<script>
document.getElementById("{{$active}}").className = "active";
</script>

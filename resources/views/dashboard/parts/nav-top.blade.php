<nav class="navbar navbar-default header navbar-fixed-top">
  <div class="col-md-12 nav-wrapper">
    <div class="navbar-header" style="width:100%;">
      <div class="opener-left-menu is-open">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
      </div>
        <a href="{!! route('dashboard') !!}" class="navbar-brand"> 
         <b>SGG</b>
        </a>

      

      <ul class="nav navbar-nav navbar-right user-nav">
        <li class="user-name"><span>{!! Auth::user()->name !!}</span></li>
          <li class="dropdown avatar-dropdown">
           <img src="./img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
           <ul class="dropdown-menu user-dropdown">
             <li><a href="{!! route('perfil') !!}"><span class="fa fa-user"></span> My Profile</a></li>
             <li role="separator" class="divider"></li>
             <li class="more">
              <ul>
                <li class="pull-right"><a href="{!! route('logout') !!}"><span class="fa fa-power-off "></span></a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li style="width: 20px"><span></span></li>
      </ul>
    </div>
  </div>
</nav>
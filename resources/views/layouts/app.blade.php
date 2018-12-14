<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>Fixed Header &amp; Mini Menu</title>

  <!--IE Compatibility modes-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!--Mobile first-->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/css/font-awesome.min.css">

  <!-- Metis core stylesheet -->
  <link rel="stylesheet" href="/css/main.min.css">

  <!-- metisMenu stylesheet -->
  <link rel="stylesheet" href="/css/metisMenu.min.css">
  <link rel="stylesheet" href="/css/prism.min.css">
  <link rel="stylesheet" href="/css/style-switcher.css">
  <link rel="stylesheet/less" type="text/css" href="/css/theme.less">
  <!--Modernizr-->
  <script src="/js/modernizr.min.js"></script>
</head>

<body class="sidebar-left-mini menu-affix">
  <div class="bg-dark dk" id="wrap">
    <div id="top">

      <!-- .navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">

          <!-- Brand and toggle get grouped for better mobile display -->
          <header class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="https://colorlib.com/polygon/metis/index.html" class="navbar-brand">
              <img src="/img/logo.png" alt="">
            </a>
          </header>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <div class="btn-group">
              <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip" class="btn btn-default btn-sm"
                id="toggleFullScreen">
                <i class="glyphicon glyphicon-fullscreen"></i>
              </a>
            </div>
            <div class="btn-group">
              <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip" class="btn btn-default btn-sm">
                <i class="fa fa-envelope"></i>
                <span class="label label-warning">5</span>
              </a>
              <a data-placement="bottom" data-original-title="Messages" href="#"
                data-toggle="tooltip" class="btn btn-default btn-sm">
                <i class="fa fa-comments"></i>
                <span class="label label-danger">4</span>
              </a>
              <a data-toggle="modal" data-original-title="Help" data-placement="bottom" class="btn btn-default btn-sm"
                href="#helpModal">
                <i class="fa fa-question"></i>
              </a>
            </div>
            <div class="btn-group">
              <a href="https://colorlib.com/polygon/metis/login.html" data-toggle="tooltip" data-original-title="Logout"
                data-placement="bottom" class="btn btn-metis-1 btn-sm">
                <i class="fa fa-power-off"></i>
              </a>
            </div>
            <div class="btn-group">
              <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip" class="btn btn-primary btn-sm toggle-left"
                id="menu-toggle">
                <i class="fa fa-bars"></i>
              </a>
              <a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip" class="btn btn-default btn-sm toggle-right">
                <span class="glyphicon glyphicon-comment"></span> </a>
            </div>
            <ul class="nav navbar-nav">
              <li> <a href="https://colorlib.com/polygon/metis/dashboard.html">Dashboard</a> </li>
              <li> <a href="https://colorlib.com/polygon/metis/table.html">Tables</a> </li>
              <li> <a href="https://colorlib.com/polygon/metis/file.html">File Manager</a> </li>
              <li class="dropdown ">
                <a href="#" class="dropdown-toggle"
                  data-toggle="dropdown">
                  Form Elements
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li> <a href="https://colorlib.com/polygon/metis/form-general.html">General</a> </li>
                  <li> <a href="https://colorlib.com/polygon/metis/form-validation.html">Validation</a> </li>
                  <li> <a href="https://colorlib.com/polygon/metis/form-wysiwyg.html">WYSIWYG</a> </li>
                  <li> <a href="https://colorlib.com/polygon/metis/form-wizard.html">Wizard &amp; File Upload</a> </li>
                </ul>
              </li>
            </ul><!-- /.nav -->
          </div>
        </div><!-- /.container-fluid -->
      </nav><!-- /.navbar -->
    </div><!-- /#top -->






    <!-- My Perfect Left Side (SideBar) -->
    <div id="left">
      <!-- #menu -->
      <ul id="menu" class="bg-blue dker">
        <li class="nav-header">Menu</li>
        <li class="nav-divider"></li>
        <li class="">
          <a href="https://colorlib.com/polygon/metis/dashboard.html">
            <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span>
          </a>
        </li>
        <li class="">
          <a href="javascript:;">
            <i class="fa fa-building "></i>
            <span class="link-title">Layouts</span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse" aria-expanded="false" style="height: 0px;">
            <li>
              <a href="https://colorlib.com/polygon/metis/boxed.html">
                <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/fixed-header-boxed.html">
                <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout &amp; Fixed Header </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/fixed-header-fixed-mini-sidebar.html">
                <i class="fa fa-angle-right"></i>&nbsp; Fixed Header and Fixed Mini Menu </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/fixed-header-menu.html">
                <i class="fa fa-angle-right"></i>&nbsp; Fixed Header &amp; Menu </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right"></i>&nbsp; Fixed Header &amp; Mini Menu </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/fixed-header.html">
                <i class="fa fa-angle-right"></i>&nbsp; Fixed Header </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/fixed-menu-boxed.html">
                <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout &amp; Fixed Menu </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/fixed-menu.html">
                <i class="fa fa-angle-right"></i>&nbsp; Fixed Menu </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/fixed-mini-sidebar.html">
                <i class="fa fa-angle-right"></i>&nbsp; Fixed &amp; Mini Menu </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/fxhmoxed.html">
                <i class="fa fa-angle-right"></i>&nbsp; Boxed and Fixed Header &amp; Nav </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/no-header-sidebar.html">
                <i class="fa fa-angle-right"></i>&nbsp; No Header &amp; Sidebars </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/no-header.html">
                <i class="fa fa-angle-right"></i>&nbsp; No Header </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/no-left-right-sidebar.html">
                <i class="fa fa-angle-right"></i>&nbsp; No Left &amp; Right Sidebar </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/no-left-sidebar-main-search.html">
                <i class="fa fa-angle-right"></i>&nbsp; No Left Sidebar &amp; Main Search </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/no-left-sidebar.html">
                <i class="fa fa-angle-right"></i>&nbsp; No Left Sidebar </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/no-main-search.html">
                <i class="fa fa-angle-right"></i>&nbsp; No Main Search </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/no-right-sidebar.html">
                <i class="fa fa-angle-right"></i>&nbsp; No Right Sidebar </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/sm.html">
                <i class="fa fa-angle-right"></i>&nbsp; Mini Sidebar </a>
            </li>
          </ul>
        </li>
        <li class="">
          <a href="javascript:;">
            <i class="fa fa-tasks"></i>
            <span class="link-title">Components</span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse">
            <li>
              <a href="https://colorlib.com/polygon/metis/bgcolor.html">
                <i class="fa fa-angle-right"></i>&nbsp; Bg Color </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/bgimage.html">
                <i class="fa fa-angle-right"></i>&nbsp; Bg Image </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/button.html">
                <i class="fa fa-angle-right"></i>&nbsp; Buttons </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/icon.html">
                <i class="fa fa-angle-right"></i>&nbsp; Icon </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/pricing.html">
                <i class="fa fa-angle-right"></i>&nbsp; Pricing Table </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/progress.html">
                <i class="fa fa-angle-right"></i>&nbsp; Progress </a>
            </li>
          </ul>
        </li>
        <li class="">
          <a href="javascript:;">
            <i class="fa fa-pencil"></i>
            <span class="link-title">
              Forms
            </span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse">
            <li>
              <a href="https://colorlib.com/polygon/metis/form-general.html">
                <i class="fa fa-angle-right"></i>&nbsp; Form General </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/form-validation.html">
                <i class="fa fa-angle-right"></i>&nbsp; Form Validation </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/form-wizard.html">
                <i class="fa fa-angle-right"></i>&nbsp; Form Wizard </a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/form-wysiwyg.html">
                <i class="fa fa-angle-right"></i>&nbsp; Form WYSIWYG </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="https://colorlib.com/polygon/metis/table.html">
            <i class="fa fa-table"></i>
            <span class="link-title">Tables</span>
          </a>
        </li>
        <li>
          <a href="https://colorlib.com/polygon/metis/file.html">
            <i class="fa fa-file"></i>
            <span class="link-title">
              File Manager
            </span>
          </a>
        </li>
        <li>
          <a href="https://colorlib.com/polygon/metis/typography.html">
            <i class="fa fa-font"></i>
            <span class="link-title">
              Typography
            </span> </a>
        </li>
        <li>
          <a href="https://colorlib.com/polygon/metis/maps.html">
            <i class="fa fa-map-marker"></i><span class="link-title">
              Maps
            </span>
          </a>
        </li>
        <li>
          <a href="https://colorlib.com/polygon/metis/chart.html">
            <i class="fa fa fa-bar-chart-o"></i>
            <span class="link-title">
              Charts
            </span>
          </a>
        </li>
        <li>
          <a href="https://colorlib.com/polygon/metis/calendar.html">
            <i class="fa fa-calendar"></i>
            <span class="link-title">
              Calendar
            </span>
          </a>
        </li>
        <li>
          <a href="javascript:;">
            <i class="fa fa-exclamation-triangle"></i>
            <span class="link-title">
              Error Pages
            </span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse">
            <li>
              <a href="https://colorlib.com/polygon/metis/403.html">
                <i class="fa fa-angle-right"></i>&nbsp;403</a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/404.html">
                <i class="fa fa-angle-right"></i>&nbsp;404</a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/405.html">
                <i class="fa fa-angle-right"></i>&nbsp;405</a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/500.html">
                <i class="fa fa-angle-right"></i>&nbsp;500</a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/503.html">
                <i class="fa fa-angle-right"></i>&nbsp;503</a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/offline.html">
                <i class="fa fa-angle-right"></i>&nbsp;offline</a>
            </li>
            <li>
              <a href="https://colorlib.com/polygon/metis/countdown.html">
                <i class="fa fa-angle-right"></i>&nbsp;Under Construction</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="https://colorlib.com/polygon/metis/grid.html">
            <i class="fa fa-columns"></i>
            <span class="link-title">
              Grid
            </span>
          </a>
        </li>
        <li>
          <a href="https://colorlib.com/polygon/metis/blank.html">
            <i class="fa fa-square-o"></i>
            <span class="link-title">
              Blank Page
            </span>
          </a>
        </li>
        <li class="nav-divider"></li>
        <li>
          <a href="https://colorlib.com/polygon/metis/login.html">
            <i class="fa fa-sign-in"></i>
            <span class="link-title">
              Login Page
            </span>
          </a>
        </li>
        <li class="active">
          <a href="javascript:;">
            <i class="fa fa-code"></i>
            <span class="link-title">
              Unlimited Level Menu
            </span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse in" aria-expanded="true" style="">
            <li class="active">
              <a href="javascript:;">Level 1 <span class="fa arrow"></span> </a>
              <ul class="collapse in" aria-expanded="true" style="">
                <li> <a href="javascript:;">Level 2</a> </li>
                <li> <a href="javascript:;">Level 2</a> </li>
                <li>
                  <a href="javascript:;">Level 2 <span class="fa arrow"></span> </a>
                  <ul class="collapse">
                    <li> <a href="javascript:;">Level 3</a> </li>
                    <li> <a href="javascript:;">Level 3</a> </li>
                    <li>
                      <a href="javascript:;">Level 3 <span class="fa arrow"></span> </a>
                      <ul class="collapse">
                        <li> <a href="javascript:;">Level 4</a> </li>
                        <li> <a href="javascript:;">Level 4</a> </li>
                        <li>
                          <a href="javascript:;">Level 4 <span class="fa arrow"></span> </a>
                          <ul class="collapse">
                            <li> <a href="javascript:;">Level 5</a> </li>
                            <li> <a href="javascript:;">Level 5</a> </li>
                            <li> <a href="javascript:;">Level 5</a> </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li> <a href="javascript:;">Level 4</a> </li>
                  </ul>
                </li>
                <li> <a href="javascript:;">Level 2</a> </li>
              </ul>
            </li>
            <li> <a href="javascript:;">Level 1</a> </li>
            <li class="">
              <a href="javascript:;">Level 1 <span class="fa arrow"></span> </a>
              <ul class="collapse" aria-expanded="false" style="height: 0px;">
                <li> <a href="javascript:;">Level 2</a> </li>
                <li> <a href="javascript:;">Level 2</a> </li>
                <li> <a href="javascript:;">Level 2</a> </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul><!-- /#menu -->


      <div class="media user-media bg-dark dker">
        <div class="user-media-toggleHover">
          <span class="fa fa-user"></span>
        </div>
        <div class="user-wrapper bg-dark">
          <a class="user-link" href="#">
            <img class="media-object img-thumbnail user-img" alt="User Picture" src="/img/user.gif">
            <span class="label label-danger user-label">16</span>
          </a>
          <div class="media-body">
            <h5 class="media-heading">Archie</h5>
            <ul class="list-unstyled user-info">
              <li> <a href="#">Administrator</a> </li>
              <li>Last Access :
                <br>
                <small>
                  <i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small>
              </li>
            </ul>
          </div>
        </div>
      </div>




    </div><!-- /#left -->
    <div id="content">
      <div class="outer">
        <div class="inner bg-light lter">
@yield('content')
        </div><!-- /.inner -->
      </div><!-- /.outer -->
    </div><!-- /#content -->
    <div id="right" class="bg-light lter">
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Warning!</strong> Best check yo self, youre not looking too good.
      </div>

      <!-- .well well-small -->
      <div class="well well-small dark">
        <ul class="list-unstyled">
          <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span>
          </li>
          <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span>
          </li>
          <li>Popularity <span class="dynamicbar pull-right">Loading..</span>
          </li>
          <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span>
          </li>
        </ul>
      </div><!-- /.well well-small -->

      <!-- .well well-small -->
      <div class="well well-small dark">
        <button class="btn btn-block">Default</button>
        <button class="btn btn-primary btn-block">Primary</button>
        <button class="btn btn-info btn-block">Info</button>
        <button class="btn btn-success btn-block">Success</button>
        <button class="btn btn-danger btn-block">Danger</button>
        <button class="btn btn-warning btn-block">Warning</button>
        <button class="btn btn-inverse btn-block">Inverse</button>
        <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
        <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
        <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
        <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
        <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
        <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
      </div><!-- /.well well-small -->

      <!-- .well well-small -->
      <div class="well well-small dark">
        <span>Default</span> <span class="pull-right"><small>20%</small> </span>
        <div class="progress xs">
          <div class="progress-bar progress-bar-info" style="width: 20%"></div>
        </div>
        <span>Success</span> <span class="pull-right"><small>40%</small> </span>
        <div class="progress xs">
          <div class="progress-bar progress-bar-success" style="width: 40%"></div>
        </div>
        <span>warning</span> <span class="pull-right"><small>60%</small> </span>
        <div class="progress xs">
          <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
        </div>
        <span>Danger</span> <span class="pull-right"><small>80%</small> </span>
        <div class="progress xs">
          <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
        </div>
      </div>
    </div><!-- /#right -->
  </div><!-- /#wrap -->
  <footer class="Footer bg-dark dker">
    <p>2014 © Metis Bootstrap Admin Template</p>
  </footer><!-- /#footer -->

  <!-- #helpModal -->
  <div id="helpModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- /#helpModal -->

  <!--jQuery -->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/prism.min.js"></script>

  <!--Bootstrap -->
  <script src="/js/bootstrap.min.js"></script>

  <!-- MetisMenu -->
  <script src="/js/metisMenu.min.js"></script>

  <!-- Screenfull -->
  <script src="/js/screenfull.min.js"></script>

  <!-- Metis core scripts -->
  <script src="/js/core.min.js"></script>

  <!-- Metis demo scripts -->
  <script src="/js/app.js"></script>
  <script src="/js/style-switcher.min.js"></script>
  <div id="getCSSModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Theme CSS</h4><code>Copy textarea content and paste into theme.css</code>
        </div>
        <div class="modal-body"><textarea class="form-control" name="cssbeautify" id="cssbeautify" readonly=""></textarea></div>
        <div class="modal-footer"><button aria-hidden="true" data-dismiss="modal" class="btn btn-danger">Close</button></div>
      </div>
    </div>
  </div>
  <div id="style-switcher" class="style-switcher hidden-xs">
    <h5>Style Switcher<a href="#" id="switcher-link"><i
          class="fa fa-cogs fa-2x"></i></a></h5>
    <div class="style-switcher-wrap">
      <h6>Background Colors</h6>
      <ul class="options" data-type="colors">
        <li><a data-color-hex="#0088CC" data-color-name="Blue" href="#"
            title="" style="background-color: rgb(0, 136, 204);" data-original-title="Blue"></a></li>
        <li><a data-color-hex="#4EB25C" data-color-name="Green" href="#"
            title="" style="background-color: rgb(78, 178, 92);" data-original-title="Green"></a></li>
        <li><a data-color-hex="#4A5B7D" data-color-name="Navy" href="#"
            title="" style="background-color: rgb(74, 91, 125);" data-original-title="Navy"></a></li>
        <li><a data-color-hex="#E05048" data-color-name="Red" href="#"
            title="" style="background-color: rgb(224, 80, 72);" data-original-title="Red"></a></li>
        <li><a data-color-hex="#B8A279" data-color-name="Beige" href="#"
            title="" style="background-color: rgb(184, 162, 121);" data-original-title="Beige"></a></li>
        <li><a data-color-hex="#c71c77" data-color-name="Pink" href="#"
            title="" style="background-color: rgb(199, 28, 119);" data-original-title="Pink"></a></li>
        <li><a data-color-hex="#734BA9" data-color-name="Purple" href="#"
            title="" style="background-color: rgb(115, 75, 169);" data-original-title="Purple"></a></li>
        <li><a data-color-hex="#2BAAB1" data-color-name="Cyan" href="#"
            title="" style="background-color: rgb(43, 170, 177);" data-original-title="Cyan"></a></li>
        <li><input class="color-picker-icon" id="colorSelector" type="color"></li>
      </ul>
      <hr>
      <div class="options-link">
        <h6>Font Colors</h6>
        <div class="btn-group" data-toggle="buttons"><label class="btn btn-xs btn-primary">White<input type="radio"
              name="fgcolor" value="#ffffff"></label><label class="btn btn-xs btn-danger">Black<input type="radio" name="fgcolor"
              value="#333333"></label></div>
      </div>
      <div class="pattern">
        <h6>Background Pattern</h6>
        <ul class="options" data-type="pattern">
          <li><a href="#" title="" data-pattern-image="brillant"
              style="background: url(&quot;assets/img/pattern/brillant.png&quot;) repeat;" data-original-title="Brillant"></a></li>
          <li><a href="#" title="" data-pattern-image="always_grey"
              style="background: url(&quot;assets/img/pattern/always_grey.png&quot;) repeat;" data-original-title="Always Grey"></a></li>
          <li><a href="#" title="" data-pattern-image="retina_wood"
              style="background: url(&quot;assets/img/pattern/retina_wood.png&quot;) repeat;" data-original-title="Retina Wood"></a></li>
          <li><a href="#" title="" data-pattern-image="low_contrast_linen"
              style="background: url(&quot;assets/img/pattern/low_contrast_linen.png&quot;) repeat;"
              data-original-title="Low Constrat Linen"></a></li>
          <li><a href="#" title="" data-pattern-image="egg_shell"
              style="background: url(&quot;assets/img/pattern/egg_shell.png&quot;) repeat;" data-original-title="Egg Shel"></a></li>
          <li><a href="#" title="" data-pattern-image="cartographer"
              style="background: url(&quot;assets/img/pattern/cartographer.png&quot;) repeat;" data-original-title="Cartographer"></a></li>
          <li><a href="#" title="" data-pattern-image="batthern"
              style="background: url(&quot;assets/img/pattern/batthern.png&quot;) repeat;" data-original-title="Batthern"></a></li>
          <li><a href="#" title="" data-pattern-image="noisy_grid"
              style="background: url(&quot;assets/img/pattern/noisy_grid.png&quot;) repeat;" data-original-title="Noisy Grid"></a></li>
          <li><a href="#" title="" data-pattern-image="diamond_upholstery"
              style="background: url(&quot;assets/img/pattern/diamond_upholstery.png&quot;) repeat;"
              data-original-title="Diamond Upholstery"></a></li>
          <li><a href="#" title="" data-pattern-image="greyfloral"
              style="background: url(&quot;assets/img/pattern/greyfloral.png&quot;) repeat;" data-original-title="Gray Floral"></a></li>
          <li><a href="#" title="" data-pattern-image="white_tiles"
              style="background: url(&quot;assets/img/pattern/white_tiles.png&quot;) repeat;" data-original-title="White Tiles"></a></li>
          <li><a href="#" title="" data-pattern-image="gplaypattern"
              style="background: url(&quot;assets/img/pattern/gplaypattern.png&quot;) repeat;" data-original-title="GPlay"></a></li>
          <li><a href="#" title="" data-pattern-image="arches"
              style="background: url(&quot;assets/img/pattern/arches.png&quot;) repeat;" data-original-title="Arches"></a></li>
          <li><a href="#" title="" data-pattern-image="purty_wood"
              style="background: url(&quot;assets/img/pattern/purty_wood.png&quot;) repeat;" data-original-title="Purty Wood"></a></li>
          <li><a href="#" title="" data-pattern-image="diagonal_striped_brick"
              style="background: url(&quot;assets/img/pattern/diagonal_striped_brick.png&quot;) repeat;"
              data-original-title="Diagonal Striped Brick"></a></li>
          <li><a href="#" title="" data-pattern-image="large_leather"
              style="background: url(&quot;assets/img/pattern/large_leather.png&quot;) repeat;" data-original-title="Large Leather"></a></li>
          <li><a href="#" title="" data-pattern-image="bo_play_pattern"
              style="background: url(&quot;assets/img/pattern/bo_play_pattern.png&quot;) repeat;" data-original-title="BO Play"></a></li>
          <li><a href="#" title="" data-pattern-image="irongrip"
              style="background: url(&quot;assets/img/pattern/irongrip.png&quot;) repeat;" data-original-title="Iron Grip"></a></li>
          <li><a href="#" title="" data-pattern-image="wood_1"
              style="background: url(&quot;assets/img/pattern/wood_1.png&quot;) repeat;" data-original-title="Dark Wood"></a></li>
          <li><a href="#" title="" data-pattern-image="pool_table"
              style="background: url(&quot;assets/img/pattern/pool_table.png&quot;) repeat;" data-original-title="Pool Table"></a></li>
          <li><a href="#" title="" data-pattern-image="crissXcross"
              style="background: url(&quot;assets/img/pattern/crissXcross.png&quot;) repeat;" data-original-title="crissXcross"></a></li>
          <li><a href="#" title="" data-pattern-image="rip_jobs"
              style="background: url(&quot;assets/img/pattern/rip_jobs.png&quot;) repeat;" data-original-title="R.I.P Steve Jobs"></a></li>
          <li><a href="#" title="" data-pattern-image="random_grey_variations"
              style="background: url(&quot;assets/img/pattern/random_grey_variations.png&quot;) repeat;"
              data-original-title="Random Grey Variations"></a></li>
          <li><a href="#" title="" data-pattern-image="carbon_fibre"
              style="background: url(&quot;assets/img/pattern/carbon_fibre.png&quot;) repeat;" data-original-title="Carbon Fibre"></a></li>
        </ul>
      </div>
      <div class="options-link">
        <hr><a href="#">Reset</a><a href="#">Get
          CSS</a></div>
    </div>
  </div>
</body>

</html>
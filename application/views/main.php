      <div class="main-content">
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content page-thin">
          <div class="row">
            <div class="col-xlg-7 col-lg-7">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel bg-dark widget-map">
                    <div class="panel-header">
                      <h3><i class="icon-globe-alt"></i> <strong>Interactif</strong> Map</h3>
                    </div>
                    <div class="panel-content widget-full">
                      <div class="row">
                        <div class="col-md-12">
                          <div id="map"></div>
                        </div>
                        <div class="col-md-3 c-white">
                          <div id="listdiv"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xlg-3 col-lg-5">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel no-bd bd-3 panel-stat">
                    <div class="panel-header">
                      <h3><i class="icon-graph"></i> <strong>Visitors</strong> Statistic</h3>
                      <div class="control-btn">
                        <a href="#" class="panel-reload hidden"><i class="icon-reload"></i></a>
                      </div>
                    </div>
                    <div class="panel-body p-15 p-b-0">
                      <div class="row m-b-10">
                        <div class="col-xs-3 big-icon">
                          <i class="icon-users"></i>
                        </div>
                        <div class="col-xs-9">
                          <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="60">
                            <div>
                              <small class="stat-title">Visits today</small>
                              <h1 class="f-40 m-0 w-300">25 610</h1>
                            </div>
                            <div>
                              <small class="stat-title">Visits yesterday</small>
                              <h1 class="f-40 m-0 w-300">22 420</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-6">
                          <small class="stat-title">New Visitors</small>
                          <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="23">
                            <div>
                              <h3 class="f-20 m-0 w-300">37.5%</h3>
                            </div>
                            <div>
                              <h3 class="f-20 m-0 w-300">34.2%</h3>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <small class="stat-title">Bounce Rate</small>
                          <div class="live-tile f-right" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="23">
                            <div>
                              <h3 class="f-20 t-right m-0 w-500">5.6%</h3>
                            </div>
                            <div>
                              <h3 class="f-20 t-right m-0 w-500">7.4%</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel-stat-chart">
                      <canvas id="visitors-chart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row" style="display:none">
                <div class="col-md-12">
                  <div class="panel no-bd bd-3 panel-stat">
                    <div class="panel-body bg-red p-15">
                      <div class="row m-b-10">
                        <div class="col-xs-3 big-icon">
                          <i class="icon-equalizer"></i>
                        </div>
                        <div class="col-xs-9">
                          <small class="stat-title">ORDERS THIS MONTH</small>
                          <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="56">
                            <div>
                              <h1 class="f-40 m-0 w-300">148</h1>
                            </div>
                            <div>
                              <h1 class="f-40 m-0 w-300">+28%</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-6">
                          <small class="stat-title">Last month</small>
                          <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="23">
                            <div>
                              <h3 class="f-20 m-0 w-300">126</h3>
                            </div>
                            <div>
                              <h3 class="f-20 m-0 w-300">$12,545</h3>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <small class="stat-title">Last week</small>
                          <div class="live-tile f-right" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="23">
                            <div>
                              <h3 class="t-right f-20 m-0 w-500">43</h3>
                            </div>
                            <div>
                              <h3 class="t-right f-20 m-0 w-500">$4,237</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xlg-2 hidden-lg">
              <div class="row">
                <div class="col-md-12">
                  <ul class="jquery-clock small" data-jquery-clock="">
                    <li class="jquery-clock-pin"></li>
                    <li class="jquery-clock-sec"></li>
                    <li class="jquery-clock-min"></li>
                    <li class="jquery-clock-hour"></li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="widget-progress-bar">
                    <div class="clearfix">
                      <div class="title">Profil Complete</div>
                      <div class="number">82%</div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary stat1" data-transitiongoal="82"></div>
                    </div>
                    <div class="clearfix">
                      <div class="title">Answer Emails</div>
                      <div class="number">43%</div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary stat2" data-transitiongoal="43"></div>
                    </div>
                    <div class="clearfix">
                      <div class="title">Server availability</div>
                      <div class="number">93%</div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary stat3" data-transitiongoal="93"></div>
                    </div>
                    <div class="clearfix">
                      <div class="title">CPU Usage</div>
                      <div class="number">76%</div>
                    </div>
                    <div class="progress m-b-0">
                      <div class="progress-bar progress-bar-primary stat4" data-transitiongoal="76"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xlg-4">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-graph"></i> <strong>Financial</strong> Stock</h3>
                </div>
                <div class="panel-content widget-full widget-stock stock1">
                  <div class="tabs tabs-linetriangle">
                    <ul class="nav nav-tabs nav-4">
                      <li class="lines-3">
                        <a href="#microsoft-tab" id="microsoft" data-toggle="tab">
                        <span class="title">Microsoft</span>
                        <span class="c-gray"><strong>23.32</strong></span>
                        <span class="c-green">+6.214%</span>
                        </a>
                      </li>
                      <li class="active lines-3">
                        <a href="#sony-tab" id="sony" data-toggle="tab">
                        <span class="title">Sony</span>
                        <span class="c-gray"><strong>23.32</strong></span>
                        <span class="c-red">-8.425%</span>
                        </a>
                      </li>
                      <li class="lines-3">
                        <a href="#samsung-tab"  id="samsung" data-toggle="tab">
                        <span class="title">Samsung</span>
                        <span class="c-gray"><strong>23.32</strong></span>
                        <span class="c-green">+2.035%</span>
                        </a>
                      </li>
                      <li class="lines-3">
                        <a href="#apple-tab"  id="apple" data-toggle="tab">
                        <span class="title">Apple</span>
                        <span class="c-gray"><strong>23.32</strong></span>
                        <span class="c-green">+1.245%</span>
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane" id="microsoft-tab">
                        <div id="stock-microsoft"></div>
                      </div>
                      <div class="tab-pane active" id="sony-tab">
                        <div id="stock-sony"></div>
                      </div>
                      <div class="tab-pane" id="samsung-tab">
                        <div id="stock-samsung"></div>
                      </div>
                      <div class="tab-pane" id="apple-tab">
                        <div id="stock-apple"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xlg-2">
              <div class="row">
                <div class="col-xlg-12 col-lg-4 col-sm-4">
                  <div class="panel">
                    <div class="panel-content widget-small bg-green">
                      <div class="title">
                        <h1>Virgin Mobile</h1>
                        <p>Last month trending</p>
                        <span>-8.452%</span>
                      </div>
                      <div class="content">
                        <div id="stock-virgin-sm"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xlg-12 col-lg-4 col-sm-4">
                  <div class="panel">
                    <div class="panel-content widget-small bg-purple">
                      <div class="title">
                        <h1>Ebay Inc</h1>
                        <p>Last month trending</p>
                        <span>+2.124%</span>
                      </div>
                      <div class="content">
                        <div id="stock-ebay-sm"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xlg-12 col-lg-4 col-sm-4">
                  <div class="panel">
                    <div class="panel-content widget-small bg-primary">
                      <div class="title">
                        <h1>Facebook Corp.</h1>
                        <p>Last month trending</p>
                        <span>+1.054%</span>
                      </div>
                      <div class="content">
                        <div id="stock-facebook-sm"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xlg-6">
              <div class="panel">
                <div class="panel-content widget-full widget-stock stock2">
                  <div class="tab_right">
                    <ul class="nav nav-tabs">
                      <li class="lines-3">
                        <a href="#yahoo-tab" id="yahoo" data-toggle="tab" data-color="green" data-value="+6.214%">
                          <div class="clearfix">
                            <span class="title pull-left">YHOO</span>
                            <span class="pull-right">Yahoo Inc</span>
                          </div>
                          <div class="clearfix">
                            <span class="c-gray pull-left"><strong>23.32</strong></span>
                            <span class="c-green pull-right">+6.214%</span>
                          </div>
                        </a>
                      </li>
                      <li class="lines-3 active">
                        <a href="#google-tab" id="google" data-toggle="tab" data-color="red" data-value="-8.425%">
                          <div class="clearfix">
                            <span class="title pull-left">GOOG</span>
                            <span class="pull-right">Google Inc</span>
                          </div>
                          <div class="clearfix">
                            <span class="c-gray pull-left"><strong>22.32</strong></span>
                            <span class="c-red pull-right">-8.425%</span>
                          </div>
                        </a>
                      </li>
                      <li class="lines-3">
                        <a href="#nokia-tab"  id="nokia" data-toggle="tab" data-color="green" data-value="+2.035%">
                          <div class="clearfix">
                            <span class="title pull-left">NOK</span>
                            <span class="pull-right">Nokia Inc</span>
                          </div>
                          <div class="clearfix">
                            <span class="c-gray pull-left"><strong>25.32</strong></span>
                            <span class="c-green pull-right">+2.035%</span>
                          </div>
                        </a>
                      </li>
                      <li class="lines-3">
                        <a href="#htc-tab"  id="htc" data-toggle="tab" data-color="red" data-value="-1.052%">
                          <div class="clearfix">
                            <span class="title pull-left">HTC</span>
                            <span class="pull-right">HTC Inc</span>
                          </div>
                          <div class="clearfix">
                            <span class="c-gray pull-left"><strong>18.96</strong></span>
                            <span class="c-red pull-right">-1.052%</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="title-stock">
                        <h1>Google Inc</h1>
                        <span class="c-red">-8.425%</span>
                      </div>
                      <div class="tab-pane" id="yahoo-tab" style="display:none">
                        <div id="stock-yahoo"></div>
                        <div class="company-info">Yahoo! Inc. is an American multinational Internet corporation headquartered in Sunnyvale, California. It is globally known for its Web portal, search engine Yahoo Search, and related services.</div>
                      </div>
                      <div class="tab-pane active" id="google-tab">
                        <div id="stock-google"></div>
                        <div class="company-info">Google is a United States-headquartered, multinational corporation specializing in Internet-related services and products. These include online advertising technologies, search, cloud computing, and software.</div>
                      </div>
                      <div class="tab-pane" id="nokia-tab" style="display:none">
                        <div id="stock-nokia"></div>
                        <div class="company-info">Nokia is a Finnish multinational communications and information technology company. Nokia employed 90,000 people across 120 countries, conducts sales in more than 150 countries and reported annual revenues of around €12.7 billion.</div>
                      </div>
                      <div class="tab-pane" id="htc-tab" style="display:none">
                        <div id="stock-htc"></div>
                        <div class="company-info">HTC Corporation is a Taiwanese manufacturer of smartphones and tablets. Founded in 1997, HTC began designing and manufacturing devices such as mobile phones, touchscreen phones, and PDAs based on Windows Mobile OS.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-list"></i> <strong>Todo</strong> List</h3>
                </div>
                <div class="panel-content">
                  <ul class="todo-list ui-sortable">
                    <li class="high">
                      <span class="span-check">
                      <input id="task-1" type="checkbox" data-checkbox="icheckbox_square-blue" />
                      <label for="task-1"></label>
                      </span>
                      <span class="todo-task">Send email to Bob Linch</span>
                      <div class="todo-date clearfix">
                        <div class="completed-date"></div>
                        <div class="due-date">Due on <span class="due-date-span">15 December 2014</span></div>
                      </div>
                      <span class="todo-options pull-right">
                      <a href="javascript:;" class="todo-delete"><i class="icons-office-52"></i></a>
                      </span>
                      <div class="todo-tags pull-right">
                        <div class="label label-success">Work</div>
                      </div>
                    </li>
                    <li>
                      <span class="span-check">
                      <input id="task-2" type="checkbox" data-checkbox="icheckbox_square-blue"/>
                      <label for="task-2"></label>
                      </span>
                      <span class="todo-task">Call datacenter for servers</span>
                      <div class="todo-date clearfix">
                        <div class="completed-date"></div>
                        <div class="due-date">Due on <span class="due-date-span">7 January</span></div>
                      </div>
                      <span class="todo-options pull-right">
                      <a href="javascript:;" class="todo-delete"><i class="icons-office-52"></i></a>
                      </span>
                    </li>
                    <li class="low">
                      <span class="span-check">
                      <input id="task-3" type="checkbox" data-checkbox="icheckbox_square-blue"/>
                      <label for="task-3"></label>
                      </span>
                      <span class="todo-task">Remove all unused icons</span>
                      <div class="todo-date clearfix">
                        <div class="completed-date"></div>
                        <div class="due-date">Due on <span class="due-date-span">5 January</span></div>
                      </div>
                      <span class="todo-options pull-right">
                      <a href="javascript:;" class="todo-delete"><i class="icons-office-52"></i></a>
                      </span>
                    </li>
                    <li class="medium">
                      <span class="span-check">
                      <input id="task-4" type="checkbox" data-checkbox="icheckbox_square-blue"/>
                      <label for="task-4"></label>
                      </span>
                      <span class="todo-task">Read my todo list</span>
                      <div class="todo-date clearfix">
                        <div class="completed-date"></div>
                        <div class="due-date">Due on <span class="due-date-span">4 January</span></div>
                      </div>
                      <span class="todo-options pull-right">
                      <a href="javascript:;" class="todo-delete"><i class="icons-office-52"></i></a>
                      </span>
                      <div class="todo-tags pull-right">
                        <div class="label label-info">Tuesday</div>
                      </div>
                    </li>
                    <li>
                      <span class="span-check">
                      <input id="task-6" type="checkbox" data-checkbox="icheckbox_square-blue"/>
                      <label for="task-6"></label>
                      </span>
                      <span class="todo-task">Have a breakfeast before 12</span>
                      <div class="todo-date clearfix">
                        <div class="completed-date"></div>
                        <div class="due-date">Due on <span class="due-date-span">1 January</span></div>
                      </div>
                      <span class="todo-options pull-right">
                      <a href="javascript:;" class="todo-delete"><i class="icons-office-52"></i></a>
                      </span>
                    </li>
                  </ul>
                  <div class="clearfix m-t-10">
                    <div class="pull-left">
                      <button type="button" class="btn btn-sm btn-default check-all-tasks">Check All Done</button>
                    </div>
                    <div class="pull-right">
                      <button type="button" class="btn btn-sm btn-dark add-task">Add Task</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portlets">
              <div class="panel widget-weather"></div>
              <div class="panel widget-member clearfix">
                <div class="col-xs-3">
                  <img src="assets/images/avatars/user2.png" alt="avatar 12" class="pull-left img-responsive">
                </div>
                <div class="col-xs-9">
                  <h3 class="m-t-0 member-name"><strong>John Snow</strong></h3>
                  <p class="member-job">Software Engineer</p>
                  <div class="row">
                    <div class="col-xlg-6">
                      <p><i class="icon-envelope c-gray-light p-r-10"></i> cameso@it.com</p>
                      <p><i class="fa fa-facebook c-gray-light p-r-10"></i> fb.com/jsnow</p>
                    </div>
                    <div class="col-xlg-6 align-right">
                      <p><i class="icon-calendar c-gray-light p-r-10"></i> 6 may 2014</p>
                      <p><i class="icon-target c-gray-light p-r-10"></i> New York</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portlets">
              <div class="widget widget_calendar bg-dark">
                <div class="multidatepicker"></div>
              </div>
              <div class="panel m-t-0">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-basket"></i> <strong>Sales</strong> Volume Stats</h3>
                </div>
                <div class="panel-content p-t-0 p-b-0">
                  <div id="bar-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer">
            <div class="copyright">
              <p class="pull-left sm-pull-reset">
                <span>Copyright <span class="copyright">©</span> 2015 </span>
                <span>THEMES LAB</span>.
                <span>All rights reserved. </span>
              </p>
              <p class="pull-right sm-pull-reset">
                <span><a href="#" class="m-r-10">Support</a> | <a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
              </p>
            </div>
          </div>
        </div>
        <!-- END PAGE CONTENT -->
      </div>
      <!-- END MAIN CONTENT -->
      <!-- BEGIN BUILDER -->
      <div class="builder hidden-sm hidden-xs" id="builder">
        <a class="builder-toggle"><i class="icon-wrench"></i></a>
        <div class="inner">
          <div class="builder-container">
            <a href="#" class="btn btn-sm btn-default" id="reset-style">reset default style</a>
            <h4>Layout options</h4>
            <div class="layout-option">
              <span> RTL</span>
              <label class="switch pull-right">
              <input data-layout="rtl" id="switch-rtl" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span> Fixed Sidebar</span>
              <label class="switch pull-right">
              <input data-layout="sidebar" id="switch-sidebar" type="checkbox" class="switch-input" checked>
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span> Sidebar on Hover</span>
              <label class="switch pull-right">
              <input data-layout="sidebar-hover" id="switch-sidebar-hover" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span> Submenu on Hover</span>
              <label class="switch pull-right">
              <input data-layout="submenu-hover" id="switch-submenu-hover" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span> Sidebar on Top</span>
              <label class="switch pull-right">
              <input data-layout="sidebar-top" id="switch-sidebar-top" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span>Fixed Topbar</span>
              <label class="switch pull-right">
              <input data-layout="topbar" id="switch-topbar" type="checkbox" class="switch-input" checked>
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span>Boxed Layout</span>
              <label class="switch pull-right">
              <input data-layout="boxed" id="switch-boxed" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <h4 class="border-top">Color</h4>
            <div class="row">
              <div class="col-xs-12">
                <div class="theme-color bg-dark" data-main="default" data-color="#2B2E33"></div>
                <div class="theme-color background-primary" data-main="primary" data-color="#319DB5"></div>
                <div class="theme-color bg-red" data-main="red" data-color="#C75757"></div>
                <div class="theme-color bg-green" data-main="green" data-color="#1DA079"></div>
                <div class="theme-color bg-orange" data-main="orange" data-color="#D28857"></div>
                <div class="theme-color bg-purple" data-main="purple" data-color="#B179D7"></div>
                <div class="theme-color bg-blue" data-main="blue" data-color="#4A89DC"></div>
              </div>
            </div>
            <h4 class="border-top">Theme</h4>
            <div class="row row-sm">
              <div class="col-xs-6">
                <div class="theme clearfix sdtl" data-theme="sdtl">
                  <div class="header theme-left"></div>
                  <div class="header theme-right-light"></div>
                  <div class="theme-sidebar-dark"></div>
                  <div class="bg-light"></div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="theme clearfix sltd" data-theme="sltd">
                  <div class="header theme-left"></div>
                  <div class="header theme-right-dark"></div>
                  <div class="theme-sidebar-light"></div>
                  <div class="bg-light"></div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="theme clearfix sdtd" data-theme="sdtd">
                  <div class="header theme-left"></div>
                  <div class="header theme-right-dark"></div>
                  <div class="theme-sidebar-dark"></div>
                  <div class="bg-light"></div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="theme clearfix sltl" data-theme="sltl">
                  <div class="header theme-left"></div>
                  <div class="header theme-right-light"></div>
                  <div class="theme-sidebar-light"></div>
                  <div class="bg-light"></div>
                </div>
              </div>
            </div>
            <h4 class="border-top">Background</h4>
            <div class="row">
              <div class="col-xs-12">
                <div class="bg-color bg-clean" data-bg="clean" data-color="#F8F8F8"></div>
                <div class="bg-color bg-lighter" data-bg="lighter" data-color="#EFEFEF"></div>
                <div class="bg-color bg-light-default" data-bg="light-default" data-color="#E9E9E9"></div>
                <div class="bg-color bg-light-blue" data-bg="light-blue" data-color="#E2EBEF"></div>
                <div class="bg-color bg-light-purple" data-bg="light-purple" data-color="#E9ECF5"></div>
                <div class="bg-color bg-light-dark" data-bg="light-dark" data-color="#DCE1E4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END BUILDER -->
    </section>
    <!-- BEGIN QUICKVIEW SIDEBAR -->
    <div id="quickview-sidebar">
      <div class="quickview-header">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#chat" data-toggle="tab">Chat</a></li>
          <li><a href="#notes" data-toggle="tab">Notes</a></li>
          <li><a href="#settings" data-toggle="tab" class="settings-tab">Settings</a></li>
        </ul>
      </div>
      <div class="quickview">
        <div class="tab-content">
          <div class="tab-pane fade active in" id="chat">
            <div class="chat-body current">
              <div class="chat-search">
                <form class="form-inverse" action="#" role="search">
                  <div class="append-icon">
                    <input type="text" class="form-control" placeholder="Search contact...">
                    <i class="icon-magnifier"></i>
                  </div>
                </form>
              </div>
              <div class="chat-groups">
                <div class="title">GROUP CHATS</div>
                <ul>
                  <li><i class="turquoise"></i> Favorites</li>
                  <li><i class="turquoise"></i> Office Work</li>
                  <li><i class="turquoise"></i> Friends</li>
                </ul>
              </div>
              <div class="chat-list">
                <div class="title">FAVORITES</div>
                <ul>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="assets/images/avatars/avatar13.png" alt="avatar" />
                    </div>
                    <div class="user-details">
                      <div class="user-name">Bobby Brown</div>
                      <div class="user-txt">On the road again...</div>
                    </div>
                    <div class="user-status">
                      <i class="online"></i>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="assets/images/avatars/avatar5.png" alt="avatar" />
                      <div class="pull-right badge badge-danger">3</div>
                    </div>
                    <div class="user-details">
                      <div class="user-name">Alexa Johnson</div>
                      <div class="user-txt">Still at the beach</div>
                    </div>
                    <div class="user-status">
                      <i class="away"></i>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="assets/images/avatars/avatar10.png" alt="avatar" />
                    </div>
                    <div class="user-details">
                      <div class="user-name">Bobby Brown</div>
                      <div class="user-txt">On stage...</div>
                    </div>
                    <div class="user-status">
                      <i class="busy"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="chat-list">
                <div class="title">FRIENDS</div>
                <ul>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="assets/images/avatars/avatar7.png" alt="avatar" />
                      <div class="pull-right badge badge-danger">3</div>
                    </div>
                    <div class="user-details">
                      <div class="user-name">James Miller</div>
                      <div class="user-txt">At work...</div>
                    </div>
                    <div class="user-status">
                      <i class="online"></i>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="assets/images/avatars/avatar11.png" alt="avatar" />
                    </div>
                    <div class="user-details">
                      <div class="user-name">Fred Smith</div>
                      <div class="user-txt">Waiting for tonight</div>
                    </div>
                    <div class="user-status">
                      <i class="offline"></i>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="assets/images/avatars/avatar8.png" alt="avatar" />
                    </div>
                    <div class="user-details">
                      <div class="user-name">Ben Addams</div>
                      <div class="user-txt">On my way to NYC</div>
                    </div>
                    <div class="user-status">
                      <i class="offline"></i>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="chat-conversation">
              <div class="conversation-header">
                <div class="user clearfix">
                  <div class="chat-back">
                    <i class="icon-action-undo"></i>
                  </div>
                  <div class="user-details">
                    <div class="user-name">James Miller</div>
                    <div class="user-txt">On the road again...</div>
                  </div>
                </div>
              </div>
              <div class="conversation-body">
                <ul>
                  <li class="img">
                    <div class="chat-detail">
                      <span class="chat-date">today, 10:38pm</span>
                      <div class="conversation-img">
                        <img src="assets/images/avatars/avatar4.png" alt="avatar 4"/>
                      </div>
                      <div class="chat-bubble">
                        <span>Hi you!</span>
                      </div>
                    </div>
                  </li>
                  <li class="img">
                    <div class="chat-detail">
                      <span class="chat-date">today, 10:45pm</span>
                      <div class="conversation-img">
                        <img src="assets/images/avatars/avatar4.png" alt="avatar 4"/>
                      </div>
                      <div class="chat-bubble">
                        <span>Are you there?</span>
                      </div>
                    </div>
                  </li>
                  <li class="img">
                    <div class="chat-detail">
                      <span class="chat-date">today, 10:51pm</span>
                      <div class="conversation-img">
                        <img src="assets/images/avatars/avatar4.png" alt="avatar 4"/>
                      </div>
                      <div class="chat-bubble">
                        <span>Send me a message when you come back.</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="conversation-message">
                <input type="text" placeholder="Your message..." class="form-control form-white send-message" />
                <div class="item-footer clearfix">
                  <div class="footer-actions">
                    <i class="icon-rounded-marker"></i>
                    <i class="icon-rounded-camera"></i>
                    <i class="icon-rounded-paperclip-oblique"></i>
                    <i class="icon-rounded-alarm-clock"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="notes">
            <div class="list-notes current withScroll">
              <div class="notes ">
                <div class="row">
                  <div class="col-md-12">
                    <div id="add-note">
                      <i class="fa fa-plus"></i>ADD A NEW NOTE
                    </div>
                  </div>
                </div>
                <div id="notes-list">
                  <div class="note-item media current fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Reset my account password</p>
                      </div>
                      <p class="note-desc hidden">Break security reasons.</p>
                      <p><small>Tuesday 6 May, 3:52 pm</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Call John</p>
                      </div>
                      <p class="note-desc hidden">He have my laptop!</p>
                      <p><small>Thursday 8 May, 2:28 pm</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Buy a car</p>
                      </div>
                      <p class="note-desc hidden">I'm done with the bus</p>
                      <p><small>Monday 12 May, 3:43 am</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Don't forget my notes</p>
                      </div>
                      <p class="note-desc hidden">I have to read them...</p>
                      <p><small>Wednesday 5 May, 6:15 pm</small></p>
                    </div>
                  </div>
                  <div class="note-item media current fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Reset my account password</p>
                      </div>
                      <p class="note-desc hidden">Break security reasons.</p>
                      <p><small>Tuesday 6 May, 3:52 pm</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Call John</p>
                      </div>
                      <p class="note-desc hidden">He have my laptop!</p>
                      <p><small>Thursday 8 May, 2:28 pm</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Buy a car</p>
                      </div>
                      <p class="note-desc hidden">I'm done with the bus</p>
                      <p><small>Monday 12 May, 3:43 am</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Don't forget my notes</p>
                      </div>
                      <p class="note-desc hidden">I have to read them...</p>
                      <p><small>Wednesday 5 May, 6:15 pm</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="detail-note note-hidden-sm">
              <div class="note-header clearfix">
                <div class="note-back">
                  <i class="icon-action-undo"></i>
                </div>
                <div class="note-edit">Edit Note</div>
                <div class="note-subtitle">title on first line</div>
              </div>
              <div id="note-detail">
                <div class="note-write">
                  <textarea class="form-control" placeholder="Type your note here"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="settings">
            <div class="settings">
              <div class="title">ACCOUNT SETTINGS</div>
              <div class="setting">
                <span> Show Personal Statut</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked>
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
                <p class="setting-info">Lorem ipsum dolor sit amet consectetuer.</p>
              </div>
              <div class="setting">
                <span> Show my Picture</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked>
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
                <p class="setting-info">Lorem ipsum dolor sit amet consectetuer.</p>
              </div>
              <div class="setting">
                <span> Show my Location</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
                <p class="setting-info">Lorem ipsum dolor sit amet consectetuer.</p>
              </div>
              <div class="title">CHAT</div>
              <div class="setting">
                <span> Show User Image</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked>
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="setting">
                <span> Show Fullname</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked>
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="setting">
                <span> Show Location</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="setting">
                <span> Show Unread Count</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked>
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="title">STATISTICS</div>
              <div class="settings-chart">
                <div class="clearfix">
                  <div class="chart-title">Stat 1</div>
                  <div class="chart-number">82%</div>
                </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-primary setting1" data-transitiongoal="82"></div>
                </div>
              </div>
              <div class="settings-chart">
                <div class="clearfix">
                  <div class="chart-title">Stat 2</div>
                  <div class="chart-number">43%</div>
                </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-primary setting2" data-transitiongoal="43"></div>
                </div>
              </div>
              <div class="m-t-30" style="width:100%">
                <canvas id="setting-chart" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END QUICKVIEW SIDEBAR -->
    <!-- BEGIN SEARCH -->
    <div id="morphsearch" class="morphsearch">
      <form class="morphsearch-form">
        <input class="morphsearch-input" type="search" placeholder="Search..."/>
        <button class="morphsearch-submit" type="submit">Search</button>
      </form>
      <div class="morphsearch-content withScroll">
        <div class="dummy-column user-column">
          <h2>Users</h2>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/avatars/avatar1_big.png" alt="Avatar 1"/>
            <h3>John Smith</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/avatars/avatar2_big.png" alt="Avatar 2"/>
            <h3>Bod Dylan</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/avatars/avatar3_big.png" alt="Avatar 3"/>
            <h3>Jenny Finlan</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/avatars/avatar4_big.png" alt="Avatar 4"/>
            <h3>Harold Fox</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/avatars/avatar5_big.png" alt="Avatar 5"/>
            <h3>Martin Hendrix</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/avatars/avatar6_big.png" alt="Avatar 6"/>
            <h3>Paul Ferguson</h3>
          </a>
        </div>
        <div class="dummy-column">
          <h2>Articles</h2>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/gallery/1.jpg" alt="1"/>
            <h3>How to change webdesign?</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/gallery/2.jpg" alt="2"/>
            <h3>News From the sky</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/gallery/3.jpg" alt="3"/>
            <h3>Where is the cat?</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/gallery/4.jpg" alt="4"/>
            <h3>Just another funny story</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/gallery/5.jpg" alt="5"/>
            <h3>How many water we drink every day?</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/gallery/6.jpg" alt="6"/>
            <h3>Drag and drop tutorials</h3>
          </a>
        </div>
        <div class="dummy-column">
          <h2>Recent</h2>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/gallery/7.jpg" alt="7"/>
            <h3>Design Inspiration</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/gallery/8.jpg" alt="8"/>
            <h3>Animals drawing</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/gallery/9.jpg" alt="9"/>
            <h3>Cup of tea please</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/gallery/10.jpg" alt="10"/>
            <h3>New application arrive</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/gallery/11.jpg" alt="11"/>
            <h3>Notification prettify</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="assets/images/gallery/12.jpg" alt="12"/>
            <h3>My article is the last recent</h3>
          </a>
        </div>
      </div>
      <!-- /morphsearch-content -->
      <span class="morphsearch-close"></span>
    </div>
    <!-- END SEARCH -->
    <!-- BEGIN PRELOADER -->
    <div class="loader-overlay">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>

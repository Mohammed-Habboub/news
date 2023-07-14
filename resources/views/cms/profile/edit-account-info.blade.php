
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="robots" content="noindex, nofollow">
<meta name="csrf-token" content="FAEBJuLFUBac5eUm7f3siOCtX1pTrlXFlC4nrzXE"/>
<title>My Account :: Backpack Admin Panel</title>


<link href="https://demo.backpackforlaravel.com/storage/basset//unpkg.com/@digitallyhappy/backstrap@0.5.1/dist/css/legacy.css?187e21de716e" rel="stylesheet" type="text/css" />
<link href="https://demo.backpackforlaravel.com/storage/basset//cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css?187e21de716e" rel="stylesheet" type="text/css" />
<link href="https://demo.backpackforlaravel.com/storage/basset//vendor/backpack/theme-coreuiv2/resources/assets/css/coreuiv2.css?187e21de716e" rel="stylesheet" type="text/css" />


<link href="https://demo.backpackforlaravel.com/storage/basset//source-sans-pro/source-sans-pro.css?187e21de716e" rel="stylesheet" type="text/css" />

<link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400&display=swap"
      rel="stylesheet">

<link href="https://demo.backpackforlaravel.com/storage/basset//unpkg.com/animate.css@4.1.1/animate.compat.css?187e21de716e" rel="stylesheet" type="text/css" />
<link href="https://demo.backpackforlaravel.com/storage/basset//unpkg.com/noty@3.2.0-beta-deprecated/lib/noty.css?187e21de716e" rel="stylesheet" type="text/css" />

<link href="https://demo.backpackforlaravel.com/storage/basset//cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css?187e21de716e" rel="stylesheet" type="text/css" />

<link href="https://demo.backpackforlaravel.com/storage/basset//vendor/backpack/crud/src/resources/assets/css/common.css?187e21de716e" rel="stylesheet" type="text/css" />




    <style media="screen">
        .backpack-profile-form .required::after {
            content: ' *';
            color: red;
        }
    </style>



<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="app aside-menu-fixed sidebar-lg-show">

  <header class="app-header bg-light border-0 navbar">

  <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto ml-3" type="button" data-toggle="sidebar-show" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>



  <ul class="nav navbar-nav d-md-down-none">



</ul>







<ul class="nav navbar-nav ml-auto ">



        <li class="nav-item dropdown pr-4">
  <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="position: relative;width: 35px;height: 35px;margin: 0 10px;">
    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="4ee86c2492193fd962bcda8b-|49"></script><img class="img-avatar" src="https://demo.backpackforlaravel.com/storage/basset/secure.gravatar.com/avatar/e64c7d89f26bd1972efa854d13d7dd61.jpg" alt="Demo Admin" onerror="this.style.display='none'" style="margin: 0;position: absolute;left: 0;z-index: 1;">
    <span class="backpack-avatar-menu-container" style="position: absolute;left: 0;width: 100%;background-color: #00a65a;border-radius: 50%;color: #FFF;line-height: 35px;font-size: 85%;font-weight: 300;">
      D
    </span>
  </a>
  <div class="dropdown-menu dropdown-menu-right mr-4 pb-1 pt-1">
          <a class="dropdown-item" href="https://demo.backpackforlaravel.com/admin/edit-account-info"><i class="la la-user"></i> My Account</a>
      <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="https://demo.backpackforlaravel.com/admin/logout"><i class="la la-lock"></i> Logout</a>
  </div>
</li>
    </ul>

</header>

  <div class="app-body">

    <div class="sidebar sidebar-pills bg-light">

      <nav class="sidebar-nav overflow-hidden">

        <ul class="nav">




















        </ul>
      </nav>

    </div>



    <main class="main pt-2">


       <nav aria-label="breadcrumb" class="d-none d-lg-block">
	  <ol class="breadcrumb bg-transparent p-0 justify-content-end">
	  		  					    <li class="breadcrumb-item text-capitalize"><a href="{{route('cms.parant')}}">Admin</a></li>
	  			  		  					    <li class="breadcrumb-item text-capitalize active" aria-current="page">My Account</li>
	  			  		  </ol>
	</nav>


           <section class="content-header">
        <div class="container-fluid mb-3">
            <h1>My Account</h1>
        </div>
    </section>

        <div class="container-fluid animated fadeIn">


              <div class="row">




        <div class="col-lg-8">
            <form class="form" action="https://demo.backpackforlaravel.com/admin/edit-account-info" method="post">

                <input type="hidden" name="_token" value="FAEBJuLFUBac5eUm7f3siOCtX1pTrlXFlC4nrzXE">

                <div class="card padding-10">

                    <div class="card-header">
                        Update Account Info
                    </div>

                    <div class="card-body backpack-profile-form bold-labels">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                                                <label class="required">Name</label>
                                <input required class="form-control" type="text" name="name" value="Demo Admin">
                            </div>

                            <div class="col-md-6 form-group">
                                                                <label class="required">Email</label>
                                <input required class="form-control" type="email" name="email" value="admin@example.com">
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success"><i class="la la-save"></i> Save</button>
                        <a href="https://demo.backpackforlaravel.com/admin" class="btn">Cancel</a>
                    </div>
                </div>

            </form>
        </div>


        <div class="col-lg-8">
            <form class="form" action="https://demo.backpackforlaravel.com/admin/change-password" method="post">

                <input type="hidden" name="_token" value="FAEBJuLFUBac5eUm7f3siOCtX1pTrlXFlC4nrzXE">

                <div class="card padding-10">

                    <div class="card-header">
                        Change Password
                    </div>

                    <div class="card-body backpack-profile-form bold-labels">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                                                <label class="required">Old password</label>
                                <input autocomplete="new-password" required class="form-control" type="password" name="old_password" id="old_password" value="">
                            </div>

                            <div class="col-md-4 form-group">
                                                                <label class="required">New password</label>
                                <input autocomplete="new-password" required class="form-control" type="password" name="new_password" id="new_password" value="">
                            </div>

                            <div class="col-md-4 form-group">
                                                                <label class="required">Confirm password</label>
                                <input autocomplete="new-password" required class="form-control" type="password" name="confirm_password" id="confirm_password" value="">
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                            <button type="submit" class="btn btn-success"><i class="la la-save"></i> Change Password</button>
                            <a href="https://demo.backpackforlaravel.com/admin" class="btn">Cancel</a>
                    </div>

                </div>

            </form>
        </div>

    </div>


        </div>

    </main>

  </div>

  <footer class="app-footer d-print-none">
    <div class="text-muted ml-auto mr-auto">
            Handcrafted by <a target="_blank" rel="noopener" href="https://www.linkedin.com/in/mohammed-r-habboub-9b1ab5204/">Mohammed R. Habboub</a>.
                  Powered by <a target="_blank" rel="noopener" href="http://backpackforlaravel.com?ref=panel_footer_link">Backpack for Laravel</a>.
          </div>
  </footer>

      <div class="modal modal-blur fade pe-0" id="modal-layout" tabindex="-1" style="display: none;" aria-modal="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <form method="POST" action="https://demo.backpackforlaravel.com/admin/switch-layout">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Themes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Try out the themes <strong>Backpack</strong> offers you out of the box...!</p>
                        <input type="hidden" name="_token" value="FAEBJuLFUBac5eUm7f3siOCtX1pTrlXFlC4nrzXE">                        <div class="form-selectgroup-boxes row mb-3">
                            <div class="col-lg-4 mb-2">
                                <label class="border rounded text-center d-flex justify-content-start p-2 px-3" style="cursor: pointer;">
                                    <input  checked  type="radio" name="theme" value="coreuiv2" class="theme-choice">
                                    <span class="p-2 text-left ml-2">
                                        <span class="font-weight-bold mb-0 pb-0">Core UI v2</span><br>
                                        <span class="mb-0"><small>Bootstrap 4</small></span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label class="border rounded text-center d-flex justify-content-start p-2 px-3" style="cursor: pointer;">
                                    <input  type="radio" name="theme" value="coreuiv4" class="theme-choice">
                                    <span class="p-2 text-left ml-2">
                                        <span class="font-weight-bold mb-0 pb-0">Core UI v4</span><br>
                                        <span class="mb-0"><small>Bootstrap 5</small></span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label class="border rounded text-center d-flex justify-content-start p-2 px-3" style="cursor: pointer;">
                                    <input  type="radio" name="theme" value="tabler" class="theme-choice">
                                    <span class="p-2 text-left ml-2">
                                        <span class="font-weight-bold mb-0 pb-0">Tabler</span><br>
                                        <span class="mb-0"><small>Bootstrap 5</small></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div id="tabler-layouts-selection" class="form-selectgroup-boxes row mb-3" style="display: none;">
                            <p class="px-3">Take it even further with the layouts <strong>Backpack Tabler Theme</strong> offers:</p>
                            <div class="col-lg-6 mb-2">
                                <label class="border rounded text-center d-flex justify-content-start p-2 px-3" style="cursor: pointer;">
                                    <input  type="radio" name="layout" value="horizontal">
                                    <span class="p-2 text-left ml-2">
                                        <span class="mb-0 pb-0">Horizontal</span><br>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <label class="border rounded text-center d-flex justify-content-start p-2 px-3" style="cursor: pointer;">
                                    <input  type="radio" name="layout" value="horizontal_dark">
                                    <span class="p-2 text-left ml-2">
                                        <span class="mb-0 pb-0">Horizontal Dark</span><br>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <label class="border rounded text-center d-flex justify-content-start p-2 px-3" style="cursor: pointer;">
                                    <input  type="radio" name="layout" value="horizontal_overlap">
                                    <span class="p-2 text-left ml-2">
                                        <span class="mb-0 pb-0">Horizontal Overlap</span><br>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <label class="border rounded text-center d-flex justify-content-start p-2 px-3" style="cursor: pointer;">
                                    <input  type="radio" name="layout" value="vertical">
                                    <span class="p-2 text-left ml-2">
                                        <span class="mb-0 pb-0">Vertical</span><br>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <label class="border rounded text-center d-flex justify-content-start p-2 px-3" style="cursor: pointer;">
                                    <input  type="radio" name="layout" value="vertical_dark">
                                    <span class="p-2 text-left ml-2">
                                        <span class="mb-0 pb-0">Vertical Dark</span><br>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <label class="border rounded text-center d-flex justify-content-start p-2 px-3" style="cursor: pointer;">
                                    <input  type="radio" name="layout" value="vertical_transparent">
                                    <span class="p-2 text-left ml-2">
                                        <span class="mb-0 pb-0">Vertical Transparent</span><br>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <label class="border rounded text-center d-flex justify-content-start p-2 px-3" style="cursor: pointer;">
                                    <input  type="radio" name="layout" value="right_vertical">
                                    <span class="p-2 text-left ml-2">
                                        <span class="mb-0 pb-0">Vertical Vertical</span><br>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <label class="border rounded text-center d-flex justify-content-start p-2 px-3" style="cursor: pointer;">
                                    <input  type="radio" name="layout" value="right_vertical_dark">
                                    <span class="p-2 text-left ml-2">
                                        <span class="mb-0 pb-0">Right Vertical Dark</span><br>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <label class="border rounded text-center d-flex justify-content-start p-2 px-3" style="cursor: pointer;">
                                    <input  type="radio" name="layout" value="right_vertical_transparent">
                                    <span class="p-2 text-left ml-2">
                                        <span class="mb-0 pb-0">Right Vertical Transparent</span><br>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-dismiss="modal" data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <button class="btn btn-primary" type="submit"><i class="la la-check mr-2"></i>Apply layout</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="4ee86c2492193fd962bcda8b-text/javascript">
    // Save default sidebar class
    let sidebarClass = (document.body.className.match(/sidebar-(sm|md|lg|xl)-show/) || ['sidebar-lg-show'])[0];
    let sidebarTransition = function(value) {
        document.querySelector('.app-body > .sidebar').style.transition = value || '';
    };

    // Recover sidebar state
    let sessionState = sessionStorage.getItem('sidebar-collapsed');
    if (sessionState) {
      // disable the transition animation temporarily, so that if you're browsing across
      // pages with the sidebar closed, the sidebar does not flicker into the view
      sidebarTransition("none");
      document.body.classList.toggle(sidebarClass, sessionState === '1');

      // re-enable the transition, so that if the user clicks the hamburger menu, it does have a nice transition
      setTimeout(sidebarTransition, 100);
    }
  </script>

  <script src="https://demo.backpackforlaravel.com/storage/basset//unpkg.com/jquery@3.6.1/dist/jquery.min.js?187e21de716e" type="4ee86c2492193fd962bcda8b-text/javascript"></script>
<script src="https://demo.backpackforlaravel.com/storage/basset//unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js?187e21de716e" type="4ee86c2492193fd962bcda8b-text/javascript"></script>
<script src="https://demo.backpackforlaravel.com/storage/basset//unpkg.com/noty@3.2.0-beta-deprecated/lib/noty.min.js?187e21de716e" type="4ee86c2492193fd962bcda8b-text/javascript"></script>
<script src="https://demo.backpackforlaravel.com/storage/basset//unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js?187e21de716e" type="4ee86c2492193fd962bcda8b-text/javascript"></script>




<script type="4ee86c2492193fd962bcda8b-text/javascript">
    // This is intentionaly run after dom loads so this way we can avoid showing duplicate alerts
    // when the user is beeing redirected by persistent table, that happens before this event triggers.
document.onreadystatechange = function () {
    if (document.readyState == "interactive") {
        Noty.overrideDefaults({
            layout: 'topRight',
            theme: 'backstrap',
            timeout: 2500,
            closeWith: ['click', 'button'],
        });

        // get alerts from the alert bag
        var $alerts_from_php = JSON.parse('[]');

        // get the alerts from the localstorage
        var $alerts_from_localstorage = JSON.parse(localStorage.getItem('backpack_alerts'))
                ? JSON.parse(localStorage.getItem('backpack_alerts')) : {};

        // merge both php alerts and localstorage alerts
        Object.entries($alerts_from_php).forEach(function(type) {

            if(typeof $alerts_from_localstorage[type[0]] !== 'undefined') {
                type[1].map(function(msg) {
                    $alerts_from_localstorage[type[0]].push(msg);
                });
            } else {
                $alerts_from_localstorage[type[0]] = type[1];
            }
        });

        for (var type in $alerts_from_localstorage) {
            let messages = new Set($alerts_from_localstorage[type]);
            messages.forEach(function(text) {
                    let alert = {};
                    alert['type'] = type;
                    alert['text'] = text;
                    new Noty(alert).show()
            });
        }

        // in the end, remove backpack alerts from localStorage
        localStorage.removeItem('backpack_alerts');

                            }
}
</script>


  <script src="https://demo.backpackforlaravel.com/storage/basset//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js?187e21de716e" type="4ee86c2492193fd962bcda8b-text/javascript"></script>
<script src="https://demo.backpackforlaravel.com/storage/basset//cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js?187e21de716e" type="4ee86c2492193fd962bcda8b-text/javascript"></script>
<script src="https://demo.backpackforlaravel.com/storage/basset//unpkg.com/@coreui/coreui@2.1.16/dist/js/coreui.js?187e21de716e" type="4ee86c2492193fd962bcda8b-text/javascript"></script>

      <script type="4ee86c2492193fd962bcda8b-text/javascript">
      // Store sidebar state
      document.querySelectorAll('.sidebar-toggler').forEach(function(toggler) {
        toggler.addEventListener('click', function() {
          sessionStorage.setItem('sidebar-collapsed', Number(!document.body.classList.contains(sidebarClass)))
          // wait for the sidebar animation to end (250ms) and then update the table headers because datatables uses a cached version
          // and dont update this values if there are dom changes after the table is draw. The sidebar toggling makes
          // the table change width, so the headers need to be adjusted accordingly.
          setTimeout(function() {
            if(typeof crud !== "undefined" && crud.table) {
              crud.table.fixedHeader.adjust();
            }
          }, 300);
        })
      });
      // Set active state on menu element
      var full_url = "https://demo.backpackforlaravel.com/admin/edit-account-info";
      var $navLinks = $(".sidebar-nav li a, .app-header li a");

      // First look for an exact match including the search string
      var $curentPageLink = $navLinks.filter(
          function() { return $(this).attr('href') === full_url; }
      );

      // If not found, look for the link that starts with the url
      if(!$curentPageLink.length > 0){
          $curentPageLink = $navLinks.filter( function() {
            if ($(this).attr('href').startsWith(full_url)) {
              return true;
            }

            if (full_url.startsWith($(this).attr('href'))) {
              return true;
            }

            return false;
          });
      }

      // for the found links that can be considered current, make sure
      // - the parent item is open
      $curentPageLink.parents('li').addClass('open');
      // - the actual element is active
      $curentPageLink.each(function() {
        $(this).addClass('active');
      });
  </script>
    <script src="https://demo.backpackforlaravel.com/storage/basset//vendor/backpack/crud/src/resources/assets/js/common.js?187e21de716e" type="4ee86c2492193fd962bcda8b-text/javascript"></script>
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="4ee86c2492193fd962bcda8b-|49" defer=""></script></body>
</html>

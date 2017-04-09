<!DOCTYPE html>
<html lang="en">
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $page_title }} - Espreso Housekeeping</title>

        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />

        <link href="/css/animate.min.css" rel="stylesheet">
        <link href="/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
        <link href="/css/fullcalendar.min.css" rel="stylesheet">
        <link href="/css/jquery.bootgrid.min.css" rel="stylesheet">
        <link href="/css/select2.min.css" rel="stylesheet">
        <link href="/css/app-1.min.css" rel="stylesheet">

        <script src="/js/page-loader.min.js"></script>
    </head>

    <body>
        <!-- Page Loader -->
        <div id="page-loader">
            <div class="preloader preloader--xl preloader--light">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" />
                </svg>
            </div>
        </div>

        <!-- Header -->
        <header id="header">
            <div class="logo">
                <a href="/dashboard" class="hidden-xs">
                    Espreso
                    <small>Housekeeping</small>
                </a>
                <i class="logo__trigger zmdi zmdi-menu" data-mae-action="block-open" data-mae-target="#navigation"></i>
            </div>

            <ul class="top-menu">
                <li class="top-menu__trigger hidden-lg hidden-md">
                    <a href=""><i class="zmdi zmdi-search"></i></a>
                </li>

                <li><a href=""><i class="zmdi zmdi-globe"></i></a></li>
                <li><a href="/logout"><i class="zmdi zmdi-power"></i></a></li>
                <li><a data-mae-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i></a></li>
            </ul>

            <form class="top-search">
                <input type="text" class="top-search__input" placeholder="Search for users, furnis, rooms or logs">
                <i class="zmdi zmdi-search top-search__reset"></i>
            </form>
        </header>

        <section id="main">
            <aside id="navigation">
                <div class="navigation__header">
                    <i class="zmdi zmdi-long-arrow-left" data-mae-action="block-close"></i>
                </div>

                <div class="navigation__toggles">
                    <h4>{{ Auth::user()->username }}</h4>
                    <p>{{ App\Models\Role::getRoleName(Auth::user()->rank) }}</p>
                </div>

                <div class="navigation__menu c-overflow">
                    <ul>
                        <li class="navigation__active">
                            <a href="/dashboard"><i class="zmdi zmdi-chart"></i> Dashboard</a>
                        </li>
                        @if(Permissions::hasPermission(Auth::user(), 'system_access'))
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-storage"></i> System</a>

                            <ul>
                                <li><a href="/system/logs">Monitoring Logs</a></li>
                                <li><a href="/system/users">Accounts</a></li>
                                <li><a href="/system/roles">Roles</a></li>
                                <li><a href="/system/permissions">Permissions</a></li>
                            </ul>
                        </li>
                        @endif
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-collection-text"></i> Site & Content</a>

                            <ul>
                                <li><a href="/content/articles">Articles</a></li>
                                <li><a href="/content/articles/categories">Articles Categories</a></li>
                                <li><a href="/content/pages">HabboWEB Pages</a></li>
                            </ul>
                        </li>
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-accounts"></i> Users & Moderation</a>

                            <ul>
                                <li><a href="/hobba/users">Users</a></li>
                                <li><a href="/hobba/bans">Bans</a></li>
                                <li><a href="/hobba/chatlogs">Room Chatlogs</a></li>
                            </ul>
                        </li>
                        <li><a href="/rooms" data-mae-action="submenu-toggle"><i class="zmdi zmdi-home"></i> Room Management</a></li>
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-shopping-cart"></i> Shop</a>

                            <ul>
                                <li><a href="/shop/countries">Countries</a></li>
                                <li><a href="/shop/payments">Payment Methods</a></li>
                                <li><a href="/shop/items">Items</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>

            @yield('content')

            <footer id="footer">
                &copy; 2017 - Espreso Housekeeping

                <ul class="footer__menu">
                    <li><a href="/dashboard" target="_blank">Dashboard</a></li>
                    <li><a href="https://github.com/sant0ro/espreso/issues/new?labels=bug" target="_blank">Report a bug</a></li>
                    <li><a href="https://github.com/sant0ro/espreso/issues/new?title=Feature%20request:&body=What%20do%20you%20want%20to%20see%20in%20Espreso?&labels=feature" target="_blank">Request feature</a></li>
                    <li><a href="/about">About Espreso</a></li>
                </ul>
            </footer>
        </section>

        <!-- Older IE Warning -->
        <!--[if lt IE 9]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
            <div class="ie-warning__container">
                <ul class="ie-warning__download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="/img/browsers/chrome.png" alt="">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="/img/browsers/firefox.png" alt="">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="/img/browsers/opera.png" alt="">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="/img/browsers/safari.png" alt="">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="/img/browsers/ie.png" alt="">
                            <div>IE (New)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
        <![endif]-->

        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="/js/bootstrap-notify.min.js"></script>
        <script src="/js/momentjs/moment.js"></script>
        <script src="/js/fullcalendar/fullcalendar.min.js"></script>
        <script src="/js/jquery.simpleWeather.min.js"></script>
        <script src="/js/salvattore.min.js"></script>
        <script src="/js/flot/jquery.flot.js"></script>
        <script src="/js/flot/jquery.flot.resize.js"></script>
        <script src="/js/flot/curvedLines.js"></script>
        <script src="/js/jquery.sparkline.min.js"></script>
        <script src="/js/jquery.easypiechart.min.js"></script>
        <script src="/js/jquery.bootgrid.min.js"></script>
        <script src="/js/select2/select2.full.min.js"></script>
        <script type="text/javascript">
            $('.espreso-mae-data-table').bootgrid({
                css: {
                    icon: 'table-bootgrid__icon zmdi',
                    iconSearch: 'zmdi-search',
                    iconColumns: 'zmdi-view-column',
                    iconDown: 'zmdi-sort-amount-desc',
                    iconRefresh: 'zmdi-refresh',
                    iconUp: 'zmdi-sort-amount-asc',
                    dropDownMenu: 'dropdown form-group--select',
                    search: 'table-bootgrid__search',
                    actions: 'table-bootgrid__actions',
                    header: 'table-bootgrid__header',
                    footer: 'table-bootgrid__footer',
                    dropDownItem: 'table-bootgrid__label',
                    table: 'table table-bootgrid',
                    pagination: 'pagination table-bootgrid__pagination'
                },

                //Override default module markups
                templates: {
                    actionDropDown: "<span class=\"@{{css.dropDownMenu}}\">" + "<a href='' data-toggle=\"dropdown\">@{{ctx.content}}</a><ul class=\"@{{css.dropDownMenuItems}}\" role=\"menu\"></ul></span>",
                    search: "<div class=\"@{{css.search}} form-group\"><span class=\"@{{css.icon}} @{{css.iconSearch}}\"></span><input type=\"text\" class=\"@{{css.searchField}}\" placeholder=\"@{{lbl.search}}\" /><i class='form-group__bar'></i></div>",
                    header: "<div id=\"@{{ctx.id}}\" class=\"@{{css.header}}\"><p class=\"@{{css.search}}\"></p><p class=\"@{{css.actions}}\"></p></div>",
                    actionDropDownCheckboxItem: "<li><div class='tabe-bootgrid__checkbox checkbox checkbox--dark'><label class=\"@{{css.dropDownItem}}\"><input name=\"@{{ctx.name}}\" type=\"checkbox\" value=\"1\" class=\"@{{css.dropDownItemCheckbox}}\" @{{ctx.checked}} /> @{{ctx.label}}<i class='input-helper'></i></label></div></li>",
                    footer: "<div id=\"@{{ctx.id}}\" class=\"@{{css.footer}}\"><div class=\"row\"><div class=\"col-sm-6\"><p class=\"@{{css.pagination}}\"></p></div><div class=\"col-sm-6 table-bootgrid__showing hidden-xs\"><p class=\"@{{css.infos}}\"></p></div></div></div>"
                }
            });

            $('select.select2').select2({
                dropdownAutoWidth: true,
                width: '100%'
            });
        </script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
        <script src="/js/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Site Functions & Actions -->
        <script src="/js/app.min.js"></script>

    </body>
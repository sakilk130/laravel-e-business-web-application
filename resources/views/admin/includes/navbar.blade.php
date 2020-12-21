<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic Page Info -->
        <meta charset="utf-8" />
        <title>@yield('title')'s Store Admin Panel</title>

        <!-- Site favicon -->
        <link
          rel="apple-touch-icon"
          sizes="180x180"
          href="/vendors/images/apple-touch-icon.png"
        />
        <link
          rel="icon"
          type="image/png"
          sizes="32x32"
          href="/vendors/images/favicon-32x32.png"
        />
        <link
          rel="icon"
          type="image/png"
          sizes="16x16"
          href="/vendors/images/favicon-16x16.png"
        />
        <!-- Mobile Specific Metas -->
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1"
        />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Google Font -->
        <link
          href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet"
        />
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/vendors/styles/core.css" />
        <link
          rel="stylesheet"
          type="text/css"
          href="/vendors/styles/icon-font.min.css"
        />
        <link
          rel="stylesheet"
          type="text/css"
          href="/src/plugins/datatables/css/dataTables.bootstrap4.min.css"
        />
        <link
          rel="stylesheet"
          type="text/css"
          href="/src/plugins/datatables/css/responsive.bootstrap4.min.css"
        />
        <link rel="stylesheet" type="text/css" href="/vendors/styles/style.css" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script
          async
          src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"
        ></script>
      </head>
<body>

<div class="header" style="background-color: #0b132b">
    <div class="header-left">
      <div class="menu-icon dw dw-menu"></div>
    </div>
    <div class="header-right">
        <div class="user-notification">
            <a style="color: white; height: 10px; width: 10px" href="/store">
              <i
                style="height: 10px; width: 10px"
                class="icon-copy dw dw-worldwide-1"
              ></i>
              Go To Store
            </a>
          </div>
      <div class="user-info-dropdown">
        <div class="dropdown">
          <a
            class="dropdown-toggle"
            href="#"
            role="button"
            data-toggle="dropdown"
          >
            <span class="user-icon">
              @if (isset($img))
              <img src="/upload/{{ $img }}" alt="" />
             @else
             <img src="/images/man.png" alt="" />
             @endif
            </span>
            <!-- Profile name -->
            <span class="user-name" style="color: #ffff">@yield('profileName')</span>
          </a>
          <div
            class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
          >
          <a class="dropdown-item" href="{{ route('admin.profile') }}"
              ><i class="dw dw-user2"></i>Profile</a
            >
            <a class="dropdown-item" href="{{ route('admin.change_password') }}"
              ><i class="dw dw-settings2"></i>Change Password</a
            >
            <a class="dropdown-item" href="{{ route('logout.logout') }}"
              ><i class="dw dw-logout"></i> Log Out</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="left-side-bar">
    <div class="brand-logo">
      <a href="{{ route('admin.index') }}">@yield('storeName')'s Store </a>
      <div class="close-sidebar" data-toggle="left-sidebar-close">
        <i class="ion-close-round"></i>
      </div>
    </div>
    <div class="menu-block customscroll">
      <div class="sidebar-menu">
        <ul id="accordion-menu">
          <li class="dropdown">
            <a href="{{ route('admin.index') }}" class="dropdown-toggle no-arrow">
              <span class="micon dw dw-house-1"></span
              ><span class="mtext">Dashboard</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-shopping-basket"></span
              ><span class="mtext">Products</span>
            </a>
            <ul class="submenu">
              <li><a href="{{ route('admin.all_products') }}">All Products</a></li>
              <li>
                <a href="{{ route('admin.add_new_product') }}">Add New Product</a>
              </li>
              <li>
                <a href="{{ route('admin.manage_product') }}">Manage Products</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-shopping-cart-1"></span
              ><span class="mtext">Orders</span>
            </a>
            <ul class="submenu">
              <li><a href="{{ route('admin.all_orders') }}">All Orders</a></li>
              <li><a href="{{ route('admin.pending_orders') }}">Peding Orders</a></li>
              <li><a href="{{ route('admin.in_process_orders') }}">In Process Orders</a></li>
              <li><a href="{{ route('admin.delivered_orders') }}">Delivered Orders</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-list"></span
              ><span class="mtext"> Categories </span>
            </a>
            <ul class="submenu">
              <li><a href="{{ route('admin.all_categories') }}">All Categories </a></li>
              <li>
                <a href="{{ route('admin.all_sub_categories') }}">All Sub-Categories</a>
              </li>
              <li><a href="{{ route('admin.add_category') }}">Add Category</a></li>
              <li><a href="{{ route('admin.add_sub_category') }}">Add Sub-Category</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-id-card1"></span
              ><span class="mtext">Customers</span>
            </a>
            <ul class="submenu">
              <li><a href="{{ route('admin.all_customers') }}">All Customers</a></li>
              <li><a href="{{ route('admin.add_new_customer') }}">Add New Customer</a></li>
              <li><a href="{{ route('admin.manage_customer') }}">Manage Customer</a></li>
            </ul>
          </li>
          {{-- Poster --}}
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-photo-camera-1"></span
              ><span class="mtext">Poster</span>
            </a>
            <ul class="submenu">
              <li><a href="{{ route('admin.all_poster') }}">All Poster</a></li>
              <li><a href="{{ route('admin.add_new_poster') }}">Add New Poster</a></li>
            </ul>
          </li>

          {{-- Blog --}}
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-pencil"></span
              ><span class="mtext">Blog</span>
            </a>
            <ul class="submenu">
              <li><a href="{{ route('admin.all_blog') }}">All Blog</a></li>
              <li><a href="{{ route('admin.add_new_blog') }}">Add New Blog</a></li>
            </ul>
          </li>

          {{-- Notice --}}
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-notification"></span
              ><span class="mtext">Notice</span>
            </a>
            <ul class="submenu">
              <li><a href="{{ route('admin.all_notice') }}">All Notice</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="mobile-menu-overlay"></div>

@yield('content')

<script src="/vendors/scripts/core.js"></script>
<script src="/vendors/scripts/script.min.js"></script>
<script src="/vendors/scripts/process.js"></script>
<script src="/vendors/scripts/layout-settings.js"></script>
<script src="/src/plugins/apexcharts/apexcharts.min.js"></script>
<script src="/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<script src="/vendors/scripts/dashboard.js"></script>
<script src="/js/main.js"></script>
<script src="/js/deleteposter.js"></script>
<script src="/js/deletecategory.js"></script>
<script src="/js/deletesubcategory.js"></script>
<script src="/js/deleteorder.js"></script>

</body>
</html>

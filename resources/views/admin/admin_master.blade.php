<!DOCTYPE html>
<html lang="en">
<x-head title="Admin Dashboard"/>
<!-- body start -->
<body data-menu-color="light" data-sidebar="default">

<!-- Begin page -->
<div id="app-layout">


    <!-- Topbar Start -->
    @include('admin.body.header')
    <!-- end Topbar -->

    <!-- Left Sidebar Start -->
    @include('admin.body.sidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        @yield('admin')
        <!-- content -->

        <!-- Footer Start -->
        @include('admin.body.footer')
        <!-- end Footer -->

    </div>
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Vendor -->
<x-scripts/>

<!-- Apexcharts JS -->
<script src="{{asset('backend/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<!-- for basic area chart -->
<script src="{{asset('backend/libs/apexcharts/samples/assets/stock-prices.js')}}"></script>

<!-- Widgets Init Js -->
<script src="{{asset('backend/assets/js/pages/analytics-dashboard.init.js')}}"></script>
</body>
</html>

  <!--bootstrap js-->
  <script src="{{ asset('admin-assets/assets/js/bootstrap.bundle.min.js') }}"></script>

  <!--plugins-->
  <script src="{{ asset('admin-assets/assets/js/jquery.min.js') }}"></script>
  <!--plugins-->
  <script src="{{ asset('admin-assets/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('admin-assets/assets/plugins/metismenu/metisMenu.min.js') }}"></script>
  <script src="{{ asset('admin-assets/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
  <script src="{{ asset('admin-assets/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('admin-assets/assets/plugins/peity/jquery.peity.min.js') }}"></script>
  <script>
    $(".data-attributes span").peity("donut")
  </script>
    <script src="{{ asset('admin-assets/assets/js/main.js') }}"></script>
  @stack('scripts')
  <script>
    new PerfectScrollbar(".user-list")
  </script>

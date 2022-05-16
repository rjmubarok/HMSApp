 <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="{{ asset('backend') }}/assets/js/jquery-3.3.1.min.js"></script>
  <script src="{{ asset('backend') }}/assets/js/popper.min.js"></script>
  <script src="{{ asset('backend') }}/assets/js/bootstrap.min.js"></script>
  <script src="{{ asset('backend') }}/assets/js/perfect-scrollbar.js"> </script>
  <script src="{{ asset('backend') }}/assets/js/jquery-ui.min.js"> </script>
  <!-- Global Required Scripts End -->

  <!-- Page Specific Scripts Start -->
  <script src="{{ asset('backend') }}/assets/js/moment.js"> </script>
  <script src="{{ asset('backend') }}/assets/js/jquery.webticker.min.js"> </script>
  <script src="{{ asset('backend') }}/assets/js/Chart.bundle.min.js"> </script>
  <script src="{{ asset('backend') }}/assets/js/Chart.Financial.js"> </script>
  <script src="{{ asset('backend') }}/assets/js/table-line.js"> </script>
  <script src="{{ asset('backend') }}/assets/js/index-chart.js"> </script>

  <script src="{{ asset('backend') }}/assets/js/d3.v3.min.js"> </script>
  <script src="{{ asset('backend') }}/assets/js/topojson.v1.min.js"> </script>
  <script src="{{ asset('backend') }}/assets/js/datamaps.all.min.js"> </script>
  <script src="{{ asset('backend') }}/assets/js/index-map.js"> </script>

  <!-- Page Specific Scripts End -->

  <!-- Weedo core JavaScript -->
  <script src="{{ asset('backend') }}/assets/js/framework.js"></script>

  <!-- Settings -->
  <script src="{{ asset('backend') }}/assets/js/settings.js"></script>
@yield('scripts')
<script>
    setTimeout(function(){
      $('#alert').slideUp()
    },4000)
    </script>
</body>


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/weedoboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Apr 2022 07:50:22 GMT -->
</html>

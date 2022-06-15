 <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="{{ asset('frontend') }}/assets/js/jquery-3.3.1.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/js/jquery-ui.min.js"></script>
  <script src="{{ asset('frontend') }}/vendors/popper/popper.min.js"></script>
  <script src="{{ asset('frontend') }}/vendors/bootstrap/bootstrap.min.js"></script>
  <script src="{{ asset('frontend') }}/vendors/is/is.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&amp;callback=initMap"
    async></script>
  <script src="{{ asset('frontend') }}/vendors/prism/prism.js"></script>
  <script src="{{ asset('frontend') }}/vendors/fontawesome/all.min.js"></script>
  <script src="{{ asset('frontend') }}/vendors/lodash/lodash.min.js"></script>
  <script src="{{ asset('frontend') }}/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{ asset('frontend') }}/vendors/gsap/gsap.js"></script>
  <script src="{{ asset('frontend') }}/vendors/gsap/customEase.js"></script>
  <script src="{{ asset('frontend') }}/assets/js/theme.js"></script>
  <script src="{{ asset('frontend') }}/assets/js/coustom.js"></script>
  <script src="{{ asset('frontend') }}/vendors/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>

  <script src="{{ asset('frontend') }}/assets/js/carts/Chart.bundle.min.js"> </script>
  <script src="{{ asset('frontend') }}/assets/js/carts/Chart.Financial.js"> </script>
  <script src="{{ asset('frontend') }}/assets/js/carts/index-chart.js"> </script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
  
  <script>
    window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        title:{
            text: "Per Unit Student Apply"
        },
        axisY: {
            title: ""
        },
        data: [{
            type: "column",
            showInLegend: true,
            legendMarkerColor: "green",
            legendText: "",
            dataPoints: [
                { y: 190, label: "1st Unit" },
                { y: 130,  label: "2nd Unit" },
                { y: 189,  label: "3rd Unit" },
                { y: 150,  label: "4th Unit" },
                { y: 129,  label: "5th Unit" },
                { y: 100, label: "6th Unit" },
            ]
        }]
    });
    chart.render();

    }
    </script>
@yield('scripts')
</body>

</html>

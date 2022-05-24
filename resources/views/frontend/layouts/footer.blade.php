<footer class="footer bg-3f7764 text-center py-4">
    <div class="container">
      <div class="col-sm-12 col-12" align="center">
        <div class="trademark-list d-flex">
          <ul class="d-block">
            <li id="payment-methods">Accepted Payment Methods</li>
            <li>
              <a href="#"><img src="{{ asset('frontend') }}/assets/img/card4.png" alt=""></a>
            </li>

            <li>
              <a href="#"><img src="{{ asset('frontend') }}/assets/img/card6.png" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="{{ asset('frontend/assets/img/mqdefault.jpg') }}" alt="" height="50"></a>
            </li>
          </ul>
        </div>

      </div>
      <div class="row align-items-center opacity-85 text-white">
        <div class="col-sm-3 text-sm-start"><a href="index-2.html"><img src="{{ \App\Models\Setting::value('logo') }}" alt="logo" /></a>
        </div>
        <div class="col-sm-6 mt-3 mt-sm-0">
          <p class="lh-lg mb-0 fw-semi-bold">&copy; {{ \App\Models\Setting::value('footer') }}> </p>
        </div>
        <div class="col text-sm-end mt-3 mt-sm-0"><span class="fw-semi-bold">Designed by </span><a class="text-white"
            href="mubarok" target="_blank">Rj Mubarok</a></div>
      </div>
    </div>
  </footer>

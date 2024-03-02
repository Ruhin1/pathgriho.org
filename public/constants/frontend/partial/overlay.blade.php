@php $btn_title = App\Helper\AdditionalResources::appInfo('search_title') @endphp
<div id="overlay">
  <div class="parent img-fluid overlay" negative-z-index>
      <div class="trackOrder justify-content-center" style="width: 100%; margin: 0 auto; z-index: 0">
          <form action="log.php" class="justify-content-center row" method="get">
              <div class="col-sm-5">
                  <img src="{{ App\Helper\AdditionalResources::appInfo('logo') }}"
                      style="
                      width: 50px;
                      height: auto;
                      position: absolute;
                      top: 20%;
                      left: 20px;
                    " />
                  <input name="sku" style="padding: 20px; border-radius: 4px; padding-left: 100px" class="effect-8"
                      type="text" placeholder="{{ $btn_title }}" />
                  <span class="focus-border"></span>
              </div>
              <button type="submit" class="btn"
                  style="
                    color: white !important;
                    line-height: 1 !important;
                    margin-left: 5px;
                  ">
                  <div>{{ $btn_title }}</div>
              </button>
          </form>
      </div>
      <div class="wave"></div>
  </div>
</div>
<div style="height: 100px"></div>
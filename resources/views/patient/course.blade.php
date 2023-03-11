@extends('website.layouts.master')
@section('css')
<style>
.con{
    padding-top:100px
}

.iframe {
    padding-top: 4%;
    padding-left: 5%;
    width: 100%;
}

#ifrm {
    width: 95%;
    height:500px;
    margin-top: 10px;
}
</style>
@endsection
@section('content')


{{--    <div class="sidebar flex-shrink-0 p-3 bg-white " scrolling="auto" style="width: 280px;">

    <ul class=" sidebar-ul list-unstyled ps-0">

      <li class="mb-1">
        <button class="btn btn-toggle align-items-center  collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          Dr\ Mahmoud Ahmed
        </button>
        <div class="collapse " id="home-collapse">
          <ul class=" sidebar-ul-inside list-unstyled  pb-1 small">
            <li><a id="vid" class=" sidebar-a" href="https://www.youtube.com/embed/tgbNymZ7vqY" onclick="return loadIframe('ifrm', this.href);"  >how to live ?</a></li>
            <li><a id="vid" class="sidebar-a" href="https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&origin=http://example.com" onclick="return loadIframe('ifrm', this.href);"  >kill deprission</a></li>
            <li><a id="vid" class="sidebar-a" href=" https://www.youtube.com/embed/eI4an8aSsgw" onclick="return loadIframe('ifrm', this.href);"  >new friends</a></li>
          </ul>
        </div>
      </li>


      <li class="border-top my-3"></li>

      <li class="mb-1">
        <button class="btn btn-toggle align-items-center  collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Dr\ Ahmed Mahmoud
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="sidebar-ul-inside btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a id="vid" class=" sidebar-a" href="https://www.youtube.com/embed/tgbNymZ7vqY" onclick="return loadIframe('ifrm', this.href);"  >how to live ?</a></li>
            <li><a id="vid" class="sidebar-a" href="https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&origin=http://example.com" onclick="return loadIframe('ifrm', this.href);"  >kill deprission</a></li>
            <li><a id="vid" class="sidebar-a" href=" https://www.youtube.com/embed/eI4an8aSsgw" onclick="return loadIframe('ifrm', this.href);"  >new friends</a></li>
          </ul>
        </div>
      </li>

      <li class="border-top my-3"></li>


      <li class="mb-1">
        <button class="btn btn-toggle align-items-center  collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
          Dr\ Hatem Ahmed
        </button>
        <div class="collapse" id="orders-collapse">
          <ul class="sidebar-ul-inside btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a id="vid" class=" sidebar-a" href="https://www.youtube.com/embed/tgbNymZ7vqY" onclick="return loadIframe('ifrm', this.href);"  >how to live ?</a></li>
            <li><a id="vid" class="sidebar-a" href="https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&origin=http://example.com" onclick="return loadIframe('ifrm', this.href);"  >kill deprission</a></li>
            <li><a id="vid" class="sidebar-a" href=" https://www.youtube.com/embed/eI4an8aSsgw" onclick="return loadIframe('ifrm', this.href);"  >new friends</a></li>
          </ul>
        </div>
      </li>


      <li class="border-top my-3"></li>


      <li class="mb-1">
        <button class="btn btn-toggle align-items-center  collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          Dr\ Mostafa Ahmed
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="sidebar-ul-inside btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a id="vid" class=" sidebar-a" href="https://www.youtube.com/embed/tgbNymZ7vqY" onclick="return loadIframe('ifrm', this.href);"  >how to live ?</a></li>
            <li><a id="vid" class="sidebar-a" href="https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&origin=http://example.com" onclick="return loadIframe('ifrm', this.href);"  >kill deprission</a></li>
            <li><a id="vid" class="sidebar-a" href=" https://www.youtube.com/embed/eI4an8aSsgw" onclick="return loadIframe('ifrm', this.href);"  >new friends</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>

  <div class="iframe">
    <h1 id="head1"></h1>
    <iframe name="ifrm" id="ifrm" src="" frameborder="0">
        Your browser doesn't support iframes.
    </iframe>
</div>
</div> --}}

<div class="container con">
<div class="row">

<div class="col-3">
@foreach ($doc as $do)
 <div class="sidebar flex-shrink-0 p-3 bg-white " scrolling="auto" style="width: 280px;">
  <ul class=" sidebar-ul list-unstyled ps-0">

      <li class="mb-1">
        <button class="btn btn-toggle btn-primary align-items-center  collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
        {{$do->name}}
        </button><br>
        <div class="collapse " id="home-collapse">
          <ul class=" sidebar-ul-inside list-unstyled  pb-1 small">
              <li><a id="vid" class=" sidebar-a" href="https://www.youtube.com/embed/tgbNymZ7vqY" onclick="return loadIframe('ifrm', this.href);"  >how to live ?</a></li>
            <li><a id="vid" class="sidebar-a" href="https://www.youtube.com/embed/V-I11RKtAdI" onclick="return loadIframe('ifrm', this.href);"  >kill deprission</a></li>
            <li><a id="vid" class="sidebar-a" href=" https://www.youtube.com/embed/eI4an8aSsgw" onclick="return loadIframe('ifrm', this.href);"  >new friends</a></li>


          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
  </div>
  @endforeach
</div>


<div class="col">
 <div class="iframe">

    <iframe name="ifrm" id="ifrm" src="" frameborder="0">
        Your browser doesn't support iframes.
    </iframe>
</div>
</div>
</div>

</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
@endsection

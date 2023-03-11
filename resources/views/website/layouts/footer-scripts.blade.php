




<script src="{{URL::asset('website/assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{URL::asset('website/assets/js/popper.min.js')}}"></script>
<script src="{{URL::asset('website/assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('website/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js')}}"></script>
<script src="{{URL::asset('website/assets/plugins/slider/js/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('website/assets/js/script.js')}}"></script>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>




<script>
function loadIframe(iframeName, url) {
    var $iframe = $('#' + iframeName);
    var h1 = $("#head1")
    if ( $iframe.length ) {
        $iframe.attr('src',url);
        $("#vid").click(function(event) {
	      event.preventDefault();
        var text = $(this).text();
	      h1.append(text)
});
        return false;
    }
    return true;
}


</script>


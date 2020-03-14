(function($) {
    $(document).ready(function(){
        $(".card-body").hover(function(){
          $(".thumb-image").hide();
        },
        function(){
            $(".thumb-image").show();
        });
      });


    $('.popup-img').magnificPopup({
        type: 'image'
    });
})(jQuery);



(function($) {
  AOS.init();
  $('.btnZap').click(function() {
    window.open('https://api.whatsapp.com/send?phone=5551985865208&text=Ola, RS Pedras e Vidros!')
  });
  $('.fa-whatsapp').click(function() {
    window.open('https://api.whatsapp.com/send?phone=5551985865208&text=Ola, RS Pedras e Vidros!')
  });
  $('.popup-img').magnificPopup({
      type: 'image'
  });
})(jQuery);



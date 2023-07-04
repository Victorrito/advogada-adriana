$(document).ready(function() {
    // Função para ajustar a altura dos cards
    function ajustarAlturaCards() {
      var maxAltura = 0;
      $('.card-body-ebooks').each(function() {
        var altura = $(this).outerHeight();
        if (altura > maxAltura) {
          maxAltura = altura;
        }
      });
      $('.card-body-ebooks').css('min-height', maxAltura + 'px');
    }

    // Chama a função ao carregar a página e redimensionar a janela
    ajustarAlturaCards();
    $(window).resize(ajustarAlturaCards);
  });
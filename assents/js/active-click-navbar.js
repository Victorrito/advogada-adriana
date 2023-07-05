
    var navLinks = document.querySelectorAll('.nav-link');
    
    // Adicionar evento de clique em cada link da navbar
    navLinks.forEach(function(navLink) {
      navLink.addEventListener('click', function(event) {
        // Remover a classe 'active' de todos os links
        navLinks.forEach(function(link) {
          link.classList.remove('active');
        });
        
        // Adicionar a classe 'active' ao link clicado
        this.classList.add('active');
      });
    });

document.addEventListener("DOMContentLoaded", function () {
  // ===== Menu Mobile Básico =====
  const menuToggle = document.querySelector(".mobile-menu-toggle");
  const navMenu = document.querySelector(".nav-menu");

  if (menuToggle && navMenu) {
    menuToggle.addEventListener("click", function () {
      navMenu.classList.toggle("active");
      this.classList.toggle("active");
    });

    document.addEventListener("click", function (e) {
      if (!navMenu.contains(e.target) && !menuToggle.contains(e.target)) {
        navMenu.classList.remove("active");
        menuToggle.classList.remove("active");
      }
    });
  }

  // ===== Dropdowns Mobile =====
  const dropdowns = document.querySelectorAll(".dropdown");
  dropdowns.forEach((dropdown) => {
    const link = dropdown.querySelector("a");
    if (link && window.innerWidth <= 992) {
      link.addEventListener("click", function (e) {
        e.preventDefault();
        this.parentNode.classList.toggle("open");
      });
    }
  });
});

// ===== Navegação Responsiva Avançada =====
class ResponsiveNavigation {
  constructor() {
    this.menuToggle = document.querySelector(".menu-toggle");
    this.nav = document.querySelector(".nav");
    this.dropdownItems = document.querySelectorAll(
      ".nav__item:has(.mega-dropdown)"
    );

    if (this.menuToggle && this.nav) {
      this.isDesktop = window.innerWidth >= 1024;
      this.init();
    }
  }

  init() {
    this.bindEvents();
    this.handleResize();
  }

  bindEvents() {
    this.menuToggle.addEventListener("click", () => this.toggleMobileMenu());

    this.dropdownItems.forEach((item) => {
      const link = item.querySelector(".nav__link");
      const dropdown = item.querySelector(".mega-dropdown");

      if (link && dropdown) {
        link.addEventListener("click", (e) =>
          this.handleDropdownClick(e, item)
        );
      }
    });

    document.addEventListener("click", (e) => this.handleOutsideClick(e));
    window.addEventListener("resize", () => this.handleResize());
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        this.closeAllDropdowns();
        this.closeMobileMenu();
      }
    });
  }

  toggleMobileMenu() {
    this.nav.classList.contains("active")
      ? this.closeMobileMenu()
      : this.openMobileMenu();
  }

  openMobileMenu() {
    this.nav.classList.add("active");
    this.menuToggle.classList.add("active");
    this.menuToggle.setAttribute("aria-expanded", "true");
    document.body.style.overflow = "hidden";
  }

  closeMobileMenu() {
    this.nav.classList.remove("active");
    this.menuToggle.classList.remove("active");
    this.menuToggle.setAttribute("aria-expanded", "false");
    document.body.style.overflow = "";
    this.closeAllDropdowns();
  }

  handleDropdownClick(e, item) {
    if (!this.isDesktop) {
      e.preventDefault();
      this.toggleDropdown(item);
    }
  }

  toggleDropdown(item) {
    item.classList.contains("active")
      ? this.closeDropdown(item)
      : this.openDropdown(item);
  }

  openDropdown(item) {
    this.closeAllDropdowns();
    item.classList.add("active");
    item.querySelector(".mega-dropdown").classList.add("active");
    item.querySelector(".nav__link").setAttribute("aria-expanded", "true");
  }

  closeDropdown(item) {
    item.classList.remove("active");
    const dropdown = item.querySelector(".mega-dropdown");
    if (dropdown) dropdown.classList.remove("active");
    const link = item.querySelector(".nav__link");
    if (link) link.setAttribute("aria-expanded", "false");
  }

  closeAllDropdowns() {
    this.dropdownItems.forEach((item) => this.closeDropdown(item));
  }

  handleOutsideClick(e) {
    if (!e.target.closest(".nav") && !e.target.closest(".menu-toggle")) {
      this.closeMobileMenu();
    }
  }

  handleResize() {
    const wasDesktop = this.isDesktop;
    this.isDesktop = window.innerWidth >= 1024;

    if (this.isDesktop && !wasDesktop) {
      this.closeMobileMenu();
      this.closeAllDropdowns();
    } else if (!this.isDesktop && wasDesktop) {
      this.closeAllDropdowns();
    }
  }
}

document.addEventListener("DOMContentLoaded", () => {
  if (
    document.querySelector(".menu-toggle") &&
    document.querySelector(".nav")
  ) {
    new ResponsiveNavigation();
  }
});

// ===== Script do Template parts Doubt Soluçôes FAQ =====
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('.section-doubt-faq-header').forEach(header => {
    header.addEventListener('click', () => {
      const item = header.parentElement;
      const answer = item.querySelector('.section-doubt-faq-answer');
      if (answer) {
        answer.style.display = (answer.style.display === 'none') ? 'block' : 'none';
      }
    });
  });
});

// ===== Script do Template parts do carrosel da pagina Xopvision =====
document.addEventListener('DOMContentLoaded', function () {
  const track = document.querySelector('.se-consultadoria-solutions-carousel__carousel-track');
  const prevBtn = document.querySelector('.se-consultadoria-solutions-carousel__nav-btn--prev');
  const nextBtn = document.querySelector('.se-consultadoria-solutions-carousel__nav-btn--next');
  const cards = document.querySelectorAll('.se-consultadoria-solutions-carousel__card');

  if (!track || !prevBtn || !nextBtn || cards.length === 0) return;

  const cardWidth = 280 + 24;
  const visibleCards = window.innerWidth <= 768 ? 1 : 3;

  for (let i = 0; i < visibleCards; i++) {
    if (cards[i] && cards[cards.length - 1 - i]) {
      const firstClone = cards[i].cloneNode(true);
      const lastClone = cards[cards.length - 1 - i].cloneNode(true);
      track.appendChild(firstClone);
      track.insertBefore(lastClone, track.firstChild);
    }
  }

  const allCards = track.querySelectorAll('.se-consultadoria-solutions-carousel__card');
  let currentIndex = visibleCards;

  function updateCarousel(animate = true) {
    if (!track) return;
    track.style.transition = animate ? 'transform 0.3s ease' : 'none';
    const translateX = -currentIndex * cardWidth;
    track.style.transform = `translateX(${translateX}px)`;
  }

  function moveNext() {
    currentIndex++;
    updateCarousel();
    if (currentIndex === allCards.length - visibleCards) {
      setTimeout(() => {
        currentIndex = visibleCards;
        updateCarousel(false);
      }, 310);
    }
  }

  function movePrev() {
    currentIndex--;
    updateCarousel();
    if (currentIndex === 0) {
      setTimeout(() => {
        currentIndex = allCards.length - visibleCards * 2;
        updateCarousel(false);
      }, 310);
    }
  }

  prevBtn.addEventListener('click', movePrev);
  nextBtn.addEventListener('click', moveNext);

  window.addEventListener('resize', () => {
    updateCarousel(false);
  });

  updateCarousel(false);
});

// ===== Script do Template parts do carrosel das empresas página Soluções Documentais =====
(function () {
  const wrapper = document.getElementById('carouselWrapper');
  const cards = document.querySelectorAll('.section-carrosel-empresas-card');
  if (!wrapper || cards.length === 0) return;

  let currentSlide = 0;
  const totalCards = cards.length;

  function getVisibleCards() {
    if (window.innerWidth >= 1024) return 5;
    if (window.innerWidth >= 768) return 3;
    if (window.innerWidth >= 480) return 2;
    return 1;
  }

  function slideCarousel() {
    const visibleCards = getVisibleCards();
    const maxSlide = Math.max(0, totalCards - visibleCards);

    currentSlide++;
    if (currentSlide > maxSlide) {
      currentSlide = 0;
    }

    if (!cards[0]) return;
    const cardWidth = cards[0].offsetWidth + 20;
    const translateX = -currentSlide * cardWidth;
    wrapper.style.transform = `translateX(${translateX}px)`;
  }

  window.addEventListener('resize', () => {
    currentSlide = 0;
    if (wrapper) wrapper.style.transform = 'translateX(0)';
  });

  setInterval(() => {
    if (window.innerWidth < 1024) {
      slideCarousel();
    }
  }, 4000);
})();

// ===== Script do Template parts do carrosel testemunhos =====
document.addEventListener("DOMContentLoaded", function () {
  let currentSlide = 0;
  const cardsContainer = document.getElementById("testimonialCards");
  const cards = document.querySelectorAll(".section-testimonials-card");
  const totalSlides = cards.length;
  const navButtons = document.querySelectorAll(".section-testimonials-nav-button");
  let slideInterval;

  if (!cardsContainer || totalSlides === 0) return;

  function updateCarousel() {
    const translateX = -currentSlide * 100;
    cardsContainer.style.transform = `translateX(${translateX}%)`;

    navButtons.forEach(btn => btn.classList.remove('active'));
    if (navButtons[currentSlide % 2]) {
      navButtons[currentSlide % 2].classList.add('active');
    }
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateCarousel();
  }

  function previousSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateCarousel();
  }

  function startInterval() {
    slideInterval = setInterval(nextSlide, 6000);
  }

  function resetInterval() {
    clearInterval(slideInterval);
    startInterval();
  }

  // Inicializar
  updateCarousel();
  startInterval();

  // Substituir onclick por event listeners
  if (navButtons.length >= 2) {
    navButtons[0].addEventListener("click", () => {
      previousSlide();
      resetInterval();
    });
    navButtons[1].addEventListener("click", () => {
      nextSlide();
      resetInterval();
    });
  }
});

// ===== Script scrool para o formulário =====

document.addEventListener("DOMContentLoaded", function () {
    const hash = window.location.hash;
    if (hash === "#formulario") {
      const target = document.querySelector(hash);
      if (target) {
        setTimeout(() => {
          target.scrollIntoView({ behavior: "smooth" });
        }, 300); // atraso para garantir que a página carregou tudo
      }
    }
  });
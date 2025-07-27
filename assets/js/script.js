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
// Simple toggle functionality for FAQ items
        document.querySelectorAll('.section-doubt-faq-header').forEach(header => {
            header.addEventListener('click', () => {
                const item = header.parentElement;
                const answer = item.querySelector('.section-doubt-faq-answer');
                
                // Toggle visibility
                if (answer.style.display === 'none') {
                    answer.style.display = 'block';
                } else {
                    answer.style.display = 'none';
                }
            });
        });

// ===== Script do Template parts do carrosel da pagina Xopvision =====
document.addEventListener('DOMContentLoaded', function () {
  const track = document.querySelector('.se-consultadoria-solutions-carousel__carousel-track');
  const prevBtn = document.querySelector('.se-consultadoria-solutions-carousel__nav-btn--prev');
  const nextBtn = document.querySelector('.se-consultadoria-solutions-carousel__nav-btn--next');
  const cards = document.querySelectorAll('.se-consultadoria-solutions-carousel__card');
  const cardWidth = 280 + 24; // Largura + gap
  const visibleCards = window.innerWidth <= 768 ? 1 : 3;
  const totalCards = cards.length;

  // Clonar primeiros e últimos cards para efeito de loop
  for (let i = 0; i < visibleCards; i++) {
    const firstClone = cards[i].cloneNode(true);
    const lastClone = cards[cards.length - 1 - i].cloneNode(true);
    track.appendChild(firstClone);
    track.insertBefore(lastClone, track.firstChild);
  }

  const allCards = track.querySelectorAll('.se-consultadoria-solutions-carousel__card');
  let currentIndex = visibleCards;

  function updateCarousel(animate = true) {
    if (!animate) {
      track.style.transition = 'none';
    } else {
      track.style.transition = 'transform 0.3s ease';
    }

    const translateX = -currentIndex * cardWidth;
    track.style.transform = `translateX(${translateX}px)`;
  }

  function moveNext() {
    currentIndex++;
    updateCarousel();

    // Reset para início real depois de último clone
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

    // Reset para final real depois de primeiro clone
    if (currentIndex === 0) {
      setTimeout(() => {
        currentIndex = allCards.length - visibleCards * 2;
        updateCarousel(false);
      }, 310);
    }
  }

  prevBtn.addEventListener('click', movePrev);
  nextBtn.addEventListener('click', moveNext);

  // Ajuste em redimensionamento
  window.addEventListener('resize', () => {
    // (Opcional: podes recalcular aqui se mudares o número de cartões visíveis)
    updateCarousel(false);
  });

  // Inicializar posição
  updateCarousel(false);
});
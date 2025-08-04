const toggleButton = document.getElementById("toggleSidebar");
const sidebar = document.getElementById("sidebar-desktop");
const content = document.getElementById("main-content");
let collapsed = false;
let tooltipInstances = [];

function toggleTooltips(enable) {
  tooltipInstances.forEach((t) => t.dispose());
  tooltipInstances = [];

  if (enable) {
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach((el) => {
      tooltipInstances.push(
        new bootstrap.Tooltip(el, {
          placement: "right",
        })
      );
      // Ocultar tooltip al hacer click en el enlace
      el.addEventListener("click", function hideTooltipOnClick() {
        const tip = bootstrap.Tooltip.getInstance(el);
        if (tip) tip.hide();
      });
    });
  }
}

toggleButton.addEventListener("click", () => {
  collapsed = !collapsed;
  sidebar.classList.toggle("collapsed", collapsed);
  content.classList.toggle("collapsed", collapsed);
  toggleButton.innerHTML = `<i class="bi bi-chevron-${
    collapsed ? "right" : "left"
  }"></i>`;
  toggleTooltips(collapsed);
});

// Activar tooltips solo si el sidebar está colapsado al cargar
if (sidebar.classList.contains("collapsed")) {
  toggleTooltips(true);
}

// Lógica para selector de tema (claro, oscuro, sistema)
(() => {
  'use strict';

  const themeRadios = document.querySelectorAll('input[name="appearance"]');
  const themeBtnIconDevice = document.querySelector("#theme-device i");
  const themeBtnIconMovil = document.querySelector("#theme-movil i");

  const getStoredTheme = () => localStorage.getItem('theme');

  // Función que se llama cuando el usuario cambia el tema
  const setTheme = (theme) => {
    document.documentElement.setAttribute(
      "data-bs-theme",
      theme === 'device'
        ? (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
        : theme
    );

    if (theme === 'device') {
      localStorage.removeItem('theme');
    } else {
      localStorage.setItem('theme', theme);
    }

    updateActiveThemeUI(theme);
  };

  // Función que solo actualiza los iconos y botones de radio
  const updateActiveThemeUI = (theme) => {
    let iconClass = 'bi-circle-half';
    if (theme === 'light') iconClass = 'bi-sun';
    else if (theme === 'dark') iconClass = 'bi-moon';

    if (themeBtnIconDevice) {
      themeBtnIconDevice.className = `bi ${iconClass}`;
    }
    if (themeBtnIconMovil) {
      themeBtnIconMovil.className = `bi ${iconClass}`;
    }

    themeRadios.forEach((radio) => {
      radio.checked = radio.value === theme;
    });
  };

  // Al cargar la página, solo actualizamos la UI (iconos/radios).
  // El tema ya fue aplicado por el script en <head>.
  window.addEventListener('DOMContentLoaded', () => {
    const savedTheme = getStoredTheme() || 'device';
    updateActiveThemeUI(savedTheme);

    themeRadios.forEach(radio => {
      radio.addEventListener('change', () => setTheme(radio.value));
    });

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
      if (!getStoredTheme() || getStoredTheme() === 'device') {
        setTheme('device');
      }
    });
  });
})();

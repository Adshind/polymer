/**
 * Polymer Products - Dynamic Theme Color Switcher Engine
 * Automatically mounts floating palette switcher and applies dynamic CSS variables globally.
 */

(function () {
    const DEFAULT_COLOR = '#3691bf';
    const STORAGE_KEY = 'pp_theme_color';

    const COLOR_PRESETS = [
        { name: 'Industrial Orange', color: '#f55f01' },
        { name: 'Corporate Blue', color: '#0b57d0' },
        { name: 'Emerald Green', color: '#059669' },
        { name: 'Precision Red', color: '#dc2626' },
        { name: 'Tech Purple', color: '#7c3aed' },
        { name: 'Amber Gold', color: '#d97706' },
        { name: 'Cyan Blue', color: '#0284c7' },
        { name: 'Deep Rose', color: '#e11d48' }
    ];

    // Helper: Hex to RGB
    function hexToRgb(hex) {
        hex = hex.replace(/^#/, '');
        if (hex.length === 3) {
            hex = hex.split('').map(c => c + c).join('');
        }
        const num = parseInt(hex, 16);
        return {
            r: (num >> 16) & 255,
            g: (num >> 8) & 255,
            b: num & 255
        };
    }

    // Helper: Adjust brightness (negative to darken, positive to lighten)
    function adjustBrightness(hex, percent) {
        const { r, g, b } = hexToRgb(hex);
        const format = (c) => {
            const adjusted = Math.min(255, Math.max(0, Math.round(c + (percent * 255))));
            return adjusted.toString(16).padStart(2, '0');
        };
        return `#${format(r)}${format(g)}${format(b)}`;
    }

    // Apply color theme dynamically to :root and inline elements
    function applyThemeColor(primaryHex) {
        if (!primaryHex || !primaryHex.startsWith('#')) return;

        const rgb = hexToRgb(primaryHex);
        const hoverHex = adjustBrightness(primaryHex, -0.15); // 15% darker
        const lightHex = adjustBrightness(primaryHex, 0.25);  // 25% lighter
        const lighterHex = adjustBrightness(primaryHex, 0.55);// 55% lighter
        const subtleRgba = `rgba(${rgb.r}, ${rgb.g}, ${rgb.b}, 0.12)`;
        const glowRgba = `rgba(${rgb.r}, ${rgb.g}, ${rgb.b}, 0.35)`;

        const root = document.documentElement;
        root.style.setProperty('--theme-primary', primaryHex);
        root.style.setProperty('--theme-hover', hoverHex);
        root.style.setProperty('--theme-light', lightHex);
        root.style.setProperty('--theme-lighter', lighterHex);
        root.style.setProperty('--theme-subtle', subtleRgba);
        root.style.setProperty('--theme-glow', glowRgba);
        root.style.setProperty('--bs-primary', primaryHex);
        root.style.setProperty('--ht-theme-color-2', primaryHex);

        try {
            localStorage.setItem(STORAGE_KEY, primaryHex);
        } catch (e) { }

        // Update active swatch state in UI if rendered
        document.querySelectorAll('.pp-color-swatch').forEach(btn => {
            if (btn.dataset.color.toLowerCase() === primaryHex.toLowerCase()) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });

        const customPicker = document.querySelector('.pp-custom-color-input');
        if (customPicker) {
            customPicker.value = primaryHex;
        }

        // Dynamically update any SVG circles and paths (e.g. footer ambient glow & sparkline charts)
        document.querySelectorAll('.footer-shape svg circle').forEach(c => {
            c.setAttribute('fill', primaryHex);
        });
        document.querySelectorAll('.prozen-floating-card svg path').forEach(p => {
            p.setAttribute('stroke', primaryHex);
        });
        document.querySelectorAll('.prozen-floating-card svg circle').forEach(c => {
            c.setAttribute('fill', primaryHex);
        });
    }

    // Immediately apply saved color from localStorage before DOM completes
    const savedColor = localStorage.getItem(STORAGE_KEY) || DEFAULT_COLOR;
    applyThemeColor(savedColor);

    // Mount UI Switcher Widget when DOM is ready
    function initSwitcherUI() {
        if (document.getElementById('ppThemeSwitcher')) return;

        // Ensure stylesheet is loaded
        if (!document.querySelector('link[href*="theme-switcher.css"]')) {
            const link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = 'assets/css/theme-switcher.css';
            document.head.appendChild(link);
        }

        const switcherEl = document.createElement('div');
        switcherEl.id = 'ppThemeSwitcher';
        switcherEl.className = 'pp-theme-switcher';

        let swatchesHtml = '';
        COLOR_PRESETS.forEach(preset => {
            const isActive = preset.color.toLowerCase() === (localStorage.getItem(STORAGE_KEY) || DEFAULT_COLOR).toLowerCase() ? 'active' : '';
            swatchesHtml += `<button type="button" class="pp-color-swatch ${isActive}" data-color="${preset.color}" title="${preset.name}" style="background-color: ${preset.color};"></button>`;
        });

        switcherEl.innerHTML = `
            <button type="button" class="pp-switcher-toggle" id="ppSwitcherToggle" aria-label="Customize Theme Colors">
                <i class="fa-solid fa-palette"></i>
            </button>
            <div class="pp-switcher-panel">
                <div class="pp-switcher-header">
                    <h6><i class="fa-solid fa-wand-magic-sparkles text-primary"></i> Live Theme Color</h6>
                    <button type="button" class="pp-switcher-close" id="ppSwitcherClose" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="pp-color-palette">
                    ${swatchesHtml}
                </div>
                <div class="pp-custom-picker-wrap">
                    <label for="ppCustomColor"><i class="fa-solid fa-eye-dropper me-1 text-primary"></i> Custom Color</label>
                    <input type="color" id="ppCustomColor" class="pp-custom-color-input" value="${savedColor}">
                </div>
                <button type="button" class="pp-switcher-reset" id="ppSwitcherReset">
                    <i class="fa-solid fa-rotate-left"></i> Reset to Default
                </button>
            </div>
        `;

        document.body.appendChild(switcherEl);

        // Events
        const toggleBtn = document.getElementById('ppSwitcherToggle');
        const closeBtn = document.getElementById('ppSwitcherClose');
        const resetBtn = document.getElementById('ppSwitcherReset');
        const customInput = document.getElementById('ppCustomColor');

        toggleBtn.addEventListener('click', () => {
            switcherEl.classList.toggle('open');
        });

        closeBtn.addEventListener('click', () => {
            switcherEl.classList.remove('open');
        });

        // Close on outside click
        document.addEventListener('click', (e) => {
            if (!switcherEl.contains(e.target)) {
                switcherEl.classList.remove('open');
            }
        });

        // Swatch clicks
        switcherEl.querySelectorAll('.pp-color-swatch').forEach(btn => {
            btn.addEventListener('click', () => {
                applyThemeColor(btn.dataset.color);
            });
        });

        // Custom color input
        customInput.addEventListener('input', (e) => {
            applyThemeColor(e.target.value);
        });

        // Reset button
        resetBtn.addEventListener('click', () => {
            applyThemeColor(DEFAULT_COLOR);
        });

        // Re-apply in case DOM rendered new SVGs
        applyThemeColor(localStorage.getItem(STORAGE_KEY) || DEFAULT_COLOR);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initSwitcherUI);
    } else {
        initSwitcherUI();
    }
})();

import './bootstrap';
import "../css/app.css";

// Language dropdown functionality with smooth animations
function toggleLanguageDropdown(uniqueId) {
    const dropdown = document.getElementById('language-dropdown-' + uniqueId);
    const button = document.getElementById('language-menu-button-' + uniqueId);
    
    if (!dropdown || !button) return;
    
    // Toggle dropdown visibility with animation
    if (dropdown.classList.contains('hidden')) {
        dropdown.classList.remove('hidden');
        button.setAttribute('aria-expanded', 'true');
        
        // Trigger animation
        requestAnimationFrame(() => {
            dropdown.style.opacity = '0';
            dropdown.style.transform = 'translateY(-10px) scale(0.95)';
            
            requestAnimationFrame(() => {
                dropdown.style.transition = 'opacity 0.3s ease-out, transform 0.3s ease-out';
                dropdown.style.opacity = '1';
                dropdown.style.transform = 'translateY(0) scale(1)';
            });
        });
        
        // Close dropdown when clicking outside
        const closeDropdown = function(event) {
            const container = document.getElementById('lang-dropdown-container-' + uniqueId);
            if (container && !container.contains(event.target)) {
                // Animate out
                dropdown.style.transition = 'opacity 0.2s ease-in, transform 0.2s ease-in';
                dropdown.style.opacity = '0';
                dropdown.style.transform = 'translateY(-10px) scale(0.95)';
                
                setTimeout(() => {
                    dropdown.classList.add('hidden');
                    button.setAttribute('aria-expanded', 'false');
                    dropdown.style.transition = '';
                }, 200);
                
                document.removeEventListener('click', closeDropdown);
            }
        };
        
        // Use setTimeout to avoid immediate closure
        setTimeout(() => {
            document.addEventListener('click', closeDropdown);
        }, 10);
    } else {
        // Animate out
        dropdown.style.transition = 'opacity 0.2s ease-in, transform 0.2s ease-in';
        dropdown.style.opacity = '0';
        dropdown.style.transform = 'translateY(-10px) scale(0.95)';
        
        setTimeout(() => {
            dropdown.classList.add('hidden');
            button.setAttribute('aria-expanded', 'false');
            dropdown.style.transition = '';
        }, 200);
    }
}

// Make function globally available
window.toggleLanguageDropdown = toggleLanguageDropdown;

// Close dropdown when clicking on a language option with animation
document.addEventListener('DOMContentLoaded', function() {
    const langLinks = document.querySelectorAll('[id^="language-dropdown-"] a');
    langLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const dropdown = this.closest('[id^="language-dropdown-"]');
            if (dropdown) {
                const uniqueId = dropdown.id.replace('language-dropdown-', '');
                const dropdownElement = document.getElementById('language-dropdown-' + uniqueId);
                const button = document.getElementById('language-menu-button-' + uniqueId);
                
                // Add click animation
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
                
                // Animate dropdown close
                if (dropdownElement) {
                    dropdownElement.style.transition = 'opacity 0.2s ease-in, transform 0.2s ease-in';
                    dropdownElement.style.opacity = '0';
                    dropdownElement.style.transform = 'translateY(-10px) scale(0.95)';
                    
                    setTimeout(() => {
                        dropdownElement.classList.add('hidden');
                        dropdownElement.style.transition = '';
                        if (button) button.setAttribute('aria-expanded', 'false');
                    }, 200);
                }
            }
        });
    });
});


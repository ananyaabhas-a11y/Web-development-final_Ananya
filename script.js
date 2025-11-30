// Navigation handling
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav-menu a[href^="#"]');
    const sections = document.querySelectorAll('.section');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            
            sections.forEach(section => {
                section.classList.remove('active');
            });
            
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                targetSection.classList.add('active');
            }
        });
    });
});

// PDF download functionality
function downloadPDF(type) {
    if (type === 'grades') {
        window.location.href = 'generate_pdf.php?type=grades';
    } else if (type === 'calendar') {
        window.location.href = 'generate_pdf.php?type=calendar';
    }
}

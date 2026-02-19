document.addEventListener('DOMContentLoaded', () => {
    // 1. Smooth Scrolling for Navigation Links
    const navLinks = document.querySelectorAll('.nav-link, .navbar-brand, .btn[href^="#"]');

    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href.startsWith('#')) {
                e.preventDefault();
                const targetElement = document.querySelector(href);
                if (targetElement) {
                    const navbarHeight = document.querySelector('.navbar').offsetHeight;
                    const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // 2. Navbar Scroll Effect
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('shadow-lg');
            navbar.style.padding = '0.5rem 0';
        } else {
            navbar.classList.remove('shadow-lg');
            navbar.style.padding = '1rem 0';
        }
    });

    // 3. Contact Form Submission
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Get form data
            const name = document.getElementById('userName').value;
            const email = document.getElementById('userEmail').value;
            const message = document.getElementById('userMessage').value;

            // Simple validation check
            if (name && email && message) {
                // Show a success message (you could use a modal or toast)
                const submitBtn = contactForm.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerText;

                submitBtn.innerText = 'Sending...';
                submitBtn.disabled = true;

                // Simulate an API call
                setTimeout(() => {
                    alert(`Thank you, ${name}! Your message has been sent successfully.`);
                    submitBtn.innerText = 'Sent!';
                    contactForm.reset();

                    setTimeout(() => {
                        submitBtn.innerText = originalText;
                        submitBtn.disabled = false;
                    }, 3000);
                }, 1500);
            }
        });
    }

    // 4. Reveal Animations & Scroll Spy on Scroll
    const sections = document.querySelectorAll('section[id]');
    const navItems = document.querySelectorAll('.nav-link');

    // Reveal Observer
    const revealOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    };

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const revealElements = entry.target.querySelectorAll('.animate__animated');
                revealElements.forEach(el => {
                    const animation = el.dataset.animation || 'fadeInUp';
                    el.classList.add(`animate__${animation}`);
                    el.style.opacity = '1';
                });

                // Active Link Logic (Scroll Spy)
                const id = entry.target.getAttribute('id');
                navItems.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${id}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }, revealOptions);

    sections.forEach(section => {
        revealObserver.observe(section);
    });

    // 5. Back to Top Button Logic
    const backToTopBtn = document.getElementById('backToTop');
    if (backToTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // 6. Performance Chart (Chart.js)
    const chartCanvas = document.getElementById('performanceChart');
    if (chartCanvas && typeof Chart !== 'undefined') {
        const ctx = chartCanvas.getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'System Uptime (%)',
                    data: [99.2, 99.5, 99.1, 99.8, 99.9, 99.7],
                    borderColor: '#2563eb',
                    backgroundColor: 'rgba(37, 99, 235, 0.1)',
                    fill: true,
                    tension: 0.4
                }, {
                    label: 'User Engagement',
                    data: [65, 72, 68, 85, 90, 88],
                    borderColor: '#dc2626',
                    backgroundColor: 'rgba(220, 38, 38, 0.1)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        grid: {
                            display: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    }

    // 7. Handle form validation and Toast
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            if (!contactForm.checkValidity()) {
                e.stopPropagation();
                contactForm.classList.add('was-validated');
                return;
            }

            const submitBtn = contactForm.querySelector('button[type="submit"]');
            if (!submitBtn) return;

            const originalText = submitBtn.innerText;

            submitBtn.innerText = 'Sending...';
            submitBtn.disabled = true;

            // Simulate API Call
            setTimeout(() => {
                const toastEl = document.getElementById('contactToast');
                if (toastEl && typeof bootstrap !== 'undefined' && bootstrap.Toast) {
                    const toast = new bootstrap.Toast(toastEl);
                    toast.show();
                }

                contactForm.reset();
                contactForm.classList.remove('was-validated');
                submitBtn.innerText = originalText;
                submitBtn.disabled = false;
            }, 1500);
        });
    }
    // 8. Facebook Feed Loader - Dynamic version
    async function loadFeeds() {
        console.log('Fetching community feeds...');

        // Find all feed containers on the page automatically
        const feedContainers = document.querySelectorAll('.fb-feed-container');
        if (feedContainers.length === 0) return;

        try {
            const response = await fetch(`${window.location.origin}/new_home_page/updates/get_facebook_feeds.php`);
            if (!response.ok) throw new Error('Failed to load feed data');

            const data = await response.json();
            console.log('Feed data loaded successfully:', data);

            feedContainers.forEach(container => {
                // Get category from ID (ID format is "category-feed")
                const category = container.id.replace('-feed', '');

                if (data[category]) {
                    if (data[category].length > 0) {
                        renderFeed(container, data[category]);
                    } else {
                        container.innerHTML = `<div class="p-4 text-center text-muted small">No recent updates.</div>`;
                    }
                }
            });
        } catch (error) {
            console.error('Error loading Facebook feeds:', error);
            feedContainers.forEach(container => {
                container.innerHTML = `<div class="p-4 text-center text-muted small">
                    <i class="bi bi-exclamation-triangle-fill text-warning d-block mb-2 fs-4"></i>
                    Unable to connect to live updates.
                </div>`;
            });
        }
    }

    // Auto-refresh every 60 seconds to simulate a live connection
    setInterval(loadFeeds, 60000);

    function renderFeed(container, posts) {
        container.innerHTML = ''; // Clear existing static content

        posts.forEach(post => {
            const postEl = document.createElement('div');
            postEl.className = 'fb-post';

            let imageHtml = post.image ? `<img src="${post.image}" class="fb-post-image" alt="Post attachment">` : '';

            postEl.innerHTML = `
                <div class="fb-post-header">
                    <img src="${post.avatar}" class="fb-post-avatar" alt="Avatar">
                    <div>
                        <h6 class="fb-post-author">${post.author}</h6>
                        <span class="fb-post-time">${post.time} · <i class="bi bi-globe-americas"></i></span>
                    </div>
                </div>
                <div class="fb-post-content">
                    <p class="small mb-0">${post.content}</p>
                </div>
                ${imageHtml}
                <div class="fb-post-stats">
                    <span><i class="bi bi-hand-thumbs-up-fill text-primary"></i> ${post.stats.likes}</span>
                    <span>${post.stats.comments} Comments · ${post.stats.shares} Shares</span>
                </div>
                <div class="fb-post-actions">
                    <div class="fb-action-btn"><i class="bi bi-hand-thumbs-up"></i> Like</div>
                    <div class="fb-action-btn"><i class="bi bi-chat-square"></i> Comment</div>
                    <div class="fb-action-btn"><i class="bi bi-share"></i> Share</div>
                </div>
            `;
            container.appendChild(postEl);
        });
    }

    // Initialize feeds
    loadFeeds();

    // 9. Auto-Reload for Development (Checks for server-side changes)
    if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
        let lastModified = null;
        setInterval(() => {
            fetch(window.location.href, { method: 'HEAD', cache: 'no-cache' })
                .then(response => {
                    const currentModified = response.headers.get('Last-Modified');
                    if (lastModified && currentModified && lastModified !== currentModified) {
                        console.log('File change detected. Reloading...');
                        window.location.reload();
                    }
                    lastModified = currentModified;
                })
                .catch(() => { /* Silent fail if server is temporarily down during save */ });
        }, 2000);
    }
});


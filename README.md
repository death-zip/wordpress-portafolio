# WordPress Portfolio - Custom Theme

This is a custom WordPress theme I developed from scratch for my professional portfolio. It showcases my skills in PHP development, WordPress theming, Gutenberg blocks with React, and performance optimization.

---

## 🔗 Live Demo

**Visit my portfolio:** [juanantonioportafolio.freepage.cc](http://juanantonioportafolio.freepage.cc)

---

## 📋 Features

- **100% Custom Theme** – Built from scratch with PHP, HTML5, CSS3, and JavaScript
- **Custom Post Type** – "Projects" for showcasing portfolio work
- **Gutenberg Block** – Custom "Welcome Message" block built with React
- **Navigation Menus** – Fully configurable with WordPress menu system
- **Post Thumbnails** – Featured image support for projects
- **Responsive Design** – Works on all screen sizes
- **Performance Optimized** – Clean code, minimal dependencies, fast loading
- **SEO Friendly** – Semantic HTML and proper WordPress hooks

---

## 🛠️ Technologies Used

| Category | Technologies |
|----------|--------------|
| **Backend** | PHP 8.2+, WordPress 7.0+ |
| **Frontend** | HTML5, CSS3, JavaScript (React for Gutenberg) |
| **Server** | Nginx, Apache, MySQL, Redis |
| **DevOps** | Docker, GitHub Actions, Bash, Python |
| **Cloud** | Cloudflare, AWS, DigitalOcean |

---

## 📁 Project Structure

mi-portafolio-theme/
├── style.css # Theme styles and WordPress header
├── index.php # Main template
├── header.php # Site header
├── footer.php # Site footer
├── functions.php # Theme setup, CPTs, Gutenberg block registration
├── block.js # Custom Gutenberg block (React)
├── archive-proyecto.php # Archive template for projects
├── page-proyectos.php # Custom page template for projects listing
└── single-proyecto.php # Single project template
text


---

## 🚀 Installation

1. **Clone this repository** into your WordPress `wp-content/themes/` folder:
   ```bash
   git clone https://github.com/death-zip/wordpress-portafolio.git

    Activate the theme from the WordPress admin panel:

        Go to Appearance > Themes

        Find "Mi Portafolio Theme" and click Activate

    (Optional) Install the Gutenberg plugin for full block editor support.

    Create the required pages:

        Home

        Projects (use the "Lista de Proyectos" template)

        About Me

    Configure the menu:

        Go to Appearance > Menus

        Create a menu called "Menú Principal"

        Add your pages and save

📦 Projects Included

This portfolio includes the following projects:
Project	Description	Technologies
WordPress Portfolio + Docker	Custom theme with Docker, Nginx, PHP 8.2, MySQL, Redis caching	WordPress, PHP, React, Docker, Nginx, Cloudflare
Backup Automation with Bash	Automated WordPress backups with Bash scripts and AWS S3	Bash, AWS CLI, MySQL, cron, GPG
Core Web Vitals Improvement	Reduced LCP from 4.2s to 1.8s, CLS to 0.02	WordPress, Nginx, Redis, WebP, PageSpeed Insights
High-Performance Landing Page	Conversion rate: 12.5%, loading time: 1.2s	WordPress, JavaScript, GTM, CSS3, Mailchimp API
📊 Performance Results

    Lighthouse Score: 95+ in performance

    TTFB: 120ms

    LCP: 1.8s (reduced from 4.2s)

    CLS: 0.02 (reduced from 0.15)

    Mobile Score: 92 (Lighthouse)

📄 Requirements

    WordPress 7.0 or higher

    PHP 8.2 or higher

    Gutenberg plugin (optional, for block editing)

👤 Author

Juan Antonio Rivera Rodríguez

    📍 Villahermosa, Tabasco, México

    📧 riverarodriguezjuanantonio@gmail.com

    🔗 GitHub

    🔗 LinkedIn

📝 License

This project is open source and available for learning purposes.
🙏 Acknowledgments

Built as part of my professional portfolio to demonstrate WordPress development, theming, and infrastructure skills.

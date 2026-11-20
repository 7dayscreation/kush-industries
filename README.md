# Kush Industries Limited - Static Website

High-performance, modern, folder-based clean URL static website for **Kush Industries Limited**, prepared for hosting on **GitHub Pages**, **Cloudflare Pages**, or any static hosting service.

---

## Clean URL Routing Structure

Every page is hosted inside its own directory as `index.html`, delivering clean URLs without `.html` file extensions:

| Route | Destination | Description |
| :--- | :--- | :--- |
| `/` | `index.html` | Homepage & Business Overview |
| `/about/` | `about/index.html` | About Company, CIN, Directors, Committees |
| `/news/` | `news/index.html` | Latest Announcements, AGM Notices & BSE Updates |
| `/disclosure-under-regulation-46-sebi/` | `disclosure-under-regulation-46-sebi/index.html` | Statutory LODR Disclosures & Regulatory Index |
| `/contact/` | `contact/index.html` | Registered Office, Interactive Google Map & Inquiry Form |
| `/annual-reports/` | `annual-reports/index.html` | Annual Reports, Annual Returns, Secretarial Compliance |
| `/board-meeting/` | `board-meeting/index.html` | Notices of Board Meetings & Statutory PDF archives |
| `/financial-results/` | `financial-results/index.html` | Quarterly Financial Results & Newspaper Publications |
| `/share-holding-pattern/` | `share-holding-pattern/index.html` | Quarterly Shareholding Pattern Reports |
| `/corporate-announcements/` | `corporate-announcements/index.html` | Key Managerial Personnel & Corporate Disclosures |
| `/corporate-governance/` | `corporate-governance/index.html` | Quarterly Corporate Governance Reports |
| `/csr-policy/` | `csr-policy/index.html` | Codes of Conduct & Corporate Governance Policies |
| `/financial-information/` | `financial-information/index.html` | Comprehensive Historical Financial Disclosures |
| `/quarterly-results/` | `quarterly-results/index.html` | Historical Quarterly BSE Filings |
| `/registrar-transfer-agent/` | `registrar-transfer-agent/index.html` | RTA Contact & Demat Procedure |
| `/related-party-transactions/` | `related-party-transactions/index.html` | Half-Yearly Related Party Transaction Filings |
| `/stock-exchanges/` | `stock-exchanges/index.html` | BSE Listing Information, Scrip Code & ISIN |

---

## Assets Architecture (`assets/`)

All stylesheets, web fonts, brand assets, and JavaScript libraries are organized in a centralized folder:

```
assets/
├── css/
│   ├── bootstrap.min.css         # Grid system & core styles
│   ├── font-awesome.min.css      # Icons
│   ├── green.css                 # Brand theme
│   ├── custom.css                # Custom overrides
│   └── magnific-popup.css        # Lightbox popup
├── fonts/
│   └── fontawesome-webfont*      # FontAwesome icon fonts
├── images/
│   ├── logo.png                  # Kush Industries brand logo
│   ├── favicon/                  # Favicon asset
│   ├── photos/                   # Photo assets & backgrounds
│   └── *.jpg, *.svg, *.png       # Slider & section banners
└── js/
    ├── jquery-2.1.0.min.js       # Core jQuery
    ├── popper.js                 # Popper tooltips
    ├── bootstrap.min.js          # Bootstrap 4 components
    ├── scrollreveal.min.js       # Scroll reveal animation
    ├── parallax.min.js           # Parallax background scrolling
    ├── waypoints.min.js          # Scroll triggers
    ├── jquery.counterup.min.js   # Animated number counters
    ├── imgfix.min.js             # Image aspect ratio fixer
    ├── map-script.js             # Google Maps initialization
    └── custom.js                 # Global website interactions
```

---

## Modular PHP Backup & Static Regeneration

All original source code and modular templates are archived in `_php_backup/` and compressed in `_php_backup.zip`.

### Modular Template Components (`_php_backup/modular/`)
- `modular/head.php` - SEO meta tags, Google tag (gtag.js), and CSS includes.
- `modular/header.php` - Preloader, header wrapper, logo, and navigation inclusion.
- `modular/menu.php` - Top navigation bar with active route highlighting.
- `modular/sidebar.php` - Investor detail sidebar navigation with active sub-route tracking.
- `modular/footer.php` - Footer copyright, anti-copy protection script, and JS bundle.

### Regenerating Static HTML

To update content or add pages in the future, edit the modular PHP templates and run:

```powershell
C:\xampp\php\php.exe _php_backup\generate_static.php
```

Or from terminal:
```bash
php _php_backup/generate_static.php
```

---

## GitHub Pages Deployment

1. Go to repository **Settings** on GitHub: `https://github.com/7dayscreation/kush-industries/settings/pages`
2. Under **Build and deployment** > **Source**, select **Deploy from a branch**.
3. Under **Branch**, select `main` branch and `/ (root)` folder.
4. Click **Save**. The website will be live at:  
   `https://7dayscreation.github.io/kush-industries/`

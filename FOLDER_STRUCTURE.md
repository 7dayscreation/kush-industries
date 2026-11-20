# Kush Industries Limited - Complete Clean URL Folder Structure

All routes follow the directory-based clean URL pattern (`folder/index.html`) so URLs display cleanly without `.html` extensions.

```
kush-industries/
│
├── 🌐 CLEAN URL FOLDER ROUTES
│   ├── index.html                                    # sitename/ (Home page)
│   │
│   ├── about/                                        # sitename/about/
│   │   └── index.html                                # About Company, Business, Directors, Committees
│   │
│   ├── news/                                         # sitename/news/
│   │   └── index.html                                # News, Notices, AGM Updates & BSE Filings
│   │
│   ├── disclosure-under-regulation-46-sebi/          # sitename/disclosure-under-regulation-46-sebi/
│   │   └── index.html                                # SEBI LODR Regulation 46 Disclosures & Portal Index
│   │
│   ├── contact/                                      # sitename/contact/
│   │   └── index.html                                # Registered Office, Google Map & Inquiry Form
│   │
│   ├── annual-reports/                               # sitename/annual-reports/
│   │   ├── index.html                                # All Annual Reports, Returns & Secretarial Compliance
│   │   ├── annual-report/                            # PDF annual reports
│   │   ├── annual-return/                            # PDF annual returns
│   │   └── annual-secretarial/                       # PDF secretarial reports
│   │
│   ├── board-meeting/                                # sitename/board-meeting/
│   │   ├── index.html                                # Notice of Board Meetings
│   │   └── *.pdf                                     # Board meeting notice PDFs
│   │
│   ├── financial-results/                            # sitename/financial-results/
│   │   ├── index.html                                # Financial Results table & publications
│   │   └── 2022-23/ ... 2026-27/                     # Quarterly results and newspaper clippings
│   │
│   ├── share-holding-pattern/                        # sitename/share-holding-pattern/
│   │   ├── index.html                                # Shareholding pattern quarterly reports
│   │   └── 2022-23/ ... 2026-27/                     # Detailed quarterly shareholding HTML files
│   │
│   ├── corporate-announcements/                      # sitename/corporate-announcements/
│   │   └── index.html                                # Materiality disclosures & KMP contacts
│   │
│   ├── corporate-governance/                         # sitename/corporate-governance/
│   │   ├── index.html                                # Quarterly Corporate Governance Reports
│   │   └── *.html                                    # Governance report HTML filings
│   │
│   ├── csr-policy/                                   # sitename/csr-policy/
│   │   └── index.html                                # Codes of conduct & corporate policies
│   │
│   ├── financial-information/                        # sitename/financial-information/
│   │   └── index.html                                # Historical annual reports & AGM notices
│   │
│   ├── quarterly-results/                            # sitename/quarterly-results/
│   │   └── index.html                                # Historical quarterly results archives
│   │
│   ├── registrar-transfer-agent/                     # sitename/registrar-transfer-agent/
│   │   └── index.html                                # RTA details (Link Intime) & Demat guidance
│   │
│   ├── related-party-transactions/                   # sitename/related-party-transactions/
│   │   ├── index.html                                # Related Party Transaction reports
│   │   └── *.html                                    # Transaction report HTML filings
│   │
│   └── stock-exchanges/                              # sitename/stock-exchanges/
│       └── index.html                                # Stock exchange details & scrip codes
│
├── 📁 DOCUMENT & MEDIA DIRECTORIES
│   ├── policy/                                       # 23 statutory policy and report PDFs
│   ├── download/                                     # MGT-7 filings & forms
│   └── Codes and Policies/                           # Corporate code and governance policies
│
├── 🎨 CENTRALIZED ASSETS (assets/)
│   ├── css/                                          # bootstrap, font-awesome, green.css, custom.css
│   ├── fonts/                                        # FontAwesome web fonts
│   ├── images/                                       # Logos, banners, icons, favicons, photo assets
│   └── js/                                           # jQuery, Bootstrap, ScrollReveal, Parallax, Map scripts
│
├── 📦 MODULAR PHP BACKUP & GENERATOR (_php_backup/)
│   ├── modular/                                      # Reusable modular components
│   │   ├── head.php                                  # Head metadata, gtag.js, CSS links
│   │   ├── header.php                                # Preloader, header wrapper, logo, menu include
│   │   ├── menu.php                                  # Top navigation with active states
│   │   ├── sidebar.php                               # Investor details sidebar navigation
│   │   └── footer.php                                # Copyright, anti-copy script, JS scripts
│   ├── index.php                                     # Modular PHP Homepage
│   ├── about/index.php                               # Modular PHP About Page
│   ├── contact/index.php                             # Modular PHP Contact Page
│   ├── disclosure-under-regulation-46-sebi/index.php # Modular PHP LODR Page
│   ├── news/index.php                                # Modular PHP News Page
│   ├── ...                                           # Modular PHP pages for all investor sections
│   ├── generate_static.php                           # Single-command static generator
│   └── original_php/                                 # Untouched original PHP files backup
│
├── ⚙️ CONFIGURATION & SEO FILES
│   ├── .gitattributes                                # Linguist vendoring for _php_backup
│   ├── .gitignore                                    # Clean repository tracking
│   ├── .nojekyll                                     # Prevents Jekyll processing on GitHub Pages
│   ├── robots.txt                                    # Search crawler directives
│   ├── sitemap.xml                                   # XML sitemap with clean URLs
│   ├── README.md                                     # Project overview & deployment guide
│   ├── FOLDER_STRUCTURE.md                           # Directory routing documentation
│   └── _php_backup.zip                               # Compressed backup archive
```

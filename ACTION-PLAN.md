# SEO Action Plan — Translado Vip Express

**Current Score: 64/100 → Target: 85/100**

---

## CRITICAL (Fix Immediately)

### 1. Fix broken HTML on sobrenos.html
**Impact:** Crawlability, indexing, user experience
**File:** `sobrenos.html`
- Remove stray `</script>` tag at line 28
- Move `<h1>` out of `<p>` tag (line 97)
- Fix `<h4>` nested inside `<li>` elements (lines 113-123)
- Close all open `<div>` and `<section>` tags
- Remove hidden gibberish text at line 133: `<div style="color: white">85283478&¨&*¨#¨#*(&)`
- **Estimated impact: +3 points**

### 2. Fix broken HTML on institucional.html
**Impact:** Crawlability, rendering
**File:** `institucional.html`
- Remove duplicate `<a href="#menu">` nav toggle
- Fix `</nav>` placement (currently after `</header>`)
- Properly close all HTML elements
- **Estimated impact: +2 points**

### 3. Fix broken HTML on mercadoria.html
**Impact:** Crawlability, rendering
**File:** `mercadoria.html`
- Remove empty `<link rel="stylesheet">` tag (line 31)
- Fix title tag to match content: "Apoio Logístico Terminal de Cargas Confins - Translado Vip Express"
- Close all unclosed `<div>`, `<article>`, and `<section>` elements
- Move CSS and JS from bottom of `<body>` to `<head>` with proper loading
- **Estimated impact: +2 points**

### 4. Add missing H1 to orcamento.html
**Impact:** On-page SEO, heading hierarchy
**File:** `orcamento.html`
- Add `<h1>Orçamento de Táxi em Confins</h1>` before the form
- **Estimated impact: +1 point**

---

## HIGH (Fix Within 1 Week)

### 5. Add AggregateRating to TaxiService schema
**Impact:** Rich results, CTR
**File:** `index.html`
```json
"aggregateRating": {
  "@type": "AggregateRating",
  "ratingValue": "4.7",
  "reviewCount": "72",
  "bestRating": "5"
}
```
- **Estimated impact: +2 points**

### 6. Add GeoCoordinates to TaxiService schema
**Impact:** Local SEO, map results
**File:** `index.html`
```json
"geo": {
  "@type": "GeoCoordinates",
  "latitude": "-19.6335",
  "longitude": "-43.9658"
}
```
- **Estimated impact: +1 point**

### 7. Add FAQPage schema to transfer pages
**Impact:** Rich results for FAQ snippets
**Files:** `transfer-confins-ouro-preto.html`, `transfer-confins-inhotim.html`, `transfer-confins-diamantina.html`
- Wrap existing FAQ content in FAQPage schema (same format as index.html)
- **Estimated impact: +3 points**

### 8. Standardize Font Awesome loading across all pages
**Impact:** Performance (LCP, FCP)
**Files:** `sobrenos.html`, `institucional.html`, `orcamento.html`, `mercadoria.html`
- Replace render-blocking `<link rel="stylesheet">` with preload pattern used on newer pages
- **Estimated impact: +3 points**

### 9. Standardize jQuery version and loading
**Impact:** Performance, security
**Files:** All legacy pages
- Update to jQuery 3.5.1+ with `defer` attribute
- Remove jQuery 3.3.1 references
- **Estimated impact: +2 points**

### 10. Self-host external images
**Impact:** Performance, reliability
**Files:** All pages with flag icons
- Download flag icons from vexels.com and emojiterra.com
- Host locally as WebP files
- Download Google logo for reviews section
- **Estimated impact: +2 points**

---

## MEDIUM (Fix Within 1 Month)

### 11. Expand thin content pages
**Impact:** Content quality, keyword coverage
- **sobrenos.html**: Expand to 500+ words — add team history, credentials, airport authorization details, fleet details
- **institucional.html**: Expand to 400+ words — add company values, mission, partnerships, certifications
- **orcamento.html**: Add explanatory content about pricing, what's included, payment methods (300+ words around the form)
- **Estimated impact: +5 points**

### 12. Improve internal linking
**Impact:** Crawlability, link equity distribution
- Add links to transfer pages from sobrenos.html and institucional.html
- Add link to orcamento.html from homepage navigation
- Add link to mercadoria.html from homepage or a services section
- Consider adding breadcrumb navigation to all pages
- **Estimated impact: +3 points**

### 13. Add BreadcrumbList schema
**Impact:** SERP appearance
**Files:** All internal pages
```json
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Início", "item": "https://www.transladovipexpress.com.br/" },
    { "@type": "ListItem", "position": 2, "name": "Transfer Ouro Preto", "item": "https://www.transladovipexpress.com.br/transfer-confins-ouro-preto.html" }
  ]
}
```
- **Estimated impact: +2 points**

### 14. Compress large images
**Impact:** Performance (LCP)
- **pet.webp** (256KB): Compress to <100KB
- **ouro.webp** (171KB): Compress to <80KB
- **banner.webp** (103KB): Compress to <60KB
- Convert jp.gif to WebP
- **Estimated impact: +3 points**

### 15. Add lazy loading to below-fold images
**Impact:** Performance (LCP, page weight)
**Files:** index.html, transfer pages
- Add `loading="lazy"` to all images below the fold
- Keep hero/banner images without lazy loading
- **Estimated impact: +1 point**

### 16. Add VideoObject schema to institucional.html
**Impact:** Video rich results
```json
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "BH Airport - Aeroporto de Confins",
  "embedUrl": "https://www.youtube.com/embed/MAJf47_uO4U",
  "thumbnailUrl": "https://img.youtube.com/vi/MAJf47_uO4U/maxresdefault.jpg"
}
```
- **Estimated impact: +1 point**

### 17. Add security headers
**Impact:** Security, trust signals
- Add Content-Security-Policy
- Add X-Frame-Options: SAMEORIGIN
- Add Referrer-Policy: strict-origin-when-cross-origin
- Add Permissions-Policy
- (Configure via .htaccess or Hostinger panel)
- **Estimated impact: +2 points**

### 18. Add `rel="noopener noreferrer"` to all external `target="_blank"` links
**Impact:** Security
**Files:** All pages
- Several `target="_blank"` links missing `rel="noopener"` attribute
- **Estimated impact: +1 point**

---

## LOW (Backlog)

### 19. Create llms.txt for AI search engines
**Impact:** AI search visibility
**New file:** `llms.txt`
```
# Translado Vip Express

> Taxi executivo e transfer no Aeroporto de Confins (BH Airport), Minas Gerais, Brasil.

## Serviços
- Transfer Confins → Ouro Preto (100km, ~1h30)
- Transfer Confins → Inhotim (60km, ~1h)
- Transfer Confins → Diamantina (290km, ~3h30)
- Taxi executivo para BH e região
- Transporte de pets
- Apoio logístico no terminal de cargas

## Diferenciais
- 20+ anos de experiência
- Veículos credenciados no aeroporto
- Acesso às pistas do MOVE em BH
- Cadeirinha infantil disponível
- Aceitam cartão, PIX e dinheiro

## Contato
- WhatsApp: (31) 97217-4387
- Site: https://www.transladovipexpress.com.br
```
- **Estimated impact: +2 points**

### 20. Improve meta descriptions on legacy pages
**Impact:** CTR
- **sobrenos.html**: "Conheça a Translado Vip Express: 20+ anos de experiência em táxi executivo no Aeroporto de Confins. Frota credenciada, motoristas treinados e transfer para Ouro Preto, Inhotim e Diamantina."
- **institucional.html**: "A Translado Vip Express é uma das principais operadoras de transfer credenciadas no Aeroporto de Confins (BH Airport). Conheça nosso compromisso com qualidade."
- **Estimated impact: +1 point**

### 21. Add `hreflang` tags for multilingual signals
**Impact:** International SEO
- Since the site uses Google Translate for EN/ES, consider adding proper hreflang annotations
- Or better: create static EN/ES versions of key pages
- **Estimated impact: +1 point**

### 22. Modernize legacy pages to match new page template
**Impact:** UX, consistency, performance
- Rewrite sobrenos.html, institucional.html, orcamento.html, mercadoria.html using the same clean HTML template as the transfer pages
- **Estimated impact: +3 points**

---

## Implementation Priority Timeline

| Week | Tasks | Expected Score Gain |
|------|-------|-------------------|
| Week 1 | #1-4 (Fix broken HTML, missing H1) | +8 points → 72 |
| Week 1 | #5-7 (Schema improvements) | +6 points → 78 |
| Week 2 | #8-10 (Performance standardization) | +7 points → 85 |
| Week 3-4 | #11-16 (Content, linking, images) | +15 points → ~90+ |
| Backlog | #17-22 (Security, AI, i18n) | +10 points |

**Projected score after all fixes: ~88-92/100**

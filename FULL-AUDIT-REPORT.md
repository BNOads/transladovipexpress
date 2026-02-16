# Full SEO Audit Report — Translado Vip Express

**Site:** https://www.transladovipexpress.com.br/
**Business Type:** Local Service — Taxi/Transfer (Airport Transportation)
**Date:** 2026-02-16
**Pages Analyzed:** 9 (index, sobrenos, institucional, orcamento, mercadoria, erro, transfer-confins-ouro-preto, transfer-confins-inhotim, transfer-confins-diamantina)

---

## Executive Summary

### SEO Health Score: 62/100

| Category | Score | Weight | Weighted |
|----------|-------|--------|----------|
| Technical SEO | 70/100 | 25% | 17.5 |
| Content Quality | 65/100 | 25% | 16.25 |
| On-Page SEO | 68/100 | 20% | 13.6 |
| Schema / Structured Data | 72/100 | 10% | 7.2 |
| Performance (CWV) | 55/100 | 10% | 5.5 |
| Images | 50/100 | 5% | 2.5 |
| AI Search Readiness | 30/100 | 5% | 1.5 |
| **TOTAL** | | | **64/100** |

### Top 5 Critical Issues
1. **Missing `<h1>` consistency** — sobrenos.html has `<h1>` nested inside `<p>`, broken HTML semantics
2. **Broken HTML on legacy pages** — sobrenos.html, institucional.html, mercadoria.html have unclosed tags, mismatched elements, `</script>` at wrong position
3. **No Google Business Profile schema** — Missing LocalBusiness schema with `geo`, `openingHours`, `aggregateRating`
4. **No `llms.txt` or AI-readable content** — Zero preparation for AI search engines
5. **Legacy pages lack Font Awesome preloading** — Render-blocking CSS on sobrenos, institucional, orcamento, mercadoria

### Top 5 Quick Wins
1. Add `aggregateRating` to existing TaxiService schema (homepage)
2. Add `<meta name="description">` unique content check — orcamento and mercadoria have thin descriptions
3. Fix `sobrenos.html` broken HTML (stray `</script>` tag at line 28, `<h1>` inside `<p>`)
4. Add `loading="lazy"` to below-fold images on transfer pages
5. Add `rel="noreferrer noopener"` to all `target="_blank"` links (security)

---

## 1. Technical SEO (Score: 70/100)

### Crawlability
| Check | Status | Notes |
|-------|--------|-------|
| robots.txt | ✅ PASS | Allows all crawlers, includes sitemap reference |
| Sitemap | ✅ PASS | 9 URLs, proper XML format, priorities set |
| HTTPS | ✅ PASS | HTTP/2, HSTS enabled with preload |
| Canonical tags | ✅ PASS | All pages have correct canonicals |
| Meta robots | ✅ PASS | All pages indexed except erro.html (noindex) |
| HTML lang | ✅ PASS | `lang="pt-BR"` on all pages |

### Security Headers
| Header | Status | Value |
|--------|--------|-------|
| Strict-Transport-Security | ✅ | max-age=31536000; includeSubDomains; preload |
| X-XSS-Protection | ✅ | 1; mode=block |
| X-Content-Type-Options | ✅ | nosniff |
| Content-Security-Policy | ❌ MISSING | Not set |
| X-Frame-Options | ❌ MISSING | Not set |
| Referrer-Policy | ❌ MISSING | Not set |
| Permissions-Policy | ❌ MISSING | Not set |

### Issues Found

#### CRITICAL
- **Broken HTML on sobrenos.html** — Stray `</script>` tag at line 28 (before `</head>`), `<h1>` nested inside `<p>` tag at line 97, `<h4>` nested inside `<li>` incorrectly, unclosed `<div>` and `<section>` tags
- **Broken HTML on mercadoria.html** — Heavily minified with unclosed `<div>`, `<article>`, and `<section>` elements; `<link rel="stylesheet">` with no href at line 31
- **Broken HTML on institucional.html** — Duplicate `<a href="#menu">` nav toggle, `</nav>` after `</header>`

#### HIGH
- **Missing CSP header** — No Content-Security-Policy, allowing potential XSS
- **Missing X-Frame-Options** — Site can be embedded in iframes (clickjacking risk)
- **jQuery 3.3.1 loaded on legacy pages** — Outdated version with known vulnerabilities (sobrenos, institucional, orcamento)
- **Two different jQuery versions** — 3.3.1 on legacy pages, 3.5.1 on newer pages

#### MEDIUM
- **No 404 page configured** — erro.html exists but likely not configured as server 404 handler
- **Sitemap missing erro.html exclusion** — Already handled with noindex, but sitemap is clean
- **Hidden text on sobrenos.html** — Line 133: `<div style="color: white">85283478&¨&*¨#¨#*(&)` — appears to be accidental/debug content visible to crawlers

---

## 2. Content Quality (Score: 65/100)

### E-E-A-T Assessment

| Signal | Score | Notes |
|--------|-------|-------|
| Experience | 7/10 | Claims 20+ years experience, reviews widget |
| Expertise | 5/10 | No team bios, certifications, or credentials shown |
| Authoritativeness | 5/10 | No external references, press mentions, or partnerships highlighted |
| Trustworthiness | 7/10 | Google reviews shown (4.7★), WhatsApp contact visible |

### Per-Page Content Analysis

| Page | Words (approx) | Quality | Issues |
|------|----------------|---------|--------|
| index.html | ~800 | ✅ Good | Well-structured, FAQ present, reviews carousel |
| sobrenos.html | ~250 | ⚠️ Thin | Short content, broken HTML, hidden gibberish text |
| institucional.html | ~150 | ❌ Very Thin | Almost no unique content, mostly a YouTube embed |
| orcamento.html | ~80 | ❌ Very Thin | Just a dropdown form, minimal content |
| mercadoria.html | ~300 | ⚠️ Thin | Decent topic but poor HTML structure |
| transfer-confins-ouro-preto.html | ~700 | ✅ Good | Rich content, FAQs, attraction details |
| transfer-confins-inhotim.html | ~800 | ✅ Good | Rich content, visitor tips, FAQs |
| transfer-confins-diamantina.html | ~650 | ✅ Good | Culture section, FAQs, travel details |
| erro.html | ~20 | N/A | Error page (noindex) |

### Readability
- Language is clear and appropriate for the Brazilian Portuguese audience
- Good use of bold emphasis and structured lists on newer pages
- Legacy pages (sobrenos, institucional) have poor formatting and wall-of-text issues

### Duplicate Content Risk
- Low risk — each page targets different keywords and routes
- Some boilerplate footer content is repeated but that's normal

---

## 3. On-Page SEO (Score: 68/100)

### Title Tags

| Page | Title | Length | Assessment |
|------|-------|--------|------------|
| index | Táxi em Confins Aeroporto - Translado Vip Express | 50 chars | ✅ Good |
| sobrenos | Sobre Nós - Translado Vip Express | 33 chars | ⚠️ Could include keywords |
| institucional | Institucional - Translado Vip Express | 37 chars | ⚠️ Generic |
| orcamento | Orçamento - Translado Vip Express | 33 chars | ⚠️ Could be more descriptive |
| mercadoria | Translado Vip Express \| Taxi em Confins | 40 chars | ⚠️ Not specific to page content |
| transfer-ouro-preto | Transfer Confins Ouro Preto \| Táxi Executivo - Translado Vip Express | 70 chars | ✅ Good |
| transfer-inhotim | Transfer Confins Inhotim \| Táxi Executivo - Translado Vip Express | 66 chars | ✅ Good |
| transfer-diamantina | Transfer Confins Diamantina \| Táxi Executivo - Translado Vip Express | 69 chars | ✅ Good |

### Meta Descriptions

| Page | Has Description | Length | Assessment |
|------|-----------------|--------|------------|
| index | ✅ | 127 chars | ✅ Good — includes CTA |
| sobrenos | ✅ | 56 chars | ⚠️ Too short |
| institucional | ✅ | 46 chars | ❌ Too short and generic |
| orcamento | ✅ | 78 chars | ⚠️ Borderline short |
| mercadoria | ✅ | 120 chars | ✅ OK |
| transfer pages | ✅ | 100-130 chars | ✅ Good |

### Heading Structure

| Page | H1 | H2 | H3 | Issues |
|------|----|----|----|----|
| index | ✅ 1 | ✅ 2 | ✅ 4 | Clean hierarchy |
| sobrenos | ✅ 1 | ✅ 1 | 0 | H1 inside `<p>`, H4 inside `<li>` |
| institucional | ✅ 1 | 0 | 0 | Only H1, no subheadings |
| orcamento | 0 | 0 | ✅ 2 | ❌ Missing H1! |
| mercadoria | ✅ 1 | 0 | ✅ 3 | Acceptable |
| transfer pages | ✅ 1 | ✅ 2 | ✅ 5+ | ✅ Excellent hierarchy |

### Internal Linking

| Issue | Severity |
|-------|----------|
| Homepage doesn't link to orcamento.html | Medium |
| Homepage doesn't link to mercadoria.html | Medium |
| No breadcrumb navigation on any page | Medium |
| Transfer pages link well to each other via homepage | Low |
| sobrenos and institucional don't cross-link to transfer pages | Medium |
| `contato.php` referenced but not in repo (server-side) | Info |

---

## 4. Schema / Structured Data (Score: 72/100)

### Current Implementation

| Page | Schema Type | Valid | Issues |
|------|-------------|-------|--------|
| index | TaxiService | ✅ | Missing `aggregateRating`, `openingHours`, `geo` coordinates |
| index | FAQPage | ✅ | Well-formed with 6 Q&As |
| transfer-ouro-preto | TouristTrip | ✅ | Provider uses `LocalBusiness` instead of referencing `@id` |
| transfer-inhotim | TouristTrip | ✅ | Same issue as above |
| transfer-diamantina | TouristTrip | ✅ | Missing `touristType` compared to others |
| sobrenos | None | ❌ | No schema markup |
| institucional | None | ❌ | No schema markup |
| orcamento | None | ❌ | No schema markup |
| mercadoria | None | ❌ | No schema markup |

### Missing Schema Opportunities

1. **LocalBusiness with GeoCoordinates** — Add `latitude`/`longitude` for map results
2. **AggregateRating** — Add the 4.7★ rating from Google reviews to schema
3. **BreadcrumbList** — Add breadcrumb schema for better SERP display
4. **WebSite with SearchAction** — Not applicable for this site size
5. **Service schema on orcamento.html** — List all service offerings with prices
6. **VideoObject on institucional.html** — Mark up the YouTube embed

---

## 5. Performance (Score: 55/100)

### Server Performance
| Metric | Value | Assessment |
|--------|-------|------------|
| Server | LiteSpeed (Hostinger) | ✅ Good server |
| Protocol | HTTP/2 with H3/QUIC | ✅ Excellent |
| HSTS | Enabled with preload | ✅ Good |
| Page Size (index) | ~27KB HTML | ✅ Lightweight |

### Resource Loading Issues

| Issue | Impact | Pages Affected |
|-------|--------|----------------|
| Render-blocking Font Awesome CSS on legacy pages | High | sobrenos, institucional, orcamento, mercadoria |
| jQuery loaded via external CDN (not deferred on legacy pages) | High | sobrenos, institucional, orcamento |
| Google Translate script loaded on every page | Medium | All pages |
| Inline `<style>` blocks (>400 lines on index) | Medium | index.html |
| `skel.min.js` loaded in `<head>` without defer on legacy pages | Medium | sobrenos, institucional, mercadoria |

### Estimated Core Web Vitals Impact

| Metric | Estimate | Notes |
|--------|----------|-------|
| LCP | ⚠️ ~2.5-3.5s | Banner background image + external resources |
| INP | ✅ ~100ms | Minimal JS interaction |
| CLS | ✅ ~0.05 | Images have width/height on newer pages |

### CLS Risk Areas
- Legacy pages: images without `width`/`height` attributes (sobrenos, institucional don't specify dimensions)
- Google Translate widget injection can cause layout shift

---

## 6. Images (Score: 50/100)

### Image Format & Size

| Image | Size | Format | Assessment |
|-------|------|--------|------------|
| ouro.webp | 171KB | WebP | ⚠️ Could be compressed more |
| pet.webp | 256KB | WebP | ❌ Too large — compress to <100KB |
| banner.webp | 103KB | WebP | ⚠️ Acceptable for hero image |
| meiosdepagamento.webp | 72KB | WebP | ✅ OK |
| cargas.webp | 41KB | WebP | ✅ Good |
| mercadoria.webp | 35KB | WebP | ✅ Good |
| cadeirinha.webp | 34KB | WebP | ✅ Good |
| pagamento.webp | 27KB | WebP | ✅ Good |
| spin.webp | 24KB | WebP | ✅ Good |
| pic06.webp | 12KB | WebP | ✅ Good |
| icone.webp | 8.4KB | WebP | ✅ Good |
| jp.gif | 24KB | GIF | ⚠️ Convert to WebP |

### Image SEO

| Check | Status | Notes |
|-------|--------|-------|
| Alt text on index.html | ✅ | All images have descriptive alt text |
| Alt text on transfer pages | ✅ | Good alt text |
| Alt text on legacy pages | ⚠️ | mercadoria.html has good alt, sobrenos has none on content images |
| Width/height attributes | ⚠️ | Present on index and transfer pages, missing on legacy pages |
| Lazy loading | ⚠️ | Only used on cadeirinha.webp and meiosdepagamento.webp; missing on below-fold content |
| External images (flag icons) | ❌ | 3 flag images loaded from external domains (vexels.com, emojiterra.com) — should be self-hosted |
| Google logo image | ❌ | Loaded from google.com on reviews section — should be self-hosted |

---

## 7. AI Search Readiness / GEO (Score: 30/100)

### AI Crawler Accessibility

| Check | Status |
|-------|--------|
| robots.txt allows AI bots (GPTBot, ClaudeBot, etc.) | ✅ Allowed (no blocks) |
| llms.txt file | ❌ Not present |
| llms-full.txt file | ❌ Not present |
| Structured answers in content | ⚠️ FAQ section helps, but only on homepage |

### Citability Score: LOW

| Factor | Assessment |
|--------|------------|
| Clear factual statements | ⚠️ Some (20 years experience, 100km to Ouro Preto) |
| Authoritative tone | ⚠️ Moderate |
| Data/statistics | ❌ Very limited (only distances and travel times) |
| Unique insights | ⚠️ MOVE bus lane advantage is unique differentiator |
| FAQ format | ✅ Good on homepage and transfer pages |
| Passage-level structure | ⚠️ Better on newer pages, poor on legacy pages |

### Recommendations for AI Visibility
1. Create `llms.txt` with business summary, services, and contact info
2. Add more specific data: exact prices, fleet size, years of operation details
3. Strengthen authority signals: mention credentials, certifications, airport authorization details
4. Add comparison content (taxi vs Uber vs bus from Confins)

---

## Page-by-Page Issues Summary

### index.html — ✅ Best page
- Well-structured, good schema, FAQ, reviews
- Minor: Large inline CSS/JS blocks could be externalized

### sobrenos.html — ❌ Needs major work
- Broken HTML (stray `</script>`, H1 in P, unclosed tags)
- Hidden gibberish text at line 133
- Very thin content (~250 words)
- Missing schema markup
- Old page structure compared to newer pages

### institucional.html — ❌ Needs major work
- Very thin content (~150 words)
- YouTube embed with no VideoObject schema
- No `<meta name="description">` with unique value (has one but very generic)
- Poor HTML structure with duplicate nav toggles

### orcamento.html — ⚠️ Needs improvement
- Missing H1 tag entirely
- Thin content (just a form)
- No schema markup
- Prices embedded in option values (e.g., "250 Nova Lima-Sede") — not visible as content

### mercadoria.html — ⚠️ Needs improvement
- Title tag doesn't match page content (says "Taxi em Confins" but page is about cargo logistics)
- Poor HTML structure, CSS loaded at bottom of body
- Empty `<link rel="stylesheet">` tag

### transfer pages — ✅ Good quality
- Rich content, proper schema, FAQs
- Minor: FAQs on transfer pages lack FAQPage schema markup
- Minor: Emoji characters in headings may not render for all crawlers

### erro.html — ✅ Properly configured
- noindex, nofollow set correctly
- Has link back to homepage

---

## Scoring Breakdown

### Technical SEO: 70/100
- (+) HTTPS, HTTP/2, HSTS, robots.txt, sitemap, canonicals ✅
- (-) Broken HTML on 3 pages (-15)
- (-) Missing security headers (-10)
- (-) Outdated jQuery (-5)

### Content Quality: 65/100
- (+) Good content on index and transfer pages (+30)
- (+) FAQ sections (+10)
- (+) Reviews carousel (+5)
- (-) 3 thin content pages (-20)
- (-) Hidden gibberish text (-5)
- (-) No team/credentials displayed (-10)

### On-Page SEO: 68/100
- (+) Good title tags on 5/8 pages (+20)
- (+) Good meta descriptions (+15)
- (+) Open Graph tags on all pages (+10)
- (-) Missing H1 on orcamento (-10)
- (-) Poor heading hierarchy on legacy pages (-7)
- (-) Weak internal linking (-10)

### Schema: 72/100
- (+) TaxiService schema on homepage (+25)
- (+) FAQPage schema on homepage (+20)
- (+) TouristTrip schema on transfer pages (+15)
- (-) Missing AggregateRating (-8)
- (-) Missing GeoCoordinates (-5)
- (-) No schema on 4 pages (-15)

### Performance: 55/100
- (+) HTTP/2, LiteSpeed, lightweight HTML (+25)
- (+) WebP images, Font Awesome preloaded on new pages (+15)
- (-) Render-blocking resources on legacy pages (-20)
- (-) Large inline CSS on index (-5)
- (-) External image dependencies (-10)

### Images: 50/100
- (+) WebP format used (+15)
- (+) Alt text on main pages (+15)
- (-) pet.webp too large (-10)
- (-) External images not self-hosted (-10)
- (-) Missing lazy loading on several images (-10)
- (-) Legacy pages missing width/height (-10)

### AI Search Readiness: 30/100
- (+) FAQ content helps citability (+15)
- (+) AI crawlers not blocked (+5)
- (-) No llms.txt (-20)
- (-) Limited factual/data-rich content (-15)
- (-) Weak authority signals (-20)

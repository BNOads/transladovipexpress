# Relatório Completo de Auditoria SEO — Translado Vip Express

**Site:** https://www.transladovipexpress.com.br/
**Tipo de Negócio:** Serviço Local — Táxi/Transfer (Transporte Aeroportuário)
**Data:** 2026-02-16
**Páginas Analisadas:** 9 (index, sobrenos, institucional, orcamento, mercadoria, erro, transfer-confins-ouro-preto, transfer-confins-inhotim, transfer-confins-diamantina)

---

## Resumo Executivo

### Pontuação de Saúde SEO: 62/100

| Categoria | Pontuação | Peso | Ponderado |
|----------|-------|--------|----------|
| SEO Técnico | 70/100 | 25% | 17.5 |
| Qualidade de Conteúdo | 65/100 | 25% | 16.25 |
| SEO On-Page | 68/100 | 20% | 13.6 |
| Schema / Dados Estruturados | 72/100 | 10% | 7.2 |
| Performance (CWV) | 55/100 | 10% | 5.5 |
| Imagens | 50/100 | 5% | 2.5 |
| Prontidão para Busca por IA | 30/100 | 5% | 1.5 |
| **TOTAL** | | | **64/100** |

### Top 5 Problemas Críticos
1. **Inconsistência de `<h1>`** — `sobrenos.html` tem `<h1>` dentro de `<p>`, quebrando semântica HTML
2. **HTML quebrado em páginas legadas** — `sobrenos.html`, `institucional.html`, `mercadoria.html` têm tags não fechadas, elementos desalinhados, `</script>` em posição incorreta
3. **Ausência de schema de Google Business Profile** — Falta schema `LocalBusiness` com `geo`, `openingHours`, `aggregateRating`
4. **Sem `llms.txt` ou conteúdo legível para IA** — Nenhuma preparação para motores de busca por IA
5. **Páginas legadas sem preload de Font Awesome** — CSS bloqueante de renderização em `sobrenos`, `institucional`, `orcamento`, `mercadoria`

### Top 5 Ganhos Rápidos
1. Adicionar `aggregateRating` ao schema `TaxiService` existente (homepage)
2. Revisar conteúdo único de `<meta name="description">` — `orcamento` e `mercadoria` têm descrições fracas
3. Corrigir HTML quebrado de `sobrenos.html` (tag `</script>` solta na linha 28, `<h1>` dentro de `<p>`)
4. Adicionar `loading="lazy"` nas imagens abaixo da dobra nas páginas de transfer
5. Adicionar `rel="noreferrer noopener"` em todos os links com `target="_blank"` (segurança)

---

## 1. SEO Técnico (Pontuação: 70/100)

### Rastreabilidade
| Verificação | Status | Observações |
|-------|--------|-------|
| robots.txt | ✅ PASSOU | Permite todos os crawlers, inclui referência ao sitemap |
| Sitemap | ✅ PASSOU | 9 URLs, formato XML correto, prioridades definidas |
| HTTPS | ✅ PASSOU | HTTP/2, HSTS habilitado com preload |
| Tags canônicas | ✅ PASSOU | Todas as páginas têm canônicas corretas |
| Meta robots | ✅ PASSOU | Todas as páginas indexadas, exceto `erro.html` (noindex) |
| HTML lang | ✅ PASSOU | `lang="pt-BR"` em todas as páginas |

### Cabeçalhos de Segurança
| Cabeçalho | Status | Valor |
|--------|--------|-------|
| Strict-Transport-Security | ✅ | max-age=31536000; includeSubDomains; preload |
| X-XSS-Protection | ✅ | 1; mode=block |
| X-Content-Type-Options | ✅ | nosniff |
| Content-Security-Policy | ❌ AUSENTE | Não definido |
| X-Frame-Options | ❌ AUSENTE | Não definido |
| Referrer-Policy | ❌ AUSENTE | Não definido |
| Permissions-Policy | ❌ AUSENTE | Não definido |

### Problemas Encontrados

#### CRÍTICO
- **HTML quebrado em `sobrenos.html`** — Tag `</script>` solta na linha 28 (antes de `</head>`), `<h1>` dentro de `<p>` na linha 97, `<h4>` dentro de `<li>` de forma incorreta, tags `<div>` e `<section>` não fechadas
- **HTML quebrado em `mercadoria.html`** — Arquivo muito minificado com `<div>`, `<article>` e `<section>` não fechados; `<link rel="stylesheet">` sem `href` na linha 31
- **HTML quebrado em `institucional.html`** — Toggle de navegação duplicado em `<a href="#menu">`, `</nav>` após `</header>`

#### ALTO
- **Cabeçalho CSP ausente** — Sem Content-Security-Policy, permitindo potencial XSS
- **X-Frame-Options ausente** — Site pode ser incorporado em iframes (risco de clickjacking)
- **jQuery 3.3.1 carregado em páginas legadas** — Versão desatualizada com vulnerabilidades conhecidas (`sobrenos`, `institucional`, `orcamento`)
- **Duas versões diferentes de jQuery** — 3.3.1 em páginas legadas, 3.5.1 nas páginas mais novas

#### MÉDIO
- **Página 404 não configurada** — `erro.html` existe, mas provavelmente não está configurada como handler 404 no servidor
- **Exclusão de `erro.html` no sitemap** — Já tratado com noindex, sitemap está limpo
- **Texto oculto em `sobrenos.html`** — Linha 133: `<div style="color: white">85283478&¨&*¨#¨#*(&)` — parece conteúdo acidental/debug visível para crawlers

---

## 2. Qualidade de Conteúdo (Pontuação: 65/100)

### Avaliação E-E-A-T

| Sinal | Pontuação | Observações |
|--------|-------|-------|
| Experience (Experiência) | 7/10 | Declara mais de 20 anos de experiência, widget de avaliações |
| Expertise (Especialização) | 5/10 | Sem bios da equipe, certificações ou credenciais exibidas |
| Authoritativeness (Autoridade) | 5/10 | Sem referências externas, menções na imprensa ou parcerias destacadas |
| Trustworthiness (Confiabilidade) | 7/10 | Avaliações Google exibidas (4.7★), contato via WhatsApp visível |

### Análise de Conteúdo por Página

| Página | Palavras (aprox.) | Qualidade | Problemas |
|------|----------------|---------|--------|
| index.html | ~800 | ✅ Boa | Bem estruturada, FAQ presente, carrossel de avaliações |
| sobrenos.html | ~250 | ⚠️ Fraca | Conteúdo curto, HTML quebrado, texto oculto sem sentido |
| institucional.html | ~150 | ❌ Muito fraca | Quase sem conteúdo único, basicamente um embed do YouTube |
| orcamento.html | ~80 | ❌ Muito fraca | Apenas formulário com dropdown, conteúdo mínimo |
| mercadoria.html | ~300 | ⚠️ Fraca | Tema bom, mas estrutura HTML ruim |
| transfer-confins-ouro-preto.html | ~700 | ✅ Boa | Conteúdo rico, FAQs, detalhes de atrações |
| transfer-confins-inhotim.html | ~800 | ✅ Boa | Conteúdo rico, dicas para visitantes, FAQs |
| transfer-confins-diamantina.html | ~650 | ✅ Boa | Seção cultural, FAQs, detalhes de viagem |
| erro.html | ~20 | N/A | Página de erro (noindex) |

### Legibilidade
- Linguagem clara e apropriada para o público brasileiro
- Bom uso de negrito e listas estruturadas nas páginas mais novas
- Páginas legadas (`sobrenos`, `institucional`) têm formatação fraca e blocos de texto densos

### Risco de Conteúdo Duplicado
- Risco baixo — cada página mira keywords e rotas diferentes
- Parte do rodapé é repetida, o que é normal

---

## 3. SEO On-Page (Pontuação: 68/100)

### Title Tags

| Página | Título | Tamanho | Avaliação |
|------|-------|--------|------------|
| index | Táxi em Confins Aeroporto - Translado Vip Express | 50 chars | ✅ Bom |
| sobrenos | Sobre Nós - Translado Vip Express | 33 chars | ⚠️ Poderia incluir keywords |
| institucional | Institucional - Translado Vip Express | 37 chars | ⚠️ Genérico |
| orcamento | Orçamento - Translado Vip Express | 33 chars | ⚠️ Poderia ser mais descritivo |
| mercadoria | Translado Vip Express \| Taxi em Confins | 40 chars | ⚠️ Não específico ao conteúdo da página |
| transfer-ouro-preto | Transfer Confins Ouro Preto \| Táxi Executivo - Translado Vip Express | 70 chars | ✅ Bom |
| transfer-inhotim | Transfer Confins Inhotim \| Táxi Executivo - Translado Vip Express | 66 chars | ✅ Bom |
| transfer-diamantina | Transfer Confins Diamantina \| Táxi Executivo - Translado Vip Express | 69 chars | ✅ Bom |

### Meta Descriptions

| Página | Tem Description | Tamanho | Avaliação |
|------|-----------------|--------|------------|
| index | ✅ | 127 chars | ✅ Boa — inclui CTA |
| sobrenos | ✅ | 56 chars | ⚠️ Muito curta |
| institucional | ✅ | 46 chars | ❌ Muito curta e genérica |
| orcamento | ✅ | 78 chars | ⚠️ Limite curto |
| mercadoria | ✅ | 120 chars | ✅ OK |
| páginas de transfer | ✅ | 100-130 chars | ✅ Boa |

### Estrutura de Headings

| Página | H1 | H2 | H3 | Problemas |
|------|----|----|----|----|
| index | ✅ 1 | ✅ 2 | ✅ 4 | Hierarquia limpa |
| sobrenos | ✅ 1 | ✅ 1 | 0 | H1 dentro de `<p>`, H4 dentro de `<li>` |
| institucional | ✅ 1 | 0 | 0 | Apenas H1, sem subtítulos |
| orcamento | 0 | 0 | ✅ 2 | ❌ H1 ausente! |
| mercadoria | ✅ 1 | 0 | ✅ 3 | Aceitável |
| páginas de transfer | ✅ 1 | ✅ 2 | ✅ 5+ | ✅ Hierarquia excelente |

### Linkagem Interna

| Problema | Severidade |
|-------|----------|
| Homepage não linka para `orcamento.html` | Média |
| Homepage não linka para `mercadoria.html` | Média |
| Sem navegação por breadcrumb em qualquer página | Média |
| Páginas de transfer se interligam bem via homepage | Baixa |
| `sobrenos` e `institucional` não fazem cross-link para páginas de transfer | Média |
| `contato.php` referenciado mas não no repositório (server-side) | Info |

---

## 4. Schema / Dados Estruturados (Pontuação: 72/100)

### Implementação Atual

| Página | Tipo de Schema | Válido | Problemas |
|------|-------------|-------|--------|
| index | TaxiService | ✅ | Faltam `aggregateRating`, `openingHours`, coordenadas `geo` |
| index | FAQPage | ✅ | Bem estruturado com 6 perguntas e respostas |
| transfer-ouro-preto | TouristTrip | ✅ | Provider usa `LocalBusiness` em vez de referenciar `@id` |
| transfer-inhotim | TouristTrip | ✅ | Mesmo problema acima |
| transfer-diamantina | TouristTrip | ✅ | Falta `touristType` em comparação às outras |
| sobrenos | Nenhum | ❌ | Sem schema markup |
| institucional | Nenhum | ❌ | Sem schema markup |
| orcamento | Nenhum | ❌ | Sem schema markup |
| mercadoria | Nenhum | ❌ | Sem schema markup |

### Oportunidades de Schema Ausentes

1. **LocalBusiness com GeoCoordinates** — Adicionar `latitude`/`longitude` para resultados de mapa
2. **AggregateRating** — Adicionar nota 4.7★ das avaliações Google no schema
3. **BreadcrumbList** — Adicionar schema de breadcrumb para melhorar exibição na SERP
4. **WebSite com SearchAction** — Não aplicável para o tamanho deste site
5. **Service schema em `orcamento.html`** — Listar serviços com preços
6. **VideoObject em `institucional.html`** — Marcar o embed do YouTube

---

## 5. Performance (Pontuação: 55/100)

### Performance de Servidor
| Métrica | Valor | Avaliação |
|--------|-------|------------|
| Servidor | LiteSpeed (Hostinger) | ✅ Bom servidor |
| Protocolo | HTTP/2 com H3/QUIC | ✅ Excelente |
| HSTS | Habilitado com preload | ✅ Bom |
| Tamanho da página (index) | ~27KB HTML | ✅ Leve |

### Problemas de Carregamento de Recursos

| Problema | Impacto | Páginas Afetadas |
|-------|--------|----------------|
| CSS do Font Awesome bloqueante em páginas legadas | Alto | `sobrenos`, `institucional`, `orcamento`, `mercadoria` |
| jQuery carregado por CDN externa (sem defer em legadas) | Alto | `sobrenos`, `institucional`, `orcamento` |
| Script do Google Translate carregado em todas as páginas | Médio | Todas as páginas |
| Blocos `<style>` inline (>400 linhas no index) | Médio | `index.html` |
| `skel.min.js` no `<head>` sem defer em páginas legadas | Médio | `sobrenos`, `institucional`, `mercadoria` |

### Impacto Estimado em Core Web Vitals

| Métrica | Estimativa | Observações |
|--------|----------|-------|
| LCP | ⚠️ ~2.5-3.5s | Imagem de fundo do banner + recursos externos |
| INP | ✅ ~100ms | Interação JS mínima |
| CLS | ✅ ~0.05 | Imagens têm width/height nas páginas mais novas |

### Áreas de Risco de CLS
- Páginas legadas: imagens sem atributos `width`/`height` (`sobrenos`, `institucional` não especificam dimensões)
- Injeção do widget do Google Translate pode causar layout shift

---

## 6. Imagens (Pontuação: 50/100)

### Formato e Tamanho de Imagens

| Imagem | Tamanho | Formato | Avaliação |
|-------|------|--------|------------|
| ouro.webp | 171KB | WebP | ⚠️ Pode ser mais comprimida |
| pet.webp | 256KB | WebP | ❌ Muito grande — comprimir para <100KB |
| banner.webp | 103KB | WebP | ⚠️ Aceitável para imagem hero |
| meiosdepagamento.webp | 72KB | WebP | ✅ OK |
| cargas.webp | 41KB | WebP | ✅ Boa |
| mercadoria.webp | 35KB | WebP | ✅ Boa |
| cadeirinha.webp | 34KB | WebP | ✅ Boa |
| pagamento.webp | 27KB | WebP | ✅ Boa |
| spin.webp | 24KB | WebP | ✅ Boa |
| pic06.webp | 12KB | WebP | ✅ Boa |
| icone.webp | 8.4KB | WebP | ✅ Boa |
| jp.gif | 24KB | GIF | ⚠️ Converter para WebP |

### SEO de Imagens

| Verificação | Status | Observações |
|-------|--------|-------|
| Texto alt em `index.html` | ✅ | Todas as imagens têm alt descritivo |
| Texto alt nas páginas de transfer | ✅ | Bom texto alt |
| Texto alt em páginas legadas | ⚠️ | `mercadoria.html` tem alt bom, `sobrenos` não tem nos conteúdos com imagem |
| Atributos width/height | ⚠️ | Presentes no index e transfer, ausentes nas legadas |
| Lazy loading | ⚠️ | Só em `cadeirinha.webp` e `meiosdepagamento.webp`; faltando em conteúdo abaixo da dobra |
| Imagens externas (ícones de bandeira) | ❌ | 3 imagens de bandeiras carregadas de domínios externos (`vexels.com`, `emojiterra.com`) — ideal hospedar localmente |
| Logo Google | ❌ | Carregada de `google.com` na seção de avaliações — ideal hospedar localmente |

---

## 7. Prontidão para Busca por IA / GEO (Pontuação: 30/100)

### Acessibilidade para Crawlers de IA

| Verificação | Status |
|-------|--------|
| robots.txt permite bots de IA (GPTBot, ClaudeBot etc.) | ✅ Permitido (sem bloqueios) |
| Arquivo `llms.txt` | ❌ Ausente |
| Arquivo `llms-full.txt` | ❌ Ausente |
| Respostas estruturadas no conteúdo | ⚠️ FAQ ajuda, mas só na homepage |

### Pontuação de Citabilidade: BAIXA

| Fator | Avaliação |
|--------|------------|
| Afirmações factuais claras | ⚠️ Algumas (20 anos de experiência, 100km até Ouro Preto) |
| Tom de autoridade | ⚠️ Moderado |
| Dados/estatísticas | ❌ Muito limitado (apenas distâncias e tempos de viagem) |
| Insights únicos | ⚠️ Vantagem da pista MOVE é diferencial único |
| Formato FAQ | ✅ Bom na homepage e páginas de transfer |
| Estrutura em nível de passagem | ⚠️ Melhor nas páginas novas, fraca nas legadas |

### Recomendações para Visibilidade em IA
1. Criar `llms.txt` com resumo do negócio, serviços e contato
2. Adicionar dados mais específicos: preços exatos, tamanho da frota, detalhes dos anos de operação
3. Fortalecer sinais de autoridade: credenciais, certificações, detalhes de autorização aeroportuária
4. Adicionar conteúdo comparativo (táxi vs Uber vs ônibus saindo de Confins)

---

## Resumo de Problemas por Página

### `index.html` — ✅ Melhor página
- Bem estruturada, bom schema, FAQ, avaliações
- Menor ajuste: blocos grandes de CSS/JS inline poderiam ser externalizados

### `sobrenos.html` — ❌ Precisa de grande revisão
- HTML quebrado (tag `</script>` solta, H1 dentro de P, tags não fechadas)
- Texto oculto sem sentido na linha 133
- Conteúdo muito raso (~250 palavras)
- Sem schema markup
- Estrutura antiga em comparação às páginas mais novas

### `institucional.html` — ❌ Precisa de grande revisão
- Conteúdo muito raso (~150 palavras)
- Embed do YouTube sem schema `VideoObject`
- Sem `<meta name="description">` com valor único (existe, mas muito genérica)
- Estrutura HTML ruim com toggle de menu duplicado

### `orcamento.html` — ⚠️ Precisa de melhoria
- Falta completamente a tag H1
- Conteúdo raso (apenas formulário)
- Sem schema markup
- Preços embutidos em `option value` (ex.: "250 Nova Lima-Sede") — não visíveis como conteúdo

### `mercadoria.html` — ⚠️ Precisa de melhoria
- Title tag não condiz com conteúdo da página (diz "Taxi em Confins", mas página é sobre logística de cargas)
- Estrutura HTML ruim, CSS carregado no final do body
- Tag `<link rel="stylesheet">` vazia

### Páginas de transfer — ✅ Boa qualidade
- Conteúdo rico, schema adequado, FAQs
- Menor ajuste: FAQs das páginas de transfer não têm schema `FAQPage`
- Menor ajuste: emojis em headings podem não renderizar para todos os crawlers

### `erro.html` — ✅ Configuração adequada
- `noindex`, `nofollow` definidos corretamente
- Link de volta para homepage

---

## Quebra de Pontuação

### SEO Técnico: 70/100
- (+) HTTPS, HTTP/2, HSTS, robots.txt, sitemap, canônicas ✅
- (-) HTML quebrado em 3 páginas (-15)
- (-) Falta de cabeçalhos de segurança (-10)
- (-) jQuery desatualizado (-5)

### Qualidade de Conteúdo: 65/100
- (+) Bom conteúdo em index e páginas de transfer (+30)
- (+) Seções de FAQ (+10)
- (+) Carrossel de avaliações (+5)
- (-) 3 páginas com conteúdo raso (-20)
- (-) Texto oculto sem sentido (-5)
- (-) Sem equipe/credenciais exibidas (-10)

### SEO On-Page: 68/100
- (+) Bons title tags em 5/8 páginas (+20)
- (+) Boas meta descriptions (+15)
- (+) Open Graph em todas as páginas (+10)
- (-) H1 ausente em `orcamento` (-10)
- (-) Hierarquia de headings ruim em páginas legadas (-7)
- (-) Linkagem interna fraca (-10)

### Schema: 72/100
- (+) Schema `TaxiService` na homepage (+25)
- (+) Schema `FAQPage` na homepage (+20)
- (+) Schema `TouristTrip` nas páginas de transfer (+15)
- (-) `AggregateRating` ausente (-8)
- (-) `GeoCoordinates` ausente (-5)
- (-) Sem schema em 4 páginas (-15)

### Performance: 55/100
- (+) HTTP/2, LiteSpeed, HTML leve (+25)
- (+) Imagens WebP, Font Awesome com preload nas páginas novas (+15)
- (-) Recursos bloqueantes em páginas legadas (-20)
- (-) CSS inline grande no index (-5)
- (-) Dependências externas de imagens (-10)

### Imagens: 50/100
- (+) Uso de formato WebP (+15)
- (+) Texto alt nas páginas principais (+15)
- (-) `pet.webp` muito grande (-10)
- (-) Imagens externas não auto-hospedadas (-10)
- (-) Falta de lazy loading em várias imagens (-10)
- (-) Páginas legadas sem width/height (-10)

### Prontidão para Busca por IA: 30/100
- (+) Conteúdo FAQ ajuda na citabilidade (+15)
- (+) Crawlers de IA não bloqueados (+5)
- (-) Sem `llms.txt` (-20)
- (-) Conteúdo factual/dados limitado (-15)
- (-) Sinais de autoridade fracos (-20)

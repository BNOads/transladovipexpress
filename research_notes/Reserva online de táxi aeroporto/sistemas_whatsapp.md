# Sistemas de reserva/despacho e comércio conversacional (WhatsApp) para operador de táxi/transfer em Confins

Contexto: Translado Vip Express, táxi credenciado em BH/Confins, hoje converte só por clique no WhatsApp com orçamento manual. Objetivo: comparar sistemas para reservar, orçar na hora, cobrar sinal, reduzir no-show e medir receita real. Pesquisa feita em set/2026. Observação de formato: sem travessões, seguindo a regra global do usuário.

## 1. Software de reserva/despacho para transfer e limo (internacional, WordPress e brasileiro)

### Takeaway
Os SaaS americanos de limo (Moovs, Limo Anywhere) são completos (rastreio de voo, app do motorista, pagamento), mas cobram em USD, processam cartão via gateway próprio americano e não têm Pix: caros e mal encaixados para um operador pequeno no Brasil. Para o porte da Translado, as rotas mais realistas são (a) plugin WordPress de cotação/reserva com tabela de rotas fixas ou (b) sistema brasileiro de transporte executivo/turismo receptivo que já tem Pix e WhatsApp; apps white label de mobilidade (Machine/Gaudium) servem para operar "um Uber próprio" e são superdimensionados para reservas agendadas de aeroporto.

### Cited Findings
**Moovs (EUA, limo/shuttle)**
- Planos: Test Drive grátis (3 usuários, 10 veículos, 10 motoristas, sem prazo), Standard US$149/mês (2 a 10 veículos), Pro US$199/mês (11 a 20 veículos), Enterprise US$999+/mês: [Moovs Pricing](https://www.moovsapp.com/pricing)
- Sem taxa por corrida segundo a página oficial; processamento de pagamento 3,4% + US$0,30 (Standard) e 3% + US$0,30 (Pro): [Moovs Pricing](https://www.moovsapp.com/pricing)
- Standard inclui processamento de pagamento, notificações SMS/chat, rastreio de voo FlightAware, app do motorista iOS/Android, portal de reserva do cliente; Pro adiciona construtor de site: [Moovs Pricing](https://www.moovsapp.com/pricing)
- A página não especifica países ou moedas suportados: [Moovs Pricing](https://www.moovsapp.com/pricing)
- Conflito: um comparativo de terceiros (concorrente, Ridezora) afirma que a Moovs cobra "per-booking software fees" e US$79/usuário/mês; a página oficial diz não haver taxa por corrida: [Ridezora comparativo 2026](https://www.ridezora.com/blog/limo-dispatch-software-pricing-compared-2026) vs [Moovs Pricing](https://www.moovsapp.com/pricing)

**Limo Anywhere (EUA)**
- Core US$99/mês + US$0,25/corrida (setup único de US$299); Plus US$199/mês + US$0,20/corrida (até 1.500 corridas/mês); BLACK US$499/mês + US$0,20/corrida: [Limo Anywhere Pricing](https://www.limoanywhere.com/pricing/) (valores via resumo de busca; confirmar na página)
- Rastreio automático de voo com atualização para passageiro e motorista incluído no Core: [Limo Anywhere Pricing](https://www.limoanywhere.com/pricing/)
- Comparativo de terceiros cita app de reserva do passageiro ("Book Now") como módulo separado e setup de US$500 a US$2.500: [Ridezora](https://www.ridezora.com/blog/limo-dispatch-software-pricing-compared-2026) (fonte concorrente, tratar com cautela)

**Onde, Yelowsoft (white label)**
- Onde: modelo por reserva, US$0,10 a US$0,35/reserva + base de US$100 a US$300/mês; Yelowsoft: US$15 a US$25/motorista/mês com módulos vendidos à parte e setup de US$999 a US$2.499: [Ridezora](https://www.ridezora.com/blog/limo-dispatch-software-pricing-compared-2026) (fonte concorrente; não verificado nas páginas oficiais)

**TaxiCaller (despacho de táxi)**
- Pay as you go a partir de cerca de US$20/veículo/mês (outras fontes citam ~US$28 para empresas nos EUA), sem setup nem contrato, teste grátis de 14 dias: [TaxiCaller Pricing](https://www.taxicaller.com/en/pricing); [Capterra](https://www.capterra.com/p/190946/TaxiCaller/pricing/)

**Plugins WordPress**
- Chauffeur Taxi Booking System (QuanticaLabs, premium): wizard de reserva passo a passo, mapa Google com rota, preço por distância, por hora e tarifa fixa por veículo, regras de preço por rota, geofence, data, nº de passageiros; pagamentos online: [QuanticaLabs](https://quanticalabs.com/wordpress-plugins/chauffeur-taxi-booking-system-for-wordpress/); [Review Ultida 2026](https://ultida.com/chauffeur-booking-system-review/)
- Requer conta Google Cloud com Maps JavaScript, Geocoding, Directions, Places, Routes e Static Maps APIs (custo de API Google à parte): [Review Ultida 2026](https://ultida.com/chauffeur-booking-system-review/)
- Existe versão gratuita "Chauffeur Booking" no WordPress.org; em uma versão citada, o processamento de pagamento não vem incluído (salva total e o pagamento é feito por outro meio): [WordPress.org](https://wordpress.org/plugins/chauffeur-booking/); [Review Ultida](https://ultida.com/chauffeur-booking-system-review/)
- E-Cab Taxi Booking Manager (MagePeople) roda sobre WooCommerce, o que permite usar gateways brasileiros do WooCommerce: [WordPress.org eCab](https://wordpress.org/plugins/ecab-taxi-booking-manager/); [MagePeople](https://mage-people.com/product/wordpress-taxi-cab-booking-plugin-for-woocommerce/)
- Cab Grid: calculadora de tarifa em tabela (grid origem x destino) grátis; Pro com reserva, múltiplos veículos, áreas ilimitadas e pagamento (PayPal/cartão), pagamento único com 1 ano de updates, sem assinatura: [Cab Grid Pro](https://cabgrid.com/pro/); [Cab Grid Pro features](https://cabgrid.com/about-cab-grid/cab-grid-pro-features/)

**Soluções brasileiras**
- Machine (Gaudium): maior plataforma white label de mobilidade e entrega do Brasil, app padrão personalizado com logo e tarifas: [Machine](https://machine.global/); [Mobile Time](https://www.mobiletime.com.br/noticias/24/06/2022/machine-empresa-desenvolve-apps-de-transporte-white-label/)
- Preço citado (possivelmente desatualizado): entrada de R$9.999,99 e mensalidade mínima de R$199, variando pelo nº de motoristas: [Machine FAQ](https://machine.global/faq/) (via resumo de busca)
- Mymento (SP, turismo receptivo): site, reservas online com confirmação automática, pagamentos Pix/cartão/boleto, agente de IA no WhatsApp (TravelBot IA), automação de confirmação e lembretes, relatórios: [Mymento](https://mymento.com.br/)
- AssincTour: reservas online, transfer in/out, controle de vans e guias, split de pagamento e agente de IA que atende e vende no WhatsApp: [AssincTour](https://assinctour.assincrona.com.br/sistema-para-turismo-receptivo/)
- Tindo: gestão de receptivo e vans, controle de corridas e emissão de placas para buscar clientes em hotel/aeroporto: [Tindo](https://www.tindo.com.br/)
- Outros brasileiros encontrados: TransferGest (gestão de transporte turístico), LetsTur, SoftTur, E-Transporte.pro (plataforma para transporte executivo): [TransferGest](https://srv.transfergest.com/); [LetsTur](https://lets.tur.br/); [E-Transporte.pro](https://www.e-transporte.pro/)
- ToolRides: transporte corporativo e transfer de aeroporto, integra canais e alerta motoristas: [ToolRides](https://www.toolrides.com/pt/transporte-corporativo)
- UseTransfers: marketplace de transfer presente em aeroportos do Brasil (canal de venda, não software próprio): [UseTransfers](https://usetransfers.com/)

### Inferences
- Para um táxi credenciado com poucos carros e rotas repetitivas (Confins para BH, Pampulha, Savassi, Ouro Preto etc.), uma tabela de rotas fixas resolve 80% dos orçamentos; plugin WordPress (Cab Grid, Chauffeur Booking) ou formulário próprio no site atual dá cotação instantânea com custo baixo.
- Moovs Test Drive grátis pode servir para organizar agenda/motoristas, mas sem pagamento no plano grátis e sem Pix; o pagamento teria de ficar fora (Pix manual/link).
- Sistemas brasileiros de receptivo (Mymento, AssincTour) são os que mais se aproximam de "reserva + Pix + WhatsApp" prontos, mas são pensados para passeios; precisam de demo para confirmar se aceitam precificação por rota/veículo.
- Machine/Gaudium só faz sentido se a meta for app próprio de corrida sob demanda; custo de entrada alto para o objetivo atual.

### Gaps
- Não foram encontrados preços públicos de Mymento, AssincTour, Tindo, TransferGest, E-Transporte.pro (site retornou erro de SSL), Mobi, Bibi Mob.
- Preço exato do Cab Grid Pro e do Chauffeur Taxi Booking System premium não apareceu nas fontes (tipicamente licença CodeCanyon; confirmar).
- iCabbi, Autocab, Easy Taxi Office, TransferCRM, Booking Kit: não pesquisados em detalhe (iCabbi e Autocab são enterprise para frotas grandes, sem preço público, por conhecimento geral; não verificado).
- Não verificado se Moovs/Limo Anywhere aceitam BRL ou operam no Brasil.

## 2. WhatsApp: API oficial, chatbot de orçamento, Flows, Pix no chat, CRMs e preços Meta 2025-2026

### Takeaway
Desde 1/jul/2025 a Meta cobra por mensagem de template entregue; respostas dentro da janela de 24h aberta pelo cliente são grátis (inclusive templates de utilidade), e conversas vindas de anúncio Click-to-WhatsApp ficam grátis por 72h. Como o fluxo da Translado é 100% iniciado pelo cliente, um bot que orça e manda link/QR Pix praticamente não gera custo de mensagem Meta; o custo real está na plataforma (BSP/CRM). A API permite Pix dinâmico, links de pagamento e boleto dentro da conversa via order_details.

### Cited Findings
**Preço Meta**
- Cobrança por mensagem (template entregue) desde 1/jul/2025; categorias Marketing (sempre cobrada), Utility (grátis dentro da janela de atendimento), Authentication: [Meta for Developers, Pricing](https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing)
- Janela de atendimento de 24h: mensagens livres e templates de utilidade grátis após o cliente iniciar contato: [Meta Pricing](https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing)
- Free Entry Point: mensagens de conversas vindas de anúncios Click-to-WhatsApp ou CTA do Facebook ficam grátis por 72h: [Meta Pricing](https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing)
- Faixas de volume com desconto para utility e authentication; marketing não tem desconto por volume: [Meta Pricing](https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing); [ControlHippo](https://controlhippo.com/blog/whatsapp/whatsapp-business-api-pricing-update/)
- Faturamento em BRL para empresas brasileiras a partir de 1/jul/2026; todas as WABAs precisam migrar para BRL até 30/jun/2027: [Meta Pricing](https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing)
- Valores aproximados no Brasil em 2026 (fonte secundária): Utility R$0,04 a R$0,05; Authentication R$0,15 a R$0,19; Marketing R$0,31 a R$0,38; Service R$0: [Message Central](https://www.messagecentral.com/blog/whatsapp-business-api-pricing-brazil)

**Pagamento no chat**
- Cloud API no Brasil suporta Pix dinâmico, links de pagamento, boleto, cartão one-click (offsite) e template order_details; cada order_details precisa de reference_id único; o WhatsApp não faz conciliação (empresa concilia com seu PSP): [Meta Payments API Brasil](https://developers.facebook.com/docs/whatsapp/cloud-api/payments-api/payments-br)
- A documentação da Meta consultada não menciona taxa da Meta sobre esses pagamentos: [Meta Payments API Brasil](https://developers.facebook.com/docs/whatsapp/cloud-api/payments-api/payments-br)
- Alegação não verificada: um blog afirma que em 2026 a Meta lançou Pix direto no WhatsApp Business para PMEs com taxa zero até R$200 e 0,49% acima, e que "70% das PMEs" tiveram +25% de receita; fonte de baixa confiabilidade, sem referência primária: [SocialHub](https://www.socialhub.pro/blog/whatsapp-business-pagamento-2026-meta-pix-direto-conversa-pme-brasil/)
- Taxas de Pix de PSPs: Asaas R$0,99 por Pix recebido nos 3 primeiros meses e depois R$1,99 (fixo): [Asaas](https://www.asaas.com/pix-asaas); Mercado Pago: fontes conflitantes (0,49% para quem fatura acima de R$15 mil/mês vs 0,99%): [Mercado Pago blog](https://www.mercadopago.com.br/blog/evitar-cobranca-taxa-pix) e resumo de busca; faixa de mercado para PJ 0,99% a 1,45%: [Nuvemshop](https://www.nuvemshop.com.br/blog/pix-pessoa-juridica/)

**WhatsApp Flows**
- Flows abrem formulário multi-tela dentro do WhatsApp (dropdowns, seletor de data), para reserva, captação de lead e pedido: [WhatsApp Business blog](https://whatsappbusiness.com/blog/whatsapp-flows-101/); [Splashify](https://splashifypro.com/blog/whatsapp-flows)
- Flows estáticos (sem endpoint) coletam respostas sem código; Flows dinâmicos conectam a um endpoint próprio para dados ao vivo, como horários ou calculadora: [Splashify](https://splashifypro.com/blog/whatsapp-flows); [Omnichat](https://blog.omnichat.ai/whatsapp-flows/)

**BSPs/CRMs**
- 360dialog: a partir de US$59 / €49 por número/mês + tarifas Meta, sem setup nem mínimo: [360dialog Pricing](https://360dialog.com/pricing); [EZContact](https://ezcontact.ai/en/blog/2026-07-04-360dialog-pricing-2026-real-monthly-costs-api-fees/)
- Kommo: Base US$15, Advanced US$25, Pro US$45 por usuário/mês; em reais no anual: R$86, R$129, R$193/usuário/mês; mínimo de 6 meses; integração WhatsApp em todos os planos: [Comunidade Kommo Brasil](https://comunidadekommobrasil.com/kommo-planos); [Kommo](https://www.kommo.com/br/recursos/configuracoes-da-conta/subscription-plans/)
- Blip Go (PME): valores conflitantes, "a partir de R$99/mês" vs plano Essencial "a partir de R$299/mês" com teste de 15 dias; mid-market/enterprise sob consulta, normalmente R$1.000+/mês: [Blip pricing](https://www.blip.ai/en/pricing/); [Zapfunil](https://zapfunil.com/avaliacoes/blip); [BossBot](https://bossbot.uk/blog/take-blip-pricing-review-2026-pt)
- O próprio JP já usa 360dialog no ecossistema (skill d360-enviar para BoraApp), o que reduz curva de implementação (observação de contexto local, não fonte externa).

### Inferences
- Arquitetura enxuta sugerida: número oficial via 360dialog (ou Cloud API direta) + bot (n8n, que a BNOads já usa) que pergunta origem/destino/passageiros/data, consulta a tabela de rotas e responde com preço + link/QR Pix de sinal. Custo estimado: ~US$59/mês de BSP + taxa Pix do PSP; mensagens praticamente grátis por serem iniciadas pelo cliente/anúncio.
- Kommo faz sentido se houver mais de um atendente e necessidade de funil (lead, orçado, sinal pago, realizado); para 1 a 2 usuários fica ~R$172 a R$386/mês.
- Flows estáticos resolvem o formulário de reserva no chat sem código; cotação instantânea no próprio Flow exige Flow dinâmico com endpoint.

### Gaps
- Não confirmado em fonte primária se existe Pix nativo da Meta com taxa própria para PMEs (alegação do SocialHub).
- Não foram coletados preços de Zenvia, RD Station Conversas, Take/Blip atualizados por fonte oficial.
- Tabela oficial BRL da Meta (rate card) não foi aberta; valores em R$ vêm de fonte secundária.

## 3. Envio de eventos de conversão (Meta CAPI para business messaging e Google offline)

### Takeaway
Dá para devolver a receita real às plataformas: no Meta, capturando o ctwa_clid que chega no primeiro webhook da conversa vinda de anúncio e enviando um evento Purchase via Conversions API com action_source "business_messaging"; no Google, importando conversões offline (GCLID) ou enhanced conversions for leads (telefone/e-mail com hash). Isso exige API oficial (o app WhatsApp Business comum não entrega ctwa_clid).

### Cited Findings
- O ctwa_clid é gerado no clique do anúncio Click-to-WhatsApp e vem no webhook da primeira mensagem via API; não é hasheado: [Wati](https://www.wati.io/en/blog/track-ctwa-conversions-capi/); [AWS docs](https://docs.aws.amazon.com/social-messaging/latest/userguide/conversions-api.html)
- Evento Purchase: event_name "Purchase", action_source "business_messaging", messaging_channel "whatsapp", user_data com page_id e ctwa_clid, custom_data com currency e value; sem esses campos a Meta não atribui ao anúncio CTWA: [AWS docs](https://docs.aws.amazon.com/social-messaging/latest/userguide/conversions-api.html); [Aixel](https://aixel.io/blog/whatsapp-conversions-api); [Meta CAPI parameters](https://developers.facebook.com/documentation/ads-commerce/conversions-api/parameters)
- Google: enhanced conversions for leads usa dados first-party (e-mail, telefone, endereço) para complementar importação offline; anunciantes que somaram dados first-party ao GCLID tiveram mediana de +10% em conversões vs importação padrão: [Google Ads Help](https://support.google.com/google-ads/answer/15713840?hl=en); [Upgrade guide](https://support.google.com/google-ads/answer/15479486?hl=en)
- A partir de abril/2026 o Google Ads aceita dados fornecidos pelo usuário por tag, Data Manager e API sem precisar escolher um método: [Google Ads Help](https://support.google.com/google-ads/answer/15479486?hl=en)
- Upload via API: [Google Ads API, offline conversions](https://developers.google.com/google-ads/api/docs/conversions/upload-offline)

### Inferences
- Para tráfego do Google indo ao site e depois ao WhatsApp, o site deve gravar o gclid (e UTMs) e passá-lo na mensagem pré-preenchida ou em um ID de reserva, para depois subir a corrida paga como conversão offline com valor.
- O evento de valor ideal é "sinal pago" ou "corrida realizada" com o valor total, não o clique no WhatsApp.

### Gaps
- Não encontrei documentação do Google específica para leads vindos de WhatsApp; a ligação depende de guardar o gclid no site antes do clique.

## 4. Sinal/pré-pagamento e política de cancelamento para reduzir no-show

### Takeaway
Pré-pagamento e sinal reduzem fortemente no-show em serviços com hora marcada; em transfer de aeroporto, o padrão de mercado é tempo de espera gratuito definido e, esgotado, no-show com 100% devido ao motorista. Não achei dados específicos de transfer no Brasil; os números vêm de restaurantes e agendamentos.

### Cited Findings
- Clientes com experiências pré-pagas têm 44% menos chance de no-show e 67% menos de cancelar em cima da hora (dados OpenTable, restaurantes): [OpenTable](https://www.opentable.com/restaurant-solutions/resources/3-proven-payment-strategies-reduce-no-shows/)
- Depósito de apenas 10% do ticket médio reduz no-show; quem cobrou depósito teve taxa média de no-show de 1,7% (restaurantes): [OpenTable](https://www.opentable.com/restaurant-solutions/resources/3-proven-payment-strategies-reduce-no-shows/)
- Pré-autorização de depósito relatada com 60% a 80% menos no-show (fonte de fornecedor, viés comercial): [PayRequest](https://payrequest.io/blog/no-show-protection-pre-authorization-deposits)
- Welcome Pickups (transfer de aeroporto): se o viajante não aparece até o fim do tempo de espera gratuito, é marcado no-show, motorista recebe 100% e não há reembolso: [Welcome Pickups](https://support.welcomepickups.com/en/articles/3883638-traveler-no-show-tns-policy)
- Regra prática: depósito para clientes novos/horários de pico, pré-pagamento para serviço escasso, cartão salvo para recorrentes: [Sprintful](https://sprintful.com/blog/deposits-prepay-no-show-reduction-simple-rules-that-actually-work)

### Inferences
- Proposta para a Translado: sinal via Pix (ex.: 20% a 30% ou valor fixo) para confirmar reserva; cancelamento grátis até X horas antes; espera gratuita após pouso monitorado (ex.: 45 a 60 min em desembarque doméstico); no-show retém o sinal. Apresentar como "garantia da reserva" e com o monitoramento de voo como benefício, não como punição.
- Na mensagem de confirmação (template utility, grátis dentro da janela), repetir política, nome do motorista e ponto de encontro.

### Gaps
- Sem dados de no-show de transfer/táxi no Brasil nem de aceitação de sinal pelo público de Confins; valores sugeridos acima são inferência.

## 5. Automação de pedidos de avaliação no Google via WhatsApp

### Takeaway
É permitido pedir avaliação a todos os clientes reais, mas o Google proíbe incentivo ao cliente e "review gating" (filtrar satisfeitos para o Google e insatisfeitos para formulário privado). WhatsApp tem taxa de resposta muito maior que e-mail.

### Cited Findings
- Política do Google permite pedir avaliação honesta, mas proíbe incentivos, engajamento falso, conflito de interesse, review gating e pressão por nota: [Reply Champion](https://www.replychampion.com/google-review-policy); [WiserReview](https://wiserreview.com/blog/google-review-incentives/)
- Pode-se bonificar o funcionário/motorista por desempenho em avaliações, não o cliente: [Applause](https://www.applausehq.com/blog/googles-rules-for-incentivizing-reviews)
- Pedidos de avaliação por WhatsApp teriam 20% a 35% de resposta vs 5% a 10% por e-mail (fonte de fornecedor, sem metodologia): [Reply Champion](https://www.replychampion.com/google-review-policy)
- Modelos de mensagem de pedido de avaliação por WhatsApp: [Whautomate](https://whautomate.com/whatsapp-templates/review-and-feedback-requests); [Epicware](https://epicware.ai/blog/google-review-request-templates)

### Inferences
- Disparar 1 a 3 horas após o fim da corrida, com link direto para escrever avaliação no Perfil da Empresa. Se o cliente conversou nas últimas 24h (muito provável no dia do transfer), a mensagem livre dentro da janela sai grátis; fora da janela, um template de pedido de avaliação tende a ser classificado como marketing (~R$0,31 a R$0,38).

### Gaps
- Não achei regra oficial da Meta confirmando se template de pedido de avaliação é utility ou marketing.

## 6. Custos aproximados e esforço de implementação (síntese)

### Takeaway
Três caminhos: (A) enxuto e próprio (tabela de rotas no site + bot WhatsApp via 360dialog/n8n + Pix por PSP + CAPI), ~US$59/mês + taxas Pix + horas de implementação; (B) CRM pronto (Kommo + integração), ~R$86 a R$193 por usuário/mês com contrato mínimo de 6 meses; (C) SaaS de limo (Moovs US$149/mês, Limo Anywhere US$99/mês + US$0,25/corrida + setup US$299), com rastreio de voo e app de motorista, mas sem Pix e em USD.

### Cited Findings
- 360dialog US$59/número/mês: [360dialog](https://360dialog.com/pricing)
- Kommo R$86/R$129/R$193 por usuário/mês no anual, mínimo 6 meses: [Comunidade Kommo](https://comunidadekommobrasil.com/kommo-planos)
- Moovs Standard US$149/mês, grátis no Test Drive: [Moovs](https://www.moovsapp.com/pricing)
- Limo Anywhere Core US$99/mês + US$0,25/corrida + US$299 setup: [Limo Anywhere](https://www.limoanywhere.com/pricing/)
- TaxiCaller ~US$20 a US$28/veículo/mês: [TaxiCaller](https://www.taxicaller.com/en/pricing)
- Machine/Gaudium: R$9.999,99 de entrada + mínimo R$199/mês (dado possivelmente antigo): [Machine FAQ](https://machine.global/faq/)
- Asaas Pix R$0,99 a R$1,99 por recebimento: [Asaas](https://www.asaas.com/pix-asaas)
- Plugins WordPress: Cab Grid Pro com pagamento único e sem assinatura: [Cab Grid Pro](https://cabgrid.com/pro/)

### Inferences
- Esforço estimado (inferência, não fonte): caminho A em 2 a 4 semanas para quem já domina n8n/360dialog (tabela de rotas, fluxo do bot, integração PSP, webhook de pagamento, CAPI); caminho B em 1 a 2 semanas de configuração; caminho C exige adaptar processo americano e manter Pix por fora.
- Rastreio de voo, se feito em casa, pode usar APIs de voo pagas; nos SaaS de limo já vem incluído.

### Gaps
- Custo das APIs Google Maps (para cotação por distância) e de APIs de voo não levantado.
- Preços de soluções brasileiras de transfer não publicados; necessário pedir demo.

const SITE_CONFIG = {
  whatsappNumber: '491708098695',
  phoneNumber: '+49 170 80 98 695',
  paypalBusinessEmail: 'REPLACE_WITH_PAYPAL_EMAIL',
  socials: {
    whatsapp: 'https://wa.me/491708098695',
    telegram: 'https://t.me/viprusauna',
    instagram: 'https://www.instagram.com/viprusauna/',
    tiktok: 'https://www.tiktok.com/@viprusauna'
  },
  pages: {
    home: {
      title: 'VIP-RU Sauna Dortmund | Private Sauna, Hamam und Massage',
      serviceName: 'VIP-RU Sauna Dortmund',
      heroTitle: 'Private Sauna, Hamam und Massage in Dortmund',
      heroLead: 'Entdecken Sie 4 Saunen, 1 Hamam, Massage und Speisen an einem Ort.'
    },
    bathhousevip: {
      title: 'VIP Sauna | VIP-RU Sauna Dortmund',
      serviceName: 'VIP Sauna',
      heroTitle: 'VIP Sauna fuer private Wellnessmomente',
      heroLead: 'Grosszuegiger privater Saunabereich fuer Paare, Freunde und kleine Gruppen.'
    },
    fishbanua: {
      title: 'Fischer Sauna | VIP-RU Sauna Dortmund',
      serviceName: 'Fischer Sauna',
      heroTitle: 'Fischer Sauna mit entspannter Atmosphaere',
      heroLead: 'Die rustikale Sauna fuer ruhige Erholung, Geselligkeit und eine warme Auszeit.'
    },
    luxbanua: {
      title: 'Lux Sauna | VIP-RU Sauna Dortmund',
      serviceName: 'Lux Sauna',
      heroTitle: 'Lux Sauna mit stilvollem Ambiente',
      heroLead: 'Eleganter Saunabereich mit Komfort, Ruhe und einem klaren Premium-Erlebnis.'
    },
    banua1: {
      title: 'Holzsauna | VIP-RU Sauna Dortmund',
      serviceName: 'Holzsauna',
      heroTitle: 'Holzsauna fuer klassisches Saunagefuehl',
      heroLead: 'Traditionelle Waerme, entspannte Ruhe und private Erholung fuer kleine Gruppen.'
    },
    hamam: {
      title: 'Hamam | VIP-RU Sauna Dortmund',
      serviceName: 'Hamam',
      heroTitle: 'Hamam fuer sanfte Waerme und tiefe Entspannung',
      heroLead: 'Feuchter Dampf, ruhige Atmosphaere und wohltuende Regeneration in privatem Rahmen.'
    },
    sauna1: {
      title: 'Massage | VIP-RU Sauna Dortmund',
      serviceName: 'Massage',
      heroTitle: 'Massage als perfekte Ergaenzung zu Sauna und Hamam',
      heroLead: 'Entspannende Anwendungen fuer Regeneration, Lockerung und einen runden Wellnessbesuch.'
    },
    food: {
      title: 'Speisen und Getraenke | VIP-RU Sauna Dortmund',
      serviceName: 'Speisen und Getraenke'
    }
  },
  navItems: [
    { href: 'bathhousevip.html', key: 'bathhousevip', label: 'VIP Sauna' },
    { href: 'fishbanua.html', key: 'fishbanua', label: 'Fischer Sauna' },
    { href: 'luxbanua.html', key: 'luxbanua', label: 'Lux Sauna' },
    { href: 'banua1.html', key: 'banua1', label: 'Holzsauna' },
    { href: 'hamam.html', key: 'hamam', label: 'Hamam' },
    { href: 'sauna1.html', key: 'sauna1', label: 'Massage' },
    { href: 'food.html', key: 'food', label: 'Speisen' }
  ]
};

const PAGE_COPY = {
  home: {
    aboutTitle: 'Unsere Sauna- und Wellnessbereiche',
    aboutCards: [
      {
        title: 'Vier private Saunen',
        body: `
          <p>Vier unterschiedliche private Saunen verbinden natuerliche Materialien, angenehme Waerme und ruhige Erholungszonen fuer Paare, Freunde und kleine Gruppen.</p>
          <br>
          <p>Jeder Bereich ist so gestaltet, dass Sie abschalten, durchatmen und neue Energie sammeln koennen.</p>
        `
      },
      {
        title: 'Privater Hamam',
        body: `
          <p>Unser Hamam bietet sanften Dampf, tiefe Entspannung und ein ruhiges Ambiente fuer langsame, wohltuende Wellnessrituale.</p>
          <br>
          <p>Warme Steinoberflaechen, feuchte Luft und eine entschleunigte Atmosphaere helfen Ihnen, vollkommen loszulassen.</p>
        `
      },
      {
        title: 'Stilvolles Ambiente',
        body: `
          <p>Natuerliche Oberflaechen, warmes Licht und durchdachte Details schaffen einen privaten Ort mit klarer, hochwertiger Atmosphaere.</p>
          <br>
          <p>So entsteht ein Aufenthalt, der sich ruhig, gepflegt und rundum besonders anfuehlt.</p>
        `
      }
    ],
    dortmundBadge: 'Standort',
    dortmundTitle: 'VIP-RU Sauna in Dortmund',
    dortmundSubtitle: 'Privater Spa-Bereich mit Sauna, Pool, Jacuzzi und Ruhezone im Herzen von Dortmund.',
    aboutDescription: 'Premium-Wellness fuer Erholung und Regeneration in Dortmund. Private Sauna, Kontrastbecken, Jacuzzi und ein entspannter Lounge-Bereich an einem Ort.',
    ctaBg: 'MEHR ERLEBEN',
    ctaNote: 'Mehr als nur Sauna: Genuss, Ruhe und private Zeit.',
    ctaItems: [
      'Kraeutertee und kleine Auszeiten auf der Terrasse geniessen',
      'Nach dem Saunagang in den Pool oder ins Jacuzzi wechseln',
      'Frische Snacks und Getraenke direkt in den Bereich bestellen',
      'Mit Freunden entspannt Zeit in der Lounge verbringen',
      'Massage- und Hamam-Rituale als Ergaenzung buchen',
      'Private Wellnessmomente fuer Geburtstage oder besondere Abende planen'
    ]
  },
  bathhousevip: {
    featureLabel: 'Bereich',
    featureTitle: 'VIP Sauna',
    featureParagraphs: [
      '<b>Die VIP Sauna</b> ist Ihr privater Rueckzugsort fuer Waerme, Ruhe und hochwertige Wellnessmomente.',
      'Grosszuegiger Platz, angenehme Hitze und ein entspannter Ablauf sorgen dafuer, dass Sie vollkommen abschalten und neue Energie sammeln koennen.'
    ],
    galleryTitle: 'Galerie',
    galleryLead: 'Einblicke in die VIP Sauna',
    galleryVideoTitle: 'Raumvorschau',
    calculatorTitle: 'VIP Sauna Rechner',
    calculatorSubtitle: 'Preis fuer Ihren Besuch berechnen'
  },
  fishbanua: {
    featureLabel: 'Bereich',
    featureTitle: 'Fischer Sauna',
    featureParagraphs: [
      '<b>Die Fischer Sauna</b> verbindet warmes Holz, ruhige Stimmung und den Charakter eines gemuetlichen Rueckzugsorts.',
      'Nach dem Saunagang entspannen Sie in einer lockeren Atmosphaere, die sich ideal fuer Gesprache, Erholung und private Zeit anfuehlt.'
    ],
    galleryTitle: 'Galerie',
    galleryLead: 'Einblicke in die Fischer Sauna',
    galleryVideoTitle: 'Raumvorschau',
    calculatorTitle: 'Fischer Sauna Rechner',
    calculatorSubtitle: 'Preis fuer Ihren Besuch berechnen'
  },
  luxbanua: {
    featureLabel: 'Bereich',
    featureTitle: 'Lux Sauna',
    featureParagraphs: [
      '<b>Die Lux Sauna</b> steht fuer stilvolle Erholung mit klarer Gestaltung, angenehmer Waerme und ruhigem Premium-Ambiente.',
      'Hier geniessen Sie private Wellness in einem eleganten Rahmen, der Komfort, Entspannung und hochwertige Details verbindet.'
    ],
    galleryTitle: 'Galerie',
    galleryLead: 'Einblicke in die Lux Sauna',
    galleryVideoTitle: 'Raumvorschau',
    calculatorTitle: 'Lux Sauna Rechner',
    calculatorSubtitle: 'Preis fuer Ihren Besuch berechnen'
  },
  banua1: {
    featureLabel: 'Bereich',
    featureTitle: 'Holzsauna',
    featureParagraphs: [
      '<b>Die Holzsauna</b> bringt klassisches Saunagefuehl, natuerliche Materialien und eine besonders ruhige Atmosphaere zusammen.',
      'Sie ist ideal fuer alle, die authentische Waerme, private Entspannung und ein traditionelles Saunaerlebnis geniessen moechten.'
    ],
    galleryTitle: 'Galerie',
    galleryLead: 'Einblicke in die Holzsauna',
    galleryVideoTitle: 'Raumvorschau',
    calculatorTitle: 'Holzsauna Rechner',
    calculatorSubtitle: 'Preis fuer Ihren Besuch berechnen'
  },
  hamam: {
    featureLabel: 'Bereich',
    featureTitle: 'Hamam',
    featureParagraphs: [
      '<b>Der Hamam</b> schenkt sanfte Waerme, feuchten Dampf und ein ruhiges Umfeld fuer tiefe Entspannung.',
      'Warme Oberflaechen, weiche Luft und langsame Rituale helfen dabei, den Kopf freizubekommen und den Koerper wohltuend zu regenerieren.'
    ],
    galleryTitle: 'Galerie',
    galleryLead: 'Einblicke in den Hamam',
    galleryVideoTitle: 'Raumvorschau',
    galleryMetaTitle: 'Hamam Video',
    galleryMetaText: 'Video wird spaeter hier eingefuegt',
    calculatorTitle: 'Hamam Rechner',
    calculatorSubtitle: 'Preis fuer Ihren Besuch berechnen'
  },
  sauna1: {
    featureLabel: 'Bereich',
    featureTitle: 'Massage',
    featureParagraphs: [
      '<b>Massage</b> ist die ideale Ergaenzung nach Sauna oder Hamam und hilft dabei, Verspannungen gezielt zu loesen.',
      'Ruhige, wohltuende Anwendungen unterstuetzen Regeneration, Lockerung und ein rundes Wellnessgefuehl.'
    ],
    galleryTitle: 'Galerie',
    galleryLead: 'Einblicke in den Massagebereich',
    galleryVideoTitle: 'Raumvorschau',
    calculatorTitle: 'Massage Rechner',
    calculatorSubtitle: 'Preis fuer Ihre Anwendung berechnen'
  },
  food: {
    heroTitle: 'Speisen und Getraenke',
    heroSubtitle: 'Snacks, warme Speisen und Getraenke fuer Ihren Besuch'
  }
};

function getPageSlug() {
  const path = window.location.pathname.split('/').pop() || 'index.html';
  if (path === '' || path === 'index.html') {
    return 'home';
  }
  return path.replace('.html', '');
}

function getPageConfig() {
  return SITE_CONFIG.pages[getPageSlug()] || SITE_CONFIG.pages.home;
}

function openWhatsApp(text) {
  const url = `${SITE_CONFIG.socials.whatsapp}?text=${encodeURIComponent(text)}`;
  window.open(url, '_blank', 'noopener');
}

function buildWhatsAppMessage(payload) {
  const kind = payload.requestKind || 'Anfrage';
  const lines = [
    'Hallo VIP-RU Sauna,',
    '',
    `${kind}`,
    payload.serviceName ? `Bereich: ${payload.serviceName}` : null,
    payload.fullName ? `Name: ${payload.fullName}` : null,
    payload.phone ? `Telefon: ${payload.phone}` : null,
    payload.email ? `E-Mail: ${payload.email}` : null,
    payload.date ? `Datum: ${payload.date}` : null,
    payload.time ? `Uhrzeit: ${payload.time}` : null,
    payload.guests ? `Personen: ${payload.guests}` : null,
    payload.amount ? `Betrag: ${payload.amount}` : null,
    payload.paymentMethod ? `Zahlung: ${payload.paymentMethod}` : null,
    payload.message ? `Nachricht: ${payload.message}` : null
  ].filter(Boolean);

  return lines.join('\n');
}

function replaceExactText(scope, translations) {
  scope.querySelectorAll('*').forEach((element) => {
    if (element.children.length > 0) return;
    const value = element.textContent.trim();
    if (translations[value]) {
      element.textContent = translations[value];
    }
  });
}

function getCurrentServiceName() {
  const config = getPageConfig();
  return config.serviceName || 'VIP-RU Sauna Dortmund';
}

function sanitizeAmount(value) {
  const normalized = String(value || '')
    .replace(',', '.')
    .replace(/[^0-9.]/g, '')
    .trim();
  const parsed = Number.parseFloat(normalized);

  if (!Number.isFinite(parsed) || parsed <= 0) {
    return '';
  }

  return parsed.toFixed(2);
}

function buildPayPalCheckoutUrl(amount) {
  const businessEmail = SITE_CONFIG.paypalBusinessEmail;
  if (!businessEmail || businessEmail.includes('REPLACE_WITH_PAYPAL_EMAIL')) {
    return '';
  }

  const params = new URLSearchParams({
    cmd: '_xclick',
    business: businessEmail,
    currency_code: 'EUR',
    amount
  });

  return `https://www.paypal.com/cgi-bin/webscr?${params.toString()}`;
}

function renderDesktopNav() {
  const nav = document.querySelector('.header-inner-about');
  if (!nav) return;

  const bathItems = SITE_CONFIG.navItems.filter((item) => (
    ['bathhousevip', 'fishbanua', 'luxbanua', 'banua1'].includes(item.key)
  ));
  const otherItems = SITE_CONFIG.navItems.filter((item) => (
    !['bathhousevip', 'fishbanua', 'luxbanua', 'banua1'].includes(item.key)
  ));
  const isBathPage = bathItems.some((item) => item.key === getPageSlug());

  const bathDropdown = `
    <div class="header-inner-about-item header-inner-about-item-parent${isBathPage ? ' header-inner-about-item-active' : ''}">
      <span class="header-inner-about-label">Saunen</span>
      <div class="header-submenu">
        ${bathItems.map((item) => {
          const activeClass = getPageSlug() === item.key ? ' header-submenu-item-active' : '';
          return `<a class="header-submenu-item${activeClass}" href="./${item.href}">${item.label}</a>`;
        }).join('')}
      </div>
    </div>
  `;

  const directLinks = otherItems.map((item) => {
    const activeClass = getPageSlug() === item.key ? ' header-inner-about-item-active' : '';
    return `<a class="header-inner-about-item${activeClass}" href="./${item.href}">${item.label}</a>`;
  }).join('');

  nav.innerHTML = bathDropdown + directLinks;
}

function renderSideMenu() {
  const nav = document.querySelector('.side-menu-nav');
  if (!nav) return;

  const serviceLinks = SITE_CONFIG.navItems.map((item) => {
    return `<a class="variable-bar${getPageSlug() === item.key ? ' header-inner-about-item-active' : ''}" href="./${item.href}">${item.label}</a>`;
  }).join('');

  nav.innerHTML = `
    ${serviceLinks}
    <a href="./index.html#about">Alle Bereiche</a>
    <a href="./index.html#dortmund">Standort</a>
    <a href="#contact">Kontakt</a>
  `;
}

function localizeCommonUi() {
  document.documentElement.lang = 'de';
  document.documentElement.setAttribute('lang', 'de');
  document.title = getPageConfig().title;

  if (!document.querySelector('link[rel="icon"]')) {
    const favicon = document.createElement('link');
    favicon.rel = 'icon';
    favicon.type = 'image/png';
    favicon.href = 'images/logo.png';
    document.head.appendChild(favicon);
  }

  document.querySelectorAll('.side-menu-social span').forEach((el) => {
    el.textContent = 'Direkter Kontakt';
  });

  document.querySelectorAll('.header-phone, .side-menu-phone').forEach((el) => {
    el.textContent = SITE_CONFIG.phoneNumber;
  });

  document.querySelectorAll('.call-back-btn').forEach((button) => {
    if (button.tagName === 'A' && button.getAttribute('href')) return;
    button.textContent = 'Senden Anfrage';
  });

  document.querySelectorAll('#bookButton').forEach((button) => {
    button.textContent = 'Senden Anfrage';
  });

  document.querySelectorAll('.btn.details').forEach((button) => {
    button.textContent = 'Mehr Details';
  });

  document.querySelectorAll('.call-back-btn-modification-a').forEach((link) => {
    link.textContent = 'Mehr erfahren';
  });

  document.querySelectorAll('.footer-map-title').forEach((el) => {
    el.textContent = 'VIP-RU Sauna Dortmund';
  });

  document.querySelectorAll('.footer-map-btn.ghost p').forEach((el) => {
    el.innerHTML = 'Route<br><span>planen</span>';
  });

  document.querySelectorAll('.footer-map-btn.ghost').forEach((link) => {
    link.setAttribute('href', 'https://maps.google.com/?q=Westricherstr+62,44388+Dortmund,Deutschland');
    link.setAttribute('target', '_blank');
    link.setAttribute('rel', 'noopener');
  });

  document.querySelectorAll('.footer-map-btn:not(.ghost) p').forEach((el) => {
    el.innerHTML = 'WhatsApp<br><span>oeffnen</span>';
  });

  document.querySelectorAll('.footer-map-btn:not(.ghost)').forEach((link) => {
    link.setAttribute('href', SITE_CONFIG.socials.whatsapp);
    link.setAttribute('target', '_blank');
    link.setAttribute('rel', 'noopener');
  });

  const page = getPageConfig();
  const heroTitle = document.querySelector('.hero h1');
  const heroLead = document.querySelector('.hero .lead');

  if (heroTitle && page.heroTitle) {
    heroTitle.textContent = page.heroTitle;
  }

  if (heroLead && page.heroLead) {
    heroLead.innerHTML = page.heroLead;
  }

  if (getPageSlug() === 'food') {
    const foodTitle = document.querySelector('main h1');
    const foodSubtitle = document.querySelector('.subtitle');
    const foodCta = document.querySelector('.cta a');
    if (foodTitle) foodTitle.textContent = 'Speisen und Getraenke';
    if (foodSubtitle) foodSubtitle.textContent = 'Snacks, warme Speisen und Getraenke fuer Ihren Besuch';
    if (foodCta) foodCta.textContent = 'Per WhatsApp bestellen';
  }

  if (getPageSlug() === 'home') {
    const homeCopy = PAGE_COPY.home;
    const homeTitle = document.querySelector('.about-section h2');
    const articleItems = document.querySelectorAll('.about-list .about-item');
    const dortmundLabel = document.querySelector('.dortmund-badge');
    const dortmundTitle = document.querySelector('#dortmund h2');
    const dortmundSubtitle = document.querySelector('.dortmund-subtitle');
    const aboutDescription = document.querySelector('.vipru-about__description');
    const openingHours = document.querySelector('.vipru-about__card:last-child .vipru-about__text');
    const ctaBg = document.querySelector('.cta-what-else-bg-text');
    const ctaNote = document.querySelector('.cta-what-else-note');
    const ctaItems = document.querySelectorAll('.cta-what-else-list li p');

    if (homeTitle) homeTitle.textContent = homeCopy.aboutTitle;
    articleItems.forEach((item, index) => {
      const cardCopy = homeCopy.aboutCards[index];
      if (!cardCopy) return;
      const title = item.querySelector('h3');
      const text = item.querySelector('.about-text');
      if (title) title.textContent = cardCopy.title;
      if (text) text.innerHTML = cardCopy.body;
    });
    if (dortmundLabel) dortmundLabel.textContent = homeCopy.dortmundBadge;
    if (dortmundTitle) dortmundTitle.textContent = homeCopy.dortmundTitle;
    if (dortmundSubtitle) dortmundSubtitle.textContent = homeCopy.dortmundSubtitle;
    if (aboutDescription) aboutDescription.textContent = homeCopy.aboutDescription;
    if (openingHours) {
      openingHours.innerHTML = 'Mo-Fr: 10:00-23:00<br>Sa-So: 09:00-23:00';
    }
    if (ctaBg) ctaBg.textContent = homeCopy.ctaBg;
    if (ctaNote) ctaNote.textContent = homeCopy.ctaNote;
    ctaItems.forEach((item, index) => {
      if (homeCopy.ctaItems[index]) {
        item.textContent = homeCopy.ctaItems[index];
      }
    });
  }

  replaceExactText(document, {
    'Jetzt kaufen': 'Jetzt kaufen',
    'Галерея и видео': 'Galerie',
    'Посмотрите наше пространство со всех сторон': 'Einblicke in den Bereich',
    'Видео тур по VIP бане': 'Raumvorschau',
    'Видео тур по бане': 'Raumvorschau',
    'Видео тур по хамаму': 'Raumvorschau',
    'Видео тур по хаммаму': 'Raumvorschau',
    'Видео тур по сауне': 'Raumvorschau',
    'Рассчитайте стоимость посещения': 'Preis fuer Ihren Besuch berechnen',
    'Количество часов:': 'Aufenthaltsdauer:',
    'Количество минут:': 'Dauer in Minuten:',
    'Часы': 'Stunden',
    'Выберите период:': 'Zeitraum:',
    'Будни (Чт весь день, Пт до 16:00)': 'Werktag (Do ganztags, Fr bis 16:00)',
    'Выходные (Пт после 16:00, Сб-Вс)': 'Wochenende (Fr ab 16:00, Sa-So)',
    'Количество гостей:': 'Anzahl Personen:',
    'Взрослые (12+)': 'Erwachsene (12+)',
    'Дети со скидкой. Конечный результат зависит от возраста — обращайтесь к нам для уточнения.': 'Kinder erhalten Rabatt. Details teilen wir direkt im Chat mit.',
    'Дополнительные услуги:': 'Zusatzleistungen:',
    'Банщик (заходов)': 'Banja-Meister (Gaenge)',
    'Березовый веник': 'Birkenquast',
    'Дубовый веник': 'Eichenquast',
    '12.50€ за заход': '12.50€ pro Gang',
    '9.00€ за штуку': '9.00€ pro Stueck',
    '10.00€ за штуку': '10.00€ pro Stueck',
    'Смета': 'Preisuebersicht',
    'Базовая цена:': 'Grundpreis:',
    'Стоимость: 1€ за минуту': 'Preis: 1€ pro Minute',
    'Стоимость массажа:': 'Massagepreis:',
    'Дополнительные взрослые:': 'Weitere Erwachsene:',
    'Услуги банщика:': 'Banja-Meister:',
    'Березовые веники:': 'Birkenquast:',
    'Дубовые веники:': 'Eichenquast:',
    'ИТОГО:': 'Gesamt:',
    'Забронировать сейчас': 'Jetzt anfragen',
    'Наша локация': 'Standort',
    'Мы в Дортмунде': 'VIP-RU Sauna in Dortmund',
    'Адрес': 'Adresse',
    'Контакты': 'Kontakt',
    'График': 'Oeffnungszeiten',
    'Пн–Пт: 10:00–23:00': 'Mo-Fr: 10:00-23:00',
    'Сб–Вс: 09:00–23:00': 'Sa-So: 09:00-23:00',
    'Про баню': 'Bereich',
    'Про хамам': 'Bereich',
    'О банях и других пространствах': 'Unsere Sauna- und Wellnessbereiche',
    'Территория хаммама': 'Privater Hamam',
    'Интерьер наших пространств': 'Stilvolles Ambiente',
    'Наши бани': 'Vier private Saunen',
    'Премиум меню от наших шефов': 'Snacks, warme Speisen und Getraenke fuer Ihren Besuch',
    'ЧТО ДЕЛАТЬ ЕЩЕ?': 'Was ist noch moeglich?',
    'Здесь все о новом старте – после сеанса': 'Mehr als nur Sauna: Genuss, Ruhe und private Zeit.',
    'ЗАБРОНИРОВАТЬ БАНЮ': 'Senden Anfrage',
    'ЗАБРОНИРОВАТЬ ХАММАМ': 'Senden Anfrage',
    'СМОТРЕТЬ БОЛЬШЕ': 'Mehr erfahren',
    'Забронировать': 'Senden Anfrage'
  });

  const sectionTitle = document.querySelector('.feature-left h2');
  const sectionLabel = document.querySelector('.feature-hamam-label');
  if (sectionTitle && page.serviceName && getPageSlug() !== 'home' && getPageSlug() !== 'food') {
    sectionTitle.textContent = page.serviceName;
  }
  if (sectionLabel && getPageSlug() !== 'food') {
    sectionLabel.textContent = 'Bereich';
  }

  const pageCopy = PAGE_COPY[getPageSlug()];
  if (pageCopy) {
    const featureParagraphs = document.querySelectorAll('.feature-left > p');
    const galleryTitle = document.querySelector('.gallery-section h2');
    const galleryLead = document.querySelector('.gallery-section > .container > p');
    const galleryVideoTitle = document.querySelector('.gallery-video h3');
    const galleryMetaTitle = document.querySelector('.gallery-video__meta strong');
    const galleryMetaText = document.querySelector('.gallery-video__meta span');
    const calculatorTitle = document.querySelector('.calculator-section h2');
    const calculatorSubtitle = document.querySelector('.calculator-subtitle');

    if (pageCopy.featureLabel && sectionLabel) sectionLabel.textContent = pageCopy.featureLabel;
    if (pageCopy.featureTitle && sectionTitle) sectionTitle.textContent = pageCopy.featureTitle;
    if (pageCopy.featureParagraphs?.length) {
      featureParagraphs.forEach((paragraph, index) => {
        if (pageCopy.featureParagraphs[index]) {
          paragraph.innerHTML = pageCopy.featureParagraphs[index];
        } else {
          paragraph.remove();
        }
      });
    }
    if (pageCopy.galleryTitle && galleryTitle) galleryTitle.textContent = pageCopy.galleryTitle;
    if (pageCopy.galleryLead && galleryLead) galleryLead.textContent = pageCopy.galleryLead;
    if (pageCopy.galleryVideoTitle && galleryVideoTitle) galleryVideoTitle.textContent = pageCopy.galleryVideoTitle;
    if (pageCopy.galleryMetaTitle && galleryMetaTitle) galleryMetaTitle.textContent = pageCopy.galleryMetaTitle;
    if (pageCopy.galleryMetaText && galleryMetaText) galleryMetaText.textContent = pageCopy.galleryMetaText;
    if (pageCopy.calculatorTitle && calculatorTitle) calculatorTitle.textContent = pageCopy.calculatorTitle;
    if (pageCopy.calculatorSubtitle && calculatorSubtitle) calculatorSubtitle.textContent = pageCopy.calculatorSubtitle;
  }
}

function injectHomeShortcuts() {
  if (getPageSlug() !== 'home') return;

  const heroInner = document.querySelector('.hero-inner');
  if (!heroInner || heroInner.querySelector('.service-shortcuts')) return;

  const shortcuts = document.createElement('div');
  shortcuts.className = 'service-shortcuts';
  shortcuts.innerHTML = `
    <a class="service-shortcuts__item" href="./bathhousevip.html">VIP Sauna</a>
    <a class="service-shortcuts__item" href="./fishbanua.html">Fischer Sauna</a>
    <a class="service-shortcuts__item" href="./luxbanua.html">Lux Sauna</a>
    <a class="service-shortcuts__item" href="./banua1.html">Holzsauna</a>
    <a class="service-shortcuts__item" href="./hamam.html">Hamam</a>
  `;

  heroInner.appendChild(shortcuts);
}

function floatHeroActionButtons() {
  const heroButtons = document.querySelector('.hero-action-buttons');
  if (!heroButtons || heroButtons.parentElement === document.body) return;

  heroButtons.dataset.floatingCta = 'true';
  document.body.appendChild(heroButtons);
}

function enhanceContacts() {
  document.querySelectorAll('.social-links').forEach((links) => {
    if (links.closest('.side-menu-social')) {
      links.parentElement?.querySelector('.social-text-links')?.remove();
      return;
    }

    if (links.querySelector('[data-social-text-links]')) return;

    const textLinks = document.createElement('div');
    textLinks.className = 'social-text-links';
    textLinks.dataset.socialTextLinks = 'true';
    textLinks.innerHTML = `
      <a href="${SITE_CONFIG.socials.whatsapp}" target="_blank" rel="noopener">WhatsApp</a>
      <a href="${SITE_CONFIG.socials.telegram}" target="_blank" rel="noopener">Telegram</a>
      <a href="${SITE_CONFIG.socials.instagram}" target="_blank" rel="noopener">Instagram</a>
      <a href="${SITE_CONFIG.socials.tiktok}" target="_blank" rel="noopener">TikTok</a>
    `;
    links.parentElement.appendChild(textLinks);
  });

  document.querySelectorAll('.footer-map-info').forEach((container) => {
    container.querySelector('.contact-quick-links')?.remove();
  });
}

function renderCallbackForm() {
  const title = document.querySelector('.callback-form h2');
  const subtitle = document.querySelector('.callback-subtitle');
  const form = document.querySelector('.callback-form-content');

  if (!form) return;

  if (title) {
    title.innerHTML = 'Senden Sie<br>Ihre Anfrage';
  }

  if (subtitle) {
    subtitle.textContent = 'Einfach Datum, Uhrzeit und Personenzahl senden. Wir antworten direkt per WhatsApp.';
  }

  form.setAttribute('data-whatsapp-form', 'true');
  form.setAttribute('data-form-kind', 'booking');
  form.innerHTML = `
    <input type="hidden" name="requestKind" value="Buchungsanfrage">
    <input type="hidden" name="serviceName" value="${getCurrentServiceName()}">
    <div class="form-grid">
      <div class="input-wrapper">
        <label for="fullName">Name und Nachname</label>
        <input type="text" id="fullName" name="fullName" required>
      </div>
      <div class="input-wrapper">
        <label for="phone">Telefon</label>
        <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="input-wrapper">
        <label for="date">Datum</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="input-wrapper">
        <label for="time">Uhrzeit</label>
        <input type="time" id="time" name="time" required>
      </div>
      <div class="input-wrapper">
        <label for="guests">Personenzahl</label>
        <input type="number" id="guests" name="guests" min="1" max="20" value="2" required>
      </div>
      <div class="input-wrapper">
        <label for="message">Wunsch / Hinweis</label>
        <input type="text" id="message" name="message" placeholder="z. B. Geburtstag oder private Feier">
      </div>
    </div>
    <button type="submit" class="btn">Per WhatsApp senden</button>
    <p class="callback-notice">Mit dem Absenden wird WhatsApp mit Ihrer Anfrage geoeffnet.</p>
  `;
}

function openBookingRequest(overrides = {}) {
  const callbackForm = document.querySelector('.callback-form');
  const menuBackdrop = document.querySelector('.menu-backdrop');
  const hiddenRequest = document.querySelector('.callback-form-content input[name="requestKind"]');
  const hiddenService = document.querySelector('.callback-form-content input[name="serviceName"]');

  if (!callbackForm || !menuBackdrop) return;

  if (hiddenRequest && overrides.requestKind) {
    hiddenRequest.value = overrides.requestKind;
  }

  if (hiddenService) {
    hiddenService.value = overrides.serviceName || getCurrentServiceName();
  }

  callbackForm.classList.add('active');
  menuBackdrop.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeBookingRequest() {
  const callbackForm = document.querySelector('.callback-form');
  const menuBackdrop = document.querySelector('.menu-backdrop');

  callbackForm?.classList.remove('active');
  menuBackdrop?.classList.remove('active');
  document.body.style.overflow = '';
}

function setupRequestButtons() {
  document.querySelectorAll('.call-back-btn').forEach((button) => {
    if (button.tagName === 'A' && button.getAttribute('href')) return;
    button.addEventListener('click', (event) => {
      event.preventDefault();
      openBookingRequest({
        requestKind: 'Buchungsanfrage',
        serviceName: getCurrentServiceName()
      });
    });
  });

  const callbackClose = document.querySelector('.callback-close');
  const callbackForm = document.querySelector('.callback-form');
  const menuBackdrop = document.querySelector('.menu-backdrop');

  callbackClose?.addEventListener('click', closeBookingRequest);

  callbackForm?.addEventListener('click', (event) => {
    if (event.target === callbackForm) {
      closeBookingRequest();
    }
  });

  menuBackdrop?.addEventListener('click', () => {
    closeBookingRequest();
    document.querySelector('.side-menu')?.classList.remove('active');
    document.body.classList.remove('menu-open');
  });
}

function setupMenu() {
  const menuBtn = document.querySelector('.menu-btn');
  const sideMenu = document.querySelector('.side-menu');
  const closeBtn = document.querySelector('.side-menu-close');
  const menuBackdrop = document.querySelector('.menu-backdrop');

  if (!menuBtn || !sideMenu || !closeBtn || !menuBackdrop) return;

  menuBtn.addEventListener('click', () => {
    sideMenu.classList.add('active');
    menuBackdrop.classList.add('active');
    document.body.classList.add('menu-open');
  });

  closeBtn.addEventListener('click', () => {
    sideMenu.classList.remove('active');
    menuBackdrop.classList.remove('active');
    document.body.classList.remove('menu-open');
  });
}

function setupWhatsAppForms() {
  document.querySelectorAll('[data-whatsapp-form]').forEach((form) => {
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      const data = new FormData(form);
      const payload = Object.fromEntries(data.entries());
      payload.requestKind = payload.requestKind || form.dataset.formKind || 'Anfrage';
      payload.serviceName = payload.serviceName || getCurrentServiceName();
      openWhatsApp(buildWhatsAppMessage(payload));
      form.reset();
      closeBookingRequest();
    });
  });
}

function setupGutscheinForms() {
  document.querySelectorAll('[data-gutschein-form]').forEach((form) => {
    const serviceField = form.querySelector('input[name="serviceName"]');
    const amountField = form.querySelector('input[name="amount"]');
    const paypalButton = form.querySelector('[data-paypal-button]');

    if (serviceField && !serviceField.value) {
      serviceField.value = getCurrentServiceName();
    }

    const updatePayPalButton = () => {
      if (!paypalButton || !amountField) return;

      const amount = sanitizeAmount(amountField.value);
      const url = amount ? buildPayPalCheckoutUrl(amount) : '';
      const configured = Boolean(url);

      paypalButton.setAttribute('href', url || '#');
      paypalButton.classList.toggle('is-disabled', !configured);
      paypalButton.setAttribute('aria-disabled', String(!configured));
    };

    amountField?.addEventListener('input', updatePayPalButton);
    updatePayPalButton();

    form.addEventListener('submit', (event) => {
      event.preventDefault();
      if (!form.reportValidity()) return;

      const data = new FormData(form);
      const payload = Object.fromEntries(data.entries());
      payload.requestKind = 'Gutschein kaufen';
      payload.serviceName = payload.serviceName || getCurrentServiceName();
      payload.amount = sanitizeAmount(payload.amount);
      openWhatsApp(buildWhatsAppMessage(payload));
    });

    paypalButton?.addEventListener('click', (event) => {
      if (!form.reportValidity()) {
        event.preventDefault();
        return;
      }

      const amount = sanitizeAmount(amountField?.value);
      const url = buildPayPalCheckoutUrl(amount);

      if (!url) {
        event.preventDefault();
        window.alert('Bitte zuerst die PayPal E-Mail in js/script.js eintragen.');
        return;
      }

      paypalButton.setAttribute('href', url);
    });
  });
}

function setupSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (event) {
      const href = this.getAttribute('href');
      if (!href || href === '#') return;
      const target = document.querySelector(href);
      if (!target) return;

      event.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      document.querySelector('.side-menu')?.classList.remove('active');
      document.querySelector('.menu-backdrop')?.classList.remove('active');
      document.body.classList.remove('menu-open');
    });
  });
}

function setupPopups() {
  const popupMap = {
    'details-program1': 'program1Popup',
    'details-program2': 'program2Popup',
    'details-Vip-ruChurn': 'Vip-ruChurnPopup',
    'details-mediumWell': 'mediumWellPopup',
    'details-wellDone': 'wellDonePopup',
    'details-doubleSizzle': 'doubleSizzlePopup',
    'details-perfectlySteamed': 'perfectlySteamedPopup',
    'details-womenSpaRetreat': 'womenSpaRetreatPopup',
    'details-hamam-relax': 'hamamRelaxPopup',
    'details-hamam-premium': 'hamamPremiumPopup',
    'details-hamam-light': 'hamamLightPopup'
  };

  document.querySelectorAll('.btn.details').forEach((button) => {
    button.addEventListener('click', () => {
      const popupId = popupMap[button.id];
      const popup = popupId ? document.getElementById(popupId) : null;
      if (!popup) return;
      popup.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  });

  document.querySelectorAll('.popup-close').forEach((button) => {
    button.addEventListener('click', () => {
      button.closest('.popup-overlay')?.classList.remove('active');
      document.body.style.overflow = '';
    });
  });

  document.querySelectorAll('.popup-overlay').forEach((overlay) => {
    overlay.addEventListener('click', (event) => {
      if (event.target === overlay) {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
      }
    });
  });
}

function setupExpandableCards() {
  const pairs = [
    ['.programs-load-more-btn', '.expandable-cards'],
    ['.massage-load-more-btn', '.expandable-cards-massage']
  ];

  pairs.forEach(([buttonSelector, listSelector]) => {
    const button = document.querySelector(buttonSelector);
    const list = document.querySelector(listSelector);
    if (!button || !list) return;
    button.addEventListener('click', () => {
      list.classList.add('expanded');
      button.style.display = 'none';
    });
  });
}

function initSwipers() {
  if (typeof Swiper === 'undefined') return;

  if (document.querySelector('.rituals-swiper')) {
    const totalSlides = document.querySelectorAll('.rituals-swiper .swiper-slide').length;
    const totalLabel = document.querySelector('.rituals-current-total');
    if (totalLabel) {
      totalLabel.textContent = `/${totalSlides}`;
    }

    new Swiper('.rituals-swiper', {
      slidesPerView: 1.15,
      spaceBetween: 32,
      centeredSlides: false,
      grabCursor: true,
      loop: false,
      breakpoints: {
        1600: { slidesPerView: 1.75, spaceBetween: 48 },
        1400: { slidesPerView: 1.75, spaceBetween: 38 },
        1300: { slidesPerView: 1.65, spaceBetween: 38 },
        1200: { slidesPerView: 1.45, spaceBetween: 38 },
        1100: { slidesPerView: 1.35, spaceBetween: 38 },
        900: { slidesPerView: 1.05, spaceBetween: 10 },
        800: { slidesPerView: 1, spaceBetween: 10 },
        600: { slidesPerView: 1, spaceBetween: 24 },
        0: { slidesPerView: 1, spaceBetween: 16 }
      },
      on: {
        slideChange(swiper) {
          const current = document.querySelector('.rituals-current');
          if (current) {
            current.textContent = String(swiper.realIndex + 1);
          }
        }
      }
    });
  }

  if (document.querySelector('.feature-hamam-swiper')) {
    new Swiper('.feature-hamam-swiper', {
      loop: false,
      direction: 'vertical',
      effect: 'slide',
      slidesPerView: 1.1,
      spaceBetween: 22,
      freeMode: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false
      },
      breakpoints: {
        320: { slidesPerView: 1, spaceBetween: 16 },
        768: { slidesPerView: 1.05, spaceBetween: 20 },
        1024: { slidesPerView: 1.1, spaceBetween: 22 }
      },
      on: {
        slideChange() {
          const current = document.querySelector('.feature-hamam-current');
          if (current) {
            current.textContent = String(this.realIndex + 1);
          }
        },
        init() {
          const total = document.querySelector('.feature-hamam-total');
          if (total) {
            total.textContent = String(this.slides.length);
          }
        }
      }
    });
  }
}

function initMap() {
  if (typeof L === 'undefined' || !document.getElementById('Vip-ru-map')) return;

  const map = L.map('Vip-ru-map', {
    center: [51.5447, 7.5481],
    zoom: 17,
    zoomControl: false
  });

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);

  const popupContent = `
    <div class="map-popup-content">
      <h4>VIP-RU Sauna Dortmund</h4>
      <p><strong>Westricherstr 62</strong></p>
      <p><strong>44388 Dortmund, Luetgendortmund</strong></p>
      <p>Private Sauna, Hamam und Massage</p>
      <p><strong>Telefon:</strong> ${SITE_CONFIG.phoneNumber}</p>
      <p><a href="https://vip-ru.de/" target="_blank" rel="noopener" style="color:#AB8C6B;font-weight:bold;">Zur Webseite</a></p>
    </div>
  `;

  const markerIcon = L.icon({
    iconUrl: 'images/marker-icon.png',
    iconSize: [25, 41],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34]
  });

  L.marker([51.5447, 7.5481], { icon: markerIcon }).addTo(map).bindPopup(popupContent).openPopup();
}

document.addEventListener('DOMContentLoaded', () => {
  renderDesktopNav();
  renderSideMenu();
  localizeCommonUi();
  injectHomeShortcuts();
  floatHeroActionButtons();
  enhanceContacts();
  renderCallbackForm();
  setupMenu();
  setupRequestButtons();
  setupWhatsAppForms();
  setupGutscheinForms();
  setupSmoothScroll();
  setupPopups();
  setupExpandableCards();
  initSwipers();
  initMap();
});

if (document.readyState !== 'loading') {
  floatHeroActionButtons();
}
window.addEventListener('load', floatHeroActionButtons);
requestAnimationFrame(floatHeroActionButtons);

window.openBookingRequest = openBookingRequest;

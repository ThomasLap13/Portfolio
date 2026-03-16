<div align="center">
  <img src="assets/images/da/portfolio_banner.png" alt="Portfolio Banner" width="100%">
  
  # 🚀 Portfolio Professionnel - Thomas Lapierre
  
  [![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
  [![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
  [![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
  [![Status](https://img.shields.io/badge/Status-En_D%C3%A9veloppement-green?style=for-the-badge)](https://github.com/ThomasLap13/Portfolio)

  **Étudiant en BTS SIO (SISR) | Alternant IT | Passionné par les réseaux et la cybersécurité**
</div>

---

## 📌 À Propos du Projet

Ce portfolio est une vitrine dynamique de mes compétences, projets et expériences dans le domaine de l'informatique. Conçu avec une approche **modulaire** et un design **Glassmorphism** élégant, il met en avant mon parcours en tant qu'administrateur réseau et développeur en formation.

## ✨ Fonctionnalités Clés

- 💨 **Navigation SPA** : Transitions fluides entre les pages grâce à `Swup.js` sans rechargement complet.
- 🔗 **Clean URLs** : Structure d'URL optimisée pour le SEO (masquage du dossier `public/` et des extensions `.php`).
- 📓 **Intégration Notion API** : Récupération dynamique des articles de veille technologique directement depuis une base de données Notion.
- 🛡️ **Sécurité** : Protection par Cloudflare Turnstile sur les formulaires et gestion sécurisée des variables d'environnement (via Docker / `getenv()`).
- 📱 **Responsive Design** : Entièrement optimisé pour mobiles, tablettes et ordinateurs via Bootstrap 5.

## 🛠️ Stack Technique

- **Backend** : PHP 8.x
- **Frontend** : HTML5, CSS3 (Custom Glassmorphism), Bootstrap 5
- **Interactif** : JavaScript (Scroll animations, Swup.js)
- **APIs** : Notion API (Veille), Microlink API (Previews)
- **Outils** : Git, Apache (.htaccess), Composer (gestion de dépendances pour les APIs)

## 📁 Structure du Projet

```text
├── assets/             # Ressources Statiques
│   ├── css/            # Feuilles de style custom
│   ├── js/             # Scripts et animations
│   └── images/         # Médias et photos de projets
├── includes/           # Composants réutilisables
│   ├── header.php      # Barre de navigation dynamique
│   └── footer.php      # Pied de page
├── public/             # Pages du site (index physique)
│   ├── contact.php
│   ├── veille.php
│   └── ...
├── .htaccess           # Règles de réécriture d'URL
├── index.php           # Point d'entrée principal (Routing)
└── README.md           # Documentation
```

## 🚀 Déploiement Docker

1.  **Variables d'environnement** : Configurez les variables suivantes dans votre conteneur ou `docker-compose.yml` :
    - `NOTION_TOKEN`
    - `NOTION_DATABASE_ID`
2.  **Accès** :
    - Ouvrez votre navigateur sur `https://synologynasthomas.synology.me`.

---

<div align="center">
  Développé avec ❤️ par <b>Thomas Lapierre</b>
</div>

html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Planet Toy</title>
  <style>
    :root {
      --bg-color: #fcefee;
      --text-color: #333;
      --header-footer-color: #ffb6c1;
      --toy-bg: #fff0f5;
      --toy-border: #ff69b4;
    }

    body {
      font-family: 'Comic Sans MS', cursive, sans-serif;
      margin: 0;
      padding: 0;
      background-color: var(--bg-color);
      color: var(--text-color);
      transition: all 0.3s ease;
    }

    header, footer {
      background-color: var(--header-footer-color);
      padding: 1rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo {
      display: flex;
      align-items: center;
    }

    .logo img {
      height: 50px;
      margin-right: 1rem;
    }

    nav a {
      margin: 0 1rem;
      color: #000;
      text-decoration: none;
      font-weight: bold;
    }

    .content {
      padding: 2rem;
      text-align: center;
    }

    .toy {
      display: inline-block;
      margin: 1rem;
      padding: 1rem;
      border: 2px solid var(--toy-border);
      border-radius: 1rem;
      background-color: var(--toy-bg);
      width: 200px;
    }

    .toy img {
      width: 100%;
      border-radius: 1rem;
    }

    .accessibility-toggle {
      position: fixed;
      top: 1rem;
      right: 1rem;
      background-color: #000;
      color: #fff;
      padding: 0.5rem 1rem;
      border: none;
      border-radius: 1rem;
      cursor: pointer;
      z-index: 1000;
    }

    body.accessible {
      --bg-color: #000;
      --text-color: #fff;
      --header-footer-color: #222;
      --toy-bg: #111;
      --toy-border: #fff;
      font-size: 1.25rem;
      line-height: 1.6;
      font-family: Arial, sans-serif;
    }

    body.accessible nav a {
      color: #fff;
    }

    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border: 0;
    }
  </style>
</head>
<body>
  <button class="accessibility-toggle" onclick="toggleAccessibility()" aria-label="Версия для слабовидящих">Версия для слабовидящих</button>

  <header>
    <div class="logo">
      <img src="Untitled_logo_1_free-file.jpg" alt=" логотип">
    </div>
    <nav>
      <a href="#">Главная</a>
      <a href="#catalog">Каталог</a>
      <a href="#about">О нас</a>
      <a href="#contact">Контакты</a>
    </nav>
  </header>

  <main>
    <section class="content" id="catalog">
      <h2>Каталог игрушек</h2>
      <div class="toy">
        <img src="plyushevyy-mishka-bolshoy.jpg" alt="Плюшевый мишка">
        <p>Плюшевый мишка</p>
      </div>
      <div class="toy">
        <img src="839245_img_2.jpg" alt="Игрушечная машина">
        <p>Игрушечная машина</p>
      </div>
      <div class="toy">
        <img src="govoryashaya-kukla-anna-vesna-22.jpg" alt="Кукла ">
        <p>Кукла</p>
      </div>
    </section>

    <section class="content" id="about">
      <h2>О нас</h2>
      <p>Мы любим детей и создаем игрушки, которые развивают воображение и приносят радость!</p>
    </section>

    <section class="content" id="contact">
      <h2>Контакты</h2>
      <p>Email: hello@toys.ru</p>
      <p>Телефон: +7 (900) 000-00-00</p>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Planet Toy</p>
  </footer>

  <script>
    function toggleAccessibility() {
      document.body.classList.toggle('accessible');
      const isAccessible = document.body.classList.contains('accessible');
      localStorage.setItem('accessibleMode', isAccessible);
    }

    // Сохраняем режим при перезагрузке страницы
    window.addEventListener('DOMContentLoaded', () => {
      const savedMode = localStorage.getItem('accessibleMode');
      if (savedMode === 'true') {
        document.body.classList.add('accessible');
      }
    });
  </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kerajinan Eksklusif</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      scroll-behavior: smooth;
      background-color: #fdfaf6;
      color: #3e2723;
    }

    .navbar {
      position: fixed;
      top: 0;
      right: 0;
      width: 100%;
      padding: 14px 20px;
      display: flex;
      justify-content: right;
      align-items: center;
    }

    .navbar a {
      color: #f8ede3;
      margin: 0 10px;
      text-decoration: none;
      font-weight: 500;
    }

    .navbar a:hover {
      color: #ffe0b2;
    }

    .navbar form {
      margin: 0;
    }

    .navbar button {
      background: #d7ccc8;
      color: #3e2723;
      padding: 8px 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s;
    }

    .navbar button:hover {
      background: #bcaaa4;
    }

    section {
      min-height: 30vh;
      padding: 100px 20px 60px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    #hero {
      background: linear-gradient(135deg, #d2b48c, #8b5e3c);
      color: white;
    }

    #hero h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    #hero h3 {
      font-weight: 400;
      margin-bottom: 25px;
    }

    #about {
      background: #fffaf5;
    }

    #about h2, #contact h2 {
      font-size: 2rem;
      margin-bottom: 15px;
      color: #5d4037;
    }

    #about p {
      max-width: 600px;
      line-height: 1.6;
      font-size: 1.1rem;
    }

    #contact {
        padding: 0;
      background: #f3e5ab;
    }

    #contact p {
      font-size: 1.1rem;
      margin: 5px 0;
    }

    .btn {
      padding: 12px 20px;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      background: #8d6e63;
      color: white;
      transition: 0.3s;
    }

    .btn:hover {
      background: #6d4c41;
    }

  </style>
</head>
<body>
  <div class="navbar">
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit">Logout</button>
    </form>
  </div>

  <main>
    {{$slot}}
  </main>
</body>
</html>

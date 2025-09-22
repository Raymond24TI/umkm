<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Registration - Kerajinan Eksklusif</title>
  <style>
    body, html {
      height: 100%;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #d2b48c, #8b5e3c);
    }

    main {
      background: #fffaf5;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
      width: 320px;
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
      color: #5d4037;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    input {
      padding: 12px;
      font-size: 1rem;
      border: 1px solid #d7ccc8;
      border-radius: 8px;
      outline: none;
      transition: 0.3s;
    }

    input:focus {
      border-color: #8d6e63;
      box-shadow: 0px 0px 6px rgba(141, 110, 99, 0.4);
    }

    button {
      padding: 12px;
      font-size: 1rem;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      background: #8d6e63;
      color: white;
      transition: 0.3s;
    }

    button:hover {
      background: #6d4c41;
      transform: translateY(-2px);
    }

    a {
      display: block;
      margin-top: 15px;
      font-size: 0.9rem;
      color: #6d4c41;
      text-decoration: none;
      transition: 0.3s;
    }

    a:hover {
      color: #3e2723;
    }
  </style>
</head>
<body>
  <main>
    {{$slot}}
  </main>
</body>
</html>

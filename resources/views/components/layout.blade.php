<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login & Registration</title>
    <style>
        body, html {
  height: 100%;
  margin: 0;
  display: flex;
  justify-content: center; /* center horizontally */
  align-items: center;     /* center vertically */
  font-family: Arial, sans-serif;
  background: #f0f0f0;
}

form {
  background: white;
  padding: 20px;
  border-radius: 6px;
  box-shadow: 0 0 8px rgba(0,0,0,0.1);
  display: flex;
  flex-direction: column;
  gap: 10px;
  width: 280px;
}

input, button {
  padding: 10px;
  font-size: 1rem;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  background-color: #007BFF;
  color: white;
  border: none;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

    </style>
</head>
<body>
    <main>
        {{$slot}}
    </main>
</body>
</html>

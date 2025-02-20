<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 400px;
      margin-top: 10px;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    label {
      font-weight: 600;
      display: block;
      margin-top: 10px;
    }

    input,
    select,
    textarea {
      width: 100%;
      padding: 8px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .gender,
    .skills {
      display: flex;
      gap: 10px;
    }

    button {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border: none;
      cursor: pointer;
      font-size: 16px;
      border-radius: 4px;
      background-color: #ccc;
      color: white;
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="servers.php" method="post">
      <label>First Name</label>
      <input type="text" name="fname" required>

      <label>Last Name</label>
      <input type="text" name="lname" required>

      <label>Address</label>
      <textarea name="address" rows="3" required></textarea>

      <label>Country</label>
      <select name="country">
        <option>Select Country</option>
        <option value="EG">Egypt</option>
        <option value="US">USA</option>
        <option value="UK">UK</option>
      </select>

      <label>gender</label>
      <div class="gender">
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>

        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
      </div>

      <label>skills</label>
      <div class="skills">
        <input type="checkbox" id="php" name="skills[]" value="PHP">
        <label for="php">PHP</label>

        <input type="checkbox" id="mysql" name="skills[]" value="MySQL">
        <label for="mysql">C++</label>

        <input type="checkbox" id="j2se" name="skills[]" value="J2SE">
        <label for="j2se">JS</label>
      </div>

      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>
</body>

</html>
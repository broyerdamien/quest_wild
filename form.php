<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form  action="thank.php"  method="post">
    <div>
      <label  for="user_name">Nom :</label>
      <input  type="text"  id="user_name"  name="user_name" required>
    </div>
    <div>
      <label  for="prenom"> Prenom:</label>
      <input  type="text"  id="prenom"  name="prenom" required>
    </div>
    <div>
      <label  for="couriel">E-mail :</label>
        <input  type="email"  id="couriel"  name="couriel" required>
    </div>
    <label  for="telephone">Télephone :</label>
        <input  type="tel"  id="telephone"  name="telephone" required>
    </div>
    <label  for="viande">Sujet :</label><br />
        <select name= "viande" id= "viande" required>
          <option value ="beef"> Beef</option>
          <option value ="Rosbeef"> Rosbeef</option>
    </div>
      <label  for="message">Message :</label>
      <textarea  id="messages"  name="message" required ></textarea>
    
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>    
  
</body>
</html>


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
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="nom"> Prenom:</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="courriel">E-mail :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <label  for="courriel">Télephone :</label>
        <input  type="tel"  id="courriel"  name="user_email">
    </div>
    <label  for="viande">Sujet :</label><br />
        <select name= "viande" id= "viande">
          <option value ="beef"> Beef</option>
          <option value ="Rosbeef"> Rosbeef</option>
    </div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>    
  
</body>
</html>


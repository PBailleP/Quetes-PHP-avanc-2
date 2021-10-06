<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" id="nom"  name="user_name" required>
    </div>
    <div>
      <label  for="prenom">Prenom :</label>
      <input  type="text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" id="prenom"  name="user_prenom" required>
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
      <input  type="email"  id="courriel"  name="user_email" required>
    </div>
    <div>
      <label  for="tel">Telephone :</label>
      <input  type="tel" pattern="^0[1-9]{1}(([0-9]{2}){4})|((\s[0-9]{2}){4})|((-[0-9]{2}){4})$" id="tel"  name="user_tel" required>
    </div>
    <div>
      <label  for="subject">Choisissez un sujet :</label>
      <select name="sujet" id="subject" required>
          <option value="">Choose a subject</option>
          <option value="Quetes">Quetes</option>
          <option value="Dojo">Dojo</option>
          <option value="Workshop">Workshop</option>
      </select> 
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message" required></textarea>
    </div>
    <div  class="button">
    <button  type="submit">Envoyer votre message</button>
    </div>
  </form>   
</body>
</html>

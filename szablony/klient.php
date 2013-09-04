<html>
  <head>
    <title>Budujemy solidnie!</title>
  </head>
  <body>
    <table>
      <tr>
	<th colspan="2">
	  <h1><?php echo $title; ?></h1>
	</th>
      </tr>
      <tr>
	<td>
	  <p><a href="historia.php">Lista zamówień</a></p>
	  <p><a href="zamow.php">Dodaj zamówienie</a></p>
	  <p><a href="profil.php">Twój profil</a></p>
	  <?php if($uzytkownik['uprawnienia'] == 2): ?>
	      <p><a href="admin_dodaj_klienta.php">Dodaj użytkownika</a></p>
	      <p><a href="admin_wszyscy.php">Lista uzytkowników</a></p>
	      <p><a href="admin_dodaj_zamowienie.php">Dodaj zamówienie</a></p>
	      <p><a href="admin_wszystko.php">Lista zamówień</a></p>
	      <p><a href="admin_dodaj_produkt.php">Dodaj produkt</a></p>
	      <p><a href="admin_produkty.php">Lista produktów</a></p>
	      <p><a href="admin_dodaj_promocje.php">Dodaj promocję</a></p>
	      <p><a href="admin_promocje.php">Lista promocji</a></p>
	  <?php endif; ?>
	  <p><a href="wyloguj.php">Wyloguj</a></p>
	</td>
	<td>
	  <?php echo $content; ?>
	</td>
      </tr>
    </table>
  </body>
</html>

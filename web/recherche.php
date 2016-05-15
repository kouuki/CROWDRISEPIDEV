<?php
$word = $_GET['word'] ;
$categorie = $_GET['categorie'] ;

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("crowdrise",$con);
$req="SELECT a.titre,a.description,a.date_probleme,a.deadline_probleme,a.categorie,a.id_probleme,m.path FROM probleme a inner join media m on(a.fichier=m.id) where titre like '%".$word."%' and a.categorie like '%".$categorie."%'";
$data = mysql_query($req) or die('Erreur SQL !'.$req.'<br>'.mysql_error());
?>

<?php


while ($row = mysql_fetch_array($data))
{
echo "<tr>";
                                      echo"<td><strong>".$row['titre']."</strong></td>";
                                        echo "<td>".$row['description']."</td>";
                                        echo "<td>".$row['date_probleme']."</td>";
                                        echo "<td>".$row['deadline_probleme']."</td>";
                                        echo "<td>".$row['categorie']."</td>";
                                        echo"<td><a href='/PIDEV/web/uploads/".$row['path']."'download>Ouvrir</td>";

 echo "<td> <a href='http://localhost/Pidev/web/app_dev.php/modifier".$row['id_probleme']."'><img src='/PIDEV/web/img/modify.png' align='left' width='30' height='30'/></a>";
 echo "<a href='http://localhost/Pidev/web/app_dev.php/supprimer".$row['id_probleme']."'><img src='/PIDEV/web/img/delete.png' align='left' width='30' height='30'/></a>";
 echo "<td> <a href='http://localhost/Pidev/web/app_dev.php/afficher'>Afficher</td>";
                                    echo "</tr>";
}
?>

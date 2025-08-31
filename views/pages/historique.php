<?php 
    require 'config/db.php';

    $stmt = $pdo->query("SELECT * FROM fenetres");
    $fenetres = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $pdo->query("SELECT * FROM portes ORDER BY date_creation DESC");
    $portes = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container-historique mt-5 m-0">
  <div class="row m-0" style="display: flex; justify-content: space-around;">
    <div class="historique-fenetre">
      <h2 class="mb-4 text-center">fenêtres</h2>  
      <div class="fenetre" style="max-height: 650px; overflow-y: auto; scroll-behavior: smooth;">
        <table class="table table-bordered table-striped">
          <thead class="table-dark sticky-top">
            <tr>
              <th>ID</th>
              <th>Type</th>
              <th>Dimensions</th>
              <th>Surface</th>
              <th>Nombres</th>
              <th>Prix</th>
              <th>Date/Heure</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($fenetres as $fenetre): ?>
            <tr>
              <td><?= $fenetre['id'] ?></td>
              <td><?= htmlspecialchars($fenetre['type_fenetre']) ?></td>
              <td><?= $fenetre['longueur'] ?>m x <?=$fenetre['largeur'] ?>m</td>
              <td><?= $fenetre['surface'] ?> m²</td>
              <td><?=  $fenetre['nombre']?></td>
              <td><?= number_format($fenetre['prix'], 0, ',', ' ') ?> Ar</td>
              <td><?= $fenetre['date_creation']?></td>
              <td>
                <form method="POST" style="display: inline;">
                  <input type="hidden" name="delete_id" value="<?= $fenetre['id'] ?>">
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return('Confirmer la suppression');">Supprimer</button>
                </form>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    
    <div class="historique-porte">
      <h2 class="mb-4 text-center">Portes</h2>
      <div class="porte" style="max-height: 650px; overflow-y: auto; scroll-behavior: smooth;">
        <table class="table table-bordered table-striped">
          <thead class="table-dark sticky-top">
            <tr>
              <th>ID</th>
              <th>Type</th>
              <th>Dimensions</th>
              <th>Surface</th>
              <th>Nombres</th>
              <th>Prix</th>
              <th>Date/Heure</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($portes as $portes): ?>
            <tr>
              <td><?= $portes['id'] ?></td>
              <td><?= htmlspecialchars($portes['type_porte']) ?></td>
              <td><?= $portes['longueur'] ?>m x <?=$portes['largeur'] ?>m</td>
              <td><?= $portes['surface'] ?> m²</td>
              <td><?=  $portes['nombre']?></td>
              <td><?= number_format($portes['prix'], 0, ',', ' ') ?> Ar</td>
              <td><?= $fenetre['date_creation'] ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

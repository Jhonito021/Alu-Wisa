<?php 
// Traitement du formulaire
$resultat = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $longueur = floatval($_POST['longueur']);
    $largeur = floatval($_POST['largeur']);
    $typeFenetre = $_POST['type_fenetre'];
    $typeVitre = $_POST['type_vitre'];
    $profil_alu = $_POST['profil_alu'];
    $nbr = floatval($_POST['Nombre']);

    $surface = $longueur * $largeur;
    $prix = 0;
    $formule = "";

    if ($surface < 1) {
        // Cas spécial < 1 m²
        if ($typeFenetre === "coulissante") {
            $prix = ($longueur + $largeur) * 2 * 100000;
            $formule = "(L + l) * 2 * 100000";
        } else { // ouvrante
            $prix = ($longueur + $largeur) * 2 * 150000;
            $formule = "(L + l) * 2 * 150000";
        }
    } else {
        // Cas >= 1 m²
        if ($typeFenetre === "coulissante") {
            $prix = $surface * 460000;
            $formule = "L * l * 460000";
        } else { // ouvrante
            $prix = $surface * 520000;
            $formule = "L * l * 520000";
        }
    }

    // Naco
    if ($typeFenetre === "naco") {
        $prix = ($longueur + $largeur) * 2 * 80000;
        $formule = "(L + l) * 2 * 80000";
    }

    // Profil Alu
    if ($profil_alu === "K56") {
        $alu = "K56";
    } else {
        $alu = "B65";
    }

    // Nombre
    if ($nbr >= 1) {
        $res = $nbr;
        $prix = $prix * $nbr;
    }

    // Majoration vitre
    if ($typeVitre === "teinte") {
        $prix *= 1.10;
    }

    $prix = number_format($prix, 2, ',', ' ');

    $resultat = "
        <h5 class='text-primary'>Résultat :</h5>
        <p>Fenêtre <strong>$typeFenetre</strong> avec vitre <strong>$typeVitre</strong></p>
        <p>Dimensions : $longueur m x $largeur<sup>(ht)</sup> m</p>
        <p>Profil Alu: <strong>$alu</strong></p>
        <p>Surface totale : <strong>$surface m²</strong></p>
        <p>Formule appliquée : <strong class='text-danger'>$formule</strong></p>
        <p>Quantités: <strong>$res</strong></p>
        <p class='h5 text-success'>Prix estimé : $prix Ar</p>
    ";
}
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-header text-white text-center">
          <h4> 
            <i class="fas fa-gear"></i> 
            Configurer votre Fenêtre
        </h4>
        </div>
        <div class="card-body">
          <form method="post">

            <!-- Longueur -->
            <div class="form-group">
              <input type="number" step="0.01" min="0" name="longueur" id="longueur" 
                     class="form-control form-control-lg" placeholder=" " required>
              <label class="form-control-placeholder" for="longueur">Longueur (m)</label>
            </div>

            <!-- Largeur -->
            <div class="form-group">
              <input type="number" step="0.01" min="0" name="largeur" id="largeur" 
                     class="form-control form-control-lg" placeholder=" " required>
              <label class="form-control-placeholder" for="largeur">Largeur (m)</label>
            </div>

            <!-- Type fenêtre -->
            <div class="form-group">
              <select name="type_fenetre" id="type_fenetre" class="form-control form-control-lg" required>
                <option value="coulissante" selected>Coulissante</option>
                <option value="ouvrante">Ouvrante</option>
                <option value="naco">Naco</option>
              </select>
              <label class="form-control-placeholder" for="type_fenetre">Type de fenêtre</label>
            </div>

            <!-- Profil Alu -->
            <div class="form-group">
              <select name="profil_alu" id="profil_alu" class="form-control form-control-lg" required>
                <option value="K56" selected>K56</option>
                <option value="B65">B65</option>
              </select>
              <label class="form-control-placeholder" for="profil_alu">Alu</label>
            </div>

            <!-- Type vitre -->
            <div class="form-group">
              <select name="type_vitre" id="type_vitre" class="form-control form-control-lg" required>
                <option value="claire" selected>Claire</option>
                <option value="teinte">Teintée (+10%)</option>
              </select>
              <label class="form-control-placeholder" for="type_vitre">Type de vitre</label>
            </div>

            <!-- Nombre -->
            <div class="form-group">
              <input type="number" step="1" min="0" name="Nombre" id="Nombre" 
                     class="form-control form-control-lg" placeholder=" " value="1" required>
              <label class="form-control-placeholder" for="Nombre">Nombres</label>
            </div>

            <button type="submit" class="btn btn-success btn-block btn-lg">
                <i class="fas fa-calculator"></i>
                Calculer le prix
            </button>
          </form>
        </div>
      </div>

      <?php if ($resultat): ?>
        <div class="alert alert-info mt-4 shadow-sm">
          <?= $resultat ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>


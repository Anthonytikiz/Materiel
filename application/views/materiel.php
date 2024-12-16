<div class="main-content">
    <!-- <h1>Gestion des Matériels</h1> -->

    <form action="<?php echo site_url('materiel/ajouter'); ?>" method="POST" class="form-ajout">
        <h2>Ajouter un Matériel</h2>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="type">Type :</label>
        <select id="type" name="type">
            <option value="Machine">Machine</option>
            <option value="Equipement informatique">Equipement informatique</option>
            <option value="Véhicule">Véhicule</option>
        </select>

        <label for="date_achat">Date d'achat :</label>
        <input type="date" id="date_achat" name="date_achat" required>

        <label for="cout">Coût :</label>
        <input type="number" id="cout" name="cout" required>

        <button type="submit">Ajouter</button>
    </form>

    <!-- Liste des matériels -->
    <h2>Liste des Matériels</h2>
    <table class="materiel-table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Type</th>
                <th>Date d'achat</th>
                <th>Coût</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Imprimante</td>
                <td>Equipement informatique</td>
                <td>2023-05-12</td>
                <td>150000</td>
            </tr>
            <tr>
                <td>Camion</td>
                <td>Véhicule</td>
                <td>2022-08-30</td>
                <td>2500000</td>
            </tr>
        </tbody>
    </table>
</div>

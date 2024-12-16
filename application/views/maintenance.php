<div class="main-content">
    <form action="<?php echo site_url('maintenance/planifier'); ?>" method="POST" class="form-ajout">
        <h2>Planification de la Maintenance Préventive</h2>
        <label for="materiel">Sélectionner le Matériel :</label>
        <select id="materiel" name="materiel">
            <option value="1">Imprimante</option>
            <option value="2">Camion</option>
        </select>

        <label for="date_maintenance">Date de Maintenance :</label>
        <input type="date" id="date_maintenance" name="date_maintenance" required>

        <label for="type_maintenance">Type de Maintenance :</label>
        <select id="type_maintenance" name="type_maintenance">
            <option value="Préventive">Préventive</option>
            <option value="Curative">Curative</option>
        </select>

        <button type="submit">Planifier</button>
    </form>
    
    <div class="alertes">
        <h3>Alertes pour les Maintenances à Venir</h3>
        <div class="alert">
            <span class="alert-text">Maintenance préventive pour Matériel 1 le 12/12/2024</span>
            <span class="alert-date">Date limite: 10/12/2024</span>
            <span class="alert-status">Statut: En attente</span>
        </div>
        <div class="alert">
            <span class="alert-text">Maintenance curative pour Matériel 2 le 15/12/2024</span>
            <span class="alert-date">Date limite: 13/12/2024</span>
            <span class="alert-status">Statut: En attente</span>
        </div>
    </div>

    <!-- Historique des interventions -->
    <div class="materiel-table">
        <h3>Historique des Interventions</h3>
        <table class="historique-table">
            <thead>
                <tr>
                    <th>Matériel</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Coût (€)</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Matériel 1</td>
                    <td>Préventive</td>
                    <td>01/11/2024</td>
                    <td>Vérification des filtres et maintenance générale</td>
                    <td>150</td>
                    <td>Terminé</td>
                </tr>
                <tr>
                    <td>Matériel 2</td>
                    <td>Curative</td>
                    <td>05/11/2024</td>
                    <td>Réparation du moteur</td>
                    <td>350</td>
                    <td>En cours</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

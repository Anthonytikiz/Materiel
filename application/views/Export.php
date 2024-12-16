<div class="main-content">
    <div class="content">
        
        <!-- Export des données -->
        <div class="export-section">
            <h1>Intégration et API</h1>
            <h3>Exporter les Données</h3>
            <div class="export-buttons">
                <a href="<?php echo site_url('ExportController/export_excel'); ?>"><button class="btn-export" id="export-excel">Export Excel</button></a>
                <a href="<?php echo site_url('ExportController/export_pdf'); ?>"><button class="btn-export" id="export-pdf">Export PDF</button></a>
            </div>
        </div>
        <?php $materiel['latitude']=-1 ?>
        <?php $materiel['longitude']=-1.11 ?>
        <!-- API pour intégration avec IA -->
        <div class="api-section">
            <h3>Intégration API</h3>
            <form class="api-form" action="#" method="post">
                <label for="api-key">Clé API</label>
                <input type="text" id="api-key" name="api-key" placeholder="Entrez votre clé API">

                <label for="request">Requête API</label>
                <textarea id="request" name="request" rows="5" placeholder="Exemple : Demande d'analyse IA..."></textarea>

                <button type="submit" class="btn-submit">Envoyer la Requête</button>
            </form>

            <div class="api-response">
                <h4>Réponse de l'IA :</h4>
                <pre id="api-response">Aucune réponse pour le moment...</pre>
            </div>
        </div>
    </div>
</div>

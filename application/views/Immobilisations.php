<div class="main-content">
    <h1>Suivi des Matériels</h1>

    <!-- Liste des matériels avec leurs statuts -->
    <h2>Matériels sur Site</h2>
    <table class="materiel-table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Type</th>
                <th>Statut</th>
                <th>Localisation</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Exemple de données -->
            <tr>
                <td>Imprimante</td>
                <td>Equipement informatique</td>
                <td>
                    <select name="statut" class="statut">
                        <option value="En service">En service</option>
                        <option value="En réparation">En réparation</option>
                        <option value="Hors service">Hors service</option>
                    </select>
                </td>
                <td>
                    <input type="text" placeholder="Géolocalisation" class="statut" disabled>
                </td>
                <td><button class="bouton">Mettre à jour</button></td>
            </tr>
        </tbody>
    </table>

    <h1>Carte des Maisons</h1>

<div id="map"></div>

<!-- Modal pour ajouter une maison -->
<div id="addHouseModal" style="display:none;">
    <div class="modal-content">
        <h3>Ajouter une Maison</h3>
        <p>
            Nom de la maison :
            <input type="text" id="houseName" placeholder="Nom de la maison">
        </p>
        <button id="saveHouseButton">Sauvegarder la Maison</button>
        <button id="cancelButton">Annuler</button>
    </div>
</div>

    <!-- Charger la feuille de style de Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    
    <!-- Charger la bibliothèque Leaflet.js -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <!-- Charger Axios (si vous l'utilisez pour les requêtes AJAX) -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    // Initialiser la carte
    var map = L.map('map').setView([-18.8792, 47.5079], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Ajouter des maisons sur la carte
    var houses = [];  // Récupérer les maisons depuis CodeIgniter

    houses.forEach(function(house) {
        L.marker([house.lat, house.lng]).addTo(map)
            .bindPopup('<b>' + house.name + '</b><br><button onclick="ajouterDepence(' + house.id + ')">Ajouter dépense</button>');
    });

    // Afficher la modal pour ajouter une maison
    map.on('click', function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;

        document.getElementById('addHouseModal').style.display = 'block';

        document.getElementById('saveHouseButton').onclick = function() {
            var houseName = document.getElementById('houseName').value;
            if (houseName.trim() !== '') {
                var newHouse = {
                    name: houseName,
                    lat: lat,
                    lng: lng
                };

                // Ajouter un marqueur pour la nouvelle maison
                L.marker([lat, lng]).addTo(map)
                    .bindPopup('<b>' + houseName + '</b><br><button onclick="ajouterDepence()">Ajouter dépense</button>');

                // Envoyer la maison au backend (CodeIgniter)
                axios.post('<?= site_url("maison/add_house") ?>', newHouse)
                    .then(function(response) {
                        console.log(response.data);
                    })
                    .catch(function(error) {
                        console.error(error);
                    });

                document.getElementById('addHouseModal').style.display = 'none';
                document.getElementById('houseName').value = '';  // Reset du champ
            } else {
                alert('Veuillez entrer un nom pour la maison.');
            }
        };

        document.getElementById('cancelButton').onclick = function() {
            document.getElementById('addHouseModal').style.display = 'none';
        };
    });
</script>
</div>
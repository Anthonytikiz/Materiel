<div class="main-content">
    <main>
        <section class="stats">
            <div class="card">
                <h2>50</h2>
                <p>Matériels en Service</p>
            </div>
            <div class="card">
                <h2>10</h2>
                <p>En Réparation</p>
            </div>
            <div class="card">
                <h2>5</h2>
                <p>Hors Service</p>
            </div>
            <div class="card">
                <h2>150,000 €</h2>
                <p>Valeur Totale</p>
            </div>
        </section>

        <section class="charts">
            <div class="chart-container">
                <canvas id="statusChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="categoryChart"></canvas>
            </div>
        </section>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="<?php echo base_url('assets/js/dashboard.js'); ?>"></script>
</div>

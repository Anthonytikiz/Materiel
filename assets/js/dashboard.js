// Chart pour les statuts des matériels
const statusCtx = document.getElementById('statusChart').getContext('2d');
new Chart(statusCtx, {
    type: 'pie',
    data: {
        labels: ['En Service', 'En Réparation', 'Hors Service'],
        datasets: [{
            data: [50, 10, 5], // Données fictives
            backgroundColor: ['#007bff', '#17a2b8', '#ffc107']
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top'
            }
        }
    }
});

// Chart pour les catégories de matériels
const categoryCtx = document.getElementById('categoryChart').getContext('2d');
new Chart(categoryCtx, {
    type: 'bar',
    data: {
        labels: ['Machines', 'Équipements Informatiques', 'Véhicules'],
        datasets: [{
            label: 'Coût Total (€)',
            data: [60000, 50000, 40000],
            backgroundColor: ['#007bff', '#17a2b8', '#ffc107']
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});




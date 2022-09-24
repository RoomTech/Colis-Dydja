//Visualisation du graphe

/**
 * Selectionne l'identifiant délcaré
 */
const pieCanvas = document.getElementById("pieCanvas");

/**
 * On passe deux elts
 * l'id et la configuration
 */

const pieChart = new Chart(pieCanvas, {
    type: "doughnut",
    data: {
        labels: ["Utilisateurs", "Compagnies", "Colis"],
        datasets: [
            {
                data: [10, 20, 30],
                backgroundColor: ["purple", "blue", "orange"],
                //A grandir lors du survol la partie selectionnée
                hoverOffset: 40,
            },
        ],
    },
});

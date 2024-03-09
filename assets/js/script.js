document.addEventListener('DOMContentLoaded', function () {
    const output = document.getElementById('output');
    const input = document.getElementById('input');

    input.addEventListener('keydown', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            handleCommand(input.value);
            input.value = '';
        }
    });

    function handleCommand(command) {
        // Ajoutez ici votre logique pour traiter la commande
        // Exemple : Redirection vers la page d'accueil
        if (command.toLowerCase() === 'index') {
            window.location.href = 'index.html';
        } else {
            output.innerHTML += `<div>> ${command}</div>`;
            output.innerHTML += '<div>Commande inconnue. Tapez "index" pour revenir à la page index.</div>';
        }

        // Faites défiler automatiquement vers le bas pour afficher les nouvelles commandes
        output.scrollTop = output.scrollHeight;
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const skillsSchema = document.getElementById('skills-schema');

    // Définir vos compétences et chiffres associés
    const skillsData = [
        { name: 'HTML', number: 90 },
        { name: 'CSS', number: 85 },
        { name: 'JavaScript', number: 80 },
        // Ajoutez d'autres compétences ici
    ];

    // Ajouter les cartes de compétences dans le schéma
    skillsData.forEach((skill, index) => {
        const skillCard = document.createElement('div');
        skillCard.classList.add('skill-card');
        skillCard.innerHTML = `
            <div class="skill-number">${skill.number}%</div>
            <div class="skill-name">${skill.name}</div>
        `;
        skillsSchema.appendChild(skillCard);

        // Animation de la carte de compétence avec un décalage
        skillCard.style.animation = `fadeInUp 0.5s ease-out ${index * 0.2}s`;
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const faqItems = document.querySelectorAll('.faq-item');

    // Ajoutez un gestionnaire d'événement à chaque question pour le volet déroulant
    faqItems.forEach((item) => {
        item.addEventListener('click', () => {
            // Fermez tous les autres volets déroulants
            faqItems.forEach((otherItem) => {
                if (otherItem !== item) {
                    otherItem.classList.remove('opened');
                    otherItem.querySelector('.answer').style.maxHeight = '0';
                }
            });

            // Basculez l'état ouvert/fermé du volet déroulant actuel
            item.classList.toggle('opened');
            const answer = item.querySelector('.answer');
            answer.style.maxHeight = item.classList.contains('opened') ? answer.scrollHeight + 'px' : '0';
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Initialise la liste triable avec Sortable
    const sortable = new Sortable(document.getElementById('sortable-container'), {
        animation: 150, // Durée de l'animation en millisecondes
        handle: '.dashboard-item', // Élément qui sert de poignée pour le glisser-déposer
        onEnd: function (evt) {
            // Callback appelé lorsque l'utilisateur a terminé de déplacer un widget
            const movedWidget = evt.item.className.split(' ')[1];
            console.log(`Widget "${movedWidget}" déplacé à la position ${evt.newIndex + 1}`);
        },
    });
});

// Ajoutez ce script pour gérer l'animation lorsque l'utilisateur écrit dans l'input
document.getElementById('input').addEventListener('input', function () {
    this.setAttribute('style', 'width:' + ((this.value.length + 1) * 8) + 'px');
});












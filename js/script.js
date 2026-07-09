function filtrer(categorie) {
    document.querySelectorAll('.carte').forEach(function(carte) {
        if (categorie === 'tous' || carte.dataset.categorie === categorie) {
            carte.style.display = 'block';
        } else {
            carte.style.display = 'none';
        }
    });
}
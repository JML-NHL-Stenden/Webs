function filter(category) {
    const items = document.querySelectorAll('.item');

    items.forEach(item => {
        item.style.display = 'none';

        if (category === 'all' || item.classList.contains(category)) {
            item.style.display = 'block';
        }
    });
}

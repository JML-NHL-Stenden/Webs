
// Star rating
const rating = document.querySelector('.rate');
const currentRating = document.getElementById('current-rating');

rating.addEventListener('click', (e) => {
    if (e.target.type === 'radio') {
        const value = e.target.value;
        currentRating.innerText = value;
    }
});




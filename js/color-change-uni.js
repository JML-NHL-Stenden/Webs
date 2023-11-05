
function changeImage(circle) {
    var imageElement = document.getElementById('displayed-image');
    var imageElement2 = document.getElementById('displayed-image-2');
    var imagePath;
    var imagePath2;

    // Set the image paths based on the selected color
    switch (circle) {
        case 'red':
            imagePath = '../Webs/img/Sunny_socks_uni_red.jpg';
            imagePath2 = '../Webs/img/packaging/jpg/catalogus_sokken_uni_red.jpg' ;
            break;
        case 'blue':
            imagePath = '../Webs/img/Sunny_socks_uni_blue.jpg';
            imagePath2 = '../Webs/img/packaging/jpg/catalogus_sokken_uni_blue.jpg';
            break;
        case 'green':
            imagePath = '../Webs/img/Sunny_socks_uni_green.jpg';
            imagePath2 = '../Webs/img/packaging/jpg/catalogus_sokken_uni_green.jpg';
            break;
        case 'yellow':
            imagePath = '../Webs/img/Sunny_socks_uni_yellow.jpg';
            imagePath2 = '../Webs/img/packaging/jpg/catalogus_sokken_uni_yellow.jpg';
            break;
        case 'pink':
            imagePath = '../Webs/img/Sunny_socks_uni_pink.jpg';
            imagePath2 = '../Webs/img/packaging/jpg/catalogus_sokken_uni_pink.jpg';
            break;
        default:
            imagePath = '../Webs/img/Sunny_socks_uni_blue.jpg';
            imagePath2 = '../Webs/img/packaging/jpg/catalogus_sokken_uni_blue.jpg';
    }

    // Update the image sources
    imageElement.src = imagePath;
    imageElement2.src = imagePath2;

    
}



//Part that is responislbe for the color radio selector
const productsSelectingForm = document.getElementById('productsSelectingForm');
const redCountFields = document.getElementById('redCountFields');
const greenCountFields = document.getElementById('greenCountFields');
const blueCountFields = document.getElementById('blueCountFields');
const yellowCountFields = document.getElementById('yellowCountFields');
const pinkCountFields = document.getElementById('pinkCountFields');

productsSelectingForm.addEventListener('change', (e) => {
    if (e.target.name === 'color') {
        redCountFields.style.display = 'none';
        greenCountFields.style.display = 'none';
        blueCountFields.style.display = 'none';
        yellowCountFields.style.display = 'none';
        pinkCountFields.style.display = 'none';

        const selectedOption = e.target.value;

        if (selectedOption === 'red') {
            redCountFields.style.display = 'block';
        } else if (selectedOption === 'green') {
            greenCountFields.style.display = 'block';
        } else if (selectedOption === 'blue') {
            blueCountFields.style.display = 'block';
        } else if (selectedOption === 'yellow') {
            yellowCountFields.style.display = 'block';
        } else if (selectedOption === 'pink') {
            pinkCountFields.style.display = 'block';
        }
    }
});

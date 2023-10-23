
//  This is for select color for single strip product detail page.
function changeImage(circle) {
    var imageElement = document.getElementById('displayed-image');
    var imageElement2 = document.getElementById('displayed-image-2');
    var imagePath;
    var imagePath2;

    // Set the image paths based on the selected color
    switch (circle) {
        case 'red':
            imagePath = '../Webs/img/Sunny_socks_red.jpg';
            imagePath2 = '../Webs/img/packaging/catalogus_sokken_stripes_red.jpg' ;
            break;
        case 'blue':
            imagePath = '../Webs/img/Sunny_socks_blue.jpg';
            imagePath2 = '../Webs/img/packaging/catalogus_sokken_stripes_blue.jpg';
            break;
        case 'green':
            imagePath = '../Webs/img/Sunny_socks_green.jpg';
            imagePath2 = '../Webs/img/packaging/catalogus_sokken_stripes_green.jpg';
            break;
        case 'yellow':
            imagePath = '../Webs/img/Sunny_socks_yellow.jpg';
            imagePath2 = '../Webs/img/packaging/catalogus_sokken_stripes_yellow.jpg';
            break;
        case 'pink':
            imagePath = '../Webs/img/Sunny_socks_pink_01.jpg';
            imagePath2 = '../Webs/img/packaging/catalogus_sokken_stripes_pink.jpg';
            break;
        default:
            imagePath = '../Webs/img/Sunny_socks_blue.jpg';
            imagePath2 = '../Webs/img/packaging/catalogus_sokken_stripes_blue.jpg';
    }

    // Update the image sources
    imageElement.src = imagePath;
    imageElement2.src = imagePath2;

    
}

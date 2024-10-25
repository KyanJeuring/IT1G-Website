const images = [
    {
        header: "Summer Breeze",
        text: "Keep cool and stylish with our lightweight summer socks, ideal for every sun-filled adventure.",
        image: "resources/socksImages/summer_socks_homepage.png"
    },
    {
        header: "Winter Warmth",
        text: "Stay cozy and warm with our winter collection, perfect for chilly days.",
        image: "resources/socksImages/winter_socks_homepage.png"
    },
    {
        header: "Spring Fresh",
        text: "Embrace the freshness of spring with our vibrant and colorful socks.",
        image: "resources/socksImages/spring_socks_homepage.png"
    },
    {
        header: "Autumn Comfort",
        text: "Enjoy the comfort and style of our autumn collection, ideal for the fall season.",
        image: "resources/socksImages/autumn_socks_homepage.png"
    }
];

let currentIndex = 0;
let intervalId;

function showImage(index) 
{
    document.getElementById('carouselHeader').innerText = images[index].header;
    document.getElementById('carouselText').innerText = images[index].text;
    document.getElementById('galleryCarousel').style.backgroundImage = `url(${images[index].image})`;
}

function nextImage() 
{
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
    resetInterval();
}

function prevImage() 
{
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showImage(currentIndex);
    resetInterval();
}

function resetInterval() 
{
    clearInterval(intervalId);
    intervalId = setInterval(nextImage, 4000);
}

intervalId = setInterval(nextImage, 4000);
const images = [
    {
        header: "Summer Breeze",
        text: "Keep cool and stylish with our lightweight summer socks, ideal for every sun-filled adventure."
    },
    {
        header: "Winter Warmth",
        text: "Stay cozy and warm with our winter collection, perfect for chilly days."
    },
    {
        header: "Spring Fresh",
        text: "Embrace the freshness of spring with our vibrant and colorful socks."
    },
    {
        header: "Autumn Comfort",
        text: "Enjoy the comfort and style of our autumn collection, ideal for the fall season."
    }
];

let currentIndex = 0;
let intervalId;

function showImage(index) 
{
    document.getElementById('carouselHeader').innerText = images[index].header;
    document.getElementById('carouselText').innerText = images[index].text;
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
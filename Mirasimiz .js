const photos = [
    "Kale4.jpg",
    "Kale5.jpg",
    "Kale6.jpg"
];

const description = "Aleppo Citadel is a large fortress located in the center of the old city of Aleppo, Syria. It is considered one of the oldest and largest castles in the world. The Citadel has a rich history dating back to the 3rd millennium BC and has been ruled by various civilizations throughout its existence.";

function displayPhotos() {
    const photoGallery = document.getElementById("photo-gallery");

    for (let i = 0; i < photos.length; i++) {
        const photoDiv = document.createElement("div");
        photoDiv.classList.add("photo");

        const photoImg = document.createElement("img");
        photoImg.src = photos[i];
        photoImg.alt = "Aleppo Citadel";
        photoDiv.appendChild(photoImg);

        photoGallery.appendChild(photoDiv);
    }
}

function displayDescription() {
    const descriptionDiv = document.getElementById("description");
    descriptionDiv.textContent = description;
}

displayPhotos();
displayDescription();

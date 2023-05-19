
// API burada sevdiğim filimlerde kullandım

const apiKey = "f3896f07f041fbf6b8ec9e6eb240c8f7";
const apiUrl = "https://api.themoviedb.org/3";

// Film arama fonksiyonu
function searchMovies(query) {
  const searchUrl = `${apiUrl}/search/movie?api_key=${apiKey}&query=${query}`;

  fetch(searchUrl)
    .then(response => response.json())
    .then(data => {
      const filmListesi = document.querySelector('.film-listesi');
      filmListesi.innerHTML = '';

      data.results.forEach(movie => {
        const filmItem = document.createElement('li');
        filmItem.textContent = movie.title;
        filmListesi.appendChild(filmItem);
      });
    })
    .catch(error => console.log(error));
}

// Film arama butonu olayı
const filmAraButon = document.getElementById('film-ara-buton');
filmAraButon.addEventListener('click', () => {
  const filmAraInput = document.getElementById('film-ara-input');
  const query = filmAraInput.value.trim();

  if (query !== '') {
    searchMovies(query);
  }
});

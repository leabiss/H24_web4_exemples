// pour que vite fonctionne
import './styles.css';
import axios from "axios";

/* XMLHttpRequest
let xhr = new XMLHttpRequest();
xhr.withCredentials = true;
xhr.addEventListener("readystatechange", function () {
 if (this.readyState === 4) {
 console.log(this.responseText);
 }
});
xhr.open("GET", "http://localhost/api/timeentries");
xhr.setRequestHeader("Accept", "application/json");
xhr.send(); */

/* fetch
let myHeaders = new Headers();
myHeaders.append("Accept", "application/json");
let requestOptions = {
 method: "GET",
 headers: myHeaders,
 // Si 301 avec nouvelle adresse, la requete est 
 // renvoyer avec la nouvelle url automatiquement
 redirect: "follow",
};
fetch("http://localhost/api/timeentries", requestOptions)
.then((response) => response.json())
 .then((result) => {
    result.data.forEach((element) => {
        console.log(element);
    });
  })
 .catch((error) => console.log("error", error));*/

/* axios.get("http://localhost/api/timeentries")
    .then((response) => console.log(response))
    .catch((error) => console.error(error));

axios.post("http://localhost/api/timeentries", {
        nom_tache: "Tâche client",
        date_debut: "2024-04-03",
        date_fin: "2024-04-04",
    })
    .then((response) => console.log(response))
    .catch((error) => console.error(error));*/

/*const form = document.getElementById("search");
const formFields = document.getElementById("search_fields");
const result = document.getElementById("result");

form.addEventListener("submit", (event) => {
 event.preventDefault();
 // TODO Validation
 const id = document.getElementById("tache_id").value;
 formFields.disabled = true;
 result.innerHTML = "...";
 
 axios.get("http://localhost/api/timeentries/" + id)
 .then((response) => {
 result.innerHTML = response?.data?.data?.nom_tache;
 })
 .catch((error) => {
 result.innerHTML = error?.response?.data?.message;
 })
 .then(() => {
 formFields.disabled = false;
 });
}); */

let token = "jkNW6aDTFDCsLhePGFkAe42CdqjOv9GA";

const instanceAxios = axios.create({
    baseURL: "https://api.giphy.com/v1/gifs/",
    params: { api_key: token },
});

async function getTrendings() {
    try {
        return await instanceAxios.get("trending", { params: { limit: 10 } });
    } catch (error) {
        // ...
        console.error(error);
    }
}

async function getGifURL(id) {
    try {
        const response = await instanceAxios.get(id);
        return response?.data?.data?.images?.fixed_height?.url;
    } catch (error) {
        // ...
        console.error(error);
    }
}

function refreshImage() {
    getTrendings().then((response) => {
        let firstId = response?.data?.data[0]?.id;
        if (firstId) {
            getGifURL(firstId).then((response) => {
                if (response) {
                    let image = document.createElement("img");
                    image.src = response;
                    document.body.appendChild(image);
                }
            });
        }
    });
}

refreshImage();
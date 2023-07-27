const JOKE_API_ENDPOINT = "https://icanhazdadjoke.com"
const quoteElement = document.getElementById("quote");
function fetchJoke(){
//AJAX Request
const request = new XMLHttpRequest();
request.open("GET", JOKE_API_ENDPOINT);
request.setRequestHeader("Accept", "application/json");
request.send();

request.onreadystatechange =  function(){
if(this.readyState == 4 && this.status == 200){
    const response = this.responseText;
    const parsedResponse = JSON.parse(response);
    quoteElement.textContent = parsedResponse.joke;
}

}; 
}
fetchJoke();

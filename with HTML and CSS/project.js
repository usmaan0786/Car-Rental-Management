btn = document.querySelector("#loginbtn");
login_form = document.querySelector('.login-form-container')
function Login(){
    if(login_form.style.display == "none")
    {
        login_form.style.display = 'flex';
        login_form.style.background =  "rgba(219, 219, 219, 0.8)";

    }
    else{
        login_form.style.display = 'none'
    }
}
// Initialize and add the map
function initMap() {
    // The location of Uluru
    const uluru = { lat: -25.344, lng: 131.031 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: uluru,
      map: map,
    });
  }
  
window.initMap = initMap;


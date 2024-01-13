
//data-user-template is the identifier used to get the template (html element) from the html
const userCardTemplate = document.querySelector("[data-user-template]")

//similarly, the identifier 'data-user-cards-display' is used to obtained the element where all the cards are to be displayed 
const userCardsDisplay = document.querySelector("[data-user-cards-display]")

const searchInput = document.querySelector("[data-search]")

//users array
let users = []

searchInput.addEventListener("input",(e) => {
    //assigning all our searchbar inputs to value
    const value = e.target.value.toLowerCase()

    users.forEach(user => {

        //does the search input include the city name? if so True will be assigned to isVisible
        const isVisible = user.city.toLowerCase().includes(value)
        user.element.classList.toggle("hide",!isVisible) 
    })

}
)


//fake population database is used from the website below, visit "https://jsonplaceholder.typicode.com" to know more
fetch("https://jsonplaceholder.typicode.com/users")
.then(res => res.json())
.then(data =>  {
    users = data.map( user => {

        //userCardTemplate.content.cloneNode(true) clones the node (as a document fragment) from which we just extract the first child
        
        const card = userCardTemplate.content.cloneNode(true).children[0]
        
        //we are using identifiers such as data-hotel, data-stay, data-price to use to retrieve data from the database
        const hotel_value = card.querySelector("[data-hotel]")
        const stay_value = card.querySelector("[data-stay]")
        const price_value = card.querySelector("[data-price]")
        const city_value = card.querySelector("[data-city]")

        //data values of the users from the database (like their 'hotel' , 'stay' , 'price', "city") are assigned to the variables above 

        hotel_value.textContent = user.hotel
        stay_value.textContent = user.stay
        price_value.textContent = user.price
        city_value.textContent = user.city 

        //after assigning all the appropriate values from the database to the appropriate sections of the card template, we append the card(s) to the area where our cards will be displayed (userCardsDisplay)

        userCardsDisplay.append(card)

        return { hotel:user.hotel, stay:user.stay, price:user.price,city:user.city, element:card }
        
    })



})

//this code adds the show/hide functionality
function myFunction() {
    var x = document.getElementById("displayresults");
    
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
function change() // no ';' here
  {
      const elem = document.getElementById("hide-button");
      if (elem.innerHTML=="Hide") elem.innerHTML = "Show";
      else elem.innerHTML = "Hide";
  }
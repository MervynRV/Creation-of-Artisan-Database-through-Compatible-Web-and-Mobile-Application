function updatePrice() {
  // Get the selected event
  var eventSelect = document.getElementById("event");
  var selectedEvent = eventSelect.value;

  // Print the price for the selected event
  var eventPrice = 0;
  switch (selectedEvent) {
    case "event1":
      eventPrice = 100;
      break;
    case "event2":
      eventPrice = 20;
      break;
    case "event3":
      eventPrice = 15;
      break;
    case "event4":
      eventPrice = 5;
      break;
    default:
      eventPrice = 0;
      break;
  }

  var eventPriceField = document.getElementById("eventPrice");
  eventPriceField.textContent = "₹" + eventPrice.toFixed(2);

  // Calculate and update the total cost based on the number of tickets
  calculateTotal();
}

function calculateTotal() {
  // Get the number of tickets
  var ticketInput = document.getElementById("tickets");
  var numTickets = parseInt(ticketInput.value);

  // Get the price per ticket
  var eventPriceField = document.getElementById("eventPrice");
  var eventPrice = parseFloat(eventPriceField.textContent.substring(1));

  // Calculate the total cost
  var totalCost = numTickets * eventPrice;

  // Check if a discount should be applied
  if (numTickets >= 50) {
    // Apply a 50% discount
    totalCost *= 0.5;
  }

  // Update the total cost field
  var totalSpan = document.getElementById("total");
  totalSpan.textContent = "₹" + totalCost.toFixed(2);
}

// Call updatePrice() initially to set the initial event price
updatePrice();

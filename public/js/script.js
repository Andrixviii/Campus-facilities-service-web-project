document.getElementById('reservationForm').addEventListener('submit', function(event) {
    var product = document.getElementById('product').value;
    var reservationDate = document.getElementById('reservationDate').value;
    var agenda = document.getElementById('agenda').value;

    if (product === '' || reservationDate === '' || agenda.trim() === '') {
        event.preventDefault();
        alert('Please fill out all fields.');
    }
    else{
        alert("You have booked now, please check your account regulary to get notification from admin!")
        window.location.href = 'index.html';
    }
});
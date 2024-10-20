document.addEventListener('DOMContentLoaded', function() {
    const inputField = document.getElementById('first-name');

    inputField.addEventListener('input', function(event) {
        console.log('Input field value changed to:', event.target.value);
        // Add your custom logic here
    });
});
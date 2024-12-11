var loadFile = function(event) {
            
    var input = event.target;
    var file = input.files[0];
    var type = file.type;

   var output = document.getElementById('preview_img');


    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }
};
document.addEventListener("DOMContentLoaded", function () {
    // Phone number validation: Allow only digits and limit to 10 characters
    document.getElementById('number').addEventListener('input', function () {
        this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
    });

    // Form submission validation
    document.querySelector('form').addEventListener('submit', function (e) {
        let isValid = true;

        // Name validation: Minimum 3 characters
        const name = document.getElementById('name').value.trim();
        if (name.length < 3) {
            console.error('Name must be at least 3 characters long.');
            document.getElementById('name').focus();
            isValid = false;
        }

        // Email validation using HTML5 pattern
        const email = document.getElementById('email').value;
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(email)) {
            console.error('Please enter a valid email address.');
            document.getElementById('email').focus();
            isValid = false;
        }

        // Phone number validation: Exactly 10 digits
        const phone = document.getElementById('number').value;
        if (phone.length !== 10) {
            console.error('Phone number must be exactly 10 digits.');
            document.getElementById('number').focus();
            isValid = false;
        }

        // If any validation fails, prevent form submission
        if (!isValid) {
            e.preventDefault();
        }
    });
});


// modal
function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.toggle('hidden');
}
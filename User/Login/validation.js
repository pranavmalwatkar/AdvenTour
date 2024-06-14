document.getElementById('emailForm').addEventListener('submit', function(event) {
    const emailInput = document.getElementById('email');
    const emailValue = emailInput.value;
    const emailPattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
    const minLength = 12;
  
    if (!emailPattern.test(emailValue)) {
      alert('Please enter a valid Gmail address.');
      event.preventDefault(); // Prevent form submission
      return;
    }
  
    if (emailValue.length < minLength) {
      alert('Email address must be at least 12 characters long.');
      event.preventDefault(); // Prevent form submission
      return;
    }
  });
  
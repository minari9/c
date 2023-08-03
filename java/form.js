
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('volunteerForm');
    const fieldsets = form.getElementsByTagName('fieldset');
    const nextButtons = form.getElementsByClassName('nextStep');
    const backButton = form.getElementsByClassName('goBack')[0];

    let currentStep = 0;

    function showStep(stepIndex) {
      for (let i = 0; i < fieldsets.length; i++) {
        fieldsets[i].style.display = i === stepIndex ? 'block' : 'none';
      }
    }

    function validateStep(stepIndex) {
      // Add your validation logic for each step here
      // Return true if the step is valid, otherwise return false
      // For example, you can check if the required fields are filled.
      return true;
    }

    function goToNextStep() {
      if (validateStep(currentStep)) {
        currentStep++;
        if (currentStep < fieldsets.length) {
          showStep(currentStep);
        } else {
          // If all steps are completed, submit the form using AJAX
          submitFormWithAjax();
        }
      }
    }

    function goToPreviousStep() {
      currentStep--;
      if (currentStep >= 0) {
        showStep(currentStep);
      }
    }

    function submitFormWithAjax() {
      const xhr = new XMLHttpRequest();
      xhr.open('POST', form.action, true);
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
          if (xhr.status === 200) {
            // Success, display response message if needed
            // For example, you can show an alert here:
            // alert(xhr.responseText);
            // Or display a thank-you message on the same page:
            showStep(currentStep + 1); // Show the thank-you step after successful submission
          } else {
            // Error handling if the form submission fails
            alert('Failed to submit the form.');
          }
        }
      };

      // Collect the form data and encode it for sending
      const formData = new FormData(form);
      xhr.send(formData);
    }

    for (let i = 0; i < nextButtons.length; i++) {
      nextButtons[i].addEventListener('click', function (event) {
        event.preventDefault();
        goToNextStep();
      });
    }

    backButton.addEventListener('click', function (event) {
      event.preventDefault();
      goToPreviousStep();
    });

    showStep(currentStep);
  });


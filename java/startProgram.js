// Function to submit the form
function submitForm() {
  const programForm = document.getElementById("programForm");
  programForm.submit();
}
// Function to go to step two
function goStepTwo() {
    const stepInfo = document.getElementById("stepInfo");
    const stepPlan = document.getElementById("stepPlan");
    showNextStep(stepInfo, stepPlan);
  }


// Function to go back to step one
function backStepOne() {
  const stepInfo = document.getElementById("stepInfo");
  const stepPlan = document.getElementById("stepPlan");
  showPreviousStep(stepPlan, stepInfo);
}

// Function to go to step three
function goStepThree() {
    const stepPlan = document.getElementById("stepPlan");
    const stepAddOn = document.getElementById("stepAddOn");
    showNextStep(stepPlan, stepAddOn);
  }


// Function to go back to step two
function backStepThree() {
  const stepPlan = document.getElementById("stepPlan");
  const stepAddOn = document.getElementById("stepAddOn");
  showPreviousStep(stepAddOn, stepPlan);
}

// Function to go to step thank you
function goToStepThankYou() {
  const stepAddOn = document.getElementById("stepAddOn");
  const stepThankYou = document.getElementById("stepThankYou");
  showNextStep(stepAddOn, stepThankYou);

  // Submit the form when reaching the last step
  submitForm();
}

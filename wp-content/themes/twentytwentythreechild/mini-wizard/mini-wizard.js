const FORM_STEPS = ["Contact Info", "Quantity", "Price", "Done"];

document.addEventListener("DOMContentLoaded", function () {
  const formStep1 = document.getElementById("step-1-form");
  const step1 = document.getElementById("step-1");
  const step2 = document.getElementById("step-2");
  const backButton = document.getElementById("step-2-back-button");

  let formData = {};
  let currentStepIndex = 0;

  const breadcrumbSteps = FORM_STEPS.map((step) =>
    document.getElementById(step)
  );

  function updateActiveStep() {
    breadcrumbSteps.forEach((step) => step.classList.remove("active"));

    if (breadcrumbSteps[currentStepIndex]) {
      breadcrumbSteps[currentStepIndex].classList.add("active");
    }
  }

  const nextStep = () => {
    if (currentStepIndex < FORM_STEPS.length - 1) {
      currentStepIndex++;
      updateActiveStep();
    }
  };

  const prevStep = () => {
    if (currentStepIndex > 0) {
      currentStepIndex--;
      updateActiveStep();
    }
  };

  formStep1.addEventListener("submit", function (event) {
    event.preventDefault();

    formData = {
      name: document.getElementById("name").value,
      email: document.getElementById("email").value,
      phone: document.getElementById("phone").value,
    };

    console.log("Form Data Step 1:", formData);

    step1.classList.add("step-disabled");
    step2.classList.remove("step-disabled");
    nextStep();
  });

  backButton.addEventListener("click", function (event) {
    event.preventDefault();

    step2.classList.add("step-disabled");
    step1.classList.remove("step-disabled");
    prevStep();
  });

  updateActiveStep();
});

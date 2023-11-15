// Set patientId on vitals
function setPatientId(element) {
  var clickedPatientId = element.getAttribute("data-patient-id");
  document.getElementById("patientId").value = clickedPatientId;
  console.log(clickedPatientId);
}

//set fields visibility
function setFieldVisibility(isHidden) {
  var elements = document.querySelectorAll("[data-bmi-hidden]");

  elements.forEach(function (element) {
    element.style.display = isHidden ? "true" : "block";
    element.setAttribute("data-bmi-hidden", isHidden.toString());
  });
}

// calculate BMI
function calculateBMI() {
  var weight = parseFloat(document.getElementById("weight").value);
  var height = parseFloat(document.getElementById("height").value) / 100;

  if (!isNaN(weight) && !isNaN(height)) {
    var bmi = weight / (height * height);

    var bmiField = document.getElementById("bmi");
    bmiField.value = bmi;
    bmiField.placeholder = bmi;
    if (bmi > 25) {
      setFieldVisibility(false);
    } else {
      setFieldVisibility(true);
    }
  }
}

// submit forms
function submitForm() {
  const form = document.getElementById("patient-form");
  const formData = new FormData(form);
  const jsonData = {};

  formData.forEach((value, key) => {
    jsonData[key] = value;
  });

  const apiUrl = "http://localhost:3000/patients";

  fetch(apiUrl, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(jsonData),
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      // Handle the successful response
      document.getElementById("status").innerText = JSON.stringify(
        data,
        null,
        2
      );
    })
    .catch((error) => {
      // Handle errors
      console.error("Error:", error);
    });
}

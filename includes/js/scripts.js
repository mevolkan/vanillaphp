// Set patientId on vitals
function setPatientId(element){
   clickedPatientId =  element.getAttribute("data-patient-id");
   document.getElementById("patientId").value = clickedPatientId;
   console.log(clickedPatientId)
}

//Hide the 3 fields on load

bmiState = document.getAttribute("data-bmi-hidden")
// Set patientId on vitals
function setPatientId(element){
   clickedPatientId =  element.getAttribute("data-patient-id");
   document.getElementById("patientId").value = clickedPatientId;
   console.log(clickedPatientId)
}
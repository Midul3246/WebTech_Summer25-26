

function collect_data() {
    let Pname = document.getElementById("PatientName").value;
    console.log(Pname);

    let PAge = document.getElementById("PatientAge").value;
    console.log(PAge);

    let PEmail = document.getElementById("PatientEmail").value;
    console.log(PEmail);

    let male = document.getElementById("PatientMale");
    let female = document.getElementById("PatientFemale");

    if (male.checked) {
        console.log(male.value);
    }

    if (female.checked) {
        console.log(female.value);
    }


    let medicine = document.getElementById("Medicine");
    let cardiac = document.getElementById("Cardiac");
    let neurology = document.getElementById("Neurology");

    if (medicine.checked) {
        console.log(medicine.value);
    }

    if (cardiac.checked) {
        console.log(cardiac.value);
    }

    if (neurology.checked) {
        console.log(neurology.value);
    }

    let country = document.getElementById("country").value;
    console.log(country);
    

    let isvalidDOB = collect_DOB();

    return false;
}

function collect_DOB() {

    let DOB = document.getElementById("DOB").value;
    console.log(DOB);
    return false;
}
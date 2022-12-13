displayPatientList = (data) => {
	let output = `
		<tr>
			<td>${data.id}</td>
			<td>${data.name}</td>
			<td>${data.age}</td>
			<td>${data.gender}</td>
			<td>${data.nationality}</td>
			<td>${data.diagnosed}</td>
			<td>${data.encountered}</td>
			<td>${data.vaccinated}</td>
			<td>${data.encoded}</td>
			<td>
				<button type="button" class="btn btn-info btn-sm" onclick="editPatient(${data.id})">Edit</button>
                <button type="button" class="btn btn-danger btn-sm" onclick="deletePatient(${data.id})">Delete</button>
			</td>
		</tr>
	`;

	let patientList = $('#patientList tbody');
	patientList.append(output);
}

window.addEventListener('load', () => {
	getPatientList();
});

getPatientList = (data) => {
	$.ajax({
		url: window.siteurl + 'api/get-patients.php',
		method: 'POST',
		data: {},
		dataType: 'json',
		success: (response) => {
			$('#patientList tbody').empty();

			$.each(response, (key, value) => {
				const data = {
					id: value.pt_id,
					name: value.pt_name,
					age: value.pt_dob,
					gender: value.pt_gender,
					nationality: value.pt_nationality,
					diagnosed: value.pt_diagnosis,
					encountered: value.pt_encounter,
					vaccinated: value.pt_vaccine,
					encoded: value.pt_data_creation
				}

				displayPatientList(data);
			});
		}
	});
}

const btnSave = document.querySelector('#btnSave');
btnSave.addEventListener('click', (e) => {
	e.preventDefault();

	let id = $('#patientID').val();
	let name = $('#patientName').val();
	let age = $('#patientBirthday').val();
	let gender = $('#patientGender').val();
	let nationality = $('#patientNationality').val();
	let diagnosed = $('#patientDiagnosis').val();
	let encountered = $('#patientEncounter').val();
	let vaccinated = $('#patientVaccine').val();

	let data = { id, name, age, gender, nationality, diagnosed, encountered, vaccinated };

	if (btnSave.innerHTML === "Save") {
		addPatient(data);
	} else {
		editPatient(data);
	}

	$('#modalForm').modal('hide');

});

// Add new patient
addPatient = (data) => {
	$.ajax({
		url: window.siteurl + 'api/add-patient.php',
		method: 'POST',
		data: data,
		dataType: 'json',
		success: (response) => {
			if (response) {
				data.id = response;
				getPatientList(data);
			}
		}
	});
}

editPatient = (id) => {
    $.ajax({
        url: window.siteurl + 'api/edit-patient.php',
        method: 'GET',
        data: { id: id },
        dataType: 'json',
        success: (response) => {        
            $('#modalForm').modal('show');
            $('#modalFormLabel').html('Update Participant');  
            btnSave.innerHTML = 'Update';      
            
            $.each(response, (key, value) => {
                $('#patientID').val(value.id);
                $('#patientName').val(value.name);
                $('#patientBirthday').val(value.age);
                $('#patientGender').val(value.gender);
                $('#patientNationality').val(value.nationality);
                $('#patientDiagnosis').val(value.diagnosed);
                $('#patientEncounter').val(value.encountered);
				$('#patientVaccine').val(value.vaccinated);
				$('#patientEncoded').val(value.encoded);
            });
        }
    });    
}

deletePatient = (id) => {
    let response = confirm('Do you want to delete this participant with an id: ' + id + '?');

    if (response) {
        $.ajax({
            url: window.siteurl + 'api/delete-patient.php',
            method: 'POST',
            data: { id: id },
            dataType: 'json',
            success: () => { getPatientList() }
        });
    }
}
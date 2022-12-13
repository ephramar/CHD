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
				<button type="button" class="btn btn-info btn-sm" onclick="editParticipant(${data.id})">Edit</button>
                <button type="button" class="btn btn-danger btn-sm" onclick="deleteParticipant(${data.id})">Delete</button>
			</td>
		</tr>
	`;

	let patientList = $('#patientList tbody');
	participantList.append(output);
}

window.addEventListener('load', () => {
	getPatientList();
});

getPatientList = (data) => {
	$.ajax({
		url: '/api/get-patients.php',
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

// Add new patient
addNewPatient = (data) => {
	$.ajax({
		url: './api/addPatient.php',
		method: 'POST',
		data: data,
		dataType: 'json',
		success: (response) => {
			if (response) {
				data.id = response;
				insertNewRowToTable(data);
			}
		}
	});
}

editParticipant = (id) => {
    $.ajax({
        url: './api/getParticipant.php',
        method: 'GET',
        data: { id: id },
        dataType: 'json',
        success: (response) => {        
            $('#addModalForm').modal('show');
            $('#addModalFormLabel').html('Update Participant');  
            btnSave.innerHTML = 'Update';      
            
            $.each(response, (key, value) => {
                $('#id').val(value.id);
                $('#name').val(value.name);
                $('#age').val(value.age);
                $('#gender').val(value.gender);
                $('#nationality').val(value.nationality);
                $('#diagnosed').val(value.diagnosed);
                $('#encountered').val(value.encountered);
				$('#vaccinated').val(value.vaccinated);
				$('#encoded').val(value.encoded);
            });
        }
    });    
}

deleteParticipant = (id) => {
    let response = confirm('Do you want to delete this participant with an id: ' + id + '?');

    if (response) {
        $.ajax({
            url: './api/deleteParticipant.php',
            method: 'POST',
            data: { id: id },
            dataType: 'json',
            success: () => { getParticipants() }
        });
    }
}

const addBtn = document.getElementById("addBtn");
addBtn.addEventListener('click', (e) => {
	console.log('tite');
	e.preventDefault();
	$('#patientName').val('');
	$('#patientGender').val('');
	$('#patientBirthday').val('');
	$('#patientNationality').val('');
	$('#patientMobile').val('');
	$('#patientTemp').val('');
	$('#patientDiagnosis').val('');
	$('#patientEncounter').val('');
	$('#patientVaccine').val('');

});
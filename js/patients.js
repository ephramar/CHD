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

	patientList.append($output);
}

getPatientList = (data) => {
	$.ajax({
		url: '/api/get-patients.php',
		method: 'POST',
		data: {},
		dataType: 'json',
		success: (response) => {
			$('#patientList tbody').empty();

			$.each(response, (key, value)) => {
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
			}
		}
	});
}

window.addEventListener('load', () => {
	getPatientList();
});
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
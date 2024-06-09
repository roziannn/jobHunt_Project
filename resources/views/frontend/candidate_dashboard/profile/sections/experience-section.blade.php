<div class="tab-pane fade show" id="pills-experience" role="tabpanel" aria-labelledby="pills-experience-tab">
    <div class="d-flex justify-content-between">
        <h4>Experience</h4>

        <button class="btn btn-primary" onclick="$('#ExperienceForm').trigger('reset'); editId = ''; editMode = false;"
            data-bs-toggle="modal" data-bs-target="#experienceModal">Add Experience</button>
    </div>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Company</th>
                <th>Department</th>
                <th>Designation</th>
                <th>Period</th>
                <th style="width:15%;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($candidateExperiences as $item)
                <tr>
                    <td>{{ $item->company }}</td>
                    <td>{{ $item->department }}</td>
                    <td>{{ $item->designation }}</td>
                    <td>{{ $item->start }} - {{ $item->currently_working === 1 ? 'Current' : $item->end }}</td>
                    <td>
                        <a href="{{ route('candidate.experience.edit', $item->id) }}"
                            class="btn-sm btn btn-primary edit-experience" data-bs-toggle="modal"
                            data-bs-target="#experienceModal"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('candidate.experience.destroy', $item->id) }}"
                            class="btn-sm btn btn-danger delete-item"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

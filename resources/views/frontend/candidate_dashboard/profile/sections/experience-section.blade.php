<div class="tab-pane fade show" id="pills-experience" role="tabpanel" aria-labelledby="pills-experience-tab">
    <div>
        <div class="d-flex justify-content-between">
            <h4>Experience</h4>

            <button class="btn btn-primary"
                onclick="$('#ExperienceForm').trigger('reset'); editId = ''; editMode = false;" data-bs-toggle="modal"
                data-bs-target="#experienceModal">Add Experience</button>
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
            <tbody class="experience-tbody">
                @forelse ($candidateExperiences as $item)
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
                                class="btn-sm btn btn-danger delete-experience"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No Data Found.</td>
                    </tr>
                @endforelse
        </table>
    </div>
    <br>
    <br>
    <div>
        <div class="d-flex justify-content-between">
            <h4>Education</h4>

            <button class="btn btn-primary"
                onclick="$('#EducationForm').trigger('reset'); editId = ''; editMode = false;" data-bs-toggle="modal"
                data-bs-target="#educationModal">Add Education</button>
        </div>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Level</th>
                    <th>Degree</th>
                    <th>Year</th>
                    <th style="width:15%;">Action</th>
                </tr>
            </thead>
            <tbody class="education-tbody">
                @forelse ($candidateEducation as $item)
                    <tr>
                        <td>{{ $item->level }}</td>
                        <td>{{ $item->degree }}</td>
                        <td>{{ $item->year }}</td>
                        <td>
                            <a href="{{ route('candidate.education.edit', $item->id) }}"
                                class="btn-sm btn btn-primary edit-education" data-bs-toggle="modal"
                                data-bs-target="#educationModal"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('candidate.education.destroy', $item->id) }}"
                                class="btn-sm btn btn-danger delete-education"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No Data Found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

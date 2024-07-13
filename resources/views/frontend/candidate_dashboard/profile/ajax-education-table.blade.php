@foreach ($candidateEducations as $item)
    <tr>
        <td>{{ $item->level }}</td>
        <td>{{ $item->degree }}</td>
        <td>{{ $item->year }}</td>
        <td>
            <a href="{{ route('candidate.education.edit', $item->id) }}" class="btn-sm btn btn-primary edit-education"
                data-bs-toggle="modal" data-bs-target="#educationModal"><i class="fas fa-edit"></i></a>
            <a href="{{ route('candidate.education.destroy', $item->id) }}"
                class="btn-sm btn btn-danger delete-education"><i class="fas fa-trash"></i></a>
        </td>
    </tr>
@endforeach

@foreach ($candidateExperiences as $item)
    <tr>
        <td>{{ $item->company }}</td>
        <td>{{ $item->department }}</td>
        <td>{{ $item->designation }}</td>
        <td>{{ $item->start }} - {{ $item->currently_working === 1 ? 'Current' : $item->end }}</td>
        <td>
            <a href="{{ route('candidate.experience.edit', $item->id) }}" class="btn-sm btn btn-primary edit-experience"
                data-bs-toggle="modal" data-bs-target="#experienceModal"><i class="fas fa-edit"></i></a>
            <a href="{{ route('candidate.experience.destroy', $item->id) }}"
                class="btn-sm btn btn-danger delete-experience"><i class="fas fa-trash"></i></a>
        </td>
    </tr>
@endforeach

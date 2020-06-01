@foreach ($province->projects as $project)
    <option value="{{ $project->id }}"
            @if(request('project') == $project->id) selected @endif>
        {{ $project->project_name }}
    </option>
@endforeach

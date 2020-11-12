@forelse ($province->projects as $project)
    <option value="{{ $project->id }}"
            @if(request('project') == $project->id) selected @endif>
        {{ $project->project_name }}
    </option>
@empty
    <option value="">No Project in province</option>
@endforelse

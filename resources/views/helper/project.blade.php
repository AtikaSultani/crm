@foreach ($province->projects as $project)
    <option value="">
      {{ $project->project_name }}
    </option>
@endforeach

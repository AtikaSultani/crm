<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Caller Name</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Status</th>
        <th>Quarter</th>
        <th>Province</th>
        <th>District</th>
        <th>Village</th>
        <th>Received Date</th>
        <th>Referred To</th>
        <th>Broad Category</th>
        <th>Specific Category</th>
        <th>Project</th>
        <th>Project Code</th>
        <th>Program</th>
        <th>Received By</th>
        <th>Close Date</th>
        <th>Person Who Shared Action</th>
        <th>Description</th>
        <th>Created At</th>
    </tr>
    </thead>
    <tbody>
    @foreach($complaints as $complaint)
        <tr>
            <td>{{ $complaint->id }}</td>
            <td>{{ $complaint->caller_name }}</td>
            <td>{{ $complaint->tel_no_received }}</td>
            <td>{{ $complaint->gender }}</td>
            <td>{{ $complaint->status }}</td>
            <td>{{ $complaint->quarter }}</td>
            <td>{{ $complaint->province->province_name }} </td>
            <td>{{ $complaint->district->district_name}}</td>
            <td>{{ $complaint->village}}</td>
            <td>{{ $complaint->received_date}}</td>
            <td>{{ $complaint->referred_to}}</td>
            <td>{{ $complaint->broadCategory->category_name}}</td>
            <td>{{ $complaint->specificCategory->category_name}}</td>
            <td>{{ $complaint->project->project_name}}</td>
            <td>{{ $complaint->project->project_code}}</td>
            <td>{{ $complaint->program->program_name}}</td>
            <td>{{ $complaint->user->name}}</td>
            <td>{{ $complaint->close_date}}</td>
            <td>{{ $complaint->person_who_shared_action}}</td>
            <td>{{ $complaint->description}}</td>
            <td>{{ $complaint->created_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

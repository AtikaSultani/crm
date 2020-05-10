
@extends('layouts.master')
@section('page-title')
<h>PROJECTS LIST</h>
@endsection
@section('content')
<div class="flex items-center justify-end my-3">
    <a class="text-sm bg-blue text-white px-2 py-1 rounded-sm focus:outline-none" href="{{ url('/projects/create') }}">
        Add New
    </a>

</div>
            <div>
                <table>
                    <thead>
                    <th>No</th>
                    <th>ProjectName</th>
                    <th>NGOname</th>
                    <th>StartDate</th>
                    <th>EndDate</th>
                    <th>Donors</th>
                    <th>Activities</th>
                    <!-- <th>DirectBeneficiaries</th>
                    <th>IndirectBeneficiaries</th>
                    <th>OnBudjet</th>
                    <th>OffBudject</th>
                    <th>Budject</th> -->
                    <th>Provinces</th>
                    <!-- <th>Actions</th> -->
                    </thead>
                    @foreach($projects as $project)
                        <tr>
                            <td>{{$project->id }}</td>
                            <td>{{$project->project_name}}</td>
                            <td>{{$project->NGO_name}}</td>
                            <td>{{$project->start_date}}</td>
                            <td>{{$project->end_date}}</td>
                            <td>{{$project->donors}}</td>
                            <td>{{$project->activities}}</td>
                            <!-- <td>{{$project->direct_beneficiaries}}</td>
                            <td>{{$project->indirect_beneficiaries}}</td>
                            <td>{{$project->on_budget_project}}</td>
                            <td>{{$project->off_budget_project}}</td>
                            <td>{{$project->budjet}}</td> -->
                            <td>{{$project->province->province_name}}|{{$project->district->district_name}}</td>
                            <!-- <td class="actions" style="white-space:nowrap">
                                <a class="btn btn-primary badge-pill"
                                   style="width:65px;border-radius:20px;font-size:12px;"
                                   href="{{ url('/projects/'.$project->id.'/edit')}}">EDIT</a>

                                <form action="{{ url('/projects/'.$project->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger badge-pill"
                                            style="width:75px;border-radius:20px;font-size:12px;"
                                            onclick="return confirm('Are you sure to delete this?')"
                                            data-confirm="Are you sure to delete this item?" type="submit">DELETE
                                    </button>
                                </form>
                            </td> -->
                        </tr>
                    @endforeach
                </table>
                  {{ $projects->links() }}
            </div>


@endsection

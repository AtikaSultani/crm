@extends('layouts.master')
@section('title', 'Create Project')
@section('page-title', 'Add New Project')
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


@section('content')
    <form action="{{ url('/projects') }}" method="post" id="create-form" enctype="multipart/form-data">
        @csrf
        {{-- Project information --}}
        <p class="pt-5 pb-3 text-lg font-semibold text-gray-600">Project information</p>
        <div class="w-full bg-gray-100 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 p-5 rounded-sm gap-5">

            {{-- project name --}}
            <div class="mb-4">
                <label for="caller_name">Project Name</label>
                <input type="text" id="project_name" name="project_name"/>
            </div>

            {{-- project code --}}
            <div class="mb-4">
                <label for="caller_name">Project Code</label>
                <input type="text" id="project_code" name="project_code"/>
            </div>

            {{-- NGO Name --}}
            <div class="mb-4">
                <label for="partner_name">Partner Name</label>
                <input type="text" id="partner_name" name="partner_name"/>
            </div>

            {{-- Start Date --}}
            <div class="mb-4">
                <label for="title">Start Date</label>
                <input type="text" name="start_date" class="datepicker-here"
                       data-language='en'
                       data-date-format="yyyy-mm-dd"
                       value="{{date('Y-m-d')}}"/>
            </div>

            {{-- End Date --}}
            <div class="mb-4">
                <label>End Date </label>
                <input type="text" name="end_date" class="datepicker-here"
                       data-language='en'
                       data-date-format="yyyy-mm-dd"
                       value="{{date('Y-m-d')}}"/>
            </div>

            {{-- Donors --}}
            <div class="mb-4">
                <label>Donors </label>
                <input type="text" id="donors" name="donors"/>
            </div>

            {{-- Direct Beneficiary --}}
            <div class="mb-4">
                <label>Direct Beneficiary </label>
                <input type="text" id="direct_beneficiary" name="direct_beneficiaries"/>
            </div>

            {{-- Indirect Beneficiary --}}
            <div class="mb-4">
                <label>Indirect Beneficiary </label>
                <input type="text" id="indirect_beneficiary" name="indirect_beneficiaries"/>
            </div>


            {{-- Total Budget --}}
            <div class="mb-4">
                <label>Total Budget</label>
                <input type="text" id="total_budget" name="total_budget"/>
            </div>


            {{-- Province --}}
            <div class="mb-4">
                <label>Province</label>
                <select multiple id="dropdown" class="form-control selectpicker" data-size="10" data-live-search="true" data-style="btn-#FFFAFA" >
                                <option value="Orozgan">Orozgan</option>
                                <option value="Badqis">Badqis</option>
                                <option value="Bamyan">Bamyan</option>
                                <option value="Badakhshan">Badakhshan</option>
                                <option value="Baqlan">Baqlan</option>
                                <option value="Balkh">Balkh</option>
                                <option value="Parwan">Parwan</option>
                                <option value="Paktia">Paktia</option>
                                <option value="Paktika">Paktika</option>
                                <option value="Pnjshir">Pnjshir</option>
                                <option value="Takhar">Takhar</option>
                                <option value="Jawzjan">Jawzjan</option>
                                <option value="Khost">Khost</option>
                                <option value="Daikondy">Daikondy</option>
                                <option value="Zabol">Zabol</option>
                                <option value="SarePole">SarePole</option>
                                <option value="Samangan">Samangan</option>
                                <option value="ghazni">ghazni</option>
                                <option value="ghore">ghore</option>
                                <option value="Faryab">Faryab</option>
                                <option value="Farah">Farah</option>
                                <option value="Kandahar">Kandahar</option>
                                <option value="Kabul">Kabul</option>
                                <option value="Kapisa">Kapisa</option>
                                <option value="Kunduz">Kunduz</option>
                                <option value="Kunar">Kunar</option>
                                <option value="Laghman">Laghman</option>
                                <option value="Logar">Logar</option>
                                <option value="Nangarhar">Nangarhar</option>
                                <option value="Norestan">Norestan</option>
                                <option value="Nimruz">Nimruz</option>
                                <option value="Wardak">Wardak</option>
                                <option value="Herat">Herat</option>
                                <option value="Helmand">Helmand</option>


                </select>
            </div>


            {{-- Prject Manager --}}
            <div class="mb-4">
                <label>Project Manager</label>
                <input type="text" id="project_manager" name="project_manager"/>
            </div>

            {{-- Program --}}
            <div class="mb-4">
                <label for="program">Program</label>
                <select name="program_id" id="program">
                    <option value="">Select Program</option>
                    @foreach($programs as $program)
                        <option value="{{ $program->id }}">{{ $program->program_name }}</option>
                    @endforeach
                </select>
            </div>
            {{-- ACTIVITIES --}}
            <div class="mb-4 col-span-2 md:col-span-3 lg:col-span-4">
                <label for="specific-category">Activities</label>
                <textarea name="activities" id="activities" rows="4"></textarea>
            </div>

        </div>

        <div class="flex justify-end my-5">
            <button type="submit"
                    class="text-white bg-blue-lighter hover:bg-blue text-base hover:shadow-lg focus:outline-none px-3 py-1 rounded-sm">
                Create Now
            </button>
        </div>

    </form>
@stop

@section('page-level-js')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\ProjectRequest', '#create-form'); !!}
@stop
<script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>

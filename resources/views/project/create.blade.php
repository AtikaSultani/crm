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
                                <option value="1">Orozgan</option>
                                <option value="2">Badqis</option>
                                <option value="3">Bamyan</option>
                                <option value="4">Badakhshan</option>
                                <option value="5">Baqlan</option>
                                <option value="6">Balkh</option>
                                <option value="7">Parwan</option>
                                <option value="8">Paktia</option>
                                <option value="9">Paktika</option>
                                <option value="10">Pnjshir</option>
                                <option value="11">Takhar</option>
                                <option value="12">Jawzjan</option>
                                <option value="13">Khost</option>
                                <option value="14">Daikondy</option>
                                <option value="15">Zabol</option>
                                <option value="16">SarePole</option>
                                <option value="17">Samangan</option>
                                <option value="18">ghazni</option>
                                <option value="19">ghore</option>
                                <option value="20">Faryab</option>
                                <option value="21">Farah</option>
                                <option value="22">Kandahar</option>
                                <option value="23">Kabul</option>
                                <option value="24">Kapisa</option>
                                <option value="25">Kunduz</option>
                                <option value="26">Kunar</option>
                                <option value="27">Laghman</option>
                                <option value="28">Logar</option>
                                <option value="29">Nangarhar</option>
                                <option value="30">Norestan</option>
                                <option value="31">Nimruz</option>
                                <option value="32">Wardak</option>
                                <option value="33">Herat</option>
                                <option value="34">Helmand</option>


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

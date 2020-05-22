<form method="post" action="{{url('/programs/'.$program->id) }}" class="form-vertical" id="edit-program-form">
    @csrf
    @method('PUT')
    <div class="my-2">
        <label for="">Program name</label>
        <input type="text" autofocus name="program_name" value="{{ $program->program_name }}">
    </div>

    <div class="my-2">
        <label for="">Start Date</label>
        <input type="text" class="datepicker-here" data-language='en'
               name="start_date"
               data-date-format="yyyy-mm-dd"
               value="{{$program->start_date}}"/>
    </div>

    <div class="my-2">
        <label for="">End Date</label>
        <input type="text" class="datepicker-here" data-language='en'
               name="end_date"
               data-date-format="yyyy-mm-dd"
               value="{{$program->end_date}}"/>
    </div>
</form>

{!! JsValidator::formRequest('App\Http\Requests\ProgramRequest', '#edit-program-form'); !!}
<script>
    $('.datepicker-here').datepicker()
</script>

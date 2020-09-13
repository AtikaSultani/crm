<form method="post" action="{{url('/programs/'.$program->id) }}" class="form-vertical" id="edit-program-form">
    @csrf
    @method('PUT')
    <div class="my-2">
        <label for="">Program name</label>
        <input type="text" autofocus name="program_name" value="{{ $program->program_name }}">
    </div>

  
</form>

{!! JsValidator::formRequest('App\Http\Requests\ProgramRequest', '#edit-program-form'); !!}
<script>
    $('.datepicker-here').datepicker()
</script>

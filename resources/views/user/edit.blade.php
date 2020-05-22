<form method="post" action="{{url('/users/'.$user->id) }}" id="edit-user-form">
    @csrf
    @method('PUT')
    <div class="my-2">
        <label for="">Name</label>
        <input type="text" autofocus name="name" value="{{ $user->name}}">
    </div>

    <div class="my-2">
        <label for="">Start Date</label>
        <input type="text" name="email" value="{{ $user->email}}">
    </div>
</form>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\ProjectRequest', '#edit--user-form'); !!}


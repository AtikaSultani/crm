<form method="post" action="{{url('/users/'.$user->id) }}" id="edit-user-form">
    @csrf
    @method('PUT')
    <div class="my-2">
        <label for="name">Name</label>
        <input type="text" id="name" autofocus name="name" value="{{ $user->name}}">
    </div>

    <div class="my-2">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="{{ $user->email}}">
    </div>
</form>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\ProjectRequest', '#edit-user-form'); !!}


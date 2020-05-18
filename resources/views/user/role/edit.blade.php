<form method="POST" id="edit-role-form" action="{{ url('/roles/'.$role->id) }}">
    @csrf
    @method('put')
    <div class="form-group form-group flex justify-center my-5">
        <img src="{{ asset('/images/role.svg') }}" alt="" class="h-32">
    </div>
    <div class="form-group">
        <input type="text" autofocus name="name" placeholder="Role name e.g Admin" value="{{ $role->name }}">
    </div>
</form>

<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\RoleRequest','#edit-role-form') !!}

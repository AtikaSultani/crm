@foreach ($province->districts as $district)
    <option value="{{ $district->id }}"
            @if(request('district') == $district->id) selected @endif>{{ $district->district_name }}</option>
@endforeach

@php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
@endphp

<x-guest-layout >
    @if (Session::get('company-created'))
    <p class="p-2">A cég sikeresen létrehozva!</p>
    @endif
    @if (Session::get('company-updated'))
    <p class="p-2">A cég adatai sikeresen frissültek!</p>
    @endif
    @if (Session::get('company-deleted'))
    <p class="p-2">A cég sikeresen törölve!</p>
    @endif


    
    
<h1>Cég adatok</h1>
<!-- @php
foreach($users as $user)
{
    echo `<script>console.log({{$user->name}}); </script>`;
    echo $user->name;
}
@endphp -->
<table  class="table table-striped">
    <thead>
        <tr>
            <th>Név</th>
            <th>Adószám</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($companies as $company)
        <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->tax }}</td>
                <td><a href="{{ route('companies.show', $company->id) }}">Részletek</td>
            </tr>
        @endforeach
    </tbody>
</table>


@auth
<button class="btn btn-outline-warning btn-lg"><a href="{{ route('companies.create') }}">Új cég felvétele</a></button>
@else
<button class="btn btn-outline-warning btn-lg"><a href="{{ route('login') }}">Új cég felvétele</a></button>
@endauth
</x-guest-layout>
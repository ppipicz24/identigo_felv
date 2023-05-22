
<x-guest-layout>

    <h2>{{ $company->name }} részletei</h2>
    <table class="table table-striped">
        <tr>
            <td>Név:</td>
            <td>{{ $company->name }}</td>
        </tr>
        <tr>
            <td>Adószám:</td>
            <td>{{ $company->tax }}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{ $company->email }}</td>
        </tr>
        <tr>
            <td>Telefonszám:</td>
            <td>{{ $company->phone }}</td>
        </tr>
    </table>

    @auth
    <table>
        <tr>
            <td><button class="btn btn-outline-info btn-lg"><a href="{{ route('companies.index') }}">Vissza</a></button></td>
            <td><button class="btn btn-outline-warning btn-lg"><a href="{{ route('companies.edit', $company->id) }}">Szerkesztés</a></button></td>
            <td>
            <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger btn-lg">Törlés</button>
    </form>
        </tr>
    </table>

    @endauth

</x-guest-layout>
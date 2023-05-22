<x-guest-layout>
    <h2>{{ $company->name }} részletei</h2>
    <p>Adószám: {{ $company->tax }}</p>
    <p>Email: {{ $company->email }}</p>
    <p>Telefonszám: {{ $company->phone }}</p>

    @auth
    <button><a href="{{ route('companies.edit', $company->id) }}">Szerkesztés</a></button>
    <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Törlés</button>
    </form>
    @endauth

</x-guest-layout>
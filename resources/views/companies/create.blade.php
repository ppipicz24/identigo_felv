<x-guest-layout>
    
    <h2>Új cég felvétele</h2>
    <form action="{{route('companies.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    Név: <input type="text" name="name" value="{{old('name')}}"><br>
    @error('name')
    {{ $message }}
    @enderror
    <br>

    Adószám: <input type="text" name="tax" value="{{old('tax')}}"><br>
    @error('tax')
    {{ $message }}
    @enderror
    <br>

    Email: <input type="email" name="email" value="{{old('email')}}"><br>
    @error('email')
    {{ $message }}
    @enderror
    <br>

    Telefonszám: <input type="tel" name="phone" value="{{old('phone')}}"><br>
    @error('phone')
    {{ $message }}
    @enderror


    
    <button type="submit" class="p-2 inline-block bg-sky-900 hover:bg-sky-700 text-white">Mentés</button>

    </form>
</x-guest-layout>
<x-guest-layout>
    
    <h2>Új cég felvétele</h2>
    <form action="{{route('companies.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    Név: <input type="text" name="name" value="{{old('name')}}" class="form-control"><br>
    @error('name')
    {{ $message }}
    @enderror
    <br>

    Adószám: <input type="text" name="tax" value="{{old('tax')}}" class="form-control"><br>
    @error('tax')
    {{ $message }}
    @enderror
    <br>

    Email: <input type="email" name="email" value="{{old('email')}}" class="form-control"><br>
    @error('email')
    {{ $message }}
    @enderror
    <br>

    Telefonszám: <input type="tel" name="phone" value="{{old('phone')}}" class="form-control"><br>
    @error('phone')
    {{ $message }}
    @enderror


    
    <button type="submit" class="btn btn-primary btn-block mb-4 btn-lg">Mentés</button>

    </form>
</x-guest-layout>
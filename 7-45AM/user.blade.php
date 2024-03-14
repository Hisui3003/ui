@extends('layout.ownerlayout')

@section('content')

@include('layout.ownerheader')

{{-- @include('layout.ownernav') --}}


{{-- account wrapper --}}
<div class="container p-6 bg-white">
    <div class="container pt-4 pb-4 mx-5" >
        <div class="flex items-center">
            <img src="https://www.svgrepo.com/show/507442/user-circle.svg" class="w-40 mr-10" alt="">
            <h3 class="text-xl font-semibold">
                John Doe
            </h3>
        </div>

    </div>


    <div class="container gap-6 border-t pt-4 pb-16 items-start">

        <div class=" bg-white px-4 pb-2 overflow-hidden">
            <div class="mr-14">
                <h3 class="text-xl font-semibold">
                   Property Lists
                </h3>
            </div>
            <div class="overflow-x-auto py-5 my-3 bg-gray-300 rounded-lg">
                <table class="table-auto w-full border-transparent">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-b border-r border-gray-400" style="width: 20%;">Photo</th>
                            <th class="px-4 py-2 border-b border-r border-gray-400" style="width: 35%;">Place Name</th>
                            <th class="py-2 px-3 text-gray-800 border-b  border-r border-gray-400" style="width: 15%;">Update</th>
                            <th class="py-2 px-3 text-gray-800 border-b border-r border-gray-400" style="width: 15%;">Delete</th>
                            <th class="py-2 px-3 text-gray-800 border-b border-r border-gray-400" style="width: 15%;">Restore</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($properties as $property)
                            <tr>
                                <td class="px-4 py-2 border-b border-gray-400" style="width: 30%;">
                                    <img src="{{ asset("/storage/images/". $property->image->image_path) }}" alt="Property Photo">
                                </td>
                                <td class="px-4 py-2 border-b border-gray-400" style="width: 30%;">{{ $property->description->description }}</td>
                                <td class="px-5 py-2 border-b border-gray-400 text-center" style="width: 15%;">
                                    <a href="{{ route('property.updateproperty', $property) }}" class="bg-transparent rounded-md px-5 py-1 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td class="px-5 py-2 border-b border-gray-400 text-center" style="width: 15%;">
                                    @if(!$property->trashed()) {{-- Check if property is not in trash --}}
                                    <form action="{{ route('properties.destroy', $property) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-transparent rounded-md px-5 py-1 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold">
                                            <i class="fa-solid fa-x"></i>
                                        </button>
                                    </form>
                                @endif
                                </td>
                                <td class="px-5 py-2 border-b border-gray-400 text-center" style="width: 15%;">
                                    @if($property->trashed())
                                        <form action="{{ route('properties.restore', $property->id) }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" class="bg-transparent rounded-md px-5 py-1 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold">
                                                <i class="fas fa-undo"></i>
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container rounded-md bg-white h-24">
            {{-- idk --}}
        </div>
        <div class="container rounded-md bg-white h-24">
            {{-- idk --}}
        </div>
        <div class="container rounded-md bg-white h-24">
            {{-- idk --}}
        </div>



    </div>
</div>

{{-- <script>
// document.getElementById('editProfileButton').addEventListener('click', function() {
//     var container = document.getElementById('editProfileContainer');
//     container.classList.toggle('hidden');
// });

// document.getElementById('closeProfileButton').addEventListener('click', function() {
//     var container = document.getElementById('editProfileContainer');
//     container.classList.add('hidden');
// });
// </script> --}}

{{-- account wrapper --}}

{{-- @include('layout.footer'); --}}
@endsection

@section('scripts')
    @parent

    @if(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif
    @if(session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @endif

    @if ($errors->any())
    <script>
        var errorMessage = @json(json_decode($errors->toJson(), true));
        alert(errorMessage.join('\n'));
    </script>
@endif

@endsection
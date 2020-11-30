<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion de información') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" >
               <a href="{{ route('RegistrarProd.create') }}"><img src="{{asset('/images/registrarprod.png')}}"></a>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <a href="{{ route('RegistrarCon.create') }}"><img src="{{asset('/images/registrarconsul.png')}}"></a>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <a href="{{ route('RegistrarCli.create') }}"><img src="{{asset('/images/registrarclien.png')}}"></a>
            </div>
        </div>
    </div>
</x-app-layout>

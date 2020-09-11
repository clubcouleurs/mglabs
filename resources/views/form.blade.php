@extends('layouts.app')

@section('content')
<form action="/envoie" method="post">
    <base-panel class="mt-4">
        <h2 class="text-2xl font-medium">Informations pour la conception</h2>
        <div class="mt-4">
            <div class="flex flex-col">
                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6">
                    <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">

                <div class="flex flex-col sm:flex-row py-8">
                    <div class="sm:w-1/4">
                        <h2 class="text-xl">Détails Entreprise</h2>
                    </div>
                    <div class="sm:w-3/4 grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <base-input label="Nom" placeholder="Nom client"></base-input>
                        <base-input type="email" label="Email address" placeholder="Nom client"></base-input>
                    </div>
                </div>                        
                        
                    </div>
                </div>
            </div>
        </div>
    </base-panel>
    <button type="submit" > Envoyer</button>
</form>

    <base-panel class="mt-4">
        <h2 class="text-2xl font-medium">Steve forms</h2>
        <div class="mt-4">
            <div>
                <div class="flex flex-col sm:flex-row py-8">
                    <div class="sm:w-1/4">
                        <h2 class="text-xl">Account details</h2>
                    </div>
                    <div class="sm:w-3/4 grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <base-input label="Name" placeholder="Name"></base-input>
                        <base-input type="email" label="Email address" placeholder="Name"></base-input>
                    </div>
                </div>
                <div class="flex py-8 flex-col sm:flex-row border-t border-gray-200">
                    <div class="sm:w-1/4">
                        <h2 class="text-xl">Account details</h2>
                    </div>
                    <div class="sm:w-3/4 grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <base-input label="Name" placeholder="Name"></base-input>
                        <base-input type="email" label="Email address" placeholder="Name"></base-input>
                    </div>
                </div>
            </div>
        </div>
    </base-panel>

    <base-panel class="mt-4">
        <h2 class="text-2xl font-medium">Casual forms</h2>
        <div class="mt-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <base-input label="Name" placeholder="Name"></base-input>
                <base-input type="email" label="Email address" placeholder="Name"></base-input>
                <base-input label="Name" placeholder="Name"></base-input>
                <base-input type="email" label="Email address" placeholder="Name"></base-input>
            </div>
        </div>
    </base-panel>

    <base-panel class="mt-4">
        <h2 class="text-2xl font-medium">Buttons</h2>
        <div class="mt-4">
            <button class="px-2 py-1 bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-medium rounded">Primary
                sm
            </button>
            <button class="px-2 py-1 bg-green-500 hover:bg-green-600 text-white text-sm font-medium rounded">Success
                sm
            </button>
            <button class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white text-sm font-medium rounded">Danger sm
            </button>

            <button class="px-3 py-1 bg-indigo-500 hover:bg-indigo-600 text-white font-medium rounded">Primary</button>
            <button class="px-3 py-1 bg-green-500 hover:bg-green-600 text-white font-medium rounded">Success</button>
            <button class="px-3 py-1 bg-red-500 hover:bg-red-600 text-white font-medium rounded">Danger</button>

            <button class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white font-medium rounded">Primary lg
            </button>
            <button class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white font-medium rounded">Success lg</button>
            <button class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-medium rounded">Danger lg</button>
        </div>
    </base-panel>

@endsection

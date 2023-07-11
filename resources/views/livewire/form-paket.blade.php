<form class="w-full" wire:submit.prevent="submit">
    <div class="flex flex-col w-full mx-3 my-6">
        <p class="text-3xl font-semibold">Masukan detail paket!</p>
        <div class="my-6 mx-3">
            <label for="base-input" class="block mb-2 text-sm font-medium">Nama Paket</label>
            <input type="text" id="nama_paket" wire:model="nama_paket" class="w-full border-b-2 h-3/5 p-3 hover:bg-gray-100 rounded-md focus:outline-none transition duration-150 text-gray-800">
            @error('nama_paket') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="my-6 mx-3">
            <label for="base-input" class="block mb-2 text-sm font-medium">Kecepatan (MBPS)</label>
            <input type="number" id="kecepatan" wire:model="kecepatan" class="w-full border-b-2 h-3/5 p-3 hover:bg-gray-100 rounded-md focus:outline-none transition duration-150 text-gray-800">
            @error('kecepatan') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="my-6 mx-3">
            <label for="base-input" class="block mb-2 text-sm font-medium">Nama Provider</label>
            <input type="text" id="nama_provider" wire:model="nama_provider" class="w-full border-b-2 h-3/5 p-3 hover:bg-gray-100 rounded-md focus:outline-none transition duration-150 text-gray-800">
            @error('nama_provider') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="my-6 mx-3">
            <label for="base-input" class="block mb-2 text-sm font-medium">Harga Perbulan</label>
            <input type="number" id="harga" wire:model="harga" class="w-full border-b-2 h-3/5 p-3 hover:bg-gray-100 rounded-md focus:outline-none transition duration-150 text-gray-800">
            @error('harga') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="bg-gray-800 text-white rounded-md w-fit h-fit p-3 mx-3 hover:bg-gray-700 trasition duration-150">Selesai</button>
    </div>
    @if (session()->has('message'))
    <div class="text-green-500">{{ session('message') }}</div>
    @endif
</form>
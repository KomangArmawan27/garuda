<div class="flex w-full justify-center items-center">
    <div class="w-full">
        <div>
            <div>
                <!-- @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif -->
                @if (session()->has('message'))
                <div class="fixed inset-0 flex items-center justify-center z-50">
                    <div class="flex flex-col items-center justify-center bg-white w-64 p-4 rounded shadow-lg">
                        <div class="w-full text-xl font-bold mb-2">Success</div>
                        <div class="w-full mb-4">{{ session('message') }}</div>
                        <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded" onclick="closeModal()">Close</button>
                    </div>
                </div>
                @endif

                @if (session()->has('error'))
                <div class="fixed inset-0 flex items-center justify-center z-50">
                    <div class="bg-white w-64 p-4 rounded shadow-lg">
                        <div class="text-xl font-bold mb-2">Error</div>
                        <div class="mb-4">{{ session('error') }}</div>
                        <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded" onclick="closeModal()">Close</button>
                    </div>
                </div>
                @endif
            </div>
        </div>
        @if($registerForm)
        <!-- register session -->
        <form>
            <div class="flex flex-col">
                <div class="flex item-center justify-center mt-6">
                    <p class="">Sudah punya akun? </p>
                    <button class="text-black" wire:click.prevent="register"><strong>Login disini!</strong></button>
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-col mt-5">
                        <p>Nama</p>
                        <input type="text" wire:model="name" class="p-2 border-b-2 focus:outline-none focus:border-b-blue-300 mb-6">
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="flex flex-col mt-5">
                        <p>Email</p>
                        <input type="text" wire:model="email" class="p-2 border-b-2 focus:outline-none focus:border-b-blue-300 mb-6">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="flex flex-col mt-5">
                        <p>Password</p>
                        <input type="password" wire:model="password" class="p-2 border-b-2 focus:outline-none focus:border-b-blue-300 mb-6">
                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="flex justify-center">
                        <button class="bg-blue-500 rounded-md w-full p-2 text-white hover:bg-blue-600 transition duration-800" wire:click.prevent="registerStore">Register</button>
                    </div>
                </div>
            </div>
    </div>
    </form>
    @else
    <form>
        <div class="flex item-center justify-center mt-6">
            <p class="">Belum punya akun? </p>
            <button class="text-black" wire:click.prevent="register"><strong>Daftar disini!</strong></button>
        </div>
        <div class="flex flex-col">
            <div class="flex flex-col">
                <p>Email</p>
                <input type="text" wire:model="email" class="p-2 border-b-2 focus:outline-none focus:border-b-blue-300 mb-6">
                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="flex flex-col mt-5">
                <p>Password</p>
                <input type="password" wire:model="password" class="p-2 border-b-2 focus:outline-none focus:border-b-blue-300 mb-6">
                @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="flex justify-center">
                <button class="bg-blue-500 rounded-md w-full p-2 text-white hover:bg-blue-600 transition duration-800" wire:click.prevent="login">Login</button>
            </div>
        </div>
    </form>
    @endif
</div>
<script>
    function closeModal() {
        document.querySelectorAll('.fixed').forEach(function(el) {
            el.remove();
        });
    };
    document.getElementById('login').addEventListener('click', function(event) {
        event.preventDefault(); 

        var url = '/';

        window.location.href = url;
    });
</script>
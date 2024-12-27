@extends('admin.layouts.main')
@section('contents')
    @php
        $title = 'Daftar Zakat';
    @endphp
    <div class="w-full px-12 py-5 mx-auto">
        <a href="{{ route('pengguna.index') }}" class="px-4 py-2 text-base font-medium text-white bg-black rounded-md ">
            &larr; Kembali</a>
    </div>
    <div class="w-full px-12 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid md:px-5 shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="pb-0 mb-0 bg-white border-b-0 md:p-6 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6>Detail Data Muzakki</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-3 overflow-x-auto md:p-6">
                            <div class="dark:bg-gray-700">
                                <form action="{{ route('pengguna.store') }}" method="POST">
                                    @csrf
                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <div>
                                            <label for="name"
                                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">
                                                Nama Pengguna <span class="text-red-500">*</span></label>
                                            <input type="text" id="name" name="name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="nama Pengguna" required />
                                        </div>
                                        <div>
                                            <label for="email"
                                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Email
                                                <span class="text-red-500">*</span>
                                            </label>
                                            <input type="text" id="email" name="email"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="email pengguna" required />
                                        </div>
                                        <div>
                                            <label for="password"
                                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Password
                                                <span class="text-red-500">*</span></label>
                                            <input type="password" id="password" name="password"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="password" required />
                                        </div>
                                        <div>
                                            <label for="confirmation_password"
                                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Password
                                                <span class="text-red-500">*</span></label>
                                            <input type="password" id="confirmation_password" name="confirmation_password"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="confirmation password" required />
                                        </div>
                                        <div>
                                            <label for="role"
                                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Role
                                                <span class="text-red-500">*</span></label>
                                            <select id="role" name="role"
                                                class="text-slate-700 bg-white border border-slate-400  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <option value="admin">Admin
                                                </option>
                                                <option value="ketua_rt">
                                                    Ketua RT</option>
                                                <option value="user">User
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-base w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

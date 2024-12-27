@extends('admin.layouts.main')
@section('contents')
    @php
        $title = 'Pengguna';
    @endphp

    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div class="flex justify-end">
                    <div class="flex flex-col justify-end md:items-center md:flex-row">
                        <div class="flex items-center md:ml-auto md:pr-4">
                            <form>
                                <div
                                    class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                                    <button type="submit"
                                        class="text-sm ease-soft leading-5.6 absolute z-50 right-5 flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <input type="search" name="search"
                                        class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2.5 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                        autocomplete="off" placeholder="Type here..." />
                                </div>
                            </form>
                        </div>

                        <a href="{{ route('pengguna.create') }}"
                            class="text-white bg-blue hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah
                            Pengguna</a>
                    </div>
                </div>
                @include('admin.layouts.partials.alert')
                <div
                    class="relative flex flex-col min-w-0 mt-5 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="mb-3 font-medium text-hijau1">Data Seluruh Pengguna</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-sm font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">
                                            No</th>
                                        <th
                                            class="px-6 py-3 text-sm font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">
                                            Nama User</th>
                                        <th
                                            class="px-6 py-3 pl-2 text-sm font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">
                                            Role User</th>

                                        <th
                                            class="px-6 py-3 text-sm font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">
                                            Email</th>
                                        <th
                                            class="px-6 py-3 text-sm font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">
                                            Tanggal Dibuat</th>
                                        <th <th
                                            class="px-6 py-3 text-sm font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-sm font-semibold leading-tight text-slate-800">{{ $loop->iteration }}</span>
                                            </td>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-sm font-semibold leading-tight text-slate-800">{{ $user->name }}</span>
                                            </td>

                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-sm font-semibold leading-tight text-slate-800">{{ $user->role }}</span>
                                            </td>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-sm font-semibold leading-tight text-slate-800">{{ $user->email }}</span>
                                            </td>


                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-sm font-semibold leading-tight text-slate-800">{{ date('d-m-Y', strtotime($user->created_at)) }}</span>
                                            </td>

                                            <td class="flex p-2 align-middle border-b gap-x-2">
                                                <a href="{{ route('pengguna.detail', $user->id) }}"
                                                    class="inline-block p-2 py-2 text-sm font-semibold leading-tight text-white bg-yellow-300 rounded-lg"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                </a>
                                                <form action="{{ route('pengguna.delete', $user->id) }}" method="POST"
                                                    class="cursor-pointer w-fit">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" value="Hapus"
                                                        class="inline-block p-2 text-sm font-semibold leading-tight text-white bg-red-600 rounded-lg cursor-pointer w-fit">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

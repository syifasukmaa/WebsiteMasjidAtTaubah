@extends('admin.layouts.main')
@section('contents')
    @php
        $title = 'Menambah Pendaftar Qurban';
    @endphp
    <div class="w-full px-20 py-5 mx-auto">
        <a href="{{ route('pendaftarQurban.index') }}"
            class="px-4 py-2 text-base font-medium text-white bg-black rounded-md ">
            &larr; Kembali</a>
    </div>
    <div class="w-full px-20 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6>Tambah Data Pendaftar Qurban</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-6 overflow-x-auto">
                            <div class="dark:bg-gray-700">
                                <form class="grid grid-cols-4 gap-y-10 gap-x-4" method="post"
                                    action="{{ route('pendaftarQurban.store') }}">
                                    @csrf
                                    <div>
                                        <label for="nama"
                                            class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Nama
                                            Pengqurban</label>
                                        <input type="text" id="nama" name="nama"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Nama pengqurban" />
                                    </div>
                                    <div>
                                        <label for="tujuan_pahala"
                                            class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tujuan
                                            Pahala</label>
                                        <textarea id="tujuan_pahala" name="tujuan_pahala"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-[80px]"
                                            placeholder="Tujuan Pahala"></textarea>
                                    </div>

                                    <div>
                                        <label for="jenis_hewan"
                                            class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Jenis
                                            Hewan
                                        </label>
                                        <select id="jenis_hewan" name="jenis_hewan"
                                            class="text-slate-700 bg-white border border-slate-400  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <option value="sapi">
                                                Sapi</option>
                                            <option value="kerbau">
                                                kerbau</option>
                                            <option value="kambing">Kambing</option>
                                            <option value="domba">
                                                Domba</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="hak_pengqurban"
                                            class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Hak
                                            Pengqurban</label>
                                        <input type="text" id="hak_pengqurban" name="hak_pengqurban"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Hak Pengqurban" />
                                    </div>

                                    <div>
                                        <label for="biaya"
                                            class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Biaya
                                            Pembayaran</label>
                                        <input type="text" id="biaya" name="biaya"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Jumlah Zakat" />
                                    </div>
                                    <div>
                                        <label for="status_pembayaran"
                                            class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Status
                                            Pembayaran
                                        </label>
                                        <select id="status_pembayaran" name="status_pembayaran"
                                            class="text-slate-700 bg-white border border-slate-400  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <option value="lunas">
                                                Lunas</option>
                                            <option value="belum bayara">
                                                Belum Bayar</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="id_RT"
                                            class="block mb-2 text-base font-medium text-gray-900 dark:text-white">RT Warga
                                        </label>
                                        <select id="id_RT" name="id_RT"
                                            class="text-slate-700 bg-white border border-slate-400  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            @foreach ($rt as $rtwarga)
                                                <option value="{{ $rtwarga->id_RT }}">
                                                    {{ $rtwarga->nomor_RT }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-span-4 mt-5">
                                        <input type="submit"
                                            class="inline-block px-4 py-2 text-sm font-semibold leading-tight text-white bg-orange-400 rounded-lg cursor-pointer"
                                            value="Tambah Data">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

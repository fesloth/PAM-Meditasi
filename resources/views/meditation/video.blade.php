@extends('layouts.main')

{{-- <div class="container">
    <div class="navbar bg-orange-700 text-white shadow-xl">
        <div class="flex-1 pl-5">
            <a class="btn btn-ghost normal-case text-xl">Meditation <i class="fa-solid fa-laptop-medical"></i></a>
        </div>
        <div class="flex-none">
            <div class="dropdown dropdown-end pr-5">
                <div class="flex items-stretch">
                    <a href="/" class="btn btn-ghost rounded-btn"><i class="fa-solid fa-angle-left fa-rotate-180"></i>Back</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="navbar bg-[91D086] text-slate-900 shadow-xl">
    <div class="flex-1 pl-5">
      <a href="#" class="btn btn-ghost normal-case text-xl">Meditation <i class="fa-solid fa-laptop-medical"></i></a>
    </div>
    <div class="flex-none">
      <div class="pr-5">
        <div class="flex items-stretch">
          <a href="/" class="btn btn-ghost rounded-btn">Beranda</a>
          <div class="dropdown dropdown-end">
            <!-- Dropdown "Produktivitas" -->
            <label tabindex="0" class="btn btn-ghost">
              <div class="rounded-btn">
                <!-- Icon untuk dropdown "Produktivitas" -->
                Produktivitas <i class="fa-solid fa-chevron-down"></i>
              </div>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-green-300 rounded-box w-52">
              <!-- Tautan untuk fitur-fitur -->
              <li>
                <a href="/video" class="justify-between">
                  Video Meditasi
                </a>
              </li>
              <li><a href="/mood">Mood Tracker</a></li>
              <li><a href="/notes">Catatan</a></li>
              <li>
                <a href="/todo">
                  To-Do List
                </a>
              </li>
              <li>
                <a href="/kalk ">
                  Kalkulator Relaksasi
                </a>
              </li>
              <li>
                <a href="/pesan">
                  Pesan Pagi
                </a>
              </li>
              <li>
                <a href="/jurnal">
                  Jurnal
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="dropdown dropdown-end mr-8">
    </div>
</div>

<div class="container mx-auto mt-8 text-center">
    <!-- Tombol Pencarian -->
    <div class="mt-20">
        <div class="justify-center flex items-center">
            <input type="text" class="w-80 px-4 py-2 border bg-white border-gray-300 focus:outline-none focus:ring focus:border-orange-500" placeholder="Cari video...">
            <button class="bg-[91D086] text-white px-4 py-3 hover:bg-green-600">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    <!-- 4 Kotak dengan Tombol Play -->
    <div class="flex justify-evenly mt-16">
        <div class="w-52 h-52 bg-gray-200 rounded-lg p-4 flex justify-center items-center">
            <!-- Konten Kotak 1 -->
            <div class="text-center">
                <a href="https://www.youtube.com/watch?v=wIiUxN5sE7Y" target="_blank">
                    <i class="fas fa-play-circle text-4xl text-[6EA066]"></i>
                </a>
            </div>
        </div>
        <div class="w-52 h-52 bg-gray-200 rounded-lg p-4 flex justify-center items-center">
            <!-- Konten Kotak 2 -->
            <div class="text-center">
                <a href="https://www.youtube.com/watch?v=VIDEO_ID" target="_blank">
                    <i class="fas fa-play-circle text-4xl text-[6EA066]"></i>
                </a>
            </div>
        </div>

        <div class="w-52 h-52 bg-gray-200 rounded-lg p-4 flex justify-center items-center">
            <!-- Konten Kotak 3 -->
            <div class="text-center">
                <a href="https://www.youtube.com/watch?v=VIDEO_ID" target="_blank">
                    <i class="fas fa-play-circle text-4xl text-[6EA066]"></i>
                </a>
            </div>
        </div>

        <div class="w-52 h-52 bg-gray-200 rounded-lg p-4 flex justify-center items-center">
            <!-- Konten Kotak 4 -->
            <div class="text-center">
                <a href="https://www.youtube.com/watch?v=VIDEO_ID" target="_blank">
                    <i class="fas fa-play-circle text-4xl text-[6EA066]"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- 4 Kotak dengan Tombol Play -->
    <div class="flex justify-evenly mt-8">
        <div class="w-52 h-52 bg-gray-200 rounded-lg p-4 flex justify-center items-center">
            <!-- Konten Kotak 1 -->
            <div class="text-center">
                <a href="https://www.youtube.com/watch?v=VIDEO_ID" target="_blank">
                    <i class="fas fa-play-circle text-4xl text-[6EA066]"></i>
                </a>
            </div>
        </div>

        <div class="w-52 h-52 bg-gray-200 rounded-lg p-4 flex justify-center items-center">
            <!-- Konten Kotak 2 -->
            <div class="text-center">
                <a href="https://www.youtube.com/watch?v=VIDEO_ID" target="_blank">
                    <i class="fas fa-play-circle text-4xl text-[6EA066]"></i>
                </a>
            </div>
        </div>

        <div class="w-52 h-52 bg-gray-200 rounded-lg p-4 flex justify-center items-center">
            <!-- Konten Kotak 3 -->
            <div class="text-center">
                <a href="https://www.youtube.com/watch?v=VIDEO_ID" target="_blank">
                    <i class="fas fa-play-circle text-4xl text-[6EA066]"></i>
                </a>
            </div>
        </div>

        <div class="w-52 h-52 bg-gray-200 rounded-lg p-4 flex justify-center items-center">
            <!-- Konten Kotak 4 -->
            <div class="text-center">
                <a href="https://www.youtube.com/watch?v=VIDEO_ID" target="_blank">
                    <i class="fas fa-play-circle text-4xl text-[6EA066]"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Pagination -->
    <div class="flex justify-center mt-16 mb-36">

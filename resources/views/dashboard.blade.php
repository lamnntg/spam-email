<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hệ thống Spam Email') }}
        </h2>

        <h1>{{ LaravelGmail::user() }}</h1>
        @if(LaravelGmail::check())
            <a href="{{ url('oauth/gmail/logout') }}">Logout</a>
        @else
            <a href="{{ url('oauth/gmail') }}">Login Gmail</a>
        @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Sử dụng Gmail API cần phải đăng nhập Gmail trước.<br>
                    Hệ thống Đang phát triển
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

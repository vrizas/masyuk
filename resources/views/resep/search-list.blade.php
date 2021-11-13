@extends('layouts.master')
@section('css')
    <style>
        .like svg path {
            fill: #1f2937;
            stroke-width: 0;
        }

        .content aside {
            height: fit-content;
        }

    </style>
    @livewireStyles
@endsection
@section('main')
    <livewire:daftar-resep />
@endsection

@section('script')
    @livewireScripts
@endsection

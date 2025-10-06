@extends('partials.layout')
@section('title', 'Dashboard')
@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="card bg-base-300">
            <div class="card-body">
                    @include('profile.partials.update-profile-information-form')
            </div>
            </div>
            <div class="card bg-base-300">
                <div class="card-body">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="card bg-base-300">
                <div class="card-body">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

    </div>
</x-app-layout>

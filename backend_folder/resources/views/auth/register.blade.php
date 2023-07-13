<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>egal Review</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="/" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
               
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-3">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name"  class="form-control" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mb-3">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email"  class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

<!-- role -->
            <div class="mb-3">
    <label for="role_id" :value="__('Register as:')">Role</label>
    <select class="form-control" id="role_id" name="role_id" value="{{ old('email') }}" aria-describedby="emailHelp">
        <option value="admin">Admin</option>
        <option value="super_admin">Super Admin</option>
    </select>
</div>

<!-- Password -->
<div class="mb-3">
    <x-label for="password" :value="__('Password')" />
    <x-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
</div>


            <!-- Confirm Password -->
            <div class="mb-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required />
            </div>



            <!-- register  -->
            <div class="mb-4">
            <div class="d-flex align-items-center justify-content-center">
                <a class="text-primary fw-bold ms-2"  href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

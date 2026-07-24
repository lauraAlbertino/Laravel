@extends('admin.layouts.app') <!-- ouxa o layout principal -->
@section('title', 'Criar Novo Usuário')

@section('content') <!--//traz somente o conteúdo da página para dentro do section content do layout principal-->
    @include('admin.users.partials.breadcrumb')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-4">
            Novo Usuário
        </h2>
    </div>
    {{-- @include('admin.includes.errors') --}}
    <form action="{{ route('users.store') }}" method="POST">
        @include('admin.users.partials.form')
    </form>
@endsection

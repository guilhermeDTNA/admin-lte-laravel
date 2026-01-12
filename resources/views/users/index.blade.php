@extends('layouts.default')
@section('page-title', 'Usuários')
@section('page-actions')
  <a href="#" class="btn btn-primary">Adicionar</a>
@endsection
@php
  $breadcrumbs = [['label' => 'Home', 'url' => '/'], ['label' => 'Dashboard', 'url' => '/']];
@endphp

@section('content')
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            <a class="btn btn-primary btn-sm">Editar</a>
            <a class="btn btn-danger btn-sm">Excluir</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection

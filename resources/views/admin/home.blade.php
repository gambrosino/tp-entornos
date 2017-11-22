@extends('layouts.app')

@section('content')
	<section class="hero">
<div class="hero-body">
<div class="container">
    <h1 class="title">
        Mis eventos
    </h1>
    <h2 class="subtitle">
        Desde aquí podrás administrar tus eventos activos, consultar
        eventos anteriores y crear nuevos eventos.
    </h2>
    <br>
    <a href="#" class="button is-primary">+ Crear evento</a>
</div>
</div>
</section>
<section class="section">
<div class="container">
<h2 class="title is-4">
    Lista de eventos
</h2>
<table class="table is-striped is-fullwidth" style="border-collapse:separate;">
  <thead>
    <tr>
      <th>Fecha</th>
      <th>Nombre Evento</th>
      <th>Personas registradas</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>01-01-2018</td>
      <td><a href="" class="has-text-info">Año nuevo</a></td>
      <td>234</td>
      <td class="level">
        <div class="level-left">
          <a href="#" class="level-item button is-small is-outlined is-black">Editar</a>
          <a href="#" class="level-item button is-small is-outlined is-success">Enviar emails</a>
          <a href="#" class="level-item button is-small is-danger">Eliminar</a>
        </div>
    </td>
    </tr>
    <tr>
      <td>01-02-2018</td>
      <td><a href="" class="has-text-info">Jam sessions 2018</a></td>
      <td>14</td>
      <td class="level">
        <div class="level-left">
          <a href="#" class="level-item button is-small is-outlined is-black">Editar</a>
          <a href="#" class="level-item button is-small is-outlined is-success">Enviar emails</a>
          <a href="#" class="level-item button is-small is-danger">Eliminar</a>
        </div>
    </td>
    </tr>
    <tr>
      <td>07-02-2018</td>
      <td><a href="" class="has-text-info">Ensayo abierto</a></td>
      <td>9</td>
      <td class="level">
        <div class="level-left">
          <a href="#" class="level-item button is-small is-outlined is-black">Editar</a>
          <a href="#" class="level-item button is-small is-outlined is-success">Enviar emails</a>
          <a href="#" class="level-item button is-small is-danger">Eliminar</a>
        </div>
    </td>
    </tr>
    <tr>
      <td>13-02-2018</td>
      <td><a href="" class="has-text-info">Rock &amp; Blues cena show</a></td>
      <td>21</td>
      <td class="level">
        <div class="level-left">
          <a href="#" class="level-item button is-small is-outlined is-black">Editar</a>
          <a href="#" class="level-item button is-small is-outlined is-success">Enviar emails</a>
          <a href="#" class="level-item button is-small is-danger">Eliminar</a>
        </div>
    </td>
    </tr>
    <tr>
      <td>25-02-2018</td>
      <td><a href="" class="has-text-info">ProgPower 2018</a></td>
      <td>234</td>
      <td class="level">
        <div class="level-left">
          <a href="#" class="level-item button is-small is-outlined is-black">Editar</a>
          <a href="#" class="level-item button is-small is-outlined is-success">Enviar emails</a>
          <a href="#" class="level-item button is-small is-danger">Eliminar</a>
        </div>
    </td>
    </tr>
    <tr>
      <td>25-02-2019</td>
      <td><a href="" class="has-text-info">ProgPower 2019</a></td>
      <td>234</td>
      <td class="level">
        <div class="level-left">
          <a href="#" class="level-item button is-small is-outlined is-black">Editar</a>
          <a href="#" class="level-item button is-small is-outlined is-success">Enviar emails</a>
          <a href="#" class="level-item button is-small is-danger">Eliminar</a>
        </div>
    </td>
    </tr>
    <tr>
      <td>25-02-2020</td>
      <td><a href="" class="has-text-info">ProgPower 2020</a></td>
      <td>234</td>
      <td class="level">
        <div class="level-left">
          <a href="#" class="level-item button is-small is-outlined is-black">Editar</a>
          <a href="#" class="level-item button is-small is-outlined is-success">Enviar emails</a>
          <a href="#" class="level-item button is-small is-danger">Eliminar</a>
        </div>
    </td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td colspan="4">
        <nav class="pagination is-centered" role="navigation" aria-label="pagination">
          <a class="pagination-previous">Página anterior</a>
          <a class="pagination-next">Página siguiente</a>
          <ul class="pagination-list">
            <li><a class="pagination-link" aria-label="Goto page 1">1</a></li>
            <li><a class="pagination-link" aria-label="Goto page 2">2</a></li>
            <li><a class="pagination-link" aria-label="Goto page 3">3</a></li>
          </ul>
        </nav>
      </td>
    </tr>
  </tfoot>
</table>
</div>
</section>
@endsection
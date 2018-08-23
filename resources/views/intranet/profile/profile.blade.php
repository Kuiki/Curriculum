@extends('layouts/intranet')

@section('css')

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('dashboard/demo/demo.css') }}" rel="stylesheet" />

@endsection

@section('profile')

  active

@endsection

@section('title-section')

  Datos Personales

@endsection

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Mis Datos Personales</h4>
            <p class="card-category">Completa tu perfil</p>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="bmd-label-floating">Empresa (disabled)</label>
                    <input type="text" class="form-control" value="CREAMERITO" disabled>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <label class="bmd-label-floating">Correo Electrónico</label>
                    <input type="email" class="form-control" value="{{ $user->email }}" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nombres</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Apellidos</label>
                    <input type="text" class="form-control" value="{{ $user->lastname }}" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Dirección</label>
                    <input type="text" class="form-control" value="{{ $user->address }}" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Cuidad</label>
                    <input type="text" class="form-control" value="{{ $user->state }}" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Pais</label>
                    <input type="text" class="form-control" value="España" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Codigo Postal</label>
                    <input type="text" class="form-control" value="41006" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Sobre Mi</label>
                    <div class="form-group">
                      <label class="bmd-label-floating">Agrega una descripción para que otras personas puedan conocerte un poco más</label>
                      <textarea class="form-control" rows="5"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <a href="{{ url('intranet/editar-perfil/'.$user->id) }}" class="btn btn-primary pull-right">Editar Perfil</a>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="#pablo">
              <img class="img" src="{{ asset('dashboard/img/faces/marc.jpg') }}" />
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">CEO / Co-Founder</h6>
            <h4 class="card-title">Alec Thompson</h4>
            <p class="card-description">
              Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
            </p>
            <a href="#pablo" class="btn btn-warning btn-round">Follow</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


@section('script')
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('dashboard/demo/demo.js') }}"></script>
@endsection
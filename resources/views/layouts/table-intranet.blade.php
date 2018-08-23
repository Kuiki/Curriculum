@extends('layouts.intranet')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title ">Simple Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Country</th>
                  <th>City</th>
                  <th>Salary</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Dakota Rice</td>
                    <td>Niger</td>
                    <td>Oud-Turnhout</td>
                    <td class="td-actions">
                      <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Editar">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </button>
                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Eliminar">
                          <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>Dakota Rice</td>
                    <td>Niger</td>
                    <td>Oud-Turnhout</td>
                    <td class="td-actions">
                      <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Editar">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </button>
                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Eliminar">
                          <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>Dakota Rice</td>
                    <td>Niger</td>
                    <td>Oud-Turnhout</td>
                    <td class="td-actions">
                      <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Editar">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </button>
                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Eliminar">
                          <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>Dakota Rice</td>
                    <td>Niger</td>
                    <td>Oud-Turnhout</td>
                    <td class="td-actions">
                      <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Editar">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </button>
                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Eliminar">
                          <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td>Dakota Rice</td>
                    <td>Niger</td>
                    <td>Oud-Turnhout</td>
                    <td class="td-actions">
                      <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Editar">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </button>
                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Eliminar">
                          <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>6</td>
                    <td>Dakota Rice</td>
                    <td>Niger</td>
                    <td>Oud-Turnhout</td>
                    <td class="td-actions">
                      <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Editar">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </button>
                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Eliminar">
                          <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
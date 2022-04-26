<form action="{{ route('accidente.store') }}" method="post" class="form-horizontal">
            @csrf
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Formulario de juego</h4>
               
              </div>
              <div class="card-body">
                <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Nombre del participante</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" autofocus>
                    </div>
                  </div>
                </div>
              </div>
              <!--Footer-->
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
              <!--End footer-->
            </div>
          </form>
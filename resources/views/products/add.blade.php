@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="post" action="{{ route('product.store') }}">
            <div class="form-group row">
              <label for="txtProducto" class="col-4 col-form-label">Producto</label>
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-product-hunt"></i>
                    </div>
                  </div>
                  <input id="txtProducto" name="txtProducto" placeholder="Ingrese el producto" type="text" class="form-control" @error('txtProducto') is-invalid @enderror value="{{old('txtProducto')}}" required="required">
                      @error('txtProducto')
                          <span class="invalid-feedback d-block" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="txtDescripcion" class="col-4 col-form-label">Descripcion</label>
              <div class="col-8">
                <textarea id="txtDescripcion" name="txtDescripcion" cols="40" rows="2" class="form-control" @error('txtDescripcion') is-invalid @enderror value="{{old('txtDescripcion')}}" required="required"></textarea>
                  @error('txtDescripcion')
                      <span class="invalid-feedback d-block" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="txtPrecio" class="col-4 col-form-label">Precio Unitario</label>
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-money"></i>
                    </div>
                  </div>
                  <input id="txtPrecio" name="txtPrecio" placeholder="Ingrese el precio unitario" type="text" class="form-control" @error('txtPrecio') is-invalid @enderror value="{{old('txtPrecio')}}" required="required">
                      @error('txtPrecio')
                          <span class="invalid-feedback d-block" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="txtExistencia" class="col-4 col-form-label">Existencia</label>
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-linux"></i>
                    </div>
                  </div>
                  <input id="txtExistencia" name="txtExistencia" placeholder="Ingrese existencia" type="text" class="form-control" @error('txtExistencia') is-invalid @enderror value="{{old('txtExistencia')}}" required="required">
                      @error('txtExistencia')
                          <span class="invalid-feedback d-block" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-4">Garantia</label>
              <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="rdbGarantia" id="rdbGarantia_0" type="radio" required="required" class="custom-control-input" value="1">
                  <label for="rdbGarantia_0" class="custom-control-label">Si</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="rdbGarantia" id="rdbGarantia_1" type="radio" required="required" class="custom-control-input" value="0">
                  <label for="rdbGarantia_1" class="custom-control-label">No</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
          @if (session('alert'))
              <script>
                  mostrarAlerta('success',{{ session('alert') }});
              </script>
          @endif
    </div>
</div>
@endsection

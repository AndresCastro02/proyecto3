@extends('layouts.default')
@section('content')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <div class="u-s-p-b-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-16">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">Nuevo Producto.</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <form method='post' action="{{ route('products.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input name="name" value="Nombre Moto" required type="text" class="form-control" id="name"
                                        placeholder="ingrese el nombre del producto">
                                </div>

                                <div class="form-group">
                                    <label for="description">Descripcion</label>
                                    <textarea required name="description" class="form-control" id="description"
                                        placeholder="ingrese la descripcion del producto" rows="3">
                                                        Moto economica y rapida
                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="price">Precio</label>
                                    <input name="price" value="10000000" required type="number" class="form-control"
                                        placeholder="ingrese precio del producto">
                                </div>
                           <div class="form-group">
                                    <label for="available">Precio</label>
                                    <input name="available" value="1" required type="number" class="form-control"
                                        placeholder="ingrese precio del producto">
                                </div>
                                
                                <div class="form-group">
                                  <label for="video">Videos</label>
                                  <textarea  name="video" class="form-control" id="description"
                                      placeholder="ingrese el codigo del video" rows="3">
                                                      Ingrese url de video 
                                  </textarea>
                              </div>

                                <br>
                                <div class="form-group">
                                    <label for="categorias">Seleccione categorias del producto</label>
                                    <select name="categories[]" multiple class="form-control" id="categories">
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
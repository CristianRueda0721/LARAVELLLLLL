<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NOMBRE_PRODUCTO') }}
            {{ Form::text('NOMBRE_PRODUCTO', $producto->NOMBRE_PRODUCTO, ['class' => 'form-control' . ($errors->has('NOMBRE_PRODUCTO') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Producto']) }}
            {!! $errors->first('NOMBRE_PRODUCTO', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CANTIDAD_PRODUCTO') }}
            {{ Form::text('CANTIDAD_PRODUCTO', $producto->CANTIDAD_PRODUCTO, ['class' => 'form-control' . ($errors->has('CANTIDAD_PRODUCTO') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Producto']) }}
            {!! $errors->first('CANTIDAD_PRODUCTO', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DESCRIPCION') }}
            {{ Form::text('DESCRIPCION', $producto->DESCRIPCION, ['class' => 'form-control' . ($errors->has('DESCRIPCION') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('DESCRIPCION', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CATEGORIA_PRODUCTOS') }}
            {{ Form::text('CATEGORIA_PRODUCTOS', $producto->CATEGORIA_PRODUCTOS, ['class' => 'form-control' . ($errors->has('CATEGORIA_PRODUCTOS') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Productos']) }}
            {!! $errors->first('CATEGORIA_PRODUCTOS', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PRECIO_PRODUCTO') }}
            {{ Form::text('PRECIO_PRODUCTO', $producto->PRECIO_PRODUCTO, ['class' => 'form-control' . ($errors->has('PRECIO_PRODUCTO') ? ' is-invalid' : ''), 'placeholder' => 'Precio Producto']) }}
            {!! $errors->first('PRECIO_PRODUCTO', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('IMAGEN_PRODUCTO') }}
            {{ Form::text('IMAGEN_PRODUCTO', $producto->IMAGEN_PRODUCTO, ['class' => 'form-control' . ($errors->has('IMAGEN_PRODUCTO') ? ' is-invalid' : ''), 'placeholder' => 'Imagen Producto']) }}
            {!! $errors->first('IMAGEN_PRODUCTO', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
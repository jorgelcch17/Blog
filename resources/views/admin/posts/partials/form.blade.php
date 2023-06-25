<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nomre del posts']) !!}
</div>

@error('name')
    <small class="text-danger" >{{$message}}</small>                
@enderror

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'ingrese el slug del posts','readonly']) !!}
</div>

@error('slug')
    <small class="text-danger" >{{$message}}</small>                
@enderror

<div class="form-group">
    {!! Form::label('category_id', 'categoria') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
</div>

@error('category_id')
    <small class="text-danger" >{{$message}}</small>                
@enderror

<div class="form-group">
    <p class="font-weight-bold"> Etiquetas</p>
    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name}}
        </label>                    
    @endforeach
    
    @error('tags')
        <br>
        <small class="text-danger" >{{$message}}</small>                
    @enderror
</div>


<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status', 2) !!}
        publicado
    </label>
    @error('status')
        <br>
        <small class="text-danger" >{{$message}}</small>                
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->image)
                <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg" alt="">
            @endif
        </div>
    </div>
    <div class="col">
        <div class="form-group" >
            {!! Form::label('file', 'imagen que se mostrara en el post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
        
            @error('file')
                <span class="text-danger" >{{$message}}</span>
            @enderror
        </div>

        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni aut ipsa expedita voluptates, impedit consequuntur eum perferendis distinctio nihil nostrum exercitationem quaerat numquam autem molestias sit tempore sequi corporis quod!</p>
    </div>
</div>
<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
</div>

@error('extract')
    <small class="text-danger" >{{$message}}</small>                
@enderror

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del Post:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

@error('body')
    <small class="text-danger" >{{$message}}</small>                
@enderror

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Teller
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($teller, ['route' => ['tellers.update', $teller->id], 'method' => 'patch']) !!}

                        @include('tellers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
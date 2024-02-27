@extends('layouts.app')

@section('page-title', 'Home')

@section('main')
    <main>
        <div class="container">
            <div class="row">
                <div class="container">
                    <a href="{{ route('train.index') }}"> Vai alla visualizzazione dei treni</a>
                </div>
            </div>
        </div>
    </main>    
@endsection
{{-- 
    questa pagina è collegata a web.php che a sua volta avrà il contenuto contenente iin lauouts, layouts sarà composto da 3 componenti che sono header main e footer.blade.php
--}}
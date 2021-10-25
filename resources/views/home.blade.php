@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="app2" class="content">

            
            <bucles-component></bucles-component>
            
            </div>

            <div id="app3" class="content">


                
                <condicional-component></condicional-component>
                        
                </div>

                <div id="app4" class="content">

                    <input-component></input-component>
                
                    </div>

                    <div id="app5" class="content">
        
                        <manejos-component></manejos-component>
                        
                    
                        </div>

                        <div id="app6" class="content">

                            <primer-component></primer-component>
                            
                            </div>

                            <div id="app7" class="content">

                                <test-component></test-component>
                                
                                </div>

    </div>
</div>
@endsection

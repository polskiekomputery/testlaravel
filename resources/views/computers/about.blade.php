<!--
  Comparing multiple possible condition.
-->

@extends('layouts.app')

@section('content')

<body>
  <h1>
      About Polish Computers
  </h1>
  <p>
      @if(5 > 10)
       <p> 5 computers is lower than 10 computers</p>
      @elseif(5 < 10)
       <p> 5 computers is indeed lower than 10 computers</p>
      @else
       <p> All conditions are wrong. Test of conditional statements in blade templates.</p>
      @endif
  </p>
  <p>
      @unless (empty($name))
        <p>
        Computer name isn't empty!  
        </p>
      @endunless  
  </p>
  <p>
      @if (!empty($name))
        <p>
        Computer name isn't empty!  
        </p>
      @endif 
  </p>
  <p>
      @empty ($name)
        <p>
        Computer name is empty!  
        </p>
      @endempty
  </p>
  <p>
      @isset ($name)
        <p>
        Name has been set! 
        </p>
      @endisset
  </p>
  
  @switch($name)
  @case('Elwro 800 Junior')
    <p>
        Junior to bardzo dobry komputer zbudowany z wykorzystaniem procesora Z80. 
    </p>
  @break
  @case('Mera Elzab Meritum')
    <p>
        Meritum to obecnie cholernie drogi komputer. 
    </p>
  @default
    <p>
        Żadna nazwa komputera nie została przekazana. 
    </p>
  @endswitch
  

  @for($i = 0; $i <=10; $i++)
    <p>Computer {{ $i }} </p>
  @endfor
  

  <p>
      Short text about my huge collection. 
  </p>
</body>

@endsection
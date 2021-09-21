<ul class="nav d-flex justify-content-center bg-warning  mb-5">
     <li class="nav-item"><a  href="{{route('acceuil')}}" class="nav-link  @if(request()->routeIs('acceuil')) active @else '' @endif">Acceuil</a></li>
   <li class="nav-item"><a  href="{{route('article')}}" class="nav-link  @if(request()->routeIs('article')) active @else '' @endif">Articles</a></li>

</ul>
<h2>Liste des habitants</h2>
<ul>

@foreach ($users as $user)
   <li>{{ $user->name }} <div class="glyphicon glyphicon-{{ $user->job->name }}"></div>
       @if(isset($user->characteristic))
       <div class="progress">
           <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $user->characteristic->health }}"
                aria-valuemin="0" aria-valuemax="100" style="width:{{ $user->characteristic->health }}%">
               Health: {{ $user->characteristic->health }} %
           </div>
       </div>
       <div class="progress">
           <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $user->characteristic->stamina }}"
                aria-valuemin="0" aria-valuemax="{{$user->characteristic->max_stamina}}" style="width:{{ ($user->characteristic->stamina / $user->characteristic->max_stamina)*100 }}%">
               Stamina: {{ $user->characteristic->stamina }} / {{  $user->characteristic->max_stamina }}
           </div>
       </div>
       @endif
       {{ Form::open(array('route' => array('user.destroy', $user->id), 'method' => 'delete')) }}
       <button type="submit" class="btn btn-danger btn-mini">Delete</button>
       {{ Form::close() }}
   </li>
@endforeach

</ul>
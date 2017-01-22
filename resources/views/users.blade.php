{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('sexe', 'Sexe:') !!}
			{!! Form::text('sexe') !!}
		</li>
		<li>
			{!! Form::label('birth_date', 'Birth_date:') !!}
			{!! Form::text('birth_date') !!}
		</li>
		<li>
			{!! Form::label('job_id', 'Job_id:') !!}
			{!! Form::text('job_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
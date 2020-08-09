@component('mail::message')
<h1>{{ $email['titulo'] }}</h1>
<p>Han dejado la siguiente información, esperamos sean cosas buenas.</p>
<p>
  Nombre: <strong>{{ $email['nombre'] }}</strong><br>
  Email: <strong>{{ $email['email'] }} </strong><br>
  Comentarios <strong>{{ $email['comentarios'] }} </strong><br>
</p>
<p>Saludos yo del futuro.</p>
{{ config('app.name') }}
@endcomponent

<p>Nueva consulta enviada: {{ date('l jS \de F Y h:i A')  }}</p>

<p>Empresa o nombre: {{ $data['business']}}</p>
@if (isset($data['tel']))
  <p>Telefono: {{ $data['tel'] }}</p>
@endif
<p>E-mail: {{ $data['email']}}</p>
<p>Consulta: {{ $data['message']}}</p>


<p>Contacto: <?php echo $user->name; ?></p>
<p>Empresa: <?php echo $user->business; ?></p>
<p>Pais: <?php echo $user->getCountry(); ?></p>
<p>Email: <?php echo $user->email; ?></p>

<p>Se quiere registrar, para hacerlo solo haz click en ... <a href="{{ route('admin::users::activate', ['users' => $user->id]) }}" title="activar usuario">aqui</a></p>
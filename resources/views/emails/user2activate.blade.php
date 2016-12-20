Contacto <?php echo $user->name; ?>
Empresa <?php echo $user->business; ?>
Pais <?php echo $user->getCountry(); ?>
Email <?php echo $user->email; ?>

Se quiere registrar, para hacerlo solo haz click en ... <a href="{{ route('admin::users::activate', ['users' => $user->id]) }}" title="activar usuario">aqui</a>
<html>
    <body>
        <p><strong>You recieve new claim ticket:</strong></p>
        <p>
            Имя: {{{ $claim->name }}}<br>
            Телефон: {{{ $claim->phone }}}<br>
            Email: {{{ $claim->email }}}<br>
        </p>
        <p>
            Дата: {{{ date('d.m.Y H:i:s') }}}
        </p>
    </body>
</html>
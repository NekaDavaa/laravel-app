<form method="POST" action="/register">
    @csrf
    Име: <input type="text" name="username"><br>
    Поща: <input type="text" name="email"><br>
    Парола: <input type="password" name="pass"><br>
    Повтори парола: <input type="password" name="pass2"><br>
    <input type="submit" value="Регистрация"><br>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

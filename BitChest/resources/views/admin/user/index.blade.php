<table style="font-family: 'Célias', sans-serif;">
    <thead style="background-color: #01FF19; color: #FFFFFF;">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Nom d'utilisateur</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->username }}</td>
            <td>
                <a href="{{ route('admin.user.edit', $user->id) }}" style="color: #35A7FF;">Modifier</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

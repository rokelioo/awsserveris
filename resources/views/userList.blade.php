@include('base.htmlHead')
@include('base.header')

<table class="table" style="border-collapse: collapse; width: 90%; margin: 2% auto;">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">Email</th>
        <th scope="col">Level</th>
        <th scope="col">Last login</th>
        <th scope="col" colspan="2" style="text-align:center">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->surname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->level}}</td>
            <td>{{$user->last_login}}</td>
            <td><a href="#/{{$user->id}}">Edit</a></td>
            <td><a href="#/{{$user->id}}" class="text-danger">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

<table class="table bg-dark condary w-50 ml-5">
    <thead class="text-white">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Age</th>
        <th></th>
      </tr>
    </thead>
    <tbody class="text-primary">
      @foreach ($clients as $client)
          <tr>
            <th>{{$client->ID}}</th>
            <td>{{$client->name}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->age}}</td>
            <td><button><i class="fas fa-trash"></i></button></td>
          </tr>
      @endforeach
    </tbody>
  </table>
<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="px-4 sm:px-6 lg:px-8">

                <x-heading
                    title="Client"
                    description="A list of all the clients."
                    btn-label="Add Client"
                    :route="route('clients.create')" />

                

                    <table class="table-auto">
                      <a href="{{ route('clients.create') }}">CRIAR</a>
                        <thead>
                          <tr>
                            <th>Song</th>
                            <th>Artist</th>
                            <th>Year</th>
                          </tr>
                        </thead>
                    @foreach ($clients as $client)
                        <tbody>
                          <tr>
                            <td>{{ $client->user->name }}</td>
                            <td>{{ $client->user->email }}</td>
                            <td>{{ $client->address->city }}</td>
                            <td>{{ $client->address->state }}</td>
                          </tr>
                        </tbody> 
                    @endforeach
                       
                     </table>   
                     {{ $clients->links()}} 
                
        </div>
    </div>
</x-app-layout>
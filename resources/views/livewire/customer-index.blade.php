 <div class="card">
     <div class="card-header">
         <div class="card-tools">
             <a href="{{ url('create') }}" class="btn btn-sm btn-primary">Create</a>
         </div>
     </div>
     <div class="card-body">
         <div>
             @if (session()->has('message'))
                 <div class="alert alert-success">
                     {{ session('message') }}
                 </div>
             @endif
         </div>
         <table class="table">
             <thead>
                 <tr>
                     <th scope="col">#</th>
                     <th scope="col">Name</th>
                     <th scope="col">Email</th>
                     <th scope="col">Phone</th>
                     <th class="text-center" scope="col">Action</th>
                 </tr>
             </thead>
             <tbody>
                 @forelse ($customers as $index => $customer)
                     <tr>
                         <th scope="row">{{ $loop->iteration }}</th>
                         <td>{{ $customer->name }}</td>
                         <td>{{ $customer->email }}</td>
                         <td>{{ $customer->phone }}</td>
                         <td class="text-center">
                             <a wire:naviagate href="/view/{{ $customer->id }}" class="btn btn-sm btn-info">View</a>
                             <a href="{{ route('edit', $customer->id) }}" class="btn btn-sm btn-primary">Edit</a>
                             <button wire:click="delete({{ $customer->id }})"
                                 class="btn btn-sm btn-danger">Delete</button>
                         </td>
                     </tr>
                 @empty
                     <tr>
                         <td colspan="5">No customers available.</td>
                     </tr>
                 @endforelse
             </tbody>
         </table>
         {{-- {{ $customers->links() }} <!-- Pagination Links --> --}}
     </div>
 </div>

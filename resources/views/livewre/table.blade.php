<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Acton</th>
      
      </tr>
    </thead>
    <tbody>

        @foreach ($task as $key=> $task)
            
       
      <tr>
        <th >{{++$key}}</th>
        <td>{{$task->Name}}</td>
        <td>{{$task->price}}</td>
        <td>
            <a class="btn btn-success "><i class="las la-edit"></i></a>
              <a href="{{route('task.delete',$task->id)}}" class="btn btn-danger"><i class="las la-trash"></i></a>
              {{-- <button wire:click="delete({{$task->id}})" class="btn btn-danger"><i class="las la-trash"></i></a> --}}
        </td>
      </tr>

      @endforeach
    </tbody>
  </table>
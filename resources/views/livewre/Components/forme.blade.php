
  
  
  <!-- Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="{{route('task.save')}}" method="POST" >
        @csrf
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addModalLabel">Add Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="errMsgContainer mb-3" >
            </div>
            <div class="form-group">
                <label for="name">Product name</label>
                <input type="text" class="form-control" name="name" id="name"placeholder="Product Name" wire:model="name">
            </div>
            <div class="form-group mt-2">
                <label for="name">Product price</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Product Prce"wire:model="price">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button wire:click.prevent="submit()" class="btn btn-primary add_product">Save Product</button>
        </div>
      </div>
    </div>
</form>
  </div>
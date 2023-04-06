<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container pt-3">
            <button type="button" class="btn btn-primary text-dark" id="add_todo">  Add Product </button>
            <table class="table table-bordered mt-3">
                <thead class="bg-dark text-white">
                    <th>Sr.no</th>
                    <th>Name</th>
                    <th>category</th>
                    <th>price</th>
                    <th>Action</th>
                </thead>
                <tbody id="list_todo">
                    @foreach($product as $todo)
                      <tr id="row_todo_{{ $todo->id}}">
                          <td width="20">{{ $todo->id}}</td>
                          <td>{{ $todo->product_name}}</td>
                          <td>{{ $todo->category}}</td>
                          <td>{{ $todo->price}}</td>
                          <td width="200">
                              <a href="/show-detail/{{$todo->id}}"><button type="button" id="view" data-id="{{ $todo->id }}" class="btn btn-sm btn-info ml-1 text-dark">View</button></a>
                              <button type="button" id="edit_todo" data-id="{{ $todo->id }}" class="btn btn-sm btn-info ml-1 text-dark">Edit</button>

                              <button type="button" id="delete_todo" data-id="{{ $todo->id }}" class="btn btn-sm btn-danger ml-1 text-dark">Delete</button>
                          </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>


      </div>

        <!-- The Modal -->
        <div class="modal" id="modal_todo">
          <div class="modal-dialog">
            <div class="modal-content">
              <form id="form_todo">
                  <div class="modal-header">
                    <h4 class="modal-title" id="modal_title"></h4>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <label for="product_name">Product Name</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Enter Name ...">
                    <br>
                    {{-- <label for="category">category</label> --}}
                    {{-- <input type="text" name="category" id="category" class="form-control" placeholder="Enter todo ..."> --}}
                    <label for="category">category:</label>
                    <select class="form-select" name="category" aria-label="Default select example">
                        <option selected value="category">category</option>
                        <option value="category 1">category 1</option>
                        <option value="category 2">category 2</option>
                        <option value="category 3">category 3</option>
                      </select>
                    <br>
                    <label for="price">price</label>
                    <input type="number" name="price" id="price" class="form-control" placeholder="Enter price ...">
                    <br>
                    <label for="discount">discount</label>
                    <input type="number" name="discount" id="discount" class="form-control" placeholder="Enter price ...">
                    <br>
                    <label for="description">description</label>
                    <input type="text" name="description" id="description" class="form-control" placeholder="Enter description ...">
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-info text-dark">Submit</button>
                    <button type="button" class="btn btn-danger text-dark" data-dismiss="modal">Close</button>
                  </div>
              </form>

            </div>
          </div>
        </div>

      </div>
    </div>
</x-app-layout>

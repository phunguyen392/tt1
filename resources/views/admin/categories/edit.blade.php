<h1>Edit</h1>
<form method="post" action="{{ route('categories.update', $items->id) }}" enctype="multipart/form-data" >
@csrf
@method('PUT')
<label for="name" id="name">Name:</label>
<input type="text" name="name" value="{{ $items->name }}" >
<label for="description" id="description">Description:</label>Description:</label>
<input type="text" name="description" value="{{ $items->description }}" >
<label for="status" id="status" >Status</label>
<select>
    <option value="">--vui long chon--</option>
    <option value="" ></option> 
    
</select>
</form>
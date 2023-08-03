<!DOCTYPE html>
<html>
<head>
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
      
<div class="container">

    <h3 class="mt-5 mb-5 text-center"></h3>
  
    <form method="GET" class="mb-5">
        <div class="input-group mb-3">
            <input 
                type="text" 
                name="search" 
                value="{{ request()->get('search') }}" 
                class="form-control" 
                placeholder="Search..." 
                aria-label="Search" 
                aria-describedby="button-addon2">
            <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
        </div>
    </form>
  
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
</body>
    
</html>
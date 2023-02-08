<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Fields</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container p-5 m-5">
        <h1 class="fw-bold">Property</h1>
        <p>Edit a property.</p>
        <a href="{{ route('home') }}" class="btn btn-light btn-sm">← Go back</a>
        <div class="card py-5 px-4 mt-3">
            <form method="POST" action="{{ route('updateproperty') }}">
                @csrf
                <div class="mb-3">
                    <label for="unitNumber" class="form-label">Unit NUmber</label>
                    <input type="number" class="form-control" id="unitNumber" name="unitNumber" value="{{ $property->unitNumber }}" required>
                </div>
                <div class="mb-3">
                    <label for="user_id" class="form-label">Unit Owner</label>
                    <input type="number" class="form-control" id="user_id" name="user_id" value="{{ $property->user_id }}" required>
                </div>
                <input type="hidden" name="id" value="{{ $property->id }}">
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

</body>

</html>
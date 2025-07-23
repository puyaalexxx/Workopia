<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Jobs List</title>
</head>
<body>
<h1>{{$title}}</h1>
<ul>
    @forelse($jobs as $job)
        <li>{{ $job }}</li>
    @empty
        <li>No Jobs Found</li>
    @endforelse
</ul>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blog</title>
</head>
<body>
<x-app-layout>
    @if ($posts->count())
        <ul class="mt-10 space-y-10">
            @foreach ($posts as $post)
                <x-post-item :post="$post" />
            @endforeach
        </ul>
    @endif
</x-app-layout>
</body>
</html>
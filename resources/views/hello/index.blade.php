<html>
<head>
    <title>Hello/Index</title>
    <style>
    body {font-size:16pt; color:#999; }
    h1 {font-size:50pt; text-aline:right; color:#f6f6f6; margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
    </style>
</head>
<body>
    <h1>Blade/Index</h1>
    <p>&#064;forディレクティブの例</p>
    @foreach ($data as $item)
    @if ($loop->first)
        @continue
    @elseif ($i <= 20)
    <li>No,{{$i}}</li>
    @else
        @break
    @endif
    @endfor
    </ol>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eloquent Companies</title>

    <!-- CSS -->
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <style>
        body { padding-top:50px; } /* add some padding to the top of our site */
    </style>
</head>
<body class="container">
<div class="col-sm-8 col-sm-offset-2">

    <!-- loop over the bears and show off some things -->
    @foreach ($companies as $company)

            <!-- GET OUR BASIC BEAR INFORMATION -->
    <h2>{{ $company->name }} <small>{{ $company->address }}: Level {{ $company->phone }}</small></h2>

    <h4>Products</h4>
    @foreach ($company->products as $product)
        <p>{{ $product->name }}</p>
        @endforeach

        <h4>Categories</h4>
        @foreach ($company->categories as $category)
            <p>{{ $category->name }}: Industry {{ $category->industry }}</p>
        @endforeach

    @endforeach

</div>
</body>
</html>

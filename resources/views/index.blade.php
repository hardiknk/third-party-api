<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News api</title>
    <link rel="stylesheet" href=" {{ asset('js/bootstrap.min.css') }} ">
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/responsive.bootstrap.min.js') }}"></script>
</head>

<body>
    <div class="container">
        <h1 style="text-align: center">News Integration Using Third Party</h1>
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>

                    <th>Publish Date</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($news_data as $news)
                    @if ($news['author'])
                        <tr>
                            <td> {{ $news['author'] }} </td>
                            <td> {{ $news['title'] }} </td>
                            <td> {{ $news['description'] }} </td>
                            <td> <img src="{{ $news['urlToImage'] }}" width="100px" height="100px" alt="">
                            </td>
                            <td> {{ $news['publishedAt'] }} </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</body>
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            responsive: true
        });

        new $.fn.dataTable.FixedHeader(table);
    });
</script>

</html>

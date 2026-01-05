<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            background: #121212;
            border-radius: 12px;
            overflow: hidden;
            font-family: system-ui, sans-serif;
            box-shadow: 0 0 0 1px #1f1f1f;
        }

        thead {
            background: #181818;
        }

        th {
            text-align: left;
            padding: 14px 16px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            color: #9ca3af;
            border-bottom: 1px solid #262626;
        }

        td {
            padding: 14px 16px;
            font-size: 14px;
            color: #e5e7eb;
            border-bottom: 1px solid #1f1f1f;
        }

        tbody tr {
            transition: background 0.15s ease;
        }

        tbody tr:hover {
            background: #1a1a1a;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        td:nth-child(3) {
            font-weight: 600;
            color: #c7d2fe;
        }

        td:nth-child(5) {
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 0.05em;
            color: #a3e635;
        }

        td:nth-child(5):contains("no") {
            color: #f87171;
        }

        td:last-child {
            font-family: monospace;
            font-size: 13px;
            color: #9ca3af;
        }
    </style>
    @include('admin.form_style')
</head>

<body>
    @include('admin.header')

    <div class="d-flex align-items-stretch">
        @include('admin.sidebar')

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <table>
                        <thead>
                            <tr>
                                <th>Room Title</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Room Type</th>
                                <th>Free wi-fi</th>
                                <th>Image</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rooms as $room)
                            <tr>
                                <td>{{$room->room_title}}</td>
                                <td>{{$room->description}}</td>
                                <td>{{$room->price}}</td>
                                <td>{{$room->room_type}}</td>
                                <td>{{$room->wifi}}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $room->image) }}" width="60" alt="room image">
                                </td>
                                <td><a onclick="return confirm('Are you sure?');" class="btn btn-danger" href="{{url('delete_room', $room->id)}}">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        @include('admin.footer')
    </div>

    @include('admin.script')
</body>

</html>
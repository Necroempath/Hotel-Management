<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    @include('admin.form_style')
</head>

<body>
    @include('admin.header')

    <div class="d-flex align-items-stretch">
        @include('admin.sidebar')

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <div>
                        <form action="{{url('add_room')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="title">Room title</label>
                                <input type="text" id="title" name="title" placeholder="Enter room title">
                            </div>

                            <div>
                                <label for="description">Description</label>
                                <textarea name="description" id="description"></textarea>
                            </div>

                            <div>
                                <label for="price">Price</label>
                                <input type="text" id="price" name="price" placeholder="Enter price">
                            </div>

                            <div>
                                <label for="type">Room type</label>
                                <select name="type" id="type">
                                    <option selected value="regular">Regular</option>
                                    <option value="premium">Premium</option>
                                    <option value="deluxe">Deluxe</option>
                                </select>
                            </div>

                            <div>
                                <label for="wifi">Free Wi-fi</label>
                                <select name="wifi" id="wifi">
                                    <option selected value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div>
                                <label for="image">Upload image</label>
                                <input type="file" id="image" name="image">
                            </div>

                            <div>
                                <input class="btn btn-primary" type="submit" value="Add Room">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        @include('admin.footer')
    </div>

    @include('admin.script')
</body>

</html>
<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.adminCSS");
  </head>

  <body>

    <div class="container-scroller">

        @include("admin.navbar")

        <div style="position: relative; top: 60px; right; -150px">

            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div>
                    <label>Title</label>
                    <input style="color:black"; type="text" name="title" placeholder=
                    "Write a title" required>
                </div>

                <div>
                    <label>Price</label>
                    <input style="color:black"; type="num" name="price" placeholder=
                    "Price" required>
                </div>

                <div>
                    <label>Image</label>
                    <input type="file" name="image" required>
                </div>

                <div>
                    <label>Description</label>
                    <input style="color:black"; type="text" name="description" placeholder=
                    "Description" required>

                <div>
                    <input type="submit" value="Save" >
                </div>

                </div>

            </form>
        </div>

    </div>

        @include("admin.adminScript")

  </body>
</html>
